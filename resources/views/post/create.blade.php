@extends("post.main")
@section("content")
    <form action="{{ route('PostStore') }}" method="post">
    @csrf
        <div>
            <label for="">სათაური</label>
            <div>
                <input type="text" name="title">
            </div>
        </div>
        <div>
            <label for="">ტექსტ</label>
            <div>
                <textarea name="text" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div>
            <button>დაპოსტვა</button>
        </div>
    </form>
@endsection("content")