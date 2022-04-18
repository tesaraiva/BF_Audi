@extends('master.main')

@section('content')

@component('components.carousel')
@endcomponent

@component('components.cards', ['cards' => $cards])
@endcomponent

@component('components.image-info')
@endcomponent

@endsection