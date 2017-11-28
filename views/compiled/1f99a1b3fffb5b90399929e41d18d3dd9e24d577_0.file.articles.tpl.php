<?php
/* Smarty version 3.1.30, created on 2017-05-31 10:03:21
  from "C:\Users\Soufiane\Desktop\school_projecten\P1.4\bap\MyBandV_M\MyBandV_M\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e94e952b742_17400349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f99a1b3fffb5b90399929e41d18d3dd9e24d577' => 
    array (
      0 => 'C:\\Users\\Soufiane\\Desktop\\school_projecten\\P1.4\\bap\\MyBandV_M\\MyBandV_M\\views\\articles.tpl',
      1 => 1495621721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e94e952b742_17400349 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">

<section>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_list']->value, 'one_article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one_article']->value) {
?>
        <article>
            <h1> <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
         <content><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</content>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</section>

</content>

<?php }
}
