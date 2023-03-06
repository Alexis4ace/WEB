<?php
    // exo 5.3, entités HTML

    // compléter le code : il y a plusieurs TODO

    include_once('../UTILS/utils.php');
    
    // la chaîne qui va être encodée au fil des questions
    $not_encoded = 'Le <code>if</code> est une "structure de contrôle", le && un \'opérateur booléen\'';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" media="screen" type="text/css"
              title="style d" href="03.css" />
    </head>
    <body>
        <h1>exo 5.3, entités HTML</h1>

        <div>
            <h2>chaîne non encodée</h2>
            <?php
                echo "<p>" . $not_encoded . "</p>";
            ?>

        <div>
            <h2>a) <code>htmlspecialchars</code></h2>

            <h3>avec ENT_NOQUOTES</h3>
            <?php
                // TODO $r = utilisation du filtre htmlspecialchars
                $r = htmlspecialchars($not_encoded, ENT_NOQUOTES);
                echo "<p>" . $r . "</p>";
                // Le &lt;code&gt;if&lt;/code&gt; est une "structure de contrôle", le &amp;&amp; un 'opérateur booléen'
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML401</h3>
            <?php
                // TODO $r = utilisation du filtre htmlspecialchars
                $r = htmlspecialchars($not_encoded, ENT_QUOTES|ENT_HTML401);
                echo "<p>" . $r . "</p>";
                // Le &lt;code&gt;if&lt;/code&gt; est une &quot;structure de contrôle&quot;, le &amp;&amp; un &#039;opérateur booléen&#039;
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                // TODO $r = utilisation du filtre htmlspecialchars
                $r = htmlspecialchars($not_encoded, ENT_QUOTES|ENT_HTML5);
                echo "<p>" . $r . "</p>";
                // Le &lt;code&gt;if&lt;/code&gt; est une &quot;structure de contrôle&quot;, le &amp;&amp; un &apos;opérateur booléen&apos;
            ?>
        </div>

        <div>
            <h2>b) <code>htmlspecialchars deux fois</code></h2>

            <h3>avec ENT_NOQUOTES</h3>
            <?php
                // TODO $r = ???
                $r = htmlspecialchars(htmlspecialchars($not_encoded, ENT_NOQUOTES));
                echo "<p>" . $r . "</p>";
                // Le &amp;lt;code&amp;gt;if&amp;lt;/code&amp;gt; est une &quot;structure de contrôle&quot;, le &amp;amp;&amp;amp; un 'opérateur booléen'
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML401</h3>
            <?php
                // TODO $r = ???
                $r = htmlspecialchars(htmlspecialchars($not_encoded, ENT_QUOTES|ENT_HTML401));
                echo "<p>" . $r . "</p>";
                // Le &amp;lt;code&amp;gt;if&amp;lt;/code&amp;gt; est une &amp;quot;structure de contrôle&amp;quot;, le &amp;amp;&amp;amp; un &amp;#039;opérateur booléen&amp;#039;
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                // TODO $r = ???
                $r = htmlspecialchars(htmlspecialchars($not_encoded, ENT_QUOTES|ENT_HTML5));
                echo "<p>" . $r . "</p>";
                // Le &amp;lt;code&amp;gt;if&amp;lt;/code&amp;gt; est une &amp;quot;structure de contrôle&amp;quot;, le &amp;amp;&amp;amp; un &amp;apos;opérateur booléen&amp;apos;
            ?>
        </div>

        <div>
            <h2>c) <code>htmlentities</code></h2>

            <h3>avec ENT_NOQUOTES</h3>
            <?php
                // TODO $r = utilisation du filtre htmlentities
                $r = htmlentities($not_encoded, ENT_NOQUOTES);
                echo "<p>" . $r . "</p>";
                // Le &lt;code&gt;if&lt;/code&gt; est une "structure de contr&ocirc;le", le &amp;&amp; un 'op&eacute;rateur bool&eacute;en'
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML401</h3>
            <?php
                // TODO $r = utilisation du filtre htmlentities
                $r = htmlentities($not_encoded, ENT_QUOTES|ENT_HTML401);
                echo "<p>" . $r . "</p>";
                // Le &lt;code&gt;if&lt;/code&gt; est une &quot;structure de contr&ocirc;le&quot;, le &amp;&amp; un &#039;op&eacute;rateur bool&eacute;en&#039;
            ?>

            <h3>avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                // TODO $r = utilisation du filtre htmlentities
                $r = htmlentities($not_encoded, ENT_QUOTES|ENT_HTML5);
                echo "<p>" . $r . "</p>";
                // Le &lt;code&gt;if&lt;&sol;code&gt; est une &quot;structure de contr&ocirc;le&quot;&comma; le &amp;&amp; un &apos;op&eacute;rateur bool&eacute;en&apos;
            ?>
        </div>

        <div>
            <h2>d) <code>htmlspecialchars_decode</code> et <code>htmlentities_decode</code></h2>
            <?php
                $to_decode = '&lt;em&gt;béb&eacute;&lt;/em&gt; &quot;&amp;amp;cie&quot;';
            ?>

            <h3>htmlspecialchars_decode avec ENT_NOQUOTES</h3>
            <?php
                echo "<p>original : " . $to_decode . "</p>";
                // TODO $r = utilisation du filtre htmlspecialchars_decode
                $r = htmlspecialchars_decode($to_decode, ENT_NOQUOTES);
                echo "<p>résultat : " . $r . "</p>";
                // <em>béb&eacute;</em> &quot;&amp;cie&quot;
            ?>

            <h3>htmlspecialchars_decode avec ENT_QUOTES|ENT_HTML401</h3>
            <?php
                echo "<p>original : " . $to_decode . "</p>";
                // TODO $r = utilisation du filtre htmlspecialchars_decode
                $r = htmlspecialchars_decode($to_decode, ENT_QUOTES|ENT_HTML401);
                echo "<p>résultat : " . $r . "</p>";
                // <em>béb&eacute;</em> "&amp;cie"
            ?>

            <h3>hmlspecialchars_decode avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                echo "<p>original : " . $to_decode . "</p>";
                // TODO $r = utilisation du filtre htmlspecialchars_decode
                $r = htmlspecialchars_decode($to_decode, ENT_QUOTES|ENT_HTML5);
                echo "<p>résultat : " . $r . "</p>";
                // <em>béb&eacute;</em> "&amp;cie"
            ?>

            <h3>html_entity_decode avec ENT_QUOTES|ENT_HTML5</h3>
            <?php
                echo "<p>original : " . $to_decode . "</p>";
                // TODO $r = utilisation du filtre html_entity_decode
                $r = html_entity_decode($to_decode, ENT_QUOTES|ENT_HTML5);
                echo "<p>résultat : " . $r . "</p>";
                // <em>bébé</em> "&amp;cie"
            ?>
        </div>
    </body>
</html>
