<x-admin-master>
  @section('content')

    <h1>Users</h1>

    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Avatar</th>
                      <th>Name</th>
                      <th>Registered date</th>
                      <th>Update profile date</th>
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
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}} </td>
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

  @endsection


  @section('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    
  @endsection
</x-admin-master>