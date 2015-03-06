<?php



$menus = array();
$group = array();
$group['name']="客户管理";
$group['items'] = array();

$item = array();
$item['name']="客户管理[<font color='red'>系统</font>]";
$item['url']='index.php?act=sysadmin&sub=com_list';
$group['items'][] = $item;

$menus[]=$group;



?>

<div class='div_top'>
    <script>

   
     document.write("<span style='float:right;color:#ffffff'>用户&nbsp;|&nbsp;李胜&nbsp;|&nbsp;<a href='#' onclick='OnLogout();'>注销</a></span>");
   
    </script>
</div>
<div class='div_logo_img'>
</div>

<div class='div_head'>
	<div id='div_menu'>
	<span class='xx_menu'><a style='color:#FFFFFF;text-decoration:none;' href='index.php'><span class='xx_menu_top'>主页</span></a></span>
<?php
foreach($menus as $group)
{
	if(count($group['items'])>0)
	{
		echo "<span class='xx_menu'>\r\n";
		echo "	<span class='xx_menu_top'>".$group['name']."</span>\r\n";
		foreach($group['items'] as $item)
		{
				echo "	<span>\r\n";
				if($item['url'] == "")
				{
					echo "		<a class='xx_menu_sub'  href='#'>".$item['name']."[!]</a>";
				}
				else
				{
					echo "		<a class='xx_menu_sub'  href='".$item['url']."'>".$item['name']."</a>";
				}
				echo "	</span>\r\n";
		}
		echo "</span>\r\n";
	}
}
?>
	</div>
	<div style='clear:both;'>
	</div>
</div>

