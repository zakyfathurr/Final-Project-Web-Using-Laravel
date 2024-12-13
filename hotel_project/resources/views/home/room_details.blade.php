<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public"> 
      <!-- basic -->
       @include('home.css')
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <style>
        input{width: 100%;}
       </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{url('/')}}"><img src="images/logohotel.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">Our room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">Contact Us</a>
                              </li>


                              
                              

                              <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white"> -->
                                 @if (Route::has('login'))
                                    <!-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> -->
                                       @auth
                                       <li class="nav-item"">
                                             <a class="btn btn-danger" href="{{route('logout')}}">logout</a>
                                          </li>
                                          @if (Auth::user()->usertype === 'admin')
                                             <li class="nav-item" style="padding-left:15px">
                                                <a class="btn btn-primary"  href="{{route('home')}}">Admin Page</a>
                                             </li>
                                          @endif
                                       @else
                                          <li class="nav-item" style="padding-right : 5px">
                                             <a class="btn btn-success" href="{{url('login')}}">LOGIN</a>
                                          </li>
                                          <li class="nav-item" style="padding-left : 5px">
                                             <a class="btn btn-primary" href="{{url('register')}}">REGISTER</a>
                                          </li>
                                          
                                             @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                                             @endif
                                       @endauth
                                    </div>
                                 @endif
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>


      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Discover a variety of thoughtfully designed rooms, each offering modern amenities, cozy interiors, and a tranquil atmosphere to suit your needs.</p>
                  </div>
               </div>
            </div>            
            <div class="row">
               <div class="col-md-7">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <img  style="width:350px;height:auto;padding-top:50px" src="/room/{{$room->image}}" alt="#"/>
                     </div>
                     <div class="bed_room">
                        <h3>{{$room->room_title}}</h3>
                        <p style="padding : 12px"> {{$room->description}} </p>
                        <h4 style="padding : 12px">Free Wifi ? {{$room->wifi}}</h4>
                        <h4 style="padding : 12px">Room Type : {{$room->room_type}}</h4>
                        <h3 style="padding : 12px">Price :  Rp {{$room->price}}</h3>
                     </div>
                  </div>
               </div>

               <div class="col-md-5"  style="margin-top:3% ">
                <div class="book_room" style="padding-top:15%;padding-bottom:20%">
                    <h1 class="text-center" style="color:grey;margin:20px">Book Your Room</h1>
                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                    @endif
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif

                    <!-- booking form -->
                     <form action="{{url('add_booking',$room->id)}}" method="post">
                        @csrf
                        
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        </div>
                        <input type="text" class="form-control" name="name" required placeholder="Full Name" aria-label="full name" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email</span>
                        </div>
                        <input placeholder="your email" name="email" required type="email" class="form-control"></input>
                    </div>
                    <!--  -->

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Phone</span>
                        </div>
                        <input placeholder="your number" required name="phone" type="tel"  class="form-control"></input>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Check-In</label>
                        </div>
                        <input name="checkIn" type="date"required class="form-control"  id="checkIn"></input>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Check-Out</label>
                        </div>
                        <input name="checkOut" type="date" required class="form-control"  id="checkOut"></input>
                    </div>

        
                    <div class="text-center"> 
                            <input type="submit" class="btn btn-primary" value="Book Room">
                    </div>
                    </form>

                    </div>
                
                </div>

            </div>
         </div>
      </div>





      
      @include('home.footer')
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
            $(function () {
                var dtToday = new Date();
                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();

                if (month < 10) month = '0' + month.toString();
                if (day < 10) day = '0' + day.toString();

                var maxDate = year + '-' + month + '-' + day;

                $('#checkIn').attr('min', maxDate);
                $('#checkOut').attr('min', maxDate);

                // Event listener untuk checkIn
                $('#checkIn').on('change', function () {
                    var checkInDate = $(this).val();
                    $('#checkOut').attr('min', checkInDate);
                });

            });
            </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        </script>
   </body>
</html>