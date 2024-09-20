@extends("posts.layouts")

@section("content")
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-9">
              <h4>Posts</h4>
            </div>
            <div class="col-md-3 text-end">
              <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
            </div>
          </div>
        </div>
        <div class="card-body">

          @session("success")
          <div class="alert alert-success">{{ $value }}</div>
          @endsession
         
          <table class="table table-bordered">
            <thead>
              <th>ID</th>
              <th>Title</th>
              <th>Body</th>
              <th>Action</th>
            </thead>
            <tbody>
               @foreach($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->body }}</td>
                  <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table> <!--========= table ==========-->
          {{ $posts->links()}}
        </div> <!--========= card-body ==========-->
      </div> <!--========= card ==========-->
@endsection