<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Template 8</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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


    <div class="row color_morado_back justify-content-center">
        <div class="col-12">
                <div class="row justify-content-center">
                    <div class="navegador_escritorio col-12">
                        <div class="row justify-content-center centrado p-t-20 p-b-20">
                            <div class="col">
                                <div class="logo_empresa alinedo_centro">
                                    <img src="{{asset('img/empresa/logo.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-10 nav_escritorio escritorio">
                                <div class="row align-items-center">
                                    <div class='col-2'> <a href="#">INICIO</a></div>
                                    <div class='col-2'><a href="#">ACERCA</a></div>
                                    <div class='col-2'><a href="#">SERVICIOS</a></div>
                                    <div class='col-2'><a href="#">GALERIA</a></div>
                                    <div class='col-2'><a href="#">CONTACTO</a></div>
    {{-- 
                                    <div class='col '>
                                        <a href="https://www.facebook.com">
                                            <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/facebook_small-layer%201.png" alt="">
                                        </a>
                                        <a href="https://www.twitter.com">
                                            <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/twitter_small-layer%202%20copy.png" alt="">
                                        </a>
                                    </div> --}}
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

    <div class="row justify-content-center fondo_2 p-t-50 p-b-100">
        <div class="col-11 p-b-50">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-md-6 blanco alineado_centro">
                    <h1 class='alineado_centro titulos_1'>
                        NUESTRO <br>
                        <span>SERVICIOS</span>
                    </h1>
                    <p class='parrafo m-t-20 m-b-20'>
                        NOS ESPECIALIZAMOS EN VENTA, COMPRA, RENTA Y ADMINISTRACIÓN DE RESIDENCIAS, DEPARTAMENTOS, TERRENOS, BODEGAS Y NAVES INDUSTRIALES.
                    </p>
                </div>
                <div class="col-11 col-sm-10">
                    <div class="row alineado_centro">
                        <div class="col-5 col-sm-3 p-t-10 p-b-10">
                            <div class="row">         
                                <div class="col-12 alineado_centro">
                                    <img class='al_80' src=" {{ asset('img/icono_1.png') }} " alt="">
                                </div>
                                <div class="col-12  titulo_servicio">
                                    <p class='texto_bold'>VENDER</p>
                                </div>
                                <div class="col-12 blanco p-t-20">
                                    Promover tus inmuebles de la manera efectiva en el mercado adecuado.  
                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-sm-3 p-t-10 p-b-10">
                            <div class="row">         
                                <div class="col-12 alineado_centro">
                                    <img class='al_80' src=" {{ asset('img/icono_2.png') }} " alt="">
                                </div>
                                <div class="col-12  titulo_servicio">
                                    <p class='texto_bold'>COMPRAR</p> 
                                </div>
                                <div class="col-12 blanco p-t-20">
                                    Adquirir tus inmuebles de forma confiable y con la mejor oferta a tu propiedad.  
                                </div>
                            </div>

                        </div>
                        <div class="col-5 col-sm-3 p-t-10 p-b-10">
                            <div class="row">         
                                <div class="col-12 alineado_centro">
                                    <img class='al_80' src=" {{ asset('img/icono_2.png') }} " alt="">
                                </div>
                                <div class="col-12  titulo_servicio">
                                    <p class='texto_bold'>RENTAR</p> 
                                </div>
                                <div class="col-12 blanco p-t-20">
                                    Promover tus bienes raices 
en el mercado 
inmobiliario ideal.  
                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-sm-3 p-t-10 p-b-10">
                            <div class="row">         
                                <div class="col-12 alineado_centro">
                                    <img class='al_80' src=" {{ asset('img/icono_3.png') }} " alt="">
                                </div>
                                <div class="col-12  titulo_servicio">
                                    <p class='texto_bold'>ADMINISTRAR</p>
                                </div>
                                <div class="col-12 blanco p-t-20">
                                    Gestionar la renta o venta de tu inmueble de manera profesional manejado por 
expertos que te ofrecerán la mejor opción para tu propiedad.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center margen_50 fondo_4" id='galeria'>
        <div class="col-12 alineado_centro">
            <h1 class='alineado_centro titulos_2 alineado_centro'>INMBUEBLES</h1>
            <p>La mejor inversión en bienes raices la encuentras aquí, 
