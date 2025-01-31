<div class="titulo">Desafio Tabela</div>

<?php
$array = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach ($array as $linha) {
    foreach ($linha as $valor) {
        echo "$valor ";
    }
    echo '<br>';
}
?>
<hr>
<table>
    <?php
        foreach ($array as $linha) {
            echo '<tr>';
            foreach ($linha as $valor) {
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<hr>
<table>
    <?php
        foreach ($array as $index => $linha) {
            $style = $index %2 === 1 ? 'background-color: lightblue;' : '';
            echo "<tr style='{$style}'>";
            foreach ($linha as $valor) {
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<hr>
<form action="#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="text" id="linhas" name="linhas">

        <label for="colunas">Colunas</label>
        <input type="text" id="colunas" name="colunas">
    </div>
    <button>Envio</button>
</form>

<table>
<?php
$lin = $_POST['linhas'];
$col = $_POST['colunas'];
$val = 1;
if (!is_numeric($lin) and !is_numeric($col)) {
    echo 'ERROR: Os valores precisam ser numéricos'; 
}
for ($i = 0; $i < $lin; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $col; $j++) {
        echo "<td>$val</td>";
        $val++;
    }
    echo "</tr>";
}

?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr {
        border: 1px solid #444;
    }
    table td {
        padding: 10px 20px;
    }
    button {
        font-size: 1.8rem;
        color: white;
        background-color: blue;
        border-radius: 10px;
    }
</style>