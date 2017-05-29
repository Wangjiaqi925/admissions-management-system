<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$bianhao=$_POST["bianhao"];
    $mingcheng=$_POST["mingcheng"];
    $leixing=$_POST["leixing"];
    $baoxiuyuanyin=$_POST["baoxiuyuanyin"];
    $baoxiuriqi=$_POST["baoxiuriqi"];
    $yonghu=$_POST["yonghu"];
    $xingming=$_POST["xingming"];
    $bumen=$_POST["bumen"];
    $shouji=$_POST["shouji"];
    
	 $sql1="select * from baoxiushenqing where bianhao=$bianhao and jieguo='损坏' ";
 
 $query=mysql_query($sql1);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，此设备已经损坏!');history.back();</script>";
			exit;
		}

	//qiuhe
	//ischongfu("select id from baoxiushenqing where trjrtjtrjrtj");
	$sql="insert into baoxiushenqing(bianhao,mingcheng,leixing,baoxiuyuanyin,baoxiuriqi,yonghu,xingming,bumen,shouji) values('$bianhao','$mingcheng','$leixing','$baoxiuyuanyin','$baoxiuriqi','$yonghu','$xingming','$bumen','$shouji') ";
	mysql_query($sql);
	//danjuzhixi;mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');history.back();</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>报修申请</title>
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
<p>添加报修申请： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.bianhao.value==""){alert("请输入编号");document.form1.bianhao.focus();return false;}
    if(document.form1.mingcheng.value==""){alert("请输入名称");document.form1.mingcheng.focus();return false;}
    if(document.form1.baoxiuyuanyin.value==""){alert("请输入报修原因");document.form1.baoxiuyuanyin.focus();return false;}
    if(document.form1.baoxiuriqi.value==""){alert("请输入报修日期");document.form1.baoxiuriqi.focus();return false;}
    if(document.form1.yonghu.value==""){alert("请输入用户");document.form1.yonghu.focus();return false;}
    
}
	function gow()
	{
		location.href='baoxiushenqing_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>
<!--hxsglxiangdxongjxs-->
 <?php
 $sql="select * from gonggongzichan where id=".$_GET["id"];
//islbd2q $sql="select * from gonggongzichan where yonghu='".$_SESSION["username"]."'";
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$bianhao=mysql_result($query,0,bianhao);
 	$mingcheng=mysql_result($query,0,mingcheng);
 	$leixing=mysql_result($query,0,leixing);
 	
 }
?>


<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>编号：</td><td><input name='bianhao' type='text' id='bianhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.bianhao.value='<?php echo $bianhao?>';</script>
    <tr><td>名称：</td><td><input name='mingcheng' type='text' id='mingcheng' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.mingcheng.value='<?php echo $mingcheng?>';</script>
    <tr><td>类型：</td><td><input name='leixing' type='text' id='leixing' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.leixing.value='<?php echo $leixing?>';</script>
    <tr><td>报修原因：</td><td><input name='baoxiuyuanyin' type='text' id='baoxiuyuanyin' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr>
    <tr><td>报修日期：</td><td><input name='baoxiuriqi' type='text' id='baoxiuriqi' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' />&nbsp;*</td></tr>
    <tr><td>用户：</td><td><input name='yonghu' type='text' id='yonghu' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' readonly='readonly' />&nbsp;*</td></tr>
    <tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='<?php echo $_SESSION['xm'];?>' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>部门：</td><td><input name='bumen' type='text' id='bumen' value='<?php echo $_SESSION['bm'];?>' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>手机：</td><td><input name='shouji' type='text' id='shouji' value='<?php echo $_SESSION['sj'];?>' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr style='display:none'><td>结果：</td><td><select name='jieguo' id='jieguo'><option value="完好">完好</option><option value="已报修">已报修</option><option value="损坏">损坏</option></select></td></tr>
    <tr style='display:none'><td>说明：</td><td><textarea name='shuoming' cols='50' rows='8' id='shuoming' style='border:solid 1px #000000; color:#666666'></textarea></td></tr>
    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
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
			echo "<script>javascript:alert('对不起，您输入的tsisshistxiaojxi已经存在，请重试!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

