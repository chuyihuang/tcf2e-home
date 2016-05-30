@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

    <section id="services" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2>Admin Dashboard</h2>
                    <div class="border"></div>
                    <p>You are Login！
                        <a class="text-primary" href="/dashboard/auth/logout">Click me</a>
                        to Logout.
                    </p>
                </div>
            </div>
    </section>

    <section class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2>Meetup Management</h2>
                    <div class="border"></div>
                    <p><a class="btn btn-blue" href="{{ route('dashboard.meetups.index') }}">GO</a></p>
                </div>
            </div>
    </section>
@stop