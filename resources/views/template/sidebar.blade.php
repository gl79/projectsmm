<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <!-- Profil Header -->
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="img/profile_small.jpg" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Zeps Media</span>
                        <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">ZEPS MEDIA</div>
            </li>

            <!-- Dashboard -->
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <!-- Konfigurasi -->
            <li>
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Konfigurasi</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Website</a></li>
                    <li><a href="#">Level</a></li>
                    <li><a href="#">Referall</a></li>
                    <li><a href="#">Point</a></li>
                    <li><a href="#">Payment Gateway</a></li>
                    <li><a href="#">Provider API</a></li>
                    <li><a href="#">Provider PROF</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Informasi</a></li>
                    <li><a href="#">Form Info</a></li>
                </ul>
            </li>

            <!-- Pemesanan -->
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Role</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">User</a></li>
                </ul>
            </li>
            <!-- Pemesanan -->
            <li>
                <a href="#"><i class="fa fa-tag"></i> <span class="nav-label">Layanan</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Kostum Layanan</a></li>
                    <li><a href="#">Filter Pemberitahuan</a></li>
                    <li><a href="#">Filter Layanan</a></li>
                    <li><a href="#">Rekomendasi Layanan</a></li>
                    <li><a href="#">Data kategori</a></li>
                    <li><a href="#">Data Layanan</a></li>
                    <li><a href="#">Get Layanan</a></li>
                </ul>
            </li>
            <!-- Pemesanan admin -->
            <li>
                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Pemesanan</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Cek Pesanan</a></li>
                    <li><a href="#">Cek Provider</a></li>
                    <li><a href="#">Pesanan Tertahan</a></li>
                    <li><a href="#">Data Pesanan</a></li>
                    <li><a href="#">Data Refill</a></li>
                    <li><a href="#">Laporan Pesanan</a></li>
                </ul>
            </li>
            <!-- Pemesanan user -->
            <li>
                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Pemesanan</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Pesanan Baru</a></li>
                    <li><a href="#">Pesanan Massal</a></li>
                    <li><a href="#">Riwayat Pesanan</a></li>
                    <li><a href="#">Riwayat Refill</a></li>
                </ul>
            </li>

            <!-- Deposit -->
            <li>
                <a href="#"><i class="fa fa-credit-card"></i> <span class="nav-label">Deposit</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <!-- bagian admin -->
                    <li><a href="#">Metode Deposit</a></li>
                    <li><a href="#">Data Deposit</a></li>
                    <li><a href="#">Kirim Saldo</a></li>
                    <li><a href="#">Laporan Deposit</a></li>
                    <!-- bagian user -->
                    <li><a href="#">Deposit Baru</a></li>
                    <li><a href="#">Riwayat Deposit</a></li>
                    <li><a href="#">Laporan Deposit</a></li>
                </ul>
            </li>

            <!-- Layanan -->
            <li>
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Layanan</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Daftar Layanan</a></li>
                    <li><a href="#">Update Layanan</a></li>
                    <li><a href="#">Update Layanan</a></li>
                </ul>
            </li>

            <!-- Tiket -->
            <li>
                <a href="#"><i class="fa fa-ticket"></i> <span class="nav-label">Tiket</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Tiket Baru</a></li>
                    <li><a href="#">Data Tiket</a></li>
                </ul>
            </li>

            <!-- Informasi (seperti Dashboard) -->
            <li class="{{ Request::is('informasi') ? 'active' : '' }}">
                <a href="{{ url('informasi') }}"><i class="fa fa-info-circle"></i> <span
                        class="nav-label">Informasi</span></a>
            </li>

            <!-- Top 10 -->
            <li>
                <a href="#"><i class="fa fa-star"></i> <span class="nav-label">Top 10</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Top Pesanan</a></li>
                    <li><a href="#">Top Deposit</a></li>
                    <li><a href="#">Top Layanan</a></li>
                </ul>
            </li>

            <!-- Akun (seperti Dashboard) -->
            <li class="{{ Request::is('akun') ? 'active' : '' }}">
                <a href="{{ url('akun') }}"><i class="fa fa-user"></i> <span class="nav-label">Akun</span></a>
            </li>

            <!-- Sitemap -->
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Sitemap</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Kontak</a></li>
                    <li><a href="#">Ketentuan Layanan</a></li>
                </ul>
            </li>
            <!-- Sitemap -->
            <li>
                <a href="#"><i class="fa fa-rotate-right"></i> <span class="nav-label">Log</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Mutasi BCA</a></li>
                    <li><a href="#">Mutasi OVO</a></li>
                    <li><a href="#">Mutasi GOPAY</a></li>
                    <li><a href="#">Mutasi Saldo</a></li>
                    <li><a href="#">Masuk Admin</a></li>
                    <li><a href="#">Masuk User</a></li>
                    <li><a href="#">Update Layanan</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>