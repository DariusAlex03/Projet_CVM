<?php
require "view_brgin_control.php";
require "Utils/functions.php";
?>
<div style="margin-top: 2em; margin-left: 8em;">
<a href="?controller=identification&action=default">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg> <span style="font-size: 25px; margin-left: 20px; color: black ">Revenir en arriere</span>
</a>
</div>

<hr style="margin-top: 2em">
<?php foreach($data as $val) : ?>
<div style="margin-top: 2%; margin-left: 5em; font-size: 25px">
    Identifiant de la demande : <?= e($val['id']);?>
</div>

<div class="mx-auto" style=" text-align: left; width: 90vh; padding: 50px; font-size: 25px; margin-top: 2% ; border: solid 1px darkgrey; border-radius: 10px">
    <form >


            <div>
                <label>Nom : <?= e($val['nom']);?></label>
            </div>
            <div>
                <label>Prenom : <?= e($val['prenom']);?></label>
            </div>
            <div>
                <label>Mail : <?= e($val['mail']);?></label>
            </div>
            <div>
                <label>Nr de tel : <?= e($val['nr_tel']);?></label>
            </div>
            <div>
                <label>Date de la demande : <?= e($val['date']);?></label>
            </div>
            <div style="margin-top: 2%">
                <div class="d-inline">Description : <div style="margin-top: 3px" class="text-break"  dir="ltr"><?= e($val['description']);?></div></div>
            </div>

        <?php endforeach ?>
    </form>
</div>
