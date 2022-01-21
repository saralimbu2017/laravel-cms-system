<x-admin-master>
  @section('content')
      <div class="row">
          <div class="col-sm-3">
            <form method="post" action="{{route('roles.store')}}">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" class="form-control">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Create</button>
                </form>
          </div>
          <div class="col-sm-9">
            <h6>Roles</h6>
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
              
              <tr>
                <td><input type="checkbox"></td>
                
                
                <td></td>
                <td></td>
                <td></td>
                <td></td> 
                <td></td>
                  
                
              </tr>
              
            </tbody>
          </table>
          </div>
    
      </div>
  @endsection
</x-admin-master>