@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><FONT SIZE="5pt" COLOR="#6C6B6F"><b>{{ $post->title }}</b></FONT> </div>

                    <div class="panel-body">
                        {{ $post->content }}

                        <br>
                        <br>
                        <b>Auteur : </b> {{ $post->user->name }}

                    </div>

                        @if(Auth::check() && Auth::user()->isAdmin)
                            <br>

                             <div class="panel-body">
                             <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info btn-block ">Modifier</a>
                             </div>

                            <div class="panel-body">
                            {!! Form::model($post, [
                            'route' => ['post.destroy', $post->id],
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
    </div>
@endsection