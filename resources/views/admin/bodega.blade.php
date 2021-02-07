@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Registro de bodega</h4>
            <form class="form-sample" action="bodega/store" method="post">
              @csrf
              <p class="card-description"> Información básica</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nombre/Razón social</label>
                    <div class="col-sm-9">
                      <input type="text" name="name" class="form-control" placeholder="Bodega market">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">RUC</label>
                    <div class="col-sm-9">
                      <input type="text" name="ruc" class="form-control" placeholder="704508963456486">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Encargado</label>
                    <div class="col-sm-9">
                        <input type="text" name="encargado" class="form-control" placeholder="Manuel Barrios">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Horario atención</label>
                    <div class="col-sm-9">
                       <div class="row">
                           <div class="col-sm-6">
                            <input type="text" name="horarioInicio" class="form-control" placeholder="08:00">
                           </div>
                           <div class="col-sm-6">
                            <input type="text" name="horarioFin" class="form-control" placeholder="20:00">
                           </div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Teléfono</label>
                    <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" placeholder="980866911">                     
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Validación</label>
                    <div class="col-sm-4">
                      <div class="form-radio">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Si <i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-radio">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> No <i class="input-helper"></i></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="card-description"> Ubicación </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Dierección</label>
                    <div class="col-sm-9">
                      <input type="text" name="direccion" class="form-control" placeholder="Calle 16 Mz T2 L3">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Link google maps</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Latitud</label>
                    <div class="col-sm-9">
                      <input type="text" name="latitude" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Longitud</label>
                    <div class="col-sm-9">
                      <input type="text"  name="longitude" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Distrito</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="distrito">
                            <option value="Trujillo">Trujillo</option>
                            <option value="Huaraz" >Huaraz</option>
                            <option value="Lima">Lima</option>
                            <option value="otro">Otro</option>
                          </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ciudad</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="ciudad">
                        <option value="c1">c1 </option>
                        <option value="c2">c2</option>
                        <option value="c3">c2</option>
                        <option value="c4">c3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success mr-2">Registrar</button>
              {{-- <button class="btn btn-light">Cancelar</button> --}}
            </form>
          </div>
        </div>
      </div>
</div>
@endsection