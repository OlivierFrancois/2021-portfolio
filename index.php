<?php

$mainTitle = "Portfolio d'Olivier FRANÇOIS";
$prefix = "2021-portfolio";
$uri = $_GET['page'];

switch ($uri) {
    case 'accueil' : 
		$url="public/accueil.php"; 
		$mainTitle = "Portfolio d'Olivier FRANÇOIS";
		break; 
    case 'qui-suis-je' : 
		$url="public/whoami.php"; 
		$mainTitle = "Portfolio d'Olivier FRANÇOIS - Qui suis-je ?";
		break; 
    case 'projets' : 
		$url="public/projects.php"; 
		$mainTitle = "Portfolio d'Olivier FRANÇOIS - Mes projets";
		break; 
    case 'contact' : 
		$url="public/contact.php"; 
		$mainTitle = "Portfolio d'Olivier FRANÇOIS - Me contacter";
		break;
    default:
        $url="public/accueil.php"; 
		$mainTitle = "Portfolio d'Olivier FRANÇOIS";
		break; 
}

if ($url != "") { 
    ob_start();
    require $url;
    $content = ob_get_clean();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require('include/head.php'); ?>
<body>
    <?php require('include/header.php'); ?>
    
    <?php require('include/nav.php'); ?>

    <main class="h-full">
        <div class="toggle-nav">
            <div class="cont-lines">
                <div class="single-line"></div>
            </div>
        </div>

        <?=$content; ?>
    </main>

    <?php require('include/footer.php'); ?>
</body>
</html>