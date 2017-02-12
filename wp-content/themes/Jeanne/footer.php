            <footer class="row center-xs footer">
                <p>Le footer.</p>
            </footer>
        <!-- end .global-container__wrapper     -->
        </div>
    <!-- end .global-container  -->
    </div>
        <?php wp_footer(); ?>
        <?php if(WP_ENV=="dev") { ?>
        <script src="<?= get_stylesheet_directory_uri() ?>/js/app.js"></script>
        <?php } else if (WP_ENV=="prod") { ?>
        <script src="<?= get_stylesheet_directory_uri() ?>/js/app.min.js"></script>
        <?php } ?>
    </body>
</html>
