<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Review_Centre
 * @author    Jillberth Estillore <contact@jillberthestillore.com>
 * @license   GPL-2.0+
 * @link      http://www.jillberthestillore.com
 * @copyright 2014 Jillberth Estillore
 */

?>

<div class="wrap">

	<?php echo screen_icon(); ?>

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<form action="options.php" method="post">

		<?php settings_fields('review_centre_options'); ?>

		<?php do_settings_sections($this->plugin_slug); ?>

		<?php submit_button(); ?>

	</form>

</div>
