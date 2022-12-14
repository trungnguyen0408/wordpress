<?php

/**
 * Blog Section
 * 
 * @package JobScout
 */

$blog_heading = get_theme_mod('blog_section_title', __('NEWEST BLOG ENTRIES', 'jobscout'));
$sub_title    = get_theme_mod('blog_section_subtitle', __('', 'jobscout'));
$blog         = get_option('page_for_posts');
$label        = get_theme_mod('blog_view_all', __('See More Posts', 'jobscout'));
$hide_author  = get_theme_mod('ed_post_author', false);
$hide_date    = get_theme_mod('ed_post_date', false);
$ed_blog      = get_theme_mod('ed_blog', true);

$args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 3,
    'ignore_sticky_posts' => true
);

$qry = new WP_Query($args);

if ($ed_blog && ($blog_heading || $sub_title || $qry->have_posts())) { ?>
    <section id="blog-section" class="article-section">
        <div class="container">
            <?php
            if ($blog_heading) echo '<h1 class="section-title">' . esc_html($blog_heading) . '</h1>';
            if ($sub_title) echo '<div class="section-desc">' . wpautop(wp_kses_post($sub_title)) . '</div>';
            ?>

            <?php if ($qry->have_posts()) { ?>
                <div class="article-wrap">
                    <?php
                    while ($qry->have_posts()) {
                        $qry->the_post(); ?>
                        <article class="post style-card">
                            <figure class="post-thumbnail img-card">
                                <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('jobscout-blog', array('itemprop' => 'image'));
                                    } else {
                                        jobscout_fallback_svg_image('jobscout-blog');
                                    }
                                    ?>
                                </a>
                            </figure>
                            <header class="entry-header title-card">
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="entry-meta">
                                    <p><?php
                                        if (the_title('', '', false) === 'Project Development' || the_title('', '', false) === 'Hospitality Consulting') {
                                            echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum distinctio iure voluptatem delectus aliquam sapiente officiis molestiae nobis, perspiciatis.';
                                        } else {
                                            echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corrupti necessitatibus Placeat corrupti necessitatibu placeat corrupti necessitatibu ipsum, nostrum quod, eius!';
                                        }
                                        ?></p>

                                    <?php
                                    if (!$hide_date) jobscout_posted_on();
                                    ?>
                                </div>
                            </header>
                        </article>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div><!-- .article-wrap -->

                <?php if ($blog && $label) { ?>
                    <div class="btn-wrap">
                        <a href="<?php the_permalink($blog); ?>" class="btn"><?php echo esc_html($label); ?></a>
                    </div>
                <?php } ?>

            <?php } ?>
        </div>
    </section>
<?php
}
