<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>报修申请</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<!--hxsglxiangdxongjxs-->
<body>

<p>已有报修申请列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 编号：<input name="bianhao" type="text" id="bianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 名称：<input name="mingcheng" type="text" id="mingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> 类型：<input name="leixing" type="text" id="leixing" style='border:solid 1px #000000; color:#666666;width:80px' /> 报修日期：<input name="baoxiuriqi1" type="text" id="baoxiuriqi1"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />-<input name="baoxiuriqi2" type="text" id="baoxiuriqi2"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' /> 用户：<input name="yonghu" type="text" id="yonghu" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>编号</td>
    <td bgcolor='#CCFFFF'>名称</td>
    <td bgcolor='#CCFFFF'>类型</td>
    <td bgcolor='#CCFFFF'>报修原因</td>
    <td bgcolor='#CCFFFF'>报修日期</td>
    <td bgcolor='#CCFFFF'>用户</td>
    <td bgcolor='#CCFFFF'>姓名</td>
    <td bgcolor='#CCFFFF'>部门</td>
    <td bgcolor='#CCFFFF'>手机</td>
    <td bgcolor='#CCFFFF'>结果</td>
    <td bgcolor='#CCFFFF' width='80' align='center'>是否受理</td>
    
    <td width="70" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from baoxiushenqing where yonghu='".$_SESSION['username']."'";
  
if ($_POST["bianhao"]!=""){$nreqbianhao=$_POST["bianhao"];$sql=$sql." and bianhao like '%$nreqbianhao%'";}
if ($_POST["mingcheng"]!=""){$nreqmingcheng=$_POST["mingcheng"];$sql=$sql." and mingcheng like '%$nreqmingcheng%'";}
if ($_POST["leixing"]!=""){$nreqleixing=$_POST["leixing"];$sql=$sql." and leixing like '%$nreqleixing%'";}
if ($_POST["baoxiuriqi1"]!=""){$nreqbaoxiuriqi1=$_POST["baoxiuriqi1"];$sql=$sql." and baoxiuriqi >= '$nreqbaoxiuriqi1'";}
if ($_POST["baoxiuriqi2"]!=""){$nreqbaoxiuriqi2=$_POST["baoxiuriqi2"];$sql=$sql." and baoxiuriqi <= '$nreqbaoxiuriqi2'";}
if ($_POST["yonghu"]!=""){$nreqyonghu=$_POST["yonghu"];$sql=$sql." and yonghu like '%$nreqyonghu%'";}
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
    <td><?php echo mysql_result($query,$i,bianhao);?></td>
    <td><?php echo mysql_result($query,$i,mingcheng);?></td>
    <td><?php echo mysql_result($query,$i,leixing);?></td>
    <td><?php echo mysql_result($query,$i,baoxiuyuanyin);?></td>
    <td><?php echo mysql_result($query,$i,baoxiuriqi);?></td>
    <td><?php echo mysql_result($query,$i,yonghu);?></td>
    <td><?php echo mysql_result($query,$i,xingming);?></td>
    <td><?php echo mysql_result($query,$i,bumen);?></td>
    <td><?php echo mysql_result($query,$i,shouji);?></td>
    <td><?php echo mysql_result($query,$i,jieguo);?></td>
    
    <td width='80' align='center'><?php echo mysql_result($query,$i,"issh")?></td>
   
    <td width="70" align="center">
	<?php if(mysql_result($query,$i,issh)=="否"){?><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=baoxiushenqing" onclick="return confirm('真的要删除？')">删除</a> <a href="baoxiushenqing_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a><?php } ?>
	 <a href="baoxiushenqing_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条,<!--yoxugonxgzitoxnxgjxi--> <!--youzuiping3-->
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="baoxiushenqing_list2.php?pagecurrent=1">首页</a>, <a href="baoxiushenqing_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="baoxiushenqing_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="baoxiushenqing_list2.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>
</body>
</html>

