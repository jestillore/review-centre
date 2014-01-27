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

		<?php $options = get_option($this->plugin_slug); ?>

		<table>
			<tr>
				<td>Google: </td>
				<td><input type="text" name="<?php echo $this->plugin_slug; ?>[google]" value="<?php echo $options['google']; ?>" /></td>
			</tr>
			<tr>
				<td>Yellow Pages: </td>
				<td><input type="text" name="<?php echo $this->plugin_slug; ?>[yellow_pages]" value="<?php echo $options['yellow_pages']; ?>" /></td>
			</tr>
			<tr>
				<td>Superpages: </td>
				<td><input type="text" name="<?php echo $this->plugin_slug; ?>[super_pages]" value="<?php echo $options['super_pages']; ?>" /></td>
			</tr>
			<tr>
				<td>Insiderpages: </td>
				<td><input type="text" name="<?php echo $this->plugin_slug; ?>[insider_pages]" value="<?php echo $options['insider_pages']; ?>" /></td>
			</tr>
			<tr>
				<td>Yelp: </td>
				<td><input type="text" name="<?php echo $this->plugin_slug; ?>[yelp]" value="<?php echo $options['yelp']; ?>" /></td>
			</tr>
		</table>

		<?php echo submit_button(); ?>

	</form>

</div>
