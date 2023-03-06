<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   <head>
      <title>exercice 3</title>
      <meta http-equiv="Content-Type"
            content="text/html; charset=UTF-8 />
   </head>

   <body>

      <h1>exo 3</h1>

      <h2>Retour</h2>
      <p> Ressaisissez <a href="exo6_form.php">le formulaire</a> si vous le souhaitez.</p>


      <h2>Pseudo</h2>
      <?php
         $ok_pseudo = false;
         $pseudo = "";
         $filename = "AVATARS/";
         if (! isset($_GET['pseudo']))
            echo '<p>URL incorrecte</p>';
         elseif ($_GET['pseudo'] == "")
            echo '<p>Votre pseudo est bien court</p>';
         elseif (strlen($_GET['pseudo']) > 8)
            echo '<p>Votre pseudo est bien long</p>';
         elseif (! preg_match('/^[a-zA-Z]+$/', $_GET['pseudo']))
            echo '<p>Votre pseudo est bien compliqué</p>';
         else
         {
            $pseudo = $_GET['pseudo'];
            echo '<p>Votre pseudo est : ' . $pseudo . '</p>';
            $ok_pseudo = true;
         }

      ?>

      <h2>Avatar</h2>
      <?php
         $ok_filename = false;;
         $filename .= $pseudo;
         if (! $ok_pseudo)
            echo '<p>Corrigez d\'abord votre pseudo</p>';
         elseif (is_file($filename . '.jpg'))
         {
            $filename .= '.jpg';
            echo '<p>Votre avatar est un jpg</p>';
            $ok_filename = true;
         }
         elseif (is_file($filename . '.png'))
         {
            $filename .= '.png';
            echo '<p>Votre avatar est un png</p>';
            $ok_filename = true;
         }
         else
            echo '<p>Vous n\'avez pas d\'avatar</p>';

         if ($ok_filename)
            echo '<p><img src="' . $filename . '" alt="avatar" title="' . $pseudo . '" /></p>';
      ?>


      <h2>GET</h2>

      <pre><?php
            echo htmlspecialchars(print_r($_GET, true));
         ?>
      </pre>

      <h2>POST</h2>

      <pre><?php
            echo htmlspecialchars(print_r($_POST, true));
         ?>
      </pre>

      <h2>FILES</h2>

      <pre><?php
            echo htmlspecialchars(print_r($_FILES, true));
         ?>
      </pre>

      <h2>SESSION</h2>

      <pre><?php
            echo htmlspecialchars(print_r($_SESSION, true));
         ?>
      </pre>

   </body>
</html>

