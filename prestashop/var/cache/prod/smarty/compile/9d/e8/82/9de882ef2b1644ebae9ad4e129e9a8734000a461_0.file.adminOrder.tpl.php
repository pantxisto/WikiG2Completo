<?php
/* Smarty version 3.1.32, created on 2018-10-19 13:12:17
  from '/var/www/html/prestashop/modules/correos/views/templates/hook/adminOrder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc9bc11f25cc3_36909668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9de882ef2b1644ebae9ad4e129e9a8734000a461' => 
    array (
      0 => '/var/www/html/prestashop/modules/correos/views/templates/hook/adminOrder.tpl',
      1 => 1539947502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9bc11f25cc3_36909668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/prestashop/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?><div class="row">
<div class="col-lg-7">
	<div class="panel" id="correos-block">
      <div class="panel-heading">
         <i class="icon-truck"></i>
         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Correos package information','mod'=>'correos'),$_smarty_tpl ) );?>

      </div>
      <ul id="tabCorreos" class="nav nav-tabs">
         <li <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'label') {?>class="active"<?php }?>>
				<a href="#label" class="preventDefault">
					<i class="icon-print"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Label','mod'=>'correos'),$_smarty_tpl ) );?>

				</a>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'customs') {?>class="active"<?php }?>>
				<a href="#customs" class="preventDefault">
					<i class="icon-file-text"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customs','mod'=>'correos'),$_smarty_tpl ) );?>
 
				</a>
			</li>
         <li <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'carrier_change') {?>class="active"<?php }?>>
				<a href="#carrier_change" class="preventDefault">
					<i class="icon-truck"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier change','mod'=>'correos'),$_smarty_tpl ) );?>
 
				</a>
			</li>
         <li <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'rma_returns') {?>class="active"<?php }?>>
				<a href="#rma_returns" class="preventDefault">
					<i class="icon-exchange"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','mod'=>'correos'),$_smarty_tpl ) );?>
 
				</a>
                </li>
		</ul>
      <div class="tab-content panel">
         <!-- Tab labels -->
			<div id="label" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'label') {?>active<?php }?>">
				<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Label','mod'=>'correos'),$_smarty_tpl ) );?>
</h4>
					<!-- Labels block -->
            <?php if ($_smarty_tpl->tpl_vars['shipping_code']->value || file_exists((('../modules/correos/pdftmp/exp-').($_smarty_tpl->tpl_vars['id_order']->value)).('.txt'))) {?>
            <div class="well hidden-print form-horizontal">
               <?php if ($_smarty_tpl->tpl_vars['shipping_code']->value) {?>
               <div class="form-group">
                  <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping code','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                  <label class="control-label col-lg-9" style="text-align: left !important">
                     <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipping_code']->value,'htmlall','UTF-8' ));?>

                  </label>
               </div>
             
               <div class="form-group">
                  <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Label Request','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                  <label class="control-label col-lg-9" style="text-align: left !important">
                     <a href="#" style="text-decoration:underline" class="preventDefault"
                  onClick="window.open('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cr_module_dir']->value,'htmlall','UTF-8' ));?>
/get_label.php?order=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>
&codenv=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipping_code']->value,'htmlall','UTF-8' ));?>
&id_preregister=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_preregister']->value,'htmlall','UTF-8' ));?>
&correos_token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['correos_token']->value,'htmlall','UTF-8' ));?>
','mywindow','width=500,height=500')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download Label','mod'=>'correos'),$_smarty_tpl ) );?>
</a>
                  </label>
               </div>
               
               <div class="form-group">
						<label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last state','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                  <label class="control-label col-lg-9" style="text-align: left !important">
                     <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['last_tracking']->value,'htmlall','UTF-8' ));?>

                     <a href="#" style="text-decoration:underline" class="preventDefault" onClick="window.open('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cr_module_dir']->value,'htmlall','UTF-8' ));?>
/track_order.php?codenv=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipping_code']->value,'htmlall','UTF-8' ));?>
&correos_token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['correos_token']->value,'htmlall','UTF-8' ));?>
','mywindow','width=550,height=500')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show tracking history','mod'=>'correos'),$_smarty_tpl ) );?>
</a>
                  </label>
               </div>
               <?php }?>
               
               <?php if (file_exists((('../modules/correos/pdftmp/exp-').($_smarty_tpl->tpl_vars['id_order']->value)).('.txt'))) {?>
                  <div class="form-group">
                     <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TXT file','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                     <label class="control-label col-lg-9" style="text-align: left !important">
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cr_module_dir']->value,'htmlall','UTF-8' ));?>
/pdftmp/exp-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>
.txt" style="text-decoration:underline" 
                        download="exp-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>
.txt">
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','mod'=>'correos'),$_smarty_tpl ) );?>

                        </a>
                     </label>
                  </div>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['collection']->value) {?>
                  <div class="form-group">
                    <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Collection code','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                    <label class="control-label col-lg-9" style="text-align: left !important">
                       <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['confirmation_code'],'htmlall','UTF-8' ));?>

                    </label>
                 </div>
                 <div class="form-group">
                    <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Collection date','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                    <label class="control-label col-lg-9" style="text-align: left !important">
                       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['collection']->value['collection_date']),$_smarty_tpl ) );?>

                    </label>
                 </div>
                 <?php }?>
                    
            </div>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['preregister_error']->value) {?>
            <div class="alert alert-danger">
               <button data-dismiss="alert" class="close" type="button">×</button>
                     Error: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['preregister_error']->value,'htmlall','UTF-8' ));?>

				</div>
            <?php }?>
            
            
            <?php if ($_smarty_tpl->tpl_vars['has_correos_carrier']->value) {?>
            <form id="correos_form_label" method="post">
            <div id="correos_form_label_content">
               <div class="well form-horizontal hidden-print">
					   
                     
                     <?php if (count($_smarty_tpl->tpl_vars['senders_select']->value) > 0) {?>
                     <div class="form-group">
								<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select sender','mod'=>'correos'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-6">
                           <select id="correos_sender" name="correos_sender">
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['senders_select']->value, 'sender_name', false, 'sender');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sender']->value => $_smarty_tpl->tpl_vars['sender_name']->value) {
?>
                              <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sender']->value,'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sender_name']->value,'htmlall','UTF-8' ));?>
</option>
                           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                           </select>
                          
								</div>
							</div>
                     <?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['require_customs']->value) {?>
                        <div class="form-group">
                           <h4 class="col-lg-6 text-center" >
                              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customs information','mod'=>'correos'),$_smarty_tpl ) );?>
:</strong> 
                           </h4>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select package description','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                           <div class="col-lg-6">
                              <select id="goods_type" name="goods_type">
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customs_categories']->value, 'name', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
?>
                                 <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'htmlall','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['correos_config']->value['customs_default_category'] == $_smarty_tpl->tpl_vars['id']->value) {?> selected<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8' ));?>
</option>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
								<label class="control-label col-lg-3 required"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First product value','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                        <div class="col-lg-6">
                           <input type="text" class="form-control fixed-width-sm required" name="customs_firstproductvalue" id="customs_firstproductvalue" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['first_prduct']->value['unit_price_tax_excl'],2),".",","),'htmlall','UTF-8' ));?>
">
                        </div>
                     </div>
                     
                     <?php }?>
                     <div class="form-group">
                        
                        <h4 class="col-lg-6 text-center" >
                           <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insert package information','mod'=>'correos'),$_smarty_tpl ) );?>
:</strong> 
                        </h4>
                     </div>
                     <div class="form-group">
								<label class="control-label col-lg-3 required"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                        <div class="input-group col-lg-2">
                           <input type="text" id="correos_package_weight" name="correos_package_weight" 
                           value="<?php if (isset($_smarty_tpl->tpl_vars['request_data']->value->parcel_details->weight)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['request_data']->value->parcel_details->weight,'htmlall','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['weight']->value,'htmlall','UTF-8' ));
}?>" class="form-control required" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight','mod'=>'correos'),$_smarty_tpl ) );?>
 (Kg)"/>
							<span class="input-group-addon">Kg<span></span></span>
						</div>
                     </div>
                     <div class="form-group">
								<label class="control-label col-lg-3 <?php if ($_smarty_tpl->tpl_vars['is_correospaq']->value) {?>required<?php }?>"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Long','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                        <div class="input-group col-lg-2">
                           <input type="text" id="correos_package_long" name="correos_package_long" 
                            <?php if (isset($_smarty_tpl->tpl_vars['request_data']->value->parcel_details->long)) {?>
                                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['request_data']->value->parcel_details->long,'htmlall','UTF-8' ));?>
"
							<?php } elseif (count($_smarty_tpl->tpl_vars['order_prducts']->value) == 1) {?>
								<?php $_smarty_tpl->_assignInScope('first_prduct_key', key($_smarty_tpl->tpl_vars['order_prducts']->value));?>
								
								 value="<?php echo intval($_smarty_tpl->tpl_vars['order_prducts']->value[$_smarty_tpl->tpl_vars['first_prduct_key']->value]['depth']);?>
"
							<?php } else { ?>
							 value="0"
						   <?php }?>
						   class="form-control <?php if ($_smarty_tpl->tpl_vars['is_correospaq']->value) {?>required<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Long','mod'=>'correos'),$_smarty_tpl ) );?>
 (cm.)" />
							<span class="input-group-addon">cm<span></span></span>
						</div>
                     </div>
                     <div class="form-group">
								<label class="control-label col-lg-3 <?php if ($_smarty_tpl->tpl_vars['is_correospaq']->value) {?>required<?php }?>"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                        <div class="input-group col-lg-2">
                           <input type="text" id="correos_package_width" name="correos_package_width" 
                           <?php if (isset($_smarty_tpl->tpl_vars['request_data']->value->parcel_details->width)) {?>
                            value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['request_data']->value->parcel_details->width,'htmlall','UTF-8' ));?>
"
						   <?php } elseif (count($_smarty_tpl->tpl_vars['order_prducts']->value) == 1) {?>
								<?php $_smarty_tpl->_assignInScope('first_prduct_key', key($_smarty_tpl->tpl_vars['order_prducts']->value));?>
								
								 value="<?php echo intval($_smarty_tpl->tpl_vars['order_prducts']->value[$_smarty_tpl->tpl_vars['first_prduct_key']->value]['width']);?>
"
							<?php } else { ?>
							 value="0"
						   <?php }?>
							  
						   class="form-control <?php if ($_smarty_tpl->tpl_vars['is_correospaq']->value) {?>required<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'correos'),$_smarty_tpl ) );?>
 (cm.)" />
							
							<span class="input-group-addon">cm<span></span></span>
						</div>
                     </div>
                     <div class="form-group">
								<label class="control-label col-lg-3 <?php if ($_smarty_tpl->tpl_vars['is_correospaq']->value) {?>required<?php }?>"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'height','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                        <div class="input-group col-lg-2">
                           <input type="text" id="correos_package_height"  name="correos_package_height" 
							 <?php if (isset($_smarty_tpl->tpl_vars['request_data']->value->parcel_details->height)) {?>
                                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['request_data']->value->parcel_details->height,'htmlall','UTF-8' ));?>
"
                            <?php } elseif (count($_smarty_tpl->tpl_vars['order_prducts']->value) == 1) {?>
								<?php $_smarty_tpl->_assignInScope('first_prduct_key', key($_smarty_tpl->tpl_vars['order_prducts']->value));?>
								
								 value="<?php echo intval($_smarty_tpl->tpl_vars['order_prducts']->value[$_smarty_tpl->tpl_vars['first_prduct_key']->value]['height']);?>
"
							<?php } else { ?>
							 value="0"
						   <?php }?>
						
						   title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'High','mod'=>'correos'),$_smarty_tpl ) );?>
" class="form-control <?php if ($_smarty_tpl->tpl_vars['is_correospaq']->value) {?>required<?php }?>" />
							<span class="input-group-addon">cm<span></span></span>
						</div>
                     </div>
                     <div class="form-group">
								<label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Calculated Bulk','mod'=>'correos'),$_smarty_tpl ) );?>
:</label>
                        <div class="input-group col-lg-2">
                           <input type="text" id="correos_package_bult"  name="correos_package_bult" value="10" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bult','mod'=>'correos'),$_smarty_tpl ) );?>
" class="form-control" disabled/>
							<span class="input-group-addon">Kg<span></span></span>
						</div>
                     </div>
                     <div class="form-group">
								<label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All-risks insurance','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                        <div class="input-group col-lg-2">
                           <input type="text" id="correos_package_insurance"  name="correos_package_insurance" 
                           value="<?php if (isset($_smarty_tpl->tpl_vars['request_data']->value->parcel_details->insurance_value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['request_data']->value->parcel_details->insurance_value,'htmlall','UTF-8' ));
} else { ?>0<?php }?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All-risks insurance','mod'=>'correos'),$_smarty_tpl ) );?>
" class="form-control "/>
                           <span class="input-group-addon">€<span></span></span>
						   
						  
                        </div>
						 <p class="help-block" style="padding-left:25%">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max. 6000€','mod'=>'correos'),$_smarty_tpl ) );?>

									</p>
                     </div>
					 <div class="form-group">
								<label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Observations','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                        <div class="col-lg-7">
                           <input type="text" id="correos_package_observations"  name="correos_package_observations" value="<?php if (isset($_smarty_tpl->tpl_vars['request_data']->value->parcel_details->observations)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['request_data']->value->parcel_details->observations,'htmlall','UTF-8' ));
}?>" maxlength="45" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All-risks insurance','mod'=>'correos'),$_smarty_tpl ) );?>
" class="form-control" />
                           <p class="help-block">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For the shipping label','mod'=>'correos'),$_smarty_tpl ) );?>
. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max. 45 characters','mod'=>'correos'),$_smarty_tpl ) );?>

									</p>
                        </div>
                     </div>
                     
                     <?php if ($_smarty_tpl->tpl_vars['is_office']->value) {?>
                        <div class="form-group">
                           <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected Office','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                           <label class="control-label col-lg-9" style="text-align: left !important">
                             <span id="selected_office">
                              <?php if ($_smarty_tpl->tpl_vars['office']->value) {?>
                                 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['office']->value->nombre,'htmlall','UTF-8' ));?>
 - <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['office']->value->direccion,'htmlall','UTF-8' ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['office']->value->localidad,'htmlall','UTF-8' ));?>
 
                              <?php } else { ?>
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The customer has not selected a collection office. Please select one','mod'=>'correos'),$_smarty_tpl ) );?>

                              <?php }?>	
                              </span>
                           </label>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Postal Code','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                           <div style="float:left; margin-right:5px">
                           
                              <input type="text" id="correos_postcode" name="correos_postcode" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['postcode']->value,'htmlall','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Postal Code','mod'=>'correos'),$_smarty_tpl ) );?>
" class="form-control fixed-width-sm" />
                              <label class="control-label fixed-width-md" id="loadingmask" style="text-align: left !important; display:none;"><i class="icon-refresh icon-spin icon-fw icon-4x "></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','mod'=>'correos'),$_smarty_tpl ) );?>
</label>
                              
                              <select id="offices_correos" name="offices_correos" style="display:none" onchange="correosInfo()" class="fixed-width-xl"></select> 
                              
                           </div>
                           <div>
                              <a id="searchoffices" class="btn btn-primary preventDefault" href="#" onclick="GetcorreosPoint()">
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change Office','mod'=>'correos'),$_smarty_tpl ) );?>

                              </a>
                              <a id="searchoffices_back" class="btn btn-primary preventDefault" href="#" style="display: none;" onclick="$(this).hide();$('#correos_postcode').show();$('#searchoffices').show();$('#offices_correos').hide();" style="display:none">
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again','mod'=>'correos'),$_smarty_tpl ) );?>

                              </a>
                           </div>
                        </div>
                      
                     
                     <?php }?>
                     
                     <?php if ($_smarty_tpl->tpl_vars['is_correospaq']->value) {?>
                        <div class="form-group">
                           <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected CorreoPaq','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                           <label class="control-label col-lg-9" style="text-align: left !important">
                             <span id="selected_paq">
                              <?php if ($_smarty_tpl->tpl_vars['correos_paq']->value) {?>
                                 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['correos_paq']->value->alias,'htmlall','UTF-8' ));?>
 - <?php if (!empty($_smarty_tpl->tpl_vars['correos_paq']->value->streetType)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['correos_paq']->value->streetType,'htmlall','UTF-8' ));?>
 <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['correos_paq']->value->address,'htmlall','UTF-8' ));?>
, 
                                 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['correos_paq']->value->city,'htmlall','UTF-8' ));?>
 
                                
                              <?php } else { ?>
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The customer has not selected a CorreosPaq terminal. Please select one','mod'=>'correos'),$_smarty_tpl ) );?>

                              <?php }?>	
                              </span>
                           </label>
                        </div>
                        <div class="alert alert-danger" id="homepaq_search_fail" style="display:none">
                        </div>
                        <div class="form-group">
                           <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CorreosPaq user','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                           <div style="float:left; margin-right:5px">
                           
                              <input type="text" id="homepaq_user" name="homepaq_user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepaq_user']->value,'htmlall','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CorreosPaq user','mod'=>'correos'),$_smarty_tpl ) );?>
" class="form-control" />
                              <label class="control-label fixed-width-md" id="loadingmask" style="text-align: left !important; display:none;"><i class="icon-refresh icon-spin icon-fw icon-4x"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','mod'=>'correos'),$_smarty_tpl ) );?>
</label>
                              
                              <select id="paqs_favourites" name="paqs_favourites" style="display:none" onchange="correosPaqInfo();updateCorreosPaqInfo()" class="fixed-width-xl"></select> 
                              
                           </div>
                           <div>
                              <a id="searchpaqs" class="btn btn-primary preventDefault" href="#" onclick="GetPaqsFavourites()" >
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change terminal','mod'=>'correos'),$_smarty_tpl ) );?>

                              </a>
                              <a id="searchpaqs_back" class="btn btn-primary preventDefault" href="#" style="display: none;" onclick="$(this).hide();$('#homepaq_user').show();$('#searchpaqs').show();$('#paqs_favourites').hide();" style="display:none">
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again','mod'=>'correos'),$_smarty_tpl ) );?>

                              </a>
                           </div>
                        </div>
                        
                     <?php }?>
                     
                     <div class="form-group">
								<label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data check','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                        <div class="col-lg-7">
                           <a data-toggle="modal" class="btn btn-default preventDefault" href="#CorreosModalPreregister" >
                         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check preregister data','mod'=>'correos'),$_smarty_tpl ) );?>

                         <i class="icon-external-link"></i>
                         </a>
                         
                        </div>
                     </div>
                        
                  <br>
                  <button name="preregisterAgain" id="preregisterAgain" class="btn btn-primary pull-right" type="submit">
                     <?php if ($_smarty_tpl->tpl_vars['shipping_code']->value) {?>
                     <i class="icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register again','mod'=>'correos'),$_smarty_tpl ) );?>

                     <?php } else { ?>
                     <i class="icon-file-pdf-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','mod'=>'correos'),$_smarty_tpl ) );?>

                     <?php }?>
                  </button>
                  <button name="exportToFile" class="btn btn-primary" type="submit"> <i class="icon-file-text"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export to a TXT file','mod'=>'correos'),$_smarty_tpl ) );?>
 </button>
               </div>
               
                 
                  <input type="hidden" class="customs_firstproductvalue_hidden" name="customs_firstproductvalue_hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['first_prduct']->value['unit_price_tax_excl'],2),".",","),'htmlall','UTF-8' ));?>
" />
                  <input type="hidden" class="id_collection_office" name="id_collection_office" />
                  <input type="hidden" class="offices" name="offices"/>
                  <input type="hidden" class="homepaq_code" name="homepaq_code"/>
                  <input type="hidden" class="homepaq_token" name="homepaq_token" />
                  <input type="hidden" class="homepaqs" name="homepaqs"/>
               
               <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['correos_tpl']->value).('views/templates/hook/helper/adminOrder_preregister_form.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order_data'=>$_smarty_tpl->tpl_vars['order_data']->value,'is_office'=>$_smarty_tpl->tpl_vars['is_office']->value,'is_correospaq'=>$_smarty_tpl->tpl_vars['is_correospaq']->value), 0, true);
?>
            </div>
            </form>
            <?php } else { ?>
               <div class="list-empty hidden-print">
                  <div class="list-empty-msg">
							<i class="icon-warning-sign list-empty-icon"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The carrier selected for the order is not Correos','mod'=>'correos'),$_smarty_tpl ) );?>

						</div>
					</div>
				<?php }?>
			</div>
         <!-- End Tab labels -->
         
         
         <!-- Tab Customs -->
			<div id="customs" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'customs') {?>active<?php }?>">
				<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customs','mod'=>'correos'),$_smarty_tpl ) );?>
</h4>
					<!-- Customs block -->
        
   	
         <?php if ($_smarty_tpl->tpl_vars['require_customs']->value || $_smarty_tpl->tpl_vars['require_ddp']->value) {?>
            <?php if ((file_exists((('../modules/correos/pdftmp/customs_').($_smarty_tpl->tpl_vars['id_order']->value)).('.pdf')) && filesize((('../modules/correos/pdftmp/customs_').($_smarty_tpl->tpl_vars['id_order']->value)).('.pdf')) > 0) || (file_exists((('../modules/correos/pdftmp/customs_dcaf_').($_smarty_tpl->tpl_vars['id_order']->value)).('.pdf'))) || (file_exists((('../modules/correos/pdftmp/customs_ddp_').($_smarty_tpl->tpl_vars['id_order']->value)).('.pdf')))) {?>
            <div class="well hidden-print form-horizontal">
            
               <?php if (file_exists((('../modules/correos/pdftmp/customs_').($_smarty_tpl->tpl_vars['id_order']->value)).('.pdf')) && filesize((('../modules/correos/pdftmp/customs_').($_smarty_tpl->tpl_vars['id_order']->value)).('.pdf')) > 0) {?>
               <div class="form-group">
                  <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Content Declaration','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                  <label class="control-label col-lg-9" style="text-align: left !important">
                     <a href="#" style="text-decoration:underline" class="preventDefault" onClick="window.open('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cr_module_dir']->value,'htmlall','UTF-8' ));?>
/pdftmp/customs_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>
.pdf','mywindow','width=500,height=500')">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download documents','mod'=>'correos'),$_smarty_tpl ) );?>

                     </a>
                     
                  </label>
               </div>
               <?php }?>
               
               <?php if (file_exists((('../modules/correos/pdftmp/customs_dcaf_').($_smarty_tpl->tpl_vars['id_order']->value)).('.pdf'))) {?>
               <div class="form-group">
                  <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DUA Documents','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                  <label class="control-label col-lg-9" style="text-align: left !important">
                     <a href="#" style="text-decoration:underline" class="preventDefault" onClick="window.open('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cr_module_dir']->value,'htmlall','UTF-8' ));?>
/pdftmp/customs_dcaf_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>
.pdf','mywindow','width=500,height=500')">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download DUA','mod'=>'correos'),$_smarty_tpl ) );?>

                     </a>
                  </label>
               </div>
               <?php }?>
               
               <?php if (file_exists((('../modules/correos/pdftmp/customs_ddp_').($_smarty_tpl->tpl_vars['id_order']->value)).('.pdf'))) {?>
               <div class="form-group">
                  <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DDP Documents','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                  <label class="control-label col-lg-9" style="text-align: left !important">
                     <a href="#" style="text-decoration:underline;" class="preventDefault" onClick="window.open('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cr_module_dir']->value,'htmlall','UTF-8' ));?>
/pdftmp/customs_ddp_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>
.pdf','mywindow','width=500,height=500')">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download DDP','mod'=>'correos'),$_smarty_tpl ) );?>

                      </a>
                  </label>
               </div>
               <?php }?>
            </div> 
            <?php }?>
            
            <?php if (isset($_smarty_tpl->tpl_vars['request_customs_content_error_desc']->value)) {?>
            <div class="alert alert-danger">
               <button data-dismiss="alert" class="close" type="button">×</button>
                     Error: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['request_customs_content_error_desc']->value,'htmlall','UTF-8' ));?>

				</div>
            <?php }?>
            
            <form id="correos_form_customs" method="post">
               <div class="well form-horizontal hidden-print">
               
               <?php if ($_smarty_tpl->tpl_vars['shipping_code']->value) {?>
                  <div class="form-group">
                     <h4 class="col-lg-6 text-center" >
                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customs documents','mod'=>'correos'),$_smarty_tpl ) );?>
</strong> 
                     </h4>
                  </div>
				  
                  <div class="form-group">
                     <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of pieces','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                     <div class="col-lg-6">
                        <input type="text" name="number_pieces" value="1" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of pieces','mod'=>'correos'),$_smarty_tpl ) );?>
" class="form-control fixed-width-xs" style="display: inline; margin-right: 5px" />
                        <button class="btn btn-primary" name="requestCustomsDocuments_DCAF" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request DUA','mod'=>'correos'),$_smarty_tpl ) );?>
</button>
                     </div>
                  </div>
				  <?php if ($_smarty_tpl->tpl_vars['require_ddp']->value) {?>
                  <div class="form-group">
                     <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of pieces','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                     <div class="col-lg-6">
                        <input type="text" name="number_pieces" value="1" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of pieces','mod'=>'correos'),$_smarty_tpl ) );?>
" class="form-control fixed-width-xs" style="display: inline; margin-right: 5px"/>
                         <button class="btn btn-primary" name="requestCustomsDocuments_DDP"  type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request DDP','mod'=>'correos'),$_smarty_tpl ) );?>
</button>
                     </div>
                  </div>
				  <?php }?>
                  <div class="form-group">
                     <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Content Declaration','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                     <div class="col-lg-6">
                    
                         <button class="btn btn-primary" name="requestCustomsContent"  type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request documents','mod'=>'correos'),$_smarty_tpl ) );?>
</button>
                     </div>
                  </div>
               <?php } else { ?>
                  <div class="list-empty hidden-print">
                     <div class="list-empty-msg">
                        <i class="icon-warning-sign list-empty-icon"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Need to generate shipping label first','mod'=>'correos'),$_smarty_tpl ) );?>

                     </div>
                  </div>
               <?php }?>
                 
               </div>
               
            </form>
         <?php } else { ?>
               <div class="list-empty hidden-print">
                  <div class="list-empty-msg">
							<i class="icon-warning-sign list-empty-icon"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The Customs documents are not required','mod'=>'correos'),$_smarty_tpl ) );?>

						</div>
					</div>
				
         <?php }?>
         </div>
         
         <!-- Tab Carrier Change -->
			<div id="carrier_change" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'carrier_change') {?>active<?php }?>">
				<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change Carrier','mod'=>'correos'),$_smarty_tpl ) );?>
 </h4>
					<!--  Carrier Change block -->
				<form id="change_carrier_form" method="post"> 
               <div class="well form-horizontal hidden-print">
               <input type="hidden" id="tax" name="tax" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( number_format($_smarty_tpl->tpl_vars['order']->value->carrier_tax_rate,2),'htmlall','UTF-8' ));?>
" />
		
		
               <div class="form-group">
                  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier:','mod'=>'correos'),$_smarty_tpl ) );?>
</label>
                  <div class="col-lg-6" style="margin-left: -5px;" >
                     <select id="new_id_carrier" name="new_id_carrier">
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
?>
                     <option id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tax']->value,'htmlall','UTF-8' ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carrier']->value['id_carrier'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'] == $_smarty_tpl->tpl_vars['order']->value->id_carrier) {?>selected="selected"<?php }?>>
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carrier']->value['name'],'htmlall','UTF-8' ));?>

                        <?php if ($_smarty_tpl->tpl_vars['tax']->value) {?>(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Tax::getCarrierTaxRate($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'],null),'htmlall','UTF-8' ));?>
%)<?php }?>
                     </option>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                     </select>
                  </div>
                  <div class="col-lg-3">
                     <button id="carrier_change" type="submit" class="btn btn-primary" name="carrier_change">
                     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','mod'=>'correos'),$_smarty_tpl ) );?>
 </button>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping cost','mod'=>'correos'),$_smarty_tpl ) );?>
:</label>
                  <div class="input-group col-lg-3">
                     <input type="text" name="new_total_shipping_tax_incl" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( number_format($_smarty_tpl->tpl_vars['order']->value->total_shipping_tax_incl,2),'htmlall','UTF-8' ));?>
" />
                     <span class="input-group-addon"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value->sign,'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['tax_enabled']->value > 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Tax incl.)','mod'=>'correos'),$_smarty_tpl ) );
}?><span>
                  </div>
               </div>
               <div class="form-group" style="<?php if ($_smarty_tpl->tpl_vars['tax_enabled']->value < 1) {?>display:none;<?php }?>margin-top:10px">
                  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping cost','mod'=>'correos'),$_smarty_tpl ) );?>
:</label>
                  <div class="input-group col-lg-3">
                     <input type="text" name="new_total_shipping_tax_excl" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( number_format($_smarty_tpl->tpl_vars['order']->value->total_shipping_tax_excl,2),'htmlall','UTF-8' ));?>
" />
                     <span class="input-group-addon"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value->sign,'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['tax_enabled']->value > 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Tax excl.)','mod'=>'correos'),$_smarty_tpl ) );
}?><span>
                  </div>
               </div>
               <div class="form-group" style="<?php if ($_smarty_tpl->tpl_vars['tax_enabled']->value < 1) {?>display:none;<?php }?>margin-top:10px">
                  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable custom car. Tax rate:','mod'=>'correos'),$_smarty_tpl ) );?>
</label>

                  <div class="input-group col-lg-3" style="float: left;" >
                     <input type="text" class="form-control" name="taxvalue" id="taxvalue" value="" disabled="disabled"/>
                     <span class="input-group-addon">%</span>
                     
                  </div>
                  
                  <span class="switch prestashop-switch fixed-width-lg" style="float: left;margin-left: 10px;" >
                     <input type="radio" name="chkTax" id="chkTax_on" value="1">
                     <label for="chkTax_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'on','mod'=>'correos'),$_smarty_tpl ) );?>
</label>
                     <input type="radio" name="chkTax" id="chkTax_off" value="0" checked="checked">
                     <label for="chkTax_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'off','mod'=>'correos'),$_smarty_tpl ) );?>
</label>
                     <a class="slide-button btn"></a>
                  </span>
                  
               </div>
               <div class="form-group">
                  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping weight:','mod'=>'correos'),$_smarty_tpl ) );?>
</label>
                  <div class="input-group col-lg-3">
                     <input type="text" name="new_order_carrier_weight" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( number_format($_smarty_tpl->tpl_vars['order_carrier']->value->weight,3),'htmlall','UTF-8' ));?>
" />
                     <span class="input-group-addon"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['weight_unit']->value,'htmlall','UTF-8' ));?>
<span>
                  </div>
               </div>
            </div>
         </form>
			</div>
         <!-- End Tab Carrier Change -->
         
			<!-- Tab returns -->
			<div id="rma_returns" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'rma_returns') {?>active<?php }?>">
				<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','mod'=>'correos'),$_smarty_tpl ) );?>
</h4>
					<!-- Return block -->
             <?php if ($_smarty_tpl->tpl_vars['rma_error']->value) {?>
            <div class="alert alert-danger">
               <button data-dismiss="alert" class="close" type="button">×</button>
                     Error: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rma_error']->value,'htmlall','UTF-8' ));?>

				</div>
            <?php }?>
             <form id="change_carrier_form" method="post"> 
               <div class="well form-horizontal hidden-print">
               <br>
               <?php if (file_exists((('../modules/correos/pdftmp/d-').($_smarty_tpl->tpl_vars['id_order']->value)).('.pdf'))) {?>
               <div class="form-group">
                  <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RMA Label','mod'=>'correos'),$_smarty_tpl ) );?>
: </label>
                  <label class="control-label col-lg-9" style="text-align: left !important">
                     <a href="#" style="text-decoration:underline" class="preventDefault" onClick="window.open('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cr_module_dir']->value,'htmlall','UTF-8' ));?>
/pdftmp/d-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>
.pdf','mywindow','width=500,height=500')">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download RMA Label','mod'=>'correos'),$_smarty_tpl ) );?>

                     </a>
                  </label>
               </div>
               <?php }?>
               
                  <div class="form-group">
                     <label class="control-label col-lg-2"></label>
                     <div class="input-group col-lg-3">
                        <a data-toggle="modal" class="btn btn-default preventDefault" href="#CorreosModal" >
                         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fill the form to request RMA','mod'=>'correos'),$_smarty_tpl ) );?>

                         <i class="icon-external-link"></i>
                         </a>
                        
                     </div>
                  </div>
               </div>
            </form>
			</div>
      </div>
            
	</div>
</div>
</div>
 <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['correos_tpl']->value).('views/templates/hook/helper/adminOrder_rma_form.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('senders_select'=>$_smarty_tpl->tpl_vars['senders_select']->value,'senders'=>$_smarty_tpl->tpl_vars['senders']->value,'address'=>$_smarty_tpl->tpl_vars['address']->value,'customer'=>$_smarty_tpl->tpl_vars['customer']->value,'id_order'=>$_smarty_tpl->tpl_vars['id_order']->value), 0, true);
echo '<script'; ?>
>
   $('#correos-block a.preventDefault').click(function (e) {
      e.preventDefault()
	})
   $('#correos-block button[type="submit"]').click(function (e) {
      $(this).blur() 
 	})
   
   $('#tabCorreos a').click(function (e) {
      e.preventDefault()
		$(this).tab('show')
	})
   
   var correos_order_states = [<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cr_order_states']->value,'htmlall','UTF-8' ));?>
];
   var HomePaqs = '';
   var noPaqsFound = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We are sorry, no results was found','mod'=>'correos'),$_smarty_tpl ) );?>
";
	$(document).ready(function()
	{
            
				$('button[name=submitState]').live('click',function(event) {
               
              
               
            
                   
                     var id_order_state = parseInt(document.getElementById('id_order_state').value);
                    
                   if(correos_order_states.indexOf(id_order_state) >= 0) {
                        
						var valid = true;
						var fields = "";
						$("#correos_form_label :input.redborder").each(function() {
							$(this).removeClass("redborder");
						});
						$("#correos_form_label :input.required").each(function() {
                            if ($.trim($(this).val()) == "" || $.trim($(this).val()) == "0"  ) {
                                $(this).addClass("redborder");
                                fields += " " + $(this).attr("title") + ",";
                                valid = false;
                            }
                        });
								
							var lastChar = fields.slice(-1);
							if(lastChar == ',') 
							fields = fields.slice(0, -1);


                        if(!valid)
                            alert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill out all required fields','mod'=>'correos'),$_smarty_tpl ) );?>
:" + fields);
                        else {
                            var cloned =  $( "#correos_form_label_content" ).clone().hide();
                            $("select[name=id_order_state]").parent().append(cloned);
                        }
                               
                            return valid;
			
					}
							
                });
                   $('#preregisterAgain').live('click',function(event) {
                   
                        var valid = true;
                        var fields = "";
                        $("#correos_form_label :input.redborder").each(function() {
                            $(this).removeClass("redborder");
                        });
                            
                        $("#correos_form_label :input.required").each(function() {
                            if ($.trim($(this).val()) == "" || $.trim($(this).val()) == "0"  ) {
                                    $(this).addClass("redborder");
                                    fields += " " + $(this).attr("title") + ",";
                                    valid = false;
                                }
                            });
                                    
                        var lastChar = fields.slice(-1);
                        if(lastChar == ',') 
                            fields = fields.slice(0, -1);
       

                        if(!valid)
                            alert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill out all required fields','mod'=>'correos'),$_smarty_tpl ) );?>
:" + fields);
                        else
                            $(this).find('i').prop('class', 'icon-refresh icon-spin');
                        return valid;
                        
                    });
							
					
			
					$("#correos_package_weight").keyup(function () { 
                    calcutaleBult();
                 });
					$("#correos_package_long").keyup(function () { 
                  calcutaleBult();
                    });
                    $("#correos_package_width").keyup(function () { 
                  calcutaleBult();
                 
                  });
					$("#correos_package_height").keyup(function () { 
                  calcutaleBult();
                 
                  });
            
			
      
			

					$("#correos_form :input.redborder").removeClass("redborder");	
					$( "#correos_form :input.required" ).change(function() {
						if($(this).val() != "")
							$(this).removeClass("redborder");
						
					});
				
				});
				
				var correosOffices;
				function GetcorreosPoint()
				{
					$("#loadingmask").show();
					$( "#correos_postcode" ).hide();
         $( "#searchoffices" ).hide();

					$.ajax(
					{
						type: 'POST',
						url: "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCorreos'),'javascript','UTF-8' ));?>
",
						data: {
              ajax: true,
              action: 'GetPointAdminOrder',
              postcode : $("#correos_postcode").val(),
              id_order: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>

            },
						dataType: "json",
						async: true,
						success: function(result) 
						{
							correosOffices = result;
							if(correosOffices.length != 0) {
                        $(".offices").val(JSON.stringify(result));
								correos_fillDropDown(correosOffices);
							} else {
								
							}
							$( "#loadingmask" ).hide();
                     
                     
							$("#searchoffices_back").show();
						},
						error: function(xhr, ajaxOptions, thrownError) 
						{
							console.log(thrownError);
						
			
						}
								
					});	
				}
            function GetPaqsFavourites()
            {
               $("#loadingmask").show();
					$( "#homepaq_user" ).hide();
               $( "#searchpaqs" ).hide();
               $("#homepaq_search_fail").hide();
               /*
                    var _data = {
                        ajax: true,
                        action: 'GetPaqsFavourites',
                        homepaq_user : $("#homepaq_user").val()
                    };
               */
                   
                    var _data = {
                        ajax: true,
                        action: 'GetCorreosPaqs',
                        user: $("#homepaq_user").val(),
                        paq_mobile: $("#recipient_mobile").val(),
                        email: $("#recipient_email").val(),
                        id_order: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>

                    };
    
					$.ajax(
					{
						type: 'POST',
						url: "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCorreos'),'javascript','UTF-8' ));?>
",
						data: _data,
						dataType: "json",
						async: true,
						success: function(result) 
						{
							if (typeof result.errorCode == 'undefined') {
                   
                        HomePaqs = result.homepaqs;
                        
                        $(".homepaq_token").val(result.token);
                        
                        
                        if(HomePaqs.length > 0){
                           $(".homepaqs").val(JSON.stringify(result.homepaqs));
                           var field = document.getElementById('paqs_favourites');
                        
                           for(i=field.options.length-1;i>=0;i--) { field.remove(i); } 
                           jQuery.each(HomePaqs, function() {
                              if (typeof this.alias != 'undefined')
                                 var name = this.alias;
                              else   
                                 var name = this.streetType + " " + this.address + " " + this.number + " " + this.city;
                              
                              var _option = new Option(name,this.code);
                              field.options.add(_option);
                                 
                           });
                          
                        
                        $("#paqs_favourites").show();
                        $("#homepaq_search_fail").hide();
                        correosPaqInfo()
                     
                     } else {
                   
                        $("#homepaq_search_fail").show();
                        
                        $("#homepaq_search_fail").html(noPaqsFound);
                     }
                  
                     
                     } else {
                     
                     $("#homepaq_search_fail").html(result.description);
                     $("#homepaq_search_fail").show();
                     
                  
                   }
							$( "#loadingmask" ).hide();
                     
                     
							$("#searchpaqs_back").show();
						},
						error: function(xhr, ajaxOptions, thrownError) 
						{
							console.log(thrownError);
						
			
						}
								
					});	
            }
            function correosPaqInfo()
				{
					var code = document.getElementById('paqs_favourites').value;

					jQuery.each(HomePaqs, function() {
						 if (this.code == code)
						 {
							$('.homepaq_code').val(this.code);
							
							$('#selected_paq').html(this.alias + " - " + this.streetType + " " + this.address + " " + this.number + ", " + this.city);
							$('#recipient_address').val(this.streetType + " " + this.address + " " + this.number);
                            $('#recipient_postcode').val(this.postalCode);
                            $('#recipient_city').val(this.city);
                            $('#recipient_state').val(this.state);
						 }		  
					});
				}
            
				function correos_fillDropDown(data)
				{
					if(document.getElementById('offices_correos'))
					{
						var field = document.getElementById('offices_correos');
						for(i=field.options.length-1;i>=0;i--) { field.remove(i); }       
						jQuery.each(data, function() {
							var _option = new Option(this.direccion+" - "+this.localidad,this.unidad);
							if (this.unidad == "<?php if ($_smarty_tpl->tpl_vars['office']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['office']->value->unidad,'htmlall','UTF-8' ));
} else { ?>0<?php }?>")
								_option.setAttribute("selected", "selected");
							field.options.add(_option);
						});
						$("#offices_correos").show();
						correosInfo();
					}
				}
				function correosInfo()
				{
					var puntoActual = document.getElementById('offices_correos').value;

					jQuery.each(correosOffices, function() {
						 if (this.unidad == puntoActual)
						 {
							$('.id_collection_office').val(this.unidad);
							
							$('#selected_office').html(this.nombre + " - " + this.direccion + ", " + this.localidad);
                            $('#recipient_address').val(this.direccion);
                            $('#recipient_postcode').val(this.cp);
                            $('#recipient_city').val(this.localidad);

						 }		  
					});
				}
        function updateOfficeInfo()
        {
        /*Not in use now to not ovveride client's selection*/ 
               var _data = {
                    ajax: true,
                    action: 'updateOfficeInfoFromOrder',
                    selected_office : $("#offices_correos").val()
               };
               $.ajax(
               {
                  type: 'POST',
                  url: "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCorreos'),'javascript','UTF-8' ));?>
",
                  data: _data,
               });
      
        }
            function updateCorreosPaqInfo()
            {
            }
            function calcutaleBult()
            {
               
               var p_long = $("#correos_package_long").val();
               var width = $("#correos_package_width").val();
               var height = $("#correos_package_height").val();
               $("#correos_package_bult").val(parseInt(p_long) * parseInt(width) * parseInt(height) / 6000);
           
            }
            calcutaleBult();
		<?php if (count($_smarty_tpl->tpl_vars['senders']->value) > 0) {?>

    
            var senders_json = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['senders']->value ));?>
;
            $(function() {
               $('#correos_sender').change(function () {
                  var selected_key =  $(this).val();
                  jQuery.each(senders_json, function(key, sender) {
                        if(key == selected_key) {
                        
                            if(sender)  {
                                $("#sender_firstname").val(sender.nombre);
                                $("#sender_lastname").val(sender.apellidos);
                                $("#sender_dni").val(sender.dni);
                                $("#sender_company").val(sender.empresa);
                                $("#sender_contact_person").val(sender.presona_contacto);
                                $("#sender_address").val(sender.direccion);
                                $("#sender_city").val(sender.localidad);
                                $("#sender_postcode").val(sender.cp);
                                $("#sender_state").val(sender.provincia);
                                $("#sender_phone").val(sender.tel_fijo);
                                $("#sender_mobile").val(sender.movil);
                                $("#sender_email").val(sender.email);
                            }
                           
                        }
                        
                     });
                });
               $('#correos_sender').trigger("change");
            });
        <?php }?>

            <?php echo '</script'; ?>
>
			
         
<style>
.redborder { 
border: 1px solid red !important; 
}
</style>

<?php }
}
