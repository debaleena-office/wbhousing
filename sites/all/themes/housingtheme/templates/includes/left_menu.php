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
            <a href="dashboard" class="nav-link active">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z"/>
                </svg>
                Dashboard
            </a>
        </li>

        <?php
            if($user_role == 10 || $user_role == 11 || $user_role == 6){
        ?>

        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755"/>
                </svg>
                All Application  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down float-end mt-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
            <ul class="submenu collapse">
                <li class=""><?= l('New Allotment','#',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Vertical Shifting','#',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Category Shifting','#',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            </ul>
        </li>
        <?php
            }
            if($user_role == 10 || $user_role == 11 || $user_role == 6){
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
                <li class=""><?= l('New Allotment','#',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Vertical Shifting','#',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
                <li class=""><?= l('Category Shifting','#',array('html'=>true, 'attributes'=>array('class'=>array('nav-link')))); ?></li>
            </ul>
        </li>
        
        <?php        
            }
        ?>


        

        <!-- <li class="nav-item">
            <?= l('Allotment','#',array('html' =>true, 'attributes' => array('class' => 'nav-link'))); ?>
        </li>  -->

        <li class="nav-item">
            <?= l('Logout','/user/logout',array('html' =>true, 'attributes' => array('class' => 'nav-link'))); ?>
        </li>        
    </ul>
    <hr/>
    <button type="button" class="btn btn-outline-light border-dashed"><img src="<?= $base_root.$base_path ?>sites/all/themes/housingtheme/images/complaint_icon.png" /><br/>Complaint Management</button>
</div>