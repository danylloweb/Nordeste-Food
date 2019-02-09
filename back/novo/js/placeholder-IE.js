/* Usar placeholder no IE */

if(window.ActiveXObject || "ActiveXObject" in window){
  var input = $("input");
  var textarea = $("textarea");

  //Paraca cada input, pegar o valor do placeholder e set no Value do elemento
  input.each(function() {
    var txt = $( this ).attr("placeholder");
    $( this ).val( txt );
  });

  //Para cada textarea, pegar o valor do placeholder e set no Value do elemento
  textarea.each(function() {
    var txt = $( this ).attr("placeholder");
    $( this ).val( txt );
  });

  /* Limpar value ao clicar no input */
  input.on("focus", function(){
    if( ( $( this ).val() ) === ( $( this ).attr("placeholder") )  ){
     $( this ).val("");
   }
 });

  /* Limpar value ao clicar no textarea */
  textarea.on("focus", function(){
    if( ( $( this ).val() ) === ( $( this ).attr("placeholder") )  ){
     $( this ).val("");
   }
 });

  /* /Limpar value ao clicar no textarea */
  /* Re-inserir valor do input */
  input.focusout(function(){
    if( ( $( this ).val() ) === "" ){
      $( this ).val( $( this ).attr("placeholder") );
    }else{
      // N reiniciar valor
    }
  });
  /* Re-inserir valor do input */
  /* Re-inserir valor do textarea */
  textarea.focusout(function(){
    if( ( $( this ).val() ) === "" ){
      $( this ).val( $( this ).attr("placeholder") );
    }else{
      // N reiniciar valor
    }
  });
  /* Re-inserir valor do textarea */
}
/* /Usar placeholder no IE */