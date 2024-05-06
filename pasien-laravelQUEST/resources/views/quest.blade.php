@extends('layouts.main')

@include('partial.navbar')

@section('container')
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow alert alert-warning">
                <div class="card-body">
                    <h1>Post a Quest:</h1>
                    <p>Post your quest by dropping the name , client , and other required things in the form below!</p>

                    <div class="border-top">
                        <!-- Form untuk menambah data -->
                        <form action="/quest" method="POST">
                            @csrf

                            {{-- NAMA QUEST --}}
                            <div class="form-group mb-3">
                                <label for="namaq" class="form-label">Nama Quest:</label>
                                <input type="text" class="form-control @error('namaq') is-invalid @enderror" id="namaq" name="namaq"
                                    placeholder="Masukkan Nama Quest" value="{{ old('namaq')}}" required>
                                    {{-- PESAN ERROR --}}
                                    @error('namaq')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                            {{-- END NAMA QUEST --}}

                            </div>
                            <div class="form-group mb-3">
                                <label for="client" class="form-label">Client:</label>
                                <input type="text" class="form-control" id="client" name="client"
                                    placeholder="Masukkan Client" required value="{{ old('client')}}" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="deskripsi">Deskripsi:</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                    placeholder="Masukkan deskripsi" required value="{{ old('deskripsi')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="reward">Reward:</label>
                                <input type="text" class="form-control" id="reward" name="reward"
                                    placeholder="Masukkan reward" required value="{{ old('reward')}}">
                            </div>
                            <div class="container text-center">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>

                            <div class="notif mt-3">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Di bagian tampilan untuk menampilkan quest -->
        <div class="col-md-6" >
            <div class="card shadow alert alert-warning">
                <div class="card-body">
                    <h1>List Registered Quest:</h1>
                    <small>Created quest will be posted here.</small>
                    <div class="mb-3">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search Quest...">
                    </div>
                    <hr class="mb-4">
                    {{-- Loop Nama --}}
                    <div class="container" style="max-height: 500px; overflow-y: auto;">
                        <div class="row" id="questList">
                            @foreach ($dataquest as $dq)
                                <div class="mb-4">
                                    <div class="alert alert-danger">
                                        <h5 class="alert-heading">{{ $dq->namaq }}</h5>
                                        <p class="mb-0">by {{ $dq->client }}</p>
                                        <hr>
                                        <p class="mb-0">
                                            <span class="bi bi-exclamation-circle-fill text-primary"></span>
                                            <a href="/quest/{{ $dq->namaq }}" class="text-decoration-none">Check Detail</a>
                                        </p>
                                        <p>Reward: {{ $dq->reward }} gold</p>
                                    </div>
                                </div>
                            @endforeach
                            {{-- End Loop nama --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- START JavaScript untuk mengatur fungsi pencarian QUEST LIST --}}
    <script>
        const searchInput = document.getElementById('searchInput');
        const questList = document.getElementById('questList').getElementsByClassName('mb-4');
    
        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.toLowerCase();
            for (const quest of questList) {
                const questName = quest.querySelector('a').textContent.toLowerCase();
                if (questName.includes(searchTerm)) {
                    quest.style.display = 'block';
                } else {
                    quest.style.display = 'none';
                }
            }
        });
    </script>

     {{-- END JavaScript untuk mengatur fungsi pencarian QUEST LIST --}}



@endsection


