<x-admin-master>
  @section('content')
    <h1>Edit</h1>
        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{$post->title}}">
          </div>
          <div class="form-group">
              <div><img height="100px" src="{{$post->post_image}}" alt=""></div>
              <label for="file">File</label>
              <input type="file" name="post_image" class="form-control" id="post_image">
          </div>
          <div class="form-group">
            <textarea name="body" id="body" cols="30" rows="10" class="form-control" value="{{$post->body}}"></textarea>
          </div>


          <button type="submit" class="btn btn-primary" >Submit</button>

        </form>
  @endsection
</x-admin-master>