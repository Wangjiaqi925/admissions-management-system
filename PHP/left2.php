
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>


<body>
<link rel="stylesheet" href="images/StyleSheet.css" type="text/css" />
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>系统功能列表</b></DIV>','');

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>个人资料管理</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yonghuxinxi_updt2.php target=main>个人资料管理</a>', '', 'images/editinfo.gif'));

Class333 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>公共资产管理</DIV>', ''));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_add.php target=main>公共资产申请</a>', '', 'images/editinfo.gif'));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_list2.php target=main>申请结果查询</a>', '', 'images/editinfo.gif'));

Class333 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>资产报修管理</DIV>', ''));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_list4.php target=main>资产报修申请</a>', '', 'images/editinfo.gif'));
insDoc(Class333, gLnk(1, '<a href=baoxiushenqing_list2.php target=main>报修结果查询</a>', '', 'images/editinfo.gif'));






insDoc(foldersTree, gLnk(1, '退出', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
