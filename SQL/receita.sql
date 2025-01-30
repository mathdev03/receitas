-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/05/2024 às 06:45
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `receita`
--
CREATE DATABASE IF NOT EXISTS `receita` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `receita`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela_receita`
--

DROP TABLE IF EXISTS `tabela_receita`;
CREATE TABLE `tabela_receita` (
  `id_Receita` int(11) NOT NULL,
  `nome_Receita` varchar(100) NOT NULL,
  `img_Receita` varchar(100) NOT NULL,
  `desc_Receita` varchar(1200) NOT NULL,
  `item_Receita` varchar(1200) NOT NULL,
  `inst_Receita` varchar(1200) NOT NULL,
  `tempP_Receita` varchar(50) NOT NULL,
  `tempC_Receita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabela_receita`
--

INSERT INTO `tabela_receita` (`id_Receita`, `nome_Receita`, `img_Receita`, `desc_Receita`, `item_Receita`, `inst_Receita`, `tempP_Receita`, `tempC_Receita`) VALUES
(6, 'Bolo de Chocolate', 'BOLO_DE_CHOCOLATE.jpg', 'Um bolo de chocolate fofinho, r&aacute;pido e simples de fazer junto com uma x&iacute;cara de caf&eacute; &agrave;s vezes &eacute; tudo que a gente precisa para curar onde d&oacute;i em uma tarde chuvosa. Essa receita &eacute; pr&aacute;tica e n&atilde;o precisa de batedeira, sendo feita no liquidificador. Para garantir que o bolo de chocolate cres&ccedil;a e fique macio como a gente gosta, &eacute; importante que a gente respeite o tempo de bater a massa no eletrodom&eacute;stico indicado na receita. Isso permite que as fibras da farinha criem a trama que segura as bolhas criadas pelo fermento e que garantem o crescimento do bolo. A calda de calda de chocolate cobre o bolo finalizando tudo e deixando ainda mais delicioso. Se voc&ecirc; quiser completar, pode adicionar chocolate granulado ao topo para o bolo ficar bem &quot;chocolatudo&quot;. N&atilde;o esque&ccedil;a de untar a forma para que o bolo saia por inteiro e depois de 40 minutos, voc&ecirc; ter&aacute; o melhor bolo de chocolate saindo do seu forno.', 'Massa:\r\n* 4 ovos\r\n* 2 colheres (sopa) de manteiga\r\n* 2 x&iacute;caras (ch&aacute;) de a&ccedil;&uacute;car\r\n* 1 x&iacute;cara (ch&aacute;) de leite\r\n* 4 colheres (sopa) de chocolate em p&oacute;\r\n* 3 x&iacute;caras (ch&aacute;) de farinha de trigo\r\n* 2 colheres (sopa) de fermento\r\nCalda:\r\n* 2 colheres (sopa) de manteiga\r\n* 2 latas de creme de leite com soro\r\n* 7 colheres (sopa) de chocolate em p&oacute;\r\n* 3 colheres (sopa) de a&ccedil;&uacute;car', '1. Massa\r\nEm um liquidificador adicione os ovos, o chocolate em p&oacute;, a manteiga, a farinha de trigo, o a&ccedil;&uacute;car e o leite, depois bata por 5 minutos.\r\n\r\n2. Adicione o fermento e misture com uma esp&aacute;tula delicadamente.\r\n\r\n3. Em uma forma untada, despeje a massa e asse em forno m&eacute;dio (180 &ordm;C) preaquecido por cerca de 40 minutos. N&atilde;o se esque&ccedil;a de usar uma forma alta para essa receita: como leva duas colheres de fermento, ela cresce bastante! Outra solu&ccedil;&atilde;o pode ser colocar apenas uma colher de fermento e manter a sua receita em uma forma pequena.\r\n\r\n4. Calda\r\nEm uma panela, aque&ccedil;a a manteiga e misture o chocolate em p&oacute; at&eacute; que esteja homog&ecirc;neo.\r\n\r\n5. Acrescente o creme de leite e misture bem at&eacute; obter uma consist&ecirc;ncia cremosa.\r\n\r\n6. Desligue o fogo e acrescente o a&ccedil;&uacute;car.', '40 minutos', 'ND'),
(7, 'Bolo de Cenoura', 'BOLO_DE_CENOURA.jpeg', 'Bolo de Cenoura com cobertura de Chocolate fresco', '1. Ovo\r\n2. Cenoura\r\n3. Farinha\r\n4. Fermento\r\n5. Leite\r\n6. Chocolate', '1. Misture os ingredientes\r\n2. Deixe no Forno por 2 horas\r\n3. Fa&ccedil;a a cobertura de chocolate\r\n4. Pronto o bolo feito', '50 minutos', 'Nenhum'),
(8, 'Salpic&atilde;o de frango', 'SALPICÃO.png', 'O salpic&atilde;o de frango &eacute; uma receita cl&aacute;ssica, vers&aacute;til e irresist&iacute;vel que cativa paladares em diversas ocasi&otilde;es. Com uma combina&ccedil;&atilde;o perfeita de ingredientes, este prato se destaca tanto como acompanhamento quanto como refei&ccedil;&atilde;o principal. Sua prepara&ccedil;&atilde;o &eacute; simples e r&aacute;pida, proporcionando uma receita de sabor &uacute;nico, que surpreender&aacute; a todos os seus convidados. Com uma lista de ingredientes bem acess&iacute;veis, como peito de frango, milho, ervilha, cenoura, uvas-passas, creme de leite, batata palha e temperos como sal, salsinha, cebolinha e cebola, o salpic&atilde;o de frango se torna uma op&ccedil;&atilde;o pr&aacute;tica e saborosa para momentos especiais na mesa. O processo de preparo desse prato &eacute; &aacute;gil e envolve cozinhar o frango em &aacute;gua temperada com caldo de galinha, desfi&aacute;-lo e combin&aacute;-lo com os demais ingredientes j&aacute; preparados em um recipiente. O toque final fica por conta do creme de leite e da batata palha, resultando em um prato que, ap&oacute;s um breve tempo no forno, se revela em sua plenitude de sabores.', '* 1 peito de frango (grande)\r\n* 1 lata de milho\r\n* 1 lata de ervilha\r\n* 1 cenoura ralada\r\n* 1 lata ou 1 caixa de creme de leite\r\n* uva-passa a gosto\r\n* batata palha\r\n* sal a gosto\r\n* 1 tablete de caldo de galinha\r\n* salsinha\r\n* cebolinha\r\n* cebola', '1\r\nColoque em uma panela o tablete de caldo de galinha, uma pitada de sal e &aacute;gua suficiente para cozinhar o frango.\r\n\r\n2\r\nEnquanto o frango cozinha, misture em um recipiente o milho, a ervilha, a cenoura e as uvas- passas. Tempere com sal, salsinha, cebolinha e a cebola.\r\n\r\n3\r\nQuando o frango estiver cozido, desfie e coloque-o no recipiente com o restante dos ingredientes.\r\n\r\n4\r\nAcrescente o creme de leite e a batata palha.\r\n\r\n5\r\nColoque em um recipiente e leve para assar por aproximadamente 7 minutos.\r\n\r\n6\r\nSirva ainda quente.', '40 Minutos', 'Nenhum'),
(9, 'Risoto de Camar&atilde;o', 'RISOTO_DE_CAMARAO.jpg', 'O risoto de camar&atilde;o sem frescura, nesta receita para oito por&ccedil;&otilde;es, &eacute; uma verdadeira experi&ecirc;ncia de sabores que pode ser preparada sem grandes segredos. Repleto de ingredientes frescos e saborosos, este prato promete encantar o paladar dos apreciadores da boa gastronomia.', '* 3 x&iacute;caras de arroz arb&oacute;reo para risoto\r\n* 2 colheres de azeite\r\n* 1 colher de manteiga\r\n* 2 dentes de alho picados\r\n* 1/2 x&iacute;cara de vinho branco\r\n* 1 lim&atilde;o\r\n* 400 g de camar&atilde;o limpos e sem casca\r\n* 1 litro de &aacute;gua fervente ou mais\r\n* 1 caldo de camar&atilde;o ou de peixe\r\n* sal\r\n* pimenta-do-reino a gosto\r\n* 1/2 lata de tomate pelados em cubo ou/ 1 * tomate sem casca cortado em cubos\r\n* 2 colheres (sopa) de molho de tomate\r\n* salsinha ou coentro e cebolinha para temperar\r\n* 1 x&iacute;cara de parmes&atilde;o ralado', '1\r\nAdicione em uma panela grande com tampa, o azeite, a manteiga, o alho e o arroz.\r\n\r\n2\r\nMexa at&eacute; que o arroz comece a ficar transparente para soltar o amido (n&atilde;o deixe queimar).\r\n\r\n3\r\nQuando terminar, jogue o vinho e deixe evaporar, mexendo um pouco.\r\n\r\n4\r\nEnquanto isso, pegue os camar&otilde;es, esprema o lim&atilde;o, coloque um pouco de sal e deixe descansar por 10 minutos.\r\n\r\n5\r\nAp&oacute;s este tempo, apenas retire a &aacute;gua que se formou.\r\n\r\n6\r\nColoque o caldo de camar&atilde;o ou peixe na &aacute;gua fervente e adicione a &aacute;gua at&eacute; cobrir o arroz.\r\n\r\n7\r\nAdicione o molho com os tomates e tampe.\r\n\r\n8\r\nBaixe o fogo, mexa de vez em quando e quando come&ccedil;ar a evaporar, adicione mais &aacute;gua.\r\n\r\n9\r\nV&aacute; colocando &aacute;gua e n&atilde;o deixe grudar.\r\n\r\n10\r\nO arroz, no final, deve ficar sem l&iacute;quido e cremoso.\r\n\r\n11\r\nAssim que chegar no ponto, adicione o requeij&atilde;o, o cheiro-verde, o parmes&atilde;o e o camar&atilde;o.\r\n\r\n12\r\nExperimente, ajuste o sal e pimenta-do-reino.\r\n\r\n13\r\nDesligue o fogo, mexa bem.\r\n\r\n14\r\nTampe por 5 minutos e sirva.', '45 minutos', 'nenhum');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabela_receita`
--
ALTER TABLE `tabela_receita`
  ADD PRIMARY KEY (`id_Receita`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_receita`
--
ALTER TABLE `tabela_receita`
  MODIFY `id_Receita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
