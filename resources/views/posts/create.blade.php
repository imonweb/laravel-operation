@extends("posts.layouts")

@section("content")
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-9">
              <h4>Create Post</h4>
            </div>
            <div class="col-md-3 text-end">
              <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
            </div>
          </div>
        </div>
        <div class="card-body">

          <form action="#" method="POST">
              @csrf 
              <div class="mt-2">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">

                @error("title")
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="mt-2">
                <label for="">Body:</label>
                <textarea name="body" class="form-control"></textarea>

                 @error("body")
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="mt-2">
                <button class="btn btn-success">Submit</button>
              </div>
           </form>
        </div> <!--========= card-body ==========-->
      </div> <!--========= card ==========-->
@endsection