<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>报修申请详细</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>报修申请详细：</p>
					<?php
$sql="select * from baoxiushenqing where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>编号：</td><td width='39%'><?php echo mysql_result($query,0,bianhao);?></td>      <td width='11%'>名称：</td><td width='39%'><?php echo mysql_result($query,0,mingcheng);?></td></tr><tr>      <td width='11%'>类型：</td><td width='39%'><?php echo mysql_result($query,0,leixing);?></td>      <td width='11%'>报修原因：</td><td width='39%'><?php echo mysql_result($query,0,baoxiuyuanyin);?></td></tr><tr>      <td width='11%'>报修日期：</td><td width='39%'><?php echo mysql_result($query,0,baoxiuriqi);?></td>      <td width='11%'>用户：</td><td width='39%'><?php echo mysql_result($query,0,yonghu);?></td></tr><tr>      <td width='11%'>姓名：</td><td width='39%'><?php echo mysql_result($query,0,xingming);?></td>      <td width='11%'>部门：</td><td width='39%'><?php echo mysql_result($query,0,bumen);?></td></tr><tr>      <td width='11%'>手机：</td><td width='39%'><?php echo mysql_result($query,0,shouji);?></td>      <td width='11%'>结果：</td><td width='39%'><?php echo mysql_result($query,0,jieguo);?></td></tr><tr>      <td width='11%'>说明：</td><td width='39%'><?php echo mysql_result($query,0,shuoming);?></td>      <td>&nbsp;</td><td>&nbsp;</td></tr><tr>      <td colspan=4 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

