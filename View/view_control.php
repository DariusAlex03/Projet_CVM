<?php
require "view_brgin_control.php";
require "Utils/functions.php";
?>

<div class="container-fluid" style="margin: 3vh 0vh 3vh 10vh">
    <span style="font-size: 25px">Bonjour : <?php echo $_SESSION['prenom']?> <?php echo $_SESSION['nom']?></span>
</div>

<hr>

<div style="margin: 3vh 0 3vh 8vh">
    <form class="d-flex" role="search">
        <input style="width: 35vh" class="form-control me-2"  type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>

<main class="mx-auto" style="width: 182vh; margin-top: 50px; border: solid 1px lightgray; border-radius: 10px">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nr</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Mail</th>
            <th scope="col">Nr de tel</th>
            <th scope="col">Date</th>
            <th scope="col">Options</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $val) : ?>

        <tr>
            <th scope="row"><?= e($val['id']);?></th>
            <td><?= e($val['nom']);?></td>
            <td><?= e($val['prenom']);?></td>
            <td><?= e($val['mail']);?></td>
            <td><?= e($val['nr_tel']);?></td>
            <td><?= e($val['date']);?></td>
            <td>
                <a href="?controller=list&action=demande&id=<?=e($val['id']);?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25"  fill="black" class="bi bi-card-text" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>

                <!--<a style="margin-left: 10px" href="Utils/functions.php?id_sup=">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25"  fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>-->
            </td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</main>

</body>




