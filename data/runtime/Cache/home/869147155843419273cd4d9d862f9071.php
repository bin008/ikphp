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
  var IK_BASE_URL = siteUrl;
  var lowLevelBrowser = true;
  if($.browser.webkit || $.browser.safari || $.browser.opera || $.browser.mozilla || (parseInt($.browser.version,10) > 8)){
      lowLevelBrowser = false;
  }
  
  IK.add('dialog-css', {path: '__STATIC__/public/css/ui/dialog.css', type: 'css'});
  IK.add('dialog', {path: '__STATIC__/public/js/ui/dialog.js', type: 'js', requires: ['dialog-css']});
   // Editable Select
  IK.add('editable-select-css', {path: '__STATIC__/public/css/lib/jquery.editable-select.css', type: 'css'});
  IK.add('editable-select', {path: '__STATIC__/public/js/lib/jquery.editable-select.js', type:"js", requires: ['editable-select-css']});
  // Date Picker
  IK.add('datePickercss', {path: '__STATIC__/public/css/ui/datepicker.css', type: 'css'});
  IK.add('datePicker', {path: '__STATIC__/public/js/lib/jquery.ui.min.js', type: 'js', requires: ['datePickercss']}); 
  
  IK.add('validate', {path: '__STATIC__/public/js/lib/validate.js', type:'js'});
  
  
  window._pinicon_ = 'http://img3.douban.com/pics/loc/pin.png';


  IK.add('imap', {path: '__STATIC__/public/js/ui/imap.js', type: 'js', requires: ['jquery.ui', 'dialog']});
  IK.add('google_map', {path: 'http://maps.google.com/maps/api/js?sensor=false&language=zh-CN&libraries=places&callback=loadMap', type: 'js'});

  function loadMap(){
    IK('imap', 
    '__STATIC__/public/css/ui/jquery.ui.autocomplete.css',
    '__STATIC__/public/js/lib/jquery.ui.autocomplete.min.js',
    '__STATIC__/theme/<?php echo C("ik_site_theme");?>/<?php echo ($module_name); ?>/js/map.js');
  }

  IK('google_map');

  
  //离开页面
</script>
<script type="text/javascript" src="__STATIC__/theme/<?php echo C('ik_site_theme');?>/<?php echo ($module_name); ?>/js/create.js"></script>
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
    	<h1>创建同城活动</h1>
        <div class="cleft">
            <div class="nav-step">
              <span>1. 填写活动信息</span>
              <span class="pl">&gt;</span>
              <span class="pl">2. 上传活动海报</span>
              <span class="pl">&gt;</span>
              <span class="pl">3. 提交活动</span>
            </div>
<form id="eform" name="eform" action="" method="post" autocomplete="off" tagName="form">        
<div class="row">
  <label class="field" for="type">活动分类</label>
  <div class="item"><select name="type" class="basic-input" id="type">
      <option value="00">请选择</option>
      
        
        <option value="10">音乐</option>
        
        <option value="11">戏剧</option>
        
        <option value="13">讲座</option>
        
        <option value="14">聚会</option>
        
        <option value="18">电影</option>
        
        <option value="12">展览</option>
        
        <option value="15">运动</option>
        
        <option value="17">公益</option>
        
        <option value="16">旅行</option>
        
        <option value="99">其他</option>
    </select></div>
  <div id="subtype-select" class="hide"></div>
</div>
<div class="row row-title">
        <label class="field" for="title">活动标题</label>
        <div class="item">
            <input type="text" size="64" name="title" maxlength="70" class="basic-input " value="" id="title">
        </div>
</div>
<hr class="hrline">

<div class="row" id="eventTimeHook">
  <label for="time" class="field">活动时间</label>
  <div class="item">
    <select id="repeat_type" name="repeat_type" class="basic-input">
      <option value="0" selected>当天结束</option>
      <option value="1" >连续多天</option>
      <option value="2" >每周举行</option>
      <option value="3" >自定义</option>
    </select>
    <input type="hidden" name="begin_date" id="begin_date" value=""/>
    <input type="hidden" name="begin_time" id="begin_time" value=""/>
    <input type="hidden" name="end_date" id="end_date" value=""/>
    <input type="hidden" name="end_time" id="end_time" value=""/>
    <input type="hidden" name="repeat_time" id="repeat_time" value=""/>
  </div>
  <div>
    <div id="evnetDateOnedayHook" class="item inner-back hide">
      <input placeholder="活动日期" class="basic-input event_calendar" id="one_begin_day" type="text" size="12" value=""/>

      <input type="hidden" class="editableHook" data-id="one_begin_time" data-start="true" data-time="" /> 至&nbsp;&nbsp;
      <input type="hidden" class="editableHook" data-id="one_end_time" data-time=""/>
    </div>
    <div id="eventDateContinueHook" class="item inner-back hide">
      <div class="con_item">
        <label for="week_start_day" class="inner">起止日期</label>
        <div class="inner-item">
          <input class="basic-input event_calendar" id="more_begin_day" name="more_begin_day" type="text" size="12" value=""/> 至&nbsp;&nbsp;
          <input class="basic-input event_calendar" id="more_end_day" name="more_end_day" type="text" size="12" value=""/>
        </div>
      </div>
      <div class="con_item">
        <label for="week_start_time" class="inner">活动时间</label>
        <div class="inner-item">
          <input type="hidden" class="editableHook" data-id="more_begin_time" data-start="true" data-time=""/> 至&nbsp;&nbsp;
          <input type="hidden" class="editableHook" data-id="more_end_time" data-time=""/>
        </div>
      </div>
      <div class="con_item clearfix">
        <label class="inner">活动描述</label>
        <div id="eventContinueDescHook">
        </div>
      </div>
    </div>
    <div id="eventDateWeekHook" class="item inner-back hide">
      <div class="con_item">
        <label for="" class="inner">活动频率</label>
        <div class="inner-item week-label">
          
          <label for="week_mon">一<input type="checkbox" name="week_mon" id="week_mon" /></label>
          <label for="week_tue">二<input type="checkbox" name="week_tue" id="week_tue" /></label>
          <label for="week_wed">三<input type="checkbox" name="week_wed" id="week_wed" /></label>
          <label for="week_thu">四<input type="checkbox" name="week_thu" id="week_thu" /></label>
          <label for="week_fri">五<input type="checkbox" name="week_fri" id="week_fri" /></label>
          <label for="week_sat">六<input type="checkbox" name="week_sat" id="week_sat" /></label>
          <label for="week_sun">日 <input type="checkbox" name="week_sun" id="week_sun" /></label>
        </div>
      </div>
      <div class="con_item">
        <label for="week_start_day" class="inner">起止日期</label>
        <div class="inner-item">
          <input class="basic-input event_calendar" id="week_begin_day" name="week_begin_day" type="text" size="12" value="" /> 至&nbsp;&nbsp;
          <input class="basic-input event_calendar" id="week_end_day" name="week_end_day" type="text" size="12" value=""/>
        </div>
      </div>
      <div class="con_item">
        <label for="week_start_time" class="inner">活动时间</label>
        <div class="inner-item">
          <input type="hidden" class="editableHook" data-id="week_begin_time" data-start="true" data-time=""/> 至&nbsp;&nbsp;
          <input type="hidden" class="editableHook" data-id="week_end_time" data-time=""/>
        </div>
      </div>
      <div class="con_item clearfix">
        <label class="inner">活动描述</label>
        <div id="eventWeekDescHook">
        </div>
      </div>
    </div>
    <div id="eventDateIntermHook" class="item inner-back hide">
      <div class="con_item">
        <label for="" class="inner">举办时间</label>
          <div class="inner-item interm-item">
            <input class="basic-input event_calendar interm_day" type="text" size="12" />
            <input type="hidden" class="editableHook" data-class="intermBeginTime" data-start="true"/> 至&nbsp;&nbsp;
            <input type="hidden" class="editableHook" data-class="intermEndTime"/>
          </div>
          <div class="inner-item interm-item">
            <input class="basic-input event_calendar interm_day" type="text" size="12" />
            <input type="hidden" class="editableHook" data-class="intermBeginTime" data-start="true"/> 至&nbsp;&nbsp;
            <input type="hidden" class="editableHook" data-class="intermEndTime"/>
          </div>
        <div class="inner-item">
          <a href="#" id="addEventDaysHook">添加时间</a>
        </div>
      </div>
      <div class="con_item clearfix">
        <label class="inner">活动描述</label>
        <div id="eventIntermDescHook">
        </div>
      </div>
    </div>
  </div>
