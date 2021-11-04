<?php
$serv = "localhost";
$user = "root";
$password = "";
$dbname = "empresa";

//conexão com DB
$conn = mysqli_connect($serv, $user, $password, $dbname);

$busca = $_POST['busca'];
//Query de busca do DB
$result = "SELECT * FROM FUNCIONARIOS WHERE NOME_FUNC OR EMAIL_FUNC LIKE'%$busca%' LIMIT 15";
$resultado_busca = mysqli_query($conn, $result);

//criando tabela para guardar consultas 
echo "<table><tr><td><strong><h2>Nome</h2></strong></td>  <td></td>  <td><strong><h2>E-mail</h2></strong></td></tr><br />";

if ($resultado_busca->num_rows > 0) {

    while($rows_busca = mysqli_fetch_array($resultado_busca)) {  

        echo $result_tot = "<tr><td>" . $rows_busca['NOME_FUNC'] . " <td> - </td> " ."</td><td>" . $rows_busca['EMAIL_FUNC'] . "</td></tr>";

    }
} else {
    $result_tot = 'Funcionario não cadastrado';
    echo "Funcionario não encontrado";
}

echo "</table>";





?>