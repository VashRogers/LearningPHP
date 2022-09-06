
<h1 center>
    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Texto small';
        echo '</small>';
    ?>
</h1>

<?= '<div center azul>Outra forma de me espressar!</div>' ?>

<br>

<div center>
    <button dobro>
        <?='Nice' ?>
    </button>
</div>

<style>
    button{
        padding: 5px <?= 2*10 ?>px;
        background-color: #4286f4;
        color: #EEEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;

    }

    [azul] {
        color:#4286f4;

    }

    [dobro]{
        font-size: <?php 10 - 8 ?>rem;
    }

</style>