@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm margin-top">
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
                                        <th>Matrícula</th>
                                        <th>Alunos</th>
                                        <th>Faltas</th>
                                        <th>AV1</th>
                                        <th>AV2</th>
                                        <th>AV3</th>
                                        <th>Resultado Final</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($studentsubject as $ss)
                                        @foreach($student as $st)
                                            @if($subject->id == $ss->subject_id && $ss->student_id == $st->id)
                                                <tr>
                                                    <td>{{$st->id}}</td>
                                                    <td>{{$st->name}}</td>
                                                    <td>{{$ss->faults}}</td>
                                                    <td>{{$ss->av1}}</td>
                                                    <td>{{$ss->av2}}</td>
                                                    <td>{{$ss->av3}}</td>
                                                    <td>{{($ss->av1 + $ss->av2 + $ss->av3)/3}}</td>
                                                    <td>
                                                        <div class="nav " style="list-style-type: none;">
                                                            <a data-toggle="dropdown"><button type="button" class="btn"  style="padding-top: 0px;padding-bottom: 2px"><svg class="bi bi-three-dots-vertical" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm0-5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm0-5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" clip-rule="evenodd"/></svg></button></a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li class="nav-item"><a class="dropdown-item text-dark">Mais Detalhes</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
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
