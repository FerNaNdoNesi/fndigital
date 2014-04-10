-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2014 at 07:57 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5495466_fndigit`
--

-- --------------------------------------------------------

--
-- Table structure for table `anunciosPortal`
--

CREATE TABLE `anunciosPortal` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_categoria` int(11) NOT NULL,
  `codigo_user` int(11) NOT NULL,
  `titulo` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `descricao1` varchar(340) COLLATE utf8_unicode_ci NOT NULL,
  `descricao2` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `preco` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `foto1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `foto2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `anunciosPortal`
--

INSERT INTO `anunciosPortal` VALUES(1, 18, 1, 'Mouse sem fio - Satellite {ótimo preço}', 'Vendo mouse sem fio apenas R$ 35,00 normalmente você só vai encontrar mouse s/fio por no minimo R$50', 'modelo : slim (ultra fino) cor: preto alcance até 10metros ótima duração das pilhas  Tenho também outros produtos para venda acesse: www.FNdigital.comyr.com/portalcco.php  contatos:  msn: f.n_@live.com email: fernandonesi@gmail.com fone: (49)8859-2012', 'R$ 35,00', 'no_photo.jpg', 'img2.jpg');
INSERT INTO `anunciosPortal` VALUES(2, 18, 1, 'Vendo Jogo Profissional de Poker 200 fichas', 'Tenho 2 Jogos esta completo (novo) lacrado e nunca usado. Tenho um igual e é muito bom pra jogar com ', '* 200 Fixas 5 cores diferentes * 3 fixas de Dealer / Big / Small * Tapete para mesa de jogo * Dois baralhos prontos * Caixa de aluminium com porta fixas  Tenho 2 Jogos esta completo (novo) lacrado e nunca usado. Tenho um igual e é muito bom pra jogar com a galera!!  Em Chapecó este Jogo esta custando mínimo 75,00 (no Celeiro)  Estou vendendo por apenas 45,00  Tenho 2 jogos disponíveis  Contatos: 	', 'R$ 45,00', 'user=1cat=18anu=2foto=1.jpg', 'foto4.jpg');
INSERT INTO `anunciosPortal` VALUES(3, 18, 2, 'Cartão de Memória SD 2GB - Sandisk _-_-__---___---___---_-___--_______', 'Marca:	Sandisk. Equipamentos compatíveis:	Máquina Digital / Celular / NoteBook Memória	2GB. Conteúdo da embalagem	1 Cartão de Memória e um adaptador. Valor: R$ 15,00  Mais informações:	Feito para durar, com um índice de resistência a choques de 2.000 G, o equivalente a uma queda de 3 metros; Alta velocidade de transferência para cópia e d', '', 'No Anuncio, Baixei o', 'user=2cat=18anu=3foto=1.jpg', 'omg2.png');

-- --------------------------------------------------------

--
-- Table structure for table `atendimento`
--

CREATE TABLE `atendimento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=97 ;

--
-- Dumping data for table `atendimento`
--

INSERT INTO `atendimento` VALUES(93, 'gQeX3O9O', 'q76OWF3XSAO', '7i5dl90p6f@yahoo.com', 'Taking the ovievrew, this post hits the spot', '2014-04-10 04:28:00');
INSERT INTO `atendimento` VALUES(94, '', '', '', '', '2014-04-10 04:28:02');
INSERT INTO `atendimento` VALUES(95, 'hYaiGHL35iTQ', 'FeHeBkhabvL', 'x2bih9jh9e@gmail.com', 'That insight solves the prolbem. Thanks!', '2014-04-10 04:36:22');
INSERT INTO `atendimento` VALUES(96, '', '', '', '', '2014-04-10 04:36:25');
INSERT INTO `atendimento` VALUES(92, 'WCuvKqxqTFbBfFwIKK', 'hXncYrnBviaLNQgz', 'tewntb@yncgzb.com', 'bmrb9A  &lt;a href=&quot;http://uofjbusgaabb.com/&quot;&gt;uofjbusgaabb&lt;/a&gt;, [url=http://ycmpqbgpyqmm.com/]ycmpqbgpyqmm[/url], [link=http://lbkdwbrpyixb.com/]lbkdwbrpyixb[/link], http://ddwtklvhgbsr.com/', '2014-04-02 23:39:44');
INSERT INTO `atendimento` VALUES(91, 'VekndyqdEdgazg', 'WNyyZMyitfGd', 'nbuexx@saikzt.com', 'NJu4mp  &lt;a href=&quot;http://axsmgxrjetxg.com/&quot;&gt;axsmgxrjetxg&lt;/a&gt;, [url=http://rzqvhwsqlxqs.com/]rzqvhwsqlxqs[/url], [link=http://kndqpsnmlwmj.com/]kndqpsnmlwmj[/link], http://bfnikunsgyog.com/', '2014-04-01 06:50:32');
INSERT INTO `atendimento` VALUES(90, 'vIdXdhIkuYR', 'MIEPrTAjtGXItQlFubc', 'ravuut@epompe.com', 'kM9Kra  &lt;a href=&quot;http://bsjdtpuuckvg.com/&quot;&gt;bsjdtpuuckvg&lt;/a&gt;, [url=http://issqkysvkkjq.com/]issqkysvkkjq[/url], [link=http://toeflkvayira.com/]toeflkvayira[/link], http://lexortsgljdh.com/', '2014-03-26 06:59:14');
INSERT INTO `atendimento` VALUES(89, 'NDkXRLEJwQrlVoZcH', 'chFacDhzvVHaQEfA', 'amrcdg@zpzhey.com', 'fK4ZUO  &lt;a href=&quot;http://ovdirwfjrvck.com/&quot;&gt;ovdirwfjrvck&lt;/a&gt;, [url=http://ykbcpvinhjnl.com/]ykbcpvinhjnl[/url], [link=http://ipvwuqvdilbh.com/]ipvwuqvdilbh[/link], http://vtulcsqtdvlm.com/', '2014-03-25 13:28:13');
INSERT INTO `atendimento` VALUES(88, 'uYSQHzYgsy', 'wBVpeyEDIFIBPpVM', 'yrngzr@rjfnab.com', '3stLtj  &lt;a href=&quot;http://zgcxdihcbtxg.com/&quot;&gt;zgcxdihcbtxg&lt;/a&gt;, [url=http://bjjdwjfyadjw.com/]bjjdwjfyadjw[/url], [link=http://mwxcpbhrqmtf.com/]mwxcpbhrqmtf[/link], http://qjaeofxjwefg.com/', '2014-03-24 20:00:47');
INSERT INTO `atendimento` VALUES(87, 'olJasuLmg', 'fxTRdSWeXxvxFIIJZJ', 'tupkng@vbnrso.com', 'ltPkDH  &lt;a href=&quot;http://tfutlaczhrvl.com/&quot;&gt;tfutlaczhrvl&lt;/a&gt;, [url=http://tyqlmatvfied.com/]tyqlmatvfied[/url], [link=http://nkhdrwntidfg.com/]nkhdrwntidfg[/link], http://qyvevmbcduvr.com/', '2014-03-22 18:57:09');
INSERT INTO `atendimento` VALUES(86, 'SzuVhSAbmBkkTvoNhBq', 'RyrxTMtwexhQ', 'aydxuk@lxkgts.com', 'I1j8Cq  &lt;a href=&quot;http://mkuhivukrjeq.com/&quot;&gt;mkuhivukrjeq&lt;/a&gt;, [url=http://vabkmwyjwwpo.com/]vabkmwyjwwpo[/url], [link=http://ulttdisrxffw.com/]ulttdisrxffw[/link], http://cwgfgnzrfghh.com/', '2014-03-21 16:40:47');
INSERT INTO `atendimento` VALUES(85, 'Otavio Mafessoni', '', 'otavio@xpert.com.br', 'Olá, poderia me passar o que você tem de bebida a pronta entrega?\r\n\r\nObrigado!', '2014-03-14 10:02:38');
INSERT INTO `atendimento` VALUES(84, 'eliezer mattos', '8805 7849', '', 'me ligue quero ver os aparelhos de celular.', '2014-03-01 08:30:12');
INSERT INTO `atendimento` VALUES(80, 'Gyandersson Amaral', '4684015593', 'gyandersson@hotmail.com', 'Proposta de Plano de Marketing\r\nEssa semana estaremos anunciando a Expomang, em Mangueirinha. Esperamos ter o triplo de visitas no site, da cidade (www.mangueirinhaonline.com) e chegar cerca de 18 mil visualizações de páginas por dia. E estamos oferecendo um de nossos 5 banners da página inicial e v', '2013-11-18 21:31:41');
INSERT INTO `atendimento` VALUES(81, 'vilson pedralli', '46 99164865', 'vilsonpedralli@hotmail.com', 'Ola,você tem carregador para Iphone 4 e qual o valor? ', '2013-11-24 09:44:03');
INSERT INTO `atendimento` VALUES(82, 'vilson pedralli', '99164865', 'vilsonpedralli@hotmail.com', 'Bom dia,você tem carregador para Iphone 5 ? ', '2013-11-25 08:12:28');
INSERT INTO `atendimento` VALUES(83, 'gULzQUIFk', 'XICchYYdYsdObZb', 'zfulik@zneasj.com', 'OLFLaT  &lt;a href=&quot;http://qaashqwobekq.com/&quot;&gt;qaashqwobekq&lt;/a&gt;, [url=http://qgvwmfqtboae.com/]qgvwmfqtboae[/url], [link=http://ywunzdrtyhqt.com/]ywunzdrtyhqt[/link], http://jozmnighaxir.com/', '2014-02-21 15:52:58');
INSERT INTO `atendimento` VALUES(1, 'teste', '99', 'teste@teste', 'teste', '2013-11-01 20:17:33');
INSERT INTO `atendimento` VALUES(79, 'Thaís', '4232727919', 'thata2905@hotmail.com', 'Boa Tarde tenho interesse em comprar a amarula mas moro em telemaco borba , gostaria de saber como funciona o frete?\r\nMuito Obrigado', '2013-11-13 14:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `codigoCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCategoria` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigoCategoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` VALUES(0, 'Todas');
INSERT INTO `categorias` VALUES(1, 'Auto Som');
INSERT INTO `categorias` VALUES(2, 'Bebidas');
INSERT INTO `categorias` VALUES(3, 'Celulares');
INSERT INTO `categorias` VALUES(4, 'Diversos');
INSERT INTO `categorias` VALUES(5, 'Eletrônicos');
INSERT INTO `categorias` VALUES(6, 'Informática');
INSERT INTO `categorias` VALUES(7, 'Perfumes');
INSERT INTO `categorias` VALUES(8, 'Camisetas de Times');
INSERT INTO `categorias` VALUES(9, 'Acessórios para Moto');
INSERT INTO `categorias` VALUES(10, 'Destaques');
INSERT INTO `categorias` VALUES(11, 'Promoções');

