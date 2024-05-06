
<style>
    .sb-sidenav {
        width: 250px !important; /* Set the desired width for the sidebar */

    }
    

 
</style>



<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            
            <div class="nav">
             
                <a class="nav-link {{ Request::is('doctor/dashboard') ? 'active':'' }}" href="{{ url('doctor/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link {{ Request::is('doctor/jadwal') ? 'active':'' }}" href="{{ url('doctor/jadwal') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                    Jadwal Periksa
                </a>
                <a class="nav-link {{ Request::is('doctor/periksa') ? 'active':'' }}" href="{{ url('doctor/periksa') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Memeriksa Pasien
                </a>
                <a class="nav-link {{ Request::is('doctor/riwayat') ? 'active':'' }}" href="{{ url('doctor/riwayat') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-clipboard"></i></div>
                    Riwayat Pasien
                </a>
              
              

           
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Dr. {{ auth()->user()->name }}
        </div>
    </nav>
</div>