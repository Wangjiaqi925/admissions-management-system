<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<!--hxsglxiangdxongjxs-->
<body>

<p>���б��������б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ��ţ�<input name="bianhao" type="text" id="bianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> ���ƣ�<input name="mingcheng" type="text" id="mingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> ���ͣ�<input name="leixing" type="text" id="leixing" style='border:solid 1px #000000; color:#666666;width:80px' /> �������ڣ�<input name="baoxiuriqi1" type="text" id="baoxiuriqi1"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />-<input name="baoxiuriqi2" type="text" id="baoxiuriqi2"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' /> �û���<input name="yonghu" type="text" id="yonghu" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>���</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>����ԭ��</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>�û�</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>�ֻ�</td>
    <td bgcolor='#CCFFFF'>���</td>
    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ�����</td>
    
    <td width="70" align="center" bgcolor="#CCFFFF">����</td>
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
	<?php if(mysql_result($query,$i,issh)=="��"){?><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=baoxiushenqing" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="baoxiushenqing_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a><?php } ?>
	 <a href="baoxiushenqing_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��,<!--yoxugonxgzitoxnxgjxi--> <!--youzuiping3-->
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="baoxiushenqing_list2.php?pagecurrent=1">��ҳ</a>, <a href="baoxiushenqing_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="baoxiushenqing_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="baoxiushenqing_list2.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>
</body>
</html>