MAKING DEALS</p>
        </div>
        <div class="col-12 alineado_centro categorias ">
            @foreach($categorias as $categoria)
                <a class='p-l-5 p-r-5 texto_bold selecCategoria' href='#' data-categoria='{{$categoria->id}}'>{{$categoria->nombre}}</a>
            @endforeach
        </div>
        <div class="row justify-content-center" id='potato'>
            @include('inmueble.data')
        </div>
        <!-- carousel  -->  
    </div>

    
    <div class="row justify-content-center fondo_3 p-t-50 p-b-50">
        <div class="col-11 col-sm-10 col-md-6 alineado_centro  blanco">
            <h2 class='titulos_3'>TE OFRECEMOS</h2>
            <div class="row justify-content-center">
                <div class="col-8">
                    <h3 class='p-t-20 texto_bold'>VENDER, COMPRAR, RENTAR Y 
                    ADMINISTRAR TUS INVERSIONES</h3>
                </div>
                <div class="col-8 p-t-30">
                    <p class='somos'>RESIDENCIAS, DEPARTAMENTOS, TERRENOS, 
                        BODEGAS  Y  NAVES INDUSTRIALES.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center fondo_7">
        <div class="col-12">
            <div class="row justify-content-center fondo_6  alineado_centro ">
                <div class="col-10 col-md-12 p-t-50 p-b-50">
                    <p class='titulo_5'>SERVICIOS ADICIONALES</p>
                    <p class='texto_bold'>ESTUDIOS DE  INVESTIGACIÓN Y MERCADO, <br>
            ANÁLISIS FINANCIEROS Y <br>
            ASESORÍA LEGAL.</p>
                    
                </div>
            </div>
            
        </div>
        <div class="col-12 p-t-50 p-b-50">
            

            <div class="row justify-content-center">
                <div class="col-10 alineado_centro">
                    <h3 class='titulos_4'>CONTÁCTANOS <br>
                        <span>MAKING DEALS</span>
                    </h3>

                </div>
                <div class="col-10">
                    <div class="row justify-content-center">
                        @if (count($errors) > 0)
                        <div class="col-12">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }}<br> 
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @if(session()->has('message'))
                        <div class="col-12">
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        </div>
                        @endif
                        <div class="col-10 col-md-8 col-centered">
                            <form method='POST' action='{{url('enviar_correo')}}'>
                                <div class="form-row">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group col-11 col-md-6">
                                        <input type="text" name='nombre' class="form-control" id="exampleInputText" aria-describedby="nombreHelp" placeholder="NOMBRE">
                                        @if ($errors->has('nombre')) <p class="help-block">{{ $errors->first('nombre') }}</p> @endif
                                    </div>
                                    <div class="form-group col-11 col-md-6">
                                        <input type="email" name='correo' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e-MAIL">
                                        @if ($errors->has('correo')) <p class="help-block">{{ $errors->first('correo') }}</p> @endif
                                    </div>
                                    <div class="form-group col-11 col-md-6">
                                        <input type="text" name='compania' class="form-control" id="exampleInputText" aria-describedby="companiaHelp" placeholder="COMPAÑIA">
                                        @if ($errors->has('nombre')) <p class="help-block">{{ $errors->first('compania') }}</p> @endif
                                    </div>
                                    <div class="form-group col-11 col-md-6">
                                        <input type="text" name='telefono' class="form-control" id="exampleInputEmail1" aria-describedby="telefonoHelp" placeholder="TELÉFONO">
                                        @if ($errors->has('telefono')) <p class="help-block">{{ $errors->first('telefono') }}</p> @endif
                                    </div>
                                    <div class="form-group col-11 col-md-12">
                                        <textarea class="form-control" name='contenido' id="exampleTextarea" rows="3" placeholder="mensaje"></textarea>
                                        @if ($errors->has('contenido')) <p class="help-block">{{ $errors->first('contenido') }}</p> @endif
                                    </div>
                                    <div class="form-group col-12 alineado_centro">
                                        <button type="submit" class="btn_submit texto_bold centrado">ENVIAR</button>
                                    </div>
                                    
                                </div>
                            </form>

                        </div>
                    </div>
                </div>   
            </div>

        </div>
        <div class="col-md-8 col-11">
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-sm-3 p-t-20 p-b-20">
                    <p>Blvd. Campestre # 1000 <br>
                    Col. Panorama <br>
                    León, Guanjuato, México</p>
                </div>

                <div class="col-6 col-sm-3 p-t-20 p-b-20 alineado_centro">
                    <p>facebook.com/2BE-Bienes-Raíces-</p>
                </div>
                <div class="col-6 col-sm-3 p-t-20 p-b-20 alineado_centro">
                    <p>(477) 1305393  / (477) 7651304</p>
                </div>
                <div class="col-6 col-sm-3 p-t-20 p-b-20 alineado_centro">
                    <p>info@2be.sitev</p>
                </div>
            </div>
        </div>        
    </div>  

    <div class="row justify-content-between color_morado_back">
        <div class="col-12 p-t-20 p-b-20">
        </div>
    </div>


<script src="{{asset('js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGV5GxIotfGKptiCdhNCWqVSpI2E9m9dk&callback=initMap">
</script>
<script src='{{asset('js/jquery.slides.min.js')}}'></script>
<script src='{{asset('js/main.js')}}'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script>

</script>
</body>
</html>
