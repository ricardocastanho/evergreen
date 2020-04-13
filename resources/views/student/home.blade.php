@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card shadow-sm margin-top">
                    <div class="card-body">
                        <h1 class="card-title margin"><img src="/storage/{{$student->image}}" class="img-profile">&nbsp;{{ Auth::user()->name }}</h1>
                    </div>
                </div>

                <div class="card shadow-sm margin-top2">
                    <div class="card-body">
                        <h3 class="card-title">Meus Cursos</h3>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/storage/{{$student->course->image}}" class="card-img" height="100px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$student->course->name}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm margin-top2">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                        @endif

                        <h3 class="card-title">Minhas Disciplinas</h3>
                        <table class="table table-ordered table-hover">
                            <thead>
                                <tr>
                                    <th>Período Letivo</th>
                                    <th>Disciplina</th>
                                    <th>Situação</th>
                                    <th>CH</th>
                                    <th>Notas/Conceito</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subject as $s)
                                    @foreach($coursesubject as $c)
                                        @if($s->id == $c->subject_id && $c->course_id == $student->course->id)
                                            <tr>
                                                <td>2020-1</td>
                                                <td>{{$s->name}}</td>
                                                <td>Aprovado</td>
                                                <td>120</td>
                                                <td class="text-center">10</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
