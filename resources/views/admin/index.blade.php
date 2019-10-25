@extends('layouts.app')
@section('content')
<div class="loader">
  <div class="flex-center position-ref full-height">
    <div class="content">
      <div class="title m-b-md">
        Welcome to Smart Parking
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="title" style="color:darkred">
      {{ config('app.name', 'Laravel') }}
    </div>
  </div>
  <div class="row">
    <div class="col-md-6" id="DivParkingSlots">
      <img style="border-style:solid" src="{{ asset('./img/ParkingSlots.jpg') }}" alt="imagen_Slots" id="ParkingSlots"
        class="img-fluid">
    </div>
    <div class="col-md-6" id="here">
      <div class="table-wrapper-scroll-y my-custom-scrollbar">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Estado</th>
              <th scope="col">Cambiar estado</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($slots as $slot)
            <tr>
              <form action="{{ route('slots.update',['user'=>$user,'slot'=>$slot]) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <input type="hidden" name="{{ $slot->id }}">
                <td>{{ $slot->name }}</td>
                @if ($slot->Status == 1)
                <td>Ocupado</td>
                @else
                <td>Desocupado</td>
                @endif
                <td><a class="btn btn-primary" href="#" role="button">Cambio de estado</a></td>
              </form>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
  function sendRequest() {
    
  }
</script>
@endsection