<!-- Page Sidebar -->
<div class="page-sidebar">
                <a class="logo-box" href="{{ route('dashboard.index') }}">
                    <span>SICKLE LIFE</span>
                    <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                    <i class="icon-close" id="sidebar-toggle-button-close"></i>
                </a>
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-menu">
                        <ul class="accordion-menu">
                            <li class="active-page">
                                <a href="{{ route('dashboard.index') }}">
                                    <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-list"></i><span>Blog</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('dashboard.blog.index') }}">All Articles</a></li>
                                    <li><a href="{{ route('dashboard.blog.create') }}">New Article</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user-md"></i><span>Team Members</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('dashboard.teammember.index') }}">All Team Members</a></li>
                                    <li><a href="{{ route('dashboard.teammember.create') }}">New Team Member</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-image"></i><span>Images</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                <li><a href="{{ route('dashboard.image.index') }}">All Images</a></li>
                                <li><a href="{{ route('dashboard.album.index') }}">All Albums</a></li>
                                <li><a href="{{ route('dashboard.basket.index') }}">All Baskets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-users"></i><span>Users</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('dashboard.user.index') }}">All Users</a></li>
                                    <li><a href="{{ route('dashboard.user.create') }}">New User</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="menu-icon icon-cogs"></i><span>Configurations</span>
                                </a>
                            </li>
                            <li class="menu-divider"></li>
                            <li>
                                <a href="{{ route('index') }}" target="_blank">
                                    <i class="menu-icon fa fa-external-link-square"></i><span>Website</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="menu-icon icon-public"></i><span>Changelog</span><span class="label label-danger">1.0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /Page Sidebar -->