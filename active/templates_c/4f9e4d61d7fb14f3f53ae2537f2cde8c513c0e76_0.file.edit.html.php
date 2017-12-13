<?php
/* Smarty version 3.1.31, created on 2017-12-13 03:52:28
  from "D:\install\wamp64\www\wwtestProduct\active\templates\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a30a3fce29d14_20303348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f9e4d61d7fb14f3f53ae2537f2cde8c513c0e76' => 
    array (
      0 => 'D:\\install\\wamp64\\www\\wwtestProduct\\active\\templates\\edit.html',
      1 => 1513137137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a30a3fce29d14_20303348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="#">用户管理</a>
                    </li>
                                        <li class="active">添加用户</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">产品管理</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" action="./edit_action.php" method="post">
                    <!--
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目类别</label>
                            <div class="col-sm-6">
                                <select name="group_id" style="width:100%;">
                                    <option selected="selected">产品展示</option>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                    -->
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">分类</label>
                            <div class="col-sm-6">
                                <select name="productcat_id" style="width: 100%;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productcat_info']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['productcat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['productcat_id'] == $_smarty_tpl->tpl_vars['product_info']->value['productcatId']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['val']->value['productcat_name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div> 
                         
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">型号</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_model'];?>
" name="product_model" value="文档" required type="text">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['productId'];?>
" name="product_id"/>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">代理商</label>
                            <div class="col-sm-6">
                                <select name="agent_id" style="width: 100%;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agent_info']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['agent_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['agent_id'] == $_smarty_tpl->tpl_vars['product_info']->value['agent_id']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['val']->value['agent_name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div> 
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">品牌</label>
                            <div class="col-sm-6">
                                <select name="brand_id" style="width: 100%;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brand_info']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['brand_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['brand_id'] == $_smarty_tpl->tpl_vars['product_info']->value['brand_id']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['val']->value['brand_name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div> 
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2  control-label no-padding-right">货币</label>
                            <div class="col-sm-3">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currency_info']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                <label>&nbsp;<?php echo $_smarty_tpl->tpl_vars['val']->value['currency_name'];?>
:<input type="radio" name="currency_id" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['currency_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['currency_id'] == $_smarty_tpl->tpl_vars['product_info']->value['currencyId']) {?>checked<?php }?>></label>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </div>
                        </div>
                        <!--价格与数量的对应展示-->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_info']->value['price'], 'val', false, 'key', 'pricename', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_pricename']->value['iteration']++;
?>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">价格</label>
                            <div class="col-sm-3">
                            
                             <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" name="sales_unitprice[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_pricename']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pricename']->value['iteration'] : null);?>
]" value="价格1" required type="text">
                            </div>
                            <label for="group_id" class="col-sm-1 control-label no-padding-right<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">数量</label>
                                  <div class="col-sm-3">
                          <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="purchase_quantity[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_pricename']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pricename']->value['iteration'] : null);?>
]" value="数量1" required type="text">
                            </div>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">库存</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_stocknum'];?>
" name="product_stocknum" value="文档" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">批次</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_batch'];?>
" name="product_batch"  type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">封装</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_package'];?>
" name="product_package" value="文档" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">eccn</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_eccn'];?>
" name="product_eccn" value="文档" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">datasheet</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_datasheet'];?>
" name="product_datasheet" value="文档" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2  control-label no-padding-right">热门</label>
                            <div class="col-sm-3">
                                <label><input type="radio" name="product_ishot" value="1" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['product_ishot'] == 1) {?>checked<?php }?>></label>&nbsp;是
                                <label><input type="radio" name="product_ishot" value="2" <?php if (2 == $_smarty_tpl->tpl_vars['product_info']->value['product_ishot']) {?>checked<?php }?>></label>&nbsp;不是
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2  control-label no-padding-right">每周特价</label>
                            <div class="col-sm-3">
                                <label><input type="radio" name="isweekly_special" value="1" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['isweekly_special'] == 1) {?>checked<?php }?>></label>&nbsp;是
                                <label><input type="radio" name="isweekly_special" value="0" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['isweekly_special'] == 0) {?>checked<?php }?>></label>&nbsp;不是
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2  control-label no-padding-right">现货商品</label>
                            <div class="col-sm-3">
                                <label><input type="radio" name="is_spot" value="1" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['is_spot'] == 1) {?>checked<?php }?>></label>&nbsp;是
                                <label><input type="radio" name="is_spot" value="0" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['is_spot'] == 0) {?>checked<?php }?>></label>&nbsp;不是
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2  control-label no-padding-right">可搜索</label>
                            <div class="col-sm-3">
                                <label><input type="radio" name="product_searchstatus" value="1" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['product_searchstatus'] == 1) {?>checked<?php }?>></label>&nbsp;可以
                                <label><input type="radio" name="product_searchstatus" value="2" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['product_searchstatus'] == 2) {?>checked<?php }?>></label>&nbsp;不可以
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2  control-label no-padding-right">状态</label>
                            <div class="col-sm-3">
                                <label><input type="radio" name="product_status" value="1" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['product_status'] == 1) {?>checked<?php }?>></label>&nbsp;启用
                                <label><input type="radio" name="product_status" value="0" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['product_status'] == 0) {?>checked<?php }?>></label>&nbsp;禁用
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2  control-label no-padding-right">首页显示</label>
                            <div class="col-sm-3">
                                <label><input type="radio" name="product_isindex" value="1" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['product_isindex'] == 1) {?>checked<?php }?>></label>&nbsp;显示
                                <label><input type="radio" name="product_isindex" value="2" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['product_isindex'] == 2) {?>checked<?php }?>></label>&nbsp;不显示
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">排序</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_order'];?>
" name="product_order" value="文档" type="text">
                            </div>
                        </div>
                        <!--保存修改信息-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-default"  value="确认修改">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>  
    </div>

<?php echo '<script'; ?>
 type="text/javascript" src="./templates/style/edit.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
