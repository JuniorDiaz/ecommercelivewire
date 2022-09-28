@extends('layouts.app')
@section('content')

    <!--Body Content-->
    <div id="page-content">
        <livewire:home-slider/>
        <!--Mais Vendidos-->
        <livewire:mais-vendidos/>
        <!--Mais Vendidos-->
        <!--Parallax Section-->
        <livewire:paralax/>
        <!--End Parallax Section-->
        <!--New Arrivals-->
        <livewire:novos-produtos/>
        <!--End Featured Product-->
        <!--Logo Slider-->
        <livewire:logo-marcas/>
        <!--End Logo Slider-->
    </div>
    <!--End Body Content-->
@endsection
