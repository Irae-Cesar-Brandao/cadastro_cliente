
<!DOCTYPE html>
<html>
  
<head>
    <style>
        h1 {
            color: green;
        }
    </style>
</head>
  
<body>
    <center>
        <h1>Welcome To GFG</h1>
  
        <h2>
            <?php 
      $conexao = mysql_connect("localhost","root"); //essa linha irá fazer a conexão com o banco de dados.
      if (!$conexao)
      die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());//aqui irei testar se houve falha de conexão
      
      //conectando com a tabela do banco de dados
      $banco = mysql_select_db("clientes",$conexao); //nome da tabela onde os dados serão armazenados
      
      //Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
      $query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endereço` , `cidade` , `estado` , `bairro` , `país` , `login` , `senha` , `news` , `id` ) 
      VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', '$news', '')";
      mysql_query($query,$conexao);
      
      //$query = nome da variável que utilizarei para realizar a operação de inserção dos dados
      //clientes = nome da tabela que será salvo os dados do cadastro do cliente
      //nome, email, sexo, ddd, telefone, endereço, cidade, estado, bairro, país, login, senha, news, id. São apenas os nomes dos campos que constam na tabela clientes.
      
      //VALUES = indica que serão inseridos os seguintes valores.
      //$nome, $email, $sexo, $ddd, $telefone, $endereço, $cidade, $estado, $bairro, $país, //$login, $senha, $news, $id.
      //São apenas as variaveis a qual eu atribui os valores digitados no formulário.
      
      echo "Seu cadastro foi realizado com sucesso!Agradecemos a atenção.";
      //mensagem que é escrita quando os dados são inseridos normalmente.
            ?>
        </h2>
    </center>
</body>
  
</html>

