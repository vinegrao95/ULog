<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULog - Green Yellow</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />


</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-info">
                                <div class="user-name">Jonny <strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="">
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.php">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.php">Morris Charts</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="timeline.php"><i class="fa fa-flask fa-fw"></i>Timeline</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-table fa-fw"></i>Tables</a>
                    </li>
                    <li>
                        <a href="forms.php"><i class="fa fa-edit fa-fw"></i>Forms</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.php">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.php">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.php">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.php">Typography</a>
                            </li>
                            <li class="selected">
                                <a href="grid.php">Grid</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- third-level-items -->
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li class="">
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="">
                                <a href="blank.php">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.php">Login Page</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!--page header-->
                <div class="col-lg-12">
                    <h1 class="page-header">Grid</h1>
                </div>
                 <!--end page header-->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Grid options</h3>
                            <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                Extra small devices
                                                <small>Phones (&lt;768px)</small>
                                            </th>
                                            <th>
                                                Small devices
                                                <small>Tablets (&ge;768px)</small>
                                            </th>
                                            <th>
                                                Medium devices
                                                <small>Desktops (&ge;992px)</small>
                                            </th>
                                            <th>
                                                Large devices
                                                <small>Desktops (&ge;1200px)</small>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Grid behavior</th>
                                            <td>Horizontal at all times</td>
                                            <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
                                        </tr>
                                        <tr>
                                            <th>Max container width</th>
                                            <td>None (auto)</td>
                                            <td>750px</td>
                                            <td>970px</td>
                                            <td>1170px</td>
                                        </tr>
                                        <tr>
                                            <th>Class prefix</th>
                                            <td>
                                                <code>.col-xs-</code>
                                            </td>
                                            <td>
                                                <code>.col-sm-</code>
                                            </td>
                                            <td>
                                                <code>.col-md-</code>
                                            </td>
                                            <td>
                                                <code>.col-lg-</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># of columns</th>
                                            <td colspan="4">12</td>
                                        </tr>
                                        <tr>
                                            <th>Max column width</th>
                                            <td class="text-muted">Auto</td>
                                            <td>60px</td>
                                            <td>78px</td>
                                            <td>95px</td>
                                        </tr>
                                        <tr>
                                            <th>Gutter width</th>
                                            <td colspan="4">30px (15px on each side of a column)</td>
                                        </tr>
                                        <tr>
                                            <th>Nestable</th>
                                            <td colspan="4">Yes</td>
                                        </tr>
                                        <tr>
                                            <th>Offsets</th>
                                            <td colspan="4">Yes</td>
                                        </tr>
                                        <tr>
                                            <th>Column ordering</th>
                                            <td colspan="4">Yes</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any
                                <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a
                                <code>.col-lg-</code> class is not present.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
             <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Example: Stacked-to-horizontal</h3>
                            <p>Using a single set of
                                <code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any
                                <code>.row</code>.</p>
                            <div class="row show-grid">
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                                <div class="col-md-1">.col-md-1</div>
                            </div>
                            <div class="row show-grid">
                                <div class="col-md-8">.col-md-8</div>
                                <div class="col-md-4">.col-md-4</div>
                            </div>
                            <div class="row show-grid">
                                <div class="col-md-4">.col-md-4</div>
                                <div class="col-md-4">.col-md-4</div>
                                <div class="col-md-4">.col-md-4</div>
                            </div>
                            <div class="row show-grid">
                                <div class="col-md-6">.col-md-6</div>
                                <div class="col-md-6">.col-md-6</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Example: Mobile and desktop</h3>
                            <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding
                                <code>.col-xs-*</code>
                                <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
                            <div class="row show-grid">
                                <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                            </div>
                            <div class="row show-grid">
                                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                            </div>
                            <div class="row show-grid">
                                <div class="col-xs-6">.col-xs-6</div>
                                <div class="col-xs-6">.col-xs-6</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
           <!-- end row -->
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Example: Mobile, tablet, desktops</h3>
                            <p>Build on the previous example by creating even more dynamic and powerful layouts with tablet
                                <code>.col-sm-*</code> classes.</p>
                            <div class="row show-grid">
                                <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                            </div>
                            <div class="row show-grid">
                                <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                <!-- Optional: clear the XS cols if their content doesn't match in height -->
                                <div class="clearfix visible-xs"></div>
                                <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
           <!-- end row -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 id="grid-responsive-resets">Responsive column resets</h3>
                            <p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a
                                <code>.clearfix</code> and our <a href="#responsive-utilities">responsive utility classes</a>.</p>
                            <div class="row show-grid">
                                <div class="col-xs-6 col-sm-3">
                                    .col-xs-6 .col-sm-3
                                    <br>Resize your viewport or check it out on your phone for an example.
                                </div>
                                <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

                                <!-- Add the extra clearfix for only the required viewport -->
                                <div class="clearfix visible-xs"></div>

                                <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
          <!-- end row -->

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 id="grid-offsetting">Offsetting columns</h3>
                            <p>Move columns to the right using
                                <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by
                                <code>*</code> columns. For example,
                                <code>.col-md-offset-4</code> moves
                                <code>.col-md-4</code> over four columns.</p>
                            <div class="row show-grid">
                                <div class="col-md-4">.col-md-4</div>
                                <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                            </div>
                            <div class="row show-grid">
                                <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                                <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                            </div>
                            <div class="row show-grid">
                                <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
          <!-- end row -->
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 id="grid-nesting">Nesting columns</h3>
                            <p>To nest your content with the default grid, add a new
                                <code>.row</code> and set of
                                <code>.col-md-*</code> columns within an existing
                                <code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12.</p>
                            <div class="row show-grid">
                                <div class="col-md-9">
                                    Level 1: .col-md-9
                                    <div class="row show-grid">
                                        <div class="col-md-6">
                                            Level 2: .col-md-6
                                        </div>
                                        <div class="col-md-6">
                                            Level 2: .col-md-6
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- end row -->
            <!--  row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 id="grid-column-ordering">Column ordering</h3>
                            <p>Easily change the order of our built-in grid columns with
                                <code>.col-md-push-*</code> and
                                <code>.col-md-pull-*</code> modifier classes.</p>
                            <div class="row show-grid">
                                <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
                                <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end row -->

            

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
