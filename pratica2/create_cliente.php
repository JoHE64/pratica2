<?php
    include 'db.php';

    if (isset($_POST['nome_cliente']) && isset($_POST['cpf_cliente']) && isset($_POST['email_cliente']) && isset($_POST['telefone_cliente'])){
        $nome = $_POST['nome_cliente'];
        $cpf = $_POST['cpf_cliente'];
        $email = $_POST['email_cliente'];
        $telefone = $_POST['telefone_cliente'];

        inserir("clientes", ["nome", "cpf", "email", "telefone"], ["'$nome'", "'$cpf'", "'$email'", "'telefone'"]);
    }


?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica2</title>
</head>
<body>
    <div>
        <h1>Inserir Clientes:</h1>
        <div>
            <form action="" method="POST">
                <input type="text" placeholder="Nome Completo" name="nome_cliente">
                <input type="text" placeholder="CPF" name="cpf_cliente">
                <input type="text" placeholder="Email" name="email_cliente">
                <input type="text" placeholder="Telefone" name="telefone_cliente">
                <button>Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>