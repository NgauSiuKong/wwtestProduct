<?php
/* Smarty version 3.1.31, created on 2017-12-12 02:46:44
  from "D:\install\wamp64\www\wwtestProduct\active\templates\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a2f43140bc505_36335250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f9e4d61d7fb14f3f53ae2537f2cde8c513c0e76' => 
    array (
      0 => 'D:\\install\\wamp64\\www\\wwtestProduct\\active\\templates\\edit.html',
      1 => 1513046659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a2f43140bc505_36335250 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目类别</label>
                            <div class="col-sm-6">
                                <select name="group_id" style="width:100%;">
                                    <option selected="selected">产品展示</option>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">分类</label>
                            <div class="col-sm-6">
                                <select name="group_id" style="width: 100%;">
                                    <option selected="selected" value="8">导入产品分类</option>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div> 
                         
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">型号</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['product_model'];?>
" name="title" value="文档" required type="text">

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
:<input type="radio" name="currency" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['currency_id'];?>
" checked></label>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </div>
                        </div>
                        <!--价格与数量的对应展示-->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_info']->value['price'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">价格</label>
                            <div class="col-sm-3">
                            
                             <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" name="title" value="价格1" required type="text">
                            </div>
                            <label for="group_id" class="col-sm-1 control-label no-padding-right">数量</label>
                                  <div class="col-sm-3">
                          <input class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="title" value="数量1" required type="text">
                            </div>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2  control-label no-padding-right">状态</label>
                            <div class="col-sm-3">
                                <label><input type="radio" name="radio" value="1" checked></label>&nbsp;开
                                <label><input type="radio" name="radio" value="2"></label>&nbsp;关
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2  control-label no-padding-right">首页显示</label>
                            <div class="col-sm-2">
                                <select name="group_id" style="width: 100%;">
                                    <option selected="selected" value="8">是</option>
                                    <option>否</option>
                                </select>
                            </div>
                        </div>
                        
                        <!--保存修改信息-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
