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
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar" >
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
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
                        <div class="box box-info" >
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
                    <div class="col-md-4">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Contact</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>phone:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                    </div><!-- /.input group -->
                                </div><!-- /.form group -->
                                <div >
                                    <button type="submit" class="btn btn-info pull-right">Add</button>
                                </div><!-- /.box-footer -->
                                <!--/.box -->
                            </div>
                            <!-- /.col -->
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
                            <div class="box box-warning direct-chat direct-chat-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Send Message</h3>
                                    <div class="box-tools pull-right">
                                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                                data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages">
                                    </div>
                                    <!--/.direct-chat-messages-->
                                    <!-- Contacts are loaded here -->
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img"
                                                         src="/smsplugin/wp-content/plugins/ArifSms/admin/dist/img/user1-128x128.jpg">
                                                    <div class="contacts-list-info">
<span class="contacts-list-name">
Count Dracula
<small class="contacts-list-date pull-right">2/28/2015</small>
</span>
                                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img"
                                                         src="/smsplugin/wp-content/plugins/ArifSms/admin/dist/img/user7-128x128.jpg">
                                                    <div class="contacts-list-info">
<span class="contacts-list-name">
Sarah Doe
<small class="contacts-list-date pull-right">2/23/2015</small>
</span>
                                                        <span class="contacts-list-msg">I will be waiting for...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img"
                                                         src="/smsplugin/wp-content/plugins/ArifSms/admin/dist/img/user3-128x128.jpg">
                                                    <div class="contacts-list-info">
<span class="contacts-list-name">
Nadia Jolie
<small class="contacts-list-date pull-right">2/20/2015</small>
</span>
                                                        <span class="contacts-list-msg">I'll call you back at...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img"
                                                         src="/smsplugin/wp-content/plugins/ArifSms/admin/dist/img/user5-128x128.jpg">
                                                    <div class="contacts-list-info">
<span class="contacts-list-name">
Nora S. Vans
<small class="contacts-list-date pull-right">2/10/2015</small>
</span>
                                                        <span class="contacts-list-msg">Where is your new...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img"
                                                         src="/smsplugin/wp-content/plugins/ArifSms/admin/dist/img/user6-128x128.jpg">
                                                    <div class="contacts-list-info">
<span class="contacts-list-name">
John K.
<small class="contacts-list-date pull-right">1/27/2015</small>
</span>
                                                        <span class="contacts-list-msg">Can I take a look at...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img"
                                                         src="/smsplugin/wp-content/plugins/ArifSms/admin/dist/img/user8-128x128.jpg">
                                                    <div class="contacts-list-info">
<span class="contacts-list-name">
Kenneth M.
<small class="contacts-list-date pull-right">1/4/2015</small>
</span>
                                                        <span class="contacts-list-msg">Never mind I found...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                        </ul>
                                        <!-- /.contatcts-list -->
                                    </div>
                                    <!-- /.direct-chat-pane -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Type Message ..."
                                                   class="form-control">
<span class="input-group-btn">
<button type="button" class="btn btn-warning btn-flat">Send</button>
</span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-footer-->
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