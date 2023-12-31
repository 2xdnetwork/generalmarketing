<?php //Settings: ********************************************************
$path = $app->request->get("api_path");
$pathToExtend = $app->request->get('api_path_to_extend') . '.layouts.home';
$meta = 'Brand Strategy | ' . $app->request->get('api_name');
$description = 'Your brand is everything your customers think you are, everything they associate with you, and everything they expect when they interact with you. ';
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
@include($path.'/content/brand_strategy')
@stop

@section ('footer')
@include($path.'/includes/footer')
@stop

@section ('scripts')
@include($path.'/includes/scripts')
@stop