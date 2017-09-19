<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="hhttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
<meta charset="utf-8">
<title>Home</title>    
</head>
    <style>
        p{
            text-align: center;
            font-size: 45px;
        }
        
    
    
    </style>
    <body>
        
   
<?php
set_include_path('templates');
require_once("Template.php");
require_once("MenuComponent.php");

// Set Page Title
$title = 'Home';
// CSS
$css = array();
// HTML
$html = array();


// Build Menu
$menuResult = buildMenu();
$css[] = $menuResult['cssFile'];
$html[] = $menuResult['html'];

// Build Content
$html[] = buildContent();


// Build Page
$page = new Template();

$page->title = $title;
$page->css = $css;
$page->html = $html;

print $page->build('page.tmpl');



function buildMenu() {
	$menuItems = array();
	$menuItems[] = array('label' => 'Lannister', 'link' => 'Lannister.php');
	$menuItems[] = array('label' => 'Stark', 'link' => 'Stark.php');
    $menuItems[] = array('label' => 'Tully', 'link' => 'Tully.php');
    $menuItems[] = array('label' => 'Arryn', 'link' => 'Arryn.php');
    $menuItems[] = array('label' => 'Home', 'link' => 'index.php');
    $menuItems[] = array('label' => 'Baratheon', 'link' => 'Baratheon.php');
    $menuItems[] = array('label' => 'Tyrell', 'link' => 'Tyrell.php');
    $menuItems[] = array('label' => 'Martell', 'link' => 'Martell.php');
    $currentPage= "Home";

	$menu = new MenuComponent($menuItems, $currentPage);
	return $menu->generate();
}

function buildContent() {
	
}
?>
      <?php
    // Start the session
    ob_start();
    session_start();

    // Check to see if actually logged in. If not, redirect to login page
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
        header("Location: index.php");
    }
?>

<h1>Choose your house!!</h1>
<form method="post" action="logout.php">
    <input type="submit" value="Logout">
</form>
        
<form action="" method="post" onSubmit="alert('Thank you for submission');">
    <input type="radio" name="House" value="Stark">Stark<br>
    <input type="radio" name="House" value="Tyrell">Tyrell<br>
    <input type="radio" name="House" value="Martell">Martell<br>
    <input type="radio" name="House" value="Lannister">Lannister<br>
    <input type="radio" name="House" value="Baratheon">Baratheon<br>
    <input type="radio" name="House" value="Aryon">Aryon<br>
    <input type="radio" name="House" value="Tully">Tully<br>
    <input type="submit" value="submit">       
</form>


<?php   
if (isset($_POST['submit'])) 
{
    
$choice = array();
// read uses data from JSON file
$choice = json_decode( file_get_contents('choice.json'),TRUE);
    if (isset($_POST['class']))
    {
         $value = $_POST['class'];
         $choice[$value]++;
    } 
    file_put_contents('choice.json',json_encode($choice));
}
?>
        
 </body>
    
    
</html>




