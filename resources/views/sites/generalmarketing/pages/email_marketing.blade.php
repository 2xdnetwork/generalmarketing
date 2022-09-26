<?php //Settings: ********************************************************
$path = $app->request->get("api_path");
$pathToExtend = $app->request->get('api_path_to_extend') . '.layouts.home';
$meta = 'Email Marketing | '. $app->request->get('api_name');
$description = 'We Manage Your Email Marketing Program. What can be included in a managed email marketing campaign services';
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
@include($path.'/content/email_marketing')
@stop

@section ('footer')
@include($path.'/includes/footer')
@stop

@section ('scripts')
@include($path.'/includes/scripts')
@stop