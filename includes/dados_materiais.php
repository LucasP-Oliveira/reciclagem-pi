<?php
$materiais = [
    'papel' => [
        'titulo' => 'Papel e Papelão',
        'banner' => 'papel/banner_papel.jpg',
        'intro' => 'A reciclagem de papel ajuda a reduzir o desmatamento, economizar energia e diminuir a quantidade de lixo nos aterros.',
        'icone' => 'fa-newspaper',
        'cor_classe' => 'azul',
        'cor_hex' => '#3498DB',
        'processo' => ['Coleta do papel usado', 'Triagem para separar os tipos', 'Trituração e mistura com água', 'Remoção de impurezas', 'Secagem e formação de novas folhas'],
        'reciclaveis' => ['Folhas de caderno', 'Jornais e revistas', 'Caixas de papelão', 'Envelopes', 'Embalagens limpas'],
        'nao_reciclaveis' => ['Papel higiênico usado', 'Papel plastificado', 'Papel engordurado (pizza)', 'Papel carbono'],
        'dicas' => [
            ['img' => 'papel/dica1_papel.jpg', 'titulo' => 'Preparação', 'texto' => 'Retire clipes e grampos antes de descartar.'],
            ['img' => 'papel/dica2_papel.jpg', 'titulo' => 'Armazenamento', 'texto' => 'Armazene em local seco e limpo.'],
            ['img' => 'papel/dica3_papel.png', 'titulo' => 'Descarte', 'texto' => 'Use a lixeira azul da coleta seletiva.']
        ],
        'impacto' => ['Menor desmatamento', 'Redução no consumo de água', 'Economia de energia', 'Diminuição de lixo em aterros']
    ],
    'vidro' => [
        'titulo' => 'Vidro',
        'banner' => 'vidro/banner_vidro.jpg',
        'intro' => 'O vidro é 100% reciclável e pode ser reutilizado infinitas vezes sem perder qualidade.',
        'icone' => 'fa-wine-bottle',
        'cor_classe' => 'verde',
        'cor_hex' => '#2ECC71',
        'processo' => ['Coleta e triagem', 'Remoção de tampas', 'Quebra e trituração', 'Fusão em fornos', 'Moldagem de novos vidros'],
        'reciclaveis' => ['Garrafas de bebida', 'Potes de conservas', 'Frascos de perfume', 'Copos de vidro (comum)'],
        'nao_reciclaveis' => ['Vidros temperados', 'Espelhos', 'Cristais', 'Lâmpadas', 'Vidros de automóveis'],
        'dicas' => [
            ['img' => 'vidro/dica1_vidro.jpg', 'titulo' => 'Limpeza', 'texto' => 'Lave para retirar resíduos de alimentos.'],
            ['img' => 'vidro/dica2_vidro.jpg', 'titulo' => 'Segurança', 'texto' => 'Se quebrado, embale em jornal ou caixa.'],
            ['img' => 'vidro/dica3_vidro.png', 'titulo' => 'Cores', 'texto' => 'Vidros de cores diferentes podem ser misturados na coleta.']
        ],
        'impacto' => ['Economia de matéria-prima (areia)', 'Menos consumo de energia', 'Redução de volume em aterros', 'Infinita reciclabilidade']
    ],
    'plastico' => [
        'titulo' => 'Plástico',
        'banner' => 'plastico/banner_plastico.jpg',
        'intro' => 'O plástico é um dos maiores poluentes. Reciclá-lo é vital para a vida marinha e terrestre.',
        'icone' => 'fa-bottle-water',
        'cor_classe' => 'vermelho',
        'cor_hex' => '#E73C3C',
        'processo' => ['Coleta seletiva', 'Separação por tipo (PET, PEAD, etc)', 'Lavagem e moagem', 'Aglutinação e extrusão', 'Transformação em pellets'],
        'reciclaveis' => ['Garrafas PET', 'Embalagens de limpeza', 'Potes de alimentos', 'Sacos plásticos', 'Brinquedos plásticos'],
        'nao_reciclaveis' => ['Cabos de panela', 'Adesivos', 'Embalagens metalizadas (salgadinho)', 'Fraldas descartáveis'],
        'dicas' => [
            ['img' => 'plastico/dica1_plastico.png', 'titulo' => 'Amasse', 'texto' => 'Amasse as garrafas para ocupar menos espaço.'],
            ['img' => 'plastico/dica2_plastico.jpg', 'titulo' => 'Tampas', 'texto' => 'As tampas também são recicláveis, não as jogue fora.'],
            ['img' => 'plastico/dica3_plastico.png', 'titulo' => 'Reutilize', 'texto' => 'Muitos potes podem servir para organizar a casa.']
        ],
        'impacto' => ['Redução do petróleo extraído', 'Proteção da vida marinha', 'Economia de espaço em aterros', 'Geração de empregos']
    ],
    'metal' => [
        'titulo' => 'Metal',
        'banner' => 'metal/banner_metal.jpg',
        'intro' => 'Metais como alumínio e aço são valiosos e podem ser reciclados infinitamente.',
        'icone' => 'fa-industry',
        'cor_classe' => 'amarelo',
        'cor_hex' => '#F1C40F',
        'processo' => ['Separação magnética', 'Prensagem em fardos', 'Fundição a altas temperaturas', 'Transformação em lingotes', 'Laminação de novas chapas'],
        'reciclaveis' => ['Latas de alumínio', 'Latas de aço (conservas)', 'Pregos e parafusos', 'Tampas metálicas', 'Panelas velhas'],
        'nao_reciclaveis' => ['Clipes e grampos (difícil separação)', 'Esponjas de aço', 'Latas de tinta ou verniz cheias', 'Pilhas e baterias (são perigosos)'],
        'dicas' => [
            ['img' => 'metal/dica1_metal.jpg', 'titulo' => 'Limpeza', 'texto' => 'Passe uma água rápida para tirar o excesso.'],
            ['img' => 'metal/dica2_metal.webp', 'titulo' => 'Anel da Lata', 'texto' => 'Deixe o anel na lata, ele também é alumínio.'],
            ['img' => 'metal/dica3_metal.png', 'titulo' => 'Valor', 'texto' => 'O alumínio tem alto valor de venda para catadores.']
        ],
        'impacto' => ['Enorme economia de energia elétrica', 'Conservação de minérios (bauxita)', 'Redução de emissões de CO2', 'Estímulo à economia circular']
    ],
    'organico' => [
        'titulo' => 'Orgânico',
        'banner' => 'organico/banner_organico.webp',
        'intro' => 'Resíduos orgânicos podem virar um rico adubo através da compostagem.',
        'icone' => 'fa-seedling',
        'cor_classe' => 'marrom',
        'cor_hex' => '#8B4513',
        'processo' => ['Separação na fonte', 'Compostagem (doméstica ou industrial)', 'Decomposição por microrganismos', 'Maturação', 'Uso como fertilizante'],
        'reciclaveis' => ['Restos de frutas e verduras', 'Cascas de ovos', 'Borra de café', 'Folhas secas', 'Saquinhos de chá'],
        'nao_reciclaveis' => ['Carnes e laticínios (em composteira simples)', 'Fezes de animais domésticos', 'Óleo e gorduras', 'Papel higiênico'],
        'dicas' => [
            ['img' => 'organico/dica1_organico.jpg', 'titulo' => 'Minhoçário', 'texto' => 'Use minhocas para acelerar o processo.'],
            ['img' => 'organico/dica2_organico.webp', 'titulo' => 'Equilíbrio', 'texto' => 'Misture restos úmidos com folhas secas.'],
            ['img' => 'organico/dica3_organico.jpg', 'titulo' => 'Horta', 'texto' => 'Use o húmus produzido nas suas plantas.']
        ],
        'impacto' => ['Redução de metano em aterros', 'Produção de adubo natural', 'Melhoria da qualidade do solo', 'Consciência alimentar']
    ],
    // Adicionei os outros tipos simplificados para o exemplo caber, você pode completar seguindo o padrão
    'naoReciclavel' => [
        'titulo' => 'Não Reciclável',
        'banner' => 'naoReciclaveis/banner_naoReciclaveis.jpg',
        'intro' => 'Materiais que, por técnica ou custo, não são reciclados atualmente.',
        'icone' => 'fa-trash-alt',
        'cor_classe' => 'cinza',
        'cor_hex' => '#95A5A6',
        'processo' => ['Acondicionamento correto', 'Coleta pelo caminhão comum', 'Destinação a aterros sanitários controlados'],
        'reciclaveis' => [],
        'nao_reciclaveis' => ['Papel higiênico', 'Fraldas e absorventes', 'Adesivos', 'Espelhos', 'Cerâmicas'],
        'dicas' => [
            ['img' => 'naoReciclaveis/dica1_naoReciclaveis.jpg', 'titulo' => 'Reduza', 'texto' => 'O melhor lixo é aquele que não é gerado.'],
            ['img' => 'naoReciclaveis/dica2_naoReciclaveis.webp', 'titulo' => 'Sacola', 'texto' => 'Use sacolas reutilizáveis.'],
            ['img' => 'naoReciclaveis/dica3_naoReciclaveis.webp', 'titulo' => 'Lixeira', 'texto' => 'Use a lixeira cinza ou comum.']
        ],
        'impacto' => ['Ocupação de espaço em aterros', 'Risco de poluição se mal descartado', 'Custo elevado de gestão']
    ],
    'perigosos' => [
        'titulo' => 'Perigosos',
        'banner' => 'perigosos/banner_perigosos.jpg',
        'intro' => 'Resíduos que oferecem risco à saúde pública e ao meio ambiente.',
        'icone' => 'fa-biohazard',
        'cor_classe' => 'laranja',
        'cor_hex' => '#E67E22',
        'processo' => ['Separação rigorosa', 'Logística reversa', 'Tratamento químico ou incineração', 'Disposição em aterros industriais'],
        'reciclaveis' => [], 
        'nao_reciclaveis' => ['Pilhas e baterias', 'Lâmpadas fluorescentes', 'Latas de tinta', 'Medicamentos vencidos', 'Eletrônicos'],
        'dicas' => [
            ['img' => 'perigosos/dica1_perigosos.png', 'titulo' => 'Não misture', 'texto' => 'Jamais jogue no lixo comum.'],
            ['img' => 'perigosos/dica2_perigosos.png', 'titulo' => 'Pontos de Coleta', 'texto' => 'Busque urnas em farmácias e supermercados.'],
            ['img' => 'perigosos/dica3_perigosos.png', 'titulo' => 'Devolução', 'texto' => 'Lojas de eletrônicos costumam aceitar de volta.']
        ],
        'impacto' => ['Contaminação de lençóis freáticos', 'Riscos à saúde humana', 'Poluição do solo por metais pesados']
    ],
    'madeira' => [
        'titulo' => 'Madeira',
        'banner' => 'madeira/banner_madeira.jpg',
        'intro' => 'A madeira pode ser reutilizada, triturada para virar compensado ou usada como biomassa.',
        'icone' => 'fa-tree',
        'cor_classe' => 'preto',
        'cor_hex' => '#2C3E50',
        'processo' => ['Triagem', 'Remoção de pregos', 'Trituração (Cavacos)', 'Fabricação de MDF/Aglomerado' , 'Queima para energia'],
        'reciclaveis' => ['Paletes', 'Móveis velhos (madeira maciça)', 'Caixas de feira', 'Sobras de construção civil'],
        'nao_reciclaveis' => ['Madeira com verniz tóxico', 'MDF plastificado (depende da usina)', 'Madeira podre ou com cupim'],
        'dicas' => [
            ['img' => 'madeira/dica1_madeira.webp', 'titulo' => 'Reforme', 'texto' => 'Móveis antigos podem ser restaurados.'],
            ['img' => 'madeira/dica2_madeira.jpg', 'titulo' => 'Artesanato', 'texto' => 'Use sobras para criar peças decorativas.'],
            ['img' => 'madeira/dica3_madeira.jpg', 'titulo' => 'Energia', 'texto' => 'Algumas indústrias usam como combustível.']
        ],
        'impacto' => ['Preservação de florestas', 'Aproveitamento energético', 'Redução de entulho', 'Estoque de carbono']
    ],
    'ambulatorios' => [
        'titulo' => 'Saúde (Ambulatorial)',
        'banner' => 'ambulatorios/residuos-ambulatoriais-saude.jpg',
        'intro' => 'Resíduos de serviços de saúde (RSS) exigem tratamento para eliminar patógenos.',
        'icone' => 'fa-syringe',
        'cor_classe' => 'branco',
        'cor_hex' => '#ECF0F1', // Um cinza claro para aparecer no fundo branco
        'processo' => ['Segregação na fonte', 'Acondicionamento seguro', 'Coleta especial', 'Autoclavagem ou Incineração', 'Aterro sanitário'],
        'reciclaveis' => [], // Geralmente não se recicla por segurança
        'nao_reciclaveis' => ['Agulhas e seringas', 'Luvas e gazes', 'Tecidos humanos', 'Medicamentos'],
        'dicas' => [
            ['img' => 'ambulatorios/segregacao.jpg', 'titulo' => 'Caixa Amarela', 'texto' => 'Perfurocortantes vão na caixa Descarpack.'],
            ['img' => 'ambulatorios/recipientes.jpg', 'titulo' => 'Saco Branco', 'texto' => 'Infectantes vão no saco branco leitoso.'],
            ['img' => 'ambulatorios/coleta-de-residuos-hospitalares.jpg', 'titulo' => 'Profissional', 'texto' => 'Apenas empresas especializadas coletam.']
        ],
        'impacto' => ['Prevenção de doenças', 'Segurança dos garis', 'Proteção da água e solo']
    ],
    'radioativos' => [
        'titulo' => 'Radioativos',
        'banner' => 'radioativos/residuos-radioativos-banner.webp',
        'intro' => 'Material extremamente perigoso que emite radiação ionizante. Controle rigoroso.',
        'icone' => 'fa-radiation',
        'cor_classe' => 'roxo',
        'cor_hex' => '#8E44AD',
        'processo' => ['Segregação blindada', 'Decaimento (espera a radiação baixar)', 'Cimentação (encapsulamento)', 'Depósito geológico profundo'],
        'reciclaveis' => [],
        'nao_reciclaveis' => ['Material de raio-X', 'Fontes de radioterapia', 'Rejeitos de usinas nucleares'],
        'dicas' => [
            ['img' => 'radioativos/trifolio.jpg', 'titulo' => 'Símbolo', 'texto' => 'Fique atento ao símbolo do trifólio (hélice).'],
            ['img' => 'radioativos/lavando-mao.jpg', 'titulo' => 'Distância', 'texto' => 'Mantenha distância e chame a CNEN.'],
            ['img' => 'radioativos/descarte.jpg', 'titulo' => 'Especialistas', 'texto' => 'Apenas físicos e técnicos autorizados manuseiam.']
        ],
        'impacto' => ['Risco genético e de câncer', 'Contaminação por milhares de anos', 'Segurança nacional']
    ]
];
?>