<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�û���Ϣ</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<!--hxsglxiangdxongjxs-->
<body>

<p>�����û���Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: �û�����<input name="yonghuming" type="text" id="yonghuming" style='border:solid 1px #000000; color:#666666;width:80px' /> ������<input name="xingming" type="text" id="xingming" style='border:solid 1px #000000; color:#666666;width:80px' /> �Ա�<select name='xingbie' id='xingbie' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><option value="��">��</option><option value="Ů">Ů</option></select> ���ţ�<input name="bumen" type="text" id="bumen" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>�û���</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>�Ա�</td>    <td bgcolor='#CCFFFF'>��������</td>    <td bgcolor='#CCFFFF'>���֤</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>�ֻ�</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ����</td>
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="70" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from yonghuxinxi where yonghuming='".$_SESSION['username']."'";
  if ($_POST["yonghuming"]!=""){$nreqyonghuming=$_POST["yonghuming"];$sql=$sql." and yonghuming like '%$nreqyonghuming%'";}if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}if ($_POST["xingbie"]!=""){$nreqxingbie=$_POST["xingbie"];$sql=$sql." and xingbie like '%$nreqxingbie%'";}if ($_POST["bumen"]!=""){$nreqbumen=$_POST["bumen"];$sql=$sql." and bumen like '%$nreqbumen%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
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
    <td><?php echo mysql_result($query,$i,yonghuming);?></td>    <td><?php echo mysql_result($query,$i,mima);?></td>    <td><?php echo mysql_result($query,$i,xingming);?></td>    <td><?php echo mysql_result($query,$i,xingbie);?></td>    <td><?php echo mysql_result($query,$i,chushengnianyue);?></td>    <td><?php echo mysql_result($query,$i,shenfenzheng);?></td>    <td><?php echo mysql_result($query,$i,bumen);?></td>    <td><?php echo mysql_result($query,$i,gongling);?></td>    <td><?php echo mysql_result($query,$i,shouji);?></td>    <td><?php echo mysql_result($query,$i,youxiang);?></td>        <td width='80' align='center'><?php echo mysql_result($query,$i,"issh")?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="70" align="center">
	<?php if(mysql_result($query,$i,issh)=="��"){?><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=yonghuxinxi" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="yonghuxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a><?php } ?>
	 <a href="yonghuxinxi_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��,<!--yoxugonxgzitoxnxgjxi--> <!--youzuiping3-->
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="yonghuxinxi_list2.php?pagecurrent=1">��ҳ</a>, <a href="yonghuxinxi_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="yonghuxinxi_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="yonghuxinxi_list2.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>
</body>
</html>

