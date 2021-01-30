@extends('layouts.menuapp')
@section('content')
    <!-- loader -->
    <div class="loader-wrap">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>
    <!--  loader end -->
    @include('./snippets/alterno')  
      <!-- ingredientes receta-->
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
                    <div class="profile-edit-page-header">
                        <h2>{{$receta->name}}</h2>                            
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-edit-container add-list-container">
                                <div class="profile-edit-header fl-wrap">
                                    <h4>Tipo pago</h4>
                                </div>
                                <div class="notification success fl-wrap">
                                    <p style="font-size: 15px">Este es el método de pago que usará en la bodega o al recibir el pedido</p>
                                    <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
                                </div>
                                <div class="custom-form">
                                    <div class="row">
                                        <!--col --> 
                                        <div class="col-md-4">
                                            <div class="add-list-media-header">
                                                <label class="radio inline"> 
                                                <input type="radio" name="gender">
                                                <span>Yape/Plin</span> 
                                                </label>
                                            </div>
                                        </div>
                                        <!--col end--> 
                                        <!--col --> 
                                        <div class="col-md-4">
                                            <div class="add-list-media-header">
                                                <label class="radio inline"> 
                                                <input type="radio" name="gender" >
                                                <span>Tarjeta</span> 
                                                </label>
                                            </div>
                                        </div>
                                        <!--col end--> 
                                        <!--col --> 
                                        <div class="col-md-4">
                                            <div class="add-list-media-header">
                                                <label class="radio inline"> 
                                                <input type="radio" name="gender" checked="">
                                                <span>Efectivo</span> 
                                                </label>
                                            </div>
                                        </div>
                                        <!--col end-->                                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                        <div class="col-md-12">                           
                            <!-- profile-edit-container-->                        
                            
                                <div class="profile-edit-container add-list-container">
                                    <div class="profile-edit-header fl-wrap">
                                        <h4>Lista de ingredientes</h4>
                                    </div>
                                    
                                    <div class="custom-form">
                                        <!-- act-widget-->
                                        <div class="act-widget fl-wrap">
                                            <div class="act-widget-header">
                                                <h4>{{$receta->ingredient1}}</h4>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked="">
                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- act-widget end-->
                                          <!-- act-widget-->
                                          <div class="act-widget fl-wrap">
                                            <div class="act-widget-header">
                                                <h4>{{$receta->ingredient2}}</h4>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="ingrediente2" checked="">
                                                    <label class="onoffswitch-label" for="ingrediente2">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- act-widget end-->
                                          <!-- act-widget-->
                                          <div class="act-widget fl-wrap">
                                            <div class="act-widget-header">
                                                <h4>{{$receta->ingredient3}}</h4>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="ingrediente3" checked="">
                                                    <label class="onoffswitch-label" for="ingrediente3">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- act-widget end-->
                                        <!-- act-widget-->
                                        <div class="act-widget fl-wrap">
                                            <div class="act-widget-header">
                                                <h4>{{$receta->ingredient4}}</h4>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="ingrediente4"  checked="">
                                                    <label class="onoffswitch-label" for="ingrediente4">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <!-- act-widget end-->
                                        <!-- act-widget-->
                                        <div class="act-widget fl-wrap">
                                            <div class="act-widget-header">
                                                <h4>{{$receta->ingredient6}}</h4>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3" checked="">
                                                    <label class="onoffswitch-label" for="myonoffswitch3">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <textarea cols="40" rows="3" placeholder="Nota al bodeguero"></textarea>
                                        </div>
                                        <!-- act-widget end-->
                                    </div>
                                </div>
                            <!-- profile-edit-container-->	
                            <div class="col-md-12">
                                <!-- profile-edit-container-->
                                <div class="profile-edit-container add-list-container">
                                    <div class="profile-edit-header fl-wrap">
                                        <h4>Datos Complementarios</h4>
                                    </div>
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Porciones</label>
                                                <select data-placeholder="All Categories" class="chosen-select" >
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Algun producto extra? <i class="fa fa-angle-right"></i></label>
                                                <input type="text" placeholder="Produco extra que desee pedir" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile-edit-container end-->
                            </div>		
                            <!-- profile-edit-container--> 
                            <div class="profile-edit-container">
                                <div class="custom-form">                                   
                                    <button onclick="window.location.href='../geolocation'" class="btn  big-btn  color-bg flat-btn">Enviar lista <i class="fa fa-angle-right"></i></button>
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