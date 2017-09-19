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
            width: 800px;
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
    $currentPage= "Tyrell";

	$menu = new MenuComponent($menuItems, $currentPage);

	return $menu->generate();
}

function buildContent() {


}
?>
       
            
            <p>House Tyrell of Highgarden is one of the Great Houses of the Seven Kingdoms, being Lords Paramount of the Mander and the liege lords of the Reach. A large, wealthy house, its wealth is only surpassed among the Great Houses by House Lannister, and the Tyrells can field the greatest armies. Additionally, if they call the ships of the Redwyne fleet, the lords of the Shield Islands, and the coastal lords, they can command a navy that equals if not surpasses the royal fleet of King's Landing. Highgarden is an ancient seat of rule and the heart of chivalry in the Seven Kingdoms; the Tyrells style themselves 'Defenders of the Marches' and 'High Marshals of the Reach', and traditionally, they have been Wardens of the South and Lords Paramount of the Mander. Their sigil is a golden rose on a green field, and their words are "Growing Strong." Members of the family tend to have curly brown hair and brown or golden eyes.<br><br> <img src="Images/Tyrell.png" alt="RIP"></p>
            
            
            
        
        
        
        
         </body>
    
    
</html>
