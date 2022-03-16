<?php
    $categories = get_the_category();
    $category_link = get_category_link($categories[0]->cat_ID);
?>

<div class="blog-post">
    <p class="blog-post-meta"><?php the_date(); ?> - <a href="<?= $category_link ?>"><?= $categories[0]->cat_name ?></a> </p>
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <p>
        <?php the_excerpt(); ?>
    </p>

    <a class="continue-reading-link" href="<?php the_permalink(); ?>">Continue reading...</a>
    <hr />

</div>