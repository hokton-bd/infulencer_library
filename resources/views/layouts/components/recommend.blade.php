@foreach ($books as $item)
<div class="col-lg-4 col-md-12 d-flex mb-5 px-5">
    <div class="w-50 book-image-box"><img src="{{ $item->image_url }}" class="img-fluid" alt="..."></div>
    <div class="w-50 book-desc-box">
        <p class="title">{{ $item->title }}</p>
        <p class="author">{{ $item->description }}</p>
        <p class="genre">小説</p>
        <a href="{{ $item->amazon_url }}" class="btn btn-warning">Amazonで買う</a>
        <a href="{{ $item->rakuten_url }}" target="_blank" class="btn btn-danger">楽天で買う</a>
        <a href="{{ route('books.show', ['id' => $item->id]) }}" class="d-block link-dark my-2">詳細を見る</a>
    </div>
</div>
@endforeach