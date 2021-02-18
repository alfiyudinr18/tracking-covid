<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a href="{{ route('provinsi.index') }}" class="sidebar-link">
                        <i class="mdi mdi-format-float-left"></i>
                        <span class="hide-menu"> Provinsi </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('kota.index') }}" class="sidebar-link">
                        <i class="mdi mdi-format-float-right"></i>
                        <span class="hide-menu"> Kota </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('kecamatan.index') }}" class="sidebar-link">
                        <i class="mdi mdi-view-quilt"></i>
                        <span class="hide-menu"> Kecamatan </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('kelurahan.index') }}" class="sidebar-link">
                        <i class="mdi mdi-view-parallel"></i>
                        <span class="hide-menu"> Kelurahan </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('rw.index') }}" class="sidebar-link">
                        <i class="mdi mdi-view-column"></i>
                        <span class="hide-menu"> RW </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('kasus.index') }}" class="sidebar-link">
                        <i class="mdi mdi-view-carousel"></i>
                        <span class="hide-menu"> Kasus </span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
