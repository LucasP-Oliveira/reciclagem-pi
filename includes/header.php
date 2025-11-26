<?php
// Valores padrão se a página não definir
if (!isset($page_title)) { $page_title = "Reciclagem Sustentável"; }
if (!isset($page_desc)) { $page_desc = "Aprenda a reciclar e ajude o planeta."; }
if (!isset($page_img)) { $page_img = $base_path . "/images/lixeiras-de-reciclagem.webp"; }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <meta name="description" content="<?php echo $page_desc; ?>">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_desc; ?>">
    <meta property="og:image" content="<?php echo $page_img; ?>">
    
    <link rel="stylesheet" href="<?php echo $base_path; ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
    
    <?php if (isset($extra_css)) { echo '<link rel="stylesheet" href="'.$extra_css.'">'; } ?>
</head>
<body>

<header>
    <div class="container cabecalho">
        <div class="logo">
            <a href="<?php echo $base_path; ?>/index">
                <img src="<?php echo $base_path; ?>/images/plant-logo.png" alt="Logo Reciclagem" class="logo-img" loading="lazy">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo $base_path; ?>/index" class="<?php echo ($pagina_atual == 'home') ? 'active' : ''; ?>">Início</a></li>
                <li><a href="<?php echo $base_path; ?>/pages/blog" class="<?php echo ($pagina_atual == 'blog') ? 'active' : ''; ?>">Blog</a></li>
                <li><a href="<?php echo $base_path; ?>/pages/contato" class="<?php echo ($pagina_atual == 'contato') ? 'active' : ''; ?>">Contato</a></li>
                <li><a href="<?php echo $base_path; ?>/pages/equipe" class="<?php echo ($pagina_atual == 'equipe') ? 'active' : ''; ?>">Equipe</a></li>
            </ul>
        </nav>
    </div>
</header>