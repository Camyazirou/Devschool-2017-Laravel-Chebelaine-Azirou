@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des Evenements</div>

                    <div class="panel-body">
                        @foreach($list as $event)
                            <h2>
                                <a href="{{ route('event.show', $event->id) }}">{{ $event->title }}</a>
                            </h2>
                            <p>{{ $event->place }}</p>
                            <p>{{ $event->price }} euros </p>
                            <p>{{ $event->description }}</p>
                            <em>Proposé par : {{ $event->user->name }} </em>
                        @endforeach

                        {!! $list->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection