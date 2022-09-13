<div class="titulo">$_POST</div>

<form action="#" method="POST">
    <input type="text" name="Nombre">
    <button>Send</button>
    <select name="Estate">
        <option value="MS">Mato Grosso del Sul</option>
        <option value="BH">Chama o BAHIANO</option>
    </select>
</form>

<style>

    form > *{
        font-size: 1.8rem;

    }

</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);

echo '<br>' . count($_POST);