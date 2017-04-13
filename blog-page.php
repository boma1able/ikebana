<!-- Template name: blog -->


<?php get_header();?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="blog-page">
                    <div class="col-md-8">
                        <div class="content">
                            <div class="post-content">

                                <?php
                                global $post;
                                $args = array(
                                    //'offset' => 1,
                                    'posts_per_page' => '5'
                                );

                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ){ setup_postdata($post);
                                    ?>

                                    <a href="<?php echo get_permalink();?>"><h2><?php the_title(); ?></h2></a>
                                    <a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
                                    <div class="excerpt"><?php the_excerpt(); ?></div>

                                    <div class="info">
                                        <div class="date"><?php echo get_the_date($d, $post);?></div>
                                        <div class="author"><?php the_author_posts_link();?></div>
                                        <div class="categories"><?php echo the_category(', ');?></div>
                                        <div class="comments">
                                            <a href="<?php the_permalink() ?>#comments">
                                                <?php comments_number('no comments', '1 comment', '% comments'); ?>
                                            </a>
                                        </div>
                                    </div>

                                    <?php
                                }
                                wp_reset_postdata();
                                ?>

                                <?php
                                $args = array(
                                    'show_all'     => false, // показаны все страницы участвующие в пагинации
                                    'end_size'     => 1,     // количество страниц на концах
                                    'mid_size'     => 1,     // количество страниц вокруг текущей
                                    'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                                    'prev_text'    => __('« Previous'),
                                    'next_text'    => __('Next »'),
                                    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                                    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                                    'screen_reader_text' => __( 'Posts navigation' ),
                                );

                                the_posts_pagination($args);
                                ?>

                                <?php the_posts_pagination(); ?>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<?php get_footer();?>