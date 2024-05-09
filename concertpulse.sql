-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2024 às 17:51
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `concertpulse`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(35) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `picture_background` text NOT NULL,
  `registered` datetime NOT NULL,
  `method` varchar(35) NOT NULL,
  `verified` varchar(35) NOT NULL,
  `location` text NOT NULL,
  `type` text NOT NULL,
  `function` int(35) NOT NULL,
  `url` text NOT NULL,
  `about` text NOT NULL,
  `number` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `picture`, `picture_background`, `registered`, `method`, `verified`, `location`, `type`, `function`, `url`, `about`, `number`, `facebook`, `twitter`, `instagram`) VALUES
(5, 'asjdasnka', 'asjdasnka@gmail.com', '', 'img\\fotos\\7e59c93721a6bdf1dd12cde7ea686768.jpeg', '', '2024-03-11 17:30:49', 'form', 'false', 'asd', 'singer', 1, '', '', '', '', '', ''),
(6, 'asdnkja', 'asdnkja@gmail.com', 'ajksndk@asjkdna', 'img\\fotos\\450f755a089a2c83e790c7337d54c728.jpeg', '', '2024-03-11 17:34:26', 'form', 'true', 'aklsfd', 'dj', 1, '', '', '', '', '', ''),
(10, 'happy', 'amldk@gmail.com', 'asd', 'img\\fotos\\servicos_img1.jpg', '', '2024-04-05 14:53:15', 'login', 'false', 'Sintra', 'Baterist', 1, '', '', '', '', '', ''),
(11, 'Ruben Costa', 'ruben.escola.2006@gmail.com', '', 'https://lh3.googleusercontent.com/a/ACg8ocI84I3098-o2aoK5zMBBGTswW-2MLBIFs8_HzoX_ZKOb2doOrXn=s96-c', '', '2024-04-06 13:55:40', 'google', 'false', 'Cacem', 'Gastronomic', 1, '', '', '', '', '', ''),
(19, 'Rben Costa', 'beatsrubencosta@gmail.com', '', 'foto_perfil.jpeg', 'foto_capa.jpg', '2024-05-04 17:45:18', 'google', 'false', 'New Jersey', 'Promotor de Festivais', 2, '19', ' kdjasc \n\njkhasksdjhacjkhasksdjhac ', '913352194', 'www.facebook.com', 'www.google.com', 'www.instagram.com'),
(20, 'ola', 'ola@gmail.com', '123', './img/foto/default.jpg', '', '2024-05-07 02:39:21', 'form', '', '', '', 2, '', '', '', '', '', ''),
(21, 'soufixe', 'soufixe@gmail.com', '123', './img/foto/default.jpg', '', '2024-05-07 02:40:24', 'form', '', '', '', 3, '', '', '', '', '', ''),
(22, 'Simao', 'sougiro@gmail.com', '123', './img/foto/default.jpg', '', '2024-05-07 11:09:38', 'form', '', '', '', 1, '', '', '', '', '', ''),
(23, 'simao', 'simao@gmail.com', '123', './img/foto/default.jpg', '', '2024-05-07 11:44:28', 'form', '', '', '', 1, '', '', '', '', '', ''),
(24, 'Ruben Costa', 'rubencostagaming@gmail.com', '', 'https://lh3.googleusercontent.com/a/ACg8ocKKSxuf4l-kffxxnUCxjOsVJUf7DmMFiYcKMl8FZMe-JHgKBQ=s96-c', '', '2024-05-08 17:54:09', 'google', 'false', '', '', 2, '24', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `shows` int(11) NOT NULL,
  `follows` int(11) NOT NULL,
  `singer` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artists`
--

INSERT INTO `artists` (`id`, `name`, `image_url`, `location`, `shows`, `follows`, `singer`, `rating`) VALUES
(1, 'Post Malone', './img/fotos/0cf31654ec0d43146262e3784904779a.jpg', 'Old York', 123, 2000, 'Singer', 392),
(2, 'Drake', 'https://example.com/drake.jpg', 'Toronto', 150, 2500, 'Rapper', 450),
(3, 'Ariana Grande', 'https://example.com/ariana-grande.jpg', 'Los Angeles', 100, 3000, 'Singer', 500),
(4, 'Post Malone', 'https://example.com/post-malone.jpg', 'New York', 192, 2000, 'Singer', 392),
(5, 'Drake', 'https://example.com/drake.jpg', 'Toronto', 150, 2500, 'Rapper', 450),
(6, 'Ariana Grande', 'https://example.com/ariana-grande.jpg', 'Los Angeles', 100, 3000, 'Singer', 500);

-- --------------------------------------------------------

--
-- Estrutura da tabela `follows`
--

CREATE TABLE `follows` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_followed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `follows`
--

INSERT INTO `follows` (`id`, `id_user`, `id_followed`) VALUES
(1, 19, 6),
(2, 6, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `id_founder` int(11) NOT NULL,
  `nome` text NOT NULL,
  `imagem` text NOT NULL,
  `sinopse` text NOT NULL,
  `descricao` text NOT NULL,
  `local` text NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `id_founder`, `nome`, `imagem`, `sinopse`, `descricao`, `local`, `data`) VALUES
(1, 19, 'Lost Lands', 'ola.jpg', 'Thanks for the Bass in my brain <3', 'Atuar no Lost Lands é uma experiência surreal. Desde o momento em que coloco os pés no palco até o momento em que saio, é uma montanha-russa de emoções e energia. O Lost Lands tem uma energia única, uma mistura de selvageria e comunidade que é difícil de replicar em qualquer outro lugar.\n\nO palco é colossal, uma verdadeira maravilha visual. As luzes, os telões, o som estrondoso - tudo conspira para criar uma atmosfera que te envolve completamente. É como estar em outro mundo.\n\nInteragir com a multidão é uma das melhores partes. Ver milhares de pessoas reunidas, todas compartilhando a mesma paixão pela música, é incrivelmente inspirador. Eles estão lá para se divertir, para se perder na batida, e eu estou lá para levá-los nessa jornada.\n\nClaro, há sempre desafios. Manter a energia alta durante um set longo pode ser exigente, mas é aí que reside a magia da atuação ao vivo. É uma troca de energia constante entre o DJ e o público, e quando você está no Lost Lands, essa troca atinge um nível totalmente novo.\n\nNo final do dia, atuar no Lost Lands é mais do que apenas tocar algumas músicas. É uma experiência imersiva, uma celebração da música e da cultura da dance music. E quando você está no palco, fazendo parte dessa celebração, é uma sensação indescritível.', 'USA', '2024-05-14'),
(2, 19, 'Tommrowland', 'ola2.jpg', 'Live today, Love Tommorrow!', 'INSANE!', 'BOOM', '2024-05-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects_images`
--

CREATE TABLE `projects_images` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projects_images`
--

INSERT INTO `projects_images` (`id`, `id_project`, `image`) VALUES
(1, 1, 'ola.jpg'),
(2, 1, 'ola2.jpg'),
(3, 2, 'ola3.jpg'),
(4, 2, 'ola4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rating`
--

CREATE TABLE `rating` (
  `id` int(35) NOT NULL,
  `id_send` int(35) NOT NULL,
  `id_receive` int(35) NOT NULL,
  `stars` int(35) NOT NULL,
  `date` date DEFAULT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `rating`
--

INSERT INTO `rating` (`id`, `id_send`, `id_receive`, `stars`, `date`, `comentario`) VALUES
(1, 5, 19, 4, '2024-05-24', 'Grande artista'),
(2, 6, 19, 2, '1900-01-12', 'incrivel'),
(3, 11, 19, 2, '2024-01-24', '                Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths,\n                choose the one more painful in the short term (pain avoidance is creating an illusion of equality).'),
(4, 19, 19, 4, '2024-05-10', 'brutal'),
(5, 19, 19, 4, '2024-05-10', 'brutal'),
(6, 19, 19, 4, '2024-05-10', 'Hi! I need more information asdniasdnasdnasd asjd askdj asjk dasjk dasjk djkas dkjas dkjasd akjd sdksja dasjkd ask Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius esse labore mollitia temporibus ducimus enim tempora nesciunt odit, libero voluptatem cupiditate repellat non dolor consequuntur maiores quam molestiae dolorum?\n\nHi! I need more information asdniasdnasdnasd asjd askdj asjk dasjk dasjk djkas dkjas dkjasd akjd sdksja dasjkd ask Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius esse labore mollitia temporibus ducimus enim tempora nesciunt odit, libero voluptatem cupiditate repellat non dolor consequuntur maiores quam molestiae dolorum?\n\nHi! I need more information asdniasdnasdnasd asjd askdj asjk dasjk dasjk djkas dkjas dkjasd akjd sdksja dasjkd ask Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius esse labore mollitia temporibus ducimus enim tempora nesciunt odit, libero voluptatem cupiditate repellat non dolor consequuntur maiores quam molestiae dolorum?\n\nHi! I need more information asdniasdnasdnasd asjd askdj asjk dasjk dasjk djkas dkjas dkjasd akjd sdksja dasjkd ask Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius esse labore mollitia temporibus ducimus enim tempora nesciunt odit, libero voluptatem cupiditate repellat non dolor consequuntur maiores quam molestiae dolorum?\n\nHi! I need more information asdniasdnasdnasd asjd askdj asjk dasjk dasjk djkas dkjas dkjasd akjd sdksja dasjkd ask Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius esse labore mollitia temporibus ducimus enim tempora nesciunt odit, libero voluptatem cupiditate repellat non dolor consequuntur maiores quam molestiae dolorum?\n\nHi! I need more information asdniasdnasdnasd asjd askdj asjk dasjk dasjk djkas dkjas dkjasd akjd sdksja dasjkd ask Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius esse labore mollitia temporibus ducimus enim tempora nesciunt odit, libero voluptatem cupiditate repellat non dolor consequuntur maiores quam molestiae dolorum?\n\nHi! I need more information asdniasdnasdnasd asjd askdj asjk dasjk dasjk djkas dkjas dkjasd akjd sdksja dasjkd ask Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius esse labore mollitia temporibus ducimus enim tempora nesciunt odit, libero voluptatem cupiditate repellat non dolor consequuntur maiores quam molestiae dolorum?\n\nHi! I need more information asdniasdnasdnasd asjd askdj asjk dasjk dasjk djkas dkjas dkjasd akjd sdksja dasjkd ask Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius esse labore mollitia temporibus ducimus enim tempora nesciunt odit, libero voluptatem cupiditate repellat non dolor consequuntur maiores quam molestiae dolorum?\n\nHi! I need more information asdniasdnasdnasd asjd askdj asjk dasjk dasjk djkas dkjas dkjasd akjd sdksja dasjkd ask Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius esse labore mollitia temporibus ducimus enim tempora nesciunt odit, libero voluptatem cupiditate repellat non dolor consequuntur maiores quam molestiae dolorum?\n\n'),
(7, 19, 19, 4, '2024-05-10', 'brutal'),
(8, 19, 19, 4, '2024-05-10', 'brutal'),
(9, 19, 19, 4, '2024-05-10', 'brutal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `saved`
--

CREATE TABLE `saved` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_saved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `saved`
--

INSERT INTO `saved` (`id`, `id_user`, `id_saved`) VALUES
(30, 11, 6),
(32, 9, 10),
(33, 12, 6),
(35, 23, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `id_promotor` int(11) NOT NULL,
  `localizacao` text NOT NULL,
  `sinopse` text NOT NULL,
  `descricao` text NOT NULL,
  `cartaz` text NOT NULL,
  `titulo` text NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `shows`
--

INSERT INTO `shows` (`id`, `id_promotor`, `localizacao`, `sinopse`, `descricao`, `cartaz`, `titulo`, `preco`) VALUES
(19, 19, 'Pontinha', 'sou fixe', 'ashgdjasgdjasd dakdhuklas df sdaufidas luifgsludfg uisdaglufdsgaufiasgd lfudsa gfiudasg fliusadfgiusadg fuisadif sduifglasudifglasdf gasdulfdsgafuilasgdf usadg fliasdg flasudglfuasdilfisa.', '19.jpeg', 'Daniel', 99.99),
(20, 19, 'Zambujeira do Mar', 'amres vivas', 'kdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nmskdasndjkasnjkdna dnasjkd bkjadbajkbdhjsavjhs asndmf nms', '20.jpg', 'Meo sudoeste', 120),
(21, 19, 'Ericeira', 'asyduvfglasuihçoashxhv oi\r\nasddv\r\n\r\n', 'assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss\r\nassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '21.png', 'Show Ericeira', 50),
(22, 19, 'Ericeira', 'asyduvfglasuihçoashxhv oi\r\nasddv\r\n\r\n', 'assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss\r\nassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '22.png', 'Show Ericeira', 50),
(23, 19, 'Ovar', 'Evento Yazaki Ovar Ovar Yazaki Evento', 'Evento Yazaki Ovar Ovar Yazaki Evento FULL', '23.png', 'Full Yazaki Event', 875);

-- --------------------------------------------------------

--
-- Estrutura da tabela `verify_accounts`
--

CREATE TABLE `verify_accounts` (
  `id` int(35) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(35) NOT NULL,
  `address_2` varchar(35) NOT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(35) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `verified` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projects_images`
--
ALTER TABLE `projects_images`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `verify_accounts`
--
ALTER TABLE `verify_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `projects_images`
--
ALTER TABLE `projects_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `saved`
--
ALTER TABLE `saved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `verify_accounts`
--
ALTER TABLE `verify_accounts`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
