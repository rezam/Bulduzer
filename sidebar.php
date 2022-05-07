<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bulduzer
 */

?>
<div class="sidebar">
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<?php dynamic_sidebar('sidebar-1'); ?>
</div>
<?php endif;
