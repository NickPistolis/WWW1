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
            width: 500px;
        }
        
        img{
            
            height: 300px;
            width: 300px;
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
    $currentPage= "Tully";

	$menu = new MenuComponent($menuItems, $currentPage);
	return $menu->generate();
}

function buildContent() {
	
}
?>
                   
            <p>House Tully of Riverrun is one of the Great Houses of the Seven Kingdoms. Lord Hoster Tully, the Lord Paramount of the Trident, rules over the riverlands from the Tully seat of Riverrun. Their sigil is a silver trout leaping on a blue and red striped field. Their words are "Family, Duty, Honor."<br><br> <img src="Images/Tully.png" alt="RIP"></p>
            
            
            
        
        
        
        
         </body>
    
    
</html>

