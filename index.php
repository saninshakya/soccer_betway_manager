<?php
session_start();
require_once("config.php");
if (!empty($_REQUEST['page']))
    $page = $_GET['page'];
else {
    $page = false;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Soccer Betway Management</title>
        <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="css/formValidation.css"/>
        
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!--datepicker-->
 
        <link rel="stylesheet" href="css/datepicker.css">
        <script src="js/bootstrap-datepicker.js"></script>
        
        <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
        <!-- For login and signin form -->
 
        <link rel="shortcut icon" href="images/favicon.png"/>
        <script type="text/javascript" src="js/formValidation.js"></script>
        <script type="text/javascript" src="js/framework/bootstrap.js"></script>
        <script type="text/javascript">$(function () { $("[data-toggle = 'tooltip']").tooltip(); });</script>

    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php">
                                <img alt="Soccer Betway Management" src="images/logo.png"> <div class="site-name">Soccer Betway Management</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="user-info">
                            <?php
                            if (isset($_SESSION['sbm_user']))
                                echo("Welcome " . $_SESSION['sbm_user']);
                            else
                                echo("Welcome Anonymous");
                            echo("&nbsp;&nbsp;&nbsp;&nbsp;");
                            
                            if ((isset($_SESSION['sbm_user'])) && (isset($_SESSION['sbm_user_id']))) {
                                if ($_SESSION['chk'] == true) {
                                    echo("<a href=\"index.php?page=logout\"><button type=\"button\" class=\"btn btn-default navbar-btn\">Logout</button></a>");
                                }
                            } else {
                                echo("<a href=\"index.php?page=login\"><button type=\"button\" class=\"btn btn-default navbar-btn\">Sign in</button></a>");
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="container-fluid">
            <?php
            if (isset($_SESSION['success_message'])) { //If message is set then display the message
                echo("<div class=\"success_message\">");
                echo($_SESSION['success_message']);
                unset($_SESSION['success_message']);
                echo("</div>");
            }

            if (isset($_SESSION['error_message'])) { //If message is set then display the message
                echo("<div class=\"error_message\">");
                echo($_SESSION['error_message']);
                unset($_SESSION['error_message']);
                echo("</div>");
            }
            ?>
        </div><!--end container-->    
        <?php
        include("includes/circuit.inc.php");
        ?>           
        
    </body>
</html>