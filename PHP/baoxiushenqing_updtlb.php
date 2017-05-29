<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$jieguo=$_POST["jieguo"];$shuoming=$_POST["shuoming"];
	//lixandonxgjixelxb
	$sql="update baoxiushenqing set jieguo='$jieguo',shuoming='$shuoming' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('操作成功!');location.href='baoxiushenqing_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>设置报修申请</title>
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
<p>设置报修申请： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from baoxiushenqing where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr style='display:none'><td>编号：</td><td><input name='bianhao' type='text' id='bianhao' value='<?php echo mysql_result($query,0,bianhao);?>' /></td></tr>      <tr style='display:none'><td>名称：</td><td><input name='mingcheng' type='text' id='mingcheng' value='<?php echo mysql_result($query,0,mingcheng);?>' /></td></tr>      <tr style='display:none'><td>类型：</td><td><input name='leixing' type='text' id='leixing' value='<?php echo mysql_result($query,0,leixing);?>' /></td></tr>      <tr style='display:none'><td>报修原因：</td><td><input name='baoxiuyuanyin' type='text' id='baoxiuyuanyin' size='50' value='<?php echo mysql_result($query,0,baoxiuyuanyin);?>' /></td></tr>      <tr style='display:none'><td>报修日期：</td><td><input name='baoxiuriqi' type='text' id='baoxiuriqi' value='<?php echo mysql_result($query,0,baoxiuriqi);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>      <tr style='display:none'><td>用户：</td><td><input name='yonghu' type='text' id='yonghu' value='<?php echo mysql_result($query,0,yonghu);?>' /></td></tr>      <tr style='display:none'><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='<?php echo mysql_result($query,0,xingming);?>' /></td></tr>      <tr style='display:none'><td>部门：</td><td><input name='bumen' type='text' id='bumen' value='<?php echo mysql_result($query,0,bumen);?>' /></td></tr>      <tr style='display:none'><td>手机：</td><td><input name='shouji' type='text' id='shouji' value='<?php echo mysql_result($query,0,shouji);?>' /></td></tr>      <tr><td>结果：</td><td><select name='jieguo' id='jieguo'><option value="完好">完好</option><option value="已报修">已报修</option><option value="损坏">损坏</option></select></td></tr><script language="javascript">document.form1.jieguo.value='<?php echo mysql_result($query,0,jieguo);?>';</script>      <tr><td>说明：</td><td><textarea name='shuoming' cols='50' rows='8' id='shuoming'><?php echo mysql_result($query,0,shuoming);?></textarea></td></tr>      
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="设置" style='border:solid 1px #000000; color:#666666' />
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

