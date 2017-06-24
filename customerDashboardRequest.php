<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome Customer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>




<?php



?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PTCL Data Center</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Customer Name <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="customerDashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="customerDashboardRequest.php"><i class="fa fa-fw fa-location-arrow"></i> Request Visit</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Request Visit
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="customerDashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Request Visit
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name">
                                <p class="help-block">In case of more than one name, kindly use commas.</p>
                            </div>

                            <div class="form-group">
                                <label>NIC</label>
                                <input class="form-control" name="nic">
                                <p class="help-block">In case of more than one NIC, use commas.</p>
                            </div>

                            <div class="form-group">
                                <label>Company</label>
                                <input class="form-control" name="company">
                            </div>

                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date">
                            </div>

                            <div class="form-group">
                            	<div class="row">
                            		<div class="col-lg-6">
                                		<label>Time in</label>
		                                <input class="form-control" type="Time" name="timein">
                            		</div>
                            		<div class="col-lg-6">
                                		<label>Time Out</label>
		                                <input class="form-control" type="Time" name="timeout">
                            		</div>
                            	</div>

                            <div class="form-group">
                                <label>Work Details</label>
                                <textarea class="form-control" rows="3" name="workdetails"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Equipments Accompanied</label>
                                <textarea class="form-control" rows="3" name="equipments"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Servers/Equipments/ACs Unit, etc to be worked on</label>
                                <textarea class="form-control" rows="3" name="workedon"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Server Shutdown Required</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">No
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Software Installation</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios1" id="optionsRadios3" value="option3" checked>Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios1" id="optionsRadios4" value="option4">No
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Hardware Installation/Replacement</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios2" id="optionsRadios5" value="option5" checked>Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios2" id="optionsRadios6" value="option6">No
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Servers/Equipment Maintanence Activity</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios3" id="optionsRadios7" value="option8" checked>Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios3" id="optionsRadios8" value="option8">No
                                    </label>
                                </div>
                            </div>
                            

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
