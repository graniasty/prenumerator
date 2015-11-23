<?php /* Smarty version Smarty-3.1.19, created on 2014-10-30 10:56:32
         compiled from "./templates/FormEditPrenum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12022968035451007a741aa5-59760516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d432cba29e49ed5b5d1f2774d24acdce056c64' => 
    array (
      0 => './templates/FormEditPrenum.tpl',
      1 => 1414662977,
      2 => 'file',
    ),
    'c30afa045ca7c75ba60091f2f658b9e266ff415b' => 
    array (
      0 => './templates/main_page.tpl',
      1 => 1414591913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12022968035451007a741aa5-59760516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5451007a8141f1_90517062',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5451007a8141f1_90517062')) {function content_5451007a8141f1_90517062($_smarty_tpl) {?><!doctype html>
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
                
    <h2>Edycja Prenumeratora</h2>  
     <?php echo var_dump($_GET);?>

       <<?php ?>?php 
       var_dump($klienci);
?<?php ?>>
<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['klienci']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
    <form action="index.php?action=SaveEditPrenum" method="Post">
        <input type="hidden" name = "id" value = "<?php echo $_smarty_tpl->tpl_vars['k']->value['id_prenumerator'];?>
">
        <table class="table table-striped">
            <tr>
                <td><b>id</b></td><td><?php echo $_smarty_tpl->tpl_vars['k']->value['id_prenumerator'];?>
 </td>
            </tr>
            <tr>
                <td><b>imie</b></td><td><input type="text" name="imie"  value="<?php echo $_smarty_tpl->tpl_vars['k']->value['imie_prenum'];?>
" ></td>
            </tr>
            <tr>
                <td><b>nazwisko</b></td><td><input type="text" name="nazwisko"  value="<?php echo $_smarty_tpl->tpl_vars['k']->value['nazwisko_prenum'];?>
"></td>
            </tr>
            <tr>
                <td><b>pesel</b></td><td><input type="text" name="pesel" value="<?php echo $_smarty_tpl->tpl_vars['k']->value['pesel_prenum'];?>
" ></td>
            </tr>
            <tr>
                <td><b>adres</b></td><td><input type="text" name="adres" value="<?php echo $_smarty_tpl->tpl_vars['k']->value['adres_prenum'];?>
" ></td>
            </tr>
            <tr>
                <td><b>miasto</b></td><td><input type="text" name="miasto" value="<?php echo $_smarty_tpl->tpl_vars['k']->value['miasto_prenum'];?>
" ></td>
            </tr>
            <tr>
                <td><b>kod pocztowy</b></td><td><input type="text" name="kod" value="<?php echo $_smarty_tpl->tpl_vars['k']->value['kod_prenum'];?>
" ></td>
            </tr>
            <tr>
                <td><b>data ważności</b></td><td><input type="text" name="data_waznosci" value="<?php echo $_smarty_tpl->tpl_vars['k']->value['data_waznosci'];?>
" ></td>
            </tr>
            

            
            <tr>
                <td>przedluzenie prenumeraty</td>
                <td>
                    <select name = "dl_prenum">
                        <option value = 0 > ---------- </option>
                        <option value = 3 >3 miesiące</option>
                        <option value = 6 >6 miesiecy</option>
                        <option value = 12 >12 miesiecy</option>

                    </select>
                </td>
            </tr>



            <tr>
                <td><b></b></td><td><input class="btn btn-info" type="submit" value="save changes"/></td>
            </tr>
            

        </table>
            <?php } ?>
    </form>
</div>
            
        </div>

    </body>
</html><?php }} ?>
