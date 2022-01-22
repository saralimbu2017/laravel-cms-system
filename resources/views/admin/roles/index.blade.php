<x-admin-master>
  @section('content')

      <div class="row">
          @if(session()->has('role-deleted'))

          <div class="alert alert-danger">
            {{session('role-deleted')}}
          </div>
          @endif
      </div>
      <div class="row">
       
          <div class="col-sm-3">
            <form method="post" action="{{route('roles.store')}}">
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
          <div class="col-sm-9">
            <h6>Roles</h6>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Delete</th>
                <!-- <th>Created At</th>
                <th>Updated At</th> -->
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Delete</th>
                <!-- <th>Created At</th>
                <th>Updated At</th> -->
              </tr>
            </tfoot>
            <tbody>
              @foreach($roles as $role)
              <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->slug}}</td>
                <td>
                  <form method="post" action="{{route('roles.destroy',$role->id)}}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>

                </td>
                  
                
              </tr>
              @endforeach 
            </tbody>
          </table>
          </div>
    
      </div>
  @endsection
</x-admin-master>