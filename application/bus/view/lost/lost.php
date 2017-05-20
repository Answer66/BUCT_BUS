<html lang="zh-CN">
<head>

    <meta charset="UTF-8">
    <title>班车预约系统</title>



</head>



<link href="__path__/Flat-UI-master/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Loading Flat UI -->
<link href="__path__/Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
<link href="__path__/Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">
<!--<link href="../../Flat-UI-master/css/my.css" rel="stylesheet">-->
<link href="__path__/Flat-UI-master/css/datepicker.css" rel="stylesheet">
<link href="__path__/Flat-UI-master/css/datepicker3.css" rel="stylesheet">
<link href="__path__/Flat-UI-master/css/header.css" rel="stylesheet">




<script src="__path__/Flat-UI-master/js/jquery.js"></script>
<script src="__path__/Flat-UI-master/dist/js/vendor/jquery.min.js"></script>
<script src="__path__/Flat-UI-master/dist/js/vendor/video.js"></script>
<script src="__path__/Flat-UI-master/dist/js/flat-ui.min.js"></script>
<script src="__path__/Flat-UI-master/docs/assets/js/application.js"></script>



<script src="__path__/Flat-UI-master/js/bootstrap-datepicker.js"></script>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!--<link rel="stylesheet" href="/resources/demos/style.css">-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!--
<style type="text/css">
    body { padding-top: 60px; }
</style -->

<body class="body-white" style="background:#e9f5fe">


<img src="__path__/Flat-UI-master/img/123.jpg" style="width:100%">


<div class="container" style="padding-top: 30px;">


    <div class="row demo-row">
        <div class="col-xs-12">
            <nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="try.php">班车预约系统</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="lookup.php">班车信息<span class="navbar-unread">1</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">预约信息 <b class="caret"></b></a>
                            <span class="dropdown-arrow"></span>
                            <ul class="dropdown-menu">
                                <li><a href="myorder.php">我的预约</a></li>
                                <li><a href="mycancel.php">我的解约</a></li>

                                <!--li class="divider"></li>
                                <li><a href="#">Separated link</a></li -->

                            </ul>
                        </li>
                        <li><a href="#fakelink">失物招领</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">测试人员<b class="caret"></b></a>
                            <ul class="dropdown-menu">

                                <li><a href="#" style="text-align: center;">登出</a></li>

                            </ul>
                        </li>


                        <!-- <li><a href="#"><span class="visible-sm visible-xs">Settings<span class="fui-gear"></span></span><span class="visible-md visible-lg"><span class="fui-gear"></span></span></a></li> -->
                    </ul>


                </div><!-- /.navbar-collapse -->
            </nav><!-- /navbar -->
        </div>
    </div> <!-- /row -->




    <div class="row demo-row"  />


    <div class="col-xs-3">


        <!-- input type="text" id="selectDate" placeholder="乘车日期"  class="form-control"    onfocus=this.blur()  style="width:80%;background:#1abc9c;color:white"  / -->


        <input type="text" id="selectDate" placeholder="乘车日期"  class="form-control"    onfocus=this.blur()  style="width:80%;"  />
        <span style="font-size:14px;color:#bbb;position:absolute;left:215px;top:4px;line-height:30px"><img src="__path__/Flat-UI-master/img/rili.jpg" width="30"></span>

    </div>



    <div class="col-xs-3">
        <label>乘车区间</label>
        &nbsp;
        <select class="form-control select select-primary" data-toggle="select">
            <!--select style="background-color:white;color:black" class="form-control select "  data-toggle="select" -->

            <option value="5" selected>不限</option>
            <option value="0">东校区</option>
            <option value="1">马甸</option>
            <option value="2">西三旗</option>
            <option value="3">新校区</option>
        </select>
    </div>


    <div class="col-xs-3">
        <div class="row demo-row">

            <div class="col-xs-6">




            </div>

            <div class="col-xs-6">
                <button type="button" class="btn btn-primary" id="Search" onclick="Search()">搜 索</button>
            </div>
        </div>



    </div>

    <div class="col-xs-3">
        <div class="row demo-row">

            <div class="col-xs-6">




            </div>

            <div class="col-xs-6">
            <!-- 按钮触发模态框 -->
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">发布失物信息</button>
            <!-- 模态框（Modal） -->
                <form action="{:url('buct_bus/bus/lost/lostAdd')}" method="post" class="form">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">丢失物品信息添加</h4>
                        </div>
                        <div class="modal-body">
                            <label>丢失日期</label>
                            <input type="text" id="lossDate" name = "lossDate" placeholder="丢失日期"  class="form-control"    onfocus=this.blur()  style="width:50%;"  />
                            <span style="font-size:14px;color:#bbb;position:absolute;left:250px;top:8px;line-height:30px">
                                <img src="__path__/Flat-UI-master/img/rili.jpg" width="30"></span>
                        </div>
                        <div class="modal-body">
                            <label>车辆编号</label>
                            <select name="BusId" class="form-control select select-primary" data-toggle="select">
                                <!--select style="background-color:white;color:black" class="form-control select "  data-toggle="select" -->

                                <option value="5" selected>请选择</option>
                                {volist name="busList" id="bus"}
                                    <option value="{$bus.BusId}">{$bus.BusId}</option>
                                {/volist}
                            </select>
                        </div>
                        <div class="modal-body">
                            <label>丢失物品描述</label>
                            <textarea cols="50" rows="5"  name ="Description" id="textarea" onKeyDown="textdown(event)"
                                      onKeyUp="textup()" onfocus="if(value=='限100字'){value=''}"
                                      onblur="if (value ==''){value='限100字'}">限100字</textarea>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="submit" class="btn btn-primary" onclick="Save()">提交更改</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            </div>
                </form>
        </div>


    </div>



