<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('�Բ��������ȵ�½��');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('���Գɹ�!');location.href='lyblist.php';</script>";
}
?>
<html>
<head>
<title>���԰�</title>
<LINK href="css.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE3 {
	color: #FFFFFF;
	font-weight: bold;
}
.STYLE5 {color: #0033CC; font-weight: bold; }
.STYLE6 {color: #FFFFFF}
.STYLE7 {color: #993300; font-weight: bold; }
-->
</style>
</head>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("�������˺�");document.form1.zhanghao.focus();return false;}
	//if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}
	if(document.form1.liuyan.value==""){alert("����������");document.form1.liuyan.focus();return false;}
}

</script>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="54%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
  <form name="form1" method="post" action="">
    <tr>
      <td>�˺ţ�</td>
      <td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION["username"];?>' />
        &nbsp;*</td>
    </tr>
    
    <tr>
      <td>���ԣ�</td>
      <td><textarea name='liuyan' cols='50' rows='8' id='liuyan'></textarea>
        &nbsp;*</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
          <input type="submit" name="Submit" value="���" onClick="return check();" />
          <input type="reset" name="Submit2" value="����" /></td>
    </tr>
  </form>
</table>
</body>
</html>