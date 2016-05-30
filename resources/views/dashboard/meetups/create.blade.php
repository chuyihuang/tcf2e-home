@extends('layouts.master')

@section('title', 'Create Meetup')

@section('content')

    <section class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2>Create Meetup</h2>
                    <div class="border"></div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        {!! Form::model($meetup = new \App\Meetup, [
                            'route' => 'dashboard.meetups.store',
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
                            @include('dashboard.meetups.form', ['submitButtonText' => 'Create'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop