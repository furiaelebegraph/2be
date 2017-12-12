$(document).ready(function(){    

    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getData(page);
            }
        }
    });



    $(document).on('click', '.selecCategoria', function(e){
      e.preventDefault();
      let id_catego = $(this).data('categoria');
      console.log('ajax_categoria/'+ id_catego);
      $.ajax({
          url: 'ajax_categoria/' + id_catego,
          type: "get",
          datatype: "html",
        }).done(function(data){
          $("#potato").empty().html(data);
          location.hash = page;
        });
    });


    $(document).on('click', '.pagination a',function(event){

      event.preventDefault();
      $('li').removeClass('active');
      $(this).parent('li').addClass('active');
      var page=$(this).attr('href').split('page=')[1];
      getData(page);
    });
    function getData(page){
            $.ajax(
            {
                url: 'inmueble/data?page=' + page,
                type: "get",
                datatype: "html",
                // beforeSend: function()
                // {
                //     you can show your loader 
                // }
            })
            .done(function(data)
            {
                console.log(data);
                
                $("#potato").empty().html(data);
                location.hash = page;
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                  alert('No response from server');
            });
    }
    $('.carousel-item:first-child').addClass('active');

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

