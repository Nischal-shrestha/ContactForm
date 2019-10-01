@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/contact.css') }}">
@stop

@section('content')
<nav class="navigation">
    <div class="nav-wrapper container">
        <a href="#!" class="brand-logo"><i class="fa fa-play orange-text" aria-hidden="true"></i>Click<b class="orange-text">View</b></a>
        <ul class="right hide-on-med-and-down">
            <li><a href={{ route('contact') }}>Contact</a></li>
            <li><a href={{ route('contact.list') }}>Customers List</a></li>
        </ul>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>
</nav>

<ul class="sidenav" id="mobile-nav">
    <li><a href={{ route('contact') }}>Contact</a></li>
    <li><a href={{ route('contact.list') }}>Customers List</a></li>
</ul>

<div class="customerlist">
    
    @if(count($customers) > 0)
        <h2>Customers</h2>
    @else
        <h2>No Customers</h2>
    @endif


</div>
@stop

@section('bottom-js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = window.M.Sidenav.init(elems);
    });
</script>
@stop