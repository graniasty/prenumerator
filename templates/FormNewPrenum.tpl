{extends file="main_page.tpl"}

{block name="blok"}
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
{/block}
