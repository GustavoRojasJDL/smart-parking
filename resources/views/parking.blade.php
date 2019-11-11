<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<canvas id="myCanvas" width="800" height="400" style="border:1px solid #d3d3d3;">
  Your browser does not support the HTML5 canvas tag.</canvas>

<script>
  var c = document.getElementById("myCanvas");
//LINEAS AMARILLAS
var ctx = c.getContext("2d");
//FONDO
var ctx2 = c.getContext("2d");
//RECTANGULO DE OCUPADO
var ctx3 = c.getContext("2d");
ctx.beginPath();

//CAJON ARRIBA IZQ
ctx.rect(100, 100, 60, 100);
//CAJON ABAJO IZQ
ctx.rect(100, 200, 60, 100);
//CAJON ENMEDIO ARRIBA
ctx.rect(160, 100, 60, 100);
//CAJON ENMEDIO ABAJO
ctx.rect(160, 200, 60, 100);
//CAJON ARRIBA DERECHA
ctx.rect(220, 100, 60, 100);
//CAJON ABAJO DERECHA
ctx.rect(220, 200, 60, 100);
//CAJON CON LINEA DE NO ESTACIONARSE
ctx.rect(280, 200, 60, 100);
//LINEAS DEL CAJON
ctx.moveTo(280, 200);
ctx.lineTo(340, 215);
ctx.moveTo(280, 215);
ctx.lineTo(340, 230);
ctx.moveTo(280, 230);
ctx.lineTo(340, 245);
ctx.moveTo(280, 245);
ctx.lineTo(340, 260);
ctx.moveTo(280, 260);
ctx.lineTo(340, 275);
ctx.moveTo(280, 275);
ctx.lineTo(340, 290);

//COLOR DE LOS CAJONES
ctx.strokeStyle = '#f2df0c'
//COLOR DE FONDO
ctx2.fillStyle = "#2e2d2d";
ctx2.fillRect(0, 0, 800, 400);

//OCUPADOS
ctx3.fillStyle = "#e60716";
//CAJON ARRIBA IZQ
ctx3.fillRect(110, 110, 40, 80);
//CAJON ABAJO IZQ
ctx3.fillRect(110, 210, 40, 80);
//CAJON ENMEDIO ARRIBA
ctx3.fillRect(170, 110, 40, 80);
//CAJON ENMEDIO ABAJO
ctx3.fillRect(170, 210, 40, 80);
//CAJON ARRIBA DERECHA
ctx3.fillRect(230, 110, 40, 80);
//CAJON ABAJO DERECHA
ctx3.fillRect(230, 210, 40, 80);


//DIBUJAR TODO LO ANTERIOR
ctx.stroke();
ctx.stroke();
ctx.stroke();
</script>

</body>

</html>