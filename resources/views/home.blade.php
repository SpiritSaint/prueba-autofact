@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav nav-pills flex-column flex-sm-row mb-4">
                            @if (\App\Repositories\MonthlyFormRepository::can())
                                <a class="flex-sm-fill text-sm-center nav-link active" href="#">Formulario</a>
                            @else
                                <a class="flex-sm-fill text-sm-center nav-link active" href="#">Última respuesta</a>
                            @endif
                            @if (auth()->user()->is_admin)
                                <a class="flex-sm-fill text-sm-center nav-link" href="/graph">Gráfico</a>
                                <a class="flex-sm-fill text-sm-center nav-link" href="/all">Todas las respuestas</a>
                            @endif
                        </nav>
                        @if (\App\Repositories\MonthlyFormRepository::can())
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @include('partials.form')
                        @else
                            @include('partials.last-submit', ['last' => \App\Repositories\MonthlyFormRepository::last()])
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

