@extends('layouts.main')

@include('partial.navbar')



@section('container')
    <div class="container mt-5">

        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">

            {{ session()->get('success') }}
        </div>
        @endif

        <div class="card bg-dark text-white">
            <div class="card-body">
                <h1 class="mb-4 text-center">WELCOME</h1>
                <h2><strong>Penitence</strong></h2>
                <p class="mb-5">
                    What new features will this game have?
                    AdventureQuest Worlds Infinity will be a cross-platform allowing you to login from anywhere. It has
                    superior game play controls including keyboard WASD movement and joysticks/gamepad support. This version
                    of the game is GPU accelerated which runs at 60+ frames per second on any machine that is not an
                    obsolete toaster. It also features scrolling maps, particle effects, new types of class skills, better
                    map colliders, a consistent interface, a new dialog cutscene system, remastered quests, a unified music
                    & soundFX system, and a much faster server.

                    Who's on the team?
                    AQWorlds Infinity has a dedicated team of programmers who are helped by the content team that currently
                    builds AQWorld weekly releases.

                    Programmers

                    Zhoom - Lead Game Coder
                    Warlic - Game Client
                    Yorumi - Server & Database
                    Tunik - User Interface, Cutscenes
                    Spider - Combat & Conversion Tools
                    Captain Rhubarb - Database & Admin Tools
                    Content team

                    Reens - Content Lead
                    J6 - Map conversion and art changes
                    Ghost - Animation
                    Yoshino - Maps, NPCs, Stoof Doer
                    Alina - Showrunner for the existing AQWorlds
                    Artix - Project Lead for AQWorlds conversion
                    More team members will be recruited/moved to this project as the tools become ready for them to work
                    with.
                    Wait... Alina? I thought she said she was....
                    What? Resigning because she was pregnant? No. That post floating around social media was fake. Be
                    careful not believe random things people post on the internet. Always check the actual design notes to
                    see if it is true. XD
                </p>

                <hr>
                <div class="row ">
                    {{-- START PATCH NOTES --}}
                    <div class="col-md-6">
                        <div class="card shadow alert alert-warning">
                            <div class="card-body"  style="max-height: 500px; overflow-y: auto;">
                                <h1>Patch Note:</h1>
                                <small>10 October 2023 , 12:59</small>
                                <hr class="mb-4">
                                <ul class="list-unstyled mb-5">
                                    <li>+ Added Homepage</li>
                                    <li>+ Provided Patch Notes</li>
                                    <li>+ Background temporarirly turned to Black </li>
                                    <li>- Navigation not finished </li>
                                </ul>
                                <small>10 October 2023 , 13:52</small>
                                <hr class="mb-4">
                                <ul class="list-unstyled mb-5">
                                    <li>+ Added SPM page</li>
                                    <li>+ Added SPM adding form</li>
                                    <li>+ Added Looping SPM from Database</li>
                                </ul>
                                <small>10 October 2023 , 14:55</small>
                                <hr class="mb-4">
                                <ul class="list-unstyled mb-5">
                                    <li>+ Added Pasien Names at Home</li>
                                    <li>+ Bug Fixes</li>
                                </ul>
                                <small>10 October 2023 , 15:43</small>
                                <hr class="mb-4">
                                <ul class="list-unstyled mb-5">
                                    <li>+ Added Pasien Names at Home</li>
                                    <li>+ Bug Fixes</li>
                                </ul>
                                <small>16 October 2023 , 13:04</small>
                                <hr class="mb-4">
                                <ul class="list-unstyled mb-5">
                                    <li>+ Added Quests Creation</li>
                                    <li>+ Added Quest List</li>
                                    <li>+ Finished first BK</li>
                                    <li>+ Finished Parsinta-29</li>
                                </ul>
                                <small>16 October 2023 , 14:27</small>
                                <hr class="mb-4">
                                <ul class="list-unstyled mb-5">
                                    <li>+ Fixed Quest UI</li>
                                    <li>+ Added Quest Details</li>
                                    <li>+ Added Footer and More Nav</li>
                                </ul>
                                <small>16 October 2023 , 16:22</small>
                                <hr class="mb-4">
                                <ul class="list-unstyled mb-5">
                                    <li>+ Added Registration Form</li>
                                    <li>+ Added Username at Users Database</li>
                                    <li>+ Unique , Value Old , Error Enderror Used well</li>
                                    <li>+ Register Success Notification available at Home Page after Registration</li>
                                    <li>+ Finished Parsinta-34</li>
                                    <li>+ Finished Parsinta-35</li>
                                </ul>
                                <small>16 October 2023 , 16:42</small>
                                <hr class="mb-4">
                                <ul class="list-unstyled mb-5">
                                    <li>+ Added RegisterRequest</li>
                                    <li>+ Added Attributes Function at User Model</li>
                                    <li>+ Simplified Controller Register</li>
                                    <li>+ Finished Parsinta-36</li>
                                    
                                </ul>
                                <small>18 October 2023 , 11:24</small>
                                <hr class="mb-4">
                                <ul class="list-unstyled mb-5">
                                    <li>+ Added Login Authentication</li>
                                    <li>+ Added Logout</li>
                                    <li>+ Data Creation only for Authenticated User</li>
                                    <li>+ Finished Parsinta-40</li>
                                    <li>+ Tamat Lanjut Bikin Project Baru With Breeze</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- END PATCH NOTES --}}

                    {{-- LIST OF PASIEN START --}}
                    <div class="col-md-6">
                        <div class="card shadow alert alert-warning">
                            <div class="card-body">
                                <h1>Pasien:</h1>
                                <small></small>
                                <hr class="mb-4">
                                {{-- Loop Nama --}}
                                <ul class="list-unstyled mb-5 homehoverpasien">
                                    @foreach ($dataspm as $dspm)
                                        <li class="d-flex align-items-center mb-2">
                                            <span class="bi bi-person-fill text-primary mx-3"></span>
                                            <a href="/spm/{{ $dspm->nama }}"
                                                class="text-decoration-none">{{ $dspm->nama }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                                {{-- End Loop nama --}}

                            </div>
                        </div>
                    </div>
                    {{-- LIST OF PASIEN END --}}
                </div>
            </div>
        </div>
    </div>
@endsection
