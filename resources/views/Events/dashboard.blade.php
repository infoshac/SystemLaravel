@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/event/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>{{count($event->users)}}</td>
                    <td><a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn">Editar</a>
                        <form action="/events/{{ $event->id }}" method="post">
                           @csrf
                           @method("delete")     
                           <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                        </form>
                </tr>
            @endforeach    
        </tbody>
    </table>
    @else
    <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
    @endif
</div>
<!--Eventos confirmados-->
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos COnfirmados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count($eventsAsParticipant)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventsAsParticipant as $event)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/event/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td> {{count($event->users)}} </td>
                    <td>
                        <form action="events/leave/{{$event->id}}" method="post">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger">
                                sair do evento
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
    @else
        <p>Voce nao tem evento confirmado</p>
    @endif
</div>
@endsection