<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="<?= base_url('admin'); ?>">
            <img src="<?= public_url('admin/images/logo-icon.png'); ?>" class="logo-icon" alt="logo icon">
            <h5 class="logo-text"> DashRock</h5>
        </a>
    </div>
    <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
            <div class="avatar"><img class="mr-3 side-user-img" src="<?= public_url('admin/images/avatars/avatar-4.png'); ?>" alt="user avatar"></div>
            <div class="media-body">
                <h6 class="side-user-name">Mark Jhonsan</h6>
            </div>
        </div>
        <div id="user-dropdown" class="collapse">
            <ul class="user-setting-menu">
                <li><a href="javaScript:void();"><i class="icon-user"></i> My Profile</a></li>
                <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
                <li><a href="javaScript:void();"><i class="icon-power"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>

        <?php if (isPermissionURL('index')) : ?>
            <li>
                <a href="<?= base_url('admin'); ?>" class="waves-effect">
                    <i class="icon-home"></i><span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="index.html"><i class="fa fa-long-arrow-right"></i> Dashboard v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-long-arrow-right"></i> Dashboard v2</a></li>
                    <li><a href="index3.html"><i class="fa fa-long-arrow-right"></i> Dashboard v3</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (isPermissionURL('groups')) : ?>
            <li>
                <a href="<?= base_url('admin/groups'); ?>" class="waves-effect">
                    <i class="fa fa-users"></i><span>Groups</span></i>
                </a>
            </li>
        <?php endif; ?>

    </ul>

</div>