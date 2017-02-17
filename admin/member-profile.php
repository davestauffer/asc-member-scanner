<?php
/**
 * Created by PhpStorm.
 * User: davestauffer
 * Date: 2/16/17
 * Time: 4:52 PM
 */

include_once "templates/doctype.html";
include_once "templates/member-profile-head.html";
?>

<body class="page-container-bg-solid">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <?php
                        include_once "templates/header.html";
                    ?>
                </div>
            </div>
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <div class="container">
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class="page-content-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    include_once "templates/member-profile-sidebar.html";
                                ?>
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Member Account</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1_1" data-toggle="tab">Member Info</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_2" data-toggle="tab">Change Picture</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <?php
                                                            include_once "templates/member-personal-info-tab.html";
                                                            include_once "templates/member-change-avatar-tab.html";
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light bordered">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption">
                                                        <i class=" icon-social-twitter font-dark hide"></i>
                                                        <span class="caption-subject font-dark bold uppercase">Recent Visits</span>
                                                    </div>
                                                    <div class="actions">
                                                        <span class="mt-action-buttons"> Add Visit</span>
                                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                            <i class="icon-plus"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab_actions_pending">
                                                            <?php
                                                                include_once "templates/member-recent-visits.html";
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END QUICK ACTIONS -->
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
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
                <?php
                    include_once "templates/footer.html";
                ?>
            </div>
        </div>
        </div>
        <?php
        include_once "templates/member-scripts-end-page.html";
        ?>

</body>

</html>

