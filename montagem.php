<?php
include "conexao.php";
include "funcao.php";
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Purple Wolf</title>
  <link rel="icon" type="image/jpg" href="logos/Logo do Titulo.png" />
  <link rel="stylesheet" href="montagem.css">
  <script type="text/javascript" src="javascriptMonta.js"></script>
</head>
<script>
  window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });

  function placamaeUpdate() {
    var select = document.getElementById('placamae');
    var option = select.options[select.selectedIndex];
    switch (option.value) {
      case 'placamae1':
        document.getElementById('imagemPlacamae').src = "Fotos dos Componentes//allan.jpg";
        document.getElementById("caracteristicasPlacamae").innerHTML ="<?php placamaeAtualiza($id=1); ?>";
        break;
      case 'placamae2':
        document.getElementById('imagemPlacamae').src = "Fotos dos Componentes//antonio.jpg";
		    document.getElementById("caracteristicasPlacamae").innerHTML ="<?php placamaeAtualiza($id=2); ?>";
        break;
      case 'placamae3':
        document.getElementById('imagemPlacamae').src = "Fotos dos Componentes//gustavo.jpg";
		    document.getElementById("caracteristicasPlacamae").innerHTML ="<?php placamaeAtualiza($id=3); ?>";
        break;
      case 'placamae4':
        document.getElementById('imagemPlacamae').src = "Fotos dos Componentes//leonardo.jpg";
        document.getElementById("caracteristicasPlacamae").innerHTML ="<?php placamaeAtualiza($id=4); ?>";
        break;
      case 'placamae5':
        document.getElementById('imagemPlacamae').src = "Fotos dos Componentes//lucas.jpg";
        document.getElementById("caracteristicasPlacamae").innerHTML ="<?php placamaeAtualiza($id=5); ?>";
        break;
    }
  }
  function processadorUpdate() {
    var select = document.getElementById('processador');
    var option = select.options[select.selectedIndex];
    switch (option.value) {
      case '1':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen3-3200g.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=1); ?>";
        break;
      case '2':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen3-3300x.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=2); ?>";
        break;
      case '3':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen5-2600x.jpg";
        document.getElementById("caracteristicasPlacamae").innerHTML ="<?php processadorAtualiza($id=3); ?>";
        break;
      case '4':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen5-3400g.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=4); ?>";
        break;
      case '5':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen5-3500x.png";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=5); ?>";
        break;
      case '6':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen7-3700x.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=6); ?>";
        break;
      case '7':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen9-3900x.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=7); ?>";
        break;
      case '8':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I3-9100f.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=8); ?>";
        break;
      case '9':processadorAtualiza
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I3-10100.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=9); ?>";
        break;
      case '10':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I5-9400F.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=10); ?>";
        break;
      case '11':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I5-10400.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=11); ?>";
        break;
      case '12':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I7-9700K.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=12); ?>";
        break;
      case '13':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I7-10700.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=13); ?>";
        break;
      case '14':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I9-9900K.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=14); ?>";
        break;
      case '15':
        document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I9-10900K.jpg";
        document.getElementById("caracteristicasProcessador").innerHTML ="<?php processadorAtualiza($id=15); ?>";
        break;
    }
  }
  function memoriaramUpdate() {
    var select = document.getElementById('memoriaram');
    var option = select.options[select.selectedIndex];
    switch (option.value) {
      case 'memoriaram1':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//allan.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=1); ?>";
        break;
      case 'memoriaram2':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//antonio.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=2); ?>";
        break;
      case 'memoriaram3':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//gustavo.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=3); ?>";
        break;
      case 'memoriaram4':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//leonardo.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=4); ?>";
        break;
      case 'memoriaram5':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//lucas.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=5); ?>";
        break;
      case 'memoriaram6':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//murilo.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=6); ?>";
        break;
      case 'memoriaram7':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//paulo.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=7); ?>";
        break;
      case 'memoriaram8':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=8); ?>";
        break;      
		case 'memoriaram9':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=9); ?>";
        break;		
		case 'memoriaram10':
        document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasMemoriaram").innerHTML ="<?php memoriaramAtualiza($id=10); ?>";
        break;
    }

  }
  function hdUpdate() {
    var select = document.getElementById('hd');
    var option = select.options[select.selectedIndex];
    switch (option.value) {
      case 'hd1':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//allan.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=1); ?>";
        break;
      case 'hd2':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//antonio.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=2); ?>";
        break;
      case 'hd3':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//gustavo.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=3); ?>";
        break;
      case 'hd4':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//leonardo.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=4); ?>";
        break;
      case 'hd5':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//lucas.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=5); ?>";
        break;
      case 'hd6':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//murilo.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=6); ?>";
        break;
      case 'hd7':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//paulo.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=7); ?>";
        break;
      case 'hd8':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=8); ?>";
        break;
	  case 'hd9':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=9); ?>";
        break;
	  case 'hd10':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=10); ?>";
        break;
	  case 'hd11':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=11); ?>";
        break;
	   case 'hd12':
        document.getElementById('imagemHd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasHd").innerHTML ="<?php armazenamentoAtualiza($id=12); ?>";
        break;
    }
  }
  function placadevideoUpdate() {
    var select = document.getElementById('placadevideo');
    var option = select.options[select.selectedIndex];
    switch (option.value) {
      case '1':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rx550-2gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=1); ?>";
        break;
      case '2':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX550-4GB.png";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=2); ?>";
        break;
      case '3':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX570-4GB.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=3); ?>";
        break;
      case '4':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX570-8GB.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=4); ?>";
        break;
      case '5':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX580-8GB.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=5); ?>";
        break;
      case '6':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX5500XT-4GB.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=6); ?>";
        break;
      case '7':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX5500XT-8GB.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=7); ?>";
        break;
      case '8':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX5700XT-8GB.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=8); ?>";
        break;
      case '9':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/gtx1050ti-4gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=9); ?>";
        break;
      case '10':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/gtx1650-4gb-oc.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=10); ?>";
        break;
      case '11':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/gtx1650-4gb-super OC.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=11); ?>";
        break;
      case '12':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/GTX1660-6GB.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=12); ?>";
        break;
      case '13':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/GTX1660Ti-6gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=13); ?>";
        break;
      case '14':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rtx2060-6gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=14); ?>";
        break;
      case '15':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rxt2070-8gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=15); ?>";
        break;
      case '16':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rtx2080-8gb super.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=16); ?>";
        break;
      case '17':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rtx2080ti-11gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=17); ?>";
        break;
      case '18':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rtx2080ti-11gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=18); ?>";
        break;
      case '19':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rtx2080ti-11gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=19); ?>";
        break;
      case '20':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rtx2080ti-11gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=20); ?>";
        break;
      case '21':
        document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rtx2080ti-11gb.jpg";
		document.getElementById("caracteristicasPlacadevideo").innerHTML ="<?php placadevideoAtualiza($id=21); ?>";
        break;		

    }
  }
  function fonteUpdate() {
    var select = document.getElementById('fonte');
    var option = select.options[select.selectedIndex];
    switch (option.value) {
      case 'fonte1':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//allan.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=1); ?>";
        break;
      case 'fonte2':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//antonio.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=2); ?>";
        break;
      case 'fonte3':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//gustavo.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=3); ?>";
        break;
      case 'fonte4':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//leonardo.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=4); ?>";
        break;
      case 'fonte5':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//lucas.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=5); ?>";
        break;
      case 'fonte6':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//murilo.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=6); ?>";
        break;
      case 'fonte7':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//paulo.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=7); ?>";
        break;
      case 'fonte8':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=8); ?>";
        break;
      case 'fonte9':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=9); ?>";
        break;
      case 'fonte10':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=10); ?>";
        break;
      case 'fonte11':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=11); ?>";
        break;
      case 'fonte12':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=12); ?>";
        break;
      case 'fonte13':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=13); ?>";
        break;
      case 'fonte14':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=14); ?>";
        break;
      case 'fonte15':
        document.getElementById('imagemFonte').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasFonte").innerHTML ="<?php fonteAtualiza($id=15); ?>";
        break;
		
    }
  }
  function gabineteUpdate() {
    var select = document.getElementById('gabinete');
    var option = select.options[select.selectedIndex];
    switch (option.value) {
      case 'gabinete1':
        document.getElementById('imagemGabinete').src = "Fotos dos Componentes//allan.jpg";
		document.getElementById("caracteristicasGabinete").innerHTML ="<?php gabineteAtualiza($id=1); ?>";
        break;
      case 'gabinete2':
        document.getElementById('imagemGabinete').src = "Fotos dos Componentes//antonio.jpg";
		document.getElementById("caracteristicasGabinete").innerHTML ="<?php gabineteAtualiza($id=2); ?>";
        break;
      case 'gabinete3':
        document.getElementById('imagemGabinete').src = "Fotos dos Componentes//gustavo.jpg";
		document.getElementById("caracteristicasGabinete").innerHTML ="<?php gabineteAtualiza($id=3); ?>";
        break;
      case 'gabinete4':
        document.getElementById('imagemGabinete').src = "Fotos dos Componentes//leonardo.jpg";
		document.getElementById("caracteristicasGabinete").innerHTML ="<?php gabineteAtualiza($id=4); ?>";
        break;
      case 'gabinete5':
        document.getElementById('imagemGabinete').src = "Fotos dos Componentes//lucas.jpg";
		document.getElementById("caracteristicasGabinete").innerHTML ="<?php gabineteAtualiza($id=5); ?>";
        break;
      case 'gabinete6':
        document.getElementById('imagemGabinete').src = "Fotos dos Componentes//murilo.jpg";
		document.getElementById("caracteristicasGabinete").innerHTML ="<?php gabineteAtualiza($id=6); ?>";
        break;
      case 'gabinete7':
        document.getElementById('imagemGabinete').src = "Fotos dos Componentes//paulo.jpg";
		document.getElementById("caracteristicasGabinete").innerHTML ="<?php gabineteAtualiza($id=7); ?>";
        break;
      case 'gabinete8':
        document.getElementById('imagemGabinete').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasGabinete").innerHTML ="<?php gabineteAtualiza($id=8); ?>";
        break;
      case 'gabinete9':
        document.getElementById('imagemGabinete').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasGabinete").innerHTML ="<?php gabineteAtualiza($id=9); ?>";
        break;
    }
  }
  function ssdUpdate() {
    var select = document.getElementById('ssd');
    var option = select.options[select.selectedIndex];
    switch (option.value) {
      case 'ssd1':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//allan.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=1); ?>";
        break;
      case 'ssd2':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//antonio.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=2); ?>";
        break;
      case 'ssd3':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//gustavo.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=3); ?>";
        break;
      case 'ssd4':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//leonardo.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=4); ?>";
        break;
      case 'ssd5':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//lucas.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=5); ?>";
        break;
      case 'ssd6':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//murilo.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=6); ?>";
        break;
      case 'ssd7':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//paulo.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=7); ?>";
        break;
      case 'ssd8':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=8); ?>";
        break;
      case 'ssd9':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=9); ?>";
        break;
      case 'ssd10':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=10); ?>";
        break;
      case 'ssd11':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=11); ?>";
        break;
      case 'ssd12':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=12); ?>";
        break;
      case 'ssd13':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=13); ?>";
        break;
      case 'ssd14':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=14); ?>";
        break;
      case 'ssd15':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=15); ?>";
        break;
      case 'ssd16':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=16); ?>";
        break;
      case 'ssd17':
        document.getElementById('imagemSsd').src = "Fotos dos Componentes//willian.jpg";
		document.getElementById("caracteristicasSsd").innerHTML ="<?php armazenamento2Atualiza($id=17); ?>";
        break;

	}
  }

