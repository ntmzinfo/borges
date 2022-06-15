<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem 3 </title>
</head>
<body>
    

<button type="submit" name = "btn_mes" >Mês</button>

<table>

        <tr>
            <td class="tabela">MOTORISTA</td>
            <td class="tabela">PRODUTO</td>
            <td class="tabela">QUANTIDADE</td>
            <td class="tabela">VALOR NOTA</td>
        </tr>

        
    <?php
        require_once 'banco.php';
        $db = new Banco("localhost", "borges","root", "");
        $db->query("SELECT * FROM controle");
        $date = $db->result();
        ?>
        <?php
        foreach ($date as $value) {   
            echo "<tr>";
            echo "<td class='tabela'>".$value['motorista']."</td>";
            echo "<td  class='tabela'>".$value['produto']."</td>";
            echo "<td  class='tabela'>".$value['quantidade']."</td>";
            echo "<td  class='tabela'>".$value['valor_nota']."</td>";
            echo "</tr>";
        } 

        ?>




</table>
</body>
</html>