<?php
/* Smarty version 3.1.32, created on 2018-10-19 13:12:18
  from '/var/www/html/prestashop/modules/correos/views/templates/hook/helper/adminOrder_rma_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc9bc1203be78_46421863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c8950cdb3c5214dc9703197e714d3c548a4e2c' => 
    array (
      0 => '/var/www/html/prestashop/modules/correos/views/templates/hook/helper/adminOrder_rma_form.tpl',
      1 => 1539947502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9bc1203be78_46421863 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!-- Modal -->
  <div class="modal large fade"  id="CorreosModal" role="dialog">
    <div class="modal-dialog">
    
<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'COLLECTION ADDRESS. Modify only if not match with the Sender address','mod'=>'correos'),$_smarty_tpl ) );?>
</h4>
        </div>
        <div class="modal-body" id="CorreosModalContent">
         <form class="form clearfix " enctype="multipart/form-data" method="post" id="rma_form" >
         <div class="col-xs-6 form-horizontal" style="padding-right: 10px">
         
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sender details','mod'=>'correos'),$_smarty_tpl ) );?>
</h2>
            <hr>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sender name','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->firstname,'htmlall','UTF-8' ));?>
" id="customer_sender_nombre" name="customer_sender_nombre" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sender surname','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->lastname,'htmlall','UTF-8' ));?>
" id="customer_sender_apellidos" name="customer_sender_apellidos" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
                <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->dni,'htmlall','UTF-8' ));?>
" id="customer_sender_dni" name="customer_sender_dni" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sender company','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->company,'htmlall','UTF-8' ));?>
" id="customer_sender_empresa" name="customer_sender_empresa" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact person','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->firstname,'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->lastname,'htmlall','UTF-8' ));?>
" id="customer_sender_presona_contacto" name="customer_sender_presona_contacto" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->address1,'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->address2,'htmlall','UTF-8' ));?>
" id="customer_sender_direccion" name="customer_sender_direccion" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->city,'htmlall','UTF-8' ));?>
" id="customer_sender_localidad" name="customer_sender_localidad" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Postal Code','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->postcode,'htmlall','UTF-8' ));?>
" id="customer_sender_cp" name="customer_sender_cp" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Province','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->state,'htmlall','UTF-8' ));?>
" id="customer_sender_provincia" name="customer_sender_provincia" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Land line','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->phone,'htmlall','UTF-8' ));?>
" id="customer_sender_tel_fijo" name="customer_sender_tel_fijo" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile phone','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->phone_mobile,'htmlall','UTF-8' ));?>
" id="customer_sender_movil" name="customer_sender_movil" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value->email,'htmlall','UTF-8' ));?>
" id="customer_sender_email" name="customer_sender_email" class="form-control" autocomplete="off">
               </div>
            </div>
         
         </div>
         <div class="col-xs-6 form-horizontal" style="padding-left: 10px">
             <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recipient details','mod'=>'correos'),$_smarty_tpl ) );?>
</h2>
             <hr>
             <div class="form-group">
                <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Recipient','mod'=>'correos'),$_smarty_tpl ) );?>

                </label>
                <div class="col-lg-7">
                  <select name="recipient_sender" id="recipient_sender" class="form-control" autocomplete="off">
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
             
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recipient name','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_nombre" name="recipient_nombre" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recipient surname','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_apellidos" name="recipient_apellidos" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
                <input type="text" value="" id="recipient_dni" name="recipient_dni" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recipient company','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_empresa" name="recipient_empresa" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact person','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_presona_contacto" name="recipient_presona_contacto" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_direccion" name="recipient_direccion" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_localidad" name="recipient_localidad" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Postal Code','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_cp" name="recipient_cp" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Province','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_provincia" name="recipient_provincia" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Land line','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_tel_fijo" name="recipient_tel_fijo" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile phone','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_movil" name="recipient_movil" class="form-control" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-lg-5">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail','mod'=>'correos'),$_smarty_tpl ) );?>

               </label>
               <div class="col-lg-7">
               <input type="text" value="" id="recipient_email" name="recipient_email" class="form-control" autocomplete="off">
               </div>
            </div>  
            
            
      </div>
      
         <br style="clear:left">
             <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail message','mod'=>'correos'),$_smarty_tpl ) );?>
</h2>
             <hr>
            <div class="form-group">
            <textarea id="mail_message" name="mail_message" rows="3" class="form-control"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please find attached, the new label you need to print out put it on the parcel. Please take it to the nearest Post Office or contact us if you wish to organize a parcel collection','mod'=>'correos'),$_smarty_tpl ) );?>
</textarea>
            <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message which the customer will receive when you generate de RMA Label','mod'=>'correos'),$_smarty_tpl ) );?>
</p>
         </div>
                                                        
            <button class="btn btn-primary pull-right has-action btn-save-general" name="request_rmalabel" type="submit">
            <i class="fa fa-save nohover"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create RMA Label','mod'=>'correos'),$_smarty_tpl ) );?>

        </button>
    

         <input type="hidden" name="customer_id_order" id="customer_id_order" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value,'htmlall','UTF-8' ));?>
"/>
      </form>
         
         
         
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cerrar','mod'=>'correos'),$_smarty_tpl ) );?>
</button>
        </div>
      </div>
      
    </div>
  </div>
<style>
#CorreosModal .modal-dialog
{
    width: 830px; 
}
</style>
<?php echo '<script'; ?>
>
var senders_json = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['senders']->value ));?>
;
$(function() {
   $('#recipient_sender').change(function () {
      var selected_key =  $(this).val();
      jQuery.each(senders_json, function(key, sender) {
            if(key == selected_key) {
            
                if(sender)  {
                    $("#recipient_nombre").val(sender.nombre);
                    $("#recipient_apellidos").val(sender.apellidos);
                    $("#recipient_dni").val(sender.dni);
                    $("#recipient_empresa").val(sender.empresa);
                    $("#recipient_presona_contacto").val(sender.presona_contacto);
                    $("#recipient_direccion").val(sender.direccion);
                    $("#recipient_localidad").val(sender.localidad);
                    $("#recipient_cp").val(sender.cp);
                    $("#recipient_provincia").val(sender.provincia);
                    $("#recipient_tel_fijo").val(sender.tel_fijo);
                    $("#recipient_movil").val(sender.movil);
                    $("#recipient_email").val(sender.email);
                }
               
            }
            
         });
    });
   $('#recipient_sender').trigger("change");
});
<?php echo '</script'; ?>
><?php }
}
