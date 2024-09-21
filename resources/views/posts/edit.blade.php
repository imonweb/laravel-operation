@extends("posts.layouts")

@section("content")
  
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-9">
              <h4>Edit Post</h4>
            </div>
            <div class="col-md-3 text-end">
              <a href="{{ route('posts.index') }}" class="btn btn-success">Back</a>
            </div>
          </div>
        </div>
        <div class="card-body">
           <form action="{{ route('posts.update', $post->id) }}" method="POST">
              
              @csrf 
              @method('PUT')

              <div class="mt-2">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}">

                @error("title")
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="mt-2">
                <label for="">Body:</label>
                <textarea name="body" class="form-control">{{ $post->title }}</textarea>

                 @error("body")
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="mt-2">
                <button class="btn btn-success">Submit</button>
              </div>
           </form>
        </div>
      </div>
   
@endsection