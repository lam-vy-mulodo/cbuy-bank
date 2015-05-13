<?php /* Smarty version 3.1.23, created on 2015-05-12 06:43:39
         compiled from "C:/xampp/htdocs/cbuy.com/fuel/app/views/users/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3216555184fb4d54f0_37665404%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eb0b7cf80801551e3507bd1180e38a5379ec0fe' => 
    array (
      0 => 'C:/xampp/htdocs/cbuy.com/fuel/app/views/users/footer.tpl',
      1 => 1431405808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3216555184fb4d54f0_37665404',
  'variables' => 
  array (
    'js_asset_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_555184fb5676b4_86917955',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_555184fb5676b4_86917955')) {
function content_555184fb5676b4_86917955 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3216555184fb4d54f0_37665404';
?>
	<!-- FOOTER -->
		<footer>
			<p class="pull-right">
				<a href="#">Back to top</a>
			</p>
			<p>
				&copy; 2015 V Company, Inc. &middot; <a href="#">Privacy</a>
				&middot; <a href="#">Terms</a>
			</p>
		</footer>
</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
   
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_asset_url']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_asset_url']->value;?>
/vendor/holder.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_asset_url']->value;?>
/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
    
  </body>
</html>
<?php }
}
?>