<?php /* Smarty version Smarty-3.1.19, created on 2017-01-23 23:45:17
         compiled from "C:\xampp\htdocs\prestashop\prestashop\admin\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6185886877d869bc1-57723430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '513fee21203d27c169f3a7784f9b60b26a1af9f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\prestashop\\admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1485206629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6185886877d869bc1-57723430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5886877d8795c0_40326817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5886877d8795c0_40326817')) {function content_5886877d8795c0_40326817($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
