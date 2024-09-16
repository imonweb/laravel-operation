<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <title>Laravel 11 CRUD Operation</title>
</head>
<body>
  <div class="container pt-5">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-9">
              <h4>Posts</h4>
            </div>
            <div class="col-md-3 text-end">
              <a href="#" class="btn btn-success">Create Post</a>
            </div>
          </div>
        </div>
        <div class="card-body">

          <div class="alert alert-success"></div>
         
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
                </tr>
              @endforeach
            </tbody>
          </table> <!--========= table ==========-->
          {{ $posts->links()}}
        </div> <!--========= card-body ==========-->
      </div> <!--========= card ==========-->
  </div> <!--========= container pt-5 ==========-->
  

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>