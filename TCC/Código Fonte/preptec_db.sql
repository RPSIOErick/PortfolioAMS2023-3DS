-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2023 às 02:54
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `preptec_db`
--
CREATE DATABASE IF NOT EXISTS `preptec_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `preptec_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id_alternativa` int(11) NOT NULL,
  `id_quest` bigint(20) UNSIGNED NOT NULL,
  `txt_alter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alter_true` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id_alternativa`, `id_quest`, `txt_alter`, `alter_true`) VALUES
(1, 1, 'foi trazida ao país pela princesa Isabel, herdeira da família imperial, que presenteou a santa com uma\r\ncoroa de ouro e um manto de veludo azul escuro.', 0),
(2, 1, 'marca a divisão de classes presente na sociedade brasileira na medida em que está restrita aos\r\nrepresentantes das classes baixas.', 0),
(3, 1, 'foi imposta pelos poderes político e religioso, por meio de decretos papais e projetos de lei, embora\r\nnão tivesse apelo popular.', 0),
(4, 1, 'é um fenômeno inexpressivo na história do Brasil, tendo sido ignorada pelas autoridades desde o\r\nperíodo colonial.', 0),
(5, 1, 'iniciou-se no Brasil colônia, atravessou o período imperial e se manteve viva na República.', 1),
(6, 2, 'a higiene bucal, quando realizada com\r\neficiência diariamente, ocasiona um elevado\r\níndice de proliferação de bactérias e de\r\nformação de placas bacterianas', 0),
(7, 2, 'a ação de bactérias na degradação dos\r\ncarboidratos aumenta a acidez bucal, que é\r\nfundamental para o processo de proteção e\r\nde mineralização dos dentes.', 0),
(8, 2, 'o flúor, adicionado à água potável, atua na\r\ndigestão dos resíduos alimentares que ficam\r\nna cavidade bucal quando a higienização\r\nnão é realizada corretamente.', 0),
(9, 2, 'a fluoretação da água aumenta a\r\ndesmineralização do esmalte dos dentes,\r\nreduzindo o aparecimento de cáries, por isso\r\né um processo importante na saúde bucal.', 0),
(10, 2, 'o flúor é usado na prevenção de cáries, pois\r\nfortalece o esmalte dos dentes, formando um\r\nmaterial resistente à acidez decorrente da\r\nação de bactérias.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_08_14_203433_create_usuarios_table', 1),
(3, '2023_08_14_203956_create_simulado_table', 1),
(4, '2023_08_14_204818_create__teste_vocacional_table', 1),
(5, '2023_10_11_032214_create_tipo_inteligencias_table', 2),
(6, '2023_08_14_204914_create__perguntas_test_voc_table', 3),
(7, '2023_09_24_141613_questoes_sim', 3),
(8, '2023_09_24_145149_alternativas_sim', 3),
(9, '2023_10_11_031750_create_result_simus_table', 3),
(10, '2023_10_11_032036_create_result_quest_vocs_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntasquestvoc`
--

CREATE TABLE `perguntasquestvoc` (
  `id_QuestVoc` bigint(20) UNSIGNED NOT NULL,
  `id_pergunta` bigint(20) UNSIGNED NOT NULL,
  `id_TipoInteligencia` bigint(20) UNSIGNED NOT NULL,
  `txt_perg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `perguntasquestvoc`
--

INSERT INTO `perguntasquestvoc` (`id_QuestVoc`, `id_pergunta`, `id_TipoInteligencia`, `txt_perg`) VALUES
(1, 1, 1, 'Tenho facilidade em escrever poesias, redações e histórias.'),
(1, 2, 1, 'Tenho facilidade em identificar figuras de linguagem em diferentes tipos de textos.'),
(1, 3, 1, 'Eu possuo facilidade em aprender e me comunicar em outro idioma.'),
(1, 4, 1, 'Eu me sinto confortável ao falar em público ou em situações de debate.'),
(1, 5, 1, 'Tenho facilidade em entender o que os outros falam, mesmo com a complexidade de algumas palavras.'),
(1, 6, 4, 'Eu sei lidar com pressões e conflitos.'),
(1, 7, 4, 'Tenho facilidade em perceber as habilidades das pessoas.'),
(1, 8, 4, 'Sou capaz de identificar as emoções das pessoas apenas olhando para elas.'),
(1, 9, 4, 'Mantenho calma e ajudo a aliviar a tensão em situações de estresse ou de conflito em grupo.'),
(1, 10, 4, 'Participo ou gostaria de participar de grupos voluntários ou organizações sociais.'),
(1, 11, 6, 'Eu me considero uma pessoa autodidata.'),
(1, 12, 6, 'Tenho facilidade em expressar meus pensamentos, sentimentos e opniões de forma eficaz.'),
(1, 13, 6, 'Possuo facilidade em lidar com o estresse e superar desafios pessoais.'),
(1, 14, 6, 'Tenho facilidade em entender meus próprios sentimentos e emoções.'),
(1, 15, 6, 'Procuro sempre buscar o autodesenvolvimento e o meu crescimento pessoal.'),
(1, 16, 9, 'Me interesso por filosofia, religião espiritualidade ou outras disciplinas que exploram as questões existenciais.'),
(1, 17, 9, 'Me vejo ajudando as pessoas a enfrentar dilemas ou a encontrar significado em suas vidas.'),
(1, 18, 9, 'Você observa as situações de uma perspectiva profunda.'),
(1, 19, 9, 'Você se sente entediado ao dialogar ou agir de forma considerada comum.'),
(1, 20, 8, 'Possuo facilidade em identificar os diferentes tipos de plantas, flores, aves e outros elementos da natureza.'),
(1, 21, 8, 'Gosto de passar o tempo ao ar livre e na natureza.'),
(1, 22, 8, 'Possuo interesse em aprender como funciona a natureza e suas complexas interações.'),
(1, 23, 8, 'Me sinto conectado com a natureza e me preocupo com questões de conservação e sustentabilidade.'),
(1, 24, 8, 'Possuo capacidade de identificar padrões na natureza como o comportamento de animais em seu ambiente natural.'),
(1, 25, 3, 'Sou capaz de resolver problemas de álgebra ou equações matemáticas com facilidade.'),
(1, 26, 3, 'Custumo tomar decisões baseadas em fatos e evidências, evitando decisões emocionais.'),
(1, 27, 3, 'Eu valorizo a objetividade e precisão em minhas atividades.'),
(1, 28, 3, 'Gosto de problemas desafiadores como resolver enigmas e quebra-cabeça.'),
(1, 29, 3, 'Sou bom com números e algoritmos, me facilitando a realizar contas por mais complexas que sejam.'),
(1, 30, 5, 'Gosto de jogos que envolvem estratégia espacial, como xadrez, simulações entre outros.'),
(1, 31, 5, 'Tenho talento para pintar, desenhar ou criar artes visuais.'),
(1, 32, 5, 'Gosto de resolver labirintos ou jogos de construção.'),
(1, 33, 5, 'Quando visita um novo lugar, sou capaz de criar um mapa mental do local e me orientar facilmente.'),
(1, 34, 5, 'Gosto de projetar espaços físicos, como jardins, quarto dentre outros.'),
(1, 35, 7, 'Tenho interesse em aprender a ler partituras musicais ou de me aprofundar na teoria musical.'),
(1, 36, 7, 'Eu utilizo a musica como forma de lidar com as minhas emoções.'),
(1, 37, 7, 'Já participei ou tenho vontade de participar de apresentações musicais como concertos, bandas ou recitais.'),
(1, 38, 7, 'Gosto de compor música.'),
(1, 39, 7, 'Possuo facilidade em identificar elementos musicais, como harmonias, ritmos complexos e variações de tonalidade.'),
(1, 40, 2, 'Gosto de praticar esportes ou atividades físicas.'),
(1, 41, 2, 'Possuo uma boa coordenação motora.'),
(1, 42, 2, 'Tenho facilidade em aprender e executar movimentos complexos, como dança, malabarismos e acrobascias.'),
(1, 43, 2, 'Gosto de me expressar fisicamente, seja por meio da atuação, dança ou outras formas de expressão corporal.'),
(1, 44, 2, 'Tenho facilidade de compreender artes corporais que envolvem o movimento do corpo.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionariovocacional`
--

CREATE TABLE `questionariovocacional` (
  `id_QuestVoc` bigint(20) UNSIGNED NOT NULL,
  `descricao_QuestVoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `questionariovocacional`
--

INSERT INTO `questionariovocacional` (`id_QuestVoc`, `descricao_QuestVoc`) VALUES
(1, 'Um questionário vocacional para que o usuário descubra sua inteligência múltipla.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `id_quest` bigint(20) UNSIGNED NOT NULL,
  `txt_quest` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_perg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_simu` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id_quest`, `txt_quest`, `txt_perg`, `id_simu`) VALUES
(1, 'O culto a Nossa Senhora Aparecida começou em outubro de 1717, na cidade de Guaratinguetá, no Vale do\r\nParaíba paulista. Foi no rio Paraíba do Sul que a santa apareceu, primeiro o corpo, depois a cabeça, nas\r\nredes de pescadores locais. Na segunda metade do século XIX, a princesa Isabel, uma de suas devotas\r\nmais famosas, mandou confeccionar uma coroa de ouro e um manto de veludo azul escuro, bordado\r\ncom vinte e um brilhantes que representavam a capital e as vinte províncias do Império. Nossa Senhora\r\nAparecida foi proclamada padroeira do Brasil em 1930, após um decreto do papa Pio XI. Em 1980, o dia\r\n12 de outubro passou a ser feriado oficial no Brasil.', 'Conforme as informações do texto, é correto afirmar que a devoção a Nossa Senhora Aparecida', 1),
(2, 'Toda vez que nos alimentamos, resíduos\r\nficam depositados em nossos dentes e, se a\r\nhigienização não for realizada corretamente, o\r\nambiente bucal fica propício à proliferação de\r\nbactérias e à formação de placas bacterianas.\r\nAs bactérias degradam os carboidratos dos\r\nalimentos, elas produzem ácidos que\r\ndesmineralizam o esmalte dos dentes, dando\r\norigem as cáries.\r\nPara prevenir as cáries, adiciona-se o flúor à\r\nágua potável distribuída à população, essa prática\r\né chamada de fluoretação e é uma importante\r\nmedida de saúde pública.\r\nIsso ocorre, pois o flúor se une ao cálcio e ao\r\nfosfato, naturalmente presentes no esmalte dos\r\ndentes, criando um material resistente que ajuda a\r\nprevenir as cáries.', 'A partir da leitura do texto, podemos concluir\r\ncorretamente que', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultquestvoc`
--

CREATE TABLE `resultquestvoc` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `id_QuestVoc` bigint(20) UNSIGNED NOT NULL,
  `resultado_QV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_conclusao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultsimu`
--

CREATE TABLE `resultsimu` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `id_simu` bigint(20) UNSIGNED NOT NULL,
  `qntd_acertos` int(11) NOT NULL,
  `data_conclusao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `simulado`
--

CREATE TABLE `simulado` (
  `id_simu` bigint(20) UNSIGNED NOT NULL,
  `descricao_sim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `simulado`
--

INSERT INTO `simulado` (`id_simu`, `descricao_sim`) VALUES
(1, 'Simulado do Vestibulinho Etec');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipointeligencia`
--

CREATE TABLE `tipointeligencia` (
  `id_TipoInteligencia` bigint(20) UNSIGNED NOT NULL,
  `nome_inteligencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipointeligencia`
--

INSERT INTO `tipointeligencia` (`id_TipoInteligencia`, `nome_inteligencia`) VALUES
(1, 'Linguística'),
(2, 'Corporal-cinestésica'),
(3, 'Lógico-matemática'),
(4, 'Interpessoal'),
(5, 'Espacial'),
(6, 'Intrapessoal'),
(7, 'Musical'),
(8, 'Naturalista'),
(9, 'Existencial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `nome_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoUsuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Estudante',
  `fotoUsuario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id_alternativa`),
  ADD KEY `alternativas_id_quest_foreign` (`id_quest`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perguntasquestvoc`
--
ALTER TABLE `perguntasquestvoc`
  ADD PRIMARY KEY (`id_pergunta`),
  ADD KEY `perguntasquestvoc_id_tipointeligencia_foreign` (`id_TipoInteligencia`),
  ADD KEY `perguntasquestvoc_id_questvoc_foreign` (`id_QuestVoc`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `questionariovocacional`
--
ALTER TABLE `questionariovocacional`
  ADD PRIMARY KEY (`id_QuestVoc`);

--
-- Índices para tabela `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id_quest`),
  ADD KEY `questoes_id_simu_foreign` (`id_simu`);

--
-- Índices para tabela `resultquestvoc`
--
ALTER TABLE `resultquestvoc`
  ADD KEY `resultquestvoc_id_usuario_foreign` (`id_usuario`),
  ADD KEY `resultquestvoc_id_questvoc_foreign` (`id_QuestVoc`);

--
-- Índices para tabela `resultsimu`
--
ALTER TABLE `resultsimu`
  ADD KEY `resultsimu_id_usuario_foreign` (`id_usuario`),
  ADD KEY `resultsimu_id_simu_foreign` (`id_simu`);

--
-- Índices para tabela `simulado`
--
ALTER TABLE `simulado`
  ADD PRIMARY KEY (`id_simu`);

--
-- Índices para tabela `tipointeligencia`
--
ALTER TABLE `tipointeligencia`
  ADD PRIMARY KEY (`id_TipoInteligencia`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario_email_usuario_unique` (`email_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id_alternativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `perguntasquestvoc`
--
ALTER TABLE `perguntasquestvoc`
  MODIFY `id_pergunta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `questionariovocacional`
--
ALTER TABLE `questionariovocacional`
  MODIFY `id_QuestVoc` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id_quest` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `simulado`
--
ALTER TABLE `simulado`
  MODIFY `id_simu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tipointeligencia`
--
ALTER TABLE `tipointeligencia`
  MODIFY `id_TipoInteligencia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD CONSTRAINT `alternativas_id_quest_foreign` FOREIGN KEY (`id_quest`) REFERENCES `questoes` (`id_quest`);

--
-- Limitadores para a tabela `perguntasquestvoc`
--
ALTER TABLE `perguntasquestvoc`
  ADD CONSTRAINT `perguntasquestvoc_id_questvoc_foreign` FOREIGN KEY (`id_QuestVoc`) REFERENCES `questionariovocacional` (`id_QuestVoc`),
  ADD CONSTRAINT `perguntasquestvoc_id_tipointeligencia_foreign` FOREIGN KEY (`id_TipoInteligencia`) REFERENCES `tipointeligencia` (`id_TipoInteligencia`);

--
-- Limitadores para a tabela `questoes`
--
ALTER TABLE `questoes`
  ADD CONSTRAINT `questoes_id_simu_foreign` FOREIGN KEY (`id_simu`) REFERENCES `simulado` (`id_simu`);

--
-- Limitadores para a tabela `resultquestvoc`
--
ALTER TABLE `resultquestvoc`
  ADD CONSTRAINT `resultquestvoc_id_questvoc_foreign` FOREIGN KEY (`id_QuestVoc`) REFERENCES `questionariovocacional` (`id_QuestVoc`),
  ADD CONSTRAINT `resultquestvoc_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `resultsimu`
--
ALTER TABLE `resultsimu`
  ADD CONSTRAINT `resultsimu_id_simu_foreign` FOREIGN KEY (`id_simu`) REFERENCES `simulado` (`id_simu`),
  ADD CONSTRAINT `resultsimu_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
