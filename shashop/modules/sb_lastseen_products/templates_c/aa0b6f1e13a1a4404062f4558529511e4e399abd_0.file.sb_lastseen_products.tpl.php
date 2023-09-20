<?php
/* Smarty version 3.1.47, created on 2023-09-20 16:57:16
  from 'C:\xamp\xampp\htdocs\shashop\modules\sb_lastseen_products\sb_lastseen_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650ad714cc4ef5_77950980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0b6f1e13a1a4404062f4558529511e4e399abd' => 
    array (
      0 => 'C:\\xamp\\xampp\\htdocs\\shashop\\modules\\sb_lastseen_products\\sb_lastseen_products.tpl',
      1 => 1695209234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650ad714cc4ef5_77950980 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="sb_lastseen">
<?php echo var_dump($_smarty_tpl->tpl_vars['products_details']->value);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_details']->value, 'product_detail');
$_smarty_tpl->tpl_vars['product_detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_detail']->value) {
$_smarty_tpl->tpl_vars['product_detail']->do_else = false;
?>
            <div class="sb_lastviewed">
                                        <div class="sb_lastviewed_name">
                        <h5><?php echo $_smarty_tpl->tpl_vars['product_detail']->value["name"];?>
</h5>
                    </div>
                    <div class="sb_lastviewed_description">
                        <h5><?php echo $_smarty_tpl->tpl_vars['product_detail']->value["description"];?>
</h5>
                    </div>
                    <div class="sb_lastviewed_short_description">
                        <h5><?php echo $_smarty_tpl->tpl_vars['product_detail']->value["description_short"];?>
</h5>
                    </div>
                    <div class="sb_lastviewed_price">
                        <h5><?php echo $_smarty_tpl->tpl_vars['product_detail']->value["price"];?>
</h5>
                    </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>
<?php }
}
