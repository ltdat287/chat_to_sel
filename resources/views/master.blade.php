<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Empty Page</title>

    <link href="{{ mix( 'css/vendors.css' ) }}" rel="stylesheet">
    <link href="{{ mix( 'css/app.css' ) }}" rel="stylesheet">

</head>

<body class="">

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset( 'img/profile_small.jpg' ) }}">
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>

                <li>
                    <a href="/"><i class="fa fa-diamond"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Catalog</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Category</a></li>
                        <li><a href="products.html">Product</a></li>
                        <li ><a href="#">Attributes</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a href="inventories.html"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Inventory</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li  class="active"><a href="/inventories.html">Inventories List</a></li>
                        <li><a href="/inventories.html">Locations</a></li>
                        <li><a href="/inventories_new.html">Adjust Inventory</a></li>
                        <li><a href="/inventories_count.html">Count</a></li>
                    </ul>
                </li>

                <li>
                    <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Inbound</span>  </a>
                </li>
                <li>
                    <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Outbound</span></a>
                </li>

            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">ship & play.</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="{{ asset( 'img/a7.jpg' ) }}">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="{{ asset( 'img/a4.jpg' ) }}">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="{{ asset( 'img/profile.jpg' ) }}">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Inventories</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">
                        <a href="inventories.html">Inventories</a>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-sm-5 m-b-xs">
                                </div>
                                <div class="col-sm-4 m-b-xs">

                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input type="text" placeholder="Product name" class="input-sm form-control">
                                        <span class="input-group-btn">
											<button type="button" class="btn btn-sm btn-default"><i class="fa fa-search"></i> Search</button> </span></div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="300px" class="text-center">Name</th>
                                        <th width="100px" class="text-center">Quantity</th>
                                        <th width="150px" class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">Ha Noi</td>
                                        <td class="text-center">12</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle"><i class="fa fa-bolt m-r-xs"></i> Actions.. <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="inventories_count.html"><i class="fa fa-pencil m-r-xs"></i>
                                                            Count</a></li>
                                                    <li><a href="inventories_new.html"><i class="fa fa-history m-r-xs"></i>
                                                            Adjust</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Ha Noi</td>
                                        <td class="text-center">12</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle"><i class="fa fa-bolt m-r-xs"></i> Actions.. <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="inventories_count.html"><i class="fa fa-pencil m-r-xs"></i>
                                                            Count</a></li>
                                                    <li><a href="inventories_new.html"><i class="fa fa-history m-r-xs"></i>
                                                            Adjust</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Ha Noi</td>
                                        <td class="text-center">12</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle"><i class="fa fa-bolt m-r-xs"></i> Actions.. <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="inventories_count.html"><i class="fa fa-pencil m-r-xs"></i>
                                                            Count</a></li>
                                                    <li><a href="inventories_new.html"><i class="fa fa-history m-r-xs"></i>
                                                            Adjust</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                                        <button class="btn btn-white">1</button>
                                        <button class="btn btn-white  active">2</button>
                                        <button class="btn btn-white">3</button>
                                        <button class="btn btn-white">4</button>
                                        <button class="btn btn-white">5</button>
                                        <button class="btn btn-white">6</button>
                                        <button class="btn btn-white">7</button>
                                        <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ mix('js/vendors.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
