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

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<form action="" method="post">

		Hello, World!

		<?php echo submit_button(); ?>

	</form>

	<!-- @TODO: Provide markup for your options page here. -->

</div>
