<?php if (!defined('THINK_PATH')) exit();?>
 
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>Content box</h3>
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
                <th>标题</th>
                <th>作者</th>
                <th>新闻分类</th>                                                               
                <th>图片</th>
                <th>时间</th>                                
                <th>编辑</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="9">
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
           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["title"]); ?></td>
                <td><?php echo ($vo["author"]); ?></td>
                <td><?php echo ($vo["name"]); ?></td>                                                                                               
                <!--有产品图片就显示，进行if判断-->
                <?php if($vo[image] != '' ): ?><td><img src="<?php echo ($vo["image"]); ?>"/></td>
                <?php else: ?>
                	<td>无图片</td><?php endif; ?>
                <td><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></td>                                
                <td>
                  <!-- Icons -->
                  <a href="<?php echo U('News/update',array('id'=>$vo['id']));?>" title="Edit"><img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/pencil.png" alt="Edit" /></a> <a href="<?php echo U('News/delete',array('id'=>$vo['id']));?>" title="Delete"><img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/cross.png" alt="Delete" /></a></td>                  
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
        </div>
        <!-- End #tab1 -->
        
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->