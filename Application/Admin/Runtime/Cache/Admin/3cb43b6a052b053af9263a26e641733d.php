<?php if (!defined('THINK_PATH')) exit();?>
 <script type="text/javascript" src="/tp/Application/Admin/Admin/Common/resources/scripts/jquery.validate.js"></script>
<script type="text/javascript" src="/tp/Application/Admin/Admin/Common/resources/scripts/messages_zh.js"></script>
<script type="text/javascript" src="/tp/Application/Admin/Admin/Common/resources/scripts/adminCheck.js"></script>
    <!-- End .clear -->
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>Content box</h3>
        <ul class="content-box-tabs">
          <!-- href must be unique and match the id of target div -->
          <li><a href="#tab2" class="default-tab">Forms</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">

        <!-- End #tab1 -->
        <div class="tab-content default-tab" id="tab2">
          <form action="" method="post" id="from">
             <fieldset>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
      
              <label id="check" rel="/tp/admin.php/Admin/adminCheck">用户名</label>              
              <input type="hidden" type="text" value="<?php echo ($list["id"]); ?>"/>
              <p style="color:red;"><?php echo ($list["username"]); ?></p>              
              <span class="input-notification" id="user_check"></span>
            </p>
            <p>
              <label>密码</label>
              <input class="text-input small-input datepicker" type="password" id="password" name="password" value="<?php echo ($list["password"]); ?>"/>
              <span class="input-notification" id="pass_check"></span>
            </p>           
            <p>
              <label>重复密码</label>
              <input class="text-input small-input datepicker" type="password" id="repass" name="repass" value="<?php echo ($list["password"]); ?>"/>
              <span class="input-notification" id="repass_check"></span>
            </p> 
            <p>
              <label>邮箱</label>
              <input class="text-input small-input datepicker" type="text" id="e_mali" name="e_mail" value="<?php echo ($list["email"]); ?>"/>
              <span class="input-notification" id="email_check"></span>
            </p>            
            <p class="cateGory">
              <label>管理员权限</label>
              <select name="level" id="level">
               <option>请选择权限组</option>
               <?php if(is_array($info)): foreach($info as $key=>$vo): if($list['level'] == $vo['id']): ?><option value="<?php echo ($vo["id"]); ?>" selected="selected" ><?php echo ($vo["name"]); ?></option> 
                <?php else: ?>
                 <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; ?>
             </select>
             <span class="input-notification" id="level_check">请选择管理员权限等级</span>
            </p>          
            <p>
              <input class="button" type="submit" value="提  交" id="submit" />
            </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->
          </form>
        </div>
        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->
 <style>
.help-inline{color:red;font-size:12px;margin-left:5px}
 </style>