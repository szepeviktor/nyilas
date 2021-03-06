#!/bin/sh

GH_REPO="../nyilas-gh-pages"

declare -a PAGES=(
    index.php
    contact.php
    gallery-list.php
    offer.php
    static.php
)
declare -A LINKS=()
declare -i SLASHES

# Halt on all errors
set -e

# Find links
for PAGE in ${PAGES[*]}; do
    if [ "${PAGE%index.php}" = "$PAGE" ]; then
        LINK="${PAGE%.php}"
        BASE="../"
    else
        # An index.php
        LINK="${PAGE%index.php}"
        [ -z "$LINK" ] && LINK="."
        BASE="./"
    fi
    SLASHES="$(grep -c "/" <<< "$LINK" || true)"
    for PARENT in $(seq 1 "$SLASHES"); do
        BASE="../${BASE}"
    done

    echo "$PAGE -> ${LINK}/index.html"

    mkdir -p "${GH_REPO}/${LINK}" 2> /dev/null || true
    php "$PAGE" > "${GH_REPO}/${LINK}/index.html"
    # Links are relative from /
    sed -i -e "s;<title>;<base href='${BASE}'>\n<title>;g" "${GH_REPO}/${LINK}/index.html"

    LINKS+=( [${PAGE}]="$LINK" )
done

# Generate HTML
for LINK in "${!LINKS[@]}"; do
    for PAGE in "${!LINKS[@]}"; do
        # Replace all *.php links
        sed -i -e "s;\b${LINK}\b;${LINKS[$LINK]}/;g" "${GH_REPO}/${LINKS[$PAGE]}/index.html"
    done
done

# Copy static files
tar -c --exclude="*.php" --exclude="*.scss" --exclude="/*.git/*" --exclude="generate.sh" * \
    | tar -x -C "${GH_REPO}/"

echo "OK."
