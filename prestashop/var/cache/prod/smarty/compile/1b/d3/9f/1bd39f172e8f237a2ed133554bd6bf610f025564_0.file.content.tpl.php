<?php
/* Smarty version 3.1.32, created on 2018-10-19 12:53:27
  from '/var/www/html/prestashop/admin2018z7sjm/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc9b7a717f0a0_62920438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bd39f172e8f237a2ed133554bd6bf610f025564' => 
    array (
      0 => '/var/www/html/prestashop/admin2018z7sjm/themes/new-theme/template/content.tpl',
      1 => 1539945095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9b7a717f0a0_62920438 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
