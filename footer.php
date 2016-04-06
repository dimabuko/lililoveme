<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer_links footer_links_col1"><?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?></div>

		<div class="footer_links footer_links_col2"><?php wp_nav_menu( array( 'theme_location' => 'footery' ) ); ?></div>
		
		<div class="footer_navigation_thirdcolumn">© 2016 — Lililove.me<br /><br />
		Сервис разработан в Республике Беларусь ИП Подоляк Н.В. Свидетельство о регистрации Мингорисполкома от 13 октября 2014 в Едином государственном регистре юридических лиц и индивидуальных предпринимателей №192358340<br />Наш адрес: Республика Беларусь, Минск, ул.Бельского, д.10, к.15<br />Время работы: 9:00—18:00, без выходных<br />
<a href="/contacts/">Реквизиты и контактная информация</a>
		</div>

		<div class="footer_navigation_paymentlogos"><br /><img src="http://lililove.me/wp-content/uploads/2016/03/payment_logos.png" /><br /><br />Платежи принимаются через <a href="http://webpay.by" target="_blank">систему интернет-платежей «Веб Пэй»</a><br /><a href="/payment/">Подробнее об оплате и возврате</a></div>

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>