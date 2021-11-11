<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekStore</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <style>
        #heading{color: white;}

        h2{
            font-size: 1.3rem;
        }
        #cards-colorsize{color: white; font-size: 1rem;}
        h3{
            font-size: 2.5rem;
        }
    </style>

</head>
<body  style="background-color: #0E0E10;">
    <nav class="navbar navbar-dark" style="background-color: #0E0E10;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                    <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                </svg>
                Servicio Técnico
            </a>
            <a href="#" class="navbar-brand d-flex">
                Contactanos
            </a>
            </div>
    </nav>
    <div>
        <nav class="navbar navbar-dark" style="background-color: #0E0E10;">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    GeekStore
                </a>
                <div class="dropdown">
                    <a class="navbar-brand nav-link dropdown-toggle tex-center" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Computadoras armadas
                      </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Ver todas</a></li>
                      <li><a class="dropdown-item" href="#">PC gamers</a></li>
                      <li><a class="dropdown-item" href="#">Workstation</a></li>
                    </ul>
                  </div>
                  <div>
                    <a class="me-2 navbar-brand" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </a>
                    <button type="button" class="btn btn-primary">Pedir tu PC personalizada</button>
                  </div>
                </div>
        </nav>
    </div>
    <section class="container-fluid">
        <div class="container-fluid">
            <div>
                <h1 id="heading">
                    Tienda Gamer
                </h1>
                <div>
                    <p id="heading">Explora por</p>
                </div>
            </div>
            <section class="plans-container--slider">
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg">
                        <h2 id="heading" >PC Gamer</h2>
                    </div>
                </a>
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg1">
                        <h2 id="heading" >Workstations</h2>
                    </div>
                </a>
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg2">
                        <h2 id="heading" >Sillas Gamer</h2>
                    </div>
                </a>
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg3">
                        <h2 id="heading" >Monitores Gamer</h2>
                    </div>
                </a>
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg4">
                        <h2 id="heading" >Accesorios para computadora</h2>
                    </div>
                </a>
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg5">
                        <h2 id="heading" >Computadoras armadas</h2>
                    </div>
                </a>
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg6">
                        <h2 id="heading" >Streaming</h2>
                    </div>
                </a>
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg7">
                        <h2 id="heading" >Combos Gamer</h2>
                    </div>
                </a>
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg8">
                        <h2 id="heading" >Escritorios Gamer</h2>
                    </div>
                </a>
                <a class="plans-container--card" href="" style="text-decoration: none">
                    <div class="backgroundimg9">
                        <h2 id="heading" >Enfriamiento</h2>
                    </div>
                </a>
            </section>
        </div>
    </section>
    <section class="pv5">
        <div class="mw8 center ph3">
            <h2 id="heading" style="font-size: 1.5rem">
                Con geek Store siempre tendras
            </h2>
            <div class="cards-bg pa4 br3">
                <div class="flex flex-wrap justify-between">
                    <div class="w-third-ns tc">
                        <div class="w-80 center">
                            <img loading="lazy" src="{{asset('images/home/safe-icon.svg')}}" alt="compra segura">
                            <h3 id="cards-colorsize">
                                Compra segura
                            </h3>
                            <p class="f6 lh-copy white-60">
                                7 años y miles de usuarios nos respaldan. Aliados oficiales de las marcas de mayor desempeño.
                            </p>
                        </div>
                    </div>
                    <div class="w-third-ns tc">
                        <div class="w-80 center">
                            <img loading="lazy" src="{{asset('images/home/delivery-icon.svg')}}" alt="compra segura">
                            <h3 id="cards-colorsize">
                                Envíos a todo México
                            </h3>
                            <p class="f6 lh-copy white-60">
                                Trabajamos con las principales paqueterías: Fedex, DHL, Estafeta, UPS.
                            </p>
                        </div>
                    </div>
                    <div class="w-third-ns tc">
                        <div class="w-80 center">
                            <img loading="lazy" src="{{asset('images/home/warranty-icon.svg')}}" alt="compra segura">
                            <h3 id="cards-colorsize">
                                Garantía de productos
                            </h3>
                            <p class="f6 lh-copy white-60">
                                Cada componente utilizado tiene garantía contra defectos de fábrica.
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid ph3">
            <div class="flex flex-wrap justify-between items-center">
                <div>
                    <h2 id="heading">
                        Computadoras gamer
                    </h2>
                    <h3 id="heading">
                        Juega para ganar
                    </h3>
                </div>
                <div>
                    <a class="white no-underline pv2 ph4 ba b--white dim" href="" style="text-decoration: none"> Ver todas</a>
                </div>
            </div>
            <div class="scrolling-wrapper br3 pv4">
                <div class="product-scroll flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/ecomerce/slot1.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/ecomerce/slot2.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/ecomerce/slot3.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/ecomerce/slot4.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/ecomerce/slot5.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/ecomerce/slot6.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/ecomerce/slot7.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/ecomerce/slot8.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/ecomerce/slot9.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="pv5">
        <div class="container-fluid ph3">
            <div class="flex flex-wrap justify-between items-center">
                <div>
                    <h2 id="heading">
                        Productos Gamer indispensables para la cruzada
                    </h2>
                    <h3 id="heading">
                        Popular entre los gamers
                    </h3>
                </div>
            </div>
            <div class="scrolling-wrapper br3 pv4">
                <div class="product-scroll1 flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/popular/slot1.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll1 flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/popular/slot2.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll1 flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/popular/slot3.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
                <div class="product-scroll1 flex flex-auto ph3">
                    <a class="no-underline white-60 flex flex-auto " href="">
                        <img src="{{asset('images/popular/slot4.png')}}" alt="ComputadoraDelios 50i">
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="join h-newsletter subscribir">
        <div class="mw8 center ph3">
            <div class="news-banner granite-bg pv5 ph4 br2">
                <div class="w-50-ns w-100">
                    <h2 class="f2 mv0 pv1" id="heading">
                        Suscríbete
                    </h2>
                    <p class="lh-copy white-70">
                        Noticias, lanzamientos exclusivos, ofertas y muchos más detalles en nuestro newsletter
                    </p>
                </div>
                <div>
                    <form action="" method="POST" accept-charset="utf-8">
                        <input class="inline-flex sg-input w-20-ns mv2 mv0-ns" type="text" name="name" placeholder="Tu nombre">
                        <input class="inline-flex sg-input w-30-ns mv2 mv0-ns" type="email" name="email" placeholder="tumail@mail.com">
                        <button class="inline-flex prim-button pointer" type="submit">
                            Suscribirme
                        </button>
                    </form>
                </div>
                <div class="pv3 f6" id="heading">
                    Protegemos tus datos. revisa nuestro
                    <a class="white b dim" href="https://spartangeek.com/privacidad">
                        Aviso de privacidad
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div class="row"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7523.537647347289!2d-98.1167753481018!3d19.465531484892352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d01f4096633d85%3A0xcd7922cb694b3a01!2sAv.%20Miguel%20Hidalgo%204%2C%20Quinta%20Secc%20Col%20Agr%C3%ADcola%20Dolores%2C%2090435%20Tetla%2C%20Tlax.!5e0!3m2!1ses-419!2smx!4v1635536244273!5m2!1ses-419!2smx" width="1246" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </section>
    <footer class="pv5">
        <section class="redes-sociales">
            <div class="contenedor">
                <a class="twitter" href="https://twitter.com/Alanwlfx"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                  </svg></a>
                <a class="facebook" href="https://www.facebook.com/alan.juarezfragoso"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg></a>
                <a class="youtube" href="https://www.youtube.com/channel/UCYwGI-nmgWrPQm72Dcrk4jw"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                  </svg></a>
                <a class="github" href="https://github.com/AlanWLFx"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                  </svg></a>
                <a class="instagram" href="https://www.instagram.com/alaan_wolf/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg></a>
            </div>
        </section>
    </footer>
</body>
</html>
