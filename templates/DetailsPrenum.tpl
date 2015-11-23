{extends file="main_page.tpl"}

{block name="blok"}
<h1>dane prenumeratora</h1>
<table class="table table-striped">
    <tr><td><b>imie</b></td><td>{$klient.imie}</td></tr>
    <tr><td><b>nazwisko</b></td><td>{$klient.nazwisko}</td></tr>
    <tr><td><b>pesel</b></td><td>{$klient.pesel}</td></tr>
    <tr><td><b>adres</b></td><td>{$klient.adres}</td></tr>
    <tr><td><b>miasto</b></td><td>{$klient.miasto}</td></tr>
    <tr><td><b>data rozpoczecia</b></td><td>{$klient.data_rozpoczecia}</td></tr>
    <tr><td><b>data zakonczenia</b></td><td>{$klient.data_zakonczenia}</td></tr>
    
</table>


{/block}