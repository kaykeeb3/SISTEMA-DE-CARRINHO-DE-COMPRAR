 <?php
//session_start();
//Está no HTML

//Obs
// argumento inválido fornecido para foreach() em ?
//Não consigo entender o erro.

    //foreach($_SESSION['carrinho'] as $key => $value){
    
    //Nome do produto
    //Quantidade
    //preço
    echo '<div class="carrinho-item">';
    echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].'   |  Preço '.($value['quantidade']*$value['preco']).'</p>';
    echo '</div>';
    
  //}
?>