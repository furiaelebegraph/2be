            <div class="col-11 col-sm-10 col-md-8 col-lg-7 ">
                <div class="row cambio align-items-center ">
                    @foreach($inmuebles as $inmueble)
                    <div class="col-11 col-sm-6 col-md-4 seleccion p-t-10 p-b-10 ">
                        <div class='al_100'>
                            <img class="al_100" src="{{asset($inmueble->imagen)}}" data-idcate="{{$inmueble->id}}" class="d-block img-fluid">
                        </div>
                        <div class="alineado_centro">
                            <h5>{{$inmueble->nombre}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="col-12">
                    {{$inmuebles->render()}}
            </div>