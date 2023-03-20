<form action="/RotaImc" method="post">
    {{csrf_field()}}
    <h1>IMC</h1><br>

    <p>Altura</p><br>
    <input type="number" step="0.01" min="0" max="9.99" inputmode="numeric" name="altura">




    <p>Peso</p><br>
    <input type="number" step="0.01" inputmode="numeric" name="peso">

    <input type="submit" value="Enviar">
</form>