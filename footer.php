    <footer>
        <div class="container py-5">
            <div class="d-flex flex-row justify-content-between">
                <div class="text-center col">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <div class="text-center col">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <div class="text-center col">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
            </div>
        </div>
        <div class="copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <?php echo get_theme_mod( 'aade_copyright_textbox', 'Copyright &copy; ' . date( 'Y' ) . ' All Rights Reserved.' ); ?>
                            <a href="<?php echo esc_url( __( 'https://cooltimedia.com/', 'aade' ) ); ?>" target="_blank" rel="nofollow noreferrer">
                            <?php
                            printf( esc_html__( 'Developed by %s', 'aade' ), 'Cooltimedia' );
                            ?>
                        </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>