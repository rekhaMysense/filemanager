<?php if ( ! defined( 'ABSPATH' ) ) exit;
global $wpdb; ?>
<div class="wrap wp_file_manager_gopro">
<h1><?php _e('File Manager PRO Git - Please add your order details below. If Not <a href="https://filemanagerpro.io/product/file-manager-git/" target="_blank" class="page-title-action" title="click to buy Licence Key">Buy Now</a>', 'wp-file-manager-git');?></h1>
<?php
if(isset($_POST['verify_wp_file_manager_git_plugin']))
{	
   $this->verify($_POST['orderid'], $_POST['licenceKey'], $_GET['page']);
}
	?>
<div class="container">
<form id="verifyfilemanager" method="post" name="verifyfilemanager" action="">
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label for="orderid"><?php _e('ORDER ID (#) *', 'wp-file-manager-git');?></label></th>
<td><input type="text" class="regular-text" value="" id="orderid" name="orderid" required="required"><p id="tagline-description" class="description"><?php _e('Please Check Your email for order ID.', 'wp-file-manager-git');?></p></td>
</tr>
<tr>
<th scope="row"><label for="licenceKey"><?php _e('LICENCE KEY *', 'wp-file-manager-git');?></label></th>
<td><input type="text" class="regular-text" value="" id="licenceKey" name="licenceKey" required="required"><p id="tagline-description" class="description"><?php _e('Please Check Your email for Licence Key.', 'wp-file-manager-git');?></p></td>
</tr>
</tbody>
</table>
<input type="submit" value="Click To Verify" class="button button-primary button-large" name="verify_wp_file_manager_git_plugin">
</form>
<?php $this->error('Note: If you have already purchased this plugin then please check your email. You must have got an Email with orders details in your email, if you didn\'t get any Email. Please contact us at <a href="https://filemanagerpro.io/contact/">https://filemanagerpro.io/contact/</a>', 'wp-file-manager-git');?>
</div>
</div>