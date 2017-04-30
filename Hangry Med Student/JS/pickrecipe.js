$("document").ready(function(){

console.log("HAIIII");

$('.choose-recipe').on('submit', function() {
  console.log("Set recipes");
  $recipeone = $('#r1sel').val();
  $recipetwo = $('#r2sel').val();
  $('#thefirstR').val($recipeone);
  $('#thesecondR').val($recipetwo);

  console.log($recipeone);
  console.log($recipeone);
});

}(jQuery));
