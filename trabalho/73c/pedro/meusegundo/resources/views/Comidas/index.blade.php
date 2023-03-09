<h3>Essa é a visão do Form de Comidas</h3>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>
<table style="width:30%">
    <tr>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Preço</th>
    </tr>
    @foreach($Comidas as $comida)

    <tr>
        <th> {{ $comida['nome'] }}</th>
        <th>{{ $comida['qntd']}}</th>
        <th>{{ $comida['preco']}}</th>
    </tr>


    @endforeach
</table>