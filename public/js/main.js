$(document).ready(function(){    
  $('.nav-item a').on('click', function(){
      console.log('potato');
      $('.nav-item').removeClass('active');
      $(this).parent().addClass('active');
    });


    $('.cerrar').on('click',function(){
      closeNav();
    });

    $('#abrir').on('click',function(){
      openNav();
      $('#mySidenav a').on('click',function(){
        closeNav();
      });

    });
    $('#mensaje_email').delay(2000).fadeOut("slow");


		$('.aparece div:first-child').addClass( "active" );
		$('.carousel-indicators li').first(function(){
			var current = $(this).addClass('active');
		});


        $('.galeri_3').slidesjs({
        width: 940,
        height: 328,
        effect: {
          fade: {
            speed: 600
          }
        },
        navigation: {
          active: false,
          effect: "fade"
        },
        pagination: {
          active: false,
          effect: "fade"
        },
        play: {
        active: false,
          // [boolean] Generate the play and stop buttons.
          // You cannot use your own buttons. Sorry.
        interval: 5000,
          // [number] Time spent on each slide in milliseconds.
        auto: true,
          // [boolean] Start playing the slideshow on load.
        swap: true,
        effect: "fade",
          // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
          // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
          // [number] restart delay on inactive slideshow
      }
      });

      $('#slide_texto').slidesjs({
        width: 940,
        height: 328,
        effect: {
          fade: {
            speed: 600
          }
        },
        navigation: {
          active: false,
          effect: "fade"
        },
        pagination: {
          active: false,
          effect: "fade"
        },
        play: {
        active: false,
          // [boolean] Generate the play and stop buttons.
          // You cannot use your own buttons. Sorry.
        interval: 5000,
          // [number] Time spent on each slide in milliseconds.
        auto: true,
          // [boolean] Start playing the slideshow on load.
        swap: true,
        effect: "fade",
          // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
          // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
          // [number] restart delay on inactive slideshow
      }
      });

      $('#slides').slidesjs({
        width: 940,
        height: 328,
        effect: {
          fade: {
            speed: 600
          }
        },
        navigation: {
          active: false,
          effect: "fade"
        },
        pagination: {
          active: false,
          effect: "fade"
        },
        play: {
	      active: false,
	        // [boolean] Generate the play and stop buttons.
	        // You cannot use your own buttons. Sorry.
	      interval: 5000,
	        // [number] Time spent on each slide in milliseconds.
	      auto: true,
	        // [boolean] Start playing the slideshow on load.
	      swap: true,
	      effect: "fade",
	        // [boolean] show/hide stop and play buttons
	      pauseOnHover: false,
	        // [boolean] pause a playing slideshow on hover
	      restartDelay: 2500
	        // [number] restart delay on inactive slideshow
	    }
      });

      $('.seleccion').on('click',function(){
        var valorid = $(this).find("img").data('idcate');
        console.log(valorid);
        $.get('ajaxSucate/'+ valorid+'', function(data){
            $('#subcate').attr('disabled',false);
            $('#subcate').empty();
            $('#subcate').append('<option disabled selected value> Selecciona una subcategoria </option>');
            $.each(data, function(index, subareaObj){
                $('#subcate').append('<option value="'+ subareaObj.id+'">'+ subareaObj.nombre +'</option>');
            });
            $('.cambio').empty();
            $.each(data, function(index, subcategoriaObj){
                $('.cambio').append('<div class="col-12 col-sm-6 col-md-3 seleccion_sub"><div class="al_100"><img class="al_100" src="'+subcategoriaObj.imagen+'" data-idsubcate="'+subcategoriaObj.id+'" class="d-block img-fluid"></div><div class=""><h3>'+subcategoriaObj.nombre+'</h3></div></div>');
            });
        });  
      });


      $("body").on('click', '.seleccion_sub', function(e){
        e.preventDefault();
        var id_subcate = $(this).find('img').data('idsubcate');
        console.log(id_subcate);
        $.get('ajaxProdu/'+ id_subcate+'', function(data){
            $('#seleProdu').attr('disabled',false);
            $('#seleProdu').empty();
            $('#seleProdu').append('<option disabled selected value> Selecciona una subcategoria </option>');
            $.each(data, function(index, produObj){
                $('#seleProdu').append('<option value="'+ produObj.id+'">'+ produObj.nombre +'</option>');
            }); 
            $('.cambio').empty();
            $.each(data, function(index, productoObj){
                $('.cambio').append('<div class="col-12 col-sm-6 col-md-3 seleccion_pro"><div class="al_100"><img class="al_100" src="'+productoObj.imagen+'" data-idpro="'+productoObj.id+'" class="d-block img-fluid"></div><div class=""><h3>'+productoObj.nombre+'</h3></div></div>');
            });

        });
      });


      $("body").on('click', '.seleccion_pro', function(e){
        e.preventDefault();
        var id_produ = $(this).find('img').data('idpro');
        console.log(id_produ);
        $.get('ajaxIma/'+ id_produ+'', function(data){
            $('#seleProdu').attr('disabled',false);
            $('#seleProdu').empty();
            $('#seleProdu').append('<option disabled selected value> Selecciona una subcategoria </option>');
            $.each(data, function(index, produObj){
                $('#seleProdu').append('<option value="'+ produObj.id+'">'+ produObj.nombre +'</option>');
            });
            $('.cambio').empty();
            $.each(data, function(index, productoObj){
                $('.cambio').append('<div class="col-12 col-sm-6 col-md-3"><div class="al_100"><img class="al_100" src="'+productoObj.imagen+'" data-idgale="'+productoObj.id+'" class="d-block img-fluid"></div><div class=""><h3>'+productoObj.nombre+'</h3></div></div>');
            });
        });
      });

      $('#selectCatego').on('change', function(e){
      	$('#subcate').attr('disabled', false);
      	$('#subcate').attr('disabled', true);
      	var item=$(this).val();
      	console.log(item);
        $.get('ajaxSucate/'+ item +'', function(data){
                $('#subcate').empty();
                $('#subcate').attr('disabled',false);
                $('#subcate').append('<option disabled selected value> Selecciona un producto</option>');
                $.each(data, function(index, produObj){
                    $('#subcate').append('<option value="'+ produObj.id+'">'+ produObj.nombre +'</option>');
                });
                $('.cambio').empty();
                $.each(data, function(index, productoObj){
                    $('.cambio').append('<div class="col-12 col-sm-6 col-md-3 seleccion_sub"><div class="al_100"><img class="al_100" src="'+productoObj.imagen+'" data-idsubcate="'+productoObj.id+'" class="d-block img-fluid"></div><div class=""><h3>'+productoObj.nombre+'</h3></div></div>');
                });
            });
      });

      $('#subcate').on('change',function(){
      	$('#seleProdu').attr('disabled', false);
      	var items=$(this).val();
      	console.log(items);
		    $.get('ajaxProdu/'+ items +'', function(data){
            $('#seleProdu').empty();
            $('#seleProdu').append('<option disabled selected value> Selecciona un producto</option>');
            $.each(data, function(index, produObj){
                $('#seleProdu').append('<option value="'+ produObj.id+'">'+ produObj.nombre +'</option>');
            });
            $('.cambio').empty();
            $.each(data, function(index, productoObj){
                $('.cambio').append('<div class="col-12 col-sm-6 col-md-3 seleccion_pro"><div class="al_100"><img class="al_100" src="'+productoObj.imagen+'" data-idsubcate="'+productoObj.id+'" class="d-block img-fluid"></div><div class=""><h3>'+productoObj.nombre+'</h3></div></div>');
            });
        });
      });

      $('#seleProdu').on('change',function(){
      	var itemsIma=$(this).val();
      	console.log(itemsIma);
		    $.get('ajaxIma/'+ itemsIma+'', function(data){
            $('.cambio').empty();
            $.each(data, function(index, productoObj){
                $('.cambio').append('<div class="col-12 col-sm-6 col-md-3"><div class="al_100"><img class="al_100" src="'+productoObj.imagen+'" class="d-block img-fluid"></div><div class=""><h3>'+productoObj.nombre+'</h3></div></div>');
            });
        });
      });
});

function openNav() {
    document.getElementById("mySidenav").style.height = "100%";
    document.getElementById("mySidenav").style.top = "0";
}

function closeNav() {
    document.getElementById("mySidenav").style.height = "0";
    document.getElementById("mySidenav").style.top = "-60px";
}

 
      function initMap() {
        var uluru = {lat: 19.3957005, lng: -99.1429683};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

