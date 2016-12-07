@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $event->title }}</div>

                    <div class="panel-body">
                        {{ $event->place }}
                        {{ $event->price }}
                        {{ $event->description }}
                        {{ $event->timestamps }}

                        <br>
                        <em>Auteur : {{ $event->user->name }} </em>

                        @if(Auth::check() && Auth::user()->isAdmin)
                            <br>
                            <a href="{{ route('event.edit', $event->id) }}" class="btn btn-success">Modifier</a>

                            {!! Form::model($event, [
                            'route' => ['event.destroy', $event->id],
                            'method' => 'DELETE'
                            ]) !!}

                            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}

                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection