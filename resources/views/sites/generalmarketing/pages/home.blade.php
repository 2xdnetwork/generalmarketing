<?php //Settings: ****************************************************************
$path = $app->request->get("api_path");
$pathToExtend = $app->request->get('api_path_to_extend') . '.layouts.home';
$meta = $app->request->get('api_name'). ' | All Your Marketing Needs In One Place';
$description = 'We work hard to deliver real results and increase roi for our clients. All Your Marketing Needs In One Place.';
//Settings: ******************************************************************* ?> 

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
@include($path.'/content/home')
@stop

@section ('footer')
@include($path.'/includes/footer')
@stop

@section ('scripts')
@include($path.'/includes/scripts')
@stop