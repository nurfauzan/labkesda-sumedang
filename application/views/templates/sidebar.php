<!-- Drawer -->
<aside class="app-layout-drawer">

    <!-- Drawer scroll area -->
    <div class="app-layout-drawer-scroll">
        <!-- Drawer logo -->
        <div id="logo" class="drawer-header">
            <a href=""><img src="<?php echo base_url(); ?>assets/img/logo/logo-login-.png" class="img-responsive" width="100%"></a>
        </div>

        <!-- Drawer navigation -->
        <nav class="drawer-main">

            <ul class="nav nav-drawer">
                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`,`menu`
                FROM `user_menu` JOIN `user_access_menu`
                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
                ";

                $menu = $this->db->query($queryMenu)->result_array();

                ?>
                <?php foreach ($menu as $m) : ?>
                    <li class="nav-item nav-drawer-header"><?php echo $m['menu']; ?></li>
                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT * 
                        FROM `user_sub_menu` JOIN `user_menu`
                        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                    WHERE `user_sub_menu`.`menu_id` = $menuId
                    AND `user_sub_menu`.`is_active` = 1
                        ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                <i class="<?= $sm['icon']; ?>"></i> <?= $sm['title']; ?>
                            </a>
                        <?php endforeach; ?>

                    <?php endforeach; ?>

                <li class="nav-item nav-drawer-header">Logout </li>
                <li class="nav-item">
                    <a class="nav-link" href="#logoutModal" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out"></i>Logout</a>
                </li>

            </ul>
        </nav>
        <!-- End drawer navigation -->

        <div class="drawer-footer">
            <p class="copyright">AppUI Template &copy;</p>
            <a href="https://shapebootstrap.net/item/1525731-appui-admin-frontend-template/?ref=rustheme" target="_blank" rel="nofollow">Purchase a license</a>
        </div>
    </div>
    <!-- End drawer scroll area -->
</aside>
<!-- End drawer -->


<!-- Header -->
<header class="app-layout-header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
                    <span class="sr-only">Toggle drawer</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-page-title">

                    <?= $title; ?>
                </span>
            </div>

            <div class="collapse navbar-collapse" id="header-navbar-collapse">

                <!-- .header search form-->
                <form class="navbar-form navbar-left app-search-form" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="search" id="search-input" placeholder="Cari..." />
                            <span class="input-group-btn">
                                <button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
                            </span>
                        </div>
                    </div>
                </form>
                <!-- .navbar-left -->
                <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">

                    <li class="dropdown dropdown-profile">
                        <a href="javascript:void(0)" data-toggle="dropdown">
                            <span class="m-r-sm"><?= $user['name']; ?> <span class="caret"></span></span>
                            <img class="img-avatar img-avatar-48" src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="User profile pic" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">
                                Selamat Datang!
                            </li>
                            <li>
                                <a href="<?= base_url('user'); ?>">Profil Saya</a>
                            </li>
                            <li>
                                <a href="#logoutModal" data-toggle="modal" data-target="#logoutModal">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- .navbar-right -->
            </div>
        </div>
        <!-- .container-fluid -->
    </nav>
    <!-- .navbar-default -->
</header>
<!-- End header -->