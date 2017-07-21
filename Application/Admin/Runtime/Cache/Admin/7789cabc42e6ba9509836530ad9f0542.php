<?php if (!defined('THINK_PATH')) exit();?>
 
    <!-- End .clear -->
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>订单列表</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">Table</a></li>
          <!-- href must be unique and match the id of target div -->
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
          <div class="notification attention png_bg"> <a href="#" class="close"><img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div> This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross. </div>
          </div>
          <table>
            <thead>
              <tr>
                <th>
                  <input class="check-all" type="checkbox" />
                </th>
                <th>序号</th>
                <th>订单编号</th>
                <th>会员名</th>                
                <th>订单总价</th>
                <th>时间</th>
                <th>状态</th>
                <th>查看</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="6">
                  <div class="bulk-actions align-left">
                    <select name="dropdown">
                      <option value="option1">Choose an action...</option>
                      <option value="option2">Edit</option>
                      <option value="option3">Delete</option>
                    </select>
                    <a class="button" href="#">Apply to selected</a> </div>
                  <div class="pagination"><?php echo ($page); ?></div>
                  <!-- End .pagination -->
                  <div class="clear"></div>
                </td>
              </tr>	
            </tfoot>
            <tbody>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['status'] == 0): ?><tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td><a href="/tp2/Admin.php/Order/viewOrder/id/<?php echo ($vo["id"]); ?>" title="点击查看订单详情"><?php echo ($vo["id"]); ?></a></td>
                <td><a href="/tp2/Admin.php/Order/viewOrder/id/<?php echo ($vo["id"]); ?>" title="点击查看订单详情"><?php echo ($vo["order_id"]); ?></a></td>
                <td><a href="/tp2/Admin.php/Order/viewOrder/id/<?php echo ($vo["id"]); ?>" title="点击查看订单详情"><?php echo ($vo["member_id"]); ?></a></td>                                                
                <td><a href="/tp2/Admin.php/Order/viewOrder/id/<?php echo ($vo["id"]); ?>" title="点击查看订单详情">￥<?php echo ($vo["total"]); ?>.00</a></td>
                <td><a href="/tp2/Admin.php/Order/viewOrder/id/<?php echo ($vo["id"]); ?>" title="点击查看订单详情"><?php echo ($vo["time"]); ?></a></td>
                <td>已发货</td>
                <td>
                  <!-- Icons -->
                 &nbsp;&nbsp;<a href="/tp2/Admin.php/Order/delete/id/<?php echo ($vo["id"]); ?>" onclick="return confirm('是否确认删除？');" title="Delete"><img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/cross.png" alt="Delete" /></a> 
              </tr><?php endif; endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
            </tbody>
          </table>
        </div>
        <!-- End #tab1 -->
       <div id="xs" ></div>
        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->