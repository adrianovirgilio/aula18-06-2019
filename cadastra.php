<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<body>
    <?php
        // Receber dados dos input do formulário html (index.html)
        // enviado via método POST
        $nome = $_POST ['nomecliente'];
        $telefone = $_POST['telefonecliente'];
        //Criando conexão com o banco de dados através
        // da classe PDO
        try{
            $con = new PDO('mysql:host=localhost:3307;dbname=bd_aula1806',"root","usbw");
            $comando_sql = "INSERT INTO tb_clientes(nome,telefone)VALUES(?,?)";
            $stmt = $con->prepare($comando_sql);
            $stmt->bindParam(1,$nome);
            $stmt->bindParam(2,$telefone);
            $resultado = $stmt->execute();
            if($resultado){
                echo "Dados gravados com sucesso!";
            }else{
                echo "Erro ao tentar executar o comando SQL!";
            }
        }catch(PDOException $e){
            echo "Erro ocorrido:" .$e->getMessage();

        }

    ?>
</body>
</html>
