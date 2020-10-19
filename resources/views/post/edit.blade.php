@extends("post.main")
@section("content")
    <form action="{{ route('PostUpdate') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $produts->id }}">
        <div>
            <label for="">სათაური</label>
            <div>
                <input type="text" name="title" value="{{ $produts->title }}">
            </div>
        </div>
        <div>
            <label for="">ტექსტი</label>
            <div>
                <textarea name="text" id="" cols="30" rows="10">{{ $produts->description }}</textarea>
            </div>
        </div>
        <div>
            <button>განახლება</button>
        </div>
    </form>
@endsection("content")