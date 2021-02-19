<?php global $Pass; ?>
<div id="blog" class="betty-home-blog">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <h2 class="betty-heading">Latest News</h2> <span class="heading-meta">Read about latest health trends</span>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'blog', //投稿記事
                'posts_per_page' => 3, //記事数
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="blog-entry">
                            <a href="post.html" class="blog-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt=""></a>
                            <div class="desc"> <span><a href="#"><?php the_category(); ?></a></span>
                                <h4><a href="post.html"><?php the_title(); ?></a></h4> <span class="text-right"><a href="#"><?php echo get_post_time("M j, Y") ?></a></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <div class="col-md-4">
                <div class="blog-entry">
                    <a href="post.html" class="blog-img"><img src="<?php echo $Pass ?>/assets/images/600x400.jpg" class="img-fluid" alt=""></a>
                    <div class="desc"> <span><a href="#">Makeup</a></span>
                        <h4><a href="post.html">Hair Accessories You Should Try</a></h4> <span class="text-right"><a href="#">Dec 29, 2021</a></span>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="btn btn-contact"><a href="blog.html">All Blog Post</a></p>
            </div>
        </div>
    </div>
</div>