</div> <!-- /row -->




<div class="row demo-row">
    <table class="table table-hover" style="background:white">
        <thead>
        <tr >
            <th>
                遗失日期
            </th>
            <th>
                班车编号
            </th>
            <th>
                发车区间
            </th>
            <th>
                物品描述
            </th>
            <th>
                操作
            </th>
        </tr>
        </thead>
        <tbody>
        {volist name="lostList" id="lost"}
        <tr>
            <td>
                {$lost.LossDate}
            </td>
            <td>
                {$lost.BusId}
            </td>
            <td >
                {$lost.busInfo}
            </td>
            <td>
                {$lost.Description}
            </td>
            <td>
                <button type="button" class="btn btn-primary btn-xs">认领</button>
            </td>
        </tr>
        {/volist}
        </tbody>
    </table>

</div>

<div class="footer" id="footer" style="position: static;">
    <div class="container">

        <div style="width: 100%;
            height: 1px;
            margin-bottom: 10px;
            background: #0668a4;"/>
    </div>
    <div class="row">
        <div class="col-sm-4 footercontact">


            <br> 地址：北京市朝阳区北三环东路15号北京化工大学
            <br>
        </div>
        <div class="col-sm-4 hidden-xs footerlogo text-center">
            <img src="__path__/Flat-UI-master/img/buct.png" alt="北京化工大学" width="200px">
        </div>
        <div class="col-sm-4 footerQR">
            <img src="__path__/Flat-UI-master/img/buct1.jpg" width="84px">
            <p>班车预约微信公众平台</p>
        </div>
    </div>
</div>

</body>
<script>

    function Search() {
        alert("点击了搜索！");
    }

    function GetDateStr(AddDayCount) {
        var dd = new Date();
        dd.setDate(dd.getDate()+AddDayCount);//获取AddDayCount天后的日期
        var y = dd.getFullYear();
        var m = dd.getMonth()+1;//获取当前月份的日期
        var d = dd.getDate();
        return y+"-"+m+"-"+d;
    }

    $(function(){
        //alert(GetDateStr(3));

        //var data_string=date.toLocaleDateString()；
        //alert(data_string);
        $("#selectDate").datepicker({   //添加日期选择功能
            numberOfMonths: 1,//显示几个月
            showButtonPanel: true,//是否显示按钮面板
            dateFormat: 'yy-mm-dd',//日期格式
            clearText: "清除",//清除日期的按钮名称
            closeText: "关闭",//关闭选择框的按钮名称
            yearSuffix: '年', //年的后缀
            showMonthAfterYear: true,//是否把月放在年的后面
            defaultDate: GetDateStr(1),//默认日期

            minDate: GetDateStr(1),//最小日期
            maxDate: GetDateStr(14),//最大日期
            monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
            dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
            dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
            dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
            onSelect: function (selectedDate) {  //选择日期后执行的操作
                //alert(selectedDate);
            }
        });
    });
    $(function(){
        //alert(GetDateStr(3));

        //var data_string=date.toLocaleDateString()；
        //alert(data_string);
        $("#lossDate").datepicker({   //添加日期选择功能
            numberOfMonths: 1,//显示几个月
            showButtonPanel: true,//是否显示按钮面板
            dateFormat: 'yy-mm-dd',//日期格式
            clearText: "清除",//清除日期的按钮名称
            closeText: "关闭",//关闭选择框的按钮名称
            yearSuffix: '年', //年的后缀
            showMonthAfterYear: true,//是否把月放在年的后面
            defaultDate: GetDateStr(0),//默认日期

//            minDate: GetDateStr(1),//最小日期
//            maxDate: GetDateStr(14),//最大日期
            monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
            dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
            dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
            dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
            onSelect: function (selectedDate) {  //选择日期后执行的操作
                //alert(selectedDate);
            }
        });
    });
    function textdown(e) {
        textevent = e;
        if (textevent.keyCode == 8) {
            return;
        }
        if (document.getElementById('textarea').value.length >= 100) {
            alert("大侠，手下留情，此处限字100")
            if (!document.all) {
                textevent.preventDefault();
            } else {
                textevent.returnValue = false;
            }
        }
    }
    function textup() {
        var s = document.getElementById('textarea').value;
        //判断ID为text的文本区域字数是否超过100个
        if (s.length > 100) {
            document.getElementById('textarea').value = s.substring(0, 100);
        }
    }

</script>
</html>
