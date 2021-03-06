<?php get_header(); ?>

<section class="categories">
        <div class="category-item" style="background-image: url(<?php echo get_theme_file_uri('images/leisure.jpg');?>);">
            <div class="category-item-inner">
                <a href="#" class="category-item-link" id="open-leisure">
                    <div>
                        Leisure
                    </div>
                </a>
            </div>
        </div>
        <div class="category-item" style="background-image: url(<?php echo get_theme_file_uri('images/about-me1.jpg') ?>);">
            <div class="category-item-inner">
                <a href="<?php echo site_url('/about-me'); ?>" class="category-item-link">
                    <div>
                        About Me
                    </div>
                </a>
            </div>
        </div>

        <div class="category-item" style="background-image: url(<?php echo get_theme_file_uri('images/home-banner.jpg')?>);">
            <div class="category-item-inner">
                <a href="<?php echo site_url('/contact');?>" class="category-item-link">
                    <div>
                       Contact Me
                    </div>
                </a>
            </div>
        </div>
        <div
            class="category-item"
            style="background-image: url(<?php echo get_theme_file_uri('images/portfolio.jpg'); ?>);"
        >
            <div class="category-item-inner">
                <a href="<?php echo site_url('/old/web.html');?>" class="category-item-link">
                    <div>
                       My Works
                    </div>
                </a>
            </div>
        </div>
        <div
            class="category-item"
            style="background-image: url(<?php echo get_theme_file_uri('images/designs.jpg'); ?>);"
        >
            <div class="category-item-inner">
                <a href="<?php echo site_url('/works');?>" class="category-item-link">
                    <div>
                       Design Process
                    </div>
                </a>
            </div>
        </div>

    </section>
    <h2 class="featured-products-title" style="min-height:200px;">
       Coming soon...
    </h2>



    <h3 class="featured-products-subtitle">
        <a href="<?php echo site_url('/old/web.html'); ?>">View my old content</a>
    </h3>

    <section class="section-areas">
            <ul class="areas-container">
                <li class="area">

                </li>
            </ul>
    </section>

<?php get_footer();

?>
