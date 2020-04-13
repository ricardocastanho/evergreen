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
                        <h5 class="card-title">Minhas Disciplinas</h5>
                        <table class="table table-ordered table-hover">
                            <thead>
                                <tr>
                                    <th>Período Letivo</th>
                                    <th>Disciplina</th>
                                    <th>CH</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subject as $s)
                                    @if($s->teacher_id == \Auth::user()->id)
                                        <tr>
                                            <td>2020-1</td>
                                            <td>{{$s->name}}</td>
                                            <td>120</td>
                                            <td>
                                                <div class="nav " style="list-style-type: none;">
                                                    <a data-toggle="dropdown"><button type="button" class="btn"  style="padding-top: 0px;padding-bottom: 2px"><svg class="bi bi-three-dots-vertical" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm0-5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm0-5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" clip-rule="evenodd"/></svg></button></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li class="nav-item">
                                                            <a class="dropdown-item text-dark" href="{{route('teacher.subject.details', $s->id)}}">Mais Detalhes</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
