<div class="d-flex flex-row justify-content-between">
    <div class="title">
        <h3><?= $title?></h3>
        <ul class="breadcrumb text-muted fs-6 fw-normal ms-1">
        <li class="breadcrumb-item text-muted"><a href="dashboard.html" class="text-muted text-hover-primary">Home</a></li>
        <li class="breadcrumb-item text-dark"><?= $title?></li>
        </ul>
    </div>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="<?= $base_root.$base_path ?>sites/all/themes/housingtheme/images/profile_icon.png" alt="" width="50" height="50" class="rounded-circle me-2">
        <div class="user-name">
            <strong>DDO Name</strong></br>
            <small><b>Email:</b> test@gmail.com</small>
        </div>
        </a>
        <ul class="dropdown-menu text-small shadow" style="">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>