<x-admin-master>
  @section('content')
      Permissions
      <div class="row">
      <div class="col-sm-3">
            <form method="post" action="{{route('permissions.store')}}">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"> 
                  <div>
                    @error('name')
                        <span><strong>{{$message}}</strong></span>
                    @enderror
                  </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Create</button>
                </form>
          </div>
      </div>
  @endsection
</x-admin-master>