@foreach (\App\Response::all() as $response)
    <h2>Respuesta #{{ $response->id }}</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Pregunta</th>
            <th scope="col">Respuesta</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">¿Qué te gustaría que agregáramos al informe?</th>
            <td>{{ $response->suggestions }}</td>
        </tr>
        <tr>
            <th scope="row">¿La información es correcta?</th>
            <td>
                @switch($response->is_correct)
                    @case(1)
                    SI
                    @break
                    @case(2)
                    NO
                    @break
                    @case(3)
                    Más o menos
                    @break
                @endswitch
            </td>
        </tr>
        <tr>
            <th scope="row">Valoración de la rapidez</th>
            <td>{{ $response->score }}</td>
        </tr>
        </tbody>
    </table>
@endforeach
