<!doctype html>
<head>
    <title>Evergreen</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div class="container">
    <main role="main">
        <div class="jumbotron bg-light border border-secondary">
            <div class="row">
                <div class="card-deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Acadêmico</h5>
                            <p class="card-text">
                                Acadêmicos EAD, Acadêmicos Presencial
                            </p>
                            <a href="{{route('student.login')}}" class="btn btn-primary">Clique aqui!</a>
                        </div>
                    </div>
                    <div class="card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Colaboradores</h5>
                            <p class="card-text">
                                Professores
                            </p>
                            <a href="{{route('teacher.login')}}" class="btn btn-primary">Clique aqui!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
