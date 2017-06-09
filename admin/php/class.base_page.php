<?php

namespace ArchStreet;

/**
 * Description of newPHPClass
 *
 * @author c_Reg_c_Lark
 */
class BasePage {

    public static function getPage($body) {

        //$str = NULL;
        ?><!DOCTYPE html>
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
                <meta charset="utf-8">
                <title>Arch Street Attendance System</title>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="Home page of the arch street attendance system">
                <meta name="author" content="">
                <!-- BEGIN GLOBAL MANDATORY STYLES -->
                <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css"><style type="text/css"></style>
                <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
                <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
                <!-- END GLOBAL MANDATORY STYLES -->
                <!-- BEGIN PAGE LEVEL PLUGINS -->
                <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css">
                <link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css">
                <!-- END PAGE LEVEL PLUGINS -->
                <!-- BEGIN THEME GLOBAL STYLES -->
                <link id="style_components" href="assets/global/css/components.min.css" rel="stylesheet" type="text/css">
                <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css">
                <!-- END THEME GLOBAL STYLES -->
                <!-- BEGIN PAGE LEVEL STYLES -->
                <link href="assets/pages/css/search.min.css" rel="stylesheet" type="text/css">
                <!-- END PAGE LEVEL STYLES -->
                <!-- BEGIN THEME LAYOUT STYLES -->
                <link href="assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css">
                <link id="style_color" href="assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css">
                <link href="assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css">
                <!-- END THEME LAYOUT STYLES -->
                <link href="favicon.ico" rel="shortcut icon"> <style type="text/css">.fancybox-margin{margin-right:14px;}</style></head>
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
                                                <img class="logo-default" alt="logo" src="assets/layouts/layout3/img/asc-logo-small.jpg">
                                            </a>
                                        </div>
                                        <!-- END LOGO -->
                                        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                        <a class="menu-toggler" href="javascript:;"></a>
                                        <!-- END RESPONSIVE MENU TOGGLER -->
                                        <!-- BEGIN TOP NAVIGATION MENU -->
                                        <div class="top-menu">
                                            <ul class="nav navbar-nav pull-right">
                                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                                <li class="dropdown dropdown-user dropdown-dark">
                                                    <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown" data-close-others="true" data-hover="dropdown">
                                                        <i class="icon-user"></i>
                                                        <span class="username username-hide-mobile">&lt;% UserName %&gt;</span>
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
                                                <li class="menu-dropdown classic-menu-dropdown " aria-haspopup="true">
                                                    <a href="index.html"> Dashboard
                                                        <span class="arrow"></span>
                                                    </a>
                                                </li>
                                                <li class="menu-dropdown classic-menu-dropdown " aria-haspopup="true">
                                                    <a href="daily-report.html"> Daily Report
                                                        <span class="arrow"></span>
                                                    </a>
                                                </li>
                                                <li class="menu-dropdown classic-menu-dropdown " aria-haspopup="true">
                                                    <a href="monthly-report.html"> Monthly Report
                                                        <span class="arrow"></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- END MEGA MENU -->`
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
                                                <?php echo $body; ?>
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
                                <div class="container"> 2017 © Arch Street Center &nbsp;|&nbsp;
                                    Metronic Theme By
                                    <a href="http://keenthemes.com" target="_blank">Keenthemes</a>
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
            </body>

        </html>
        <?php
    }

}
