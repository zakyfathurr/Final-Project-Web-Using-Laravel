<div  class="our_room" id="room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Discover a variety of thoughtfully designed rooms, each offering modern amenities, cozy interiors, and a tranquil atmosphere to suit your needs. </p>
                  </div>
               </div>
            </div>            
            <div class="row">
            @foreach($room as $rooms)
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <img style="width:350px;height:200px" src="room/{{$rooms->image}}" alt="#"/>
                     </div>
                     <div class="bed_room">
                        <h3>{{$rooms->room_title}}</h3>
                        <p>{!! Str::limit($rooms->description,100) !!} </p>
                        <a class="btn btn-primary" href="{{url('room_details',$rooms->id)}}">Room Details</a>
                     </div>
                  </div>
               </div>
            @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
