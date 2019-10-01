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

<div class="contact">
    <div class="row container">
        <div class="col s12">
            <h2 class="title">Contact Us</h2>
        </div>

        @if(session()->has('message.status'))
        @if(session('message.status') == 'success')
        <div class="col s12 message-success">
            @else
            <div class="col s12 message-error">

                @endif
                {!! session('message.content') !!}
            </div>
            @endif

            @if($errors->any())
            <div class="col s12 errors">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form class="col s12" action={{route('contact.store')}} method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input name="firstname" id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input name="lastname" id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="instution" id="school_name" type="text" class="validate">
                        <label for="school_name">School / Instution Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input name="role" id="role" type="text" class="validate">
                        <label for="role">Your Role</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input name="contact" id="contact_number" type="number" class="validate">
                        <label for="contact_number">Contact Number</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="comments" id="comments" class="materialize-textarea"></textarea>
                        <label for="comments">Comments</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light submit-btn" type="submit" name="action">Submit
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>


    </div>
    @stop

    @section('bottom-js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = window.M.Sidenav.init(elems);

            var textarea = document.getElementById("comments");
            window.M.textareaAutoResize(comments);
        });
    </script>
    @stop