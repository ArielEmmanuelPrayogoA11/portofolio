@extends('layouts.main')
@include('partial.navbar')

@section('container')
    <a href="/spm" class="btn btn-primary mt-3 mb-5">Return</a>



    @foreach ($dataspm as $data)
        <div class="card bg-light alert alert-warning text-dark">
            <div class="card-header text-center bg-light text-dark">
                <h1 class="mb-0">{{ $data->nama }}</h1>
            </div>

            <div class="card-body pt-4">
                <p class="card-text"><strong>Nama:</strong> {{ $data->nama }}</p>
                <p class="card-text"><strong>Usia:</strong> {{ $data->usia }} tahun</p>
                <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $data->jk }}</p>
                <p class="card-text"><strong>Alamat:</strong> {{ $data->almt }}</p>
                <p class="card-text">Menyatakan dengan sesungguhnya telah memberikan:</p>

                <div class="title text-center mb-3">
                    <h2 class="text-dark">PERSETUJUAN/PENOLAKAN</h2>
                </div>

                <p class="card-text">Dengan,</p>
                <p class="card-text">Perawatan: </p>
                <p class="card-text">Saya telah mengerti dan telah dijelaskan prosedur kerja perawatan yang dilakukan pada
                    saya dan komplikasi yang mungkin terjadi pasca perawatan pada diri saya.</p>

                    <div class="row">
                        <div class="signature-container mb-4">
                            <div class="form-group signature">
                                <label for="ttd_dokter" class="text-dark">Tanda Tangan Dokter yang Merawat:</label>
                                <a href="#" class="text-decoration-none">Tanda Tangan Disini</a>
                            </div>
        
                            <div class="form-group signature">
                                <p class="text-dark">Semarang , {{ $data->tglbuat }}</p>
                                <label for="ttd_pemohon" class="text-dark">Tanda Tangan Pembuat Pernyataan:</label>
                                <a href="#" class="text-decoration-none">Tanda Tangan Disini</a>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    @endforeach
@endsection
