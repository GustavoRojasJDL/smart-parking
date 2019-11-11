@extends('layouts.app')
@section('content')
@role(['viewer'])`
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
        <div class="col-md-8" {{-- id="map" --}}>
            <img style="border-style:solid" src="{{ asset('./img/smartparkingSolutions.jpeg') }}" alt="NoJala"
                class="img-fluid">
            {{-- @foreach ($slots as $slot)
            @php
            $type = $slot->Status
            @endphp
            @switch($type)
            @case(1)
            <div class="prueba">
                hola
            </div>
            @break
            @case(2)
            <div class="prueba">
                adios
            </div>
            @break
            @case(3)
            <div class="prueba">
                buenas
            </div>
            @break
            @default
            <div class="prueba">
                adios
            </div>
            @break
            @endswitch
            @endforeach --}}
        </div>
        <div class="col-md-4" id="here">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slots as $slot)
                        <tr>
                            <td>{{ $slot->name }}</td>
                            @php
                            $type = $slot->Status
                            @endphp
                            @switch($type)
                            @case(1)
                            <td>Ocupado</td>
                            @break
                            @case(2)
                            <td>Desocupado</td>
                            @break
                            @case(3)
                            <td>Inhabilitado</td>
                            @break
                            @default
                            @break
                            @endswitch
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endrole
@role(['admin'])`
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
            {{-- <canvas id="myCanvas" width="800" height="400" style="border:1px solid #d3d3d3;">
                Your browser does not support the HTML5 canvas tag.</canvas> --}}
            <img style="border-style:solid" src="{{ asset('./img/smartparkingSolutions.jpeg') }}"
            alt="imagen_Slots"
            id="ParkingSlots" class="img-fluid">
        </div>
        <div class="col-md-6" id="here">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Cambiar estado</th>
                            {{-- <th scope="col">Inhabilitar</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slots as $slot)
                        <tr>
                            <input type="hidden" name="{{ $slot->id }}">
                            <td>{{ $slot->name }}</td>
                            @php
                            $type = $slot->Status
                            @endphp
                            @switch($type)
                            @case(1)
                            <td>Ocupado</td>
                            @break
                            @case(2)
                            <td>Desocupado</td>
                            @break
                            @case(3)
                            <td>Inhabilitado</td>
                            @break
                            @default
                            @break
                            @endswitch
                            <td>
                                <form action="{{ route('slots.update',['slot'=>$slot->id]) }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <input type="hidden" name="Status" value="{{ $slot->Status }}">
                                    <button type="submit" class="btn btn-primary">Cambio de estado</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endrole
{{-- <script>
        // Initialize and add the map
            function initMap() {
              // The location of une
              var une = {lat: 22.282285, lng: -97.872184};
              // The map, centered at une
              var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 20, center: une});
              // The marker, positioned at une
              var marker = new google.maps.Marker({position: une, map: map ,});
            }
    </script> --}}
{{-- @php
    $key = 'AIzaSyDqsdnNHbNbmHIJq9_qtKTe-MrgWYLIM54';
    @endphp --}}
{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ $key }}&callback=initMap">
</script> --}}
@endsection