</div>



<div class="row" id="pageAddressHook">
  
  <label class="field" for="page_address">活动地点<em class="man">*</em></label>
  <div class="item map-item-error">
    <span class="validate-error map-error-fix" style="display: inline;"></span>
    <input id="coordinate" type="hidden" name="coordinate" value="" />
  </div>
  <div class="item page-address">
    <input id="loc_id" name="loc_id" type="hidden" value="108288"/>


    <div class="all-address-field">
      <div id="events-new-address" class="item">
        <div class="address-field-scope">
          <span class="ui-drop-input">
            <input id="city" name="city" class="basic-input drop-input" size="6" max="8" value="北京" />
            <s class="tri-down"></s>
          </span>
          <select class="basic-input address-select" id="district_id" name="district_id">
            <option value="0">城区</option>
                <option value="128519">东城区</option>
                <option value="128520">西城区</option>
                <option value="128523">朝阳区</option>
                <option value="128524">丰台区</option>
                <option value="128525">石景山区</option>
                <option value="128526">海淀区</option>
                <option value="128527">门头沟区</option>
                <option value="128528">房山区</option>
                <option value="128529">通州区</option>
                <option value="128530">顺义区</option>
                <option value="128531">昌平区</option>
                <option value="128532">大兴区</option>
                <option value="128533">怀柔区</option>
                <option value="128534">平谷区</option>
                <option value="128535">密云县</option>
                <option value="128536">延庆县</option>
          </select>
          <select class="basic-input address-select" id="region_id" name="region_id">
            <option value="0">商圈(可选)</option>
          </select>
        </div>
        <div class="item street-address">
          <input class="basic-input" id="street_address" name="street_address" type="text" size="56" placeholder="详细地址" value="" maxlength="100"/>
        </div>
        <div id="new-map-card" class="map-card">
          <div class="bd">
              <a href="javascript:void(0);" data-type="new_mark" class="lnk-modify-addr">
                <img src="http://maps.google.cn/maps/api/staticmap?size=388x106&amp;zoom=6&amp;center=北京,CN&amp;sensor=false&amp;language=zh-CN" width="388" height="106">
                <span class="map-card-nomark">在地图上标注活动地点</span>
              </a>
            <div class="map-card-modify" style=display:none>
              已标注地点 <a href="javascript:void(0);" data-type="new_mark" class="no-visited lnk-modify-addr">修改</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="item">
    <a href="javascript:void(0)" id="addDirectionHook">设置乘车路线</a>
  </div>


</div>

