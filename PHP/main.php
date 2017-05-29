<?php 
session_start();
include_once 'conn.php';

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>公司公共资产管理系统</title>
<style type="text/css">
<!--
.STYLE1 {
	color: #FF0000;
	font-size: 9pt;
}
-->
</style>
</head>
<body  onload="window.resizeTo(window.screen.width - 4,window.screen.height-50);window.moveTo(-4,-4)" style="MARGIN: 0px" scroll=no  oncontextmenu="window.event.returnValue=false" onselectstart="return false" onMouseOver="window.status='公司公共资产管理系统';return true" OnMouseOut="window.status='公司公共资产管理系统';return true" onmousedown="window.status='公司公共资产管理系统';return true" onmouseup="window.status='公司公共资产管理系统';return true">
<script>

function cancelLink() {
if (window.event.srcElement.tagName == "A" && window.event.shiftKey) 
window.event.returnValue = false;
}
if(self!=top){top.location=self.location;}
function switchSysBar(){
if (switchPoint.innerText==3){
switchPoint.innerText=4
document.all("frmTitle").style.display="none"
}else{
switchPoint.innerText=3
document.all("frmTitle").style.display=""
}}
</script>

<style type="text/css">
.navPoint {COLOR: white; CURSOR: hand; font-family: Webdings; FONT-SIZE: 9pt}
A:link {
	COLOR: #0000ff; TEXT-DECORATION: none;font-size:12px;
}
A:visited {
	COLOR: #0000ff; TEXT-DECORATION: none;font-size:12px;
}
A:active {
	COLOR: #3333ff; TEXT-DECORATION: none;font-size:12px;
}
A:hover {
	COLOR: #ff0000; TEXT-DECORATION: none;font-size:12px;
}
</style>
<script>
function tick() {
var ye,mo,da
var hours, minutes, seconds, xfile;
var intHours, intMinutes, intSeconds;
var today;
today = new Date();
ye = today.getFullYear();
mo = today.getMonth()+1;
if (mo < 10) {
mo = "0"+mo;
}
da = today.getDate();
if (da < 10) {
da = "0"+da;
}
intHours = today.getHours();
intMinutes = today.getMinutes();
intSeconds = today.getSeconds();
if (intHours == 0) {
hours = "12:";
xfile = "PM";//午夜
} else if (intHours < 12) {
hours = intHours+":";
xfile = "AM";//上午
} else if (intHours == 12) {
hours = "12:";
xfile = "PM";//正午
} else {
intHours = intHours - 12
hours = intHours + ":";
xfile = "PM";//下午
}
if (intHours < 10) {
hours = "0"+intHours+":";
}
if (intMinutes < 10) {
minutes = "0"+intMinutes+":";
} else {
minutes = intMinutes+":";
}
if (intSeconds < 10) {
seconds = "0"+intSeconds+" ";
} else {
seconds = intSeconds+" ";
}
var color, size, face, out;
	var text = "black";
	var font_size = 1;
    var font_face = "Arial";
	color = (text)? text : "black";
	size = (font_size)? font_size : 1;
	face = (font_face)? font_face : "Arial";
timeString = "<font style='font-size:14px;'>当前时间:";
timeString += ye+"-"+mo+"-"+da+"  ";
timeString += hours+minutes+seconds+" "+xfile+"&nbsp;&nbsp;&nbsp;";

Clock.innerHTML = timeString;
window.setTimeout("tick();", 100);
}
window.onload = tick;
</script> 
<table width="100%" border="0" cellspacing="0" cellpadding="0" background="images/index_bg.gif">
  <tr> 
    <td width="67%" height="50" rowspan="2"><div style="font-family:宋体; color:#0066cc;  WIDTH: 100%; FONT-WEIGHT: bold; FONT-SIZE: 25px; margin-top:5pt">&nbsp;&nbsp;&nbsp;公司公共资产管理系统</div></td>
    <td width="33%" align="right" valign="middle"> 
	  <font id="Clock"
      style="FONT-SIZE: 9pt; FILTER: dropshadow(color=#FFFFFF,offx=1,offy=1,positive=1);COLOR: #000000;" 
      align=center>&nbsp;
	  
	  </font>&nbsp;
    </td>
  </tr>
  <tr>
    <td align="right"><span class="STYLE1">当前用户:<?php echo $_SESSION["username"]?> [<?php echo $_SESSION["cx"]?>]</span>&nbsp;&nbsp;<A href="logout.php" onClick="{if(confirm('确定要退出吗？')){return true;}return false;}"><IMG height=16 alt=退出系统 src="images/exit.gif" width=16 align=absMiddle border=0><FONT color=black>&nbsp;安全退出</FONT></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    </td>
  </tr>
</table>
<table border="0" cellPadding="0" cellSpacing="0" height="90%" width="100%">
  <tr>
    <td width="175" id="frmTitle" valign="top"> 

 
<iframe frameBorder="0" id="left" name="left" scrolling="yes" src="mygo.php" style="HEIGHT: 100%; VISIBILITY: inherit; WIDTH: 100%; Z-INDEX: 1">
    </iframe>

    </td>
    <td style="WIDTH: 9pt">
    <table border="0" cellPadding="0" cellSpacing="0" height="100%">
      <tr>
          <td bgcolor="A4B6D7" style="HEIGHT: 100%" onClick="switchSysBar()"> <font style="FONT-SIZE: 9pt; CURSOR: default; COLOR: #ffffff"> 
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <span class="navPoint" id="switchPoint" title="关闭/打开左栏">3</span><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        屏幕切换 </font></td>
      </tr>
    </table>
    </td>
    <td>

    <iframe frameBorder="0" id="main" name="main" scrolling="yes" src="sy.php" style="HEIGHT: 100%; VISIBILITY: inherit; WIDTH: 100%; Z-INDEX: 1">
    </iframe>

    </td>
  </tr>
</table>
<TABLE class=small cellSpacing=0 cellPadding=0 width="100%" order=0>
  <TBODY>
    <TR vAlign=bottom> 
      <TD height="25" align=middle valign="bottom" bgcolor="677CAD"> <SPAN style="FONT-WEIGHT: bold; FILTER: dropshadow(color=#666666,offx=1,offy=1,positive=1); WIDTH: 100%; COLOR: #ffffff">公司公共资产管理系统</SPAN></TD>
    </TR>
  </TBODY>
</TABLE>
</html>
<script>
if(window.screen.width<'1024'){switchSysBar()}
</script>

