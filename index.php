<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="hhttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
<meta charset="utf-8">
<script>
function getJSON() {
    
            $("#contentBox").html("loading....");
            $.getJSON("http://ec2-52-201-226-101.compute-1.amazonaws.com/finalProject/coolStuff.json", function(GoT)
            {
                $("#contentBox").empty();
                $.each(GoT, function(key, data)
                {
                $("#contentBox").append("<li>" + data.name + " is a member of house " + data.group + "</li>");
                });
                
            });
         }    
    
</script>
<title>Home</title> 

    
<script src="jquery-1.11.2.min.js"></script>
    

</head>
    <style>
        p{
            text-align: center;
            font-size: 45px;
        }
        #contentBox{
            
            
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
        <p>Which House do you support? Login and Vote!</p>
        
        
        <?php

    session_start();

    $username = "test";
    $password = "pass";

    $error = "";

    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        header('Location: success.php');
    } 
        
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedIn'] = true;
            header('Location: success.php');
        } else {
            $_SESSION['loggedIn'] = false;
            $error = "Sorry Incorrect Username or Password";
        }
    }
?>
        <?php echo $error; ?>
        <form method="post" action="index.php">
            <label for="username">Username:</label><br/>
            <input type="text" name="username" id="username"><br/>
            <label for="password">Password:</label><br/>
            <input type="password" name="password" id="password"><br/>
            <input type="submit" value="Log In!">
        </form>
       
<?php

	//index.php?src=XYZ

  $id = empty($_GET['src']) ? 'ABC' : $_GET['src'];

  $videoData = json_decode(file_get_contents('videoData.json'));
  //print_r($videoData);

  $data = $videoData->$id;

  require_once 'Template.php';
  $page = new Template();
  $page->data = $data;
  
  print $page->build('videoPage.tmpl');

?>

        
        
        <p id="contentBox"></p>
        <button type="button" onclick="getJSON()">Click for some cool Characters</button>
 </body>
    
    
</html>

