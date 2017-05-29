
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>

<body>
<link rel="stylesheet" href="images/StyleSheet.css" type="text/css" />
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>系统功能列表</b></DIV>','');

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>管理员帐号管理</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yhzhgl.php target=main>管理员帐号管理</a>', '', 'images/editinfo.gif'));

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>注册用户管理</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yonghuxinxi_list.php target=main>注册用户查询</a>', '', 'images/editinfo.gif'));

Class333 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>公共资产管理</DIV>', ''));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_add.php target=main>公共资产添加</a>', '', 'images/editinfo.gif'));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_list.php target=main>公共资产审批</a>', '', 'images/editinfo.gif'));

Class333 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>用户申请管理</DIV>', ''));
insDoc(Class333, gLnk(1, '<a href=baoxiushenqing_list1.php target=main>用户申请审批</a>', '', 'images/editinfo.gif'));
insDoc(Class333, gLnk(1, '<a href=baoxiushenqing_list.php target=main>结果反馈查询</a>', '', 'images/editinfo.gif'));







Class5 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>系统管理</DIV>', ''));
insDoc(Class5, gLnk(1, '<a href=shanchushuju.php target=main>数据删除</a>', '', 'images/editinfo.gif'));

insDoc(foldersTree, gLnk(1, '<a href=mod.php target=main>修改密码</a>', '', 'images/pwd.GIF'));
insDoc(foldersTree, gLnk(1, '退出', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