-- --------------------------------------------------------

--
-- Table structure for table `categoriasPortal`
--

CREATE TABLE `categoriasPortal` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `categoriasPortal`
--

INSERT INTO `categoriasPortal` VALUES(1, 'Acessórios Automotivos', 'acessorio.png', 'acessorios');
INSERT INTO `categoriasPortal` VALUES(2, 'Agricultura', 'agricultura.png', 'agricultura');
INSERT INTO `categoriasPortal` VALUES(3, 'Animais', 'animais.png', 'animais');
INSERT INTO `categoriasPortal` VALUES(4, 'Ciclismo', 'ciclismo.png', 'ciclismo');
INSERT INTO `categoriasPortal` VALUES(5, 'Construções', 'construcoes.png', 'construcoes');
INSERT INTO `categoriasPortal` VALUES(6, 'Diversos', 'diversos.png', 'diversos');
INSERT INTO `categoriasPortal` VALUES(7, 'Doações', 'doacoes.png', 'doacoes');
INSERT INTO `categoriasPortal` VALUES(8, 'Empregos', 'empregos.png', 'empregos');
INSERT INTO `categoriasPortal` VALUES(9, 'Esporte', 'esporte.png', 'esporte');
INSERT INTO `categoriasPortal` VALUES(10, 'Eventos / Shows / Festas', 'eventos.png', 'eventos-shows-festas');
INSERT INTO `categoriasPortal` VALUES(11, 'Eletrônicos', 'eletronicos.png', 'eletronicos');
INSERT INTO `categoriasPortal` VALUES(12, 'Eletrodomésticos', 'eletrodomesticos.png', 'eletrodomesticos');
INSERT INTO `categoriasPortal` VALUES(13, 'Férias / Praia / Camping', 'ferias.png', 'ferias-praia-camping');
INSERT INTO `categoriasPortal` VALUES(14, 'Fotografias / Videos', 'fotografia.png', 'fotografias-videos');
INSERT INTO `categoriasPortal` VALUES(15, 'Igreja', 'igreja.png', 'igreja');
INSERT INTO `categoriasPortal` VALUES(16, 'Imóveis Aluguel', 'apartamento.png', 'imoveis-aluguel');
INSERT INTO `categoriasPortal` VALUES(17, 'Imóveis Venda', 'casa.png', 'imoveis-venda');
INSERT INTO `categoriasPortal` VALUES(18, 'Informática', 'informatica.png', 'informatica');
INSERT INTO `categoriasPortal` VALUES(19, 'Jogos', 'jogos.png', 'jogos');
INSERT INTO `categoriasPortal` VALUES(20, 'Jóias / Óculos / Relógios', 'joias.png', 'joias-oculos-relogios');
INSERT INTO `categoriasPortal` VALUES(21, 'Móveis', 'moveis.png', 'moveis');
INSERT INTO `categoriasPortal` VALUES(22, 'Mp3 / Mp4', 'mp3.png', 'mp3-mp4');
INSERT INTO `categoriasPortal` VALUES(23, 'Náutica', 'nautica.png', 'nautica');
INSERT INTO `categoriasPortal` VALUES(24, 'Oficina Mecânica', 'oficina.png', 'oficina-mecanica');
INSERT INTO `categoriasPortal` VALUES(25, 'Restaurantes / Lanchonetes', 'restaurantes.png', 'restaurantes-lanchonetes');
INSERT INTO `categoriasPortal` VALUES(27, 'Telefonia', 'telefonia.png', 'telefonia');
INSERT INTO `categoriasPortal` VALUES(28, 'Transporte / Viagens / Caronas', 'transporte.png', 'trasnporte-viagens-caronas');
INSERT INTO `categoriasPortal` VALUES(29, 'Trocas', 'trocas.png', 'trocas');
INSERT INTO `categoriasPortal` VALUES(30, 'Vestuario / Cama / Mesa / Banho', 'vestuario.png', 'vestuario-cama-mesa-banho');

