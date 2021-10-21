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
</body>
</html>
