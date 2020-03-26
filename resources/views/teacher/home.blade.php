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

                        <h5 class="card-title">Disciplinas</h5>
                        <table class="table table-ordered table-hover">
                            <thead>
                                <tr>
                                    <th>Período Letivo</th>
                                    <th>Disciplina</th>
                                    <th>CH</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($subject as $s)
                                    @if($s->teacher_id == $teacher->id)
                                        <tr>
                                            <td>2020-1</td>
                                            <td>{{$s->name}}</td>
                                            <td>120</td>
                                            <td><a href="{{route('teacher.subject.details', $s->id)}}" class="btn btn-sm btn-success">Ver</a></td>
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
