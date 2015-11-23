<?php /* Smarty version Smarty-3.1.19, created on 2014-10-29 15:15:39
         compiled from "./templates/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1663071535543140860b86e0-09629399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '663b7fb203cd75173ed1c1812accccbdb136740f' => 
    array (
      0 => './templates/users.tpl',
      1 => 1414575987,
      2 => 'file',
    ),
    'c30afa045ca7c75ba60091f2f658b9e266ff415b' => 
    array (
      0 => './templates/main_page.tpl',
      1 => 1414591913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1663071535543140860b86e0-09629399',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543140861c21e1_77659955',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543140861c21e1_77659955')) {function content_543140861c21e1_77659955($_smarty_tpl) {?><!doctype html>
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
                
  
 <h2>Użytkownicy</h2>
    <table class="table table-striped">
        <tr>
            <td><b>id</b></td>
            <td><b>imie</b></td>
            <td><b>nazwisko</b></td>
            <td><b>login</b></td>
            <td><b>poziom</b></td>
            <td></td>
               
        </tr>
    <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['klienci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['id_uzytkownika'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['imie_uzyt'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['nazwisko_uzyt'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['login'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['kategoria_uzyt'];?>
</td>
            <td>
                <a href="index.php?action=DetailsPrenum&id=<?php echo $_smarty_tpl->tpl_vars['k']->value['id_uzytkownik'];?>
">details</a>
            </td>
        </tr>
    
    <?php } ?>
    </table>

</div>
            
        </div>

    </body>
</html><?php }} ?>
