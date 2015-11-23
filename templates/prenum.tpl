{extends file="main_page.tpl"}

{block name="blok"}
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
    {foreach $klienci as $k}
        <tr>
            <td>{$k.id_prenumerator}</td>
            <td>{$k.imie_prenum}</td>
            <td>{$k.nazwisko_prenum}</td>
            <td>{$k.pesel_prenum}</td>
            <td>{$k.data_waznosci}</td>
            <td>
                <a href="index.php?action=PickPrenum&id={$k.id_prenumerator}">details</a>
            </td>
        </tr>
    
    {/foreach}
    </table>

{/block}

