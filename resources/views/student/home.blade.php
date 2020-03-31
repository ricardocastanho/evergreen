@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Olá, {{ Auth::user()->name }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                        @endif

                        <h5 class="card-title">Grade Curricular</h5>
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
                                                <td>10</td>
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
