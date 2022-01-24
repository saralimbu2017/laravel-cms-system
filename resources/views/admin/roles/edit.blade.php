<x-admin-master> 
  @section('content')

    @if(session()->has('role-updated'))
      <div class="alert alert-success">
        {{session('role-updated')}}
      </div>

    @endif
  <div class="row">
   
  </div>
  <div class="row">
    <div class="col-sm-6">
      <h1>Edit Role: {{$role->name}}</h1>
      <form method="post" action="{{route('roles.update', $role->id)}}">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" value="{{$role->name}}">
        </div>

        <button class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">

    
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Avatar</th>
                      <th>Name</th>
                      <th>Registered date</th>
                      <th>Update profile date</th>
                      <th>Update profile date</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Avatar</th>
                      <th>Name</th>
                      <th>Registered date</th>
                      <th>Update profile date</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}} </td>
                      <td><a href="{{route('roles.edit', $role->id)}}"></a>{{$user->username}} </td>
                      <td><img height="50px" src="{{$user->avatar}}" alt=""> </td>
                      <td>{{$user->name}} </td>
                      <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}  </td>
                      <td>{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans() }} </td>
                      <td>
                        <form method="POST" action="{{route('user.destroy', $user->id)}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>

                    @endforeach

                  </tbody>
                 
                </table>
              </div>
            </div>
          </div>
          <div class="dflex">
            <div class="mx-auto">
             
            </div>
          </div>


    </div>
  </div>
  @endsection

</x-admin-master> 
