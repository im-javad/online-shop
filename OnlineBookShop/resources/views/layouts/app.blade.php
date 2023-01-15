<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/icomoon/icomoon.css">
</head>
<body>
<!-- Navbar part -->
@include('partials.navbar')

<!-- Alerts part -->
@include('partials.alerts')

<!-- content part -->
@yield('content')

<!-- Footer -->
@extends('layouts.footer')