-- --------------------------------------------------------

--
-- Table structure for table `categoriasProduto`
--

CREATE TABLE `categoriasProduto` (
  `codigoProduto_FK` int(11) NOT NULL,
  `codigoCategoria_FK` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoriasProduto`
--

INSERT INTO `categoriasProduto` VALUES(144, 10);
INSERT INTO `categoriasProduto` VALUES(140, 3);
INSERT INTO `categoriasProduto` VALUES(130, 10);
INSERT INTO `categoriasProduto` VALUES(71, 8);
INSERT INTO `categoriasProduto` VALUES(0, 1);
INSERT INTO `categoriasProduto` VALUES(132, 5);
INSERT INTO `categoriasProduto` VALUES(139, 3);
INSERT INTO `categoriasProduto` VALUES(146, 0);
INSERT INTO `categoriasProduto` VALUES(146, 4);
INSERT INTO `categoriasProduto` VALUES(146, 1);
INSERT INTO `categoriasProduto` VALUES(123, 3);
INSERT INTO `categoriasProduto` VALUES(122, 7);
INSERT INTO `categoriasProduto` VALUES(144, 5);
INSERT INTO `categoriasProduto` VALUES(138, 3);
INSERT INTO `categoriasProduto` VALUES(137, 3);
INSERT INTO `categoriasProduto` VALUES(144, 4);
INSERT INTO `categoriasProduto` VALUES(143, 5);
INSERT INTO `categoriasProduto` VALUES(143, 4);
INSERT INTO `categoriasProduto` VALUES(143, 0);
INSERT INTO `categoriasProduto` VALUES(145, 5);
INSERT INTO `categoriasProduto` VALUES(139, 0);
INSERT INTO `categoriasProduto` VALUES(129, 5);
INSERT INTO `categoriasProduto` VALUES(132, 0);
INSERT INTO `categoriasProduto` VALUES(131, 5);
INSERT INTO `categoriasProduto` VALUES(127, 3);
INSERT INTO `categoriasProduto` VALUES(126, 1);
INSERT INTO `categoriasProduto` VALUES(131, 0);
INSERT INTO `categoriasProduto` VALUES(130, 5);
INSERT INTO `categoriasProduto` VALUES(136, 10);
INSERT INTO `categoriasProduto` VALUES(129, 0);
INSERT INTO `categoriasProduto` VALUES(128, 3);
INSERT INTO `categoriasProduto` VALUES(128, 0);
INSERT INTO `categoriasProduto` VALUES(122, 0);
INSERT INTO `categoriasProduto` VALUES(142, 5);
INSERT INTO `categoriasProduto` VALUES(142, 4);
INSERT INTO `categoriasProduto` VALUES(138, 0);
INSERT INTO `categoriasProduto` VALUES(133, 2);
INSERT INTO `categoriasProduto` VALUES(133, 0);
INSERT INTO `categoriasProduto` VALUES(127, 0);
INSERT INTO `categoriasProduto` VALUES(136, 3);
INSERT INTO `categoriasProduto` VALUES(137, 0);
INSERT INTO `categoriasProduto` VALUES(136, 0);
INSERT INTO `categoriasProduto` VALUES(145, 4);
INSERT INTO `categoriasProduto` VALUES(145, 0);
INSERT INTO `categoriasProduto` VALUES(144, 0);
INSERT INTO `categoriasProduto` VALUES(121, 7);
INSERT INTO `categoriasProduto` VALUES(121, 0);
INSERT INTO `categoriasProduto` VALUES(135, 0);
INSERT INTO `categoriasProduto` VALUES(134, 3);
INSERT INTO `categoriasProduto` VALUES(134, 0);
INSERT INTO `categoriasProduto` VALUES(135, 3);
INSERT INTO `categoriasProduto` VALUES(112, 3);
INSERT INTO `categoriasProduto` VALUES(112, 0);
INSERT INTO `categoriasProduto` VALUES(141, 4);
INSERT INTO `categoriasProduto` VALUES(141, 0);
INSERT INTO `categoriasProduto` VALUES(140, 0);
INSERT INTO `categoriasProduto` VALUES(114, 0);
INSERT INTO `categoriasProduto` VALUES(114, 2);
INSERT INTO `categoriasProduto` VALUES(141, 5);
INSERT INTO `categoriasProduto` VALUES(115, 3);
INSERT INTO `categoriasProduto` VALUES(115, 0);
INSERT INTO `categoriasProduto` VALUES(142, 0);
INSERT INTO `categoriasProduto` VALUES(130, 0);
INSERT INTO `categoriasProduto` VALUES(123, 0);
INSERT INTO `categoriasProduto` VALUES(117, 0);
INSERT INTO `categoriasProduto` VALUES(117, 4);
INSERT INTO `categoriasProduto` VALUES(117, 5);
INSERT INTO `categoriasProduto` VALUES(119, 6);
INSERT INTO `categoriasProduto` VALUES(119, 3);
INSERT INTO `categoriasProduto` VALUES(119, 0);
INSERT INTO `categoriasProduto` VALUES(120, 0);
INSERT INTO `categoriasProduto` VALUES(120, 3);
INSERT INTO `categoriasProduto` VALUES(120, 6);

-- --------------------------------------------------------

--
-- Table structure for table `contadores`
--

CREATE TABLE `contadores` (
  `nome` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `site` int(11) NOT NULL,
  `pto` int(11) NOT NULL,
  `cco` int(11) NOT NULL,
  `face` int(11) NOT NULL,
  `slides` int(11) NOT NULL,
  `destaques` int(11) NOT NULL,
  `promocoes` int(11) NOT NULL,
  `categorias` int(11) NOT NULL,
  `logo` int(11) NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contadores`
--

INSERT INTO `contadores` VALUES('cont', 5055, 1791, 270, 8, 979, 2289, 652, 7998, 1033);

-- --------------------------------------------------------

--
-- Table structure for table `duvidas`
--

CREATE TABLE `duvidas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `produto` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Dumping data for table `duvidas`
--

INSERT INTO `duvidas` VALUES(1, 'teste', '99', 'teste@teste', 'teste', '1', '2013-11-01 20:19:39');
INSERT INTO `duvidas` VALUES(52, 'Sabrina', '', 'sabrinaakuss@hotmail.com', 'Bom dia, gostaria de saber se esse celula é o galaxy SIII MINI ou o galaxy SIII mesmo..\r\ngrata..\r\n', 'Samsung Galaxy SIII - réplica', '2014-01-29 08:32:15');
INSERT INTO `duvidas` VALUES(53, '39R8LwbacDP', 'wQuEZ3yYc', '6fuwvgyjf@yahoo.com', 'Novo notebook o medrcao: Acer Aspire V5 Outra boa novidade chegou no medrcao de noteboo         Esta mate9ria foi postada em 30 de novembro de 2012 at 8:00 e foi colocada na categoria Outros. Vocea pode acompanhar comente1rios desta mate9ria atrave9s do RSS 2.0 feed.', '', '2014-04-10 00:47:40');
INSERT INTO `duvidas` VALUES(54, '', '', '', '', '', '2014-04-10 00:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `encomendas`
--

CREATE TABLE `encomendas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `produto` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `encomendas`
--

INSERT INTO `encomendas` VALUES(1, 'teste', '99', 'teste@teste', 'teste', 'teste', 'teste', 1.00, '2013-11-01 20:20:39');
INSERT INTO `encomendas` VALUES(46, 'vanessa', '46 91077367', 'vanessa.4393@gmail.com', 'planalto pardais 126', 'pato branco', 'Adaptador USB/SD', 15.00, '2013-11-11 16:40:26');
INSERT INTO `encomendas` VALUES(47, 'Geferon monteiro''', '99186477', 'gefermonteiro@hotmail.com', 'rua das avestruzes ', 'pato branco', 'Whisky Jack Daniel´s', 75.00, '2013-11-23 15:55:03');
INSERT INTO `encomendas` VALUES(48, 'Luiz Fernando', '9908-1566', 'luizvalmorbida@hotmail.com', 'Rua Sao Francisco de Assis n 230', 'Pato Branco - PR', 'Pendrive Sandisk 16gb', 35.00, '2013-12-10 20:26:03');
INSERT INTO `encomendas` VALUES(49, 'alex cavalheiro de jesus', '046 91226289', 'alexdejesus29@hotmail.com', '', '', 'Controle Loga Distancia BOOSTER ', 140.00, '2014-02-23 13:38:26');
INSERT INTO `encomendas` VALUES(45, 'Geferson ', '99186477', 'gefermonteiro@hotmail.com', 'em frente das  lojas manica', 'pato branco ', 'Whisky Jack Daniel´s', 75.00, '2013-11-06 12:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `codigoProduto` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `new`
--

INSERT INTO `new` VALUES(1, 'Samsung Galaxy SIII - Rép', 41);
INSERT INTO `new` VALUES(2, 'Câmera Digital Sony Cyber', 45);
INSERT INTO `new` VALUES(3, 'Iphone 4 - Replica', 39);
INSERT INTO `new` VALUES(4, 'Pendrive 4, 8 e 16 GB', 44);

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `codigoProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProduto` varchar(80) NOT NULL,
  `descricaoProduto` varchar(2000) NOT NULL,
  `precoProduto` decimal(10,2) NOT NULL,
  `precoDe` decimal(10,2) DEFAULT NULL,
  `visitas` int(11) NOT NULL,
  `dataProduto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codigoProduto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=147 ;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` VALUES(135, 'Celular Galaxy Y duos - Original', 'General 2G Rede GSM 850/900/1800/1900 - SIM 1 e SIM 2 \r\nRede 3G HSDPA 900/2100 - GT-S6102 \r\nDimensões do corpo 109,8 x 60 x 12 mm \r\nPeso 109 g \r\nDisplay Type TFT touchscreen capacitivo, 256K cores \r\nTamanho 240 x 320 pixels, 3,14 polegadas (~ 127 densidade de pixels ppi) \r\n- Samsung TouchWiz \r\nSom Alerta tipos Vibração; MP3 ringtones \r\n-voz Sim \r\n3.5mm Sim \r\nMemory Card slot microSD até 32GB, (Cartão Não Incluso)\r\ninterna de 512 MB &#8203;&#8203;ROM, 384 MB RAM \r\nDados GPRS Sim \r\nEDGE Sim \r\nvelocidade HSDPA, 7,2 Mbps \r\nWLAN Wi-Fi 802.11 b / g / n, hotspot Wi-Fi \r\nBluetooth v3.0 Sim, com A2DP \r\nUSB Sim, microUSB v2.0 \r\nCâmera Primário 3,15 MP, 2048x1536 pixels \r\nCaracterísticas Geo-tagging \r\nVídeo Sim, QVGA @ 24fps \r\nSecundário Não \r\nCaracterísticas OS Android OS, v2.3 (Gingerbread) \r\nCPU 832 MHz \r\nAcelerómetro Sensors, proximidade, bússola \r\nMensagens SMS (ver roscados), MMS, Email, Push Mail, IM, RSS \r\nBrowser HTML, Adobe Flash \r\nRádio FM com RDS \r\nGPS Sim, com A-GPS apoio \r\nJava Sim, através do Java MIDP emulador \r\nCores Preto \r\n- Dual SIM (stand-by) \r\n- SNS integração \r\n- MP4/WMV/H.264 jogador \r\n- MP3/WAV/eAAC + jogador \r\n- Organizer \r\n- Imagem / vídeo editor \r\n- visualizador de documentos \r\n- Google Search, Maps, Gmail, \r\nYouTube, Calendar, Google Talk, integração Picasa \r\n- Memorando de voz / discagem \r\n- Entrada de texto preditiva \r\nBateria Standard, Li-Ion 1300 mAh \r\nStand-by Up a 360 h \r\nTalk tempo Até 9 h \r\nMisc SAR EUA 0,47 W / kg (cabeça) 0,52 W / kg (corpo) \r\nSAR UE 0,69 W / kg (cabeça)', 450.00, 399.00, 17, '2014-04-08 23:18:43');
INSERT INTO `produtos` VALUES(142, 'Gps Bak tela de 7 polegadas', 'GPS com mapas Brasil e Argentina Televisão Digital /\r\nBluetoothToque na tela de 7” TFT LCDProcessador SAMSUNG (400Mhz)Alto falante externo, reproduz MP3, WMAEntrada áudio e vídeo para uso com câmeras Entrada SD memória de cartão TFMemória interna de 4GB Anti-radarJogos', 350.00, NULL, 16, '2014-03-13 23:22:05');
INSERT INTO `produtos` VALUES(143, 'Gps Midi tela de 4.3', 'Memoria Embutido 2GB\r\nSlot para Fones 3.5mm\r\nRechargeable Lithium-ion Battery\r\nAcessorios Suporte, Caneta, Adaptador DC, Fone, Cabo USB\r\nTela LCD 4.3" Touch\r\nProcessador MTK 3351\r\nReprodutor de áudio MP3, WAV, WMA, etc. Com suporte para informação das pistas (letras, autor, álbum, etc)\r\nReprodutor de vídeo com suporte para AVI, MPEG, MP4, DIVX, XVID, WMV, ASF, etc\r\nVisor de imagens com suporte para JPG, GIF, BMP, PNG, apresentação por slides com música background\r\nReprodutor de Leitor de arquivos TXT\r\nIdiomas Português, Espanhol, Inglês\r\nConexão USB 2.0 sem drivers em Windows 2000, XP, Vista, 7, 8, Mac\r\nMapa 3D com Anti-Rader, Brasil e Argentina\r\nFuncion TV Digital ISDBT, Bluetooth, Acesso a Internet via BT dun (GPRS), Transmissor FM\r\nFormato Widescreen 16:9\r\nOS Windows CE 6.0\r\nEntrada USB 2.0, mirco SD, AV', 250.00, 299.00, 5, '2014-02-23 13:43:14');
INSERT INTO `produtos` VALUES(139, 'Celular LG L3 dual Chip - Original', 'GERAL 2G Rede GSM 850/900/1800/1900\r\nRede 3G HSDPA 900/2100\r\nHSDPA 850/900/1900/2100\r\nCORPO Dimensões 102,6 x 61,6 x 11,9 mm\r\nPeso 119 g\r\nEXIBIR Tipo TFT touchscreen capacitivo, 256K cores\r\nTamanho 240 x 320 pixels, 3,2 polegadas (~ 125 ppi densidade de pixels)\r\nMultitouch Sim\r\nPARECER Tipos de alerta Vibração, toques MP3\r\nAlto-falante Sim\r\n3.5mm Sim\r\nMEMÓRIA Slot para cartão microSD de até 32GB\r\nInterno 1 GB de armazenamento, 384 MB RAM\r\nDADOS GPRS Classe 12 (4 +1 / 3 +2 / 2 +3 / 1 +4 slots), 32 - 48 kbps\r\nBORDA Sim\r\nAcelerar HSDPA, 3.6 Mbps; HSUPA\r\nWLAN Wi-Fi 802.11 b / g / n, hotspot Wi-Fi, DLNA\r\nBluetooth Sim v3.0 com A2DP, EDR\r\nUSB Sim, microUSB v2.0\r\nCÂMERA Primário 3.15 MP, 2048x1536 pixels, autofoco\r\nCaracterísticas Geo-tagging\r\nVídeo Sim, VGA @ 24fps\r\nSecundário Não\r\nCARACTERÍSTICAS OS Android OS, v2.3.6 (Gingerbread)\r\nChipset Qualcomm Snapdragon MSM7225A\r\nCPU 800 MHz Cortex-A5\r\nGPU Adreno 200\r\nSensores Acelerômetro, compasso de proximidade,\r\nMensagens SMS (ver roscados), MMS, Email, Push Email, IM\r\nNavegador HTML5, Adobe Flash\r\nRádio Rádio FM estéreo\r\nGPS Sim, com suporte A-GPS\r\nJava Sim, através do Java MIDP emulador\r\nCores Preto, Branco\r\n  - Dual SIM \r\n- SNS integração \r\n- Google Search, Maps, Gmail \r\n- YouTube, Google Talk \r\n- MP4/H.264/H.263/WMV jogador \r\n- MP3/WAV/WMA/eAAC player + \r\n- visualizador de documentos \r\n- Organizer \r\n- Voice Memo \r\n- Predictive entrada de texto\r\nBATERIA Standard bateria, Li-Ion 1540 mAh\r\nStand-by Até 600 h (2G) / Até 600 h (3G)\r\nTempo de conversação Até 12 h 30 min (2G) / Até 10 h (3G)', 299.00, 350.00, 21, '2014-04-09 13:06:38');
INSERT INTO `produtos` VALUES(144, 'Câmera Samsung DV101 Duas telas', '16.1MEGAPIXEL\r\nZOOM: 5x\r\nDISPLAY: 2.7 "\r\nFILMA EM HD\r\n02 TELAS\r\nMEMORIA: SD\r\nBATERIA: BP-70A\r\n DV101 é uma câmera de diversão social\r\n- Ela possui um sensor de alta resolução e lente brilhante para capturar fotos de alta qualidade, mesmo quando está escuro\r\n- 1/2.3 (aprox. mm 7,76) sensor de imagem CCD\r\n- Samsung lente zoom 5x f = 4.7 ~ de 23,5 mm (equivalente a 35 milímetros filme: 26 ~ 130 mm)\r\n- Modo de imagem: 1 - modo de reprodução 5x,: 1 - 14.4x (depende do tamanho da imagem)\r\n- Visor principal: 2,7 "(6,9 cm) visor frontal: 1,5" (3,8 cm)\r\n- Foco automático TTL', 299.00, 350.00, 36, '2014-04-10 04:36:55');
INSERT INTO `produtos` VALUES(141, 'Gps Bak tela de 4.3', 'Toque na tela de 4.3” TFT LCD4GB / TV DIGITAL \r\nSistema Microsoft Windows CE. 5.0 – CORETransmissor de FM e sistema de viva-voz via BLUETOOTHMemória interna de 2GBEntrada para cartão TF / Alto falante externoMapa Brasil e Argentina / Anti-radar / Jogos', 230.00, 299.00, 17, '2014-03-15 05:53:20');
INSERT INTO `produtos` VALUES(127, 'Celular Mox 45 Dias bateria ', 'Caracteristicas\r\n- Celular PowerBank\r\n- Bateria de lítio de 2100 mAh, dura até 45 dias em espera\r\n- Suporta Cartão Micro SD até 16GB\r\n- Tela 2.4" QVGA de alta definição\r\n- Dimensão: 117.5x51x13.3 mm\r\n- Plataforma: MTK6250D\r\n- 4 bandas: 850/900/1800/1900 MHz\r\n- Suporta dois chip de operadoras diferentes\r\n- Contém câmera de alta definição com 9.0 mega pixels\r\n- MP3/MP4/Reprodutor de Vídeo/Gravador de Vídeo\r\n- Rádio FM / Bluetooth / GPRS\r\n- Suporta Alarme/ Games/ Alto Falante/ Lanterna\r\n- Suporta multi linguagens', 150.00, 190.00, 20, '2014-03-10 20:38:12');
INSERT INTO `produtos` VALUES(71, 'Camiseta Corinthias', 'Camiseta Corinthias\r\n\r\nconsulte se esta disponivel\r\nou sob encomenda ', 0.00, NULL, 839, '2013-12-11 16:11:58');
INSERT INTO `produtos` VALUES(131, 'Toca Cd Sony CDX-GT625UI Cd/USB/FM', 'Rádio com leitor de CD/MP3/AAC, com App Remote, entrada USB frontal, função de controlo iPod, ZAPPIN™, Quick-BrowZer, Advanced Sound Engine e Dynamic Color Illuminator.\r\n\r\nApp Remote para iPhone (controlo através de cabo USB)\r\nZAPPIN™, Quick-BrowZer, Digital Clarity Tuner, Advanced Sound Engine (equalizador de 7 bandas, posição de audição), Dynamic Color Illuminator\r\nEntrada USB frontal, função de controlo iPod\r\nEntrada auxiliar frontal\r\n52W x 4\r\nSaída pré-amplificada: Frontal + Traseira/Subwoofer comutável', 230.00, 289.00, 15, '2014-01-22 07:34:33');
INSERT INTO `produtos` VALUES(129, 'Xbox 360 4gb Puro  c/ kitnect', 'Xbox 360 4gb\r\npuro\r\ncom kitnect\r\n1 controle\r\n1 jogo\r\noriginal', 999.00, NULL, 14, '2014-02-14 16:32:38');
INSERT INTO `produtos` VALUES(136, 'Celular Galaxy S4 - Réplica Perfeita', 'ANDROID ORIGINAL 4.2.2 \r\nAS LOGOTIPOS NÃO SÃO COLADAS, UMA É NO PRÓPRIO VIDRO E A OUTRA INJETADO NA TAMPA TRASEIRA.\r\nFOTOS REAIS DO PRÓPRIO APARELHO\r\nCOMPLETO COM CAIXA ORIGINAL, CARREGADOR E BATERIA ORIGINAL SAMSUNG\r\nMAIS DE 22.000 PONTOS NO ANTUTU\r\nPROCESSADOR 1.6 GHZ \r\nTELA LCD 5"\r\nCÂMERA FRONTAL 2.0 MP\r\nCÂMERA TRASEIRA \r\nUM SIM (MICRO SIM) COMO O ORIGINAL\r\nWI-FI \r\n3G', 600.00, NULL, 93, '2014-04-10 04:37:11');
INSERT INTO `produtos` VALUES(137, 'Celular Motorola ex223 - Original', 'O Motorola EX223 tem display de 2,4 polegadas com \r\nresolução de 240 x 320 pixels, câmera de 3 \r\nmegapixels com zoom digital e gravação de vídeo, \r\nBluetooth, memória expansível via microSD, e entrada \r\nde áudio 3,5 mm.', 199.00, 260.00, 17, '2014-04-07 15:05:33');
INSERT INTO `produtos` VALUES(138, 'Celular Motorola ex117 3 chips - Original', '• Desbloqueado• Tri-chip (comporta até 3 chips para\r\n uso simultâneo)• Teclado QWERTY• Aplicativo Facebook já instalado (com tecla dedicada)• EDGE• \r\nGPRS• WAP• Bluetooth• Câmera 2MP com zomm digital de 4x (filma/ fotografa)• MP3 Player• Rádio FM• \r\nCompatibilidade de cartões de memória: Micro SD de \r\naté 32 GB• Recursos de chamada: Recebidas, Perdidas \r\ne Realizadas• Viva-voz• Alerta vibratório• Jogos: \r\nJava• Agenda: capacidade para até 1000 contatos• \r\nIdiomas do menu: Português, Inglês e Espanhol• \r\nBateria: 750mAh• Calendário• Calculadora• Agenda de \r\ncompromissos• Conversor de moeda• Bloco de notas• \r\nHorário Mundial• Despertador/ Alarme• Dimensões aproximadas: 10,2x5,9x1,3cm', 250.00, 299.00, 5, '2014-02-20 03:11:27');
INSERT INTO `produtos` VALUES(130, 'Toca Cd Pioneer deh1550 - usb/cd/fm', 'Caracteristicas\r\n- Leitor de CD\r\n- Display LCD (12 caracteres)\r\n- LED Backlight\r\n- Entrada AUX (Frontal)\r\n- Iluminado porta USB (Frente: Gerenciamento da Capacidade de corrente 1 A)\r\n- MP3/WMA/WAV Reprodução\r\n- Restaurador Advanced Sound\r\n- MOSFET 50 W x 4\r\n- Supertuner ® IIID FM / AM\r\n- Tuner ondas curtas\r\n- RDS\r\n- RCA preout × 1 (2 V)\r\n- 5 Equalizador Band Graphic\r\n- Anti Poeira-Design\r\n- Entrada para controle remoto com fio\r\n- modo Fora de tela\r\n- SecurityMR frontal destacável\r\n- Controle de volume rotativo\r\n- Tipo cartão de controle remoto', 230.00, 289.00, 51, '2014-04-10 04:37:08');
INSERT INTO `produtos` VALUES(126, 'potgnnaf', '1', 1.00, 94102.00, 843, '2014-04-06 10:55:32');
INSERT INTO `produtos` VALUES(140, 'Celular Mox M-45 2 chips - Super Bateria', 'Celular PowerBank/ Carregador de bateria\r\nFonte de Energia:\r\nBateria de lítio de 2100 mAh, dura até 45 dias em espera\r\nCartão de Memória:\r\nSuporta Cartão Micro SD até 16GB\r\nTela:\r\n2.4" QVGA de alta definição\r\nDimensão:\r\n117.5x51x13.3 mm\r\nCPU:\r\nMTK6250D\r\nBandas de Frequência:\r\n850/ 900/ 1800/ 1900 MHZ\r\nChip:\r\nSuporta dois chip de operadoras diferentes\r\nCâmera:\r\nContém câmera de alta definição com 9.0 mega pixels\r\nMP3/ MP4/ Reprodutor de Vídeo/ Gravador de Vídeo\r\nSuporta GPRS/ Rádio FM/ Bluetooth\r\nSuporta Alarme/ Jogos/ Alto Falante/ Lanterna\r\nIdiomas:\r\nSuporta multi linguagens\r\nCores:\r\nPreto, Rosa, Azul, Prata, Branco', 150.00, 199.00, 10, '2014-03-04 18:09:06');
INSERT INTO `produtos` VALUES(122, 'Perfume Ferrari 125ml', 'Perfume Ferrari 125ml\r\n100% original', 125.00, NULL, 852, '2014-04-06 20:06:03');
INSERT INTO `produtos` VALUES(123, 'Celular Galaxy Note II - sistema Android', 'Celular Galaxy Note II\r\nSistema Android \r\ndual chip\r\ntela capacitiva\r\ntela de 5.0\r\n2 cameras \r\nwifi', 399.00, 499.00, 1035, '2014-04-04 05:14:13');
INSERT INTO `produtos` VALUES(134, 'Celular Samsung S3572 2 chips - Original', 'EDGE/GPRS Sim \r\nRede Quad Band (850 / 900 / 1800 / 1900 MHz) \r\nWi-Fi Sim \r\nPerfis de bluetooth Sim \r\nSistema Operacional\r\nProprietário Padrão\r\nTela\r\nTecnologia TFT \r\nQuantidade de Cores 262k \r\nTamanho 2.4" \r\nResolução 320 x 240 \r\nMemória\r\n40 MB\r\nCâmera\r\nResolução da câmera 2.0 \r\nFlash Não \r\nFoco automático Não \r\nEspecificações físicas\r\nDimensão (AxLxP) 111.9 x 60.4 x 11.5 mm \r\nPeso 94 g \r\nConectores\r\nUSB v2.0 Sim \r\n**Bateria\r\nCapacidade 1000 mAh \r\nTempo de conversa 2G: até 11 h', 260.00, 299.00, 12, '2014-02-12 01:40:11');
INSERT INTO `produtos` VALUES(121, 'Perfume 212 Sexy 100 ml', 'Perfume 212 Sexy 100 ml\r\nmasculino ou feminino\r\n\r\nsob encomenda', 220.00, NULL, 934, '2014-04-04 05:14:11');
INSERT INTO `produtos` VALUES(128, 'Celular Mox m-44 4Chips', '-GPRS/ Rádio FM/ Bluetooth\r\nCartão de Memória:\r\n-Suporta Cartão Micro SD de até 4GB\r\n-Tela:\r\n1.8" QQVGA de alta definição\r\n-Dimensão:\r\n105.5x38.5x11.4mm\r\n-CPU:\r\nMTK6250D\r\n-Bandas de Frequência:\r\n850 / 900/ 1800/ 1900 MHz\r\n-Chip:\r\nSuporta quatro chip de operadoras diferentes\r\n-Câmera:\r\nContém câmera de alta definição com 2.0 mega pixels\r\n-MP3/ MP4/ Reprodutor de Vídeo/ Gravador de Vídeo\r\nSuporta Alarme/ Jogos/ Alto Falante/ E-Book\r\n-Fonte de Energia:\r\n-Bateria: BL-4C, 800mAh\r\n-Idiomas:\r\nSuporta multi linguagens\r\n-Cores:\r\nPreto, Vermelho, Rosa, Azul, Prata', 135.00, NULL, 11, '2014-01-22 20:48:52');
INSERT INTO `produtos` VALUES(112, 'Celular Blue 2 chips - Bateria 30 dias', 'CELULAR BLU TANK T-190 900/1800 BATERIA PARA 30 DIAS \r\nCORPO Dimensões 114 x 48 x 15 mm\r\nPeso 92 g\r\n  - Lanterna\r\nEXIBIR Tipo TFT, cores 56K\r\nTamanho 128 x 160 pixels, 1,8 polegadas (~ 114 ppi densidade de pixels)\r\nPARECER Tipos de alerta Vibração, toques MP3\r\nAlto-falante Sim\r\n3.5mm Não\r\nMEMÓRIA Slot para cartão microSD até 8 GB\r\nAgenda 200 entradas\r\nRegistos de chamadas Sim\r\nInterno 16 MB ROM, 32 MB de RAM\r\nDADOS GPRS Não (Planejado versão GPRS para Q4 2012)\r\nBORDA Não\r\nWLAN Não\r\nBluetooth Sim, v2.1\r\nUSB Sim, miniUSB\r\nCÂMERA Primário VGA, 640x480 pixels\r\nVídeo Sim\r\nSecundário Não\r\nCARACTERÍSTICAS Mensagens SMS\r\nNavegador Não\r\nRádio Rádio FM estéreo\r\nJogos Sim\r\nGPS Não\r\nJava Não\r\nCores Electric Blue, Red, Yellow, Branco, Todo branco, rosa\r\n  - Dual SIM (T190 único modelo) \r\n- MP3/AAC/WMA/WAV jogador \r\n- MP4/H.264/WMV jogador \r\n- Built-in FM Antena \r\n- Entrada de texto preditiva\r\nBATERIA   Standard bateria, Li-Ion de 1800 mAh\r\nStand-by Até 1720 h', 150.00, NULL, 1188, '2014-04-09 20:33:44');
INSERT INTO `produtos` VALUES(132, 'Radio Booster - USB/FM c/controle', 'Radio Booster\r\nUSB FM \r\nCom controle\r\n', 99.00, NULL, 17, '2014-04-01 06:50:51');
INSERT INTO `produtos` VALUES(133, 'Black Label 1 litro', 'whisky Black Label\r\n1 litro\r\nc/caixa', 99.00, NULL, 19, '2014-04-05 21:03:07');
INSERT INTO `produtos` VALUES(114, 'Ballantines litro', 'ballantines', 49.00, NULL, 874, '2014-04-04 05:14:28');
INSERT INTO `produtos` VALUES(115, 'iPhone 4s C/Android - Clone - Replica Perfeita', 'iPhone 4S com Android \r\nTela capacitiva, tamanho e peso identico ao Apple, funciona com todos os acessários apple, case, bumper, películas e tudo mais, aproveitem!!!!\r\nTela capacitiva, a mesma usada pelo apple', 399.00, 550.00, 962, '2014-04-06 20:00:29');
INSERT INTO `produtos` VALUES(117, 'Controle Playstation 2', 'Controle Playstation 2', 20.00, NULL, 851, '2014-03-16 12:46:21');
INSERT INTO `produtos` VALUES(124, '', '', 0.00, NULL, 834, '2013-07-02 00:29:04');
INSERT INTO `produtos` VALUES(119, 'Cartão de Memoria 16gb', 'Cartão de Memoria 16gb', 45.00, NULL, 855, '2014-03-22 07:13:39');
INSERT INTO `produtos` VALUES(120, 'Cartão de Memoria 4gb', 'Cartão de Memoria 4gb', 25.00, NULL, 854, '2014-03-26 06:59:28');
INSERT INTO `produtos` VALUES(145, 'Camera NIKON COOLPIX P-520 18.1MP 42X preta', 'O máximo em poder de zoom, qualidade de imagem e versatilidade. Uma surpreendente lente de cristal NIKKOR com zoom de 42x e tecnologia de Redução de Vibração fornece 1.000 mm de alcance supertelefoto para um sensor CMOS de 18.1 megapixel. Tecnologias de ponta como o GPS integrado e compatibilidade com o acessório opcional Adaptador Móvel Sem Fio WU-1a ajudam a garantir que esta câmera seja a peça central de sua produção criativa por anos.\r\n\r\n18.1 MP\r\nSensor CMOS de 18.1 MP\r\nZoom 42x\r\nLente de Cristal Zoom NIKKOR\r\n3,2"\r\nLCD VGA de ângulo variável\r\nVídeo Full HD\r\ncom Som Estéreo\r\n1x|||||||||42x ', 1200.00, 1200.00, 17, '2014-02-20 09:58:41');
INSERT INTO `produtos` VALUES(146, 'Caixa de Som ecopower ep 1291', ' CAIXA DE SOM ECOPOWER EP-1291\r\n- RECARREGÁVEL\r\n- ENTRADAS USB, SD, AUX.\r\n- CONECTOR PARA INSTRUMENTO MUSICAL ELÉTRICO E MICROFONE\r\n- RADIO FM\r\n- BATERIA INTERNA DE LONGA DURAÇÃO\r\n- SUBWOOFER DE 12"\r\n- BIVOLT', 500.00, 600.00, 28, '2014-04-06 10:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `produtosPortal`
--

CREATE TABLE `produtosPortal` (
  `codigoProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProduto` varchar(80) NOT NULL,
  `descricaoProduto` varchar(2000) NOT NULL,
  `precoProduto` decimal(10,2) NOT NULL,
  `precoDe` decimal(10,2) DEFAULT NULL,
  `quantidadeProduto` int(11) NOT NULL,
  `dataProduto` date NOT NULL,
  PRIMARY KEY (`codigoProduto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `produtosPortal`
--

INSERT INTO `produtosPortal` VALUES(1, 'Samsung Galaxy SIII - Réplica do Original', 'Quad Band: GSM850/900/1800/1900MHZ  Dupla cartões SIM dupla standby  Internet sem fio  TV analógica GRATIS Suporte Java  Memoria expansível ate 16GB  FM/MP3/MP4/Bluetooth função de suporte  Especificação:   Quad Band: GSM850/900/1800/1900MHZ  Dupla cartões SIM dupla standby  Tela: 3.5 polegadas Touch Screen de alta definição, QVGA, 320x240  2 Câmeras: 2.0 Mega pixel câmera com flash de luz,  com ótima qualidade e vídeo capability. support maior tamanho é 1280 * 960 pixels jogo do fundo MP3, equalizador  Vídeo: 3GP, MP4, tela cheia, avançar e pausar  WIFI: 802.11b / g wireless internet  TV analógica gratis Suporte Java, pode instalar aplicativos  Suporte rádio FM, pode jogar sem fone de ouvido e tocar fundo de apoio  Bluetooth A2DP  Gravador de som  Vídeo Player e gravador, leitor de áudio suportados  Suporte MSN, eBuddy, ICQ, Google Maps, Opera Mini, Office Mobile, Móbile PDF, Face book  Suporte E-mail enviando e recebendo  Memória: built-in 39M, Max exend TF cartão de ate 8GB  Conectividade GPRS & WAP, MMS Transceive  U disco apoio função de manter o armazenamento de informações  Apoio mensagens de texto SMS, MMS Picture Messaging, servidor de correio de voz  Calendário poder ligar / desligar: apoio para iniciar / fechar em horário definido  Despertador: 5 grupos, despertador da sustentação quando a máquina estiver fechado, pode definir a partir de segunda-feira a domingo Jogos: apoio Jogos Java  Mais informações: MP3/MP4/WAP/Bluetooth/SMS grupo enviando / GPRS download / MMS / Agenda / Caculator / Tarefas / Relógio / Relógio Mundial / Conversor de Moeda / Cronômetro / E-book reader ...  Idioma: Inglês, Francês, Espanhol, Polonês, Português, Italiano, Alemão, Malaio, Indonésia, Eslovaco,  Holandês, Vietnames,Turco, Grego, Tailandês  Tamanho: 11,2 x 5,7 x1,0 cm Duração Bateria Tempo de conversação: 150-180 minutos Duração Bateria Tempo de espera : 50-150 horas Peso Líquido: 151g (Aparelho com a bateria ) Modelo: MP 30 SAMSUNG I9300 ', 499.99, NULL, 2, '0000-00-00');
INSERT INTO `produtosPortal` VALUES(2, 'Notebook Emachines Tela 14" / 2.3 Ghz / 2 Gb / 256Mb video', 'Sistema operacional: Windows 7 zerado recem formatado. Processador: AMD V140 (2.3GHz, 512KB L2 Cache)  Tela: 14"  LCD Placa de Vídeo: ATI Mobility RadeON HD 4250  Memória: 2GB DDR3  HD: 250GB  Leitor de CD/DVD Leitor de cartões  Notebook com menos de um ano de uso e bem pouco usado neste tempo. Duração da bateria normal igual quando foi comprado e nota fiscal do produto.', 699.00, 1199.99, 1, '0000-00-00');
INSERT INTO `produtosPortal` VALUES(3, 'Tablet modelo iBak-705 com Sistema Operacional Android 2.2', 'Display de 7 polegadas WVGA Wide Screen Adaptador USB e REDE via Cabo Suporte a modem 3G Touch screen (multi toque - dois pontos: zoom em imagens e arquivar páginas) Resolução: 800x480 1.1GHz de processamento: 800 MHz para o sistema + 300 MHz para multimídia Memória RAM: 256MB Sistema Operacional: Android 2.2 Suporte multi-linguas Memória: 4GB Suporte para cartão de memória Micro SD Sensor de gravidade quadri-dimensional  Câmera digital integrada 2 Mega pixels  Adaptador de Energia 9V 1.5A Bateria interna de longa duração 4000mAh Dimensões: 19.85cmx12.7cmx1.68cm  Acompanha: Adaptador USB/RJ45 Carregador Bivolt Guia Rápido  Apesar de estar com a caixa aberta, a abertura foi feita apenas para fazer as fotos e foi dada a primeira carga, para teste do equipamento. O aparelho é novo, ainda está com a película protetora.', 339.99, NULL, 1, '0000-00-00');
INSERT INTO `produtosPortal` VALUES(4, 'MP3/Pendrive 4GB', 'Capacidade para muitas musica. Duração de até 7hs de musica gasta pouquissima bateria carrega via USB em 2hs carga completa  R$ 45,00  Memoria:  inclusa	4GB Formatos: compatÌveis	MP3; WMA; WMV Funções:  Audio e Pen drive Conexão: USB Inclui Fone de ouvido  Altura	12.5 cm Largura	1.7 cm Peso	31.0 g', 45.99, NULL, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `codigoProduto` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` VALUES(1, 'Perfumes Importados - 100% originais', 'Perfume 212 sexy R$ 190,00 - Perfume Fantasy R$ 130,00', 121);
INSERT INTO `slides` VALUES(2, 'Celular galaxy Note II', 'Sistema Android 4.1 - Dual Chip', 123);
INSERT INTO `slides` VALUES(3, 'iPhone 4s Android - iPhone 5 Novo', 'celulares 1 chip - réplicas perfeitas', 154);
INSERT INTO `slides` VALUES(4, 'Cd/Usb Pioneer 1550 - Câmera Sony 16mps', 'Cd/USb Pioneer 1550  R$ 240,00  -  Câmera Sony 16mps R$ 350,00', 168);

-- --------------------------------------------------------

--
-- Table structure for table `usuariosPortal`
--

CREATE TABLE `usuariosPortal` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`,`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usuariosPortal`
--

INSERT INTO `usuariosPortal` VALUES(1, 'fernandonesi@gmail.com', 'Fernando Nesi', '(49) 8859-2012', 'adm');
INSERT INTO `usuariosPortal` VALUES(2, 'fabianonesi@hotmail.com', 'Fabiano Nesi', '(46) 8412-5315', 'adm');
INSERT INTO `usuariosPortal` VALUES(3, 'fndigital@hotmail.com', 'FNDigital', '(46) 9132-4212', 'user+');
