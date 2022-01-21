<x-admin-master>
  @section('content')
      <div class="row">
          <div class="col-sm-3">
            <form method="post" action="">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                </form>
          </div>
          <div class="col-sm-9">
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