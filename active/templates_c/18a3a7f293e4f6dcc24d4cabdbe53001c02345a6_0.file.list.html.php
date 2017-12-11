<?php
/* Smarty version 3.1.31, created on 2017-12-11 02:51:22
  from "D:\install\wamp64\www\wwtestProduct\active\templates\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a2df2aa435624_12158288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18a3a7f293e4f6dcc24d4cabdbe53001c02345a6' => 
    array (
      0 => 'D:\\install\\wamp64\\www\\wwtestProduct\\active\\templates\\list.html',
      1 => 1512960677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a2df2aa435624_12158288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li class="active">用户管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '/admin/user/add.html'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center">产品ID</th>
                                <th class="text-center">产品型号</th>
                                <th class="text-center">产品品牌</th>
                                <th class="text-center">产品代理</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_list']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                            <tr>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['product_id'];?>
</td>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['product_model'];?>
</td>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['brand_name'];?>
</td>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['agent_name'];?>
</td>
                                <td align="center">
                                    <a href="./edit.php?product_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['product_id'];?>
" class="btn btn-primary btn-sm shiny">
                                        编辑
                                    </a>
                                    <a href="#" onClick="warning('确实要删除吗', './delete.php?product_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['product_id'];?>
')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </tbody>
                    </table>
                    <?php echo $_smarty_tpl->tpl_vars['page_button']->value;?>

                </div>
                <div>
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
?>

<?php }
}
