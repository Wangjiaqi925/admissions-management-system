
<SCRIPT LANGUAGE="JavaScript" SRC="js/treemenu.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="js/Common.js"></SCRIPT>

<body>
<link rel="stylesheet" href="images/StyleSheet.css" type="text/css" />
<SCRIPT LANGUAGE='JavaScript'>
foldersTree = gFldr('<DIV CLASS=fldrroot><b>ϵͳ�����б�</b></DIV>','');

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>����Ա�ʺŹ���</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yhzhgl.php target=main>����Ա�ʺŹ���</a>', '', 'images/editinfo.gif'));

Class1 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>ע���û�����</DIV>', ''));
insDoc(Class1, gLnk(1, '<a href=yonghuxinxi_list.php target=main>ע���û���ѯ</a>', '', 'images/editinfo.gif'));

Class333 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�����ʲ�����</DIV>', ''));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_add.php target=main>�����ʲ����</a>', '', 'images/editinfo.gif'));
insDoc(Class333, gLnk(1, '<a href=gonggongzichan_list.php target=main>�����ʲ�����</a>', '', 'images/editinfo.gif'));

Class333 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>�û��������</DIV>', ''));
insDoc(Class333, gLnk(1, '<a href=baoxiushenqing_list1.php target=main>�û���������</a>', '', 'images/editinfo.gif'));
insDoc(Class333, gLnk(1, '<a href=baoxiushenqing_list.php target=main>���������ѯ</a>', '', 'images/editinfo.gif'));







Class5 = insFldr(foldersTree, gFldr('<DIV CLASS=fldrroot>ϵͳ����</DIV>', ''));
insDoc(Class5, gLnk(1, '<a href=shanchushuju.php target=main>����ɾ��</a>', '', 'images/editinfo.gif'));

insDoc(foldersTree, gLnk(1, '<a href=mod.php target=main>�޸�����</a>', '', 'images/pwd.GIF'));
insDoc(foldersTree, gLnk(1, '�˳�', 'logout.php', 'images/exit.GIF'));
initializeDocument(0);</SCRIPT>
