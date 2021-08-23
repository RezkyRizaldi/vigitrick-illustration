@extends('layouts.main')

@section('title', str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')))

@section('content')
	@include('content.sections.heroes')

	@include('content.sections.gallery')

	@include('content.sections.pricing')
@endsection
