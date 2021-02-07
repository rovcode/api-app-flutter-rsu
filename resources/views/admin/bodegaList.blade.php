@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">BODEGAS REGISTRADAS</h4>
          <p class="card-description">Datos<code></code> </p>
          <table class="table table-striped">
            <thead>
              <tr>
                <th> Imagen </th>
                <th> Nombre</th>
                <th> Encargado</th>
                <th> RUC </th>
                <th> Horario </th>
                <th> Teléfono </th>
                <th> Dirección </th>
                <th> Distrito </th>
                <th> Ciudad </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bodegas as $bodega )
                <tr>
                    <td class="py-1">
                      <img src="../../../assets/images/faces-clipart/pic-{{$bodega->id}}.png" alt="image">
                    </td>
                    <td>{{$bodega->name}}</td>
                    <td>{{$bodega->encargado}}</td>
                    <td>{{$bodega->ruc}}</td>
                    <td>{{$bodega->horario}}</td>
                    <td>{{$bodega->phone}}</td>
                    <td>{{$bodega->direccion}}</td>
                    <td>{{$bodega->distrito}}</td>
                    <td>{{$bodega->ciudad}}</td>
                  </tr>
            @endforeach
              
             
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection