<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="Content/Images/logo_cvm.png">
    <title>CVM RENOVATION</title>
</head>
<body>

<div class="mx-auto" style="width: 165vh; margin-top: 3%; text-align: center">
    <img src="../Content/Images/logo_cvm.png" alt="Logo CVM" style="height: 200px;width: 400px">
</div>


<section class="mx-auto" style="margin-top: 5vh">
    <div >
        <h1 style="text-align: center;margin-bottom: 0px;">Creation de compte</h1>
        <form action="" method="post" style="text-align: center; margin-top: 4vh">
            <label style="font-size: 30px;">Mail :</label>
            <br>
            <input name="identifiant" type="email" style="width: 350px;height: 40px;border-radius: 10px;padding: 0 10px 0 20px;font-size: 20px;">
            <br>
            <label style="font-size: 30px;">Nom :</label>
            <br>
            <input name="nom" type="text" style="width: 350px;height: 40px;border-radius: 10px;padding: 0 10px 0 20px;font-size: 20px;">
            <br>
            <label style="font-size: 30px;">Prenom :</label>
            <br>
            <input name="prenom" type="text" style="width: 350px;height: 40px;border-radius: 10px;padding: 0 10px 0 20px;font-size: 20px;">
            <br>
            <label style="font-size: 30px; margin-top: 2vh">Mot de passe :</label>
            <br>
            <input name="mdp" type="password" style="width: 350px;height: 40px;border-radius: 10px;padding: 0 10px 0 20px;font-size: 20px;">
            <br>
            <input type="submit" value="LOGIN" style="padding: 8px;margin-top: 3vh; border: 0;border-radius: 20px;width: 200px;"><br>
            <span style="font-size: 15px;">Déja un compte ? <a href="?controller=identification&action=identification">Me connecter</a></span>
        </form>
    </div>
</section>