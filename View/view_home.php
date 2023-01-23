<?php
require_once "view_begin.php";
?>

<main class="mx-auto" style="width: 150vh">

    <div class="container">
        <div class="row">
            <div class="col-sm " >
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/Content/Images/electricite.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm ">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/Content/Images/polmberie.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm ">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/Content/Images/electricite.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr class="mx-auto" style="margin-top: 75px">

    <form>
        <div class="form-group mx-auto" style="width: 70vh; margin-top: 75px">
            <label for="exampleFormControlInput1">Email :</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="votremail@mail.com">
        </div>
        <div class=" form-group mx-auto" style="width: 70vh">
            <label for="exampleFormControlInput1">Nom :</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
        </div>
        <div class="form-group mx-auto" style="width: 70vh">
            <label for="exampleFormControlInput1">Prenom :</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prenom">
        </div>
        <div class="form-group mx-auto" style="width: 70vh">
            <label for="exampleFormControlInput1">Nr de tèl :</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0123456789">
        </div>
        <div class="form-group mx-auto" style="width: 70vh">
            <label for="exampleFormControlTextarea1">Détails sur les travaux (facultatif)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group mx-auto" style="width: 70vh; margin-bottom: 150px">
            <button type="submit" class="btn btn-primary mx-auto">Envoyez votre demande</button>
        </div>
    </form>


</main>
</html>
