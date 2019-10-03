<?php get_header(); ?>

<header class="header blog">
                        <header>
                            <div class="bg">
                                <div class="mbox">
                                    <div class="fixedblock">
                                        <div class="header_logo">
                                        <?php 
                                        if( has_custom_logo( $blog_id ) ){
                                            the_custom_logo();
                                        }else{
                                        ?>
                                        <a href="<?php bloginfo('url'); ?>">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo" class="img-fluid">
                                        </a>
                                        <?php }?>
                                        </div>
                                        <div class="btn-menu">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="navbar">
                                            <div class="header_menu">
                                            <?php wp_nav_menu( [
                                                'theme_location'  => 'top', 
                                                'container'       => null, 
                                                'container_class' => null, 
                                                'container_id'    => null,
                                                'menu_class'      => 'menu', 
                                                'menu_id'         => null,
                                                'echo'            => true,
                                                'fallback_cb'     => 'wp_page_menu',
                                                'before'          => '',
                                                'after'           => '',
                                                'link_before'     => '',
                                                'link_after'      => '',
                                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth'           => 0,
                                                'walker'          => '',
                                            ] ); ?>
                                            </div>
                                            <div class="header_btn">
                                                <a href="form.html">Request Invite</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                </header>

            <!--end header-->


            <!-- main-->
            <main>
                <section class="single">
                    <div class="thumbnail">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/post4.png" alt="thumbnail">
                    </div>
                    <div class="mbox">
                        <div class="box">
                            <div class="date_categories">
                                <span>SEP 16 • NEWS</span>
                            </div>
                            <div class="single_title section-title">
                                <h1>Sed ut perspiciatis unde omnis iste natus error</h1>
                            </div>
                            <div class="single_content">
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/post5.png" alt="post" class="img-fluid"> 
                            </div>
                            <div class="title">
                                <h2>Perspiciatis unde </h2>
                            </div>
                            <div class="single_content">
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliqua.</p>
                            </div>
                            <div class="share">
                                <span>Share: 
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/facebook.svg" alt="facebook">
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/twitter.svg" alt="twitter">
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/linkedin-logo.svg" alt="linkedin-logo">
                                    </a>
                                </span>
                                <span class="buttons">
                                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/prev.svg" alt="">Prev</a>
                                    <a href="#">Next <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/next.svg" alt=""></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!--end main-->
<?php get_footer() ?>