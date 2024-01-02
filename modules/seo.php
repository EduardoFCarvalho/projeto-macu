<?php
header("Content-Type: text/html; charset=utf-8", true);

# ----------------------------------------
# Catch actual page
# ----------------------------------------
$activePage = basename($_SERVER['REQUEST_URI']);

# ----------------------------------------
# Cases
# ----------------------------------------
switch ($activePage) {
  case "empresa":
    $title       = "Empresa";
    $description = "";
    break;

  case "servicos":
    $title       = "Serviços";
    $description = "";
    break;

  case "contato":
    $title       = "Contato";
    $description = "Entre em contato com o , atuamos com dedicação e qualidade no segmento na área de ferramentaria e estamparia. Clique aqui para saber mais.";
    break;

  case "politica-de-privacidade":
    $title       = "Política de Privacidade";
    $description = "Conheça a política de privacidade do  ! Nós temos compromisso de manter sua privacidade durante o processo de navegação. Clique aqui e confira.";
    break;

  case "mapa-do-site":
    $title       = "Mapa do Site";
    $description = "Confira o mapa do site do  e tenha acesso as nossas páginas e produtos do segmento na área de ferramentaria e estamparia. Clique aqui e confira.";
    break;

  case "obrigado":
    $title       = "Agradecimento";
    $description = "Obrigado por ter preenchido nosso formulário, será um prazer esclarecer as suas dúvidas. Entraremos em contato na medida do possível.";
    break;
}

$keywords = "";

$proto = (isset($_SERVER['HTTPS']) === true) ? 'https' : 'http';
$canonical = $proto . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$titleHome = 'Home';
$descriptionHome = 'Descrição da Home';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Sempre checar se está OK daqui para baixo -->
  <?php include_once 'modules/config.php'; ?>

  <base href="<?= CONF_TAG_BASE ?>">

  <!-- Title -->
  <title><?= !empty($title) ? $title : $titleHome  ?><?= $isHome = !isset($isHome) ? ' | Macunaima Digital' : ''; ?></title>
  <!-- Charset -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Tags -->
  <meta name="description" content="<?= !empty($description) ? $description : $descriptionHome ?>">
  <meta name="keywords" content="<?= $keywords ?>">
  <!-- Canonical -->
  <link rel="canonical" href="<?= $canonical ?>">
  <!-- OpenGraph -->
  <meta property="og:region" content="Brasil">
  <meta property="og:title" content="<?= !empty($title) ? $title : $titleHome ?>">
  <meta property="og:type" content="article">
  <meta property="og:description" content="<?= !empty($description) ? $description : $descriptionHome ?>">
  <meta property="og:site_name" content="<?= !empty($title) ? $title : $titleHome ?>">
  <meta property="og:keywords" content="<?= $keywords ?>">
  <meta property="og:canonical" content="<?= $canonical ?>">

  <meta name="author" content="Macunaima Digital">
  <meta name="fone" content="11 1234-5678">
  <meta name="city" content="São Paulo">

  <!-- Daqui para baixo é padrão, não mexer -->

  <meta name="country" content="Brasil">
  <meta name="geo.region" content="-BR">
  <meta name="copyright" content="Copyright">
  <meta name="geo.position" content="-23.539351;-46.681925">
  <meta name="geo.placename" content="São Paulo-SP">
  <meta name="geo.region" content="SP-BR">
  <meta name="ICBM" content="-23.539351;-46.681925">
  <meta name="robots" content="index,follow">
  <meta name="rating" content="General">
  <meta name="revisit-after" content="2 days">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script async src="https://kit.fontawesome.com/75eaba243c.js" crossorigin="anonymous"></script>
  <!-- <script src="js/carouzel.min.js"></script> -->

  <!-- Favicon -->
  <link rel="icon" href="img/logo/icon.ico" type="image/x-icon">

  <!-- CSS -->
  <?php include_once 'modules/css.geral.php'; ?>