<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-15 12:11:40
         compiled from "/var/www/html/yoshikiShopNew/application/views/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2066664109546734ecdeeaf3-74764690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d2283db67c23a823ce030b940c97372b3fbb620' => 
    array (
      0 => '/var/www/html/yoshikiShopNew/application/views/products.tpl',
      1 => 1416049075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2066664109546734ecdeeaf3-74764690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546734ece204f3_15631530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546734ece204f3_15631530')) {function content_546734ece204f3_15631530($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>

<?php } ?><?php }} ?>
