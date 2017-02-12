<?php

namespace ArchStreet;

/**
 * Description of newPHPClass
 *
 * @author c_Reg_c_Lark
 */
abstract class BasePage {

    protected $pageContainer = NULL;

    protected function getPageContainer() {


        ob_start();
        ?>
        <!DOCTYPE html>
        <!-- 
        Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
        Version: 4.7.1
        Author: KeenThemes
        Website: http://www.keenthemes.com/
        Contact: support@keenthemes.com
        Follow: www.twitter.com/keenthemes
        Dribbble: www.dribbble.com/keenthemes
        Like: www.facebook.com/keenthemes
        Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
        Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
        License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
        -->
        <!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
        <!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
        <!--[if !IE]><!-->
        <html lang="en">
            <!--<![endif]-->
            <!-- BEGIN HEAD -->

            <head>
                <meta charset="utf-8" />
                <title>Arch Street Attendance System</title>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta content="width=device-width, initial-scale=1" name="viewport" />
                <meta content="Home page of the arch street attendance system" name="description" />
                <meta content="" name="author" />
                <!-- BEGIN GLOBAL MANDATORY STYLES -->
                <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
                <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
                <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
                <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
                <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
                <!-- END GLOBAL MANDATORY STYLES -->
                <!-- BEGIN PAGE LEVEL PLUGINS -->
                <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
                <link href="../assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
                <!-- END PAGE LEVEL PLUGINS -->
                <!-- BEGIN THEME GLOBAL STYLES -->
                <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
                <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
                <!-- END THEME GLOBAL STYLES -->
                <!-- BEGIN PAGE LEVEL STYLES -->
                <link href="../assets/pages/css/search.min.css" rel="stylesheet" type="text/css" />
                <!-- END PAGE LEVEL STYLES -->
                <!-- BEGIN THEME LAYOUT STYLES -->
                <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
                <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
                <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
                <!-- END THEME LAYOUT STYLES -->
                <link rel="shortcut icon" href="favicon.ico" /> </head>
            <!-- END HEAD -->

            <body class="page-container-bg-solid">
                <div class="page-wrapper">
                    <div class="page-wrapper-row">
                        <div class="page-wrapper-top">
                            <!-- BEGIN HEADER -->
                            <div class="page-header">
                                <!-- BEGIN HEADER TOP -->
                                <div class="page-header-top">
                                    <div class="container">
                                        <!-- BEGIN LOGO -->
                                        <div class="page-logo">
                                            <a href="index.html">
                                                <img src="../assets/layouts/layout3/img/asc-logo-small.jpg" alt="logo" class="logo-default">
                                            </a>
                                        </div>
                                        <!-- END LOGO -->
                                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                        <a href="javascript:;" class="menu-toggler"></a>
                                        <!-- END RESPONSIVE MENU TOGGLER -->
                                        <!-- BEGIN TOP NAVIGATION MENU -->
                                        <div class="top-menu">
                                            <ul class="nav navbar-nav pull-right">
                                                <!-- BEGIN NOTIFICATION DROPDOWN -->
                                                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="icon-bell"></i>
                                                        <span class="badge badge-success"> 7 </span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="external">
                                                            <h3>
                                                                <span class="bold">12 pending</span> notifications</h3>
                                                            <a href="#">view all</a>
                                                        </li>
                                                        <li>
                                                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="time">just now</span>
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-success">
                                                                                <i class="fa fa-plus"></i>
                                                                            </span> New user registered. </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="time">3 mins</span>
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-danger">
                                                                                <i class="fa fa-bolt"></i>
                                                                            </span> Server #12 overloaded. </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="time">10 mins</span>
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-warning">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </span> Server #2 not responding. </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="time">14 hrs</span>
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </span> Application error. </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="time">2 days</span>
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-danger">
                                                                                <i class="fa fa-bolt"></i>
                                                                            </span> Database overloaded 68%. </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="time">3 days</span>
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-danger">
                                                                                <i class="fa fa-bolt"></i>
                                                                            </span> A user IP blocked. </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="time">4 days</span>
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-warning">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </span> Storage Server #4 not responding dfdfdfd. </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="time">5 days</span>
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </span> System Error. </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="time">9 days</span>
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-danger">
                                                                                <i class="fa fa-bolt"></i>
                                                                            </span> Storage server failed. </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- END NOTIFICATION DROPDOWN -->
                                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                                <li class="dropdown dropdown-user dropdown-dark">
                                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <img alt="" class="img-circle" src="../assets/layouts/layout3/img/avatar9.jpg">
                                                        <span class="username username-hide-mobile">Nick</span>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-default">
                                                        <li>
                                                            <a href="page_user_profile_1.html">
                                                                <i class="icon-user"></i> My Profile </a>
                                                        </li>
                                                        <li>
                                                            <a href="app_todo_2.html">
                                                                <i class="icon-rocket"></i> My Tasks
                                                                <span class="badge badge-success"> 7 </span>
                                                            </a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="page_user_lock_1.html">
                                                                <i class="icon-lock"></i> Lock Screen </a>
                                                        </li>
                                                        <li>
                                                            <a href="page_user_login_1.html">
                                                                <i class="icon-key"></i> Log Out </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- END USER LOGIN DROPDOWN -->
                                            </ul>
                                        </div>
                                        <!-- END TOP NAVIGATION MENU -->
                                    </div>
                                </div>
                                <!-- END HEADER TOP -->
                                <!-- BEGIN HEADER MENU -->
                                <div class="page-header-menu">
                                    <div class="container">
                                        <!-- BEGIN MEGA MENU -->
                                        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                        <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                        <div class="hor-menu  ">
                                            <ul class="nav navbar-nav">
                                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                                    <a href="index.html"> Dashboard
                                                        <span class="arrow"></span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                                    <a href="daily-report.html"> Daily Report
                                                        <span class="arrow"></span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                                    <a href="monthly-report.html"> Monthly Report
                                                        <span class="arrow"></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- END MEGA MENU -->
                                    </div>
                                </div>
                                <!-- END HEADER MENU -->
                            </div>
                            <!-- END HEADER -->
                        </div>
                    </div>
                    <div class="page-wrapper-row full-height">
                        <div class="page-wrapper-middle">
                            <!-- BEGIN CONTAINER -->
                            <div class="page-container">
                                <!-- BEGIN CONTENT -->
                                <div class="page-content-wrapper">
                                    <!-- BEGIN CONTENT BODY -->
                                    <!-- BEGIN PAGE CONTENT BODY -->
                                    <div class="page-content">
                                        <div class="container">
                                            <!-- BEGIN PAGE CONTENT INNER -->
                                            <div class="page-content-inner">
                                                <div class="row widget-row">
                                                    <!-- BEGIN RECENT USER -->
                                                    <div class="col-md-4">
                                                        <div class="portlet light bordered">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="icon-bubble font-dark hide"></i>
                                                                    <span class="caption-subject font-hide bold uppercase">Last Scanned Member</span>
                                                                </div>

                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!--begin: widget 1-1 -->
                                                                        <div class="mt-widget-1">
                                                                            <div class="mt-icon">
                                                                                <a href="#">
                                                                                    <i class="icon-user"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="mt-img">
                                                                                <img src="../assets/pages/media/users/avatar80_8.jpg"> </div>
                                                                            <div class="mt-body">
                                                                                <h3 class="mt-username">Diana Ellison</h3>
                                                                                <p class="mt-user-title"> Status: checked-in </p>
                                                                            </div>
                                                                        </div>
                                                                        <!--end: widget 1-1 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END RECENT USER -->
                                                    <!-- BEING QUICK ACTIONS -->
                                                    <div class="col-md-8">
                                                        <div class="portlet light bordered">
                                                            <div class="portlet-title tabbable-line">
                                                                <div class="caption">
                                                                    <i class=" icon-social-twitter font-dark hide"></i>
                                                                    <span class="caption-subject font-dark bold uppercase">Recent Members</span>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="tab_actions_pending">
                                                                        <!-- BEGIN: Actions -->
                                                                        <div class="mt-actions">
                                                                            <div class="mt-action">
                                                                                <div class="mt-action-img">
                                                                                    <img src="../assets/pages/media/users/avatar10.jpg"> </div>
                                                                                <div class="mt-action-body">
                                                                                    <div class="mt-action-row">
                                                                                        <div class="mt-action-info ">
                                                                                            <div class="mt-action-icon ">
                                                                                                <i class="icon-magnet"></i>
                                                                                            </div>
                                                                                            <div class="mt-action-details ">
                                                                                                <span class="mt-action-author">Natasha Kim</span>
                                                                                                <p class="mt-action-desc">Status: Checked-In</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mt-action-datetime ">
                                                                                            <span class="mt-action-dot bg-green"></span>
                                                                                            <span class="mt-action-date">jun 3</span>
                                                                                            <span class="mt=action-time">9:30 AM</span>
                                                                                        </div>
                                                                                        <div class="mt-action-buttons ">
                                                                                            <div class="btn-group btn-group-circle">
                                                                                                <button type="button" class="btn btn-outline green btn-sm">Edit</button>
                                                                                                <button type="button" class="btn btn-outline red btn-sm">Check-Out</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mt-action">
                                                                                <div class="mt-action-img">
                                                                                    <img src="../assets/pages/media/users/avatar3.jpg"> </div>
                                                                                <div class="mt-action-body">
                                                                                    <div class="mt-action-row">
                                                                                        <div class="mt-action-info ">
                                                                                            <div class="mt-action-icon ">
                                                                                                <i class=" icon-bubbles"></i>
                                                                                            </div>
                                                                                            <div class="mt-action-details ">
                                                                                                <span class="mt-action-author">Gavin Bond</span>
                                                                                                <p class="mt-action-desc">Status: Checked-Out</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mt-action-datetime ">
                                                                                            <span class="mt-action-dot bg-red"></span>
                                                                                            <span class="mt-action-date">jun 3</span>
                                                                                            <span class="mt=action-time">10:30 AM</span>
                                                                                        </div>
                                                                                        <div class="mt-action-buttons ">
                                                                                            <div class="btn-group btn-group-circle">
                                                                                                <button type="button" class="btn btn-outline green btn-sm">Check-In</button>
                                                                                                <button type="button" class="btn btn-outline red btn-sm">Edit</button>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mt-action">
                                                                                <div class="mt-action-img">
                                                                                    <img src="../assets/pages/media/users/avatar2.jpg"> </div>
                                                                                <div class="mt-action-body">
                                                                                    <div class="mt-action-row">
                                                                                        <div class="mt-action-info ">
                                                                                            <div class="mt-action-icon ">
                                                                                                <i class="icon-call-in"></i>
                                                                                            </div>
                                                                                            <div class="mt-action-details ">
                                                                                                <span class="mt-action-author">Diana Berri</span>
                                                                                                <p class="mt-action-desc">Status: Checked-In</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mt-action-datetime ">
                                                                                            <span class="mt-action-dot bg-green"></span>
                                                                                            <span class="mt-action-date">jun 3</span>
                                                                                            <span class="mt=action-time">11:30 AM</span>
                                                                                        </div>
                                                                                        <div class="mt-action-buttons ">
                                                                                            <div class="btn-group btn-group-circle">
                                                                                                <button type="button" class="btn btn-outline green btn-sm">Edit</button>
                                                                                                <button type="button" class="btn btn-outline red btn-sm">Check-Out</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mt-action">
                                                                                <div class="mt-action-img">
                                                                                    <img src="../assets/pages/media/users/avatar7.jpg"> </div>
                                                                                <div class="mt-action-body">
                                                                                    <div class="mt-action-row">
                                                                                        <div class="mt-action-info ">
                                                                                            <div class="mt-action-icon ">
                                                                                                <i class=" icon-bell"></i>
                                                                                            </div>
                                                                                            <div class="mt-action-details ">
                                                                                                <span class="mt-action-author">John Clark</span>
                                                                                                <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mt-action-datetime ">
                                                                                            <span class="mt-action-date">3 jun</span>
                                                                                            <span class="mt-action-dot bg-red"></span>
                                                                                            <span class="mt=action-time">9:30-13:00</span>
                                                                                        </div>
                                                                                        <div class="mt-action-buttons ">
                                                                                            <div class="btn-group btn-group-circle">
                                                                                                <button type="button" class="btn btn-outline green btn-sm">Check-In</button>
                                                                                                <button type="button" class="btn btn-outline red btn-sm">Check-Out</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-action">
                                                                                    <div class="mt-action-img">
                                                                                        <img src="../assets/pages/media/users/avatar8.jpg"> </div>
                                                                                    <div class="mt-action-body">
                                                                                        <div class="mt-action-row">
                                                                                            <div class="mt-action-info ">
                                                                                                <div class="mt-action-icon ">
                                                                                                    <i class="icon-magnet"></i>
                                                                                                </div>
                                                                                                <div class="mt-action-details ">
                                                                                                    <span class="mt-action-author">Donna Clarkson </span>
                                                                                                    <p class="mt-action-desc">Simply dummy text of the printing</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="mt-action-datetime ">
                                                                                                <span class="mt-action-date">3 jun</span>
                                                                                                <span class="mt-action-dot bg-green"></span>
                                                                                                <span class="mt=action-time">9:30-13:00</span>
                                                                                            </div>
                                                                                            <div class="mt-action-buttons ">
                                                                                                <div class="btn-group btn-group-circle">
                                                                                                    <button type="button" class="btn btn-outline green btn-sm">Check-In</button>
                                                                                                    <button type="button" class="btn btn-outline red btn-sm">Check-Out</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-action">
                                                                                    <div class="mt-action-img">
                                                                                        <img src="../assets/pages/media/users/avatar9.jpg"> </div>
                                                                                    <div class="mt-action-body">
                                                                                        <div class="mt-action-row">
                                                                                            <div class="mt-action-info ">
                                                                                                <div class="mt-action-icon ">
                                                                                                    <i class="icon-magnet"></i>
                                                                                                </div>
                                                                                                <div class="mt-action-details ">
                                                                                                    <span class="mt-action-author">Tom Larson</span>
                                                                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy text</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="mt-action-datetime ">
                                                                                                <span class="mt-action-date">3 jun</span>
                                                                                                <span class="mt-action-dot bg-green"></span>
                                                                                                <span class="mt=action-time">9:30-13:00</span>
                                                                                            </div>
                                                                                            <div class="mt-action-buttons ">
                                                                                                <div class="btn-group btn-group-circle">
                                                                                                    <button type="button" class="btn btn-outline green btn-sm">Check-In</button>
                                                                                                    <button type="button" class="btn btn-outline red btn-sm">Check-Out</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- END: Actions -->
                                                                        </div>
                                                                        <div class="tab-pane" id="tab_actions_completed">
                                                                            <!-- BEGIN:Completed-->
                                                                            <div class="mt-actions">
                                                                                <div class="mt-action">
                                                                                    <div class="mt-action-img">
                                                                                        <img src="../assets/pages/media/users/avatar1.jpg"> </div>
                                                                                    <div class="mt-action-body">
                                                                                        <div class="mt-action-row">
                                                                                            <div class="mt-action-info ">
                                                                                                <div class="mt-action-icon ">
                                                                                                    <i class="icon-action-redo"></i>
                                                                                                </div>
                                                                                                <div class="mt-action-details ">
                                                                                                    <span class="mt-action-author">Frank Cameron</span>
                                                                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="mt-action-datetime ">
                                                                                                <span class="mt-action-date">3 jun</span>
                                                                                                <span class="mt-action-dot bg-red"></span>
                                                                                                <span class="mt=action-time">9:30-13:00</span>
                                                                                            </div>
                                                                                            <div class="mt-action-buttons ">
                                                                                                <div class="btn-group btn-group-circle">
                                                                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-action">
                                                                                    <div class="mt-action-img">
                                                                                        <img src="../assets/pages/media/users/avatar8.jpg"> </div>
                                                                                    <div class="mt-action-body">
                                                                                        <div class="mt-action-row">
                                                                                            <div class="mt-action-info ">
                                                                                                <div class="mt-action-icon ">
                                                                                                    <i class="icon-cup"></i>
                                                                                                </div>
                                                                                                <div class="mt-action-details ">
                                                                                                    <span class="mt-action-author">Ella Davidson </span>
                                                                                                    <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="mt-action-datetime ">
                                                                                                <span class="mt-action-date">3 jun</span>
                                                                                                <span class="mt-action-dot bg-green"></span>
                                                                                                <span class="mt=action-time">9:30-13:00</span>
                                                                                            </div>
                                                                                            <div class="mt-action-buttons">
                                                                                                <div class="btn-group btn-group-circle">
                                                                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-action">
                                                                                    <div class="mt-action-img">
                                                                                        <img src="../assets/pages/media/users/avatar5.jpg"> </div>
                                                                                    <div class="mt-action-body">
                                                                                        <div class="mt-action-row">
                                                                                            <div class="mt-action-info ">
                                                                                                <div class="mt-action-icon ">
                                                                                                    <i class=" icon-graduation"></i>
                                                                                                </div>
                                                                                                <div class="mt-action-details ">
                                                                                                    <span class="mt-action-author">Jason Dickens </span>
                                                                                                    <p class="mt-action-desc">Dummy text of the printing and typesetting industry</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="mt-action-datetime ">
                                                                                                <span class="mt-action-date">3 jun</span>
                                                                                                <span class="mt-action-dot bg-red"></span>
                                                                                                <span class="mt=action-time">9:30-13:00</span>
                                                                                            </div>
                                                                                            <div class="mt-action-buttons ">
                                                                                                <div class="btn-group btn-group-circle">
                                                                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-action">
                                                                                    <div class="mt-action-img">
                                                                                        <img src="../assets/pages/media/users/avatar2.jpg"> </div>
                                                                                    <div class="mt-action-body">
                                                                                        <div class="mt-action-row">
                                                                                            <div class="mt-action-info ">
                                                                                                <div class="mt-action-icon ">
                                                                                                    <i class="icon-badge"></i>
                                                                                                </div>
                                                                                                <div class="mt-action-details ">
                                                                                                    <span class="mt-action-author">Jan Kim</span>
                                                                                                    <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="mt-action-datetime ">
                                                                                                <span class="mt-action-date">3 jun</span>
                                                                                                <span class="mt-action-dot bg-green"></span>
                                                                                                <span class="mt=action-time">9:30-13:00</span>
                                                                                            </div>
                                                                                            <div class="mt-action-buttons ">
                                                                                                <div class="btn-group btn-group-circle">
                                                                                                    <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                                                    <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- END: Completed -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END QUICK ACTIONS -->
                                                    </div>
                                                    <!-- BEGIN SEARCH AREA -->
                                                    <div class="search-page search-content-4">
                                                        <div class="search-bar bordered">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Search for...">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn green-soft uppercase bold" type="button">Search</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 extra-buttons">
                                                                    <button class="btn grey-steel uppercase bold" type="button">Reset Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="search-table table-responsive">
                                                            <table class="table table-bordered table-striped table-condensed">
                                                                <thead class="bg-blue">
                                                                    <tr>
                                                                        <th>
                                                                            <a href="javascript:;">Picture</a>
                                                                        </th>
                                                                        <th>
                                                                            <a href="javascript:;">Name/Status</a>
                                                                        </th>
                                                                        <th>
                                                                            <a href="javascript:;">Date/Time</a>
                                                                        </th>
                                                                        <th>
                                                                            <a href="javascript:;">Edit</a>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="table-status">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-arrow-right font-blue"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="table-title">
                                                                            <h3>
                                                                                <a href="javascript:;">Metronic Admin Reborn</a>
                                                                            </h3>
                                                                            <p>Last Activity:
                                                                                <a href="javascript:;">Bob Robson</a> -
                                                                                <span class="font-grey-cascade">25 mins ago</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                                                                        <td class="table-download">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-doc font-green-soft"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-status">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-arrow-right font-blue"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="table-title">
                                                                            <h3>
                                                                                <a href="javascript:;">Lorem ipsum dolor</a>
                                                                            </h3>
                                                                            <p>Last Activity:
                                                                                <a href="javascript:;">Bob Robson</a> -
                                                                                <span class="font-grey-cascade">25 mins ago</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                                                                        <td class="table-download">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-doc font-green-soft"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-status">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-check font-grey"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="table-title">
                                                                            <h3>
                                                                                <a href="javascript:;">Typi non habent</a>
                                                                            </h3>
                                                                            <p>Last Activity:
                                                                                <a href="javascript:;">Bob Robson</a> -
                                                                                <span class="font-grey-cascade">25 mins ago</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                                                                        <td class="table-download">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-doc font-green-soft"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-status">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-arrow-right font-blue"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="table-title">
                                                                            <h3>
                                                                                <a href="javascript:;">Metronic Admin Search Result</a>
                                                                            </h3>
                                                                            <p>Last Activity:
                                                                                <a href="javascript:;">Bob Robson</a> -
                                                                                <span class="font-grey-cascade">25 mins ago</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                                                                        <td class="table-download">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-doc font-green-soft"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-status">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-arrow-right font-blue"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="table-title">
                                                                            <h3>
                                                                                <a href="javascript:;">Mirum est notare</a>
                                                                            </h3>
                                                                            <p>Last Activity:
                                                                                <a href="javascript:;">Bob Robson</a> -
                                                                                <span class="font-grey-cascade">25 mins ago</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                                                                        <td class="table-download">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-doc font-green-soft"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-status">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-check font-grey"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="table-title">
                                                                            <h3>
                                                                                <a href="javascript:;">Metronic Admin Reborn</a>
                                                                            </h3>
                                                                            <p>Last Activity:
                                                                                <a href="javascript:;">Bob Robson</a> -
                                                                                <span class="font-grey-cascade">25 mins ago</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                                                                        <td class="table-download">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-doc font-green-soft"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-status">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-check font-grey"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="table-title">
                                                                            <h3>
                                                                                <a href="javascript:;">Metronic Admin Reborn</a>
                                                                            </h3>
                                                                            <p>Last Activity:
                                                                                <a href="javascript:;">Bob Robson</a> -
                                                                                <span class="font-grey-cascade">25 mins ago</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                                                                        <td class="table-download">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-doc font-green-soft"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-status">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-arrow-right font-blue"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="table-title">
                                                                            <h3>
                                                                                <a href="javascript:;">Metronic Admin Reborn Progress</a>
                                                                            </h3>
                                                                            <p>Last Activity:
                                                                                <a href="javascript:;">Bob Robson</a> -
                                                                                <span class="font-grey-cascade">25 mins ago</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                                                                        <td class="table-download">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-doc font-green-soft"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-status">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-arrow-right font-blue"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td class="table-title">
                                                                            <h3>
                                                                                <a href="javascript:;">Metronic Search Page 5</a>
                                                                            </h3>
                                                                            <p>Last Activity:
                                                                                <a href="javascript:;">Bob Robson</a> -
                                                                                <span class="font-grey-cascade">25 mins ago</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="table-desc"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy sead euismod dolore tincidunt ut laoreet dolore dolor sit amet </td>
                                                                        <td class="table-download">
                                                                            <a href="javascript:;">
                                                                                <i class="icon-doc font-green-soft"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="search-pagination pagination-rounded">
                                                            <ul class="pagination">
                                                                <li class="page-active">
                                                                    <a href="javascript:;"> 1 </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;"> 2 </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;"> 3 </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;"> 4 </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END SEARCH AREA -->
                                                </div>
                                                <!-- END PAGE CONTENT INNER -->
                                            </div>
                                        </div>
                                        <!-- END PAGE CONTENT BODY -->
                                        <!-- END CONTENT BODY -->
                                    </div>
                                    <!-- END CONTENT -->
                                </div>
                                <!-- END CONTAINER -->
                            </div>
                        </div>
                        <div class="page-wrapper-row">
                            <div class="page-wrapper-bottom">
                                <!-- BEGIN FOOTER -->

                                <!-- BEGIN INNER FOOTER -->
                                <div class="page-footer">
                                    <div class="container"> 2016 &copy; Metronic Theme By
                                        <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                                        <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                                    </div>
                                </div>
                                <div class="scroll-to-top">
                                    <i class="icon-arrow-up"></i>
                                </div>
                                <!-- END INNER FOOTER -->
                                <!-- END FOOTER -->
                            </div>
                        </div>
                    </div>

                    <!--[if lt IE 9]>
            <script src="../assets/global/plugins/respond.min.js"></script>
            <script src="../assets/global/plugins/excanvas.min.js"></script> 
            <script src="../assets/global/plugins/ie8.fix.min.js"></script> 
            <![endif]-->
                    <!-- BEGIN CORE PLUGINS -->
                    <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                    <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                    <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                    <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                    <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                    <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                    <!-- END CORE PLUGINS -->
                    <!-- BEGIN PAGE LEVEL PLUGINS -->
                    <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
                    <script src="../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
                    <!-- END PAGE LEVEL PLUGINS -->
                    <!-- BEGIN THEME GLOBAL SCRIPTS -->
                    <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
                    <!-- END THEME GLOBAL SCRIPTS -->
                    <!-- BEGIN PAGE LEVEL SCRIPTS -->
                    <script src="../assets/pages/scripts/search.min.js" type="text/javascript"></script>
                    <!-- END PAGE LEVEL SCRIPTS -->
                    <!-- BEGIN THEME LAYOUT SCRIPTS -->
                    <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
                    <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
                    <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
                    <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
                    <!-- END THEME LAYOUT SCRIPTS -->
            </body>

        </html>
        <?php
        $str = ob_get_contents();
        ob_end_clean();
        return $strF;
    }

    public function getPage() {
        
    }

}
