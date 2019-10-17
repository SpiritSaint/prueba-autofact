@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav nav-pills flex-column flex-sm-row mb-4">
                            @if (\App\Repositories\MonthlyFormRepository::can())
                                <a class="flex-sm-fill text-sm-center nav-link" href="/home">Formulario</a>
                            @else
                                <a class="flex-sm-fill text-sm-center nav-link" href="/home">Última respuesta</a>
                            @endif
                            @if (auth()->user()->is_admin)
                                <a class="flex-sm-fill text-sm-center nav-link active" href="/graph">Gráfico</a>
                                <a class="flex-sm-fill text-sm-center nav-link" href="/all">Todas las respuestas</a>
                            @endif
                        </nav>
                        <div class="tab-content" id="content">
                            @if (auth()->user()->is_admin)
                                @include('partials.graph')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

