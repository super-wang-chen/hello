<?php if (!defined('THINK_PATH')) exit();?>
  <!-- End .clear -->
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>留言列表</h3>
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
                <th>用户</th>
                <th>留言内容</th>
                <th>留言时间</th>
                <th>编辑</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="5">
                  <div class="bulk-actions align-left">
                    <select name="dropdown">
                      <option value="option1">Choose an action...</option>
                      <option value="option2">Edit</option>
                      <option value="option3">Delete</option>
                    </select>
                    <a class="button" href="#">Apply to selected</a> </div>
                  <div class="pagination"></div>
                  <!-- End .pagination -->
                  <div class="clear"></div>
                </td>
              </tr>
            </tfoot>
            <tbody>
           <?php if(is_array($message)): foreach($message as $key=>$vo): ?><tr>              
                <td>
                  <input type="checkbox" />
                </td>
                <td><a href="/tp2/admin.php/Single/viewMessage/id/<?php echo ($vo["id"]); ?>" title="点击查看留言详情"><?php echo ($vo["id"]); ?></a></td>
                <td><a href="/tp2/admin.php/Single/viewMessage/id/<?php echo ($vo["id"]); ?>" title="点击查看留言详情"><?php echo ($vo["username"]); ?></a></td>                
                <td><a href="/tp2/admin.php/Single/viewMessage/id/<?php echo ($vo["id"]); ?>" title="点击查看留言详情"><?php echo (msubstr($vo["content"],0,10,'utf-8',true)); ?></a></td> 
                <td><a href="/tp2/admin.php/Single/viewMessage/id/<?php echo ($vo["id"]); ?>" title="点击查看留言详情"><?php echo ($vo["time"]); ?></a></td>               
                <td>
                  <!-- Icons -->
                  &nbsp&nbsp<a href="/tp2/admin.php/Single/delmessage/id/<?php echo ($vo["id"]); ?>" onclick="return confirm('是否确认删除？');" title="Delete"><img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/cross.png" alt="Delete" /></a> 
                </td>
              
              </tr><?php endforeach; endif; ?>
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