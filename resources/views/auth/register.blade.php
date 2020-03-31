@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    @if(isset($current) && $current == "student")
                        <div class="card-header">Cadastrar - Aluno</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('adm.create.student.post') }}">
                                @elseif(isset($current) && $current == "teacher")
                                    <div class="card-header">Cadastrar - Professor</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('adm.create.teacher.post') }}">
                                            @endif

                                            @csrf

                                            <div class="form-group row">
                                                <label for="name"
                                                       class="col-md-4 col-form-label text-md-right">Nome</label>
                                                <div class="col-md-6">
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name" required autocomplete="name" autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email"
                                                       class="col-md-4 col-form-label text-md-right">E-mail</label>
                                                <div class="col-md-6">
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email" required autocomplete="email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            @if(isset($current) && $current == "student")
                                                <div class="form-group row">
                                                    <label for="course" class="col-md-4 col-form-label text-md-right">Curso</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" id="course_id" name="course_id">
                                                            @foreach($course as $c)
                                                                <option class="form-control"
                                                                        value="{{$c->id}}">{{$c->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password" required autocomplete="new-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-confirm"
                                                       class="col-md-4 col-form-label text-md-right">Confirme sua
                                                    Senha</label>
                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                           name="password_confirmation" required
                                                           autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                        </div>
                </div>
            </div>
        </div>
@endsection
