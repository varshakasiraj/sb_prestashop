<?php
/* Smarty version 3.1.47, created on 2023-09-22 12:03:52
  from 'C:\xamp\xampp\htdocs\shashop\modules\itjl_history\itjl_history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650d35505c3507_93903372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5830280ba7cc273d30c1c96302ef5b89c4b14b94' => 
    array (
      0 => 'C:\\xamp\\xampp\\htdocs\\shashop\\modules\\itjl_history\\itjl_history.tpl',
      1 => 1695363439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650d35505c3507_93903372 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1298568159650d3550580962_18095164', 'product_thumbnail');
?>

                                </div>
                                <div class="product-description">
                                    <p class="reference"><?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
</p>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1687801181650d35505bc251_61874962', 'product_name');
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
class Block_1298568159650d3550580962_18095164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_1298568159650d3550580962_18095164',
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
class Block_1687801181650d35505bc251_61874962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_1687801181650d35505bc251_61874962',
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
