<?php
 include("conexao.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sql = "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')";
    
if(mysqli_query($conexao, $sql)){
    echo "Usuario cadastrado com sucesso";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}
    mysqli_close($conexao);
?>

?>