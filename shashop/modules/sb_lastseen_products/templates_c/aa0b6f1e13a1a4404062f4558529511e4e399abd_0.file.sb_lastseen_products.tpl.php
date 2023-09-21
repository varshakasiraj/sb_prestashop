<?php
/* Smarty version 3.1.47, created on 2023-09-21 17:08:20
  from 'C:\xamp\xampp\htdocs\shashop\modules\sb_lastseen_products\sb_lastseen_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650c2b2cb3db10_62264487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0b6f1e13a1a4404062f4558529511e4e399abd' => 
    array (
      0 => 'C:\\xamp\\xampp\\htdocs\\shashop\\modules\\sb_lastseen_products\\sb_lastseen_products.tpl',
      1 => 1695286672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650c2b2cb3db10_62264487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section class="home-module sb_lastseen clearfix"  id="sb_lastseen">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_details']->value, 'single_block', false, 'index');
$_smarty_tpl->tpl_vars['single_block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['single_block']->value) {
$_smarty_tpl->tpl_vars['single_block']->do_else = false;
?>
            <div class="block">    
                <div class="right-block ">
                     <div class="products">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['single_block']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <div>
                                <div class="thumbnail-container">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1123780402650c2b2cb066a0_74761038', 'product_thumbnail');
?>

                                </div>
                                <div class="product-description">
                                    <p class="reference"><?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
</p>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_765033249650c2b2cb364c7_28360568', 'product_name');
?>

                                </div>
                                
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>
<?php }
/* {block 'product_thumbnail'} */
class Block_1123780402650c2b2cb066a0_74761038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_1123780402650c2b2cb066a0_74761038',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xamp\\xampp\\htdocs\\shashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="thumbnail product-thumbnail">
                                        <img
                                            src="<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'];?>
"
                                            alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo $_smarty_tpl->tpl_vars['product']->value['cover']['legend'];
} else {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...');
}?>"
                                            loading="lazy"
                                            data-full-size-image-url="<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'];?>
"
                                            width="250"
                                            height="250"
                                        />
                                        </a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="thumbnail product-thumbnail">
                                        <img
                                            src="<?php echo $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'];?>
"
                                            loading="lazy"
                                            width="250"
                                            height="250"
                                        />
                                        </a>
                                    <?php }?>
                                    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_765033249650c2b2cb364c7_28360568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_765033249650c2b2cb364c7_28360568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xamp\\xampp\\htdocs\\shashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

                                    <h3 class="h3 product-title"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],75,'...');?>
</a></h3>
                                    <?php
}
}
/* {/block 'product_name'} */
}
