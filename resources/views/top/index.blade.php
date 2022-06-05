@extends('layouts.app')
@section('content')

{{-- <section class="first-view px-5 mb-5" id="first-view">
<div class="container-fluid">
    <div class="row d-flex justify-content-between">

        <div class="card bg-light border-secondary col-lg-3 col-md-12 mb-3">
            <img src="{{ asset('storage/images/dummy.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div><!-- ./card-img-overlay -->
        </div><!-- ./card -->

        <div class="card bg-light border-secondary col-lg-3 col-md-12 mb-3">
            <img src="{{ asset('storage/images/dummy.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div><!-- ./card-img-overlay -->
        </div><!-- ./card -->

        <div class="card bg-light border-secondary col-lg-3 col-md-12 mb-3">
            <img src="{{ asset('storage/images/dummy.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div><!-- ./card-img-overlay -->
        </div><!-- ./card -->

    </div><!-- ./row -->
</div><!-- ./container-fluid -->
</section> --}}

<section class="recommends mb-5" id="recommends">
<div class="container-fluid">

    <h2 class="section-title h2 mb-5">インフルエンサーたちのおすすめ本</h2>

    <div class="row">

        <div class="col-lg-4 col-md-12 d-flex mb-5 px-5">
            <div class="w-50 book-image-box"><img src="https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/5709/9784167105709.jpg?_ex=200x200" class="img-fluid" alt="..."></div>
            <div class="w-50 book-desc-box">
                <p class="title">竜馬がゆく</p>
                <p class="author">司馬遼太郎</p>
                <p class="genre">小説</p>
                <a href="#" class="btn btn-warning">Amazonで買う</a>
                <a href="https://hb.afl.rakuten.co.jp/hgc/g00q072a.zmoxu0ca.g00q072a.zmoxvf59/?pc=https%3A%2F%2Fbooks.rakuten.co.jp%2Frb%2F1001021%2F" target="_blank" class="btn btn-danger">楽天で買う</a>
                <a href="" class="d-block link-dark my-2">詳細を見る</a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 d-flex mb-5 px-5">
            <div class="w-50 book-image-box"><img src="https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/5709/9784167105709.jpg?_ex=200x200" class="img-fluid" alt="..."></div>
            <div class="w-50 book-desc-box">
                <p class="title">竜馬がゆく</p>
                <p class="author">司馬遼太郎</p>
                <p class="genre">小説</p>
                <a href="#" class="btn btn-warning">Amazonで買う</a>
                <a href="https://hb.afl.rakuten.co.jp/hgc/g00q072a.zmoxu0ca.g00q072a.zmoxvf59/?pc=https%3A%2F%2Fbooks.rakuten.co.jp%2Frb%2F1001021%2F" target="_blank" class="btn btn-danger">楽天で買う</a>
                <a href="" class="d-block link-dark my-2">詳細を見る</a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 d-flex mb-5 px-5">
            <div class="w-50 book-image-box"><img src="https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/5709/9784167105709.jpg?_ex=200x200" class="img-fluid" alt="..."></div>
            <div class="w-50 book-desc-box">
                <p class="title">竜馬がゆく</p>
                <p class="author">司馬遼太郎</p>
                <p class="genre">小説</p>
                <a href="#" class="btn btn-warning">Amazonで買う</a>
                <a href="https://hb.afl.rakuten.co.jp/hgc/g00q072a.zmoxu0ca.g00q072a.zmoxvf59/?pc=https%3A%2F%2Fbooks.rakuten.co.jp%2Frb%2F1001021%2F" target="_blank" class="btn btn-danger">楽天で買う</a>
                <a href="" class="d-block link-dark my-2">詳細を見る</a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 d-flex mb-5 px-5">
            <div class="w-50 book-image-box"><img src="https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/5709/9784167105709.jpg?_ex=200x200" class="img-fluid" alt="..."></div>
            <div class="w-50 book-desc-box">
                <p class="title">竜馬がゆく</p>
                <p class="author">司馬遼太郎</p>
                <p class="genre">小説</p>
                <a href="#" class="btn btn-warning">Amazonで買う</a>
                <a href="https://hb.afl.rakuten.co.jp/hgc/g00q072a.zmoxu0ca.g00q072a.zmoxvf59/?pc=https%3A%2F%2Fbooks.rakuten.co.jp%2Frb%2F1001021%2F" target="_blank" class="btn btn-danger">楽天で買う</a>
                <a href="" class="d-block link-dark my-2">詳細を見る</a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 d-flex mb-5 px-5">
            <div class="w-50 book-image-box"><img src="https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/5709/9784167105709.jpg?_ex=200x200" class="img-fluid" alt="..."></div>
            <div class="w-50 book-desc-box">
                <p class="title">竜馬がゆく</p>
                <p class="author">司馬遼太郎</p>
                <p class="genre">小説</p>
                <a href="#" class="btn btn-warning">Amazonで買う</a>
                <a href="https://hb.afl.rakuten.co.jp/hgc/g00q072a.zmoxu0ca.g00q072a.zmoxvf59/?pc=https%3A%2F%2Fbooks.rakuten.co.jp%2Frb%2F1001021%2F" target="_blank" class="btn btn-danger">楽天で買う</a>
                <a href="" class="d-block link-dark my-2">詳細を見る</a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 d-flex mb-5 px-5">
            <div class="w-50 book-image-box"><img src="https://thumbnail.image.rakuten.co.jp/@0_mall/book/cabinet/5709/9784167105709.jpg?_ex=200x200" class="img-fluid" alt="..."></div>
            <div class="w-50 book-desc-box">
                <p class="title">竜馬がゆく</p>
                <p class="author">司馬遼太郎</p>
                <p class="genre">小説</p>
                <a href="#" class="btn btn-warning">Amazonで買う</a>
                <a href="https://hb.afl.rakuten.co.jp/hgc/g00q072a.zmoxu0ca.g00q072a.zmoxvf59/?pc=https%3A%2F%2Fbooks.rakuten.co.jp%2Frb%2F1001021%2F" target="_blank" class="btn btn-danger">楽天で買う</a>
                <a href="" class="d-block link-dark my-2">詳細を見る</a>
            </div>
        </div>

    </div><!-- ./row -->

    <a href="{{ route('books.index') }}" class="d-block link-dark text-end">一覧を見る</a>

</div><!-- ./container -->
</section>

@endsection