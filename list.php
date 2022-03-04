<?php
include_once('conexao/conn.php');

$query = mysqli_query($conn, "SELECT * FROM contas");

while($conta = mysqli_fetch_array($query)){
    echo "Conta ".$conta['nome_conta']."<br>";
    echo "Valor R$ ".$conta['valor_conta']."<br>";
    echo "Nº Parcelas ".$conta['n_parcelas']."<br>";
    echo "Vencimento ".$conta['vencimento_conta']."<br>";
    
    if($conta['status_conta'] == 'paid'){
        echo "Status Pago<br>";
    }

    else {
        echo "Status À pagar <br>";
    }
    
    echo "<a href='update.php?id=".$conta['idcontas']."'> Alterar </a><br><br>";
    
    
}
?>


