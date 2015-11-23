{extends file="main_page.tpl"}

{block name="blok"}
    <h2>Edycja Prenumeratora</h2>  
     {$smarty.get|var_dump}
       <?php 
       var_dump($klienci);
?>
{foreach $klienci as $k}
    <form action="index.php?action=SaveEditPrenum" method="Post">
        <input type="hidden" name = "id" value = "{$k.id_prenumerator}">
        <table class="table table-striped">
            <tr>
                <td><b>id</b></td><td>{$k.id_prenumerator} </td>
            </tr>
            <tr>
                <td><b>imie</b></td><td><input type="text" name="imie"  value="{$k.imie_prenum}" ></td>
            </tr>
            <tr>
                <td><b>nazwisko</b></td><td><input type="text" name="nazwisko"  value="{$k.nazwisko_prenum}"></td>
            </tr>
            <tr>
                <td><b>pesel</b></td><td><input type="text" name="pesel" value="{$k.pesel_prenum}" ></td>
            </tr>
            <tr>
                <td><b>adres</b></td><td><input type="text" name="adres" value="{$k.adres_prenum}" ></td>
            </tr>
            <tr>
                <td><b>miasto</b></td><td><input type="text" name="miasto" value="{$k.miasto_prenum}" ></td>
            </tr>
            <tr>
                <td><b>kod pocztowy</b></td><td><input type="text" name="kod" value="{$k.kod_prenum}" ></td>
            </tr>
            <tr>
                <td><b>data ważności</b></td><td><input type="text" name="data_waznosci" value="{$k.data_waznosci}" ></td>
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
            {/foreach}
    </form>
{/block}
