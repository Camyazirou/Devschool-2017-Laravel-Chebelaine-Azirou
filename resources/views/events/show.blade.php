@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><FONT SIZE="5pt" COLOR="#6C6B6F"><b>{{ $event->title }}</b></FONT></div>

                    <div class="panel-body">
                        {{ $event->place }}
                        <br>
                        <p>{{ $event->price }} euros</p>
                        <br>
                        {{ $event->description }}
                        <br>
                        <br>
                        <b>Date de début : </b>{{ $event->start_time }}
                        <br>
                        <b>Date de fin : </b>{{ $event->end_time }}

                        <br>
                        <br>
                        <b>Proposé par : </b> {{ $event->user->name }}

                    </div>


                        @if(Auth::check() && Auth::user()->isAdmin)
                            <br>
                            <div class="panel-body">
                            <a href="{{ route('event.edit', $event->id) }}" class="btn btn-info btn-block">Modifier</a>
                            </div>

                            <div class="panel-body">
                            {!! Form::model($event, [
                            'route' => ['event.destroy', $event->id],
                            'method' => 'DELETE'
                            ]) !!}

                            {!! Form::submit('Supprimer', ['class' => 'btn btn-outline-danger btn-block']) !!}

                            {!! Form::close() !!}
                            </div>

                        @endif

                </div>
            </div>
        </div>
    </div>
@endsection