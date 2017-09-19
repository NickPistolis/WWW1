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
    $currentPage= "Arryn";

	$menu = new MenuComponent($menuItems, $currentPage);
	return $menu->generate();
}

function buildContent() {
	$content = new Template();
	$content->myVariable = '';
	return $content->build('intro.tmpl');
    
}
?>
           
            <p>House Arryn of the Eyrie is one of the Great Houses of Westeros, and is the principal noble house in the Vale of Arryn. Their main seat is the Eyrie, which is considered impregnable. House Arryn has at least one other holding, their winter castle at the Gates of the Moon, which was once their main seat.Both of these fortifications sit astride the Giant's Lance, the tallest mountain in the Vale, the Gates of the Moon at its foot, the Eyrie at its top. The Arryn sigil is a sky-blue falcon soaring against a white moon on a sky-blue field, and their words are "As High as Honor".<br><br> <img src="Images/Arryn.png" alt="RIP"></p>
            
            
            
        
        
        
        
         </body>
    
    
</html>


