@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (auth()->user()->is_admin)

                            <h1>Administrador</h1>
                            <div>
                                <div class="ct-chart ct-perfect-fourth"></div>
                            </div>
                        @endif


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h1>Formulario</h1>

                        <form method="POST" action="{{ route('responses.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="suggestions">¿Qué te gustaría que agregáramos al informe?</label>
                                <textarea name="suggestions" id="suggestions" type="password" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="is_correct">¿La información es correcta?</label>
                                <select name="is_correct" id="is_correct" class="custom-select">
                                    <option selected>Seleccione una opción</option>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                    <option value="3">Más o menos</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="is_correct">¿Del 1 al 5, es rápido el sitio?</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input name="score" class="form-check-input" type="radio" id="inlineCheckbox1" value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="score" class="form-check-input" type="radio" id="inlineCheckbox2" value="2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="score" class="form-check-input" type="radio" id="inlineCheckbox3" value="3">
                                    <label class="form-check-label" for="inlineCheckbox3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="score" class="form-check-input" type="radio" id="inlineCheckbox4" value="4">
                                    <label class="form-check-label" for="inlineCheckbox4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="score" class="form-check-input" type="radio" id="inlineCheckbox5" value="5">
                                    <label class="form-check-label" for="inlineCheckbox5">5</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('chart')
    <style>
        .ct-label {
            color: #FFF !important;
            fill: #FFF !important;
            text-shadow: 0px 1px 0px rgba(0,0,0,1);
        }
    </style>

    <script  type="text/javascript">
        var objects = {!! \App\Response::all()->toJson() !!};
        var values = [1,2,3,4,5].map(function(score) {
            return (objects.filter((object) => object.score === score).length / objects.length) * 100;
        })
        (function() {
            var data = {
                labels: ['1', '2', '3', '4', '5'],
                series: values
            };
            var options = {
                labelInterpolationFnc: function(value) {
                    return value
                }
            };
            var responsiveOptions = [
                ['screen and (min-width: 640px)', {
                    chartPadding: 30,
                    labelOffset: 100,
                    labelDirection: 'explode',
                    labelInterpolationFnc: function(value) {
                        return value;
                    }
                }],
                ['screen and (min-width: 1024px)', {
                    labelOffset: 80,
                    chartPadding: 20
                }]
            ];
            setTimeout(function () {
                new Chartist.Pie('.ct-chart', data, options, responsiveOptions);
            }, 1000)
        })();
    </script>
@endsection

