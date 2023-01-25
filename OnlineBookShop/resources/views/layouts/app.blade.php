<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="/icomoon/icomoon.css">
</head>
<body>
@include('partials.navbar')

@include('partials.alerts')

@yield('content')

@extends('layouts.footer')


