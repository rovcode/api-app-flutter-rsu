@extends('layouts.menuapp')
@section('content')
    <!-- loader -->
    <div class="loader-wrap">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>
    <!--  loader end -->
    @include('./snippets/header')  
        <!-- wrapper -->	
        <div id="wrapper">
            <!--content -->  
            <div class="content">
                <!--section --> 
                <section id="sec1">
                    <!-- container -->
                    <div class="container">
                        <!-- profile-edit-wrap -->
                        <div class="profile-edit-wrap">
                            {{-- <div class="profile-edit-page-header">
                                <h2>Mi Suscripción </h2>
                                
                            </div> --}}
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="dashboard-list-box fl-wrap">                                        
                                        <div class="dashboard-header fl-wrap">                                            
                                                <h3>Recetas Sugeridas</h3>                                         
                                        </div>
                                        
                                        <!-- dashboard-list end-->    
                                        <div class="dashboard-list">
                                            <div class="dashboard-message">
                                                <span class="new-dashboard-item">Nueva</span>
                                                <div class="dashboard-listing-table-image">
                                                    <a href="listing-single.html"><img src="https://cdne.ojo.pe/redactor/uploads/2018/06/26/img_tallarines_verdes_con_espinaca_y_albahaca_59606_paso_0_600.jpg" alt=""></a>
                                                </div>
                                                <div class="dashboard-listing-table-text">
                                                    <h4><a href="listing-single.html">Tallarines Verdes</a></h4>
                                                    <span class="dashboard-listing-table-address"><i class="fa fa-heartbeat"></i><a  href="#">Te ayuda a bajar de peso</a></span>
                                                    <div class="listing-rating card-popup-rainingvis fl-wrap" data-starrating2="5">
                                                        <span>Veces tomada 100</span>
                                                    </div>
                                                    <ul class="dashboard-listing-table-opt  fl-wrap">
                                                        <li><a href="ingredientes">Pedir <i class="fa fa-pencil-square-o"></i></a></li>
                                                        <li><a href="detalles" class="del-btn">Detalles <i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- dashboard-list end-->
                                    </div>
                                    <!-- pagination-->
                                    {{-- <div class="pagination">
                                        <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                        <a href="#">1</a>
                                        <a href="#" class="current-page">2</a>
                                        <a href="#">3</a>
                                        <a href="#">4</a>
                                        <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                    </div> --}}
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