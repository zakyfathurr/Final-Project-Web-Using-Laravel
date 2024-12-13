<div class="page-content">
  <div class="page-header">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom text-center">Dashboard</h2>
    </div>
  </div>
  
  <section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="our_room">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="titlepage">
                  <h2 class="text-center">Our Rooms</h2>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              @foreach($room as $rooms)
                <div class="col-md-4 col-sm-6 mb-4">
                  <div id="serv_hover" class="room">
                    <div class="room_img">
                      <img style="width:100%;height:auto" src="room/{{$rooms->image}}" alt="#"/>
                    </div>
                    <div class="bed_room">
                      <div class="text-center">
                        <h3>{{$rooms->room_title}}</h3>
                        <p>{!! Str::limit($rooms->description, 100) !!}</p>
                        <a class="btn btn-primary" href="{{url('view_room')}}">Room Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
