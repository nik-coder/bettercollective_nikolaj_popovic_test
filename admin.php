<?php
//add admin page
add_action( 'admin_menu', 'pfc_admin_menu' );

function pfc_admin_menu() {
	add_menu_page(
        esc_html__( 'Posts From Category', 'PFC' ),
        esc_html__( 'Posts From Category', 'PFC' ),
        'manage_options',
        'pfc-options',
        'pfc_options_page',
        'dashicons-editor-ul'
    );
}

function pfc_options_page(){

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'PFC' ) );
	}
	?>

	<div class="wrap about-wrap theme-info-wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

		<div class="about-text">
			<?php echo esc_html__( 'Plugin to display posts from a specific category.', 'PFC' ); ?>
		</div>

		<p>
			<a href="https://wordpress.org/support/plugin/posts-from-category/" class="button button-primary" target="_blank"><?php echo esc_html__( 'Support', 'PFC' ); ?></a>
			<a href="https://wordpress.org/support/plugin/posts-from-category/reviews/" class="button" target="_blank"><?php echo esc_html__( 'Leave a Review', 'PFC' ); ?></a>
			<a href="https://wphait.com/request-customization/" class="button" target="_blank"><?php echo esc_html__( 'Request Customization', 'PFC' ); ?></a>
		</p>

		<div class="feature-section has-2-columns alignleft">
			<div class="card">
				<h3><?php echo esc_html__( 'How to Use (Using Widget)', 'PFC' ); ?></h3>
				<ol>
					<li><?php echo esc_html__( 'Go to Appearance >> Widgets', 'PFC' ); ?></li>
					<li><?php echo esc_html__( 'Find MT: Posts From Category widget', 'PFC' ); ?></li>
					<li><?php echo esc_html__( 'Add the widget to the sidebar you want to use', 'PFC' ); ?></li>
					<li><?php echo esc_html__( 'Fill in the desired fields and we are good to go', 'PFC' ); ?></li>
				</ol>
			</div>

			<div class="card">
				<h3><?php echo esc_html__( 'How to Use (Using Shortcode)', 'PFC' ); ?></h3>
				<code>[pfc layout="layout-one" cat="0" order_by="date" order="DESC" post_number="5" length="10" readmore="Read More" show_date="true" show_image="true" image_size="full"]</code>
				<p><a href="https://wordpress.org/plugins/posts-from-category/" target="_blank"><?php echo esc_html__( 'Click here to see shortcode parameters', 'PFC' ); ?></a></p>
			</div>

			<div class="card">
				<h3><?php echo esc_html__( 'Recommended Plugins', 'PFC' ); ?></h3>
				<ol>
					<li><a href="https://wordpress.org/plugins/advanced-google-recaptcha/" target="_blank"><?php echo esc_html__( 'Advanced Google reCAPTCHA', 'PFC' ); ?></a></li>
					<li><a href="https://wordpress.org/plugins/admin-customizer/" target="_blank"><?php echo esc_html__( 'Admin Customizer', 'PFC' ); ?></a></li>
					<li><a href="https://wordpress.org/plugins/woocommerce-product-tabs/" target="_blank"><?php echo esc_html__( 'WooCommerce Product Tabs', 'PFC' ); ?></a></li>
					<li><a href="https://wordpress.org/plugins/post-grid-elementor-addon/" target="_blank"><?php echo esc_html__( 'Post Grid Elementor Addon', 'PFC' ); ?></a></li>
					<li><a href="https://wordpress.org/plugins/nifty-coming-soon-and-under-construction-page/" target="_blank"><?php echo esc_html__( 'Coming Soon & Maintenance Mode Page', 'PFC' ); ?></a></li>
				</ol>
			</div>

			<div class="card">
				<h3><?php echo esc_html__( 'Recommended Themes', 'PFC' ); ?></h3>
				<ol>
					<li><a href="https://wordpress.org/themes/hait/" target="_blank"><?php echo esc_html__( 'Hait - Google Core Web Vitals Optimized', 'PFC' ); ?></a></li>
				</ol>
			</div>
		</div>

	</div>
	<?php
}
