<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$yonghuming=$_POST["yonghuming"];    $mima=$_POST["mima"];    $xingming=$_POST["xingming"];    $xingbie=$_POST["xingbie"];    $chushengnianyue=$_POST["chushengnianyue"];    $shenfenzheng=$_POST["shenfenzheng"];    $bumen=$_POST["bumen"];    $gongling=$_POST["gongling"];    $shouji=$_POST["shouji"];    $youxiang=$_POST["youxiang"];    $beizhu=$_POST["beizhu"];    
	//lixandonxgjixelxb
	$sql="update yonghuxinxi set yonghuming='$yonghuming',mima='$mima',xingming='$xingming',xingbie='$xingbie',chushengnianyue='$chushengnianyue',shenfenzheng='$shenfenzheng',bumen='$bumen',gongling='$gongling',shouji='$shouji',youxiang='$youxiang',beizhu='$beizhu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改用户信息</title>
<!--bixanjxiqxi-->
<link rel="stylesheet" href="css.css" type="text/css">
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<!--hxsglxiangdxongjxs-->
<body>
<p>修改用户信息： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from yonghuxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
//lixanxdoxngcxhaxifxen
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>用户名：</td><td><input name='yonghuming' type='text' id='yonghuming' value='<?php echo mysql_result($query,0,yonghuming);?>' readonly='readonly' /> 此项主键，不得修改</td></tr>      <tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='<?php echo mysql_result($query,0,mima);?>' /></td></tr>      <tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='<?php echo mysql_result($query,0,xingming);?>' /></td></tr>      <tr><td>性别：</td><td><select name='xingbie' id='xingbie'><option value="男">男</option><option value="女">女</option></select></td></tr><script language="javascript">document.form1.xingbie.value='<?php echo mysql_result($query,0,xingbie);?>';</script>      <tr><td>出生年月：</td><td><input name='chushengnianyue' type='text' id='chushengnianyue' value='<?php echo mysql_result($query,0,chushengnianyue);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>      <tr><td>身份证：</td><td><input name='shenfenzheng' type='text' id='shenfenzheng' size='50' value='<?php echo mysql_result($query,0,shenfenzheng);?>' /></td></tr>      <tr><td>部门：</td><td><input name='bumen' type='text' id='bumen' value='<?php echo mysql_result($query,0,bumen);?>' /></td></tr>      <tr><td>工龄：</td><td><input name='gongling' type='text' id='gongling' value='<?php echo mysql_result($query,0,gongling);?>' /></td></tr>      <tr><td>手机：</td><td><input name='shouji' type='text' id='shouji' value='<?php echo mysql_result($query,0,shouji);?>' /></td></tr>      <tr><td>邮箱：</td><td><input name='youxiang' type='text' id='youxiang' value='<?php echo mysql_result($query,0,youxiang);?>' /></td></tr>      <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,0,beizhu);?></textarea></td></tr>      
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

