@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }}</div>

                    <div class="panel-body">
                        <li><a href="{{ route('event.create') }}">Publier un évènement </a></li>
                        <li><a href="{{ route('post.create') }}">Publier un article </a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection