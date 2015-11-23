{extends file="main_page.tpl"}

{block name="blok"}
    
    <h2>Logowanie</h2>
  
    
<div class="well"  >
<form action="check_logowanie.php">
	haslo<input type="text" name="haslo" placeholder="haslo">
	login<input type="text" name="login" placeholder="login">
	<input type="submit" value="logowanie" class="btn btn-info">
	</form>

{/block}

