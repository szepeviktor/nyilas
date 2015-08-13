<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="news-box-holder">
			<div class="news-box-img hidden-xs">
				<img src="<?php echo $input[rand(0, 11)]; ?>" alt="plchldr_img" class="img-responsive"/>
			</div>
			<div class="news-box-text">
				<h3>News title here</h3>
				<div class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, accusamus, ad aliquid animi aut corporis deserunt dolorem dolores error eum eveniet ex impedit iure libero nostrum officiis perferendis placeat porro praesentium quaerat similique, soluta tenetur totam voluptates voluptatum. Autem consectetur iusto praesentium qui? Delectus ea incidunt maiores nihil quibusdam reiciendis!</div>
			</div>

			<?php if(rand(0,1)): ?>
			<div class="event-btn"><a href="#">Random text</a></div>
			<?php endif ?>

			<div class="more-btn"><a href="#">Tovább</a></div>
		</div>
	</div>
</div>