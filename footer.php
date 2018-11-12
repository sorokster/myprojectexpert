<?php if ( is_front_page() ) : ?>
    <footer class="footer">
        <div class="container">
            <div class="foot">
                <div class="foot__row foot__row--labels">
                    <ul class="list">
                        <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" alt=""></li>
                        <li class="list__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-appstore.png" alt=""></li>
                        <li class="list__item">
                            <span><?php echo __('We accept:'); ?></span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-banking.png" alt="">
                        </li>
                    </ul>
                </div>
                <div class="foot__row foot__row--info">
                    <ul class="list">
                        <li class="list__item">
                            <span>Email: </span>
                            <a href="mailto:<?php echo get_theme_mod('setting_info_email'); ?>" class="list__link"><?php echo get_theme_mod('setting_info_email'); ?></a>				
                        </li>
                        <li class="list__item">
                            <span>Phone: </span>
                            <a href="tel:<?php echo get_theme_mod('setting_info_phone'); ?>" class="list__link"><?php echo get_theme_mod('setting_info_phone'); ?></a>				
                        </li>
                        <li class="list__item">
                            <span>Warranties: </span>			
                        </li>
                    </ul>
                </div>
                <div class="foot__row foot__row--about">
                    <div class="description"><?php dynamic_sidebar('footer-info'); ?></div>
                    <span class="copyright"><?php dynamic_sidebar('footer-copyright'); ?></span>
                </div>
            </div>
        </div>
    </footer>
<?php else: ?>
    <footer class="footer footer--dark">
        <div class="container">
            <div class="foot foot--nav">
                <ul class="list">
                    <li class="list__item">
                        <a class="list__link" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">Terms</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">Contact Support</a>
                    </li>
                    <li class="list__item">
                        <span>2018@Edusson.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
