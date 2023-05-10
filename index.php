<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1-2</title>
</head>
<body> 
  <form  method="POST">
    <input type="text" name="answer">
    <button type="submit" name="submit">検索</button>
    <br>
    <?php
    $fruits = ['apple', 'orange', 'strawberry'];
    if(isset($_POST['submit'])) {
        $answer = $_POST['answer'];
        if(in_array($answer, $fruits)) {
          echo "{$answer}は、配列に含まれています。";
        } else {
          echo "{$answer}は、配列に含まれていません。";
        }
      }
    ?>
</body>
</html>