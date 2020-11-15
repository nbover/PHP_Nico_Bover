<?php

      $nom = "$_GET[nom] <br>";
      $email = "$_GET[email] <br>";
      $navegadors = "$_GET[navegadors] <br>";
      $gender = "$_GET[gender] <br>";
      $terms = "$_GET[terms] <br>";
      $pwd = "$_GET[pwd] <br>";
      $dateOfBirth = "$_GET[dateOfBirth] <br>";
      $comment = "$_GET[comment] <br>";
      $CFGS = "$_GET[CFGS] <br>";
?>

<HTML>
<head>
    <meta charset="UTF-8">
    <title>El meu primer exemple amb formularis</title>
</head>
<body>
  <h1>Formulari</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
        Nom Complet:
        <input type="text" name="nom">
        <br><br> e-mail:
        <input type="text" name="email">
        <br><br> Navegadors que coneixes:
        <br>
        <select name="navegadors" multiple>
            <option value="Lynx">Lynx</option>
            <option value="Chrome">Chrome</option>
            <option value="Safari">Safari</option>
            <option value="MozillaFirefox">Mozilla Firefox</option>
            <option value="Opera">Opera</option>
        </select>
        <br><br> Genere:
        <br>
        <input type="radio" id="home" name="gender" value="Home">
        <label for="home">Home</label><br>
        <input type="radio" id="dona" name="gender" value="Dona">
        <label for="dona">Dona</label><br>
        <input type="radio" id="altre" name="gender" value="Altre">
        <label for="altre">Altre</label>
        <br><br>
        Condicions i termes: <input type="checkbox" name="terms" value="agreed">
        <br><br> Password:
        <br>
        <input type="password" name="pwd">
        <br><br> Data de neixament:
        <br>
        <input type="date" name="dateOfBirth">
        <br><br> Comentari:
        <br>
        <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br> Quin CFGS estàs estudiant:
        <br>
        <input type="radio" id="DAW" name="CFGS" value="DAW">
        <label for="DAW">DAW</label><br>
        <input type="radio" id="ASIX" name="CFGS" value="ASIX">
        <label for="ASIX">ASIX</label>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
  <hr>
</body>
</HTML>
<?php
      echo "<h1>PHP</h1>";
      echo "El nom és <b>" .$nom. "</b><br>";
      echo "El e-mail és <b>" .$email. "</b><br>";
      echo "El navegador és <b>" .$navegadors. "</b><br>";
      echo "El genere és <b>" .$gender. "</b><br>";
      echo "Condicions i termes: <b>" .$terms. "</b><br>";
      echo "La contrassenya és <b>" .$pwd. "</b><br>";
      echo "La data de neixament és <b>" .$dateOfBirth. "</b><br>";
      echo "El comentari és <b>" .$comment. "</b><br>";
      echo "El CFGS sel·leccionat és <b>" .$CFGS. "</b><br>";
?>
