<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh">
<head>
 <title>小山的Demo</title>
	 <link rel="stylesheet" type="text/css" href="<?=base_url()?>style/default/main.css" />
	 <link href="/js/lib/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css" />
	 <script src="/js/jquery1.6.2.min.js" type="text/javascript"></script>
	 <script src="/js/lib/ligerUI/js/core/base.js" type="text/javascript"></script>
	 <script src="/js/lib/ligerUI/js/plugins/ligerGrid.js" type="text/javascript"></script>
	 <script src="/js/lib/ligerUI/js/core/base.js" type="text/javascript"></script>
    <script src="/js/lib/ligerUI/js/plugins/ligerDialog.js" type="text/javascript"></script>
    <script src="/js/lib/ligerUI/js/plugins/ligerTextBox.js" type="text/javascript"></script>
    <script src="/js/lib/ligerUI/js/plugins/ligerCheckBox.js" type="text/javascript"></script>
    <script src="/js/lib/ligerUI/js/plugins/ligerComboBox.js" type="text/javascript"></script>
    <script src="/js/lib/ligerUI/js/plugins/ligerGrid.js" type="text/javascript"></script>
    <script src="/js/lib/ligerUI/js/plugins/ligerDateEditor.js" type="text/javascript"></script>
    <script src="/js/lib/ligerUI/js/plugins/ligerSpinner.js" type="text/javascript"></script>
    <script src="/js/EmployeeData.js" type="text/javascript"></script>
    <script src="/js/DepartmentData.js" type="text/javascript"></script>
	 <script src="/js/json2.js" type="text/javascript" ></script>
	 <script src="/js/hello.js" type="text/javascript" ></script>
</head>

<body>

 <div id="body">
 <div style="height:30px; padding:20px;">
  <a class="l-button" style="width:120px;float:left; margin-left:10px;" onclick="addNewRow()">增加一行</a>
  <a class="l-button" style="width:120px;float:left; margin-left:10px;" onclick="deleteRow()">删除选择的行</a>
  <a class="l-button" style="width:120px;float:left; margin-left:10px;" onclick="updateRow()">修改选择的行</a>
  <a class="l-button" style="width:120px;float:left; margin-left:10px;" onclick="searchRow()">条件查询</a>
 </div>
  <div id="maingrid"></div>
</div>
</body>
</html>
 