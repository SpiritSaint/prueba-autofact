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
