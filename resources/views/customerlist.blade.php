@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/contactlist.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/contact.css') }}">
@stop

@section('content')
<div class="row container">

    <div class="col s12 customerlist">

        @if(count($customers) > 0)
        <h2 class="title">Customers List</h2>
        <table class="responsive-table centered highlight">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Role</th>
                    <th>Instution</th>
                    <th>Comments</th>
                    <th>Submitted On</th>
                </tr>
            </thead>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->firstname}}</td>
                <td>{{$customer->lastname}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->contact}}</td>
                <td>{{$customer->role}}</td>
                <td>{{$customer->instution}}</td>
                <td>{{$customer->comments}}</td>
                <td>{{$customer->created_at}}</td>
            </tr>
            @endforeach
        </table>
        @else
        <h2 align="center" class="no-customers">No Customers to display</h2>
        @endif


    </div>

</div>

@stop