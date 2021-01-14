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
    .geodir-category-img img{
        height: 254px !important;
        width: 400px !important;
    }
  </style>

    <!--  loader end -->
    @include('./snippets/header')


    <!-- Main   -->
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
                <div class="section-title">
                    <h2>Recetas Sugeridas</h2>
                    <div class="section-subtitle">{{ Auth::user()->name }}</div>
                    <span class="section-separator"></span>
                    <p>Sugerencias de nuestros nutricionistas y chefts, recuerda puedes filtrar otras recetas.</p><br>
                    <a  href="#" class="btn  big-btn circle-btn dec-btn  color-bg flat-btn  modal-open">Filtrar Receta<i class="fa fa-eye"></i></a>
                </div>
            </div>
            <!-- carousel -->
            <div class="list-carousel fl-wrap card-listing ">
                <!--listing-carousel-->
                <div class="listing-carousel  fl-wrap ">
                    <!--slick-slide-item-->
                    <div class="slick-slide-item">
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="data:image/jpeg;base64,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" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="ingredientes">Pedirla</a>
                                    <div class="listing-avatar"><a href="#"><img src="https://www.tu-app.net/blog/wp-content/uploads/2020/08/informacion-montar-una-franquicia-icono.png" alt=""></a>
                                        <span class="avatar-tooltip">Nutricionista: <strong>Miguel Arias</strong>
                                            <br> Chef: <strong>Nelson Mandela</strong></span>
                                    </div>
                                    <h3><a href="listing-single.html">Seco de carnes rojas</a></h3>
                                    <p>Aumenta tu emoglobina con el ingrediente1, preparalos rápido y sin costos elevados </p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <span>(7 recomendaciones)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> 3 bodegas</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end-->
                    </div>
                    <!--slick-slide-item end-->
                    <!--slick-slide-item-->
                    <div class="slick-slide-item">
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="https://static.vix.com/es/sites/default/files/styles/large/public/imj/elgranchef/e/ensalada-para-acompanar-carnes-10.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="ingredientes">Pedirla</a>
                                    <div class="listing-avatar"><a href="#"><img src="https://www.tu-app.net/blog/wp-content/uploads/2020/08/informacion-montar-una-franquicia-icono.png" alt=""></a>
                                        <span class="avatar-tooltip">Nutricionista: <strong>Miguel Arias</strong>
                                            <br> Chef: <strong>Nelson Mandela</strong></span>
                                    </div>
                                    <h3><a href="listing-single.html">Ensalda Oriental</a></h3>
                                    <p>Aumenta tu emoglobina con el ingrediente1, preparalos rápido y sin costos elevados </p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <span>(7 recomendaciones)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> 3 bodegas</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end-->
                    </div>
                    <!--slick-slide-item end-->
                    <!--slick-slide-item-->
                    <div class="slick-slide-item">
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="https://i.pinimg.com/originals/69/6b/0d/696b0d86cf1caa027493458106839b56.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="ingredientes">Pedirla</a>
                                    <div class="listing-avatar"><a href="#"><img src="https://www.tu-app.net/blog/wp-content/uploads/2020/08/informacion-montar-una-franquicia-icono.png" alt=""></a>
                                        <span class="avatar-tooltip">Nutricionista: <strong>Miguel Arias</strong>
                                            <br> Chef: <strong>Nelson Mandela</strong></span>
                                    </div>
                                    <h3><a href="listing-single.html">Seco de carnes rojas</a></h3>
                                    <p>Aumenta tu emoglobina con el ingrediente1, preparalos rápido y sin costos elevados </p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <span>(7 recomendaciones)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> 3 bodegas</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end-->
                    </div>
                    <!--slick-slide-item end-->
                        <!--slick-slide-item-->
                        <div class="slick-slide-item">
                            <!-- listing-item -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <img src="https://www.hola.com/imagenes/cocina/noticiaslibros/20210103181994/aperitivos-entrantes-ligeros-noche-de-reyes/0-906-354/estrellitas-queso-azul-huevas-trucha-c.jpg" alt="">
                                        <div class="overlay"></div>
                                        <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <a class="listing-geodir-category" href="ingredientes">Pedirla</a>
                                        <div class="listing-avatar"><a href="#"><img src="https://www.tu-app.net/blog/wp-content/uploads/2020/08/informacion-montar-una-franquicia-icono.png" alt=""></a>
                                            <span class="avatar-tooltip">Nutricionista: <strong>Miguel Arias</strong>
                                                <br> Chef: <strong>Nelson Mandela</strong></span>
                                        </div>
                                        <h3><a href="listing-single.html">Seco de carnes rojas</a></h3>
                                        <p>Aumenta tu emoglobina con el ingrediente1, preparalos rápido y sin costos elevados </p>
                                        <div class="geodir-category-options fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                <span>(7 recomendaciones)</span>
                                            </div>
                                            <div class="geodir-category-location"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> 3 bodegas</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end-->
                        </div>
                        <!--slick-slide-item end-->
                            <!--slick-slide-item-->
                    <div class="slick-slide-item">
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="https://i.blogs.es/828228/samosas/450_1000.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="ingredientes">Pedirla</a>
                                    <div class="listing-avatar"><a href="#"><img src="https://www.tu-app.net/blog/wp-content/uploads/2020/08/informacion-montar-una-franquicia-icono.png" alt=""></a>
                                        <span class="avatar-tooltip">Nutricionista: <strong>Miguel Arias</strong>
                                            <br> Chef: <strong>Nelson Mandela</strong></span>
                                    </div>
                                    <h3><a href="listing-single.html">Seco de carnes rojas</a></h3>
                                    <p>Aumenta tu emoglobina con el ingrediente1, preparalos rápido y sin costos elevados </p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <span>(7 recomendaciones)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> 3 bodegas</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end-->
                    </div>
                    <!--slick-slide-item end-->   
                </div>
                <!--listing-carousel end-->
                {{-- <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div> --}}
            </div>
            <!--  carousel end-->
          </section>
         <!-- section end -->
        <div class="content">
            <!--section -->
            <section id="sec1">
                <!-- container -->
                <div class="container">
                    <!-- profile-edit-wrap -->
                    <div class="profile-edit-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="dashboard-list-box fl-wrap activities">
                                    <div class="dashboard-header fl-wrap">
                                        <h3>Actividades recientes</h3>
                                    </div>
                                    <!-- dashboard-list end-->
                                    <div class="dashboard-list">
                                        <div class="dashboard-message">
                                            <span class="new-dashboard-item"><i class="fa fa-times"></i></span>

                                            <div class="dashboard-message-text">
                                                <p><i class="fa fa-check"></i> Su delivery a llegado <a href="#">
                                                        calificar</a> ! </p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- dashboard-list end-->
                                    <!-- dashboard-list end-->
                                    <div class="dashboard-list">
                                        <div class="dashboard-message">
                                            <span class="new-dashboard-item"><i class="fa fa-times"></i></span>

                                            <div class="dashboard-message-text">
                                                <p><i class="fa fa-heart"></i>Su bodega <a href="#">Mi tiendita</a> está
                                                    abierta!</p>
                                            </div>                                            
                                        </div>
                                    </div>                                    
                                    <!-- dashboard-list end-->
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
        </div>
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
                                <form method="post"  name="registerform">
                                    <div class="col-md-12">
                                        <label>Categoria</label>
                                        <select data-placeholder="All Categories" class="chosen-select" >
                                            <option>Todas</option>
                                            <option>Veganas</option>
                                            <option>Sin carnes</option>
                                            <option>Con menestras</option>
                                            <option>Verduras</option>
                                        </select>
                                     </div>
                                </form>
                                <button type="submit"     class="log-submit-btn"  ><span>Buscar</span></button>
                            </div>
                        </div>
                        <div class="tab">
                            <div id="tab-2" class="tab-content">
                                <div class="custom-form">
                                    <form method="post"   name="registerform" class="main-register-form" >
                                        <div class="col-md-12">
                                            <label>Categoria</label>
                                            <select data-placeholder="All Categories" class="chosen-select" >
                                                <option>Todas</option>
                                                <option>Veganas</option>
                                                <option>Sin carnes</option>
                                                <option>Con menestras</option>
                                                <option>Verduras</option>
                                            </select>
                                         </div>
                                        <button type="submit"     class="log-submit-btn"  ><span>Buscar</span></button>
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
