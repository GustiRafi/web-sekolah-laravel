@extends('layouts.main')

@section('left-content')
<!-- konten Kiri -->
<div class="col-12 col-md-8">
    <div class="card shadow">
        <div class="px-3 pt-3">
            @if($title == 'detail berita')
            <div data-aos="fade-right">
                <div class="d-flex my-3">
                    <span class="border border-5 border-primary"></span>
                    <h4 class="ps-3">{{ $berita->title }}</h4>
                </div>
            </div>
            <div data-aos="fade-right">
                <p class="opacity-50">{{ $berita->updated_at->diffForHumans() }} by: {{ $berita->user->name }}</p>
            </div>
            <div data-aos="fade-right">
                <div class="mt-3">
                    <img src="{{ asset('storage/' . $berita->image) }}" alt="" srcset="">
                    <div class="mt-3">
                        {!! $berita->description !!}
                    </div>
                </div>
            </div>
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col">
                    <div class="px-3 py-3">
                        <div data-aos="fade-right">
                            <h4>Tinggalkan Komentar</h4>
                            <div class="border border-4 border-warning"></div>
                        </div>
                        <div data-aos="fade-right">
                            <form action="/comment" method="post" class="my-3">
                                @csrf
                                <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                                <div class="mb-3">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama">
                                </div>
                                <div class="mb-3">
                                    <textarea name="body" id="body" cols="30" rows="10" placeholder="Komentar"
                                        class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-outline-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="px-3 py-3">
                        <div data-aos="fade-right">
                            <h4>Komentar</h4>
                            <div class="border border-4 border-warning"></div>
                            @if(count($comments))
                            @foreach($comments as $comment)
                            <div class="my-2">
                                <div class="d-flex">
                                    <p><strong>{{ $comment->name }}</strong></p>
                                    <p class="opacity-50 ms-2">
                                        {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                                    </p>
                                </div>
                                {!! $comment->body !!}
                            </div>
                            <hr>
                            @endforeach
                            @else
                            <p>jadilah yang pertama kali komentar</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @elseif($title == 'detail sambutan')
            <div data-aos="fade-right">
                <div class="d-flex my-3">
                    <span class="border border-5 border-primary"></span>
                    <h4 class="ps-3">{{ $sambutan->title }}</h4>
                </div>
            </div>
            <div data-aos="fade-right">
                <div class="mt-3">
                    <div class="mt-3">
                        {!! $sambutan->description !!}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- end kontent kiri -->
@endsection