<style>
    .sb-sidenav {
        width: 250px !important; /* Set the desired width for the sidebar */

    }
    

 
</style>



<div id="layoutSidenav_nav ">
    <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            
            <div class="nav">
             
                <a class="nav-link {{ Request::is('pasien/dashboard') ? 'active':'' }}" href="{{ url('pasien/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link {{ Request::is('pasien/daftar-poli') ? 'active':'' }}" href="{{ url('pasien/daftar-poli') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-pencil"></i></div>
                    Daftar Poli
                </a>
              
                
                
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>