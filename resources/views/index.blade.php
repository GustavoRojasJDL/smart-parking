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
    {{-- <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/') }}">Home</a>
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <a href="{{ route('login') }}">Login</a>
    
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div> --}}
    <div class="container-fluid">
        <div class="flex-center position-ref full-height">
            <div class="container">
                <div class="row">
                    <div class="title m-b-md" style="color:darkred">
                        Estacionamiento Inteligente
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8" {{-- id="map" --}}>
                        <img style="border-style:solid" src="{{ asset('./img/smartparkingSolutions.jpg') }}" alt="NoJala">
                    </div>
                    <div class="col-md-4">
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
                                        <td>{{ $slot->status }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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