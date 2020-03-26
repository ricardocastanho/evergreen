@extends('layouts.app')

@section('content')
    <div class="container">
        <main role="main">
            <div class="card border">
                <div class="card-body">
                    <h5 class="card-title">Professores</h5>
                    <table class="table table-ordered table-hover">
                        <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Disciplinas</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $t)
                            <tr>
                                <td>{{$t->id}}</td>
                                <td>{{$t->name}}</td>
                                <td>{{$t->email}}</td>
                                <td>
                                    <ul>
                                        @foreach($subjects as $s)
                                            @if($t->id == $s->teacher_id)
                                                <li>{{$s->name}}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="/home/teachers/edit/{{$t->id}}" class="btn btn-sm btn-success">Editar</a>
                                    <a href="/home/teachers/destroy/{{$t->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="card-footer">
                        <a href="{{ route('register') }}" class="btn btn-sm btn-success">Cadastrar novo Professor</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
