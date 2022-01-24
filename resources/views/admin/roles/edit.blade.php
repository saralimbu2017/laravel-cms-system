<x-admin-master> 
  @section('content')

    <h1>Edit Role: {{$role->name}}</h1>
    <form method="post" action="{{route('roles.update', $role->id)}}">
      @csrf
      @method('PUT')
      
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$role->name}}">
      </div>

      <button class="btn btn-primary">Update</button>
    </form>
  @endsection

</x-admin-master> 
