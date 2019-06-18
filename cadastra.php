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
            $con = PDO('mysql:host=localhost:3307;dbname=bd_aula1806',"root","usbw");
        }catch(PDOException $e){
            echo "Erro ocorrido:" .$e->getMessage();

        }

    ?>
</body>
</html>