<div class="citypicker ui-ftip ui-ftip-cb" id="city-picker" style="top: 541.683px; left: 561.5px; display: none;">
    <i class="pointer tri-up"><i class="tri-up"></i></i>
    <div class="cities">
      <div class="hd">
        <span class="tab on">热门</span>
        <span class="tab">A - G</span>
        <span class="tab">H - L</span>
        <span class="tab">M - T</span>
        <span class="tab">W - Z</span>
      </div>
      <div class="bd hot">
          
          <span><a data-uid="beijing" data-value="108288" href="javascipt:void(0)">北京</a></span>
          
          <span><a data-uid="shanghai" data-value="108296" href="javascipt:void(0)">上海</a></span>
          
          <span><a data-uid="guangzhou" data-value="118281" href="javascipt:void(0)">广州</a></span>
          
          <span><a data-uid="wuhan" data-value="118254" href="javascipt:void(0)">武汉</a></span>
          
          <span><a data-uid="shenzhen" data-value="118282" href="javascipt:void(0)">深圳</a></span>
          
          <span><a data-uid="chengdu" data-value="118318" href="javascipt:void(0)">成都</a></span>
          
          <span><a data-uid="hangzhou" data-value="118172" href="javascipt:void(0)">杭州</a></span>
          
          <span><a data-uid="nanjing" data-value="118159" href="javascipt:void(0)">南京</a></span>
          
          <span><a data-uid="xian" data-value="118371" href="javascipt:void(0)">西安</a></span>
          
          <span><a data-uid="chongqing" data-value="108309" href="javascipt:void(0)">重庆</a></span>
          
          <span><a data-uid="zhengzhou" data-value="118237" href="javascipt:void(0)">郑州</a></span>
          
          <span><a data-uid="changsha" data-value="118267" href="javascipt:void(0)">长沙</a></span>
          
          <span><a data-uid="tianjin" data-value="108289" href="javascipt:void(0)">天津</a></span>
          
          <span><a data-uid="fuzhou" data-value="118200" href="javascipt:void(0)">福州</a></span>
          
          <span><a data-uid="suzhou" data-value="118163" href="javascipt:void(0)">苏州</a></span>
          
          <span><a data-uid="shenyang" data-value="118123" href="javascipt:void(0)">沈阳</a></span>
          
          <span><a data-uid="wenzhou" data-value="118174" href="javascipt:void(0)">温州</a></span>
          
          <span><a data-uid="haerbin" data-value="118146" href="javascipt:void(0)">哈尔滨</a></span>
          
          <span><a data-uid="qingdao" data-value="118221" href="javascipt:void(0)">青岛</a></span>
          
          <span><a data-uid="jinan" data-value="118220" href="javascipt:void(0)">济南</a></span>
          
          <span><a data-uid="xiamen" data-value="118201" href="javascipt:void(0)">厦门</a></span>
          
          <span><a data-uid="dalian" data-value="118124" href="javascipt:void(0)">大连</a></span>
          
          <span><a data-uid="hefei" data-value="118183" href="javascipt:void(0)">合肥</a></span>
          
          <span><a data-uid="changchun" data-value="118137" href="javascipt:void(0)">长春</a></span>
          
          <span><a data-uid="ningbo" data-value="118173" href="javascipt:void(0)">宁波</a></span>
      </div>
        <div style="display:none;" class="bd">
            <dl class="mod">
                <dt>A</dt>
                <dd>
                  
                  <span><a data-uid="anyang" data-value="118244" href="javascipt:void(0)">安阳</a></span>
                  
                  <span><a data-uid="anqing" data-value="118190" href="javascipt:void(0)">安庆</a></span>
                  
                  <span><a data-uid="anshan" data-value="118125" href="javascipt:void(0)">鞍山</a></span>
                  
                  <span><a data-uid="anshun" data-value="118342" href="javascipt:void(0)">安顺</a></span>
                  
                  <span><a data-uid="ankang" data-value="118379" href="javascipt:void(0)">安康</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>B</dt>
                <dd>
                  
                  <span><a data-uid="beijing" data-value="108288" href="javascipt:void(0)">北京</a></span>
                  
                  <span><a data-uid="baoding" data-value="118093" href="javascipt:void(0)">保定</a></span>
                  
                  <span><a data-uid="binzhou" data-value="118235" href="javascipt:void(0)">滨州</a></span>
                  
                  <span><a data-uid="baotou" data-value="118112" href="javascipt:void(0)">包头</a></span>
                  
                  <span><a data-uid="baoji" data-value="118373" href="javascipt:void(0)">宝鸡</a></span>
                  
                  <span><a data-uid="beihai" data-value="118306" href="javascipt:void(0)">北海</a></span>
                  
                  <span><a data-uid="bayannaoer" data-value="118118" href="javascipt:void(0)">巴彦淖尔</a></span>
                  
                  <span><a data-uid="bangbu" data-value="118185" href="javascipt:void(0)">蚌埠</a></span>
                  
                  <span><a data-uid="bozhou" data-value="118197" href="javascipt:void(0)">亳州</a></span>
                  
                  <span><a data-uid="baoshan" data-value="118351" href="javascipt:void(0)">保山</a></span>
                  
                  <span><a data-uid="baishan" data-value="118142" href="javascipt:void(0)">白山</a></span>
                  
                  <span><a data-uid="baise" data-value="118311" href="javascipt:void(0)">百色</a></span>
                  
                  <span><a data-uid="benxi" data-value="118127" href="javascipt:void(0)">本溪</a></span>
                  
                  <span><a data-uid="bazhong" data-value="118334" href="javascipt:void(0)">巴中</a></span>
                  
                  <span><a data-uid="baiyin" data-value="118383" href="javascipt:void(0)">白银</a></span>
                  
                  <span><a data-uid="bijie" data-value="118344" href="javascipt:void(0)">毕节</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>C</dt>
                <dd>
                  
                  <span><a data-uid="chongqing" data-value="108309" href="javascipt:void(0)">重庆</a></span>
                  
                  <span><a data-uid="chengdu" data-value="118318" href="javascipt:void(0)">成都</a></span>
                  
                  <span><a data-uid="changsha" data-value="118267" href="javascipt:void(0)">长沙</a></span>
                  
                  <span><a data-uid="changzhou" data-value="118162" href="javascipt:void(0)">常州</a></span>
                  
                  <span><a data-uid="changchun" data-value="118137" href="javascipt:void(0)">长春</a></span>
                  
                  <span><a data-uid="cangzhou" data-value="118096" href="javascipt:void(0)">沧州</a></span>
                  
                  <span><a data-uid="chuzhou" data-value="118192" href="javascipt:void(0)">滁州</a></span>
                  
                  <span><a data-uid="changde" data-value="118273" href="javascipt:void(0)">常德</a></span>
                  
                  <span><a data-uid="chenzhou" data-value="118276" href="javascipt:void(0)">郴州</a></span>
                  
                  <span><a data-uid="129306" data-value="129306" href="javascipt:void(0)">常熟</a></span>
                  
                  <span><a data-uid="chaozhou" data-value="118299" href="javascipt:void(0)">潮州</a></span>
                  
                  <span><a data-uid="chengde" data-value="118095" href="javascipt:void(0)">承德</a></span>
                  
                  <span><a data-uid="chifeng" data-value="118114" href="javascipt:void(0)">赤峰</a></span>
                  
                  <span><a data-uid="changzhi" data-value="118103" href="javascipt:void(0)">长治</a></span>
                  
                  <span><a data-uid="chuxiong" data-value="118359" href="javascipt:void(0)">楚雄</a></span>
                  
                  <span><a data-uid="changji" data-value="118417" href="javascipt:void(0)">昌吉</a></span>
                  
                  <span><a data-uid="chizhou" data-value="118198" href="javascipt:void(0)">池州</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>D</dt>
                <dd>
                  
                  <span><a data-uid="dongguan" data-value="118297" href="javascipt:void(0)">东莞</a></span>
                  
                  <span><a data-uid="dalian" data-value="118124" href="javascipt:void(0)">大连</a></span>
                  
                  <span><a data-uid="daqing" data-value="118151" href="javascipt:void(0)">大庆</a></span>
                  
                  <span><a data-uid="dongying" data-value="118224" href="javascipt:void(0)">东营</a></span>
                  
                  <span><a data-uid="deyang" data-value="118322" href="javascipt:void(0)">德阳</a></span>
                  
                  <span><a data-uid="dezhou" data-value="118233" href="javascipt:void(0)">德州</a></span>
                  
                  <span><a data-uid="datong" data-value="118100" href="javascipt:void(0)">大同</a></span>
                  
                  <span><a data-uid="dali" data-value="118360" href="javascipt:void(0)">大理</a></span>
                  
                  <span><a data-uid="dandong" data-value="118128" href="javascipt:void(0)">丹东</a></span>
                  
                  <span><a data-uid="dazhou" data-value="118331" href="javascipt:void(0)">达州</a></span>
                  
                  <span><a data-uid="dehong" data-value="118361" href="javascipt:void(0)">德宏</a></span>
                  
                  <span><a data-uid="diqing" data-value="118363" href="javascipt:void(0)">迪庆</a></span>
                  
                  <span><a data-uid="danzhou" data-value="131433" href="javascipt:void(0)">儋州</a></span>
                  
                  <span><a data-uid="dingxi" data-value="118391" href="javascipt:void(0)">定西</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>E</dt>
                <dd>
                  
                  <span><a data-uid="enshi" data-value="118266" href="javascipt:void(0)">恩施</a></span>
                  
                  <span><a data-uid="eerduosi" data-value="118116" href="javascipt:void(0)">鄂尔多斯</a></span>
                  
                  <span><a data-uid="ezhou" data-value="118261" href="javascipt:void(0)">鄂州</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>F</dt>
                <dd>
                  
                  <span><a data-uid="foshan" data-value="118286" href="javascipt:void(0)">佛山</a></span>
                  
                  <span><a data-uid="fuzhou" data-value="118200" href="javascipt:void(0)">福州</a></span>
                  
                  <span><a data-uid="fushun" data-value="118126" href="javascipt:void(0)">抚顺</a></span>
                  
                  <span><a data-uid="118218" data-value="118218" href="javascipt:void(0)">抚州</a></span>
                  
                  <span><a data-uid="fuyang" data-value="118193" href="javascipt:void(0)">阜阳</a></span>
                  
                  <span><a data-uid="fuxin" data-value="118131" href="javascipt:void(0)">阜新</a></span>
                  
                  <span><a data-uid="fangchenggang" data-value="118307" href="javascipt:void(0)">防城港</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>G</dt>
                <dd>
                  
                  <span><a data-uid="guangzhou" data-value="118281" href="javascipt:void(0)">广州</a></span>
                  
                  <span><a data-uid="guiyang" data-value="118339" href="javascipt:void(0)">贵阳</a></span>
                  
                  <span><a data-uid="ganzhou" data-value="118215" href="javascipt:void(0)">赣州</a></span>
                  
                  <span><a data-uid="guilin" data-value="118304" href="javascipt:void(0)">桂林</a></span>
                  
                  <span><a data-uid="guyuan" data-value="118406" href="javascipt:void(0)">固原</a></span>
                  
                  <span><a data-uid="guangyuan" data-value="118324" href="javascipt:void(0)">广元</a></span>
                  
                  <span><a data-uid="ganzi" data-value="118337" href="javascipt:void(0)">甘孜</a></span>
                  
                  <span><a data-uid="guigang" data-value="118309" href="javascipt:void(0)">贵港</a></span>
                </dd>
            </dl>
        </div>
        <div style="display:none;" class="bd">
            <dl class="mod">
                <dt>H</dt>
                <dd>
                  
                  <span><a data-uid="hangzhou" data-value="118172" href="javascipt:void(0)">杭州</a></span>
                  
                  <span><a data-uid="hefei" data-value="118183" href="javascipt:void(0)">合肥</a></span>
                  
                  <span><a data-uid="huizhou" data-value="118291" href="javascipt:void(0)">惠州</a></span>
                  
                  <span><a data-uid="handan" data-value="118091" href="javascipt:void(0)">邯郸</a></span>
                  
                  <span><a data-uid="haerbin" data-value="118146" href="javascipt:void(0)">哈尔滨</a></span>
                  
                  <span><a data-uid="huaian" data-value="118166" href="javascipt:void(0)">淮安</a></span>
                  
                  <span><a data-uid="hengyang" data-value="118270" href="javascipt:void(0)">衡阳</a></span>
                  
                  <span><a data-uid="huzhou" data-value="118176" href="javascipt:void(0)">湖州</a></span>
                  
                  <span><a data-uid="huhehaote" data-value="118111" href="javascipt:void(0)">呼和浩特</a></span>
                  
                  <span><a data-uid="haikou" data-value="118316" href="javascipt:void(0)">海口</a></span>
                  
                  <span><a data-uid="honghe" data-value="118357" href="javascipt:void(0)">红河</a></span>
                  
                  <span><a data-uid="hulunbeier" data-value="118117" href="javascipt:void(0)">呼伦贝尔</a></span>
                  
                  <span><a data-uid="huangshi" data-value="118255" href="javascipt:void(0)">黄石</a></span>
                  
                  <span><a data-uid="huludao" data-value="118136" href="javascipt:void(0)">葫芦岛</a></span>
                  
                  <span><a data-uid="huanggang" data-value="118263" href="javascipt:void(0)">黄冈</a></span>
                  
                  <span><a data-uid="huainan" data-value="118186" href="javascipt:void(0)">淮南</a></span>
                  
                  <span><a data-uid="hefei" data-value="118183" href="javascipt:void(0)">合肥</a></span>
                  
                  <span><a data-uid="huaihua" data-value="118278" href="javascipt:void(0)">怀化</a></span>
                  
                  <span><a data-uid="hanzhong" data-value="118377" href="javascipt:void(0)">汉中</a></span>
                  
                  <span><a data-uid="huangshan" data-value="118191" href="javascipt:void(0)">黄山</a></span>
                  
                  <span><a data-uid="hebi" data-value="118242" href="javascipt:void(0)">鹤壁</a></span>
                  
                  <span><a data-uid="heyuan" data-value="118294" href="javascipt:void(0)">河源</a></span>
                  
                  <span><a data-uid="hengshui" data-value="118098" href="javascipt:void(0)">衡水</a></span>
                  
                  <span><a data-uid="hezhou" data-value="118312" href="javascipt:void(0)">贺州</a></span>
                  
                  <span><a data-uid="haixi" data-value="118402" href="javascipt:void(0)">海西</a></span>
                  
                  <span><a data-uid="hegang" data-value="118149" href="javascipt:void(0)">鹤岗</a></span>
                  
                  <span><a data-uid="heze" data-value="118236" href="javascipt:void(0)">菏泽</a></span>
                  
                  <span><a data-uid="hechi" data-value="118313" href="javascipt:void(0)">河池</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>J</dt>
                <dd>
                  
                  <span><a data-uid="jiaxing" data-value="118175" href="javascipt:void(0)">嘉兴</a></span>
                  
                  <span><a data-uid="jinan" data-value="118220" href="javascipt:void(0)">济南</a></span>
                  
                  <span><a data-uid="jinhua" data-value="118178" href="javascipt:void(0)">金华</a></span>
                  
                  <span><a data-uid="jiangmen" data-value="118287" href="javascipt:void(0)">江门</a></span>
                  
                  <span><a data-uid="jining" data-value="118228" href="javascipt:void(0)">济宁</a></span>
                  
                  <span><a data-uid="jingzhou" data-value="118258" href="javascipt:void(0)">荆州</a></span>
                  
                  <span><a data-uid="jiujiang" data-value="118212" href="javascipt:void(0)">九江</a></span>
                  
                  <span><a data-uid="jieyang" data-value="118300" href="javascipt:void(0)">揭阳</a></span>
                  
                  <span><a data-uid="jiaozuo" data-value="118241" href="javascipt:void(0)">焦作</a></span>
                  
                  <span><a data-uid="jincheng" data-value="118104" href="javascipt:void(0)">晋城</a></span>
                  
                  <span><a data-uid="jilin" data-value="129059" href="javascipt:void(0)">吉林</a></span>
                  
                  <span><a data-uid="jingdezhen" data-value="118210" href="javascipt:void(0)">景德镇</a></span>
                  
                  <span><a data-uid="jiyuan" data-value="128517" href="javascipt:void(0)">济源</a></span>
                  
                  <span><a data-uid="jingmen" data-value="118260" href="javascipt:void(0)">荆门</a></span>
                  
                  <span><a data-uid="jinzhong" data-value="118106" href="javascipt:void(0)">晋中</a></span>
                  
                  <span><a data-uid="jiuquan" data-value="118389" href="javascipt:void(0)">酒泉</a></span>
                  
                  <span><a data-uid="jinzhou" data-value="118129" href="javascipt:void(0)">锦州</a></span>
                  
                  <span><a data-uid="jixi" data-value="118148" href="javascipt:void(0)">鸡西</a></span>
                  
                  <span><a data-uid="jiamusi" data-value="118154" href="javascipt:void(0)">佳木斯</a></span>
                  
                  <span><a data-uid="jiayuguan" data-value="118385" href="javascipt:void(0)">嘉峪关</a></span>
                  
                  <span><a data-uid="jian" data-value="118216" href="javascipt:void(0)">吉安</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>K</dt>
                <dd>
                  
                  <span><a data-uid="kunming" data-value="118348" href="javascipt:void(0)">昆明</a></span>
                  
                  <span><a data-uid="kaifeng" data-value="118238" href="javascipt:void(0)">开封</a></span>
                  
                  <span><a data-uid="131410" data-value="131410" href="javascipt:void(0)">昆山</a></span>
                  
                  <span><a data-uid="130313" data-value="130313" href="javascipt:void(0)">开平</a></span>
                  
                  <span><a data-uid="kelamayi" data-value="118409" href="javascipt:void(0)">克拉玛依</a></span>
                  
                  <span><a data-uid="131410" data-value="131410" href="javascipt:void(0)">昆山</a></span>
                  
                  <span><a data-uid="kashen" data-value="118414" href="javascipt:void(0)">喀什</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>L</dt>
                <dd>
                  
                  <span><a data-uid="lanzhou" data-value="118381" href="javascipt:void(0)">兰州</a></span>
                  
                  <span><a data-uid="lishui" data-value="118182" href="javascipt:void(0)">丽水</a></span>
                  
                  <span><a data-uid="luoyang" data-value="118239" href="javascipt:void(0)">洛阳</a></span>
                  
                  <span><a data-uid="linyi" data-value="118232" href="javascipt:void(0)">临沂</a></span>
                  
                  <span><a data-uid="longyan" data-value="118207" href="javascipt:void(0)">龙岩</a></span>
                  
                  <span><a data-uid="loudi" data-value="118279" href="javascipt:void(0)">娄底</a></span>
                  
                  <span><a data-uid="liaocheng" data-value="118234" href="javascipt:void(0)">聊城</a></span>
                  
                  <span><a data-uid="luan" data-value="118196" href="javascipt:void(0)">六安</a></span>
                  
                  <span><a data-uid="leshan" data-value="118327" href="javascipt:void(0)">乐山</a></span>
                  
                  <span><a data-uid="liupanshui" data-value="118340" href="javascipt:void(0)">六盘水</a></span>
                  
                  <span><a data-uid="langfang" data-value="118097" href="javascipt:void(0)">廊坊</a></span>
                  
                  <span><a data-uid="lianyungang" data-value="118165" href="javascipt:void(0)">连云港</a></span>
                  
                  <span><a data-uid="liuzhou" data-value="118303" href="javascipt:void(0)">柳州</a></span>
                  
                  <span><a data-uid="laiwu" data-value="118231" href="javascipt:void(0)">莱芜</a></span>
                  
                  <span><a data-uid="longnan" data-value="118392" href="javascipt:void(0)">陇南</a></span>
                  
                  <span><a data-uid="luzhou" data-value="118321" href="javascipt:void(0)">泸州</a></span>
                  
                  <span><a data-uid="liaoyuan" data-value="118140" href="javascipt:void(0)">辽源</a></span>
                  
                  <span><a data-uid="lasa" data-value="118364" href="javascipt:void(0)">拉萨</a></span>
                  
                  <span><a data-uid="luohe" data-value="118247" href="javascipt:void(0)">漯河</a></span>
                  
                  <span><a data-uid="linfen" data-value="118109" href="javascipt:void(0)">临汾</a></span>
                  
                  <span><a data-uid="lvliang" data-value="118110" href="javascipt:void(0)">吕梁</a></span>
                  
                  <span><a data-uid="lijiang" data-value="118353" href="javascipt:void(0)">丽江</a></span>
                  
                  <span><a data-uid="liaoyang" data-value="118132" href="javascipt:void(0)">辽阳</a></span>
                  
                  <span><a data-uid="lincang" data-value="118355" href="javascipt:void(0)">临沧</a></span>
                  
                  <span><a data-uid="liangshan" data-value="118338" href="javascipt:void(0)">凉山</a></span>
                </dd>
            </dl>
        </div>
        <div style="display:none;" class="bd">
            <dl class="mod">
                <dt>M</dt>
                <dd>
                  
                  <span><a data-uid="mianyang" data-value="118323" href="javascipt:void(0)">绵阳</a></span>
                  
                  <span><a data-uid="maanshan" data-value="118187" href="javascipt:void(0)">马鞍山</a></span>
                  
                  <span><a data-uid="maoming" data-value="118289" href="javascipt:void(0)">茂名</a></span>
                  
                  <span><a data-uid="meishan" data-value="118332" href="javascipt:void(0)">眉山</a></span>
                  
                  <span><a data-uid="meizhou" data-value="118292" href="javascipt:void(0)">梅州</a></span>
                  
                  <span><a data-uid="mudanjiang" data-value="118153" href="javascipt:void(0)">牡丹江</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>N</dt>
                <dd>
                  
                  <span><a data-uid="ningbo" data-value="118173" href="javascipt:void(0)">宁波</a></span>
                  
                  <span><a data-uid="nanjing" data-value="118159" href="javascipt:void(0)">南京</a></span>
                  
                  <span><a data-uid="nantong" data-value="118164" href="javascipt:void(0)">南通</a></span>
                  
                  <span><a data-uid="nanning" data-value="118302" href="javascipt:void(0)">南宁</a></span>
                  
                  <span><a data-uid="nanchang" data-value="118209" href="javascipt:void(0)">南昌</a></span>
                  
                  <span><a data-uid="nanchong" data-value="118328" href="javascipt:void(0)">南充</a></span>
                  
                  <span><a data-uid="nanping" data-value="118206" href="javascipt:void(0)">南平</a></span>
                  
                  <span><a data-uid="nanyang" data-value="118249" href="javascipt:void(0)">南阳</a></span>
                  
                  <span><a data-uid="ningde" data-value="118208" href="javascipt:void(0)">宁德</a></span>
                  
                  <span><a data-uid="neijiang" data-value="118326" href="javascipt:void(0)">内江</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>P</dt>
                <dd>
                  
                  <span><a data-uid="panjin" data-value="118133" href="javascipt:void(0)">盘锦</a></span>
                  
                  <span><a data-uid="putian" data-value="118202" href="javascipt:void(0)">莆田</a></span>
                  
                  <span><a data-uid="pingdingshan" data-value="118240" href="javascipt:void(0)">平顶山</a></span>
                  
                  <span><a data-uid="pingxiang" data-value="118211" href="javascipt:void(0)">萍乡</a></span>
                  
                  <span><a data-uid="puyang" data-value="118245" href="javascipt:void(0)">濮阳</a></span>
                  
                  <span><a data-uid="panzhihua" data-value="118320" href="javascipt:void(0)">攀枝花</a></span>
                  
                  <span><a data-uid="puer" data-value="130880" href="javascipt:void(0)">普洱</a></span>
                  
                  <span><a data-uid="pingliang" data-value="118388" href="javascipt:void(0)">平凉</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>Q</dt>
                <dd>
                  
                  <span><a data-uid="qingdao" data-value="118221" href="javascipt:void(0)">青岛</a></span>
                  
                  <span><a data-uid="quanzhou" data-value="118204" href="javascipt:void(0)">泉州</a></span>
                  
                  <span><a data-uid="quzhou" data-value="118179" href="javascipt:void(0)">衢州</a></span>
                  
                  <span><a data-uid="qingyuan" data-value="118296" href="javascipt:void(0)">清远</a></span>
                  
                  <span><a data-uid="qinzhou" data-value="118308" href="javascipt:void(0)">钦州</a></span>
                  
                  <span><a data-uid="qiqihaer" data-value="118147" href="javascipt:void(0)">齐齐哈尔</a></span>
                  
                  <span><a data-uid="qujing" data-value="118349" href="javascipt:void(0)">曲靖</a></span>
                  
                  <span><a data-uid="qinhuangdao" data-value="118090" href="javascipt:void(0)">秦皇岛</a></span>
                  
                  <span><a data-uid="qionghai" data-value="131407" href="javascipt:void(0)">琼海</a></span>
                  
                  <span><a data-uid="qianxinan" data-value="118345" href="javascipt:void(0)">黔西南</a></span>
                  
                  <span><a data-uid="qiandongnan" data-value="118346" href="javascipt:void(0)">黔东南</a></span>
                  
                  <span><a data-uid="qianjiang" data-value="128466" href="javascipt:void(0)">潜江</a></span>
                  
                  <span><a data-uid="qiannan" data-value="118347" href="javascipt:void(0)">黔南</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>R</dt>
                <dd>
                  
                  <span><a data-uid="rizhao" data-value="118230" href="javascipt:void(0)">日照</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>S</dt>
                <dd>
                  
                  <span><a data-uid="shanghai" data-value="108296" href="javascipt:void(0)">上海</a></span>
                  
                  <span><a data-uid="shenzhen" data-value="118282" href="javascipt:void(0)">深圳</a></span>
                  
                  <span><a data-uid="shenyang" data-value="118123" href="javascipt:void(0)">沈阳</a></span>
                  
                  <span><a data-uid="suzhou" data-value="118163" href="javascipt:void(0)">苏州</a></span>
                  
                  <span><a data-uid="shijiazhuang" data-value="118088" href="javascipt:void(0)">石家庄</a></span>
                  
                  <span><a data-uid="shaoxing" data-value="118177" href="javascipt:void(0)">绍兴</a></span>
                  
                  <span><a data-uid="shiyan" data-value="118257" href="javascipt:void(0)">十堰</a></span>
                  
                  <span><a data-uid="sanming" data-value="118203" href="javascipt:void(0)">三明</a></span>
                  
                  <span><a data-uid="shangrao" data-value="118219" href="javascipt:void(0)">上饶</a></span>
                  
                  <span><a data-uid="suqian" data-value="118171" href="javascipt:void(0)">宿迁</a></span>
                  
                  <span><a data-uid="sanya" data-value="118317" href="javascipt:void(0)">三亚</a></span>
                  
                  <span><a data-uid="shantou" data-value="118284" href="javascipt:void(0)">汕头</a></span>
                  
                  <span><a data-uid="shaoguan" data-value="118285" href="javascipt:void(0)">韶关</a></span>
                  
                  <span><a data-uid="suihua" data-value="118157" href="javascipt:void(0)">绥化</a></span>
                  
                  <span><a data-uid="shaoyang" data-value="118271" href="javascipt:void(0)">邵阳</a></span>
                  
                  <span><a data-uid="suining" data-value="118325" href="javascipt:void(0)">遂宁</a></span>
                  
                  <span><a data-uid="shanwei" data-value="118293" href="javascipt:void(0)">汕尾</a></span>
                  
                  <span><a data-uid="shangqiu" data-value="118250" href="javascipt:void(0)">商丘</a></span>
                  
                  <span><a data-uid="shizuishan" data-value="118404" href="javascipt:void(0)">石嘴山</a></span>
                  
                  <span><a data-uid="siping" data-value="118139" href="javascipt:void(0)">四平</a></span>
                  
                  <span><a data-uid="118194" data-value="118194" href="javascipt:void(0)">宿州</a></span>
                  
                  <span><a data-uid="sanmenxia" data-value="118248" href="javascipt:void(0)">三门峡</a></span>
                  
                  <span><a data-uid="suizhou" data-value="118265" href="javascipt:void(0)">随州</a></span>
                  
                  <span><a data-uid="shangluo" data-value="118380" href="javascipt:void(0)">商洛</a></span>
                  
                  <span><a data-uid="songyuan" data-value="118143" href="javascipt:void(0)">松原</a></span>
                  
                  <span><a data-uid="shihezi" data-value="128496" href="javascipt:void(0)">石河子</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>T</dt>
                <dd>
                  
                  <span><a data-uid="tianjin" data-value="108289" href="javascipt:void(0)">天津</a></span>
                  
                  <span><a data-uid="118181" data-value="118181" href="javascipt:void(0)">台州</a></span>
                  
                  <span><a data-uid="taizhou" data-value="118170" href="javascipt:void(0)">泰州</a></span>
                  
                  <span><a data-uid="taiyuan" data-value="118099" href="javascipt:void(0)">太原</a></span>
                  
                  <span><a data-uid="tangshan" data-value="118089" href="javascipt:void(0)">唐山</a></span>
                  
                  <span><a data-uid="taian" data-value="118229" href="javascipt:void(0)">泰安</a></span>
                  
                  <span><a data-uid="tongren" data-value="118343" href="javascipt:void(0)">铜仁</a></span>
                  
                  <span><a data-uid="tonghua" data-value="118141" href="javascipt:void(0)">通化</a></span>
                  
                  <span><a data-uid="tongling" data-value="118189" href="javascipt:void(0)">铜陵</a></span>
                  
                  <span><a data-uid="tieling" data-value="118134" href="javascipt:void(0)">铁岭</a></span>
                  
                  <span><a data-uid="129310" data-value="129310" href="javascipt:void(0)">太仓</a></span>
                  
                  <span><a data-uid="tongliao" data-value="118115" href="javascipt:void(0)">通辽</a></span>
                  
                  <span><a data-uid="tianshui" data-value="118384" href="javascipt:void(0)">天水</a></span>
                  
                  <span><a data-uid="tianmen" data-value="128464" href="javascipt:void(0)">天门</a></span>
                  
                  <span><a data-uid="tongchuan" data-value="118372" href="javascipt:void(0)">铜川</a></span>
                </dd>
            </dl>
        </div>
        <div style="display:none;" class="bd">
            <dl class="mod">
                <dt>W</dt>
                <dd>
                  
                  <span><a data-uid="wuhan" data-value="118254" href="javascipt:void(0)">武汉</a></span>
                  
                  <span><a data-uid="wuxi" data-value="118160" href="javascipt:void(0)">无锡</a></span>
                  
                  <span><a data-uid="wenzhou" data-value="118174" href="javascipt:void(0)">温州</a></span>
                  
                  <span><a data-uid="weifang" data-value="118225" href="javascipt:void(0)">潍坊</a></span>
                  
                  <span><a data-uid="wulumuqi" data-value="118408" href="javascipt:void(0)">乌鲁木齐</a></span>
                  
                  <span><a data-uid="weihai" data-value="118227" href="javascipt:void(0)">威海</a></span>
                  
                  <span><a data-uid="wuhu" data-value="118184" href="javascipt:void(0)">芜湖</a></span>
                  
                  <span><a data-uid="weinan" data-value="118375" href="javascipt:void(0)">渭南</a></span>
                  
                  <span><a data-uid="wuhai" data-value="118113" href="javascipt:void(0)">乌海</a></span>
                  
                  <span><a data-uid="wuzhou" data-value="118305" href="javascipt:void(0)">梧州</a></span>
                  
                  <span><a data-uid="129309" data-value="129309" href="javascipt:void(0)">吴江区</a></span>
                  
                  <span><a data-uid="wuwei" data-value="118386" href="javascipt:void(0)">武威</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>X</dt>
                <dd>
                  
                  <span><a data-uid="xian" data-value="118371" href="javascipt:void(0)">西安</a></span>
                  
                  <span><a data-uid="xiamen" data-value="118201" href="javascipt:void(0)">厦门</a></span>
                  
                  <span><a data-uid="xingtai" data-value="118092" href="javascipt:void(0)">邢台</a></span>
                  
                  <span><a data-uid="xiangtan" data-value="118269" href="javascipt:void(0)">湘潭</a></span>
                  
                  <span><a data-uid="xuzhou" data-value="118161" href="javascipt:void(0)">徐州</a></span>
                  
                  <span><a data-uid="xinyang" data-value="118251" href="javascipt:void(0)">信阳</a></span>
                  
                  <span><a data-uid="xianning" data-value="118264" href="javascipt:void(0)">咸宁</a></span>
                  
                  <span><a data-uid="xinxiang" data-value="118243" href="javascipt:void(0)">新乡</a></span>
                  
                  <span><a data-uid="xinyu" data-value="118213" href="javascipt:void(0)">新余</a></span>
                  
                  <span><a data-uid="xuchang" data-value="118246" href="javascipt:void(0)">许昌</a></span>
                  
                  <span><a data-uid="xuancheng" data-value="118199" href="javascipt:void(0)">宣城</a></span>
                  
                  <span><a data-uid="xiangyang" data-value="118256" href="javascipt:void(0)">襄阳</a></span>
                  
                  <span><a data-uid="xianyang" data-value="118374" href="javascipt:void(0)">咸阳</a></span>
                  
                  <span><a data-uid="xishuangbanna" data-value="118358" href="javascipt:void(0)">西双版纳</a></span>
                  
                  <span><a data-uid="xiaogan" data-value="118262" href="javascipt:void(0)">孝感</a></span>
                  
                  <span><a data-uid="xiantao" data-value="128465" href="javascipt:void(0)">仙桃</a></span>
                  
                  <span><a data-uid="xining" data-value="118395" href="javascipt:void(0)">西宁</a></span>
                  
                  <span><a data-uid="xiangxi" data-value="118280" href="javascipt:void(0)">湘西</a></span>
                  
                  <span><a data-uid="xinganmeng" data-value="118122" href="javascipt:void(0)">兴安盟</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>Y</dt>
                <dd>
                  
                  <span><a data-uid="yantai" data-value="118226" href="javascipt:void(0)">烟台</a></span>
                  
                  <span><a data-uid="yancheng" data-value="118167" href="javascipt:void(0)">盐城</a></span>
                  
                  <span><a data-uid="yinchuan" data-value="118403" href="javascipt:void(0)">银川</a></span>
                  
                  <span><a data-uid="yangzhou" data-value="118168" href="javascipt:void(0)">扬州</a></span>
                  
                  <span><a data-uid="yichun" data-value="118217" href="javascipt:void(0)">宜春</a></span>
                  
                  <span><a data-uid="118378" data-value="118378" href="javascipt:void(0)">榆林</a></span>
                  
                  <span><a data-uid="yuncheng" data-value="118107" href="javascipt:void(0)">运城</a></span>
                  
                  <span><a data-uid="yueyang" data-value="118272" href="javascipt:void(0)">岳阳</a></span>
                  
                  <span><a data-uid="yichang" data-value="118259" href="javascipt:void(0)">宜昌</a></span>
                  
                  <span><a data-uid="yingkou" data-value="118130" href="javascipt:void(0)">营口</a></span>
                  
                  <span><a data-uid="yiyang" data-value="118275" href="javascipt:void(0)">益阳</a></span>
                  
                  <span><a data-uid="yingtan" data-value="118214" href="javascipt:void(0)">鹰潭</a></span>
                  
                  <span><a data-uid="yanbian" data-value="118145" href="javascipt:void(0)">延边</a></span>
                  
                  <span><a data-uid="yangjiang" data-value="118295" href="javascipt:void(0)">阳江</a></span>
                  
                  <span><a data-uid="yibin" data-value="118329" href="javascipt:void(0)">宜宾</a></span>
                  
                  <span><a data-uid="yuxi" data-value="118350" href="javascipt:void(0)">玉溪</a></span>
                  
                  <span><a data-uid="yunfu" data-value="118301" href="javascipt:void(0)">云浮</a></span>
                  
                  <span><a data-uid="yili" data-value="118419" href="javascipt:void(0)">伊犁</a></span>
                  
                  <span><a data-uid="yangquan" data-value="118102" href="javascipt:void(0)">阳泉</a></span>
                  
                  <span><a data-uid="yongzhou" data-value="118277" href="javascipt:void(0)">永州</a></span>
                  
                  <span><a data-uid="yulin" data-value="118310" href="javascipt:void(0)">玉林</a></span>
                  
                  <span><a data-uid="yaan" data-value="118333" href="javascipt:void(0)">雅安</a></span>
                  
                  <span><a data-uid="yanan" data-value="118376" href="javascipt:void(0)">延安</a></span>
                  
                  <span><a data-uid="131061" data-value="131061" href="javascipt:void(0)">杨凌区</a></span>
                </dd>
            </dl>
            <dl class="mod">
                <dt>Z</dt>
                <dd>
                  
                  <span><a data-uid="zhengzhou" data-value="118237" href="javascipt:void(0)">郑州</a></span>
                  
                  <span><a data-uid="zhongshan" data-value="118298" href="javascipt:void(0)">中山</a></span>
                  
                  <span><a data-uid="zhenjiang" data-value="118169" href="javascipt:void(0)">镇江</a></span>
                  
                  <span><a data-uid="zhuzhou" data-value="118268" href="javascipt:void(0)">株洲</a></span>
                  
                  <span><a data-uid="zhanjiang" data-value="118288" href="javascipt:void(0)">湛江</a></span>
                  
                  <span><a data-uid="zhangjiakou" data-value="118094" href="javascipt:void(0)">张家口</a></span>
                  
                  <span><a data-uid="zibo" data-value="118222" href="javascipt:void(0)">淄博</a></span>
                  
                  <span><a data-uid="zhangzhou" data-value="118205" href="javascipt:void(0)">漳州</a></span>
                  
                  <span><a data-uid="zaozhuang" data-value="118223" href="javascipt:void(0)">枣庄</a></span>
                  
                  <span><a data-uid="zhaoqing" data-value="118290" href="javascipt:void(0)">肇庆</a></span>
                  
                  <span><a data-uid="zhuhai" data-value="118283" href="javascipt:void(0)">珠海</a></span>
                  
                  <span><a data-uid="zunyi" data-value="118341" href="javascipt:void(0)">遵义</a></span>
                  
                  <span><a data-uid="zhoushan" data-value="118180" href="javascipt:void(0)">舟山</a></span>
                  
                  <span><a data-uid="zhumadian" data-value="118253" href="javascipt:void(0)">驻马店</a></span>
                  
                  <span><a data-uid="zigong" data-value="118319" href="javascipt:void(0)">自贡</a></span>
                  
                  <span><a data-uid="zhangjiajie" data-value="118274" href="javascipt:void(0)">张家界</a></span>
                  
                  <span><a data-uid="zhangye" data-value="118387" href="javascipt:void(0)">张掖</a></span>
                  
                  <span><a data-uid="zhoukou" data-value="118252" href="javascipt:void(0)">周口</a></span>
                  
                  <span><a data-uid="ziyang" data-value="118335" href="javascipt:void(0)">资阳</a></span>
                  
                  <span><a data-uid="zhongwei" data-value="118407" href="javascipt:void(0)">中卫</a></span>
                </dd>
            </dl>
        </div>
    </div>
  </div>

    
