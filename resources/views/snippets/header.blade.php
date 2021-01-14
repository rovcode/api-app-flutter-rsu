  <!-- header  -->
        <header class="main-header dark-header2 fs-header sticky">
            <div class="header-inner">
               
                <div class="logo-holder">
                    <a href="dashboard"><img src="https://delifazil.com/assets/img/logo.png" alt=""></a>
                </div>
                {{-- <div class="header-search vis-header-search">
                    <div class="header-search-input-item">
                        <input type="text" placeholder="Bajar de peso" value=""/>
                    </div>
                    <div class="header-search-select-item">
                        <select data-placeholder="Categorías" class="chosen-select" >
                            <option>Todas las categorias</option>
                            <option>Bajar de peso</option>
                            <option>Colesterol</option>
                            <option>Anemia</option>
                            <option>Subir de peso</option>
                            <option>Otros</option>
                        </select>
                    </div>
                    <button class="header-search-button" onclick="window.location.href='listing.html'">Buscar</button>
                </div>
                <div class="show-search-button"><i class="fa fa-search"></i> <span>Search</span></div> --}}
                
                <div class="header-user-menu">                    
                    <div class="header-user-name">
                        <span><img src="https://delifazil.com/assets/img/startup/team/r2.png" alt=""></span>
                        {{ Auth::user()->name }}
                    </div>
                    <ul>
                        <li><a href="perfil"> Perfil</a></li>
                        <li><a href="pedidos"> Mis pedidos</a></li>
                        <li><a href="suscripcion"> Mi suscripción</a></li>
                        <li><a href="otros"> Otros </a></li>
                        <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Cerrar Sesión') }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        
                        </li>
                    </ul>
                </div>
                <!-- nav-button-wrap--> 
                 <div class="nav-button-wrap color-bg" style="background-color: transparent">
                    <div class="nav-button" >
                        <i class="fa fa-ellipsis-v" style="font-size:30px;margin-top:-10px" aria-hidden="true"></i>
                      
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  navigation --> 
                <div class="nav-holder main-menu">
                    <nav>
                        <ul>                         
                            <li>
                                <a href="">Beneficios</a>
                            </li>                            
                            <li>
                                <a href="">Ayuda</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
            </div>
        </header>
        <!--  header end -->	