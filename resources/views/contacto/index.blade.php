@extends('templeta.main_titulo')

@section('titulo','Contacto')
@section('body')
    <div id="content">
        <div class="container" id="contact">
            @include('contacto.partials.presentacion')
            @include('contacto.partials.info')
            @include('contacto.partials.contacto')
        </div>
        <!-- /#contact.container -->
    </div>
    <!-- /#content -->

    <div id="map">

    </div>
@endsection

@section('scripts')
@endsection()