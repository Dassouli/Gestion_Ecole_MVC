<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="<?= $data == null ? "store" : "../update/" . $data->id ?>" method="post">
            <table>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" value="<?= $data != null ? $data->nom : "" ?>"></td>

                </tr>
                <tr>
                    <td>Prénom</td>
                    <td><input type="text" name="prenom" value="<?= $data != null ? $data->prenom : "" ?>"></td>

                </tr>
                <tr>
                    <td>Spécialité</td>
                    <td><input type="text" name="specialite" value="<?= $data != null ? $data->specialite : "" ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Envoyer"></td>
                    <td><input type="reset" value="Annuler"></td>
                </tr>
            </table>
        </form>
		<a href="<?=$data == null ?"../profs":"../../profs"?>"> Lister</a>
    </center>
</body>

</html>