<?php //Settings: ********************************************************
$path = $app->request->get("api_path");
$pathToExtend = $app->request->get('api_path_to_extend') . '.layouts.home';
$meta = 'About Us | ' . $app->request->get('api_name');
$description = 'We help you build and grow your business. Finding a team that you can trust to deliver exceptional work every time and be available when you call is a hard and frustrating task.';
//Settings: ************************************************************ ?> 

@extends($pathToExtend)

@section ('meta')
@include($path.'/includes/meta')
@stop

@section ('styles')
@include($path.'/includes/styles')
@stop

@section ('header')
@include($path.'/includes/header')
@stop

@section ('content')
@include($path.'/content/about')
@stop

@section ('footer')
@include($path.'/includes/footer')
@stop

@section ('scripts')
@include($path.'/includes/scripts')
@stop