@extends('layouts.app')

@section('title', 'International Conference on Gaza\'s Psychosocial Recovery | Mending Hearts and Minds')

@section('content')
    @include('sections.hero')
    @include('sections.introduction')
    @include('sections.who-we-are')
    @include('sections.vision')
    @include('sections.mission')
    @include('sections.values')
    @include('sections.partners')
    @include('sections.donation')
    @include('sections.cta')
@endsection
