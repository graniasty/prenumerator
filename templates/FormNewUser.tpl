{extends file="main_page.tpl"}

{block name="blok"}
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
{/block}
