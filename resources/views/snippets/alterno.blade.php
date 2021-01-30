<link type="text/css" rel="stylesheet" href="{{ asset('css/menudelifazil.css') }}">
<div class="paradeiser" style="bottom: 0px !important">
    <a href="../dashboard">
        <i class="fa fa-home" style="font-size: 20px;color:#212121"></i>
    </a>
    <a href="../dashboard"">
    {{-- <i class=" fa fa-user" aria-hidden="true"
        style="font-size: 20px;color:#212121"></i> --}}
        <img src="https://delifazil.com/assets/img/logo.png" alt="" height="20" width="100">
    </a>
    <a href="../perfil">
        <i class="fa fa-cogs" aria-hidden="true" style="font-size: 20px;color:#212121"></i>
    </a>

</div>
<div class="header-inner">
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
            <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesión') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
        </ul>
    </div>
    {{--
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap color-bg" style="background-color: transparent">
        <div class="nav-button">
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
    </div> --}}
    <!-- navigation  end -->
</div>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    (function() {
        var paradeiser_open;

        paradeiser_open = false;

        $('.paradeiser_dropdown :not(.paradeiser_children)').on('click', function(event) {
            var paradeiser_dropdown;
            paradeiser_dropdown = $(this);
            if (paradeiser_dropdown.parents('.paradeiser_children').length) {

            } else {
                event.preventDefault();
            }
            return $('.paradeiser_dropdown .paradeiser_children, #paradeiser-greybox').toggleClass(
                'visible');
        });

        $('<div id="paradeiser-greybox"></div>').insertAfter('.paradeiser').on('click', function(event) {
            return $('.paradeiser_dropdown .paradeiser_children, #paradeiser-greybox').removeClass(
                'visible');
        });

    }).call(this);

</script>
