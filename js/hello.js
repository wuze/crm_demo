

$(function(){

    var DepartmentList = DepartmentData.Rows;

    var sexData = [{ Sex: 1, text: '男' }, { Sex: 2, text: '女'}];

    $(f_initGrid);

    var manager, g;

    function f_initGrid()

    { 

       g =  manager = $("#maingrid").ligerGrid({

            columns: [

            { display: '主键', name: 'ID', width: 50, type: 'int',frozen:true },

            { display: '名字', name: 'RealName',

                editor: { type: 'text' }

            },

            { display: '性别', width: 50, name: 'Sex',type:'int',

                editor: { type: 'select', data: sexData, valueColumnName: 'Sex' },

                render: function (item)

                {

                    if (parseInt(item.Sex) == 1) return '男';

                    return '女';

                }

            },

            { display: '年龄', name: 'Age', width: 50, type: 'int', editor: { type: 'int'} },

            { display: '入职日期', name: 'IncomeDay', type: 'date', format: 'yyyy年MM月dd', width: 100, editor: { type: 'date'} },

            { display: '部门', name: 'DepartmentID', width: 120, isSort: false,

                editor: { type: 'select', data: DepartmentList, valueColumnName: 'DepartmentID', displayColumnName: 'DepartmentName' }, render: function (item)

                {

                    for (var i = 0; i < DepartmentList.length; i++)

                    {

                        if (DepartmentList[i]['DepartmentID'] == item.DepartmentID)

                            return DepartmentList[i]['DepartmentName']

                    }

                    return item.DepartmentName;

                }

            },

            { display: '地址', name: 'Address',

                editor: { type: 'text' }, align: 'left', width: 300

            }

            ],

            onSelectRow: function (rowdata, rowindex)

            {

                $("#txtrowindex").val(rowindex);

            },

            enabledEdit: true, isScroll: false, checkbox:true,rownumbers:true,

            data:EmployeeData,

            width: '100%'

        });   

    }

    

    function deleteRow()

    { 

        manager.deleteSelectedRow();

    }

    var newrowid = 100;

    function addNewRow()

    {

        var row = manager.getSelectedRow();

        //参数1:rowdata(非必填)

        //参数2:插入的位置 Row Data 

        //参数3:之前或者之后(非必填)

        manager.addRow({ 

            DepartmentID: 3,

            DepartmentName: '销售部',

            RealName: "分为" + newrowid,

            ID: newrowid++,

            Sex : 1,

            Age : 25,

            IncomeDay: new Date(1306108800000),

            Phone : "2343434",

            Address: "wwrere4"

        }, row, document.getElementById("chkbefore").checked);

    } 

    function getSelected()

    { 

        var row = manager.getSelectedRow();

        if (!row) { alert('请选择行'); return; }

        alert(JSON.stringify(row));

    }

    function getData()

    { 

        var data = manager.getData();

        alert(JSON.stringify(data));

    } 

});