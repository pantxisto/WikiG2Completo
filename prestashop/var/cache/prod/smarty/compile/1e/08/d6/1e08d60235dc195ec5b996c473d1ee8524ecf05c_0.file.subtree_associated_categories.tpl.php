<?php
/* Smarty version 3.1.32, created on 2018-10-19 13:38:08
  from '/var/www/html/prestashop/admin2018z7sjm/themes/default/template/helpers/tree/subtree_associated_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc9c22042e150_11066001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e08d60235dc195ec5b996c473d1ee8524ecf05c' => 
    array (
      0 => '/var/www/html/prestashop/admin2018z7sjm/themes/default/template/helpers/tree/subtree_associated_categories.tpl',
      1 => 1539945095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9c22042e150_11066001 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
<?php if (isset($_smarty_tpl->tpl_vars['selected_categories']->value) && !empty($_smarty_tpl->tpl_vars['selected_categories']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('imploded_selected_categories', implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value));?>
	var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').tree('collapseAll');
	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').find(":input").each(
		function()
		{
			if ($.inArray($(this).val(), selected_categories) != -1)
			{
				$(this).prop("checked", true);
				$(this).parent().addClass("tree-selected");
				$(this).parents("ul.tree").each(
					function()
					{
						$(this).children().children().children(".icon-folder-close")
							.removeClass("icon-folder-close")
							.addClass("icon-folder-open");
						$(this).show();
					}
				);
			}
		}
	);
<?php }
echo '</script'; ?>
>
<?php }
}
