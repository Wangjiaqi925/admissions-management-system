<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$yonghuming=$_POST["yonghuming"];
    $mima=$_POST["mima"];
    $xingming=$_POST["xingming"];
    $xingbie=$_POST["xingbie"];
    $chushengnianyue=$_POST["chushengnianyue"];
    $shenfenzheng=$_POST["shenfenzheng"];
    $bumen=$_POST["bumen"];
    $gongling=$_POST["gongling"];
    $shouji=$_POST["shouji"];
    $youxiang=$_POST["youxiang"];
    $beizhu=$_POST["beizhu"];
    
	//lixandonxgjixelxb
	//qiuji
	//qiuhe
	ischongfu("select id from yonghuxinxi where  yonghuming='$yonghuming'");
	$sql="insert into yonghuxinxi(yonghuming,mima,xingming,xingbie,chushengnianyue,shenfenzheng,bumen,gongling,shouji,youxiang,beizhu) values('$yonghuming','$mima','$xingming','$xingbie','$chushengnianyue','$shenfenzheng','$bumen','$gongling','$shouji','$youxiang','$beizhu') ";
	mysql_query($sql);
	//danjuzhixi;mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户信息</title>
<!--bixanjxiqxi-->
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
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
<body>
<p>添加用户信息： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.yonghuming.value==""){alert("请输入用户名");document.form1.yonghuming.focus();return false;}
    if(document.form1.mima.value==""){alert("请输入密码");document.form1.mima.focus();return false;}
    if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}
    if(document.form1.xingbie.value==""){alert("请输入性别");document.form1.xingbie.focus();return false;}
    if(document.form1.chushengnianyue.value==""){alert("请输入出生年月");document.form1.chushengnianyue.focus();return false;}
    if(document.form1.shenfenzheng.value==""){alert("请输入身份证");document.form1.shenfenzheng.focus();return false;}
    if(!(/^\d{15}$|^\d{18}$|^\d{17}[xX]$/.test(document.form1.shenfenzheng.value))){alert("身份证必需身份证格式");document.form1.shenfenzheng.focus();return false;}
    if(document.form1.bumen.value==""){alert("请输入部门");document.form1.bumen.focus();return false;}
    if(document.form1.gongling.value==""){alert("请输入工龄");document.form1.gongling.focus();return false;}
    if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.gongling.value))){}else{alert("工龄必需数字型");document.form1.gongling.focus();return false;}
    if(document.form1.shouji.value==""){alert("请输入手机");document.form1.shouji.focus();return false;}
    if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(document.form1.shouji.value))){alert("手机必需手机格式");document.form1.shouji.focus();return false;}
    if(document.form1.youxiang.value==""){alert("请输入邮箱");document.form1.youxiang.focus();return false;}
    if(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/.test(document.form1.youxiang.value)){}else{alert("邮箱必需邮箱格式");document.form1.youxiang.focus();return false;}
    
}
	function gow()
	{
		location.href='yonghuxinxi_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>
<!--hxsglxiangdxongjxs-->
 <?php
//islbd1q $sql="select * from melieibaoduqubiaoiguo where id=".$_GET["id"];
//islbd2q $sql="select * from melieibaoduqubiaoiguo where hsgzhujian='".$_SESSION["username"]."'";
//islbdq $query=mysql_query($sql);
//islbdq $rowscount=mysql_num_rows($query);
//islbdq if($rowscount>0)
//islbdq {
//islbdq 	lelelelelele
//islbdq }
?>
<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>用户名：</td><td><input name='yonghuming' type='text' id='yonghuming' value='' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr>
    <tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>性别：</td><td><select name='xingbie' id='xingbie'><option value="男">男</option><option value="女">女</option></select>&nbsp;*</td></tr>
    <tr><td>出生年月：</td><td><input name='chushengnianyue' type='text' id='chushengnianyue' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' />&nbsp;*</td></tr>
    <tr><td>身份证：</td><td><input name='shenfenzheng' type='text' id='shenfenzheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*&nbsp;必需身份证格式</td></tr>
    <tr><td>部门：</td><td><input name='bumen' type='text' id='bumen' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>工龄：</td><td><input name='gongling' type='text' id='gongling' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需数字型</td></tr>
    <tr><td>手机：</td><td><input name='shouji' type='text' id='shouji' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需手机格式</td></tr>
    <tr><td>邮箱：</td><td><input name='youxiang' type='text' id='youxiang' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需邮箱格式</td></tr>
    <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>
    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' />
	  <input type="button" name="Submit3" value="返回"  onclick="javascript:location.href='login.html'" style='border:solid 1px #000000; color:#666666' />
	  </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，您输入的用户名已经存在，请重试!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

