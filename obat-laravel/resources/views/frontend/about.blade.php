@extends('layouts.app')
@section('title', 'Obat Laravel')
@section('meta_description', 'Obat Laravel')
@section('meta_keyword', 'Obat Laravel')

@section('content')

    <div class="bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel category-carousel owl-theme">
                        @foreach ($all_category as $all_cate_item)
                            <div class="item">
                                <a href="{{ url('category/' . $all_cate_item->slug) }}" class="text-decoration-none">
                                    <div class="card">
                                        <img src="{{ asset('uploads/category/' . $all_cate_item->image) }}" alt="image">
                                        <div class="card-body text-center">
                                            <h5 class="text-dark">{{ $all_cate_item->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="py-1 bg-crimson text-white">
        <div class="container">
            <div class="text-center p-3">

                <h4>PT DUA PUTERA PERKASA FARMA</h4>

            </div>
        </div>
    </div>




    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Obat Laravel</h4>
                    <div class="underline"></div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.


                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis similique iste, officiis
                    corrupti quidem hic ipsam consectetur voluptatum repudiandae, cupiditate, blanditiis a tenetur
                    tempora in. Repellendus saepe dolorum minus reiciendis vero pariatur labore! Laboriosam porro harum
                    nobis quibusdam ab.

                </p>

            </div>
        </div>
    </div>

    <div class="py-1 bg-crimson text-white">
        <div class="container">
            <div class="text-center p-3">

                <h4>KATEGORI FARMASI</h4>

            </div>
        </div>
    </div>

    <div class="py-5 bg-dark">
    <div class="container" style="max-height: 800px; overflow-y: auto;">
        <div class="row">
            <div class="col-md-12 text-white">
                <h4>All Categories</h4>
                <div class="underline"></div>
            </div>

            <p class="text-white">
                Silahkan cari kategori untuk di Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium ducimus illo suscipit dolor temporibus, amet sunt hic! Eius sapiente optio cupiditate nam a provident! Natus quaerat placeat quas aut aperiam harum numquam nulla modi illo tempore neque alias porro, quod voluptatum excepturi officiis autem est distinctio praesentium illum! Atque, placeat?
            </p>

            @foreach ($all_category as $all_cateitem)
                <div class="col-md-3">
                    <div class="card card-body shadow mb-3 text-center" style="min-height: 80px;">
                        <a href="{{ url('category/' . $all_cateitem->slug) }}" class="text-decoration-none">
                            <h6 class="text-dark mb-0">{{ $all_cateitem->name }}</h6>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>



    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Latest Post</h4>
                    <div class="underline"></div>
                </div>

                <div class="col-md-8">
                    @foreach ($latest_posts as $latest_post_item)
                        <div class="card card-body mb-3">
                            <a href="{{ url('category/' . $latest_post_item->category->slug . '/' . $latest_post_item->slug) }}"
                                class="text-decoration-none">
                                <h6 class="text-dark mb-0">{{ $latest_post_item->name }}</h6>
                            </a>
                            <h6>Posted On: {{ $latest_post_item->created_at->format('d-m-Y') }}</h6>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-4">

                    <div class="border text-center p-3">

                        <h4>Advertising Area</h4>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
