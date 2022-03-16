<?php
    $categories = get_the_category();
    $category_link = get_category_link($categories[0]->cat_ID);
?>
<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	
	<p class="blog-post-meta meta-single"><?php the_date(); ?> - <a href="<?= $category_link ?>"><?= $categories[0]->cat_name ?></a> </p>

	<div class="the-content">
		<?php the_content(); ?>
	</div>
</div>