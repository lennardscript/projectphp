<?php

use projectphp\notasapp\models\Note;

  if(count($_POST) > 0) 
  {
    $title = isset($_POST['title']) ?? '';
    $content = isset($_POST['content']) ?? '';

    $note = new Note($title, $content);
    $note->save();
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create new note</title>
</head>

<body>
  <h1>Create note</h1>
  <form action="?view=create" method="POST">
    <input type="text" name="title" placeholder="Titulo...">
    <textarea name="content" id="" cols="30" rows="10"></textarea>

    <button type="submit" value="Create note">Crear nota</button>
  </form>
</body>

</html>