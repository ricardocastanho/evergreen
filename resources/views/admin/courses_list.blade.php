@extends('layouts.app')

@section('content')
    <div class="container">
        <main role="main">
            <div class="card border shadow-sm margin-top">
                <div class="card-body">
                    <h5 class="card-title">Cursos</h5>
                    <table class="table table-ordered table-hover">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Disciplinas</th>
                                <th>Alunos Matriculados</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $c)
                                <tr>
                                    <td>{{$c->id}}</td>
                                    <td>{{$c->name}}</td>
                                    <td class="text-center">{{\App\CourseSubject::where('course_id', $c->id)->count()}}</td>
                                    <td class="text-center">{{\App\Student::where('course_id', $c->id)->count()}}</td>
                                    <td><a href="{{ route('courses.edit', $c->id) }}" class="btn btn-sm btn-success">Editar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="card-footer">
                        <a href="{{ route('courses.create') }}" class="btn btn-sm btn-success">Cadastrar novo Curso</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
