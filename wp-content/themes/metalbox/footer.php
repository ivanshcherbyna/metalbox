</div>
<!-- footer -->

			<footer class="mb-footer footer" role="contentinfo">
                <div class="footer-inner">
                    <div class="mb-content-layout">
                        <div class="mb-content-layout-row responsive-layout-row-2">

                            <?php wp_nav_menu(array(
                                    'menu'=>6,
                                    'menu_id' => 'id-footer-menu',
                                    'menu_class' => 'footer-menu',
                                    'container_class' => 'mb-layout-cell layout-item-0',)
                                ); ?>

                            <div class="mb-layout-cell layout-item-0" style="width: 50%">
                                <span style="color: #FF530F;"><span style="font-weight: bold;">Тел.:</span> (067) 610-01-21, (<span class="wmi-callto">067) 612-39-59</span></span><br><span style="color: #FF530F;"><span style="font-weight: bold;">Факс:</span> (061)&nbsp;239-62-07</span><br><span style="color: #FF530F;"><span style="font-weight: bold;">E-mail:</span> ZAPSTAL@UKR.NET</span>
                            </div>
                        </div>
                    </div>
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', THEME_OPT); ?>
					<a href="mailto:vanjok137@gmail.com" title="Ivan">Scherbyna Ivan</a>.
				</p>
				<!-- /copyright -->
                </div>
			</footer>
			<!-- /footer footer-bg -->


		<?php wp_footer(); ?>
	</body>
</html>
