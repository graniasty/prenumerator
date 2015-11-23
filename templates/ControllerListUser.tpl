{extends file="main_page.tpl"}

{block name="blok"}
  
 <h2>List of users</h2>
    <table class="table table-striped">
        <tr>
            <td><b>id</b></td>
            <td><b>imie</b></td>
            <td><b>nazwisko</b></td>
            <td><b>login</b></td>
            <td><b>poziom</b></td>
            <td></td>
               
        </tr>
    {foreach $klienci as $k}
        <tr>
            <td>{$k.id_uzytkownik}</td>
            <td>{$k.imie_uzyt}</td>
            <td>{$k.nazwisko_uzyt}</td>
            <td>{$k.login}</td>
            <td>{$k.kategoria_uzyt}</td>
            <td>
                <a href="index.php?action=DetailsPrenum&id={$k.id_uzytkownik}">details</a>
            </td>
        </tr>
    
    {/foreach}
    </table>

{/block}

