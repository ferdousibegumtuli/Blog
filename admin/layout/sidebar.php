<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo $baseUrl ?>/public/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="<?php echo $baseUrl ?>/admin" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="<?php echo $baseUrl ?>/admin/category" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="<?php echo $baseUrl ?>/admin/tag" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Tags</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="<?php echo $baseUrl ?>/admin/article" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                                <span>Article</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="<?php echo $baseUrl ?>/admin/user" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                                <span>User</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="<?php echo $baseUrl ?>/admin/logout" class='sidebar-link'>
                            <i class="bi bi-x-octagon-fill"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>