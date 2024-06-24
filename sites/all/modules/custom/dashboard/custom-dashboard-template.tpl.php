<div class="row">
    <!-- Done by Subham 20/06/2024 & 21/06/2024 -->
    <h4 class="mt-4">Welcome  <?= ucwords(strtolower($user_info['applicant_name']))?></h4>
    <h6>Designation: <?= $user_info['applicant_designation']?></h6>
    <h6>Mobile Number: <?= !empty($user_info['mobile_no']) ? $user_info['mobile_no'] : 'N/A'?></h6>
    <h6>Email: <?= !empty($user->mail) ? $user->mail : 'N/A'?></h6>
    <div class="col-md-9">
        <div class="table-responsive">
            <?php
                // echo $user_info[applicant_name];
                // print_r($user_info);
            ?>
        </div>
    </div>
    
</div>