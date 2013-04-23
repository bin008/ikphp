<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($seo["title"]); ?> - <?php echo ($seo["subtitle"]); ?></title>
<meta name="keywords" content="<?php echo ($seo["keywords"]); ?>" /> 
<meta name="description" content="<?php echo ($seo["description"]); ?>" /> 
<meta property="wb:webmaster" content="c9fd7603df8ff038" />
<link rel="shortcut icon" href="__STATIC__/public/images/fav.ico" type="image/x-icon">
<style>__SITE_THEME_CSS__</style>
<!--[if gte IE 7]><!-->
    <link href="__STATIC__/public/js/dialog/skins5/idialog.css" rel="stylesheet" />
<!--<![endif]-->
<!--[if lt IE 7]>
    <link href="__STATIC__/public/js/dialog/skins5/idialog.css" rel="stylesheet" />
<![endif]-->
<script>var siteUrl = '__SITE_URL__';</script>
<script src="__STATIC__/public/js/jquery.js" type="text/javascript"></script>
<script src="__STATIC__/public/js/common.js" type="text/javascript"></script>
<script src="__STATIC__/public/js/IK.js" type="text/javascript" data-cfg-autoload="false"></script>
<script src="__STATIC__/public/js/all.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="__STATIC__/public/js/html5.js"></script>
<![endif]-->
<script src="__STATIC__/public/js/dialog/jquery.artDialog.min5.js" type="text/javascript"></script> 
__EXTENDS_JS__
<script type="text/javascript">
var SITEATTACH = "<?php echo C('ik_attach_path');?>";
var settingUrl = "<?php echo U('event/upload_poster',array('id'=>$eventid));?>";

IK.add('image', {path: '__STATIC__/public/js/lib/imgsel.js', type:'js'});
IK("image",function(){var c,g,b;function d(i,l){var j=100/l.width,h=150/l.height,k="";$("#preimg").css({width:Math.round(j*c)+"px",height:Math.round(h*g)+"px",marginLeft:"-"+Math.round(j*l.x1)+"px",marginTop:"-"+Math.round(h*l.y1)+"px"});if($("#imgpos").length){k=Math.round(l.x1/b)+","+Math.round(l.y1/b)+","+Math.round(l.width/b)+","+Math.round(l.height/b);$("#imgpos").val(k)}}if($("#imgSrc").length){var a=new Image(),f,e;a.src=$("#imgSrc").val();$(a).bind("load",function(){if(a.width>a.height){c=Math.min(a.width,300);g=a.height*c/a.width,b=c/a.width;f=(g-10)*2/3;e=g-10}else{g=Math.min(a.height,300);c=a.width*g/a.height;b=g/a.height;f=c-10;e=(c-10)*3/2;if(c*3/2>g){e=(g-10);f=e*2/3}}$("#bigimg").attr("src",a.src).css("width",c+"px");$("#bigimg").imgAreaSelect({x1:0,x2:f,y1:0,y2:e,aspectRatio:"2:3",onSelectChange:d,onSelectBegin:d,noNewSelect:"true"})})}$("#reuploadPhotoHook").click(function(h){h.preventDefault();$("#uploadPhotoCon").removeClass("hide");$(this).remove()});$("#icon_submit").click(function(h){if(!$("#picfile").val()){h.preventDefault();alert("请选择上传文件")}})});
</script>
</head>

<body>
<!--头部开始-->
<header>
<?php if($module_name == 'index' && empty($visitor)): ?><div class="hd-wrap">
            <div class="hd">
                <div class="logo">
                    <h1><a href="__SITE_URL__" title="爱客开源">爱客开源</a></h1>
                </div>
                <div class="top-nav-items">
                <ul>
                <li> <a href="http://www.ikphp.com" class="lnk-home" target="_blank">爱客首页</a></li>
                <li> <a href="<?php echo U('group/index');?>" class="lnk-group" target="_blank">爱客小组</a></li>
                <li> <a href="<?php echo U('article/index');?>" class="lnk-article" target="_blank">爱客阅读</a></li>
                <li> <a href="<?php echo U('location/index');?>" class="lnk-location" target="_blank">爱客同城</a></li>
                <li> <a href="<?php echo U('site/index');?>" class="lnk-site" target="_blank">爱客小站</a></li>
                </ul>
                </div>
            </div>
</div>
<?php else: ?>
<div class="top_nav">
  <div class="top_bd">
    
    <div class="top_info">
        <?php if(empty($visitor)): ?><a href="<?php echo U('user/login');?>">登录</a> | <a href="<?php echo U('user/register');?>">注册</a> | <a href="<?php echo U('oauth/index', array('mod'=>'qq'));?>" target="_blank" style="margin-left:10px"><img  align="absmiddle" title="QQ登录" src="__STATIC__/public/images/connect_qq.png"> 登录</a> | <a href="<?php echo U('oauth/index', array('mod'=>'sina'));?>" target="_blank" style="margin-left:10px"><img  align="absmiddle" title="新浪微博" src="__STATIC__/public/images/connect_sina_weibo.png"> 登录</a>    
        <?php else: ?>
        <a id="newmsg" href="<?php echo U('message/ikmail',array('d'=>'inbox'));?>">新消息(<?php echo ($count_new_msg); ?>)</a> | 
        <a href="<?php echo U('people/index', array('id'=>$visitor['doname']));?>">
        	<?php echo ($visitor["username"]); ?>
        </a> | 
        <a href="<?php echo U('user/setbase');?>">设置</a> | 
        <a href="<?php echo U('user/logout');?>">退出</a><?php endif; ?>
    </div>


    <div class="top_items">
        <ul>
             <li>
             <a href="__SITE_URL__">爱客</a>
             </li>             

             <li>
             <a href="<?php echo U('group/index');?>">小组</a>
             </li>
             
             <li>
             <a href="<?php echo U('article/index');?>">阅读</a>
             </li>   
             <li>
             <a href="<?php echo U('location/index');?>">同城</a>
             </li> 
             <li>
             <a href="<?php echo U('help/download');?>" style="color:#fff">IKPHP源码下载</a>
             </li>                                                      

        </ul>
    </div>
  	<div class="cl"></div>
    
  </div>
  
