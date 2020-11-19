<?php
    function placamaeAtualiza($id){
      include "conexao.php";
      $sql = "SELECT nome,valor FROM placamae WHERE id='$id'";
      $result = mysqli_query($conexao, $sql);
      if(mysqli_num_rows($result) > 0){
        while($linha = mysqli_fetch_assoc($result)){
          $d= $linha["nome"];
          $v= $linha["valor"];
          echo "<div class='nome'>$d</div>";
          echo "<div class='preço'>R$$v reais</div>";
        }
      }
    }
    function processadorAtualiza($id){
      include "conexao.php";
      $sql = "SELECT nome,valor FROM processadores WHERE id='$id'";
      $result = mysqli_query($conexao, $sql);
      if(mysqli_num_rows($result) > 0){
        while($linha = mysqli_fetch_assoc($result)){
          $d= $linha["nome"];
          $v= $linha["valor"];
          echo "<div class='nome'>$d</div>";
          echo "<div class='preço'>R$$v reais</div>";
        }
      }
    }
    function memoriaramAtualiza($id){
      include "conexao.php";
      $sql = "SELECT nome,valor FROM memoriaram WHERE id='$id'";
      $result = mysqli_query($conexao, $sql);
      if(mysqli_num_rows($result) > 0){
        while($linha = mysqli_fetch_assoc($result)){
          $d= $linha["nome"];
          $v= $linha["valor"];
          echo "<div class='nome'>$d</div>";
          echo "<div class='preço'>R$$v reais</div>";
        }
      }
    }
    function armazenamentoAtualiza($id){
      include "conexao.php";
      $sql = "SELECT nome,valor FROM armazenamento WHERE id='$id'";
      $result = mysqli_query($conexao, $sql);
      if(mysqli_num_rows($result) > 0){
        while($linha = mysqli_fetch_assoc($result)){
          $d= $linha["nome"];
          $v= $linha["valor"];
          echo "<div class='nome'>$d</div>";
          echo "<div class='preço'>R$$v reais</div>";
        }
      }
    }
    function placadevideoAtualiza($id){
      include "conexao.php";
      $sql = "SELECT nome,valor FROM placadevideo WHERE id='$id'";
      $result = mysqli_query($conexao, $sql);
      if(mysqli_num_rows($result) > 0){
        while($linha = mysqli_fetch_assoc($result)){
          $d= $linha["nome"];
          $v= $linha["valor"];
          echo "<div class='nome'>$d</div>";
          echo "<div class='preço'>R$$v reais</div>";
        }
      }
    }
    function fonteAtualiza($id){
      include "conexao.php";
      $sql = "SELECT nome,valor FROM fontes WHERE id='$id'";
      $result = mysqli_query($conexao, $sql);
      if(mysqli_num_rows($result) > 0){
        while($linha = mysqli_fetch_assoc($result)){
          $d= $linha["nome"];
          $v= $linha["valor"];
          echo "<div class='nome'>$d</div>";
          echo "<div class='preço'>R$$v reais</div>";
        }
      }
    }
    function gabineteAtualiza($id){
      include "conexao.php";
      $sql = "SELECT nome,valor FROM gabinetes WHERE id='$id'";
      $result = mysqli_query($conexao, $sql);
      if(mysqli_num_rows($result) > 0){
        while($linha = mysqli_fetch_assoc($result)){
          $d= $linha["nome"];
          $v= $linha["valor"];
          echo "<div class='nome'>$d</div>";
          echo "<div class='preço'>R$$v reais</div>";
        }
      }
    }
    function armazenamento2Atualiza($id){
      include "conexao.php";
      $sql = "SELECT nome,valor FROM armazenamento2 WHERE id='$id'";
      $result = mysqli_query($conexao, $sql);
      if(mysqli_num_rows($result) > 0){
        while($linha = mysqli_fetch_assoc($result)){
          $d= $linha["nome"];
          $v= $linha["valor"];

          echo "<div class='nome'>$d</div>";
		  
		  if (!$v==0){
          echo "<div class='preço'>R$$v reais</div>";
		  }
		 
        }
      }
    }
?>
