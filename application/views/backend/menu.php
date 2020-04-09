<section class="sidebar">      
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="<?php if ($page_name == 'dashboard') echo 'active' ?>">
        <a href="<?php echo site_url('admin/dashboard'); ?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
        </span>
        </a>
    </li>
    <li class="<?php if ($page_name == 'result' || $page_name == 'result_add' || $page_name == 'result_edit') echo 'active' ?>">
        <a href="<?php echo site_url('admin/result'); ?>">
        <i class="fa fa-th"></i> <span>Data Result</span>
        <span class="pull-right-container">
        </span>
        </a>
    </li>
    <li class="<?php if ($page_name == 'history') echo 'active' ?>">
        <a href="<?php echo site_url('admin/history'); ?>">
        <i class="fa fa-calendar"></i>
        <span>History</span>
        <span class="pull-right-container">
        </span>
        </a>
    </li>
    
    <li class="header">Setting</li>
    <li><a href="<?php echo site_url('admin/change_password'); ?>"><i class="fa fa-circle-o text-red"></i> <span>Ubah Password</span></a></li>
    <li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-circle-o text-yellow"></i> <span>Logout</span></a></li>
    </ul>
</section>