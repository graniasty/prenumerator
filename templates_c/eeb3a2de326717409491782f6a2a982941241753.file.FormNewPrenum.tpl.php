<?php /* Smarty version Smarty-3.1.19, created on 2014-10-29 15:20:41
         compiled from "./templates/FormNewPrenum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4630532605450e5342493b2-04948982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeb3a2de326717409491782f6a2a982941241753' => 
    array (
      0 => './templates/FormNewPrenum.tpl',
      1 => 1414591824,
      2 => 'file',
    ),
    'c30afa045ca7c75ba60091f2f658b9e266ff415b' => 
    array (
      0 => './templates/main_page.tpl',
      1 => 1414591913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4630532605450e5342493b2-04948982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5450e534304512_09187233',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5450e534304512_09187233')) {function content_5450e534304512_09187233($_smarty_tpl) {?><!doctype html>
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
                
    <h2>Nowy Prenumerator</h2>  


    <form action="index.php?action=AddNewPrenum" method="Post">

        <table class="table table-striped">
            <tr>
                <td><b>imie</b></td><td><input type="text" name="imie" placeholder="imie" ></td>
            </tr>
            <tr>
                <td><b>nazwisko</b></td><td><input type="text" name="nazwisko" placeholder="nazwisko" ></td>
            </tr>
            <tr>
                <td><b>pesel</b></td><td><input type="text" name="pesel" placeholder="pesel" ></td>
            </tr>
            <tr>
                <td><b>adres</b></td><td><input type="text" name="adres" placeholder="adres" ></td>
            </tr>
            <tr>
                <td><b>miasto</b></td><td><input type="text" name="miasto" placeholder="miasto" ></td>
            </tr>
            <tr>
                <td><b>kod pocztowy</b></td><td><input type="text" name="kod" placeholder="00-000" ></td>
            </tr>
            

            
            <tr>
                <td><b>prenumerata na</b></td>
                <td>
                    <select name = "dl_prenum">
                        <option value = 3 >3 miesiące</option>
                        <option value = 6 >6 miesiecy</option>
                        <option value = 12 >12 miesiecy</option>

                    </select>
                </td>
            </tr>



            <tr>
                <td><b></b></td><td><input class="btn btn-info" type="submit" value="add user"/></td>
            </tr>
            

        </table>
    </form>
</div>
            
        </div>

    </body>
</html><?php }} ?>
