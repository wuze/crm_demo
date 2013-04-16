$(function ()
    {
        f_showCustomers2();

    });


function f_showCustomers2()
    {
        $("#maingrid2").ligerGrid({
        columns: [
        { display: 'ID', name: 'id', align: 'left',width:200,minWidth:25 },
        { display: '用户组', name: 'group',width:500 },
        ], dataAction: 'server', isScroll: false,
        url: "getData", sortName: 'id',
        showTitle: true, 
        detail: { onShowDetail: f_showOrder2 }
    });
}

function f_showOrder2(row, detailPanel)
{
    var inner = $("<div style='margin:10px; width:80%; border:1px solid #A3C0E8;'></div>");
    var box1 = $("<div title='用户信息' style='margin:10px;'><div></div></div>");
    var box2 = $("<div title='分组详情'  style='margin:10px;'><div></div></div>");
    $(">div", box2).append("<p> 描述: " + row.desc + "</p>");
    inner.append(box1);
    inner.append(box2);
    inner.ligerTab();
    $(detailPanel).append(inner);
    $('>div', box1).ligerGrid({
        columns:
                    [
                     { display: 'ID', name: 'id', align: 'left' },
                     { display: '用户名', name: 'name',width:100 },
                     { display: '密码', name: 'pwd',width:100 },
                    ], dataAction: 'server', isScroll: false, usePager: false, showToggleColBtn: false,
        url: "getSubData/" + row.id, sortName: 'id', showTitle: false,
        width: '95%', columnWidth: 100
    });

    $(detailPanel).show();
}