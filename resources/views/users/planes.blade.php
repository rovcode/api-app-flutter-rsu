@extends('layouts.menuapp')
@section('content')
    <!-- loader -->
    <div class="loader-wrap">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>
    <!--  loader end -->
    @include('./snippets/alterno')
    <!-- wrapper -->
    <div id="wrapper">
        <!--  content -->
        <div class="content">
            <!--  section   -->
            <section id="sec2" style="padding: 10px 0 !important;">
                <div class="container">
                   
                    <div class="section-title">
                        <h2> PLANES</h2>
                        <div class="section-subtitle">Planes delifazil</div>
                        <span class="section-separator"></span>
                        <div class="notification success fl-wrap" id="msg">
                           <p  style="font-size: 15px" id="msgp">Recuerda es gratis el primer mes, ¡Pruébalo!</p> 
                           <a class="notification-close" href="#"><i class="fa fa-times"></i></a> 
                       </div>
                    </div> 
                    <div class="pricing-wrap fl-wrap">
                        <!-- price-item-->
                        @foreach ($planes as $item)
                            <!-- price-item-->
                            <div class="price-item" id="plan{{ $item->id }}">
                                <input id="plan_id{{ $item->id }}" name="" type="hidden" value="{{ $item->id }}">
                                <input id="user_id{{ $item->id }}" name="" type="hidden" value="{{ Auth::user()->id }}">
                                <div class="price-head op1">
                                    <h3>{{ $item->name }}</h3>
                                </div>
                                <div class="price-content fl-wrap">
                                    <div class="price-num fl-wrap">
                                        <span class="curen">S/</span>
                                        <span class="price-num-item">{{ $item->costo }}.00</span>
                                        <div class="price-num-desc">Per mes</div>
                                    </div>
                                    <div class="price-desc fl-wrap">
                                        <ul>
                                            <li>{{ $item->beneficio1 }}</li>
                                            <li>{{ $item->beneficio2 }}</li>
                                            <li>{{ $item->beneficio3 }}</li>
                                            <li>{{ $item->beneficio4 }}</li>
                                        </ul>
                                        <a id="{{ $item->id }}" href="#"
                                            class="price-link btnSuscription">Suscribirme</a>
                                    </div>
                                </div>
                            </div>
                            <!-- price-item end-->
                        @endforeach

                        <!-- price-item-->
                        {{-- <div class="price-item best-price">
                            <div class="price-head op2">
                                <h3>Extended</h3>
                            </div>
                            <div class="price-content fl-wrap">
                                <div class="price-num fl-wrap">
                                    <span class="curen">$</span>
                                    <span class="price-num-item">99</span>
                                    <div class="price-num-desc">Per month</div>
                                </div>
                                <div class="price-desc fl-wrap">
                                    <ul>
                                        <li>Ten Listings</li>
                                        <li>Lifetime Availability</li>
                                        <li>Featured In Search Results</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                    <a href="#" class="price-link">Choose Extended</a>
                                    <div class="recomm-price">
                                        <i class="fa fa-check"></i>
                                        <span class="clearfix"></span>
                                        Recommended
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- price-item end--> --}}
                    </div>
                    <!-- about-wrap end  -->
                    <span class="fw-separator"></span>
                    <!-- features-box-container -->
                    {{-- <div class="features-box-container fl-wrap row">
                        <!--features-box -->
                        <div class="features-box col-md-4">
                            <div class="time-line-icon">
                                <i class="fa fa-medkit"></i>
                            </div>
                            <h3>24 Hours Support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla
                                finibus lobortis pulvinar. Donec a consectetur nulla. </p>
                        </div>
                        <!-- features-box end  -->
                        <!--features-box -->
                        <div class="features-box col-md-4">
                            <div class="time-line-icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h3>Admin Panel</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla
                                finibus lobortis pulvinar. Donec a consectetur nulla. </p>
                        </div>
                        <!-- features-box end  -->
                        <!--features-box -->
                        <div class="features-box col-md-4">
                            <div class="time-line-icon">
                                <i class="fa fa-television"></i>
                            </div>
                            <h3>Mobile Friendly</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla
                                finibus lobortis pulvinar. Donec a consectetur nulla. </p>
                        </div>
                        <!-- features-box end  -->
                    </div> --}}
                    <!-- features-box-container end  -->
                </div>
            </section>
            <!--  section end -->
            <div class="limit-box"></div>
        </div>
        <!--  content end -->
    </div>
    <!-- wrapper end -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#plan2").addClass('best-price');
            //validamos botones de plan
            startSuscription();

            function startSuscription() {
                var btnSuscription = document.querySelectorAll('.btnSuscription');
                for (let index = 0; index < btnSuscription.length; index++) {
                    btnSuscription[index].addEventListener('click', eventListener);
                }
            }

            function eventListener(event) {
                var data = (event.target.id);
                var myid = $("#" + data + "").attr('id');
                var plan_id = $("#plan_id" + myid + "").val();
                var user_id = $("#user_id" + myid + "").val();
                sendData(plan_id, user_id);
            }

            function sendData(plan_id, user_id) {
             
                // console.log(parameters);
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: 'suscription',
                    data: {'plan_id':plan_id,'user_id':user_id},                  
                    type: 'post',
                    success: function(response) {
                    console.log(response);                    
                    success();
                    setInterval(function() {
                        window.location.href="home";
                    },3000);
                   
                    },
                    error: function(error){
                       console.log(error);
                   }
            
                });
            }
            function success() {
            $("#msgp").html("Gracias..ya puedes disfrutar de delifazil!");
            $("#msg").css('background-color','#009624');
        }




        });

    </script>
@endsection
