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
            <h6>Permissions</h6>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Options</th>
                <th>Id</th>
                <th>Names</th>
                <th>Slug</th>
                <th>Delete</th>
                <!-- <th>Created At</th>
                <th>Updated At</th> -->
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Options</th>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Delete</th>
                <!-- <th>Created At</th>
                <th>Updated At</th> -->
              </tr>
            </tfoot>
            <tbody>
              @foreach($permissions as $permission)
              <tr>
              
                <td>{{$permission->id}}</td>
                <td><a href="{{route('permissions.edit', $permission->id)}}">{{$permission->name}}</a></td>
                <td>{{$permission->slug}}</td>
                <td>
                  <form method="post" action="{{route('permissions.destroy',$permission->id)}}">
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