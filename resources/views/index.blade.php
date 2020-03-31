@extends('layouts.index')

@section('layout')
    <div class="container px-sm-5 padding1">
        <h1 class="display-4 text-center"><span class="text-light">Ever</span><span class="text-success">Green</span></h1>
        <h4 class="text-center"><span class="text-light">A universidade dos universitários</span></h4>
        <main role="main">
            <div class="row padding2 opacity align">
                <div class="col-sm-4">
                    <div class="card text-center mb-3">
                        <div class="card-body">
                            <h3 class="card-title text-success">Acadêmico</h3>
                            <p class="card-text">Acadêmicos EAD, Acadêmicos Presencial</p>
                            <a href="{{route('student.login')}}" class="btn btn-success btn-block">Entrar</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card text-center border border-sucess">
                        <div class="card-body">
                            <h3 class="card-title text-success">Colaboradores</h3>
                            <p class="card-text">Professores</p>
                            <a href="{{route('teacher.login')}}" class="btn btn-success btn-block">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
