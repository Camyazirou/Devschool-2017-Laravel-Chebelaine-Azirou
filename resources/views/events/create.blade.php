@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Publier un évènement</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'event.store', 'method' => 'POST']) !!}

                        {!! Form::label('title', 'Titre') !!}
                        {!! Form::text('title', null,
                        ['class' => 'form-control', 'placeholder' => 'Titre']) !!}

                        {!! Form::label('description', 'Description de l\'évènement') !!}

                        {!! Form::textarea('description', null,
                        ['class' => 'form-control', 'placeholder' => 'Description']) !!}

                        {!! Form::label('start_time', 'Date de début de l\'évènement') !!}

                        {!! Form::date('start_time', \Carbon\Carbon::now(),
                        ['class' => 'form-control', 'placeholder' => 'Quand débute l\'évènement?']) !!}

                        {!! Form::label('end_time', 'Date de fin de l\'évènement') !!}

                        {!! Form::date('end_time',\Carbon\Carbon::now(),
                        ['class' => 'form-control', 'placeholder' => 'Quand fini l\'évènement?']) !!}


                        {!! Form::label('place', 'Lieu de l\'évènement') !!}

                        {!! Form::textarea('place', null,
                        ['class' => 'form-control', 'placeholder' => 'Où se déroule l\'évènement?']) !!}

                        {!! Form::label('price', 'Prix') !!}
                        {!! Form::text('price', null,
                        ['class' => 'form-control', 'placeholder' => 'Prix de l\'évènement']) !!}

                        <br>
                        {!! Form::submit('Publier', ['class' => 'btn btn-info']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection