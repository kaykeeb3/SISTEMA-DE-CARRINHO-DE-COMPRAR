<?php
 session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>carrinho de compras</title>
   
   
 <!--Css não está lincado-->
 
    <style>
      * {
        margin: 0;
        padding: 0;
        box-shadow: border-box;
      }
      
      h2.title {
        background-color: #069;
        width: 100%;
        padding: 20px;
        text-align: center;
        color: #fff;
      }
      
      .carrinho-container {
        display: flex;
      }
      
      .produto {
        width: 33.3%;
        padding: 0 30px;
      }
      
      .produto img {
        max-width: 100%;
      }
      
      .produto a {
        display: block;
        width: 100%;
        padding: 10px
        color: #fff;
        background-color: #5fb382;
        text-align: center;
        text-decoration: none;
      }
      
      .carrinho-item {
        max-width: 1200px;
        margin: 10px auto;
        padding-bottom: 10px;
        
        border-bottom: 2px  dotted #ccc;
      }
      
      .carrinho-item {
        font-size: 16px;
        color: #222;
      }
      
    </style>
  </head>
  <body>
   <h2 class="title">Carrinho com PHP</h2>
   <div class="carrinho-container">
     
   

<?php
 $items = array(['nome'=>'Curso 1','imagem'=>'ebook.png','preco'=>'200'],
 ['nome'=>'Curso 2','imagem'=>'ebook.png','preco'=>'800'],
 ['nome'=>'Curso 3','imagem'=>'ebook.png','preco'=>'780']);

  foreach ($items as $key => $value) {
?>
   <div class="produto">
       <img src="<?php echo $value['imagem'] ?>" />
       <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho</a>
       
   </div><!--produtos-->

<?php 
  }

?>

     </div>
   <?php
   if (isset($_GET['adicionar'])) {
     //vamos adicionar ao carrinho 
     $idProduto = (int) $_GET['adicionar'];
     if(isset($items['$idProduto'])) {
        //echo 'o produto existe';
        if(isset($_SESSION['carrinho'][$idProduto])){
          $_SESSION['carrinho'][$idProduto]['quantidade']++;
         }else{
           $_SESSION[$idProduto] = array('quantidade' =>1,'nome' =>$items[$idProduto]['nome'],'preco'=>$items[$idProduto]['preco']);
         }
        echo '<script>alert("O item foi adicionado ao carrinho.");</script>';
     }else{
       die('Você não pode adicionar um item que não existe.');
       //echo 'o produto nao existe';
      }
   }
   
?>
    <h2 class="title">carrinho</h2>
    
    <?php
     include('carrinho.php');
 ?>
    
  </body>
</html>