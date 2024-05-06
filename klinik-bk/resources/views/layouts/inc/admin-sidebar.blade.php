




<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            
            <div class="nav">
             
             
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active':'' }}" href="{{ url('admin/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
              
                 {{-- USERS --}}
                 <a class="nav-link {{ Request::is('admin/users') ? 'active':'' }}" href="{{ url('admin/users') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>

                {{-- Pasien --}}
                <a class="nav-link {{ Request::is('admin/data-pasien') ? 'active':'' }}" href="{{ url('admin/data-pasien') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Pasien
                </a>

                {{-- Dokter --}}
                <a class="nav-link {{ Request::is('admin/data-dokter') ? 'active':'' }}" href="{{ url('admin/data-dokter') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Dokter
                </a>

                
               


                {{-- Obat --}}
                <a class="nav-link {{ Request::is('admin/obat') || Request::is('admin/add-obat') || Request::is('admin/edit-obat/*') ? 'collapse active':'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Obat
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/obat') || Request::is('admin/add-obat') || Request::is('admin/edit-obat/*') ? 'show':'' }}" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-obat') ? 'active':'' }}" href="{{ url('admin/add-obat') }}">Tambah Obat</a>
                        <a class="nav-link {{ Request::is('admin/obat') || Request::is('admin/edit-obat/*') ? 'active':'' }}" href="{{ url('admin/obat') }}">Lihat Obat</a>
                    </nav>
                </div>


                {{-- Poli --}}
                

                <a class="nav-link {{ Request::is('admin/poli') || Request::is('admin/add-poli') || Request::is('admin/edit-poli/*') ? 'collapse active':'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-hospital"></i></div>
                    Poli
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/poli') || Request::is('admin/add-poli') || Request::is('admin/edit-poli/*') ? 'show':'' }}" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-poli') ? 'active':'' }}" href="{{ url('admin/add-poli') }}">Tambah Poli</a>
                        <a class="nav-link {{ Request::is('admin/poli') || Request::is('admin/edit-poli/*') ? 'active':'' }}" href="{{ url('admin/poli') }}">Lihat Poli</a>
                    </nav>
                </div>
                
                
            </div>
        </div>
        <div class="sb-sidenav-footer bg-dark">
            <div class="small">Logged in as:</div>
            ADMIN
        </div>
    </nav>
</div>