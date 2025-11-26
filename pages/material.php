<?php
include '../includes/dados_materiais.php';

// Pega o tipo da URL (ex: material.php?tipo=vidro)
$tipo = $_GET['tipo'] ?? 'papel'; // Padrão é papel se não informado

// Verifica se o tipo existe no array, senão joga pra home
if (!array_key_exists($tipo, $materiais)) {
    header("Location: ../index");
    exit;
}

$m = $materiais[$tipo]; // Atalho para os dados do material atual

// Configurações para o Header
$base_path = "..";
$pagina_atual = "materiais";
$page_title = $m['titulo'] . " - Reciclagem";
$page_desc = $m['intro'];
$extra_css = "../css/materials/" . ($tipo == 'naoReciclavel' ? 'naoReciclavel' : $tipo) . ".css"; // Tenta carregar o CSS antigo por garantia
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/header.php'; ?>
    
    <style>
        /* Cores dinâmicas baseadas no material */
        .destaque h1 { text-shadow: 2px 2px 4px rgba(0,0,0,0.7); }
        .icon { color: <?php echo $m['cor_hex']; ?>; }
        .lista-processo li::before, .lista-itens li::before { color: <?php echo $m['cor_hex']; ?>; }
        .lista-itens li::before { background-color: <?php echo $m['cor_hex']; ?>; }
        .dica-item h3 { color: <?php echo $m['cor_hex']; ?>; }
        .btn-tematico { background-color: <?php echo $m['cor_hex']; ?>; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: bold; display: inline-block; margin-top: 15px;}
        .btn-tematico:hover { filter: brightness(90%); color: white; }
        .card-curiosidade { background-color: <?php echo $m['cor_hex']; ?>; color: #fff; }
        /* Ajuste para cores claras como branco/amarelo */
        <?php if($tipo == 'amarelo' || $tipo == 'branco' || $tipo == 'ambulatorios'): ?>
            .card-curiosidade { color: #333; }
            .btn-tematico { color: #333; }
        <?php endif; ?>
    </style>
</head>
<body>

    <section class="destaque">
        <img src="<?php echo $base_path; ?>/images/materials/<?php echo $m['banner']; ?>" alt="<?php echo $m['titulo']; ?>" class="destaque-img" loading="lazy">
        <div class="sobreposicao"></div>
        <div class="container conteudo-destaque">
            <h1><?php echo $m['titulo']; ?></h1>
            <p><?php echo $m['intro']; ?></p>
        </div>
    </section>

    <main class="container">
        <section class="tipos-residuos">
            <h2><i class="fas <?php echo $m['icone']; ?>"></i> Sobre <?php echo $m['titulo']; ?></h2>
            <p class="intro-texto"><?php echo $m['intro']; ?></p>

            <div class="grade-beneficios">
                <div class="cartao-beneficio">
                    <div class="icon"><i class="fas fa-recycle"></i></div>
                    <h3>Processo</h3>
                    <ol class="lista-processo">
                        <?php foreach($m['processo'] as $passo): ?>
                            <li><?php echo $passo; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>

                <div class="cartao-beneficio">
                    <div class="icon"><i class="fas fa-check-circle"></i></div>
                    <h3>O que reciclar</h3>
                    <ul class="lista-itens">
                        <?php foreach($m['reciclaveis'] as $item): ?>
                            <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                        <?php if(empty($m['reciclaveis'])) echo "<li>Não aplicável/Consulte normas</li>"; ?>
                    </ul>
                </div>

                <div class="cartao-beneficio">
                    <div class="icon"><i class="fas fa-times-circle"></i></div>
                    <h3>Evite / Cuidado</h3>
                    <ul class="lista-itens">
                        <?php foreach($m['nao_reciclaveis'] as $item): ?>
                            <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <section class="dicas-section">
            <h2><i class="fas fa-lightbulb"></i> Dicas Práticas</h2>
            <div class="dicas-container">
                <?php foreach($m['dicas'] as $dica): ?>
                <div class="dica-item">
                    <img src="<?php echo $base_path; ?>/images/materials/<?php echo $dica['img']; ?>" alt="<?php echo $dica['titulo']; ?>" loading="lazy">
                    <h3><?php echo $dica['titulo']; ?></h3>
                    <p><?php echo $dica['texto']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="curiosidades">
            <div class="card-curiosidade">
                <h2><i class="fas fa-leaf"></i> Impacto Ambiental</h2>
                <p>O descarte correto deste material contribui para:</p>
                <ul class="lista-impacto">
                    <?php foreach($m['impacto'] as $imp): ?>
                        <li><?php echo $imp; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="../index" class="btn-tematico"><i class="fas fa-arrow-left"></i> Voltar</a>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>