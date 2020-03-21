@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ADMINISTRADOR</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title">Acadêmicos</h5>
                                <p class="card-text">
                                    Acadêmicos EAD, Acadêmicos Presencial
                                </p>
                                <a href="{{ route('students.list') }}" class="btn btn-primary">Acadêmicos</a>
                                <a href="{{ route('register') }}" class="btn btn-dark">Matricular</a>
                            </div>
                        </div>
                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title">Colaboradores</h5>
                                <p class="card-text">
                                    Professores
                                </p>
                                <a href="{{ route('register') }}" class="btn btn-primary">Professores</a>
                                <a href="{{ route('register') }}" class="btn btn-dark">Cadastrar</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
