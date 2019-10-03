<!--begin footer-->

<footer class="footer">
                <div class="footer_logo">
                    <a href="#">
                        <img src="assets/img/logo_footer.svg" alt="logo_footer" class="img-fluid">
                    </a>
                </div>
                <div class="footer_menu">
                <?php wp_nav_menu( [
                    'theme_location'  => 'bottom', 
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
                <div class="copyright">
                    <span>@returnhandler 2019</span>
                </div>
            </footer>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>