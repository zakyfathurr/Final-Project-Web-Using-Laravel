<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        td {
        padding-top: 10px; 
        padding-bottom:10px}
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
                <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">@csrf
            <p class="text-center"><b>Create Room</b></p>
            <div class="input-group mb-3">
                            
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Room Title</span>
            </div>
            <input type="text" class="form-control" name="room_title" placeholder="Room Title" aria-label="Room Title" aria-describedby="basic-addon1">
            </div>

            <!--  -->
            <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
            </div>
            <div><br></div>
            <!--  -->
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Price</span>
            </div>
            <input name="price" type="number" class="form-control" aria-label="Amount (to the nearest Rupiah)">
            <div class="input-group-append">
                <span class="input-group-text">Rupiah</span>
            </div>
            </div>
            <!--  -->
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Room Type</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="type">
                <option selected value="regular">Regular</option>
                <option value="premium">Premium</option>
                <option value="deluxe">Deluxe</option>
            </select>
            </div>

            <!--  -->
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Free wifi</label>
            </div>
            <select name="wifi" class="custom-select" id="inputGroupSelect01">
                <option selected value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            </div>

            <!--  -->
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Image Room</span>
            </div>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <div class="text-center"> 
                <input type="submit" class="btn btn-secondary" value="Add Room">
            </div>
            

            
            

          </div>
        </div>
    </div>
    @include('admin.footer')
  </body>
</html>