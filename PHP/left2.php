
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>


<body>
<link rel="stylesheet" href="images/StyleSheet.css" type="text/css" />
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>ϵͳ�����б�</b></DIV>','');

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�������Ϲ���</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yonghuxinxi_updt2.php target=main>�������Ϲ���</a>', '', 'images/editinfo.gif'));

Class333 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�����ʲ�����</DIV>', ''));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_add.php target=main>�����ʲ�����</a>', '', 'images/editinfo.gif'));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_list2.php target=main>��������ѯ</a>', '', 'images/editinfo.gif'));

Class333 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�ʲ����޹���</DIV>', ''));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_list4.php target=main>�ʲ���������</a>', '', 'images/editinfo.gif'));
insDoc(Class333, gLnk(1, '<a href=baoxiushenqing_list2.php target=main>���޽����ѯ</a>', '', 'images/editinfo.gif'));






insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
