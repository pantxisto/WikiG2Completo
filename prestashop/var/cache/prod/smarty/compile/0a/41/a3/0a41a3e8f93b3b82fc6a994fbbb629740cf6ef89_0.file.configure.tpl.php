<?php
/* Smarty version 3.1.32, created on 2018-10-19 13:12:05
  from '/var/www/html/prestashop/admin2018z7sjm/themes/default/template/controllers/modules/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc9bc05c25455_97522725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a41a3e8f93b3b82fc6a994fbbb629740cf6ef89' => 
    array (
      0 => '/var/www/html/prestashop/admin2018z7sjm/themes/default/template/controllers/modules/configure.tpl',
      1 => 1539945095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9bc05c25455_97522725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8896841985bc9bc05c0a754_91302997', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12981169295bc9bc05c0d678_85472193', 'pageBreadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1600896825bc9bc05c12755_60700011', 'toolbarBox');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "page_header_toolbar.tpl");
}
/* {block 'pageTitle'} */
class Block_8896841985bc9bc05c0a754_91302997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_8896841985bc9bc05c0a754_91302997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="page-title">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

</h2>
<h4 class="page-subtitle"><?php echo $_smarty_tpl->tpl_vars['module_display_name']->value;?>
</h4>
<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'pageBreadcrumb'} */
class Block_12981169295bc9bc05c0d678_85472193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageBreadcrumb' => 
  array (
    0 => 'Block_12981169295bc9bc05c0d678_85472193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="breadcrumb page-breadcrumb">
	<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'] != '') {?>
		<li class="breadcrumb-current">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'] ));?>

		</li>
	<?php }?>
	<li><?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
</li>
	<li>
		<i class="icon-wrench"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

	</li>
</ul>
<?php
}
}
/* {/block 'pageBreadcrumb'} */
/* {block 'toolbarBox'} */
class Block_1600896825bc9bc05c12755_60700011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbarBox' => 
  array (
    0 => 'Block_1600896825bc9bc05c12755_60700011',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
	var header_confirm_reset = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm reset','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>
';
	var body_confirm_reset = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Would you like to delete the content related to this module ?','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>
';
	var left_button_confirm_reset = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No - reset only the parameters','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>
';
	var right_button_confirm_reset = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes - reset everything','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<div class="page-bar toolbarBox">
	<div class="btn-toolbar">
		<ul class="nav nav-pills pull-right">
			<li>
				<a id="desc-module-back" class="toolbar_btn" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'sf','route'=>'admin_module_manage'),$_smarty_tpl ) );?>
">
					<i class="process-icon-back"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<!-- <li>
				<a id="desc-module-disable" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_disable_link']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
">
					<i class="process-icon-off"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<li>
				<a id="desc-module-uninstall" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_uninstall_link']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uninstall'),$_smarty_tpl ) );?>
">
					<i class="process-icon-uninstall"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uninstall'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<li>
				<a id="desc-module-reset" class="toolbar_btn <?php if ($_smarty_tpl->tpl_vars['is_reset_ready']->value) {?>reset_ready<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['module_reset_link']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset'),$_smarty_tpl ) );?>
">
					<i class="process-icon-reset"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset'),$_smarty_tpl ) );?>
</div>
				</a>
			</li> -->
			<?php if (isset($_smarty_tpl->tpl_vars['trad_link']->value)) {?>
			<li>
				<a id="desc-module-translate" data-toggle="modal" data-target="#moduleTradLangSelect" class="toolbar_btn" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Translate'),$_smarty_tpl ) );?>
">
					<i class="process-icon-flag"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Translate','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['module_update_link']->value)) {?>
			<li>
				<a id="desc-module-update" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_update_link']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update'),$_smarty_tpl ) );?>
">
					<i class="process-icon-refresh"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check update','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['module_rtl_link']->value)) {?>
			<li>
				<a id="desc-module-rtl" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_rtl_link']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate RTL Stylesheets'),$_smarty_tpl ) );?>
">
					<i class="process-icon-rtl"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RTL Module','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
			<li>
				<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_hook_link']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage hooks'),$_smarty_tpl ) );?>
">
					<i class="process-icon-anchor"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage hooks','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
		</ul>
	</div>
</div>


<?php
}
}
/* {/block 'toolbarBox'} */
}
