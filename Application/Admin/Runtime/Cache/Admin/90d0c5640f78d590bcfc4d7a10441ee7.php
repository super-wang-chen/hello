<?php if (!defined('THINK_PATH')) exit();?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>怀素堂品牌商城</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="/tp2/Application/Admin/Admin/Common/resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="/tp2/Application/Admin/Admin/Common/resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="/tp2/Application/Admin/Admin/Common/resources/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/jquery.min.js"></script>
<!--<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/jquery-1.3.2.min.js"></script> -->
<!-- jQuery Configuration -->
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/jquery.date.js"></script>
<script type="text/javascript" src="/tp2/Application/Admin/Admin/Common/resources/scripts/product.js"></script>

	<script type="text/javascript" charset="utf-8" src="/tp2/Application/Admin/Admin/Common/resources/scripts/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tp2/Application/Admin/Admin/Common/resources/scripts/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="/tp2/Application/Admin/Admin/Common/resources/scripts/ueditor/lang/zh-cn/zh-cn.js"></script>

</head>
<body>

<div id="body-wrapper">
  <!-- Wrapper for the radial gradient background -->
  <div id="sidebar">
    <div id="sidebar-wrapper">
      <!-- Sidebar with logo and menu -->
      <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
      <!-- Logo (221px wide) -->
      <a href="http://www.865171.cn"><img id="logo" src="/tp2/Application/Admin/Admin/Common/resources/images/logo.png" alt="Simpla Admin logo" /></a>
      <!-- Sidebar Profile links -->
      <div id="profile-links" style="font-size:14px;"> hello,<a href="javascript:;"  style="color:red;" title="Edit your profile"><?php echo ($_SESSION['adminName']); ?></a>，welcome!<br />
        <br />
        <a href="/tp2/index.php" title="View the Site">进入前台&nbsp|</a><a href="/tp2/Admin.php/Index/index" title="Sign Out">&nbsp退出</a> </div>
      <ul id="main-nav">
       <?php if(is_array($menu)): foreach($menu as $key=>$vo): if(in_array($vo['id'],$_SESSION['level_id']) == true): ?><li> <a href="<?php echo U($vo['url']);?>" class="nav-top-item <?php echo ($vo['en'] == $controller?'current':''); ?>"><?php echo ($vo["name"]); ?></a>
             <ul>
             <?php if(is_array($vo["child_menu"])): foreach($vo["child_menu"] as $key=>$v): if($v['status'] == 1 ): ?><li><a href="<?php echo U($v['url']);?>" class="<?php echo ($v['url']==$url?'current':''); ?>"><?php echo ($v["name"]); ?></a></li><?php endif; endforeach; endif; ?>
             </ul>
         </li><?php endif; endforeach; endif; ?> 
           
      </ul>
      <!-- End #main-nav -->
      <div id="messages" style="display: none">
        <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
        <h3>3 Messages</h3>
        <p> <strong>17th May 2009</strong> by Admin<br />
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <p> <strong>2nd May 2009</strong> by Jane Doe<br />
          Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <p> <strong>25th April 2009</strong> by Admin<br />
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <form action="#" method="post">
          <h4>New Message</h4>
          <fieldset>
          <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
          </fieldset>
          <fieldset>
          <select name="dropdown" class="small-input">
            <option value="option1">Send to...</option>
            <option value="option2">Everyone</option>
            <option value="option3">Admin</option>
            <option value="option4">Jane Doe</option>
          </select>
          <input class="button" type="submit" value="Send" />
          </fieldset>
        </form>
      </div>
      <!-- End #messages -->
    </div>
  </div>
  <!-- End #sidebar -->
  <div id="main-content">
    <!-- Main Content Section with everything -->
    <noscript>
    <!-- Show a notification if the user has disabled javascript -->
    <div class="notification error png_bg">
      <div> Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
        Download From <a href="http://www.exet.tk">exet.tk</a></div>
    </div>
    </noscript>
    <!-- Page Head -->
    <h2>怀素堂品牌商城</h2>
    
    <ul class="shortcut-buttons-set">
      <li><a class="shortcut-button" href="#"><span> <img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/pencil_48.png" alt="icon" /><br />
        Write an Article </span></a></li>
      <li><a class="shortcut-button" href="#"><span> <img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
        Create a New Page </span></a></li>
      <li><a class="shortcut-button" href="#"><span> <img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/image_add_48.png" alt="icon" /><br />
        Upload an Image </span></a></li>
      <li><a class="shortcut-button" href="#"><span> <img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/clock_48.png" alt="icon" /><br />
        Add an Event </span></a></li>
      <li><a class="shortcut-button" href="#messages" rel="modal"><span> <img src="/tp2/Application/Admin/Admin/Common/resources/images/icons/comment_48.png" alt="icon" /><br />
        Open Modal </span></a></li>
    </ul>
    <!-- End .shortcut-buttons-set -->
    <div class="clear"></div>
    <!-- End .clear -->
<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
</script>