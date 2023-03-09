<form action="/RotaComida" method="post">
    {{ csrf_field() }}<br>
    <label for="fname">Nome da Comida:</label><br>
    <input type="text" id="fname" name="nome" placeholder=" Ex: Macarrão"><br>
    <label for="lname">Quantidade:</label><br>
    <input type="text" id="lname" name="qntd" placeholder="Ex: 2"><br><br>
    <label for="lname">Preço:</label><br>
    <input type="text" id="lname" name="preco" placeholder="Ex: R$:2,00"><br><br>
    <input type="submit" value="Submit">
</form>