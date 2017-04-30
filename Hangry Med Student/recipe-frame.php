<!--<!doctype html>-->
<!-- This page contains a frame for a recipe page -->
<html lang = "en">

<?php
// if(isset($_POST['recipe1_select'])) {
//   $recipe_one = $_POST['recipe1_select'];
// } else {
//   $recipe_one = 'parmpotatoes';
// }
// if(isset($_POST['recipe2_select'])) {
//   $recipe_two = $_POST['recipe2_select'];
// } else {
//   $recipe_two = 'meatloaf';
// }

// if(isset($_REQUEST['thefirstR'])) {
//   $recipe_one = $_REQUEST['thefirstR'];
// } else {
//   $recipe_one = 'parmpotatoes';
// }
//
// echo $recipe_one;
// if(isset($_REQUEST['thesecondR'])) {
//   $recipe_two = $_REQUEST['thesecondR'];
// } else {
//   $recipe_two = 'meatloaf';
// }


$recipe_one = $_REQUEST['thefirstR'];

echo $recipe_one;

$recipe_two = $_REQUEST['thesecondR'];


echo $recipe_two;

if(isset($_POST['fbutton'])) {
  $the_button = $_POST['fbutton'];
} else {
  $the_button = '';
}
$disp_site_l = 'scrambieggs.html';
$disp_site_r = 'scrambieggs.html';
// $site1 = 'parmpotatoes';
// $site2 = 'meatloaf';
// var_dump($_POST);

// if (strcmp($recipe_one, 'parmpotatoes') == 0) {
//   $site1 = 'parmpotatoes';
// }
// if (strcmp($recipe_one, 'meatloaf') == 0) {
//   $site1 = 'meatloaf';
// }
//
// if (strcmp($recipe_two, 'parmpotatoes') == 0) {
//   $site2 = 'parmpotatoes';
// }
// if (strcmp($recipe_two, 'meatloaf') == 0) {
//   $site2 = 'meatloaf';
// }

if (strcmp($the_button, 'FD') == 0){
  $disp_site_l = $recipe_one . 'ingred.html';
  $disp_site_r = $recipe_one . 'direct.html';
}
if (strcmp($the_button, 'SD') == 0) {
  $disp_site_l = $recipe_two . 'ingred.html';
  $disp_site_r = $recipe_two . 'direct.html';
}
if (strcmp($the_button, 'RR') == 0) {
  $disp_site_l = $recipe_one . 'all.html';
  $disp_site_r = $recipe_two . 'all.html';
}

// $the_button = $_POST['fbutton'];
// $the_site = 'scrambieggs.html';
// if (strcmp($the_button, 'FD') == 0){
//   $the_site = 'scrambieggs.html';
// }
// if (strcmp($the_button, 'SD') == 0) {
//   $the_site = 'scrambieggstwo.html';
// }
// if ($the_button === 'RR') {
// }
?>

<head>
  <link rel="stylesheet" href="CSS/style.css">
  <meta charset="UTF-8">
  <title>Recipe Builder</title>
</head>
<body>
  <section id="title-menu">
    <div id="title-title">
      <h1><a href="index.html">The Hangry Med Student</a></h1>
    </div>
    <div id="title-links">
      <ul>
        <li><a href="PrepTips.html">Tips</a> <br></li>
        <li><a href="recipe-frame.html">Meal Prep Builder</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </section>
  <section class="main-content">
    <p class="firstpara">
      <h1>Recipe Builder</h1> <br>
      Use this page to select recipes from our library and display them simultaneously.
    </p>
    <form class="choose-recipe" method="post">
      <fieldset>
        Choose your recipes: <!--select element-->
        <!-- <button type="submit" name="fbutton" value="R1">Choose Recipe 1</button>
        <button type="submit" name="fbutton" value="R2">Choose Recipe 2</button> -->
        <select name="recipe1_select" id="r1sel">
          <option value="default" selected>Choose recipe 1</option>
          <option value="parmpotatoes">Parmesan Roasted Potatoes</option>
          <option value="meatloaf">Meatloaf</option>
        </select>
        <select name="recipe2_select" id="r2sel">
          <option value="default" selected>Choose recipe 2</option>
          <option value="parmpotatoes">Parmesan Roasted Potatoes</option>
          <option value="meatloaf">Meatloaf</option>
        </select>
        <button type= "submit" name="recipe_select" class="chooserecipe">Choose Recipe</button>
      </fieldset>
    </form>
      <form class="recipe-form" method="post">
      <fieldset>
        Choose your display:
        <button type="submit" name="fbutton" value="FD">Show first recipe and directions</button>
        <button type="submit" name="fbutton" value="SD">Show second recipe and directions</button>
        <button type="submit" name="fbutton" value="RR">Show both recipes</button>
      </fieldset>
    </form>


    <input type="hidden" name="thefirstR" id="thefirstR"></input>
    <input type="hidden" name="thesecondR" id="thesecondR"></input>


    <section class="frames">
      <iframe src=<?php echo $disp_site_l; ?>></iframe>
      <iframe src=<?php echo $disp_site_r; ?>></iframe>
    </section>
  </section>
  <div class="bg-holder"></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="JS/pickrecipe.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
