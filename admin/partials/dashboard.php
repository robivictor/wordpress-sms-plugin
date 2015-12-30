<div ng-app="myapp" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" ng-controller="phonebookController">
        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>S</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Arif</b>SMS</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <!-- Navbar Right Menu -->
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar" >
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <ul class="sidebar-menu">
                    <li class="header"> <h3>MAIN NAVIGATION</h3></li>
                    <li>
                        <a ng-click="dash()">
                            <i class="fa fa-files-o"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                           <a ng-click="phone()">
                            <i class="fa fa-phone"></i> <span>Phonebook</span>
                        </a>
                    </li>
                    <li>
                        <a ng-click="msge()">
                            <i class="fa fa-envelope"></i> <span>Messages</span>
                        </a>
                    </li>
                    <li>
                        <a ng-click="sett()">
                            <i class="fa fa-settings"></i> <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"  ng-hide="das" >
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
                <div class="row" >
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
                <!-- /.row -->
                    <div class="row" >
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
                                <textarea id="compose-textarea" class="form-control" style="height: 100px">

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


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <div  ng-hide="phon">
            <div class="content-wrapper" ng-hide="phon">

                <!-- Main content -->
                <section class="content">
                    <!-- Info boxes -->


                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->

                        <div class="col-md-8" >
                            <div class="box box-info" >
                                <div class="box-header with-border">
                                    <h3 class="box-title" >Phone book</h3>

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
                                    <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New
                                        Order</a>
                                    <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All
                                        Orders</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>





                </section>
                <!-- /.content -->
            </div>
        </div>






    </div>
    <!-- ./wrapper -->



</div>









<script>
    var app = angular.module('myapp', []);
    app.controller('phonebookController', function($scope) {
        $scope.das = false;
        $scope.phon = true;
        $scope.msg = true;
        $scope.setting = true;

        $scope.dash = function() {
            $scope.das = false;
            $scope.phon = true;
            $scope.msg = true;
            $scope.setting = true;
        };
        $scope.phone = function() {
            $scope.phon = false;
            $scope.das = true;
            $scope.msg = true;
            $scope.setting = true;
        };
        $scope.msge = function() {
            $scope.msg = false;
            $scope.das = true;
            $scope.phon = true;
            $scope.setting = true;

        };
        $scope.sett = function() {
            $scope.setting = false;
            $scope.das = true;
            $scope.phon = true;
            $scope.msg = true;
        };
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