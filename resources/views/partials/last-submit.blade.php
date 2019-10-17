<h1>Última respuesta</h1>
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
        <td>{{ $last->suggestions }}</td>
    </tr>
    <tr>
        <th scope="row">¿La información es correcta?</th>
        <td>
            @switch($last->is_correct)
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
        <td>{{ $last->score }}</td>
    </tr>
    </tbody>
</table>
