<?php /* Smarty version Smarty-3.1.19, created on 2014-10-29 15:16:27
         compiled from "./templates/FormNewUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133167171154314bf9571928-27566176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3284f9940f0df9b50a0a24599006950a6032e82f' => 
    array (
      0 => './templates/FormNewUser.tpl',
      1 => 1412714903,
      2 => 'file',
    ),
    'c30afa045ca7c75ba60091f2f658b9e266ff415b' => 
    array (
      0 => './templates/main_page.tpl',
      1 => 1414591913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133167171154314bf9571928-27566176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54314bf962ec88_95146968',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54314bf962ec88_95146968')) {function content_54314bf962ec88_95146968($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/2.3.2/cerulean/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    </head>
    <body>
        <div class="navbar navbar-fixed-top" padding="10px" >
            <div class="navbar-inner">
                <span class="icon-bar"></span><a class="brand" href="#">Aplikacja Abonent</a>
                <ul class="nav">
                    
                    
                    <li><a href="?action=ListPrenum">Prenumerators</a></li>
                    <li><a href="?action=FormNewPrenum">Add Prenumerator</a></li>
                    <li><a href="?action=ListUser">Użytkownicy</a></li>
                    <li><a href="?action=FormNewUser">Dodaj Użytkownika</a></li>
                    <li><a href="wylogowanie.php">Wylogowanie</a></li>
                    <li><a href="http://serwer1332406.home.pl/programist/">Darek Bury Programming</a></li>
                </ul>
            </div>
        </div>

        <div class='container'>
            <div class='overlay'>
                
    <h2>Nowy Użytkownik</h2>  

    
    <form action="index.php?action=AddNewUser" method="Post">

        <table class="table table-striped">
            <tr>
                <td><b>login</b></td><td><input type="text" name="login" placeholder="login" ></td>
            </tr>
            <tr>
                <td><b>imie</b></td><td><input type="text" name="imie" placeholder="imie" ></td>
            </tr>
            <tr>
                <td><b>nazwisko</b></td><td><input type="text" name="nazwisko" placeholder="nazwisko" ></td>
            </tr>
            <tr>
                <td><b>uprawnienia</b></td><td><input type="text" name="kategoria_uzyt" placeholder="poziom uprawnien" ></td>
            </tr>
            <tr>
                <td><b>haslo</b></td><td><input type="text" name="haslo" placeholder="haslo" ></td>
            </tr>
            <tr>
                <td><b></b></td><td><input class="btn btn-info" type="submit" value="add user"/></td>
            </tr>

            </tr>

        </table>
    </form>
</div>
            
        </div>

    </body>
</html><?php }} ?>
