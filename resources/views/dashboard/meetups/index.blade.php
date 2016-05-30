@extends('layouts.master')

@section('title', 'Meetups Management')

@section('content')

<section class="page">
    <div class="container">
        <div class="content text-center">
            <div class="heading">
                <h2>Meetups Management</h2>
                <div class="border"></div>
                <hr/>
                <a class="btn btn-success" href="{{ route('dashboard.meetups.create') }}">
                    <span class="glyphicon glyphicon-plus"> Create an Meetup</span>
                </a>
                <hr/>
                <table class="table table-hover text-left">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Image path</th>
                            <th>Url</th>
                            <th>Meetup time</th>
                            <th>Published at</th>
                            <th>Edit</th>
                            {{--<td>Delete</td>--}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($meetups as $meetup)
                            <tr>
                                <td>{{ $meetup->id }}</td>
                                <td>{{ $meetup->title }}</td>
                                <td>{{ $meetup->location }}</td>
                                <td><a href="{{ $meetup->image_path }}">Click</a></td>
                                <td><a href="{{ $meetup->url }}">{{ $meetup->url }}</a></td>
                                <td>{{ formatMeetupTime($meetup)}}</td>
                                <td>{{ $meetup->published_at }}</td>
                                <td><a href="{{ route('dashboard.meetups.edit', $meetup->id) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@stop