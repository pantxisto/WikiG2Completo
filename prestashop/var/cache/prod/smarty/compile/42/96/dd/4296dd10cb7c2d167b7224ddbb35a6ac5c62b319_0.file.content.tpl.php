<?php
/* Smarty version 3.1.32, created on 2018-10-19 12:48:27
  from '/var/www/html/prestashop/admin2018z7sjm/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc9b67ba485f1_02554547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4296dd10cb7c2d167b7224ddbb35a6ac5c62b319' => 
    array (
      0 => '/var/www/html/prestashop/admin2018z7sjm/themes/default/template/content.tpl',
      1 => 1539945095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9b67ba485f1_02554547 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}