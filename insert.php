<?php
include_once('conexao/conn.php');

$conta = $_POST['tipo_conta'];
$valor = $_POST['valor'];
$parcelas = $_POST['n_parcelas'];
$vencimento = $_POST['vencimento'];
$status = $_POST['status_conta'];

$query = "INSERT INTO contas (nome_conta, valor_conta, n_parcelas, vencimento_conta, status_conta)  VALUES ('$conta', '$valor', '$parcelas', '$vencimento','$status')";

if(mysqli_query($conn, $query)){
    echo "Conta adicionada com sucesso.";
} else{
    echo "ERRO: Contate o suporte $query. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

echo "<a href='index.html'>Voltar ao Menu</a>";
