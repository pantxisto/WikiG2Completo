<?php
/* Smarty version 3.1.32, created on 2018-10-19 13:20:59
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc9be1b439508_65339648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1539945096,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5bc9be1b439508_65339648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://10.9.52.105/prestashop/index.php?controller=my-account" rel="nofollow">
      A túa conta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">A túa conta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://10.9.52.105/prestashop/index.php?controller=identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
            <li>
          <a href="http://10.9.52.105/prestashop/index.php?controller=history" title="Encomendas" rel="nofollow">
            Encomendas
          </a>
        </li>
            <li>
          <a href="http://10.9.52.105/prestashop/index.php?controller=order-slip" title="Abonos" rel="nofollow">
            Abonos
          </a>
        </li>
            <li>
          <a href="http://10.9.52.105/prestashop/index.php?controller=addresses" title="Enderezos" rel="nofollow">
            Enderezos
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
