SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gwolfgaming`
--
CREATE DATABASE IF NOT EXISTS `gwolfgaming` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gwolfgaming`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `email_marketing`
--

DROP TABLE IF EXISTS `email_marketing`;
CREATE TABLE IF NOT EXISTS `email_marketing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `email_marketing`
--

INSERT INTO `email_marketing` (`id`, `nome`, `email`) VALUES
(11, 'MacKenzie Pickett', 'qucinor@mailinator.com'),
(10, 'Emanoel Silva', 'emanoelsilva@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `form_contato`
--

DROP TABLE IF EXISTS `form_contato`;
CREATE TABLE IF NOT EXISTS `form_contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens_topico`
--

DROP TABLE IF EXISTS `mensagens_topico`;
CREATE TABLE IF NOT EXISTS `mensagens_topico` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo_msg` varchar(3000) NOT NULL,
  `autor_msg` varchar(255) NOT NULL,
  `img_autor_msg` varchar(40) NOT NULL,
  `data_msg` datetime NOT NULL,
  `topico_msg` varchar(255) NOT NULL,
  PRIMARY KEY (`id_msg`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens_topico`
--

INSERT INTO `mensagens_topico` (`id_msg`, `conteudo_msg`, `autor_msg`, `img_autor_msg`, `data_msg`, `topico_msg`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est a nihil debitis corrupti voluptatem ab laborum quae sunt accusantium illo optio autem rem enim alias expedita cum quasi aliquam voluptas architecto sint minima, cumque in quia? Blanditiis odio illo hic quam dignissimos quod necessitatibus iusto, quos aliquam magnam nisi sint non tempora sit deserunt officiis voluptas, quae omnis similique cupiditate dolorum expedita vitae temporibus. Eligendi amet facere illo vel architecto deleniti veritatis repellendus possimus veniam, perferendis ab sint beatae consectetur magnam laboriosam? Architecto modi tenetur, nihil eos esse sequi necessitatibus deleniti! Nam harum reiciendis eligendi fugiat dignissimos iure in mollitia!', 'TenZ', 'ec4dd5952c1f68e4520299bd522c96a3.jpeg', '2021-06-15 12:38:46', 'Primeiro Boss'),
(2, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur totam eligendi provident ipsam commodi maiores voluptatem sunt placeat, minus ipsum. Natus voluptate impedit eligendi molestias harum cupiditate architecto voluptatum quam veniam eius laudantium reprehenderit, culpa adipisci commodi facere officia obcaecati odio quod. Praesentium magnam rem nemo nisi, quis architecto eius asperiores aspernatur earum fugit accusamus omnis, ad, sequi officiis explicabo quisquam placeat eum ea eveniet accusantium sint quam? Sed sequi perspiciatis aliquam eum vero eveniet nesciunt consequuntur, ad placeat architecto quae expedita odio numquam possimus aut iste. Laudantium reprehenderit tenetur impedit beatae blanditiis voluptatibus. Maiores dignissimos harum laudantium possimus libero?', 'FNX', '36dbdc35d5b8cd60868902d5d2154f0b.jpg', '2021-06-15 12:39:30', 'Segundo Boss'),
(3, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quidem officiis officia nesciunt porro! Est necessitatibus vitae consectetur laboriosam dicta enim veritatis deserunt natus molestias expedita! Rerum ullam qui sapiente sed corporis repellendus eligendi autem dolore placeat! Ullam quos assumenda recusandae! Voluptatum laborum possimus quae numquam facilis officiis ex sit, corporis suscipit distinctio aliquam temporibus, reiciendis repellat consequuntur, totam dicta inventore tenetur. Obcaecati, nam exercitationem fugiat, velit quis omnis amet voluptatibus, inventore culpa saepe ad voluptates fugit tenetur dolorum sit quod. Nostrum quam a nihil suscipit, molestiae pariatur aperiam voluptates esse porro optio? Quas dolorem repellat unde, eos illo a?', 'G-Wolf Gaming', 'e65ce8c3e428ef0bb6f9f2cb8fb6cfe8.png', '2021-06-15 12:40:09', 'Terceiro Boss'),
(4, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi animi a officiis mollitia voluptatem nisi aut distinctio incidunt praesentium saepe beatae magni, deleniti sapiente non, officia quibusdam iusto repellendus, consequuntur commodi aliquid cupiditate culpa fuga vero. Repudiandae, placeat aliquid voluptas dicta ducimus eligendi iste voluptatum veniam deserunt modi in necessitatibus dolores architecto odio optio voluptatibus repellendus error? Ipsum rerum blanditiis autem illo. Odio eligendi illum numquam fugiat suscipit cupiditate quia neque ducimus a possimus in maxime, nesciunt sapiente similique eum error ut ipsa officia, vitae quo esse iste porro. Quas pariatur excepturi sunt veniam maiores commodi in nisi officiis adipisci.', 'Scream', 'e7e30c19e2fa161384329e6ce6996b0f.jpg', '2021-06-15 12:40:48', 'Caverna Secreta'),
(5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa unde dolorum maxime doloribus quaerat. Non labore provident beatae numquam ipsa voluptates quas culpa quia delectus nulla, mollitia hic nihil repudiandae quae! Voluptate, eum pariatur exercitationem ratione quaerat cupiditate, iure alias, facere ipsa deleniti incidunt nulla aut enim iste ad optio. Quas eos distinctio delectus velit nemo ex? Exercitationem nam fuga provident debitis hic eum ratione voluptatum ducimus odio officia aut earum eaque corporis non natus distinctio, iure rerum harum nulla sed cumque ut. Cum quod commodi aspernatur vitae, adipisci ipsum numquam quae quo quaerat culpa labore placeat incidunt voluptates autem?', 'Scream', 'e7e30c19e2fa161384329e6ce6996b0f.jpg', '2021-06-15 12:42:02', 'Armamento'),
(6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, laboriosam! Eveniet totam error quidem nemo officia doloremque hic, aliquid aliquam magni excepturi dolores eius, eum, ex inventore iure laudantium beatae omnis vitae veniam reprehenderit sequi cum quae pariatur porro! Quaerat laboriosam assumenda excepturi ea modi corporis deserunt nemo labore tenetur non soluta, voluptate quae at magni aperiam rem architecto itaque optio sapiente possimus quas. Tenetur velit rem reprehenderit voluptatem laborum impedit expedita culpa molestias recusandae. Quia illo repudiandae, quibusdam dolor ex quisquam perferendis accusantium ullam delectus ab, natus nihil doloribus consectetur commodi corrupti inventore. Ducimus qui adipisci nam et repellat.', 'TenZ', 'ec4dd5952c1f68e4520299bd522c96a3.jpeg', '2021-06-15 12:42:27', 'Munição Dourada'),
(7, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium vero ab sint officiis quisquam sapiente adipisci nostrum vel error. Animi, eos distinctio laboriosam numquam similique, harum adipisci quae voluptatibus corporis eligendi eum modi porro aliquam praesentium explicabo debitis deserunt, laudantium atque quidem? Ullam incidunt laudantium inventore sit aut voluptatem quod, tenetur dolorum minus nulla hic. Voluptatibus tempora iste sit eaque magni. Tempore deserunt amet distinctio at, voluptatum aliquid quae dolores. Obcaecati porro animi ea est eaque recusandae corrupti odit ex, voluptates excepturi minus sapiente veniam omnis similique laboriosam ullam voluptatibus quia asperiores dolore? Molestiae aliquam illum possimus architecto impedit dicta.', 'FNX', '36dbdc35d5b8cd60868902d5d2154f0b.jpg', '2021-06-15 12:43:03', 'Zumbi Divergente'),
(8, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eius hic laboriosam molestias quisquam omnis excepturi amet ab enim quasi assumenda iure ut similique, quaerat laborum possimus vero optio obcaecati minima quo ipsum dolore maiores expedita? Debitis tenetur ea eligendi, possimus accusantium quam, velit temporibus hic dicta ad sapiente autem nihil pariatur ipsum. Vel voluptate, ipsum quia deserunt ratione vitae labore et nam temporibus expedita reprehenderit accusamus alias autem! Eum beatae quisquam iste necessitatibus asperiores earum fugiat consectetur ipsa omnis pariatur totam ad ipsum ea laudantium magni est, ex voluptatum nam. Quidem, sunt aliquam dolore error cumque reiciendis cum illum!', 'G-Wolf Gaming', 'e65ce8c3e428ef0bb6f9f2cb8fb6cfe8.png', '2021-06-15 12:43:23', 'Gerais'),
(9, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique consequatur distinctio, sunt veritatis ipsam asperiores voluptas quam quidem, iure unde accusantium. A maxime qui fugiat facilis ad tempora dolor laudantium modi deleniti. Id cum harum totam incidunt dolor illo maxime distinctio! Voluptatem voluptatibus nihil officia quo unde a, quod expedita amet aperiam alias iusto earum? Obcaecati odio saepe omnis ratione eligendi sed illo. Sapiente, nemo eum? Atque tempora cupiditate tempore non voluptatum ad odio est exercitationem reprehenderit sint magnam nobis quos rem repellat, doloribus perferendis sapiente, similique recusandae. Nulla ducimus quia perferendis repellat nostrum accusamus minima vitae numquam dolore ex.', 'TenZ', 'ec4dd5952c1f68e4520299bd522c96a3.jpeg', '2021-06-15 12:43:46', 'Bosses'),
(10, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad possimus illum minus vitae natus autem dolorum enim laudantium ab at laboriosam tempore a nulla consequuntur, rerum labore iusto voluptates voluptatem quis distinctio libero dolores. Cupiditate quod adipisci odio iste! Ex recusandae nesciunt, porro animi excepturi perferendis provident a, rem, autem voluptatum vero amet. Autem magni ullam repellat. Labore nisi deleniti cupiditate sequi. Iusto fugit, expedita totam vero quos optio, fugiat eos, modi qui illo rerum! Quibusdam officia dicta aperiam rem nisi impedit quo debitis aut eos est temporibus, commodi ab id nostrum eaque, fugit tempora distinctio consectetur culpa accusantium. Harum.', 'TenZ', 'ec4dd5952c1f68e4520299bd522c96a3.jpeg', '2021-06-15 12:44:50', 'Segundo Boss'),
(11, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt maxime dolorem ea similique. Eius repellat ratione, temporibus ducimus impedit nesciunt molestias suscipit explicabo porro recusandae. Officiis recusandae sed voluptate. Praesentium, explicabo molestias distinctio eius inventore odit tempora non minus ipsam recusandae vitae dolorum fugit, nisi placeat! Debitis nostrum ea, dolorum quas facere facilis corporis, molestias, illo ullam similique enim placeat quasi error? Exercitationem quis ratione soluta. Tempora quasi vitae accusantium! Aspernatur magnam libero in, voluptatem eveniet, cumque cupiditate accusamus repellat aperiam voluptatum adipisci dolores deserunt fugit at, a laborum alias dicta blanditiis consequatur accusantium. Fugit commodi praesentium nesciunt eligendi laboriosam!', 'TenZ', 'ec4dd5952c1f68e4520299bd522c96a3.jpeg', '2021-06-15 12:45:16', 'Armamento'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe eum numquam quia fugiat aliquam placeat odit voluptatum maxime sit error cumque possimus sint est sequi, delectus porro quis cum repellat dignissimos consequatur, minima minus odio blanditiis. Beatae rem placeat exercitationem quae quod natus expedita iure odio veniam reprehenderit ducimus nulla sequi commodi sed consequatur a at vitae praesentium voluptatum, quisquam eos ab! Corporis accusantium saepe neque asperiores maiores incidunt, harum libero delectus quos praesentium nihil ad, mollitia voluptatum. Sint architecto inventore, ipsum accusamus nihil molestias. Similique, asperiores. Nesciunt a qui, cupiditate saepe reiciendis, sed beatae, quisquam delectus impedit laudantium obcaecati?', 'FNX', '36dbdc35d5b8cd60868902d5d2154f0b.jpg', '2021-06-15 12:45:39', 'Segundo Boss'),
(13, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus soluta inventore repellat voluptates ipsam! Id, pariatur. Qui repellat, ratione quis perspiciatis fugit id aperiam veritatis repudiandae aut quidem. Quidem aliquid maxime voluptatum rem. Odio, repellat itaque sunt minima consequuntur, ullam laborum excepturi optio nostrum consequatur commodi veniam tenetur. Delectus perferendis voluptate inventore vero corrupti esse ratione. Molestiae, aperiam? Ab dolorum recusandae veritatis! Odio rem quae suscipit ipsa a minima nihil sed hic repudiandae sunt! Quia pariatur maiores alias et libero quos necessitatibus magni minus laboriosam, accusantium rerum sunt! Commodi accusamus iste cumque explicabo, quas quibusdam molestiae iusto quia! Pariatur, explicabo.', 'Scream', 'e7e30c19e2fa161384329e6ce6996b0f.jpg', '2021-06-15 12:46:01', 'Armamento'),
(14, 'Muito difícil!', 'Emanoel Silva', 'a30843b5c709a4325103374c8856cc70.jpg', '2021-06-15 20:32:21', 'Primeiro Boss'),
(15, 'Discordo de você Emanoel! Afinal, o boss extra é muito mais difícil, seu bobalhão!', 'G-Wolf Gaming', 'e65ce8c3e428ef0bb6f9f2cb8fb6cfe8.png', '2021-06-15 20:34:02', 'Primeiro Boss'),
(16, 'Nossa, mas eu acredito que o Emanoel está certissímo, achei mais difícil que CS este boss!', 'FNX', '36dbdc35d5b8cd60868902d5d2154f0b.jpg', '2021-06-15 20:34:53', 'Primeiro Boss'),
(17, 'Nossa TenZ, falou tudo', 'Emanoel Silva', 'a30843b5c709a4325103374c8856cc70.jpg', '2021-06-15 20:46:29', 'Munição Dourada'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut nisl cursus, porta nunc et, condimentum leo. Curabitur nunc risus, volutpat nec velit ac, porttitor dapibus libero. Maecenas eu scelerisque nisi. Sed interdum dui sem, eget commodo enim placerat at. Mauris cursus purus eu est aliquam tempor. Nunc sagittis neque lectus, mollis convallis tellus bibendum in. Aliquam quis orci purus. Praesent viverra turpis turpis, at consequat arcu ullamcorper vitae.', 'Emanoel Silva', 'a30843b5c709a4325103374c8856cc70.jpg', '2021-06-15 20:47:03', 'Segundo Boss'),
(19, 'Muito flacido...', 'É flacido', '845704a0208c1af315d57b71e8ded8b3.jpg', '2021-06-15 20:52:47', 'Terceiro Boss'),
(20, 'Testando', 'G-Wolf Gaming', 'e65ce8c3e428ef0bb6f9f2cb8fb6cfe8.png', '2021-06-15 21:23:28', 'Primeiro Boss'),
(21, 'Eu sou o TenZ', 'TenZ', 'ec4dd5952c1f68e4520299bd522c96a3.jpeg', '2021-06-16 01:02:04', 'Gerais'),
(22, 'Vitae porro aperiam adipisci dolorem cupidatat quas doloribus dolorum eum consequuntur amet maiores', 'TenZ', 'ec4dd5952c1f68e4520299bd522c96a3.jpeg', '2021-06-21 07:50:22', 'Primeiro Boss'),
(23, 'Odio voluptas qui et quis vel aliqua Veritatis mollitia ipsa aut consequuntur adipisci nostrud minima qui aliquid', 'Quia ullam quibusdam', 'e92b1a4461d5504d9f3fda84c508a20a.', '2021-06-21 07:51:47', 'Caverna Secreta'),
(24, 'Dolor cumque exercitation dicta officia est nesciunt sed magna quas enim minim consequatur Incidunt vitae cupiditate quibusdam', 'Emanoel Silva', 'a30843b5c709a4325103374c8856cc70.jpg', '2021-06-21 08:59:54', 'Armamento'),
(25, 'Consectetur repellendus Iusto totam quae nisi necessitatibus sint id minima eu quasi repudiandae a eu dolore rerum libero aperiam', 'Emanoel Silva', 'a30843b5c709a4325103374c8856cc70.jpg', '2021-06-21 09:28:00', 'Bosses');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(255) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `dt_nascimento_usuario` date NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `imagem_usuario` varchar(40) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `dt_nascimento_usuario`, `senha_usuario`, `imagem_usuario`) VALUES
(1, 'TenZ', 'tenz@gmail.com', '2012-12-12', 'tenz123', 'ec4dd5952c1f68e4520299bd522c96a3.jpeg'),
(2, 'FNX', 'fnx@gmail.com', '2012-12-12', 'fnx123', '36dbdc35d5b8cd60868902d5d2154f0b.jpg'),
(3, 'G-Wolf Gaming', 'gwolfgaming@gmail.com', '2012-12-12', 'gwolfgaming123', 'e65ce8c3e428ef0bb6f9f2cb8fb6cfe8.png'),
(4, 'Scream', 'scream@gmail.com', '2012-12-12', 'scream123', 'e7e30c19e2fa161384329e6ce6996b0f.jpg'),
(5, 'Emanoel Silva', 'emanoelsilva@gmail.com', '1987-12-05', 'emanoel123', 'a30843b5c709a4325103374c8856cc70.jpg'),
(6, 'É flacido', 'flacido@gmail.com', '2012-12-22', 'flacido123', '845704a0208c1af315d57b71e8ded8b3.jpg'),
(7, 'Quia ullam quibusdam', 'zoxok@mailinator.com', '1984-11-10', 'teste', 'e92b1a4461d5504d9f3fda84c508a20a.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