<div class="row">
  <label class="field" for="desc">活动详情<em class="man">*</em></label>
  <div class="item desc">
    <textarea class="basic-input" id="desc" name="desc" rows="10" cols="54" max_length="4000" ></textarea>
  </div>
</div>

<hr class="hrline" />
    

<div class="row" id="activeFeeHook">
  <label class="field" for="fee">活动费用</label>
  <div class="item fee">

    <label class="no-need-fee">                                              
      <input name="fee" type="radio" class="fee-value" checked value="0"/>免费
    </label>                                                                 
    <label>                                                                  
      <input name="fee" type="radio" class="fee-value" value="1"  />收费
    </label> 

    <input type="hidden" name="fee_detail" id="fee_detail" value=""/>
  </div>
  <div id="active_fee" class="item inner-back hide" style="display:block">
    <div class="con_item">
      <span>名称 </span><span class="pl">（如：预售票等）</span> <span style="margin-left:15px;">费用（元）</span>
    </div>
    <div class="con_item fee_item">
      <input type="text" class="basic-input fee-name" maxlength="15" placeholder="选填"/> <input type="text" class="basic-input fee-num" maxlength="6"/>
    </div>
    <a href="#" id="addFeeHook">添加费用</a>
  </div>
  <div id="tickets_field" class="item inner-back hide">
    在接下来的"发售电子票"环节里，设置详细的票务信息。
  </div>
