@extends('layouts.admin_layout')

@section('header')
    Subscriptions
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    @if(count($subscriptions))
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($subscriptions as $subscription)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $subscription->email }}</td>
                                    <td>{{ $subscription->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>There are no subscriptions.</h2>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection