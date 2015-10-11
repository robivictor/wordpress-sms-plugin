<div ng-app="myapp" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
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
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-phone"></i> <span>Phonebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope"></i> <span>Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-settings"></i> <span>Settings</span>
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
                    <small>Version 2.0</small>
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
                            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">CPU Traffic</span>
                                <span class="info-box-number">90<small>%</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="ion ion-ios-gear-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Likes</span>
                                <span class="info-box-number">41,410</span>
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
                            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Sales</span>
                                <span class="info-box-number">760</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">New Members</span>
                                <span class="info-box-number">2,000</span>
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
                                <h3 class="box-title">Subscription Form</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-info pull-right">Subscribe</button>
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

                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class="label label-success">Shipped</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                    90,80,90,-70,61,-83,63
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">
                                                    90,80,-90,70,61,-83,68
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class="label label-danger">Delivered</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f56954" data-height="20">
                                                    90,-80,90,70,-61,83,63
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="label label-info">Processing</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00c0ef" data-height="20">
                                                    90,80,-90,70,-61,83,63
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">
                                                    90,80,-90,70,61,-83,68
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class="label label-danger">Delivered</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f56954" data-height="20">
                                                    90,-80,90,70,-61,83,63
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class="label label-success">Shipped</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                    90,80,90,-70,61,-83,63
                                                </div>
                                            </td>
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
                    <div class="col-md-4">

                        <div class="box box-warning direct-chat direct-chat-warning">
                            <div class="box-header with-border">
                                <h3 class="box-title">Direct Chat</h3>

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

    </div>
    <!-- ./wrapper -->
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