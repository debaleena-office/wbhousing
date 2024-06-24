<?php 
global $user, $user_role; 

?>
<div class="sidebar d-flex flex-column p-3" >
    <a href="<?= $base_root.$base_path ?>" class="d-flex flex-column align-items-center mb-5 text-center">
        <img src="<?= $base_root.$base_path ?>sites/all/themes/housingtheme/images/wb-logo.png"  class="img-fluid" alt="e-Allotment of Rental Housing Estate">
        <div class="dashboard-logo">
            <div class="fs-5 fw-semibold lh-1">e-Allotment of Rental Housing Estate</div>
            <small>Housing Department <br/> Government of West Bengal</small>
        </div>
    </a>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="<?= $base_root.$base_path.'dashboard' ?>" class="nav-link active">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z"/>
                </svg>
                Dashboard
            </a>
        </li>

        <?php
            if($user_role == 10 || $user_role == 11 || $user_role == 6){
                if($user_role == 11){
                    $new_status = 'applied';
                    $next_status_app = 'ddo_verified_1';
                    $next_status_rej = 'ddo_rejected_1';

                }else if($user_role == 10){
                    $new_status = 'ddo_verified_1';
                    $next_status_app = 'housing_sup_approved_1';
                    $next_status_rej = 'housing_sup_reject_1';
                }else if($user_role == 6){
                    $new_status = 'allotted';
                    $next_status_app = 'housing_official_approved';
                    $next_status_rej = 'housing_official_reject';
                }
        ?>

        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                </svg>
                New Application  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
            <!--sd start 20-06-2024---->
            <ul class="submenu collapse">
                <li class=""><?= l('New Allotment','view_application_list/'.encrypt_url($new_status).'/'.encrypt_url('new-apply').'/'.'action-list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?>            
                </li>

                <li class=""><?= l('Vertical Shifting','view_application_list/'.encrypt_url($new_status).'/'.encrypt_url('vs').'/'.'action-list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>

                <li class=""><?= l('Category Shifting','view_application_list/'.encrypt_url($new_status).'/'.encrypt_url('cs').'/'.'action-list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            </ul>
            <!--sd end 20-06-2024---->
        </li>
        <?php
            }
            if($user_role == 10 || $user_role == 11){
                if($user_role == 11){//ddo
                    $new_status = 'applicant_acceptance';
                    $next_status_app = 'ddo_verified_2';
                    $next_status_rej = 'ddo_rejected_2';

                }else if($user_role == 10){// housing-supervisor
                    $new_status = 'ddo_verified_2';
                    $next_status_app = 'housing_sup_approved_2';
                    $next_status_rej = 'housing_sup_reject_2';
                }
        ?>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                </svg>
                Allotted Application  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
            <ul class="submenu collapse">
                 <li class=""><?= l('New Allotment','view_application_list/'.encrypt_url($new_status).'/'.encrypt_url('new-apply').'/'.'action-list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?>            
                </li>

                <li class=""><?= l('Vertical Shifting','view_application_list/'.encrypt_url($new_status).'/'.encrypt_url('vs').'/'.'action-list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>

                <li class=""><?= l('Category Shifting','view_application_list/'.encrypt_url($new_status).'/'.encrypt_url('cs').'/'.'action-list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            </ul>
        </li>
        
        <?php        
            }
            if($user_role == 4 || $user_role == 5){
        ?>
        <!--sd start 20-06-2024---->
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                </svg>
                Online Application  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
            <ul class="submenu collapse">
                <li class=""><?= l('New Allotment','new-apply',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Vertical Shifting','vs',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Category Shifting','cs',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                </svg>
                Status
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
            <ul class="submenu collapse">
                <li class=""><?= l('Application Status','application_status',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Wait List Status','waiting_list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                </svg>
                Allotment Details
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
            <ul class="submenu collapse">
                <li class=""><?= l('New Allotment','view_allotment_details',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Vertical Shifting','view_vs_allotment_details',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                 <li class=""><?= l('Category Shifting','view_cs_allotment_details',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            </ul>
        </li>
        <!-- <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                </svg>
                License
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
            <ul class="submenu collapse">

            </ul>
        </li> -->

         <!--sd end 20-06-2024---->            
        <?php
            }
            //sd start 20-06-2024
            if($user_role == 10){
        ?>

            <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                </svg>
                Allotment  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
            <ul class="submenu collapse">
                <li class=""><?= l('Run Allotment','rhe_allotment',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Flat Type Wise Waiting List','flat_type_waiting_list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Vacancy List','vacany_list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Allotment List','allotment_list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            </ul>
        </li>

        <?php
            }
            if($user_role == 6){
        ?>
            <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                </svg>
                Allotment  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
            <ul class="submenu collapse">
                <li class=""><?= l('Approve Allotment','allotment_list_approve',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Flat Type Wise Waiting List','flat_type_waiting_list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Vacancy List','vacany_list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Allotment List','allotment_list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            </ul>
        </li>
        
        <?php
            }if($user_role == 7 || $user_role == 8){
            
        ?>
        <li class="nav-item has-submenu">
        <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
            </svg>
            RHE Data  
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
            </svg>
        </a>
        <ul class="submenu collapse">
            <li class=""><?= l('RHE Wise Flat List','rhe_wise_flat_list',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            <li class=""><?= l('RHE Flat Master','update_flat',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            <li class=""><?= l('Add RHE Block','add_block',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            <?php if($user_role == 7){?>
                <li class=""><?= l('Occupant Data Entry','rhewise_flatlist',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            <?php }else if($user_role == 8){?>
                <li class=""><?= l('Occupant Data Entry','rhewise_occupantlist',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); 
                }
            ?></li>
        </ul>
        </li>

        <?php
            }
            //sd end 20-06-2024
        ?>

        <!-- <li class="nav-item">
            <?= l('Allotment','#',array('html' =>true, 'attributes' => array('class' => array('nav-link')))); ?>
        </li>  -->

        <li class="nav-item">
            <?= l('Logout','/user/logout',array('html' =>true, 'attributes' => array('class' => array('nav-link')))); ?>
        </li>        
    </ul>
    <!-- <br><br><br><br><br><br><br><br><br><br> -->
    <hr/>
    <!-- <button type="button" class="btn btn-outline-light border-dashed"><img src="<?= $base_root.$base_path ?>sites/all/themes/housingtheme/images/complaint_icon.png" /><br/>Complaint Management</button> -->
</div>