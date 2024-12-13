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
                                 <a class="nav-link" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#room">Our room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#gallery">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact Us</a>
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