<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <router-link to="/admin/dashboard" class="nav-link">
                <i class="mdi mdi mdi-home menu-icon"></i>
                <span class="menu-title">Trang chủ</span>
            </router-link>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Quản lý tài khoản</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <router-link to="/admin/user-list" class="nav-link">Thông tin tài
                            khoản</router-link></li>
                    <li class="nav-item"> <router-link to="/admin/user-list" class="nav-link">Thông tin nhóm
                            quyền</router-link></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#device" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-cube menu-icon"></i>
                <span class="menu-title">Quản lý thiết bị</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="device">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <router-link class="nav-link" to="/admin/equipment-type">Loại thiết
                            bị</router-link></li>
                    <li class="nav-item"> <router-link class="nav-link" to="/admin/equipment">Thiết bị</router-link>
                    </li>
                </ul>
            </div>
        </li>
        {{-- <li class="nav-item">
            <router-link class="nav-link" to="/admin/allocation">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Quản lý cấp phát</span>
            </router-link>
        </li> --}}
        {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#fix" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-cube menu-icon"></i>
                <span class="menu-title">Kiểm tra & sửa chữa</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="fix">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <router-link class="nav-link" href="#">Kiểm tra</router-link></li>
                    <li class="nav-item"> <router-link class="nav-link" href="#">Sửa chữa</router-link></li>
                </ul>
            </div>
        </li> --}}
    </ul>
</nav>
