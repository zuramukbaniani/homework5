@extends("post.main")
@section("content")
@foreach($products as $producs)
<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive top_static_article_img" src="assets/img/feature-top.jpg"
                             alt="feature-top">
                    </div>
                    <div class="feature_article_inner">
                        <div class="tag_lg red"><a href="category.html">Hot News</a></div>
                        <div class="feature_article_title">
                            <h1><a href="{{ route('PostShow', ['id'=>$producs->id]) }}" target="_self"> {{ $producs->title }} </a></h1>
                            <div class="feature_article_content">
                                {{ $producs->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div>
    <div>
    <form action="{{ route('PostDelete') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $producs->id }}">
    <button class= "btn btn-danger">წაშლა</button>
    <a href="{{ route('EditPost', ['id'=>$producs->id]) }}" class= "btn btn-warning">განახლება</a>
    <a href="{{ route('PostShow', ['id'=>$producs->id]) }}" class="btn btn-success">დათვალიერება</a>
    <div>
        <a href="{{ route('PosrCreate') }}" class="btn btn-success">პოსტის დამატება</a>
    </div>
    </form>
</section>
@endforeach
@endsection