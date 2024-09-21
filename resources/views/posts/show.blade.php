@extends("posts.layouts")

@section("content")
  
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-9">
              <h4>Show Post</h4>
            </div>
            
          </div>
        </div>
        <div class="card-body">
           <form>
             

              <div class="mt-2">
                <label for="">ID</label>
                <input type="text" class="form-control" disabled value="{{ $post->id }}">
 
              </div>
               
              <div class="mt-2">
                <label for="">Title</label>
                <input type="text" class="form-control" disabled value="{{ $post->title }}">
 
              </div>

              <div class="mt-2">
                <label for="">Body:</label>
                <textarea class="form-control" disabled>{{ $post->body }}</textarea>
 
              </div>

              <div class="mt-2">
                <a href="{{ route('posts.index') }}" class="btn btn-success">Back</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
              </div>
           </form>
        </div>
      </div>
   
@endsection