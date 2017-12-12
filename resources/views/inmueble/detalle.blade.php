<div class="row justify-content-center al_100">
	<div class="col-11 col-sm-7 display_inline">
		<div id="slides">
			@foreach($inmueble->ima as $galeria)
				<img class="al_100"  src="{{asset($galeria->imagen)}}" alt="">
			@endforeach
		</div>
	</div>
	<div class="col-11 col-sm-4 display_inline">
		<div class="row">
			<div class="col-12">
				{{$inmueble->nombre}}
			</div>
			<div class="col-12">
				{{$inmueble->precio}}
			</div>
			<div class="col-12">
				{!!$inmueble->descripcion!!}
			</div>
		</div>
	</div>
</div>

<script src="http://www.slidesjs.com/js/jquery.slides.min.js"></script>
<script>
$(function(){
  $("#slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    },
	navigation: false,

  });
});
</script>