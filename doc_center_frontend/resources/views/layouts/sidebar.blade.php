<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ $title == 'Project' ? 'active' : ''  }} ">
                    <a href="{{ route('project') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Project</span>
                    </a>
                </li>

                <li class="sidebar-item {{ $title == 'Activity' ? 'active' : ''  }} ">
                    <a href="{{ route('activity') }}" class='sidebar-link'>
                        <i class="fa-solid fa-chart-line"></i>
                        <span>Activity</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
