<link type="text/css" rel="stylesheet" href="{{ asset('css/menudelifazil.css') }}">
<style>
    .c-modal {
        --i-close: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" fill="none"><line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" /></svg>');
        background-color: rgba(0, 0, 0, .45);
        color: hsl(162, 10%, 20%);
        bottom: 0;
        display: none;
        left: 0;
        place-items: center;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 500;
    }

    .c-modal:target {
        display: grid;
    }

    .c-modal__accept {
        background-color: hsl(162, 50%, 34%);
        border: 0;
        border-radius: 0.25rem;
        color: hsl(162, 68%, 100%);
        margin-inline-start: 1rem;
        padding: 0.5rem 1rem;
        text-decoration: none;
    }

    .c-modal__cancel {
        color: hsl(162, 10%, 40%);
    }

    .c-modal__close {
        --ico: var(--i-close);
        --ico-c: currentColor;
        --w: 2.5rem;
        border-radius: 50%;
        display: grid;
        height: var(--w);
        /*   inset-inline-end: 1rem; */
        right: 1rem;
        place-items: center;
        position: absolute;
        top: 1rem;
        width: var(--w);
    }

    .c-modal__close::after {
        background-color: var(--ico-c, #000);
        content: "";
        display: inline-block;
        height: 100%;
        width: 100%;
        mask: no-repeat center/var(--ico-w, 2rem) var(--ico);
        -webkit-mask: no-repeat center/var(--ico-w, 2rem) var(--ico);
    }

    .c-modal__close:focus {
        background-color: hsl(162, 20%, 95%);
        outline: none;
    }

    .c-modal__headline {
        line-height: 1.2;
        margin: 0 0 .82em 0;
        width: calc(100% - 2.5rem);
    }

    .c-modal__inner {
        background-color: #FFF;
        border-radius: .25rem;
        box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1), 0px 4px 6px -2px rgba(0, 0, 0, 0.05);
        max-width: 30rem;
        max-height: 35rem;
        padding: 1.25rem;
        position: relative;
    }

    .c-modal__nav {
        align-items: center;
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        margin-block-start: 1rem;
    }
    .imgTutorial{
        max-width: 30rem !important;
        max-height: 40rem !important;
    }
    @media (hover: hover) {
        .c-modal__accept:hover {
            background-color: hsl(162, 50%, 24%);
        }

        .c-modal__close:hover {
            background-color: hsl(162, 20%, 90%);
        }
    }

</style>
<div class="paradeiser" style="bottom: 0px !important">
    <a href="../dashboard">
        <i class="fa fa-home" style="font-size: 20px;color:#212121"></i>
    </a>
    <a href="../dashboard"">
    {{-- <i class=" fa fa-user" aria-hidden="true"
        style="font-size: 20px;color:#212121"></i> --}}
        <img src=" https://delifazil.com/assets/img/logo.png" alt="" height="20" width="100">
    </a>
    <a href="../perfil">
        <i class="fa fa-cogs" aria-hidden="true" style="font-size: 20px;color:#212121"></i>
    </a>
</div>
<!--Model tutotial app-->
<div class="c-modal" id="modal">
    <div class="c-modal__inner">
        <div class="c-modal__nav">
            <a href="#" class="c-modal__cancel"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="c-modal__accept"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>            
        </div>
        {{-- <a href="#" class="c-modal__close" aria-label="Close modal"></a> --}}
        <div class="c-modal__content">
              <img class="imgTutorial" src="https://delifazil.com/assets/img/screenshot/1.png" alt="">
        </div>
        
    </div>
</div>
<!--Enn tutorial app-->
{{-- <div class="header-inner">
    <div class="header-user-menu" style="margin-top: 5px !important">
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
    </div> --}}
{{-- <!-- nav-button-wrap-->
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
    /*
    Basic :focus-trapping in 556 bytes before gzip.
    Replace `href` with `button,[href],select,textarea,input:not([type="hidden"]),[tabindex]:not([tabindex="-1"])` for supporting all focusable elements.
    */
    let D = document;

    function K(e) {
        if ("Tab" === e.key) {
            e.preventDefault();
            let t = this.__f.length - 1,
                n = this.__f.indexOf(e.target);
            (n = e.shiftKey ? n - 1 : n + 1) < 0 && (n = t),
                n > t && (n = 0),
                this.__f[n].focus();
        }
        "Escape" === e.key && (location.hash = "#");
    }
    addEventListener("hashchange", (e) => {
        let t = location.hash;
        if (t.length > 1) {
            let e = D.getElementById(t.substr(1));
            e &&
                (e.addEventListener("keydown", K),
                    (e.__f = [...e.querySelectorAll("[href]")]),
                    e.__f[0].focus());
        } else {
            let [t, n] = e.oldURL.split("#");
            n &&
                (D.getElementById(n).removeEventListener("keydown", K),
                    D.querySelector(`[href="#${n}"]`).focus());
        }
    });

    /* DEMO: Trigger open */
    location.hash = "modal";

</script>