</script>
<body>
  <?php $msg= "Um Hello World !"; ?>
  <header>
    <a href="index.html" class="logo"><img src="logos/Logo com Nome.png" alt="Página Inicial" width="300vw;"></a>
    <ul>
      <li><a href="montagem.html">Montagem</a></li>
      <li><a href="sugestoes.html">Sugestões</a></li>
      <li><a href="quemsomos.html">Quem Somos</a></li>
      <li><a href="contatos.html">Contato</a></li>
    </ul>
  </header>
  <section class="sec">
    <div class="frase">
      Conforme o tempo passa a tecnologia vem evoluindo muito, e muita coisa vai mudando e se tornando mais viável, melhor ou mais barata que outras, e em tantas mudanças é normal as pessoas tomarem escolhas erradas que vai causá-las dor de cabeça no
      futuro, por isso resolvemos criar a<br><span> PurP le WOlF</span> !
    </div>
    <div class="box-body">
      <div class="box">
        <div class="imgBx">
          <img id="imagemPlacamae" src="interrogação.png" alt="Allan Gabriel Boeno Correa">
        </div>
        <div class="content">
          <select class="selectComponente" id="placamae" onChange="placamaeUpdate()">
            <option disabled selected hidden>Placas Mães</option>
            <option value="placamae1">placamae1</option>
            <option value="placamae2">placamae2</option>
            <option value="placamae3">placamae3</option>
            <option value="placamae4">placamae4</option>
            <option value="placamae5">placamae5</option>
          </select>
          <div class="caracteristicas" id="caracteristicasPlacamae">verme</div>
        </div>
      </div>
      <!-- FOTO 2-->
      <div class="box">
        <div class="imgBx">
          <img id="imagemProcessador" src="interrogação.png" alt="Antonio Carlos Leite Bueno">
        </div>
        <div class="content">
          <select class="selectComponente" id="processador" onChange="processadorUpdate()">
            <option disabled selected hidden>Processadores</option>
            <option disabled>Processadores Ryzen</option>
            <option value="1">Ryzen 3 3200G</option>
            <option value="2">Ryzen 3 3300X</option>
            <option value="3">Ryzen 5 2600X</option>
            <option value="4">Ryzen 5 3400G</option>
            <option value="5">Ryzen 5 3500X</option>
            <option value="6">Ryzen 7 3700X</option>
            <option value="7">Ryzen 9 3900X</option>
            <option disabled>Processadores Intel</option>
            <option value="8">Intel I3 9100F</option>
            <option value="9">Intel I3 10100</option>
            <option value="10">Intel I5 9400F</option>
            <option value="11">Intel I5 10400</option>
            <option value="12">Intel I7 9700K</option>
            <option value="13">Intel I7 10700</option>
            <option value="14">Intel I9 9900K</option>
            <option value="15">Intel I9 10900K</option>
          </select>
          <div class="caracteristicas" id="caracteristicasProcessador">verme</div>
        </div>
      </div>
      <!-- FOTO 3-->
      <div class="box">
        <div class="imgBx">
          <img id="imagemMemoriaram" src="interrogação.png" alt="Gustavo Henrique Letério da Silva Leite">
        </div>
        <div class="content">
          <select class="selectComponente" id="memoriaram" onChange="memoriaramUpdate()">
            <option disabled selected hidden>Memórias Ram</option>
            <option value="memoriaram1">memoriaram1</option>
            <option value="memoriaram2">memoriaram2</option>
            <option value="memoriaram3">memoriaram3</option>
            <option value="memoriaram4">memoriaram4</option>
            <option value="memoriaram5">memoriaram5</option>
            <option value="memoriaram6">memoriaram6</option>
            <option value="memoriaram7">memoriaram7</option>
            <option value="memoriaram8">memoriaram8</option>
            <option value="memoriaram9">memoriaram9</option>
            <option value="memoriaram10">memoriaram10</option>
          </select>
		  <div class="caracteristicas" id="caracteristicasMemoriaram">verme</div>
          <div class="quantiadepeças">
            <span id="demo"></span> Peça(s)<input type="range" min="1" max="4" value="1" class="slider" id="myRange">
          </div>
          <script type="text/javascript">
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value;

            slider.oninput = function() {
              output.innerHTML = this.value;
            }
          </script>
        </div>
      </div>
      <!-- FOTO 4-->
      <div class="box">
        <div class="imgBx">
          <img id="imagemHd" src="interrogação.png" alt="Leonardo Rodrigues">
        </div>
        <div class="content">
          <select class="selectComponente" id="hd" onChange="hdUpdate()">
            <option disabled selected hidden>HDs</option>
            <option value="hd1">hd1</option>
            <option value="hd2">hd2</option>
            <option value="hd3">hd3</option>
            <option value="hd4">hd4</option>
            <option value="hd5">hd5</option>
            <option value="hd6">hd6</option>
            <option value="hd7">hd7</option>
            <option value="hd8">hd8</option>
            <option value="hd9">hd9</option>
            <option value="hd10">hd10</option>
            <option value="hd11">hd11</option>
            <option value="hd12">hd12</option>
          </select>
		  <div class="caracteristicas" id="caracteristicasHd">verme</div>
        </div>
      </div>
      <!-- FOTO 5-->
      <div class="box">
        <div class="imgBx">
          <img id="imagemPlacadevideo" src="interrogação.png" alt="Lucas de Oliveira Campos">
        </div>
        <div class="content">
          <select class="selectComponente" id="placadevideo" onChange="placadevideoUpdate()">
            <option disabled selected hidden>PlacasdeVideo</option>
            <option disabled>Placas AMD</option>
            <option value="1">RX 550 2GB</option>
            <option value="2">RX 550 4GB</option>
            <option value="3">RX 570 4GB</option>
            <option value="4">RX 570 8GB</option>
            <option value="5">RX 580 8GB</option>
            <option value="6">RX 5500XT 4GB</option>
            <option value="7">RX 5500XT 8GB</option>
            <option value="8">RX 5700XT 8GB</option>
            <option disabled>Placas Intel</option>
            <option value="9">GTX 1050 Ti 4GB</option>
            <option value="10">GTX 1650, 4GB</option>
            <option value="11">GTX 1650, 4GB</option>
            <option value="12">GTX 1660 Super, 6GBB</option>
            <option value="13">GTX 1660 Ti, 6GB</option>
            <option value="14">RTX 2060 6GB</option>
            <option value="15">RTX 2070 Super EVO OC 8GB</option>
            <option value="16">RTX 2080 Super KO Gaming, 8GB</option>
            <option value="17">RTX 2080 Ti 11GB</option>
			<option value="18">dsadsa</option>
			<option value="19">dsadasdas</option>
			<option value="20">asdsadasdas</option>
			<option value="21">rasedas</option>
          </select>
		  <div class="caracteristicas" id="caracteristicasPlacadevideo">verme</div>
        </div>
      </div>
      <!-- FOTO 6-->
      <div class="box">
        <div class="imgBx">
          <img id="imagemFonte" src="interrogação.png" alt="Murilo Oliveira">
        </div>
        <div class="content">
          <select class="selectComponente" id="fonte" onChange="fonteUpdate()">
            <option disabled selected hidden>Fontes</option>
            <option value="fonte1">fonte1</option>
            <option value="fonte2">fonte2</option>
            <option value="fonte3">fonte3</option>
            <option value="fonte4">fonte4</option>
            <option value="fonte5">fonte5</option>
            <option value="fonte6">fonte6</option>
            <option value="fonte7">fonte7</option>
            <option value="fonte8">fonte8</option>
            <option value="fonte9">fonte9</option>
            <option value="fonte10">fonte10</option>
            <option value="fonte11">fonte11</option>
            <option value="fonte12">fonte12</option>
            <option value="fonte13">fonte13</option>
            <option value="fonte14">fonte14</option>
            <option value="fonte15">fonte15</option>
          </select>
		   <div class="caracteristicas" id="caracteristicasFonte">verme</div>
        </div>
      </div>
      <!-- FOTO -->
      <div class="box">
        <div class="imgBx">
          <img id="imagemGabinete" src="interrogação.png" alt="Paulo Fernandes Ramos">
        </div>
        <div class="content">
          <select class="selectComponente" id="gabinete" onChange="gabineteUpdate()">
            <option disabled selected hidden>Gabinetes</option>
            <option value="gabinete1">gabinete1</option>
            <option value="gabinete2">gabinete2</option>
            <option value="gabinete3">gabinete3</option>
            <option value="gabinete4">gabinete4</option>
            <option value="gabinete5">gabinete5</option>
            <option value="gabinete6">gabinete6</option>
            <option value="gabinete7">gabinete7</option>
            <option value="gabinete8">gabinete8</option>
            <option value="gabinete9">gabinete9</option>
          </select>
		   <div class="caracteristicas" id="caracteristicasGabinete">verme</div>
        </div>
      </div>
      <!-- FOTO Willian Nogueira-->
      <div class="box">
        <div class="imgBx">
          <img id="imagemSsd" src="interrogação.png" alt="Gustavo Henrique Letério da Silva Leite">
        </div>
        <div class="content">
          <select class="selectComponente" id="ssd" onChange="ssdUpdate()">
            <option disabled selected hidden>SSDs</option>
            <option value="ssd1">ssd1</option>
            <option value="ssd2">ssd2</option>
            <option value="ssd3">ssd3</option>
            <option value="ssd4">ssd4</option>
            <option value="ssd5">ssd5</option>
            <option value="ssd6">ssd6</option>
            <option value="ssd7">ssd7</option>
            <option value="ssd8">ssd8</option>
            <option value="ssd9">ssd9</option>
            <option value="ssd10">ssd10</option>
            <option value="ssd11">ssd11</option>
            <option value="ssd12">ssd12</option>
            <option value="ssd13">ssd13</option>
            <option value="ssd14">ssd14</option>
            <option value="ssd15">ssd15</option>
            <option value="ssd16">ssd16</option>
            <option value="ssd17">ssd17</option>
          </select>
		   <div class="caracteristicas" id="caracteristicasSsd">verme</div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <ul class="tcc">
      <h2>Projeto TCC<br>
        ETEC Jacinto Ferreira de Sá<br>
        SP, Ourinhos 2020</h2>
      </li>
    </ul>
    <ul class="redes">
      <li><a href="www.facebook.com" target="_blank"><img src="logos/facebooklogo.png" width="100px">www.facebook.com/PurpleWolfOficial</a></li>
      <li><a href="www.instagram.com" target="_blank"><img src="logos/instagramlogo.png" width="100px">www.instagram.com/PurpleWolfOficial</a></a></li>
      <li><a href="www.twitter.com" target="_blank"><img src="logos/twitterlogo.png" width="100px">www.twitter.com/PurpleWolfOficial</a></li>
    </ul>
  </footer>
<a href="verificar.php"><button>Meu Botão</button></a>
</body>

</html>
