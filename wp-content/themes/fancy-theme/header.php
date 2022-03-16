<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row px-4 justify-content-center">
            <header class="col-lg-3 pt-4">
                <div class="lg-fixed">
                    <h1 class="title-brand"><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                    <p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>
                    <div id="social-test">
                        <ul class="social">
                            <li><a href="<?php echo get_option('twitter'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></a></i></li>
                            <li><a href="<?php echo get_option('linkedin'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></a></i></li>
                            <li><a href="<?php echo get_option('github'); ?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></a></i></li>
                            </li>
                        </ul>
                    </div>
                    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                        <div class="row no-gutters mx-0">
                            <div class="col-lg-7 col-9 px-0">
                                <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
                                <input type="search" class="form-control search_input" placeholder="<?php echo esc_attr_x('Looking for...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
                            </div>
                            <div class="col-3 col-lg-2 px-0">
                                <input type="submit" class="btn btn-primary search_btn" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
                            </div>
                        </div>
                    </form>

                </div>
            </header>