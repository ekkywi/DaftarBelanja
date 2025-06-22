<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route("dashboard") }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a aria-controls="daftar-belanja" aria-expanded="false" class="nav-link" data-toggle="collapse" href="#daftar-belanja">
                <i class="mdi mdi-cart menu-icon"></i>
                <span class="menu-title">Daftar Belanja</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="daftar-belanja">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route("items.index") }}">Daftar Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route("items.create") }}">Tambah Barang</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
