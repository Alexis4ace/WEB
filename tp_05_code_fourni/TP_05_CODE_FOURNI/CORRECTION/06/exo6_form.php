<?php
   define('TAILLE_MAX', 102400);

   $form_values = array (
         'pseudo' => '',
         'avatar' => '',
      );

   $form_errors = array (
         'pseudo' => '',
         'avatar' => '',
      );

   function mise_en_forme_erreur($s)
   {
      if ($s == "")
         return "";
      else
         return '<span class="erreur">' . $s . '</span>';
   }

   if (! empty($_POST))
   {
      $ok = true;

      // pseudo
      if (! isset($_POST['pseudo']))
         $form_errors['pseudo'] = "le champ ne doit pas être vide";
      elseif ($_POST['pseudo'] == "")
         $form_errors['pseudo'] = "le champ doit être rempli";
      elseif (strlen($_POST['pseudo']) > 8)
         $form_errors['pseudo'] = "8 caractères maximum";
      elseif (! preg_match('/^[a-zA-Z]+$/', $_POST['pseudo']))
         $form_errors['pseudo'] = "uniquement des lettres";

      // avatar
      if (! isset($_FILES['avatar']))
         $form_errors['avatar'] = "le champ ne doit pas être vide";
      elseif ($_FILES['avatar']['error'] != UPLOAD_ERR_OK)
      {
         if ($_FILES['avatar']['error'] == UPLOAD_ERR_FORM_SIZE)
            $form_errors['avatar'] = "taille incompatible avec MAX_FILE_SIZE";
         elseif ($_FILES['avatar']['error'] == UPLOAD_ERR_PARTIAL)
            $form_errors['avatar'] = "fichier partiellement chargé";
         elseif ($_FILES['avatar']['error'] ==  UPLOAD_ERR_NO_FILE)
            $form_errors['avatar'] = "aucun fichier téléchargé";
         else
            $form_errors['avatar'] = "erreur inconnue";
      }
      else
      {
         if ($_FILES['avatar']['size'] > TAILLE_MAX)
            $form_errors['avatar'] = "fichier trop volumineux";
         elseif (   (exif_imagetype($_FILES['avatar']['tmp_name']) != IMAGETYPE_JPEG)
                 && (exif_imagetype($_FILES['avatar']['tmp_name']) != IMAGETYPE_PNG))
         {
            $form_errors['avatar'] = "fichier ni jpeg ni png";
         }
      }

      if (empty($form_errors['pseudo']) && empty($form_errors['avatar']))
      {
         $name = 'AVATARS/' . $_POST['pseudo'];

         // ménage (normalement à ne faire que si le move_uploaded_file échouerait)
         if (is_file($name . '.jpg'))
            unlink($name . '.jpg');
         if (is_file($name . '.png'))
            unlink($name . '.png');

         if (exif_imagetype($_FILES['avatar']['tmp_name']) == IMAGETYPE_JPEG)
            $name .= '.jpg';
         else
            $name .= '.png';

         if (move_uploaded_file($_FILES['avatar']['tmp_name'], $name))
         {
            header("Location: exo6.php?pseudo=" . $_POST['pseudo']);
            exit;   // au cas où
         }
         else
            $form_errors['avatar'] = "il ne s'agit pas d'un fichier téléchargé !!";
      }

      if(isset($_POST['pseudo']))
         $form_values['pseudo'] = $_POST['pseudo'];
      if (isset($_FILES['avatar']['name']))
         $form_values['avatar'] = $_FILES['avatar']['name'];   // ne sert à rien
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
      <title>exercice 3</title>
      <meta http-equiv="Content-Type"
            content="text/html; charset=UTF-8" />
      <link rel="stylesheet" media="all" type="text/css" title="Mon Style" href="exo6.css" />
   </head>

   <body>

      <h1>exo 3</h1>

      <p>
         Le champ "value" pour une saisie de type "file" n'est pas utilisé essentiellement
         pour des problèmes de sécurité (vol de fichier).<br />
         En outre, lorsqu'on reçoit le formulaire, la variable <code>$_FILE{'...']['name']</code>
         ne contient que le nom du fichier utilisateur, sans le chemin complet.
      </p>

      <form id="id_form"
            action="exo6_form.php"
            method="post" enctype="multipart/form-data">
         <fieldset>
            <legend>joli cadre</legend>

            <p>
               <label for="id_f_pseudo">pseudo</label><br />
               <input type="text" name="pseudo" id="id_f_pseudo" size="20"
                      maxlength="10"
                      value="<?php echo $form_values['pseudo']; ?>"
                      tabindex="10" />
               <?php echo mise_en_forme_erreur($form_errors['pseudo']); ?>
            </p>

            <p>
               <label>taille max (cachée)</label><br />
               <input type="hidden" name="MAX_FILE_SIZE" id="id_f_max_size" value="<?php echo TAILLE_MAX;?>" />
            </p>

            <p>
               <label for="id_f_avatar">avatar</label><br />
               <input type="file" name="avatar" id="id_f_avatar" size="40"
                      value="<?php echo $form_values['avatar']; /* inutile et impossible donc */ ?>"
                      tabindex="20" />
            </p>
               <?php echo mise_en_forme_erreur($form_errors['avatar']); ?>
         </fieldset>

         <fieldset>
            <legend>Validation</legend>
            <input type="submit" value="envoi" tabindex="30" />
            <input type="reset" value="efface" tabindex="40" />
         </fieldset>
      </form>


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

