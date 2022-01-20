<x-admin-master>
  @section('content')
    <h1>User Profile for : {{$user->name}}</h1>
      <div class="row">
        <div class="col-sm-6">
          <form method="post" action="{{route('user.profile.update',$user->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
              <img class="img-profile rounded-circle" src="{{$user->avatar}}" height="100px" alt="">

            </div>
            <div class="form-group">
              <input type="file" name="avatar">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input 
              type="text" 
              name="username" 
              class="form-control
              @error('username')
                      is-invalid
              @enderror"
              id="username"  
              value="{{$user->username}}">

              @error('username')
                <div class="alert alert-danger">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name"  value="{{$user->name}}">
              @error('name')
                <div class="alert alert-danger">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" class="form-control" id="email" value="{{$user->email}}">
              @error('email')
                <div class="alert alert-danger">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" >
              @error('password')
                <div class="alert alert-danger">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="password-confirm">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            

          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          datatable
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Options</th>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Attach</th>
                      <th>Detach</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Options</th>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Attach</th>
                      <th>Detach</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($roles as $role)
                    <tr>
                      <td><input type="checkbox"
                                 @foreach($user->roles as $user_role)
                                    @if($user_role->slug == $role->slug)
                                      checked
                                    @endif
                                  @endforeach  
                      
                      ></td>
                      <td>{{$role->id}}</td>
                      <td>{{$role->name}}</td>
                      <td>{{$role->slug}}</td>
                      <td>
                        <form method="post" action="{{route('user.role.attach',$user)}}" >
                          @method('PUT')
                          @csrf
                          <input type="text" name="role" value="{{$role->id}}">
                          <button type="submit" class="btn btn-primary">Attach</button>
                        </form>
                        </td> 
                      <td>
                        <form method="post" action="{{route('user.role.detach',$user)}}" >
                          @method('PUT')
                          @csrf
                          <input type="text" name="role" value="{{$role->id}}">
                        <button type="submit" class="btn btn-danger">Detach</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
  @endsection

</x-admin-master>