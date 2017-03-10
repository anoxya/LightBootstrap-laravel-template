@extends('index')

@section('extra-style')

@endsection

@section('contents')
	<div id="map"></div>
@endsection

@section('extra-script')
	<script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>
@endsection