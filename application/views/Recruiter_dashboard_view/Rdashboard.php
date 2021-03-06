<?php
$dataPoints = array();
if($rtotal != 0)
{

    $dataPoints = array( 
        array("label"=>"Round 1 Completed", "y"=>($r1/$rtotal)*100),
        array("label"=>"Round 2 Completed", "y"=>($r2/$rtotal)*100),
        array("label"=>"Round 3 Completed", "y"=>($r3/$rtotal)*100),
        array("label"=>"Selected Candidates", "y"=>($rc/$rtotal)*100)
    );

    }
?>


<!doctype html>
<html class="no-js" lang="en">

<head>

<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Progress of Candidates"
	},
    subtitles: [{
		text: "Interview Status"
	}],
	
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>





    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo REC_ASSETS_PATH; ?>/img/logo/tablogo.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/bootstrap.min.css">
    <!-- Font awesome CDN
        ============================================ -->
    <script src="https://kit.fontawesome.com/2f33c29c83.js"></script>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/form/all-type-forms.css">
    <!-- switcher CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-switcher.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Color Css Files
		============================================ -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-one.css" title="color-one" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-two.css" title="color-two" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-three.css" title="color-three" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-four.css" title="color-four" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-five.css" title="color-five" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-six.css" title="color-six" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-seven.css" title="color-seven" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-eight.css" title="color-eight" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-nine.css" title="color-nine" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-ten.css" title="color-ten" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-eleven.css" title="color-eleven" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-twelve.css" title="color-twelve" media="screen" />

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="compnay-logo">
                        <a href="http://www.honeycombsoftwares.com/" class="clogo"><img src="<?php echo COMPANY_LOGO; ?>" alt="Henoycomb Company Logo" class="img-fluid"/></a>
                        <a href="http://www.honeycombsoftwares.com/" class="cname"><img src="<?php echo COMPANY_NAME; ?>" alt="Henoycomb Company Name" class="img-fluid" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <!-- ======================================================================================================= -->
                            <!-- Starting of Account Holder's Details -->
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <span class="admin-name"><?php echo $uname; ?></span>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    <li><a href="<?php echo R_AC_DETAILS_URL; ?>"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                    </li>
                                    <li><a href="<?php echo R_LOGOUT_URL; ?>"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End of Account Holder's Details -->
                            <!-- ======================================================================================================== -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top area end-->
    <!-- ===================================================================================================================================== -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs custom-menu-wrap">
                        <li class="active"><a href="<?php echo R_DASHBOARD_URL; ?>"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li><a href="<?php echo R_CALENDAR_URL; ?>"><i class="fa fa-calendar"></i>Calendar</a>
                        </li>
                        <li><a href="<?php echo R_CANDIDATE_URL; ?>"><i class="fas fa-user-plus"></i>Add Candidate</a>
                        </li>
                        <li><a href="<?php echo R_STATUS_URL; ?>"><i class="fa fa-balance-scale"></i>Status</a>
                        </li>
                        <li><a href="<?php echo R_SCHEDULE_URL; ?>"><i class="fas fa-user-clock"></i>Schedule</a>
                        </li>
                        <li><a href="<?php echo R_SCANDIDATE_URL; ?>"><i class="fas fa-user-check"></i>Candidate</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <!-- Starting of Home tab -->
                        <div id="home" class="tab-pane in active tab-custon-menu-bg animated flipInX">
                             <ul class="main-menu-dropdown">
                                 <li><a href="<?php echo R_DASHBOARD_URL; ?>" class="in active">Dashboard</a>
                                 </li>
                             </ul>
                        </div>
                        <!-- Ending of Home tab -->
                        <!-- ============================================================== -->
                        <!-- Starting of Calendar tab -->
                        <div id="cal" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="<?php echo R_CALENDAR_URL; ?>" class="">Calendar</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Calendar tab -->
                        <!-- ================================================================= -->
                        <!-- Starting of Add Candidate tab -->
                        <div id="add_candidate" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="<?php echo R_CANDIDATE_URL; ?>">Add Candidates</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Add Candidate tab -->
                        <!-- ================================================================= -->
                        <!-- Starting of Status tab -->
                        <div id="status" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="<?php echo R_STATUS_URL; ?>">Status</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Status tab -->
                        <!-- ================================================================ -->
                        <!-- Starting of Schedule Tab -->
                        <div id="schedule" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="<?php echo R_SCHEDULE_URL; ?>">Schedule</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Schedule Tab -->
                        <!-- =============================================================== -->
                        <!-- Starting of Candidate tab -->
                        <div id="selected_candidate" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="<?php echo R_SCANDIDATE_URL; ?>">Candidate</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Candiadte tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- ==================================================================================================================================== -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="mobile-menu">
                      <nav id="dropdown">
                          <ul class="mobile-menu-nav">
                              <li><a data-toggle="collapse" data-target="#home" href="#"><i class="fa fa-home"></i>Home
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow">
                                      </span></a>
                                  <ul id="home" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_DASHBOARD_URL; ?>">Dashboard</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#cal" href="#"><i class="fa fa-calendar"></i>Calendar
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="cal" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_CALENDAR_URL; ?>">Calendar</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#add_candidate" href="#"><i class="fas fa-user-plus"></i>Add Candidate
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="add_candidate" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_CANDIDATE_URL; ?>">Add Candidate</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#status" href="#"><i class="fa fa-balance-scale"></i>Status
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="status" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_STATUS_URL; ?>">Status</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#schedule" href="#"><i class="fas fa-user-clock"></i>Schedule
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="schedule" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_SCHEDULE_URL; ?>">Schedule</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#selected_candidate" href="#"><i class="fas fa-user-check"></i>Selected Candidate
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="selected_candidate" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_SCANDIDATE_URL; ?>">Candidate</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!-- Mobile Menu end -->
    <!-- ==================================================================================================================================== -->
    <!-- Starting of dashboard section-->
    <div class="welcome-adminpro-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
                        <div class="welcome-adminpro-title">
                            <h1>Welcome <?php echo $uname; ?></h1>
                            <p>Last 5 Candidate's Name</p>
                        </div>
                        <div class="adminpro-message-list">
                            <ul class="message-list-menu">
                            <?php if(isset($last_can))
                            {
                                // foreach($last_can as $can)
                                // {
                                //     print_r($can);
                                // }
                                $i = 1;
                                foreach($last_can as $can)
                                {
                                    echo "<li><span class='message-serial message-cl-one'>";
                                    echo $i;
                                    echo "</span><span class='message-info'>";
                                    echo $can['cd_name'];
                                    echo "</span></li>";
                                    $i = $i + 1;
                                };
                            }
                            else
                            {
                                echo "<p>No Candidate Added</p>";
                            } ?> 
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 desplay-n-tablet">
                    <div class="dashone-adminprowrap shadow-reset mg-b-30">
                        <div class="dash-adminpro-project-title">
                        </div>
                        <h3>Candidate's Progress</h3>
                        <p>You have interivew status of Candidates.</p>
                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                        <p>Display candidates interview status of all rounds.</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="project-dashone-phara">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome Project, sale area start-->
  
  <!-- Starting of dashboard section-->
    <!-- Data table area Start-->
    <div class="admin-dashone-data-table-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Projects Data Table</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id">No</th>
                                            <th data-field="name" >Candidate Name</th>
                                            <th data-field="jobtitle" >Job Title</th>
                                            <th data-field="email" >Email</th>
                                            <th data-field="phone" >Phone</th>
                                            <th data-field="interview_process">Interview Process</th>
                                            <th data-field="task" >Interview Round Status</th>
                                            <th data-field="selec_job">Selected for Job</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($can_details))
                                        {
                                            $i =1;

                                           foreach ($can_details->result_array() as $row)
                                           {
                                            print "<tr><td></td>";
                                            print "<td>";
                                            echo $i;
                                            $i = $i +1;
                                            print "</td>";
                                            print "<td>";
                                            echo $row['cd_name'];
                                            print "</td>";
                                            print "<td>";
                                            echo $row['cd_job_title'];
                                            print "</td>";
                                            print "<td>";
                                            echo $row['cd_email'];
                                            print "</td>";
                                            print "<td>";
                                            echo $row['cd_phone'];
                                            print "</td>";
                                            if($row['ce_interview_round'] == 0)
                                            {
                                              echo '<td class="datatable-ct"><span class="pie">0/4</span>
                                              </td>';
                                              echo '<td>Not Started</td>';
                                              echo '<td class="datatable-ct"><i class="fa fa-times"></i></td>';
                                            }
                                            else if($row['ce_interview_round'] == 0.25)
                                            {
                                              echo '<td class="datatable-ct"><span class="pie">1/4</span>
                                              </td>';
                                              echo '<td>Round 1 Completed</td>';
                                              echo '<td class="datatable-ct"><i class="fa fa-times"></i></td>';
                                            }
                                            else if($row['ce_interview_round'] == 0.5)
                                            {
                                              echo '<td class="datatable-ct"><span class="pie">2/4</span>
                                              </td>';
                                              echo '<td>Round 2 Completed</td>';
                                              echo '<td class="datatable-ct"><i class="fa fa-times"></i></td>';
                                            }
                                            if($row['ce_interview_round'] == 0.75)
                                            {
                                              echo '<td class="datatable-ct"><span class="pie">3/4</span>
                                              </td>';
                                              echo '<td>Round 3 Completed</td>';
                                              echo '<td class="datatable-ct"><i class="fa fa-times"></i></td>';
                                            }
                                            if($row['ce_interview_round'] == 1)
                                            {
                                              echo '<td class="datatable-ct"><span class="pie">4/4</span>
                                              </td>';
                                              echo '<td>Selected for Job</td>';
                                              echo '<td class="datatable-ct"><i class="fa fa-check"></i></td>';
                                            }

                                            print "</tr>";
                                           }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data table area End-->
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2019 Henoycomb Software Pvt. Ltd. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- Color Switcher -->
    <div class="ec-colorswitcher">
        <a class="ec-handle" href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
        <h3>Style Switcher</h3>
        <div class="ec-switcherarea">
            <div class="base-color">
                <h6>Background Color</h6>
                <ul class="ec-switcher">
                    <li>
                        <a href="#" class="cs-color-1 styleswitch" data-rel="color-one"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-2 styleswitch" data-rel="color-two"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-3 styleswitch" data-rel="color-three"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-4 styleswitch" data-rel="color-four"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-5 styleswitch" data-rel="color-five"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-6 styleswitch" data-rel="color-six"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-7 styleswitch" data-rel="color-seven"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-8 styleswitch" data-rel="color-eight"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-9 styleswitch" data-rel="color-nine"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-10 styleswitch" data-rel="color-ten"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-11 styleswitch" data-rel="color-eleven"></a>
                    </li>
                    <li>
                        <a href="#" class="cs-color-12 styleswitch" data-rel="color-twelve"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Color Switcher end -->
    <!-- =================================================================================================================================== -->
    <!-- jquery
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/peity/jquery.peity.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/Chart.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/raphael.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/jquery.mapael.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/france_departments.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/world_countries.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/usa_states.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/tableExport.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/data-table-active.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-table-export.js"></script>
    <!-- switcher JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/switcher/styleswitch.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/switcher/switch-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/main.js"></script>
</body>
</html>
