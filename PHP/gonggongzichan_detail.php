<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����ʲ���ϸ</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>�����ʲ���ϸ��</p>
					<?php
$sql="select * from gonggongzichan where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%' height=44>��ţ�</td><td width='39%'><?php echo mysql_result($query,0,bianhao);?></td><td  rowspan=5 align=center><a href=<?php echo mysql_result($query,0,tupian);?> target=_blank><img src=<?php echo mysql_result($query,0,tupian);?> width=228 height=215 border=0></a></td></tr><tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>
