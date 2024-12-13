<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        th {
        text-align: center;}
        td {
            text-align: center;}
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
        <p class="text-center"><b>Data Rooms</b></p>
          <table class="table table-striped" border="1">
            <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Room Name</th>
                <th scope="col">Price</th>
                <th scope="col">Room Type</th>
                <th scope="col">Wifi</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $data)
              <tr class="text-center">
                <td scope="row">{{ $data->id }}</td>
                <td scope="row">
                  <img src="room/{{ $data->image }}" alt="Room Image" style="width: 130px; height: auto;" />
                </td>
                <td scope="row">{{ $data->room_title }}</td>
                <td scope="row">Rp {{ $data->price }} </td>
                <td scope="row">{{ $data->room_type }}</td>
                <td scope="row">{{ $data->wifi }}</td>
                <td scope="row">{!! Str::limit($data->description,50)!!}</td>
                <td scopre="row" style="text-align:center">
                    <a onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger"  href="{{url('delete_room',$data->id)}}">Delete</a><br></br>
                    <a class="btn btn-warning"  href="{{url('update_room',$data->id)}}">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="text-center" style="padding-top:20px;"><a class="btn btn-warning"   href="{{url('room_pdf')}}">Print PDF</a></div>
        </div>
      </div>
    </div>
    @include('admin.footer')
  </body>
</html>
