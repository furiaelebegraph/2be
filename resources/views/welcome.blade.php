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
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body id='main'>
            <div class="col-12 col-centered">
                @if (Session::has('mensaje'))
                   <div id='mensaje_email' class="alert alert-success">{{ Session::get('mensaje') }}</div>
                @endif
            </div>


    

    <div class="navbar color_amarillo_back">
        <div class="row justify-content-center">
            <div class="navegador_escritorio">
                <div class="logo_empresa alinedo_centro">
                    <img src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-428.svg" alt="">
                </div>
                <div class="col-11 nav_escritorio escritorio padding_10">
                    <div>UNO</div>
                    <div>DOS</div>
                    <div>TRES</div>
                    <div>CUATRO</div>
                    <div>CINCO</div>
                    <div>
                        <a href="https://www.facebook.com">
                            <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/facebook_small-layer%201.png" alt="">
                        </a>
                        <a href="https://www.twitter.com">
                            <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/twitter_small-layer%202%20copy.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrap_navegador mobil">
                <div class='navegador'>
                  <span id='abrir' >&#9776;</span>
                </div>
                <div id="mySidenav" class="sidenav">
                    <div class="logo_side">
                        <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-cuatro/images/svg-pegado-5338x395.svg" alt="">
                    </div>
                  <a href="javascript:void(0)" class="closebtn cerrar">&times;</a>
                  <a href="#">About</a>
                  <a href="#">Services</a>
                  <a href="#">Clients</a>
                  <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap_bloque1">
        <div class="bloque_1">
            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-siete/images/grayscale-trainstation-l.jpg" alt="">
        </div>
    </div>

    <div class="container margen_50">
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
                <p class='alineado_justi'>
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec quam felis, ultricies nec.
                </p>
                <p class='alineado_justi'>
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec quam felis, ultricies nec.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec quam felis, ultricies nec.
                </p>
            </div>
            <div class="col-10 col-sm-6 columna">
                <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/cactus632x421.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container">
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
    </div>


    <div class="container" id='galeria'>
        <div class="row justify-content-center margen_50">
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
                <label for="exampleSelect2">Sub Categoria</label>
                <select disabled class="form-control" id="subcate">
                  <option>Selecciona una subcategoria</option>
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
                    @foreach($categorias as $categoria)
                    <div class="col-11 col-sm-6 col-md-3 seleccion">
                        <div class='al_100'>
                            <img class="al_100" src="{{asset($categoria->imagen)}}" data-idcate="{{$categoria->id}}" class="d-block img-fluid">
                        </div>
                        <div class="">
                            <h3>{{$categoria->nombre}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- carousel  -->   
        </div>
    </div>

    <div class="container margen_50">
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
    </div>

    <div class="conteiner-fluid">
        <div class="row">
                <div class="col-12">
                    <div id="map">
                        
                    </div> 
                </div>
            
        </div>
    </div>

    <div class="footer">
        <div class="container">
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
        </div>
        <div class='alineado_cent'>
            All rights reserved © 2017 Elebegraph.com
        </div>
    </div>


        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGV5GxIotfGKptiCdhNCWqVSpI2E9m9dk&callback=initMap">
            </script>
        <script src='{{asset('js/jquery.slides.min.js')}}'></script>
        <script src='{{asset('js/main.js')}}'></script>
    </body>
</html>
