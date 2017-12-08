<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Template 8</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/helpers.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body id='main'>
    <div class="row">
        <div class="col-12 col-centered">
            @if (Session::has('mensaje'))
            <div id='mensaje_email' class="alert alert-success">{{ Session::get('mensaje') }}</div>
            @endif
        </div>
    </div>


    <div class="row color_morado_back">
        <div class="col-12">
            <div class="navbar ">
                <div class="row justify-content-center">
                    <div class="navegador_escritorio">
                        <div class="logo_empresa alinedo_centro">
                            <img src="{{asset('img/empresa/logo.png')}}" alt="">
                        </div>
                        <div class="col-11 nav_escritorio escritorio padding_10">
                            <div class="row align-items-center">
                                <div class='col '> <a href="#">INICIO</a></div>
                                <div class='col '><a href="#">ACERCA</a></div>
                                <div class='col '><a href="#">SERVICIOS</a></div>
                                <div class='col '><a href="#">GALERIA</a></div>
                                <div class='col '><a href="#">CONTACTO</a></div>

                                <div class='col '>
                                    <a href="https://www.facebook.com">
                                        <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/facebook_small-layer%201.png" alt="">
                                    </a>
                                    <a href="https://www.twitter.com">
                                        <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/twitter_small-layer%202%20copy.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap_navegador mobil">
                        <div class='navegador'>
                          <span id='abrir' >&#9776;</span>
                        </div>
                        <div id="mySidenav" class="sidenav">
                            <div class="logo_side">
                                <img class='al_100' src="{{asset('img/empresa/logo.png')}}" alt="">
                            </div>
                            <a href="javascript:void(0)" class="closebtn cerrar">&times;</a>
                            <a href="#">INICIO</a>
                            <a href="#">ACERCA</a>
                            <a href="#">SERVICIOS</a>
                            <a href="#">GALERIA</a>
                            <a href="#">CONTACTO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap_bloque1 row">
        <div class="bloque_1 col-12">

            <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">

                    @foreach($banners as $banner)
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{$banner->imagen}}" alt="">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"> 
                    <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> 
                </a> 
                <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"> 
                    <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> 
                </a>
            </div>

        </div>
    </div>

    <div class="row justify-content-center fondo_1 p-50">
        <div class="col-11">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-5 col-lg-3"> 
                    <img class='al_100' src="{{ asset('img/imagen_marca_1.png') }}" alt="">
                </div>
                <div class="col-12 col-sm-6 col-md-7 col-lg-4 justificado">
                    <div>
                        <p class='somos'>
                            Somos una empresa innovadora, dedicada a la <span> asesoría, promoción y administración de bienes inmuebles.</span> Nuestro servicio, garantiza seguridad. Y <span>nuestro compromiso es satisfacer las necesidades de propietarios y partes interesadas. </span>
                        </p>

                    </div>
                    <div>
                        <p class='parrafo'>
                            <span class='texto_bold'>MISIÓN: </span><br>
                            OFRECER A NUESTROS CLIENTES UNA PLATAFORMA QUE LES PERMITA ACCEDER A OPORTUNIDADES DE INVERSIÓN INMOBILIARIA, CON ESTÁNDARES DE SEGURIDAD Y CONFIABILIDAD.
                        </p>
                    </div>
                    <div>
                        <p class='parrafo'>
                            <span class='texto_bold'>VISIÓN:</span> <br>
                            CONVERTIR CADA ASESORÍA INMOBILIARIA EN UNA EXPERIENCIA EXITOSA Y RENTABLE.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center fondo_2 p-50">
        <div class="col-11">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 blanco">
                    <h1 class='alineado_centro titulos_1 alineado_centro'>
                        NUESTRO <br>
                        <span>SERVICIOS</span>
                    </h1>
                    <p class='parrafo alineado_centro m-t-20 m-b-20'>
                        NOS ESPECIALIZAMOS EN VENTA, COMPRA, RENTA Y ADMINISTRACIÓN DE RESIDENCIAS, DEPARTAMENTOS, TERRENOS, BODEGAS Y NAVES INDUSTRIALES.
                    </p>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-5 col-sm-3">
                            <div class="row">         
                                <div class="col-12 alineado_centro">
                                    <img class='al_80' src=" {{ asset('img/icono_1.png') }} " alt="">
                                </div>
                                <div class="col-12"></div>
                                <div class="col-12"></div>
                            </div>
                        </div>
                        <div class="col-5 col-sm-3">
                            <div class="row">         
                                <div class="col-12 alineado_centro">
                                    <img class='al_80' src=" {{ asset('img/icono_2.png') }} " alt="">
                                </div>
                                <div class="col-12"></div>
                                <div class="col-12"></div>
                            </div>

                        </div>
                        <div class="col-5 col-sm-3">
                            <div class="row">         
                                <div class="col-12 alineado_centro">
                                    <img class='al_80' src=" {{ asset('img/icono_2.png') }} " alt="">
                                </div>
                                <div class="col-12"></div>
                                <div class="col-12"></div>
                            </div>
                        </div>
                        <div class="col-5 col-sm-3">
                            <div class="row">         
                                <div class="col-12 alineado_centro">
                                    <img class='al_80' src=" {{ asset('img/icono_3.png') }} " alt="">
                                </div>
                                <div class="col-12"></div>
                                <div class="col-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center no-gutter">
        <div class="col-4 ">
            <div class="">
                <div class="alineado_cent">
                    <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/video-player.png" alt="">

                </div>
                <div class="margen_20">
                    <div class="linea_amarilla margen_centro">

                    </div>
                </div>
                <div class='titulo_uno'>
                    <p>
                        Lorem ipsum dolot sit amet
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.

                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 ">
            <div class="">
                <div class="alineado_cent">
                    <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/briefcase.png" alt="">

                </div>
                <div class="margen_20">
                    <div class="linea_amarilla margen_centro">

                    </div>
                </div>
                <div class='titulo_uno'>
                    <p>
                        Lorem ipsum dolot sit amet
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.

                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 ">
            <div class="">
                <div class="alineado_cent">
                    <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/calendar-3.png" alt="">

                </div>
                <div class="margen_20">
                    <div class="linea_amarilla margen_centro">

                    </div>
                </div>
                <div class='titulo_uno'>
                    <p>
                        Lorem ipsum dolot sit amet
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.

                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center margen_50 " id='galeria'>
        <div class="col-11 col-sm-4 col-md-3">
            <label for="exampleSelect2">Categoria</label>
            <select class="form-control" id="selectCatego">

                <option disabled selected value> Selecciona una categoria </option>
                @foreach($categorias as $categoria)
                <option value='{{$categoria->id}}'>{{$categoria->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-11 col-sm-4 col-md-3">
            <label for="exampleSelect2">Producto</label>
            <select disabled class="form-control" id="seleProdu">
                <option disabled selected value> Selecciona un producto </option>
            </select>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 ">
            <div class="row cambio">
                @foreach($inmuebles as $inmueble)
                <div class="col-11 col-sm-6 col-md-4 seleccion">
                    <div class='al_100'>
                        <img class="al_100" src="{{asset($inmueble->imagen)}}" data-idcate="{{$inmueble->id}}" class="d-block img-fluid">
                    </div>
                    <div class="">
                        <h3>{{$inmueble->nombre}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- carousel  -->   
    </div>
    <div class="row justify-content-center">    
        <div class="col-10">
            {{$inmuebles->render()}}
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10 col-sm-6 columna">
            <div class="linea_amarilla margen_10">

            </div>
            <div class="titulo_uno">
                <h2>Lorem ipsum dolor sit amet</h2>
            </div>
            <p class='alineado_justi'>

                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            </p>
        </div>
        <div class="col-10 col-sm-6 columna">
            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/contacto_03.jpg" alt="">
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col-5">
          <div class="row">
                <div class="col-12 margen_10">
                    <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/pin_direccion.png" alt="">
                    Dirección, Dirección, Dirección, Dirección, Direc.

                </div>
                <div class="col-12 margen_10">
                    <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/reloj.png" alt="">
                    Horario, Horario,Horario,Horario,Horario,Horario,Hr.

                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class='col'>
                    <a href="http://www.facebook.com">
                        <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/facebook-u1852.png" alt="">
                    </a>    
                </div>
                <div class='col'>
                    <a href="http://www.facebook.com">
                        <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/twitter-u1862.png" alt="">
                    </a> 
                </div>
                <div class='col'>
                    <a href="http://www.facebook.com">
                        <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/mail-u1872.png" alt="">
                    </a> 
                </div>
            </div>
        </div>
    </div>
    <div class='alineado_cent row'>
        All rights reserved © 2017 Elebegraph.com
    </div>


<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGV5GxIotfGKptiCdhNCWqVSpI2E9m9dk&callback=initMap">
</script>
<script src='{{asset('js/jquery.slides.min.js')}}'></script>
<script src='{{asset('js/main.js')}}'></script>
</body>
</html>
