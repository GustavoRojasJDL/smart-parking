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
        <div class="col-md-8" {{-- id="map" --}}>
            {{-- <img style="border-style:solid" src="{{ asset('./img/smartparkingSolutions.jpg') }}" alt="NoJala"
            class="img-fluid"> --}}
            @foreach ($slots as $slot)
            @if ($slot->Status != 1)
            <div class="prueba">
                hola
            </div>
            @else
            <div class="prueba">
                adios
            </div>
            @endif
                
            @endforeach
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
                            @if ($slot->Status == 1)
                            <td>Ocupado</td>
                            @else
                            <td>Desocupado</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
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