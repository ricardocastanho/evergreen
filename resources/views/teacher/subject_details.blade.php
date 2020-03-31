@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Olá, {{ Auth::user()->name }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="card-title">{{$subject->name}}</h5>
                            <table class="table table-ordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Alunos</th>
                                        <th>Notas</th>
                                        <th>Faltas</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($coursesubject as $cs)
                                        @foreach($course as $c)
                                            @foreach($student as $st)
                                                @if($subject->id == $cs->subject_id && $cs->course_id == $c->id && $c->id == $st->course_id)
                                                    <tr>
                                                        <td>{{$st->name}}</td>
                                                        <td>10</td>
                                                        <td>0</td>
                                                        <td><a href="" class="btn btn-sm btn-success">Ver</a></td>
                                                    </tr>
                                                @endif
                                            @endforeach
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
