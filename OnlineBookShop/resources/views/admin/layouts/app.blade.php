@extends('admin.layouts.header')

@include('admin.partials.navbar')

@include('partials.alerts')

@include('partials.validation-errors')

@yield('content')

@extends('admin.layouts.footer')
