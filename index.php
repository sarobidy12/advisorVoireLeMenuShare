<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= isset($_GET['title']) ? $_GET['title'] : "Menu Advisor"  ?>" />
    <meta property="og:description" content="<?= isset($_GET['description']) ? $_GET['description'] : "Un petit creux? Menu advisor est là pour cel"  ?>" />
    <meta property="og:image" content="<?= isset($_GET['couvertureWeb']) ? $_GET['couvertureWeb'] : "https://advisor.voirlemenu.fr/logo.png"  ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
        <meta name="description" content="<?=  isset($_GET['description']) ? $_GET['description'] : " Un petit creux? Menu advisor est là pour cel "  ?>" data-react-helmet="true" />
    <title>
        <?=  isset($_GET['title']) ? $_GET['title'] : "Menu Advisor"   ?>
    </title>
</head>

<body>
    <script>
        window.location.replace("https://advisor.voirlemenu.fr/restaurants/<?=  $_GET['id_restaurant'];  ?>");
    </script>
</body>

</html>