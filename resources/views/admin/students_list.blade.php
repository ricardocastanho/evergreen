@extends('layouts.app')

@section('content')
    <div class="container">
        <main role="main">
            <div class="card border">
                <div class="card-body">
                    <h5 class="card-title">Acadêmicos</h5>
                    <table class="table table-ordered table-hover">
                        <thead>
                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Curso</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $s)
                            <tr>
                                <td>{{$s->id}}</td>
                                <td>{{$s->name}}</td>
                                <td>{{$s->email}}</td>
                                <td>{{$s->course->name}}</td>
                                <td>
                                    <a href="/home/students/edit/{{$s->id}}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="/home/students/destroy/{{$s->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="card-footer">
                        <a href="{{ route('register') }}" class="btn btn-sm btn-primary">Cadastrar novo Aluno</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
