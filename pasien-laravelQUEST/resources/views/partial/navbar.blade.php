<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <strong><a class="navbar-brand" href="/">P E N I T E N C E</a></strong>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/spm">SPM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/quest">Quest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true" href="#">Upgrade</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Delete Server</a>
                </li>
            </ul>
        </div>


        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

                @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/register"><i class="bi bi-lock"></i>Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="bi bi-unlock"></i>Login</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id='navbarDropdown' role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end alert alert-warning" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/password/edit">Change Password</a></li>
                            <li><a class="dropdown-item" href="/quest">Add Quest</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            {{-- Tombol Logout --}}
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>

                            </li>
                        </ul>
                    </li>
                @endif


            </ul>
        </div>
    </div>
</nav>
