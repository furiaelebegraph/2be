            <div class="col-11 col-sm-10 col-md-8 col-lg-7 ">
                <div class="row cambio justify-content-center align-items-center ">
                    @foreach($inmuebles as $inmueble)
                        <div class="col-11 col-sm-6 col-md-4 seleccion p-t-10 p-b-10 ">
                            <a data-fancybox data-type="ajax" data-src="ajaxDetalle/{{$inmueble->id}}" href="javascript:;">
                                <div class='al_100'>
                                    <img class="al_100" src="{{asset($inmueble->imagen)}}" data-idcate="{{$inmueble->id}}" class="d-block img-fluid">
                                </div>
                                <div class="alineado_centro">
                                    <h5>{{$inmueble->nombre}}</h5>
                                </div>
                            </a>
                        </div>
                        
                    @endforeach
                </div>
            </div>
            
            <div class="col-7 alineado_centro">
                    {{$inmuebles->render()}}
            </div>