</div>


    <hr class="hrline" />
    <div class="row">
        <label for="priv" class="field">参加权限<em class="man">*</em></label>
        <div class="item floatbug">
            <label for="allow_others">
                <input id="allow_others" name="priv" type="checkbox"  />只有被邀请的成员才能参加
            </label>
        </div>
        <div class="item">
            <label for="need_apply">
                <input id="need_apply" name="need_apply" type="checkbox" />参加者需要提前填写报名表
            </label>
        </div>
    </div>
    <div class="row">
        <label for="label" class="field">活动标签<em class="man">*</em></label>
        <div class="item">
            <input id="tags" name="tags" class="basic-input" size="55" value="">
        </div>
        <div id="tagsContainer" class="item">
        <span class="event-tag">放映</span><span class="event-tag selected-tag">锅匠</span><span class="event-tag">锅匠，裁缝，士兵，间谍</span><span class="event-tag">奥斯卡</span><span class="event-tag">咖啡</span><span class="event-tag">戛纳电影节</span><span class="event-tag">威尼斯电影节</span><span class="event-tag">吕布</span><span class="event-tag">天堂电影院</span><span class="event-tag">观影</span>
        </div>
    </div>
    <hr class="hrline" />
    <div class="row footer">
        <div class="item">
            <input class="loc-btn" type="button" id="submit_form" value="下一步：上传活动海报" />
            <a id="cancel_form" class="lnk-flat">取消</a>
        </div>
    </div>
    </form>   
            
        </div><!--//left-->
    
        <div class="cright">
          <h2>什么是合适的同城活动？</h2>
          <ol class="pl">
              <li>有能最终确定的活动起止日期</li>
              <li>具备现实中能集体参与的活动地点</li>
              <li>是多人在现实中能碰面的活动</li>
          </ol>
          
          <br>
          <h2>如何才能让你的活动更吸引人？</h2>
          <ol class="pl">
            <li>标题简单明了 </li>
            <li>活动内容和特点介绍详细 </li>
            <li>活动海报吸引人眼球 </li>
          </ol>
          <p class="pl"> 更重要的是，邀请好友们都来参与！ </p>    
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