<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户信息</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<!--hxsglxiangdxongjxs-->
<body>

<p>已有用户信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 用户名：<input name="yonghuming" type="text" id="yonghuming" style='border:solid 1px #000000; color:#666666;width:80px' /> 姓名：<input name="xingming" type="text" id="xingming" style='border:solid 1px #000000; color:#666666;width:80px' /> 性别：<select name='xingbie' id='xingbie' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><option value="男">男</option><option value="女">女</option></select> 部门：<input name="bumen" type="text" id="bumen" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>用户名</td>
    <td bgcolor='#CCFFFF'>密码</td>
    <td bgcolor='#CCFFFF'>姓名</td>
    <td bgcolor='#CCFFFF'>性别</td>
    <td bgcolor='#CCFFFF'>出生年月</td>
    <td bgcolor='#CCFFFF'>身份证</td>
    <td bgcolor='#CCFFFF'>部门</td>
    <td bgcolor='#CCFFFF'>工龄</td>
    <td bgcolor='#CCFFFF'>手机</td>
    <td bgcolor='#CCFFFF'>邮箱</td>
    <td style="display:none" bgcolor='#CCFFFF' width='80' align='center'>是否审核</td>
    
	<!--dpinglun1-->
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="120" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from yonghuxinxi where 1=1";
  
if ($_POST["yonghuming"]!=""){$nreqyonghuming=$_POST["yonghuming"];$sql=$sql." and yonghuming like '%$nreqyonghuming%'";}
if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}
if ($_POST["xingbie"]!=""){$nreqxingbie=$_POST["xingbie"];$sql=$sql." and xingbie like '%$nreqxingbie%'";}
if ($_POST["bumen"]!=""){$nreqbumen=$_POST["bumen"];$sql=$sql." and bumen like '%$nreqbumen%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}
//youzuiping1
	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
//zoxngxetxoxngjxvi
//txixgihxngjs
//youzuiping2

  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,yonghuming);?></td>
    <td><?php echo mysql_result($query,$i,mima);?></td>
    <td><?php echo mysql_result($query,$i,xingming);?></td>
    <td><?php echo mysql_result($query,$i,xingbie);?></td>
    <td><?php echo mysql_result($query,$i,chushengnianyue);?></td>
    <td><?php echo mysql_result($query,$i,shenfenzheng);?></td>
    <td><?php echo mysql_result($query,$i,bumen);?></td>
    <td><?php echo mysql_result($query,$i,gongling);?></td>
    <td><?php echo mysql_result($query,$i,shouji);?></td>
    <td><?php echo mysql_result($query,$i,youxiang);?></td>
    
    <td style="display:none"  width='80' align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=yonghuxinxi" onclick="return confirm('您确定要执行此操作？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
	<!--dpinglun2-->
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=yonghuxinxi" onclick="return confirm('真的要删除？')">删除</a> <a href="yonghuxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> <a href="yonghuxinxi_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条,<!--yoxugonxgzitoxnxgjxi--> <!--youzuiping3-->
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='yonghuxinxi_listxls.php';" value="导出EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="yonghuxinxi_list.php?pagecurrent=1">首页</a>, <a href="yonghuxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="yonghuxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="yonghuxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>
<?php
//yoxutixinxg if($kucddduntx>0)
//yoxutixinxg{
//yoxutixinxg tsgehxdhdm
//yoxutixinxg}
?>
</body>
</html>

