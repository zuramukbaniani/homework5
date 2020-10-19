@extends("post.main")
@section('content')
<body>
    <h1>{{ $produts->title }}</h1>
    <p>{{ $produts->description }}</p>
    <div>
        <label for=""> <strong>კომენტარები</strong> </label>
    </div>
    @foreach($comments as $comment)
        <p>{{ $comment->comment }}</p>
    @endforeach
    <form action="{{ route('PostComments') }}" method="post">
    @csrf
        <div>
            <label for="">კომენტარი</label>
            <div>
            <input type="hidden" name="id" value="{{ $produts->id }}">
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button>დაკომენტარება</button>
            </div>
        </div>
    </form>
@endsection