<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>公共资产详细</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>公共资产详细：</p>
					<?php
$sql="select * from gonggongzichan where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%' height=44>编号：</td><td width='39%'><?php echo mysql_result($query,0,bianhao);?></td><td  rowspan=5 align=center><a href=<?php echo mysql_result($query,0,tupian);?> target=_blank><img src=<?php echo mysql_result($query,0,tupian);?> width=228 height=215 border=0></a></td></tr><tr>      <td width='11%' height=44>名称：</td><td width='39%'><?php echo mysql_result($query,0,mingcheng);?></td></tr><tr>      <td width='11%' height=44>类型：</td><td width='39%'><?php echo mysql_result($query,0,leixing);?></td></tr><tr>      <td width='11%' height=44>价格：</td><td width='39%'><?php echo mysql_result($query,0,jiage);?></td></tr><tr>                  <td width='11%' height=44>用户：</td><td width='39%'><?php echo mysql_result($query,0,yonghu);?></td></tr><tr>      <td width='11%' height=100  >说明：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,shuoming);?></td></tr><tr>      <td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

