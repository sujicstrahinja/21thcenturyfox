@extends('layouts.admin_layout')

@section('header')
    Messages
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    @if(count($messages))
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($messages as $message)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $message->first_name }}</td>
                                    <td>{{ $message->last_name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>{{ $message->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>There are no messages.</h2>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection