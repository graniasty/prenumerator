<?php /* Smarty version Smarty-3.1.19, created on 2014-10-29 15:34:07
         compiled from "./templates/prenum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123644215854312a9d8cb735-09007087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fff9f106e1098e8a04278121fb52287640b3247' => 
    array (
      0 => './templates/prenum.tpl',
      1 => 1414593013,
      2 => 'file',
    ),
    'c30afa045ca7c75ba60091f2f658b9e266ff415b' => 
    array (
      0 => './templates/main_page.tpl',
      1 => 1414591913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123644215854312a9d8cb735-09007087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54312a9d9d33c4_93754985',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54312a9d9d33c4_93754985')) {function content_54312a9d9d33c4_93754985($_smarty_tpl) {?><!doctype html>
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
                
  <h2>Wyszukiwarka</h2>  
  <form action="?FindPrenum" class="well">
      nazwisko<input type="text" name="nazwisko"> imie<input type="imie">pesel<input type="pesel"><input type="submit" value="szukaj">
      
  </form>
 <h2>Lista prenumeratorów</h2>
    <table class="table table-striped">
        <tr>
            <td><b>id</b></td>
            <td><b>imie</b></td>
            <td><b>nazwisko</b></td>
            <td><b>pesel</b></td>
            <td><b>data_zakonczenia</b></td>
            <td></td>
               
        </tr>
    <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['klienci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['id_prenumerator'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['imie_prenum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['nazwisko_prenum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['pesel_prenum'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['data_waznosci'];?>
</td>
            <td>
                <a href="index.php?action=PickPrenum&id=<?php echo $_smarty_tpl->tpl_vars['k']->value['id_prenumerator'];?>
">details</a>
            </td>
        </tr>
    
    <?php } ?>
    </table>

</div>
            
        </div>

    </body>
</html><?php }} ?>
