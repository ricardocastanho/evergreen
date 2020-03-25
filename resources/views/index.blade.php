<!doctype html>
<head>
    <title>Sisitema Acadêmico</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<h1 class="display-1 text-light">padding</h1>
<div class="container px-sm-5">
    <h1 class="display-4 text-center">Ever<span class="text-success">Green</span></h1>
    <main role="main">
        <div class="jumbotron bg-white">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card text-center mb-3">
                        <div class="card-body">
                            <h3 class="card-title text-success">Acadêmico</h3>
                            <p class="card-text">
                                Acadêmicos EAD, Acadêmicos Presencial
                            </p>
                            <a href="{{route('student.login')}}" class="btn btn-success btn-block">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-center border border-sucess">
                        <div class="card-body">
                            <h3 class="card-title text-success">Colaboradores</h3>
                            <p class="card-text">
                                Professores
                            </p>
                            <a href="{{route('teacher.login')}}" class="btn btn-success btn-block">Login</a>
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
