$(document).ready(inicio) 
function inicio(){
 $(".botoncompra").click(anade)
 $("#carrito").load("php/poncarrito.php");
}
function anade(){
	var idnumero=$(this).val();
	var unidades= $("#numero"+idnumero).val();
	alert("Esta seguro de comprar:" +unidades);
	alert("Si quieres ver los productos que seleccionaste para comprar, dirigete a 'Mis compras'");
$("#carrito").load("php/poncarrito.php?p="+$(this).val()+"&cant="+unidades);
}

$(document).ready(function(){
  $("#button").click(function(){
    $("#flip").slideDown("slow");
  });
});