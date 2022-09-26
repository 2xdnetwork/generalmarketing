<?php //Settings: ********************************************************
$path = $app->request->get("api_path");
$pathToExtend = $app->request->get('api_path_to_extend') . '.layouts.home';
$meta = 'SEO | '. $app->request->get('api_name');
$description = 'We take a very holistic approach to our SEO service. You have found the right digital advertising company to help your business climb to the top of search engines.';
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
@include($path.'/content/search_engine_optimization')
@stop

@section ('footer')
@include($path.'/includes/footer')
@stop

@section ('scripts')
@include($path.'/includes/scripts')
@stop