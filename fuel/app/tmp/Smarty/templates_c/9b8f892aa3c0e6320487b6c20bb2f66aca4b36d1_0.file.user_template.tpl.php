<?php /* Smarty version 3.1.23, created on 2015-05-12 08:39:36
         compiled from "C:/xampp/htdocs/cbuy.com/fuel/app/views/user_template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210055551a028d05d51_28544544%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b8f892aa3c0e6320487b6c20bb2f66aca4b36d1' => 
    array (
      0 => 'C:/xampp/htdocs/cbuy.com/fuel/app/views/user_template.tpl',
      1 => 1431412547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210055551a028d05d51_28544544',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_5551a028d812d5_42777100',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5551a028d812d5_42777100')) {
function content_5551a028d812d5_42777100 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '210055551a028d05d51_28544544';
echo $_smarty_tpl->getSubTemplate ("users/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("users/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<?php }
}
?>