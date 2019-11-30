@extends('lecture.layouts.app')
@section('title', 'Lecture Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lecture's Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>Welcome Lecture : <strong>{{ Auth::user()->name}}</strong></p>
                        <p>Your joined  : {{ Auth::user()->created_at->diffForHumans() }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
