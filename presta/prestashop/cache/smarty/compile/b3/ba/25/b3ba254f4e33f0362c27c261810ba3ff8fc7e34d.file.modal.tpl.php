<?php /* Smarty version Smarty-3.1.19, created on 2017-01-24 00:16:05
         compiled from "C:\xampp\htdocs\prestashop\prestashop\admin026w1imjv\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148158868eb52f1ea7-33951570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3ba254f4e33f0362c27c261810ba3ff8fc7e34d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\prestashop\\admin026w1imjv\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1485206629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148158868eb52f1ea7-33951570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58868eb52f5d26_70021031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58868eb52f5d26_70021031')) {function content_58868eb52f5d26_70021031($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
