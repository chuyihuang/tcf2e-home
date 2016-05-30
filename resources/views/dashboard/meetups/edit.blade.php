@extends('layouts.master')

@section('title', 'Edit Meetup')

@section('content')

    <section class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2>Edit Meetup</h2>
                    <div class="border"></div>
                </div>
                    <hr/>
                        <h3>Image Preview</h3>
                        <img class="preview img-thumbnail" src="{{ $meetup->image_path }}" alt="cover"/>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            {!! Form::model($meetup, [
                                'route' => ['dashboard.meetups.update', $meetup->id],
                                'method'=> 'PUT',
                                'class' => 'form-horizontal',
                                'files' => true
                            ]) !!}
                                @include('dashboard.meetups.form', ['submitButtonText' => 'Update'])
                            {!! Form::close() !!}

                            {!! Form::model($meetup, [
                                'route' => ['dashboard.meetups.destroy', $meetup->id],
                                'method'=> 'delete',
                                'class' => 'form-horizontal',
                            ]) !!}
                                <!-- Delete Form Input -->
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-2">
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
            </div>
        </div>
    </section>

@stop