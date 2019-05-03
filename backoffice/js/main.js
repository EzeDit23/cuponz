/*if($("#desc-origen").val() == 20){
    $("body").css("background-color","red");
}

var resultPrecios = 0;

resultPrecios = $("#valor-total").val() + 20;

$(".test").html("<h1>" + resultPrecios + "</h1>");
*/



//Ejecuto si cambia cualquier elemento con clase pesoBruto o merma
jQuery('.pesoBruto , .merma').on('change',function()
{

      //Obtengo el valor bruto
      var bruto = $(this).closest('.producto').children('.pesoBruto').val();
      //Obtengo %Merma
      var merma = $(this).closest('.producto').children('.merma').val();

      //En caso de que alguno de los dos este en blanco, el neto estará en blanco.
      if(bruto.length==0 || merma.length==0){
        $(this).closest('.producto').children('.neto').val("");
        return;
      }

      //Realizo el cálculo
      var neto = bruto*merma/100;
      var val_dsc = Math.abs(neto-bruto);
      
      //Lo muestro en el div neto
      $(this).closest('.producto').children('.neto').val(neto);
      $(this).closest('.producto').children('.val_dsc').val(val_dsc);

});