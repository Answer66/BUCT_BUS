<?php
require_once('../path.php');
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <meta charset="UTF-8">
    <title>班车预约系统</title>



</head>



<link href="<?php echo ROOT?>Flat-UI-master/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo ROOT?>Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
    <link href="<?php echo ROOT?>Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">
    <link href="<?php echo ROOT?>Flat-UI-master/css/my.css" rel="stylesheet">
    <link href="<?php echo ROOT?>Flat-UI-master/css/datepicker.css" rel="stylesheet">
    <link href="<?php echo ROOT?>Flat-UI-master/css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo ROOT?>Flat-UI-master/css/header.css" rel="stylesheet">




    <script src="<?php echo ROOT?>Flat-UI-master/js/jquery.js"></script>
    <script src="<?php echo ROOT?>Flat-UI-master/dist/js/vendor/jquery.min.js"></script>
    <script src="<?php echo ROOT?>Flat-UI-master/dist/js/vendor/video.js"></script>
    <script src="<?php echo ROOT?>Flat-UI-master/dist/js/flat-ui.min.js"></script>
    <script src="<?php echo ROOT?>Flat-UI-master/docs/assets/js/application.js"></script>



    <script src="<?php echo ROOT?>Flat-UI-master/js/bootstrap-datepicker.js"></script>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 

  










<!--
<style type="text/css">
    body { padding-top: 60px; }
</style -->






<body class="body-white" style="background:#e9f5fe">


   <img src="<?php echo ROOT?>Flat-UI-master/img/123.jpg" style="width:100%">

 
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
                <li><a href="fake/lookup.php">班车信息<span class="navbar-unread">1</span></a></li>
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
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">失物招领 <b class="caret"></b></a>
                      <span class="dropdown-arrow"></span>
                      <ul class="dropdown-menu">
                          <li><a href="fakeAdd.php">我有失物</a></li>
                          <li><a href="fakeSearch.php">我找失物</a></li>

                          <!--li class="divider"></li>
                          <li><a href="#">Separated link</a></li -->

                      </ul>
                  </li>
               </ul>
               
               <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">测试人员<b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                <li><a href="#" style="text-align: center;">登出</a></li>
                
              </ul>
            </li>
            <li>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </li>


            
            <!-- <li><a href="#"><span class="visible-sm visible-xs">Settings<span class="fui-gear"></span></span><span class="visible-md visible-lg"><span class="fui-gear"></span></span></a></li> -->
          </ul>


            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      </div> <!-- /row -->
 
 
 

 
       <div class="row demo-row"  >


        <div class="col-xs-3">
          
          
          <!-- input type="text" id="selectDate" placeholder="乘车日期"  class="form-control"    onfocus=this.blur()  style="width:80%;background:#1abc9c;color:white"  / -->  
           

           <input type="text" id="selectDate" placeholder="乘车日期"  class="form-control"    onfocus=this.blur()  style="width:80%;"  />  
           <span style="font-size:14px;color:#bbb;position:absolute;left:215px;top:4px;line-height:30px"><img src="<?php echo ROOT?>Flat-UI-master/img/rili.jpg"  width="30"></span>
          
        </div>



      

        

        <div class="col-xs-3">
          <button type="button" class="btn btn-primary">搜 索</button>
          <div class="row demo-row">

            <div class="col-xs-6">

              
         

            </div>

            <div class="col-xs-6">
              
            </div>
          </div>
          


        </div>
      </div> <!-- /row -->

  



<div class="row demo-row">
  <table class="table table-hover" style="background:white">
        <thead>
          <tr>
            <th>
              发车日期
            </th>
            <th>
              星期
            </th>
            <th>
              发车时间
            </th>
            <th>
              上车地点
            </th>
            <th>
              下车地点
            </th>
            <th>
              操作时间
            </th>
           
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>
              2017-05-10
            </td>
            <td>
              周三
            </td>
			<td>
              6.50
            </td>
            <td>
              东校区
            </td>
            <td>
              新校区
            </td>
			<td>
              2017-05-06
            </td>
          </tr>
          <tr>

            <td>
              2017-05-10
            </td>
            <td>
              周三
            </td>
			<td>
              6.50
            </td>
            <td>
              东校区
            </td>
            <td>
              新校区
            </td>
			<td>
              2017-05-06
            </td>
          </tr>
          <tr>

            <td>
              2017-05-10
            </td>
            <td>
              周三
            </td>
			<td>
              6.50
            </td>
            <td>
              东校区
            </td>
            <td>
              新校区
            </td>
			<td>
              2017-05-06
            </td>
          </tr>
          <tr>

            <td>
              2017-05-10
            </td>
            <td>
              周三
            </td>
			<td>
              6.50
            </td>
            <td>
              东校区
            </td>
            <td>
              新校区
            </td>
			<td>
              2017-05-06
            </td>
          </tr>
          <tr>

            <td>
              2017-05-10
            </td>
            <td>
              周三
            </td>
			<td>
              6.50
            </td>
            <td>
              东校区
            </td>
            <td>
              新校区
            </td>
			<td>
              2017-05-06
            </td>
          </tr>
        </tbody>
      </table>

</div>
   
<script>

  


  $(function(){  
            $("#selectDate").datepicker({//添加日期选择功能  
            numberOfMonths:1,//显示几个月  
            showButtonPanel:true,//是否显示按钮面板  
            dateFormat: 'yy-mm-dd',//日期格式  
            clearText:"清除",//清除日期的按钮名称  
            closeText:"关闭",//关闭选择框的按钮名称  
            yearSuffix: '年', //年的后缀  
            showMonthAfterYear:true,//是否把月放在年的后面  
            defaultDate:'2011-03-10',//默认日期  
            minDate:'2011-03-05',//最小日期  
            maxDate:'2011-03-20',//最大日期  
            monthNames: ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],  
            dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],  
            dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],  
            dayNamesMin: ['日','一','二','三','四','五','六'],  
            onSelect: function(selectedDate) {//选择日期后执行的操作  
                //alert(selectedDate);  
            }  
            });  
        });
</script>







</body>
</html>
