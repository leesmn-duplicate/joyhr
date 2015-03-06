<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>位置趣</title>
	<meta name="keywords" content="位置趣, GPS在线定位服务, 个人在线定位服务" />
    <meta name="description" content="一个账号，满足车辆以及个人等多种定位需求" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/lisphp/css/main.css" rel="stylesheet" type="text/css" />

    <script src="/lisphp/js/jquery-1.8.2.js" type="text/javascript" language="javascript"></script>
    <script src="/lisphp/js/common.js" type="text/javascript" language="javascript"></script>
    
     <style type="text/css"> 
    #all {
      width: 100%;
      height: 540px;
      background: #FFFFFF;
      margin: auto;
    }
    #left {
      width: 22%;
      height: 98%;
      float: left;
	  border:solid #e6e6e6 1px;
	  padding:3px;
	  background-color:#FFFFFF;
    }
    #right {
      background: #e6e6e6;
      height: 100%;
    }

    #div_info {font-size:13px;float:right;font-weight:normal;}

  </style>
    
    
  <script type="text/javascript">
    
  </script>
   
  
</head>

<body>
<?php
	require_once(dirname(dirname(__FILE__))."/site/head.php");
?>
<div class='div_main'>
   <div class='div_title_main'>主页<div id='div_info'></div></div>
   <div class='div_main_core'>
    <?php 
	  echo $model->password;
	?>
	</div>
	<?php
		require_once(dirname(dirname(__FILE__))."/site/foot.php");
	?>
</div>


	
</body>


</html>
