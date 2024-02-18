
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La liste des étudiants</title>
</head>
<body>
<center>
<h1>La liste des etudiants </h1>

<table border="1">
    <tr>
        <th> ID</th>  
        <th> Nom</th> 
        <th> Prenom</th> 
        <th> Specialite</th>
        <th colspan="3"><a href="etudiants/create"> Ajouter</a></th>
    </tr>
    <?php foreach($data as $etudiant): ?>
    <tr>
        <td><?=$etudiant['id']?></td>
        <td><?=$etudiant['nom']?></td>
        <td><?=$etudiant['prenom']?></td>
        <td><?=$etudiant['specialite']?></td>
        <td>
            <a href="etudiants/destroy/<?=$etudiant['id']?>">delete</a>
        </td>
        <td>
            <a href="etudiants/edit/<?=$etudiant['id']?>">edit</a>
        </td>
		<td>
             <a href="etudiants/show/<?= $etudiant['id'] ?>">show</a>
        </td>
    </tr> 
    <?php endforeach; ?>
</table>

<a href="./">Menu</a>
</center>
</body>
</html>
