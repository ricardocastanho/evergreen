@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card shadow-sm margin-top">
                    <div class="card-body">
                        <h1 class="card-title margin">
                            <img src="/storage/{{\Auth::user()->image}}" class="img-profile">&nbsp;{{ Auth::user()->name }}
                        </h1>
                    </div>
                </div>

                <div class="card shadow-sm margin-top2">
                    <div class="card-body">
                        <h3 class="card-title">Meus Cursos</h3>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/storage/{{\Auth::user()->course->image}}" class="card-img" height="100px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{\Auth::user()->course->name}}</h5>
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
                                    <th>Faltas</th>
                                    <th>AV1</th>
                                    <th>AV2</th>
                                    <th>AV3</th>
                                    <th>Resultado Final</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subject as $s)
                                    @foreach($studentsubject as $ss)
                                        @if($s->id == $ss->subject_id && $ss->student_id == \Auth::user()->id)
                                            <tr>
                                                <td>{{$s->schoolyear}}</td>
                                                <td>{{$s->name}}</td>
                                                <td>{{$ss->situation}}</td>
                                                <td>{{$s->workload}}</td>
                                                <td>{{$ss->faults}}</td>
                                                <td>{{$ss->av1}}</td>
                                                <td>{{$ss->av2}}</td>
                                                <td>{{$ss->av3}}</td>
                                                <td>{{($ss->av1 + $ss->av2 + $ss->av3)/3}}</td>
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
