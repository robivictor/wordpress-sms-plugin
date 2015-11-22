<div ng-app="myapp" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="http://localhost/wordpress/wp-admin/admin.php?page=admin.php%3Fpage%3DArifSms" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-lg"><b>Arif</b>SMS</span>
                <!-- logo for regular state and mobile devices -->
                <!--<span class="logo-lg"><b>Admin</b>LTE</span>-->
            </a>
            <!-- Header Navbar: style can be found in header.less -->

        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->

                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="http://localhost/wordpress/wp-admin/admin.php?page=admin.php%3Fpage%3DArifSms">
                            <i class="fa fa-dashboard"></i> <span>DASHBOARD</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>

                    </li>
                    <li class="treeview">
                        <a href="../wp-content/plugins/New/mailbox/phonebook.html">
                            <i class="fa fa-files-o"></i>
                            <span>PHONEBOOK</span>
                        </a>

                    </li>
                    <li>
                        <a href="../wp-content/plugins/New/mailbox/mailbox.html">
                            <i class="fa fa-th"></i> <span>MESSAGE</span> <small class="label pull-right bg-green">new</small>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>SETTING</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="ion ion-person"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Phone</span>
                                <span class="info-box-number">900<small>contacts</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"> <i class="ion ion-person-stalker"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Groups</span>
                                <span class="info-box-number">20 groups</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="ion ion-email" ></i><i class="ion ion-ios-arrow-thin-down" > </i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Inbox</span>
                                <span class="info-box-number">60</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"> <i class="ion ion-email" ></i><i class="ion ion-ios-arrow-thin-up" > </i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Outbox</span>
                                <span class="info-box-number">15</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row" ng-controller="phonebookController">
                    <!-- Left col -->

                    <div class="col-md-8" >
                        <div class="box box-warning" >
                            <div class="box-header with-border">
                                <h3 class="box-title">Phone book</h3>

                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Subscription Date</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr ng-repeat="x in subscribers">
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ x.name }}</td>
                                            <td>{{ x.phone }}</td>
                                            <td>{{ x.subscriptiondate | date }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">

                                <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-right">View All
                                    Contacts</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        <div class="box box-success" >
                            <div class="box-header with-border">
                                <h3 class="box-title">Add Contact</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">


                                        <div class="col-sm-12">
                                            <input type="" class="form-control" id="idname" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">


                                        <div class="col-sm-12">
                                            <input type="" class="form-control" id="idphone" placeholder="Phone">
                                        </div>
                                    </div>


                                    <div >
                                        <button id="addbutton" type="submit" class="btn btn-info pull-right">Add</button>
                                    </div><!-- /.box-footer -->
                                </div><!--/.box -->

                            </form>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </section>
        </div>

    </div>

    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content">
                <div class="row" ng-controller="phonebookController">
                    <!--  <div class="row" >-->
                    <div class="col-md-8">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Latest Messages</h3>

                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                        <tr>
                                            <th>Sender/Recipent</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr ng-repeat="x in message">

                                            <td>{{ x.sender }}</td>
                                            <td>{{ x.phone }}</td>
                                            <td>{{ x.message}}</td>
                                            <td class="label label-success">{{ x.status}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">

                                <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All
                                    Messages</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-md-4">


                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Send Messages</h3>

                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <textarea id="compose-textarea" class="form-control" style="height: 300px">

                                </textarea>
                            </div>

                            <div class="box-footer">
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                                </div>
                                <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                            </div><!-- /.box-footer -->
                        </div>
                        <!--/.direct-chat -->
                    </div>
                </div>
        </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- ./wrapper -->
    <script>
        var app = angular.module('myapp', []);
        app.controller('phonebookController', function($scope) {
            $scope.subscribers = [
                { "name": "John Doe", "phone": 29 , "subscriptiondate":"01/02/2015" },
                { "name": "Anna Smith", "phone": 24, "subscriptiondate":"01/02/2015" },
                { "name": "Peter Jones", "phone": 39, "subscriptiondate":"01/02/2015" }
            ];

            $scope.message = [
                { "sender": "John Doe", "phone": 29 ,"message":"robi how are you", "status":"Deliverd" },
                { "sender": "Anna Smith", "phone": 24,"message":"robi how are you", "status":"Send" },
                { "sender": "Peter Jones", "phone": 39,"message":"robi how are you", "status":"send" }
            ];
        });
    </script>
    <script>
        var add=getElementById("addbutton");
        var namefield=getElementById("idname");
        var phonefield=getElementById("idphone");
        /*add.onclick=function(){
         if(namefield.value!="Name"){
         namefield.value="";
         }
         if(phonefield.value!="Phone"){
         phonefield.value="";
         }
         };*/
        add.onclick=alert("hey")
    </script>
</div>

<script>
    var app = angular.module('myapp', []);
    app.controller('phonebookController', function($scope) {
       $scope.subscribers = [
           { "name": "John Doe", "phone": 29 , "subscriptiondate":"01/02/2015" },
           { "name": "Anna Smith", "phone": 24, "subscriptiondate":"01/02/2015" },
           { "name": "Peter Jones", "phone": 39, "subscriptiondate":"01/02/2015" }
       ];

        $scope.message = [
            { "sender": "John Doe", "phone": 29 ,"message":"robi how are you", "status":"Deliverd" },
            { "sender": "Anna Smith", "phone": 24,"message":"robi how are you", "status":"Send" },
            { "sender": "Peter Jones", "phone": 39,"message":"robi how are you", "status":"send" }
        ];
    });
</script>
