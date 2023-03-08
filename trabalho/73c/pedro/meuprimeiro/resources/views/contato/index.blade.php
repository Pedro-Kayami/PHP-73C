<h3>Essa é a visão contato</h3>
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
        <th>Contato</th>
    </tr>
    @foreach($matContatos as $contato)

    <tr>
        <th> {{ $contato['nome'] }}</th>
        <th>{{ $contato['cel']}}</th>
    </tr>


    @endforeach
</table>