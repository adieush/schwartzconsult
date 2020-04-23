@extends('layouts.home')

@section('content')
    @include('welcome.sections.about')
    @include('welcome.sections.features')
    @include('welcome.sections.companies')
{{--    @include('welcome.sections.blog')--}}
@endsection
