@extends('layouts.menuapp')
@section('content')
    <!-- loader -->
    <div class="loader-wrap">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>
    <style>
        .section-title {
            padding-bottom: 30px !important;
        }

        .geodir-category-img img {
            height: 254px !important;
            width: 400px !important;
        }
        .msguser{
            font-size: 15px !important;
        }
    </style>
     
    <!--  loader end -->
    @include('./snippets/alterno')
    <script type="text/javascript">
        var sc=screen.width;
        if(sc>768){
           document.write("");
        }
     </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Main   -->
    {{-- <script>
        /* SLICK CAROUSEL */
        $(document).ready(function() {
            $(".slick-track").slick();
        });
        /*

    </script> --}}
    <!-- wrapper -->
    <div id="wrapper">
        {{-- <div class="content">
            <!--section -->
            <section id="sec1">
                <!-- container -->
                <div class="container">
                    <!-- profile-edit-wrap -->
                    <div class="profile-edit-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- profile-edit-container-->
                                <div class="profile-edit-container">
                                    <div class="profile-edit-header fl-wrap">
                                        <h4>Bievenido, <span>{{ Auth::user()->name }}</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--profile-edit-wrap end -->
                </div>
                <!--container end -->
            </section>
            <!-- section end -->
            <div class="limit-box fl-wrap"></div>
        </div> --}}
        <!--content -->
        <!--section -->
        <section class="gray-section">
            <div class="container">
                <div class="notification success fl-wrap">
                    @if($suscription=="Activo")
                     <p class="msguser">Tu suscripción está activa y vence en <a href="perfil" style="color: #212121">{{$terminasuscription}}</a> días!</p>                    
                    @endif
                    <a class="notification-close" href="#"><i class="fa fa-times"></i></a> 
                </div>
                <div class="section-title">
                    <h2>Recetas Sugeridas  </h2>
                        
                    <div class="section-subtitle">{{ Auth::user()->name }}</div>
                    <span class="section-separator"></span>
                    <p>Sugerencias de nuestros nutricionistas y chefts, recuerda puedes filtrar otras recetas.</p><br>
                    <a href="#" class="btn  big-btn circle-btn dec-btn  color-bg flat-btn  modal-open">Filtrar Receta<i
                            class="fa fa-eye"></i></a>
                </div>
            </div>

            <!-- carousel -->
           
            <div class="list-carousel fl-wrap card-listing ">
                <!--listing-carousel-->
                <div class="listing-carousel  fl-wrap ">
                   
                    @foreach ($recetas as $receta)
                        <!--slick-slide-item-->
                        <div class="slick-slide-item slick-track" id="recet">
                            <!-- listing-item -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <img src="https://i.pinimg.com/originals/69/6b/0d/696b0d86cf1caa027493458106839b56.jpg"
                                            alt="">
                                        <div class="overlay"></div>
                                        <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <a class="listing-geodir-category" href="/checkout/{{ $receta->id }}">Pedirla</a>
                                        <div class="listing-avatar"><a href="#"><img
                                                    src="https://www.tu-app.net/blog/wp-content/uploads/2020/08/informacion-montar-una-franquicia-icono.png"
                                                    alt=""></a>
                                            <span class="avatar-tooltip">Nutricionista:
                                                <strong>{{ $receta->nutritionists }}</strong>
                                                <br> Chef: <strong>{{ $receta->chef }}</strong></span>
                                        </div>
                                        <h3><a href="#">{{ $receta->name }}</a></h3>
                                        <p>{{ $receta->description }}</p>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="{{ $receta->calification }}">
                                                <span>({{ $receta->calification }} recomendaciones)</span>
                                            </div>
                                            <div class="geodir-category-location"><a href="#"><i class="fa fa-home"
                                                        aria-hidden="true"></i> 3 bodegas</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end-->
                        </div>
                        <!--slick-slide-item end-->
                    @endforeach


                </div>
                <!--listing-carousel end-->
                {{-- <div class="swiper-button-prev sw-btn"><i
                        class="fa fa-long-arrow-left"></i></div>
                <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                --}}
            </div>
            <!--  carousel end-->
        </section>
    </div>
    <!-- wrapper end -->

    <!--register form -->
    <div class="main-register-wrap modal">
        <div class="main-overlay"></div>
        <div class="main-register-holder">
            <div class="main-register fl-wrap">
                <div class="close-reg"><i class="fa fa-times"></i></div>
                <h3>Seleccione Filtros</span></h3>
                <div id="tabs-container">
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1">Nutritivas</a></li>
                        <li><a href="#tab-2">Preparación Rápida</a></li>
                    </ul>
                    <div class="tab">
                        <div id="tab-1" class="tab-content">
                            <div class="custom-form">
                                <form method="post" name="registerform">
                                    <div class="col-md-12">
                                        <label>Categoria</label>
                                        <select data-placeholder="All Categories" class="chosen-select">
                                            <option>Todas</option>
                                            <option>Veganas</option>
                                            <option>Sin carnes</option>
                                            <option>Con menestras</option>
                                            <option>Verduras</option>
                                        </select>
                                    </div>
                                </form>
                                <button type="submit" class="log-submit-btn"><span>Buscar</span></button>
                            </div>
                        </div>
                        <div class="tab">
                            <div id="tab-2" class="tab-content">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form">
                                        <div class="col-md-12">
                                            <label>Categoria</label>
                                            <select data-placeholder="All Categories" class="chosen-select">
                                                <option>Todas</option>
                                                <option>Veganas</option>
                                                <option>Sin carnes</option>
                                                <option>Con menestras</option>
                                                <option>Verduras</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="log-submit-btn"><span>Buscar</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->



@endsection
