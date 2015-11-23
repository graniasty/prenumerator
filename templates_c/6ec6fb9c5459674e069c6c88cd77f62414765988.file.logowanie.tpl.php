<?php /* Smarty version Smarty-3.1.19, created on 2014-10-05 18:25:23
         compiled from "./templates/logowanie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6072361545431284d900b08-24411302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec6fb9c5459674e069c6c88cd77f62414765988' => 
    array (
      0 => './templates/logowanie.tpl',
      1 => 1412526236,
      2 => 'file',
    ),
    'c30afa045ca7c75ba60091f2f658b9e266ff415b' => 
    array (
      0 => './templates/main_page.tpl',
      1 => 1412516401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6072361545431284d900b08-24411302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5431284d9c68a9_91629886',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5431284d9c68a9_91629886')) {function content_5431284d9c68a9_91629886($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/2.3.2/cerulean/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="#">Głos Pszczelarza</a>
                <ul class="nav">
                    <li><a href="?action=ListPrenum">Lista</a></li>
                    <li><a href="?akcja=Nieaktywni">Nieaktywni</a></li>
                    <li><a href="?akcja=ListUser">Users</a></li>
                    <li><a href="?action=FormNewUser">Add User</a></li>
                </ul>
            </div>
        </div>

        <div class='container'>
            
    
    <h2>Logowanie</h2>
  
    
<div class="well"  >
<form action="CheckLogin.php">
	
	login<input type="text" name="login" placeholder="login">
        haslo<input type="text" name="haslo" placeholder="haslo">
	<input type="submit" value="logowanie" class="btn btn-info">
	</form>


        </div>

    </body>
</html><?php }} ?>
