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
        <!--content -->  
        <div class="content">
            <!--section --> 
            <section>
                <!-- container --> 
                <div class="container">
                    <!-- profile-edit-wrap -->
                    <div class="profile-edit-wrap">
                        {{-- <div class="profile-edit-page-header">
                            <h2>Perfil</h2>                            
                        </div> --}}
                        <div class="row" style="margin-bottom: 100px !important;">
                            <div class="col-md-2">
                                <div class="edit-profile-photo fl-wrap">
                                    <div class="change-photo-btn">
                                        <div class="photoUpload"  >
                                       <a style="color:white !important;margin-bottom:5px !important ;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        {{ __('Cerrar Sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-10">
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container">
                                    <div class="profile-edit-header fl-wrap">
                                        <br> <h4>Mi Cuenta</h4>
                                    </div>
                                    <div class="custom-form">
                                        <label>Nombres <i class="fa fa-user-o"></i></label>
                                        <input type="text" placeholder="" value="{{ Auth::user()->name }}"/>                                       
                                        <label>Usuario<i class="fa fa-envelope-o"></i>  </label>
                                        <input type="text" placeholder="mail" value="{{ Auth::user()->email }}"/>
                                        <label>Teléfono<i class="fa fa-phone"></i>  </label>
                                        <input type="text" placeholder="+7(123)987654" value="{{ Auth::user()->phone }}"/>
                                        <label> Dirección <i class="fa fa-map-marker"></i>  </label>
                                        <input type="text" placeholder="No definido" value=""/>
                                        {{-- <label> Website <i class="fa fa-globe"></i>  </label>
                                        
                                        <input type="text" placeholder="themeforest.net" value=""/>   --}}
                                        <label> Foto<i class="fa fa-whatsapp"></i>  </label>
                                        <div class="profile-edit-header fl-wrap">
                                            <div class="col-md-2">
                                                <div class="fl-wrap">
                                                    <img src="https://delifazil.com/assets/img/startup/team/r2.png" class="respimg" alt="">
                                                    <div class="change-photo-btn">
                                                        <div class="photoUpload">
                                                            <span><i class="fa fa-camera"></i></span>
                                                            <input type="file" class="upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                 
                                        </div>
                                        
                                        <label> Notes</label>                                              
                                        <textarea cols="40" rows="3" placeholder="About Me"></textarea>
                                    </div>
                                </div>
                                <!-- profile-edit-container end--> 
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container add-list-container">
                                    <div class="profile-edit-header fl-wrap">
                                        <h4>Plan Suscrito</h4>
                                    </div>
                                    <div class="custom-form">
                                        <div class="row">
                                            <!--col --> 
                                            <div class="col-md-4">
                                                <div class="add-list-media-header">
                                                    <label class="radio inline">                                                       
                                                        {{-- @if($plan->id==1) checked @endif --}}
                                                    <input type="radio" name="planuser" >
                                                    <span>Master Chef S/. 5.00 </span> 
                                                    </label>
                                                </div>
                                            </div>
                                            <!--col end--> 
                                            <!--col --> 
                                            <div class="col-md-4">
                                                <div class="add-list-media-header">
                                                    <label class="radio inline"> 
                                                    <input type="radio" name="planuser">
                                                    <span>Super Chef S/. 10.00</span> 
                                                    </label>
                                                </div>
                                            </div>
                                            <!--col end--> 
                                            <!--col --> 
                                            <div class="col-md-4">
                                                <div class="add-list-media-header">
                                                    <label class="radio inline"> 
                                                    <input type="radio" name="planuser" >
                                                    <span>Deli Cheff S/. 15.00</span> 
                                                    </label>
                                                </div>
                                            </div>
                                            <!--col end-->                                                                                      
                                        </div>    
                                    </div>
                                </div>
                                <!-- profile-edit-container end--> 
                                										
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container">
                                    <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                        <h4>Mis redes sociales</h4>
                                    </div>
                                    <div class="custom-form">
                                        <label>Facebook <i class="fa fa-facebook"></i></label>
                                        <input type="text" placeholder="https://www.facebook.com/" value=""/>
                                        <label>Twitter<i class="fa fa-twitter"></i>  </label>
                                        <input type="text" placeholder="https://twitter.com/" value=""/>                                      
                                        <label> Whatsapp <i class="fa fa-whatsapp"></i>  </label>
                                        <input type="text" placeholder="https://www.whatsapp.com" value=""/>
                                      
                                        <button class="btn  big-btn  color-bg flat-btn">Guardar Cambios <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                                <!-- profile-edit-container end-->                                        
                            </div>
                           
                        </div>
                    </div>
                    <!--profile-edit-wrap end -->
                </div>
                <!--container end -->
            </section>
            <!-- section end -->
            <div class="limit-box fl-wrap"></div>
        </div>
    </div>
    <!-- wrapper end -->

@endsection