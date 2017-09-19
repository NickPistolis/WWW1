<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="hhttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
<meta charset="utf-8">
<title>Home</title>    
</head>
    <style>
        background{
            
            background-color: blue;
        }
        p{
            text-align: center;
            font-size: 20px;
            height: auto;
            width: 600px;
        }
        
        img{
            
            height: 250px;
            width: 250px;
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
    $currentPage= "Lannister";

	$menu = new MenuComponent($menuItems, $currentPage);
	return $menu->generate();
}

function buildContent() {
	
}
?>
                 <p>House Lannister of Casterly Rock is one of the Great Houses of Seven Kingdoms, and the principal house of the westerlands. Their seat is Casterly Rock, though another branch exists that is based in nearby Lannisport. Their sigil is a golden lion on a field of crimson. Their official motto is "Hear Me Roar!" However, their unofficial motto, equally well known, is "A Lannister always pays his debts." The Warden of the West is a Lannister by tradition. Fair-haired, tall, and handsome, the Lannisters are the blood of Andal adventurers who carved out a mighty kingdom in the western hills and valleys. Through the female line they boast of descent from Lann the Clever, the legendary trickster of the Age of Heroes who tricked the members of House Casterly into giving him Casterly Rock during the era of the First Men.<br><br> <img src="Images/Lannister.png" alt="RIP"></p>
            
            
            
        
        
        
        
         </body>
    
    
</html>


