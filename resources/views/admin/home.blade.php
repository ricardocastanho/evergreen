@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm margin-top">
                <div class="card-header">ADMINISTRADOR</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card border">
                        <div class="card-body">
                            <h5 class="card-title">Acadêmicos</h5>
                            <p class="card-text">Acadêmicos EAD, Acadêmicos Presencial</p>
                            <a href="{{ route('adm.students.list') }}" class="btn btn-success">Acadêmicos</a>
                            <a href="{{ route('adm.create.student') }}" class="btn btn-light">Cadastrar</a>
                        </div>
                    </div>
                    <div class="card border">
                        <div class="card-body">
                            <h5 class="card-title">Colaboradores</h5>
                            <p class="card-text">Professores</p>
                            <a href="{{ route('adm.teachers.list') }}" class="btn btn-success">Professores</a>
                            <a href="{{ route('adm.create.teacher') }}" class="btn btn-light">Cadastrar</a>
                        </div>
                    </div>
                    <div class="card border">
                        <div class="card-body">
                            <h5 class="card-title">Cursos</h5>
                            <p class="card-text">Todos os cursos</p>
                            <a href="{{ route('adm.courses.list') }}" class="btn btn-success">Cursos</a>
                            <a href="" class="btn btn-light">Cadastrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
