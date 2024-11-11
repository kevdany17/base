@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @if ($edit)
            @php
                $dataTypeContent->user = $dataTypeContent->userData->email;
                $dataTypeContent->before_user = $dataTypeContent->userData->email;
            @endphp
        @endif
        <div id="r-customers" data-csrf="{{ csrf_token() }}" data-url="{{url('/')}}" data-customer="{{$dataTypeContent}}" data-edit="{{$edit}}" data-api="{{Auth::user()->api_token}}" >

        </div>
    </div>
@stop

@section('javascript')
    <script src="{{ mix('js/pages/Customers.js') }}"></script>
@stop