</div>

<!--header-->


<div id="header">
    
	<div class="site_nav">
        <div class="<?php echo ($logo[style]); ?>">
            <a href="<?php echo ($logo[url]); ?>"><?php echo ($logo[name]); ?></a>
        </div>
		<div class="appnav">
			    <ul id="nav_bar">
                    <?php if(is_array($arrNav)): foreach($arrNav as $key=>$item): ?><li><a href="<?php echo ($item[url]); ?>"><?php echo ($item[name]); ?></a></li><?php endforeach; endif; ?>
			    </ul>
		   <form onsubmit="return searchForm(this);" method="get" action="http://www.ik.com/index.php">
		   <input type="hidden" value="search" name="app"><input type="hidden" value="q" name="ac">
		    <div id="search_bar">
		        <div class="inp"><input type="text" placeholder="小组、话题、日志、成员、小站" value="小组、话题、日志、成员、小站" class="key" name="kw"></div>
		        <div class="inp-btn"><input type="submit" class="search-button" value="搜索"></div>
		    </div>
		    </form>
		</div>
        
        
		
        <div class="cl"></div>

	</div>
        
</div><?php endif; ?>

<!--APP NAV-->

</header>
<div class="midder">
    <div class="mc">
    	<h1><?php echo ($seo["title"]); ?></h1>
        <div class="cleft">
            <div class="nav-step">
              <span>1. 填写活动信息</span>
              <span class="pl">&gt;</span>
              <span class="pl">2. 上传活动海报</span>
              <span class="pl">&gt;</span>
              <span class="pl">3. 提交活动</span>
            </div>


<form method="post" name="upload-poster" enctype="multipart/form-data">
    <div class="img-container">
        <img id="bigimg"/>
        <input id="imgSrc" type="hidden" value="<?php echo ($imgSrc); ?>" />
        <input type="hidden" value="<?php echo ($imgpath); ?>" name="imgpath"/>
    </div>
    <div class="upload-info">
        <div class="upload hide" id="uploadPhotoCon">
            <h2>从电脑中选择你喜欢的照片:</h2>
            <p class="pl">你可以上传JPG、JPEG、GIF、PNG或BMP文件。</p>
            <input type="file" name="picfile" id="picfile" />
            <p>
            <input class="loc-btn" name="icon_submit" type="submit" id="icon_submit" value="上传照片"/>
            </p>
        </div>
        <a href="#" id="reuploadPhotoHook">重新选择上传图片</a>
        <div class="preview">
            <h2>这是你创建的活动的海报</h2>
            <div class="info clearfix">
                <div class="preview-box">
                    <img src="<?php echo ($imgSrc); ?>" id="preimg"/>
                </div>
                <p class="pl">随意拖拽或调整大图中的虚线区域，预览小图即为裁切后的效果。</p>
            </div>

            <input type="hidden" id="imgpos" name="imgpos" />
            <input type="submit" name="choose_submit" id="choose_submit" value="保存活动海报" class="loc-btn"/>
        </div>
    </div>
</form>

  
            
        </div><!--//left-->
    
        <div class="cright">

            <h2>让你的活动更吸引人！</h2>
            <p>用一张适合的图片代表你的活动，即使你没有专业的设计师。</p>
            <p>随意拖拽或调整大图中的虚线区域，预览小图即为裁切后的效果。</p>
            <p>高宽比为3:2的图片会得到最完整的显示。</p>

        </div><!--//right-->
    
    </div><!--//mc-->
</div><!--//midder-->
<!--footer-->
<footer>
<div id="footer">
	<div class="f_content">
        <span class="fl gray-link" id="icp">
            &copy; 2012－2015 IKPHP.COM, all rights reserved
        </span>
        
        <span class="fr">
            <a href="<?php echo U('help/about');?>">关于爱客</a>
            · <a href="<?php echo U('help/contact');?>">联系我们</a>
            · <a href="<?php echo U('help/agreement');?>">用户条款</a>
            · <a href="<?php echo U('help/privacy');?>">隐私申明</a>
        </span>
        <div class="cl"></div>
        <p>Powered by <a class="softname" href="<?php echo (IKPHP_SITEURL); ?>"><?php echo (IKPHP_SITENAME); ?></a> <?php echo (IKPHP_VERSION); ?>  <?php echo C('site_icp');?> <span style="color:green">ThinkPHP 版本 <?php echo (THINK_VERSION); ?></span><br />
        <span style="font-size:0.83em;">{__RUNTIME__}</span>
        
        <!--<script src="http://s21.cnzz.com/stat.php?id=2973516&web_id=2973516" language="JavaScript"></script>-->
        </p>   
    </div>
</div>
</footer>
</body>
</html>