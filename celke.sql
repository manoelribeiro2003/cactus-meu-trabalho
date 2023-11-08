-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12/01/2019 às 17:35
-- Versão do servidor: 5.7.21
-- Versão do PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigos`
--

DROP TABLE IF EXISTS `artigos`;
CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `resumo_publico` text COLLATE utf8_unicode_ci NOT NULL,
  `qnt_acesso` int(11) NOT NULL DEFAULT '0',
  `robot_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `situation_id` int(11) NOT NULL,
  `artigos_tp_id` int(11) NOT NULL,
  `artigos_cat_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `descricao`, `conteudo`, `imagem`, `slug`, `keywords`, `description`, `resumo_publico`, `qnt_acesso`, `robot_id`, `user_id`, `situation_id`, `artigos_tp_id`, `artigos_cat_id`, `created`, `modified`) VALUES
(1, 'Artigo um', '<p>Quisque eu nibh nunc. Morbi arcu sapien, bibendum at aliquet ac, pretium in diam. Vestibulum congue mauris a neque faucibus blandit. Curabitur bibendum fringilla sem sit amet molestie. Nunc vel ipsum a turpis ultrices ultricies.&nbsp;</p>', '<p>Curabitur vel turpis vel nisl vestibulum ultrices vel vitae turpis. Quisque eget dolor fermentum, efficitur lorem vitae, pretium dolor. Sed consectetur odio vel rhoncus blandit. Quisque eu nibh nunc. Morbi arcu sapien, bibendum at aliquet ac, pretium in diam. Vestibulum congue mauris a neque faucibus blandit. Curabitur bibendum fringilla sem sit amet molestie. Nunc vel ipsum a turpis ultrices ultricies. Pellentesque elementum lacus id mauris sagittis, suscipit vulputate ipsum molestie. Sed eu tortor ac est varius ornare quis eu elit. Donec laoreet tincidunt ultricies. Suspendisse vitae nulla eros. Nam lobortis sodales nisi ac fringilla. Sed scelerisque lacus vitae ipsum faucibus pretium.</p><h3>Quisque eget dolor fermentum,</h3><p>Phasellus finibus ante elementum mollis volutpat. Etiam eget dapibus eros. Etiam volutpat sapien libero, ut ultricies tortor euismod at. Nulla non vehicula libero, nec interdum est. Ut at mauris a erat rhoncus maximus. Morbi quis libero a erat tristique maximus vel vel ipsum. Sed faucibus ante in nunc posuere, et mollis felis varius. Mauris metus ipsum, suscipit nec ornare vitae, malesuada suscipit purus. Vivamus tempus vitae quam vel convallis. Praesent fermentum lorem at nibh convallis, lobortis imperdiet mi dapibus. Donec elementum eget leo et tincidunt. Aenean quis suscipit mauris. Sed pharetra erat lectus. Nulla sagittis gravida metus, quis vestibulum nulla tincidunt vel. Donec lacus massa, euismod ut risus a, sollicitudin gravida neque. Nunc nec nibh in nulla luctus vulputate in in dui.</p><p>Quisque et arcu non libero iaculis gravida in et diam. Etiam odio neque, rhoncus at pulvinar fermentum, semper ac augue. Mauris laoreet fermentum turpis vel ultricies. Nunc bibendum, mauris congue imperdiet fermentum, tortor nunc faucibus turpis, at hendrerit enim arcu vitae est. Integer eget nulla nec tortor eleifend scelerisque in nec ipsum. Suspendisse at placerat enim. Maecenas fermentum tempor quam at tempor. Suspendisse justo nisl, pretium quis tempor sed, efficitur et felis. Donec blandit massa non posuere faucibus.</p><p>Phasellus cursus <strong>justo in viverra rhoncus</strong>. Nulla fringilla dui sed convallis maximus. Maecenas non volutpat sapien. Ut neque nisi, dictum in nulla vitae, malesuada aliquam magna. Fusce pharetra libero quis laoreet sagittis. Vestibulum ultricies porttitor sem, eu finibus quam varius ultricies. Maecenas suscipit sit amet leo sit amet aliquet. Mauris nec massa ut justo auctor sodales et id lectus. Nullam fermentum justo nec neque sollicitudin hendrerit. Praesent ultricies ex id lacus iaculis aliquam. Sed ac pretium justo, id vestibulum ex. Duis ultricies dapibus ullamcorper. Nunc et lectus urna. Duis ac scelerisque nibh, sit amet dignissim sem.</p>', 'empresa1.jpg', 'filmes-acao-e-ficcao-cientifica', 'artigo um', 'description artigo um', '<p>Integer eget nulla nec tortor eleifend scelerisque in nec ipsum. Suspendisse at placerat enim. Maecenas fermentum tempor quam at tempor. Suspendisse justo nisl, pretium quis tempor sed, efficitur et felis. Donec blandit massa non posuere faucibus.</p>', 2, 3, 1, 1, 1, 1, '2019-03-03 14:58:54', '2019-01-04 11:58:42'),
(2, 'Artigo dois', '<p>Aliquam accumsan nibh vel nulla rutrum, non ornare dolor lacinia. Curabitur vel turpis vel nisl vestibulum ultrices vel vitae turpis. Quisque eget dolor fermentum, efficitur lorem vitae, pretium dolor. Sed consectetur odio vel rhoncus blandit.&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit.</strong> Pellentesque cursus orci a velit rhoncus, sed pharetra ligula venenatis. Curabitur sed urna diam. Nunc sit amet tincidunt mi, a dapibus risus. Aenean lorem dui, lacinia id leo et, faucibus tristique elit. In suscipit lorem dui, sodales convallis nisi suscipit a. Aenean non facilisis ex, vitae dignissim magna. Maecenas sit amet turpis nulla. Praesent laoreet placerat sem sed fringilla. Praesent pharetra urna in tortor ornare, et malesuada dolor vestibulum.</p><p>Aliquam accumsan nibh vel <i>nulla rutrum, non ornare dolor lacinia</i>. Curabitur vel turpis vel nisl vestibulum ultrices vel vitae turpis. Quisque eget dolor fermentum, efficitur lorem vitae, pretium dolor. Sed consectetur odio vel rhoncus blandit. Quisque eu nibh nunc. Morbi arcu sapien, bibendum at aliquet ac, pretium in diam. Vestibulum congue mauris a neque faucibus blandit. Curabitur bibendum fringilla sem sit amet molestie. Nunc vel ipsum a turpis ultrices ultricies. Pellentesque elementum lacus id mauris sagittis, suscipit vulputate ipsum molestie. Sed eu tortor ac est varius ornare quis eu elit. Donec laoreet tincidunt ultricies. Suspendisse vitae nulla eros. Nam lobortis sodales nisi ac fringilla. Sed scelerisque lacus vitae ipsum faucibus pretium.</p><h3>Quisque eget dolor fermentum,</h3><p>Phasellus finibus ante elementum mollis volutpat. Etiam eget dapibus eros. Etiam volutpat sapien libero, ut ultricies tortor euismod at. Nulla non vehicula libero, nec interdum est. Ut at mauris a erat rhoncus maximus. Morbi quis libero a erat tristique maximus vel vel ipsum. Sed faucibus ante in nunc posuere, et mollis felis varius. Mauris metus ipsum, suscipit nec ornare vitae, malesuada suscipit purus. Vivamus tempus vitae quam vel convallis. Praesent fermentum lorem at nibh convallis, lobortis imperdiet mi dapibus. Donec elementum eget leo et tincidunt. Aenean quis suscipit mauris. Sed pharetra erat lectus. Nulla sagittis gravida metus, quis vestibulum nulla tincidunt vel. Donec lacus massa, euismod ut risus a, sollicitudin gravida neque. Nunc nec nibh in nulla luctus vulputate in in dui.</p><p>Quisque et arcu non libero iaculis gravida in et diam. Etiam odio neque, rhoncus at pulvinar fermentum, semper ac augue. Mauris laoreet fermentum turpis vel ultricies. Nunc bibendum, mauris congue imperdiet fermentum, tortor nunc faucibus turpis, at hendrerit enim arcu vitae est. Integer eget nulla nec tortor eleifend scelerisque in nec ipsum. Suspendisse at placerat enim. Maecenas fermentum tempor quam at tempor. Suspendisse justo nisl, pretium quis tempor sed, efficitur et felis. Donec blandit massa non posuere faucibus.</p><p>Phasellus cursus <strong>justo in viverra rhoncus</strong>. Nulla fringilla dui sed convallis maximus. Maecenas non volutpat sapien. Ut neque nisi, dictum in nulla vitae, malesuada aliquam magna. Fusce pharetra libero quis laoreet sagittis. Vestibulum ultricies porttitor sem, eu finibus quam varius ultricies. Maecenas suscipit sit amet leo sit amet aliquet. Mauris nec massa ut justo auctor sodales et id lectus. Nullam fermentum justo nec neque sollicitudin hendrerit. Praesent ultricies ex id lacus iaculis aliquam. Sed ac pretium justo, id vestibulum ex. Duis ultricies dapibus ullamcorper. Nunc et lectus urna. Duis ac scelerisque nibh, sit amet dignissim sem.</p>', 'ficcao-cientifica.jpg', 'artigo-dois', 'Artigo dois', 'Artigo dois', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus orci a velit rhoncus, sed pharetra ligula venenatis. Curabitur sed urna diam. Nunc sit amet tincidunt mi, a dapibus risus. Aenean lorem dui, lacinia id leo et, faucibus tristique elit. In suscipit lorem dui, sodales convallis nisi suscipit a. Aenean non facilisis ex, vitae dignissim magna. Maecenas sit amet turpis nulla.</p>', 46, 3, 1, 1, 1, 1, '2019-01-03 23:39:41', '2019-01-04 11:58:49'),
(3, 'Artigo três', '<p>Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum.</p>', '<p>Nam bibendum convallis ultrices. Suspendisse vel dolor vel justo pulvinar elementum quis ac est. Aenean venenatis aliquet metus non venenatis. Nulla vitae placerat tellus, nec viverra urna. Curabitur non ipsum et purus ultrices ornare sit amet vitae odio. Proin vitae ante blandit, condimentum nibh vitae, egestas diam. Duis nec libero leo. Maecenas iaculis feugiat urna ac facilisis. Nullam luctus viverra convallis. Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p><p>Etiam ac purus non velit mattis mattis eget vitae lorem. Fusce vehicula dui neque, sit amet luctus massa ullamcorper porta. Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><h3>Integer iaculis nisi vel imperdiet porttitor.&nbsp;</h3><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p><strong>Pellentesque congue id neque nec rhoncus.</strong></p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa4.jpg', 'artigo-tres', 'Artigo tres', 'Artigo tres', '<p>Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p>', 9, 1, 1, 1, 1, 1, '2019-01-06 14:58:48', '2019-01-06 14:58:48'),
(4, 'Artigo quatro', '<p>Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis.&nbsp;</p>', '<p>Nulla vitae placerat tellus, nec viverra urna. Curabitur non ipsum et purus ultrices ornare sit amet vitae odio. Proin vitae ante blandit, condimentum nibh vitae, egestas diam. Duis nec libero leo. Maecenas iaculis feugiat urna ac facilisis. Nullam luctus viverra convallis. Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p><p>Etiam ac purus non velit mattis mattis eget vitae lorem. Fusce vehicula dui neque, sit amet luctus massa ullamcorper porta. Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa3.jpg', 'artigo-quatro', 'Artigo quatro', 'Artigo quatro', '<p>Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p>', 12, 1, 1, 1, 1, 1, '2019-01-06 15:00:25', '2019-01-06 15:00:25'),
(5, 'Artigo cinco', '<p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit.</p>', '<p>Duis nec libero leo. Maecenas iaculis feugiat urna ac facilisis. Nullam luctus viverra convallis. Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p><p>Etiam ac purus non velit mattis mattis eget vitae lorem. Fusce vehicula dui neque, sit amet luctus massa ullamcorper porta. Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa2.jpg', 'artigo-cinco', 'Artigo cinco', 'Artigo cinco', '<p>Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p>', 6, 1, 1, 1, 1, 1, '2019-01-06 15:01:44', '2019-01-06 15:01:44'),
(6, 'Artigo seis', '<p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus.&nbsp;</p>', '<p>Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p><p>Etiam ac purus non velit mattis mattis eget vitae lorem. Fusce vehicula dui neque, sit amet luctus massa ullamcorper porta. Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa1.jpg', 'artigo-seis', 'Artigo seis', 'Artigo seis', '<p>Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 36, 1, 1, 1, 1, 1, '2019-01-06 15:03:05', '2019-01-06 15:03:05'),
(7, 'Artigo sete', '<p>Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor.&nbsp;</p>', '<p>Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa4.jpg', 'artigo-sete', 'Artigo sete', 'Artigo sete', '<p>Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p>', 24, 1, 1, 1, 1, 1, '2019-01-06 15:04:36', '2019-01-06 15:04:36'),
(8, 'Artigo oito', '<p>Quisque eu nibh nunc. Morbi arcu sapien, bibendum at aliquet ac, pretium in diam. Vestibulum congue mauris a neque faucibus blandit. Curabitur bibendum fringilla sem sit amet molestie. Nunc vel ipsum a turpis ultrices ultricies.&nbsp;</p>', '<p>Curabitur vel turpis vel nisl vestibulum ultrices vel vitae turpis. Quisque eget dolor fermentum, efficitur lorem vitae, pretium dolor. Sed consectetur odio vel rhoncus blandit. Quisque eu nibh nunc. Morbi arcu sapien, bibendum at aliquet ac, pretium in diam. Vestibulum congue mauris a neque faucibus blandit. Curabitur bibendum fringilla sem sit amet molestie. Nunc vel ipsum a turpis ultrices ultricies. Pellentesque elementum lacus id mauris sagittis, suscipit vulputate ipsum molestie. Sed eu tortor ac est varius ornare quis eu elit. Donec laoreet tincidunt ultricies. Suspendisse vitae nulla eros. Nam lobortis sodales nisi ac fringilla. Sed scelerisque lacus vitae ipsum faucibus pretium.</p><h3>Quisque eget dolor fermentum,</h3><p>Phasellus finibus ante elementum mollis volutpat. Etiam eget dapibus eros. Etiam volutpat sapien libero, ut ultricies tortor euismod at. Nulla non vehicula libero, nec interdum est. Ut at mauris a erat rhoncus maximus. Morbi quis libero a erat tristique maximus vel vel ipsum. Sed faucibus ante in nunc posuere, et mollis felis varius. Mauris metus ipsum, suscipit nec ornare vitae, malesuada suscipit purus. Vivamus tempus vitae quam vel convallis. Praesent fermentum lorem at nibh convallis, lobortis imperdiet mi dapibus. Donec elementum eget leo et tincidunt. Aenean quis suscipit mauris. Sed pharetra erat lectus. Nulla sagittis gravida metus, quis vestibulum nulla tincidunt vel. Donec lacus massa, euismod ut risus a, sollicitudin gravida neque. Nunc nec nibh in nulla luctus vulputate in in dui.</p><p>Quisque et arcu non libero iaculis gravida in et diam. Etiam odio neque, rhoncus at pulvinar fermentum, semper ac augue. Mauris laoreet fermentum turpis vel ultricies. Nunc bibendum, mauris congue imperdiet fermentum, tortor nunc faucibus turpis, at hendrerit enim arcu vitae est. Integer eget nulla nec tortor eleifend scelerisque in nec ipsum. Suspendisse at placerat enim. Maecenas fermentum tempor quam at tempor. Suspendisse justo nisl, pretium quis tempor sed, efficitur et felis. Donec blandit massa non posuere faucibus.</p><p>Phasellus cursus <strong>justo in viverra rhoncus</strong>. Nulla fringilla dui sed convallis maximus. Maecenas non volutpat sapien. Ut neque nisi, dictum in nulla vitae, malesuada aliquam magna. Fusce pharetra libero quis laoreet sagittis. Vestibulum ultricies porttitor sem, eu finibus quam varius ultricies. Maecenas suscipit sit amet leo sit amet aliquet. Mauris nec massa ut justo auctor sodales et id lectus. Nullam fermentum justo nec neque sollicitudin hendrerit. Praesent ultricies ex id lacus iaculis aliquam. Sed ac pretium justo, id vestibulum ex. Duis ultricies dapibus ullamcorper. Nunc et lectus urna. Duis ac scelerisque nibh, sit amet dignissim sem.</p>', 'empresa1.jpg', 'artigo-8', 'artigo um', 'description artigo um', '<p>Integer eget nulla nec tortor eleifend scelerisque in nec ipsum. Suspendisse at placerat enim. Maecenas fermentum tempor quam at tempor. Suspendisse justo nisl, pretium quis tempor sed, efficitur et felis. Donec blandit massa non posuere faucibus.</p>', 2, 3, 1, 1, 1, 1, '2019-03-03 14:58:54', '2019-01-12 16:57:07'),
(9, 'Artigo nove', '<p>Aliquam accumsan nibh vel nulla rutrum, non ornare dolor lacinia. Curabitur vel turpis vel nisl vestibulum ultrices vel vitae turpis. Quisque eget dolor fermentum, efficitur lorem vitae, pretium dolor. Sed consectetur odio vel rhoncus blandit.&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit.</strong> Pellentesque cursus orci a velit rhoncus, sed pharetra ligula venenatis. Curabitur sed urna diam. Nunc sit amet tincidunt mi, a dapibus risus. Aenean lorem dui, lacinia id leo et, faucibus tristique elit. In suscipit lorem dui, sodales convallis nisi suscipit a. Aenean non facilisis ex, vitae dignissim magna. Maecenas sit amet turpis nulla. Praesent laoreet placerat sem sed fringilla. Praesent pharetra urna in tortor ornare, et malesuada dolor vestibulum.</p><p>Aliquam accumsan nibh vel <i>nulla rutrum, non ornare dolor lacinia</i>. Curabitur vel turpis vel nisl vestibulum ultrices vel vitae turpis. Quisque eget dolor fermentum, efficitur lorem vitae, pretium dolor. Sed consectetur odio vel rhoncus blandit. Quisque eu nibh nunc. Morbi arcu sapien, bibendum at aliquet ac, pretium in diam. Vestibulum congue mauris a neque faucibus blandit. Curabitur bibendum fringilla sem sit amet molestie. Nunc vel ipsum a turpis ultrices ultricies. Pellentesque elementum lacus id mauris sagittis, suscipit vulputate ipsum molestie. Sed eu tortor ac est varius ornare quis eu elit. Donec laoreet tincidunt ultricies. Suspendisse vitae nulla eros. Nam lobortis sodales nisi ac fringilla. Sed scelerisque lacus vitae ipsum faucibus pretium.</p><h3>Quisque eget dolor fermentum,</h3><p>Phasellus finibus ante elementum mollis volutpat. Etiam eget dapibus eros. Etiam volutpat sapien libero, ut ultricies tortor euismod at. Nulla non vehicula libero, nec interdum est. Ut at mauris a erat rhoncus maximus. Morbi quis libero a erat tristique maximus vel vel ipsum. Sed faucibus ante in nunc posuere, et mollis felis varius. Mauris metus ipsum, suscipit nec ornare vitae, malesuada suscipit purus. Vivamus tempus vitae quam vel convallis. Praesent fermentum lorem at nibh convallis, lobortis imperdiet mi dapibus. Donec elementum eget leo et tincidunt. Aenean quis suscipit mauris. Sed pharetra erat lectus. Nulla sagittis gravida metus, quis vestibulum nulla tincidunt vel. Donec lacus massa, euismod ut risus a, sollicitudin gravida neque. Nunc nec nibh in nulla luctus vulputate in in dui.</p><p>Quisque et arcu non libero iaculis gravida in et diam. Etiam odio neque, rhoncus at pulvinar fermentum, semper ac augue. Mauris laoreet fermentum turpis vel ultricies. Nunc bibendum, mauris congue imperdiet fermentum, tortor nunc faucibus turpis, at hendrerit enim arcu vitae est. Integer eget nulla nec tortor eleifend scelerisque in nec ipsum. Suspendisse at placerat enim. Maecenas fermentum tempor quam at tempor. Suspendisse justo nisl, pretium quis tempor sed, efficitur et felis. Donec blandit massa non posuere faucibus.</p><p>Phasellus cursus <strong>justo in viverra rhoncus</strong>. Nulla fringilla dui sed convallis maximus. Maecenas non volutpat sapien. Ut neque nisi, dictum in nulla vitae, malesuada aliquam magna. Fusce pharetra libero quis laoreet sagittis. Vestibulum ultricies porttitor sem, eu finibus quam varius ultricies. Maecenas suscipit sit amet leo sit amet aliquet. Mauris nec massa ut justo auctor sodales et id lectus. Nullam fermentum justo nec neque sollicitudin hendrerit. Praesent ultricies ex id lacus iaculis aliquam. Sed ac pretium justo, id vestibulum ex. Duis ultricies dapibus ullamcorper. Nunc et lectus urna. Duis ac scelerisque nibh, sit amet dignissim sem.</p>', 'ficcao-cientifica.jpg', 'artigo-9', 'Artigo dois', 'Artigo dois', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus orci a velit rhoncus, sed pharetra ligula venenatis. Curabitur sed urna diam. Nunc sit amet tincidunt mi, a dapibus risus. Aenean lorem dui, lacinia id leo et, faucibus tristique elit. In suscipit lorem dui, sodales convallis nisi suscipit a. Aenean non facilisis ex, vitae dignissim magna. Maecenas sit amet turpis nulla.</p>', 46, 3, 1, 1, 1, 1, '2019-01-03 23:39:41', '2019-01-12 16:56:46'),
(10, 'Artigo 10', '<p>Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum.</p>', '<p>Nam bibendum convallis ultrices. Suspendisse vel dolor vel justo pulvinar elementum quis ac est. Aenean venenatis aliquet metus non venenatis. Nulla vitae placerat tellus, nec viverra urna. Curabitur non ipsum et purus ultrices ornare sit amet vitae odio. Proin vitae ante blandit, condimentum nibh vitae, egestas diam. Duis nec libero leo. Maecenas iaculis feugiat urna ac facilisis. Nullam luctus viverra convallis. Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p><p>Etiam ac purus non velit mattis mattis eget vitae lorem. Fusce vehicula dui neque, sit amet luctus massa ullamcorper porta. Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><h3>Integer iaculis nisi vel imperdiet porttitor.&nbsp;</h3><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p><strong>Pellentesque congue id neque nec rhoncus.</strong></p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa4.jpg', 'artigo-10', 'Artigo tres', 'Artigo tres', '<p>Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p>', 9, 1, 1, 1, 1, 1, '2019-01-06 14:58:48', '2019-01-12 16:56:28'),
(11, 'Artigo 11', '<p>Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis.&nbsp;</p>', '<p>Nulla vitae placerat tellus, nec viverra urna. Curabitur non ipsum et purus ultrices ornare sit amet vitae odio. Proin vitae ante blandit, condimentum nibh vitae, egestas diam. Duis nec libero leo. Maecenas iaculis feugiat urna ac facilisis. Nullam luctus viverra convallis. Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p><p>Etiam ac purus non velit mattis mattis eget vitae lorem. Fusce vehicula dui neque, sit amet luctus massa ullamcorper porta. Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa3.jpg', 'artigo-11', 'Artigo quatro', 'Artigo quatro', '<p>Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p>', 13, 1, 1, 1, 1, 1, '2019-01-06 15:00:25', '2019-01-12 16:56:14'),
(12, 'Artigo 12', '<p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit.</p>', '<p>Duis nec libero leo. Maecenas iaculis feugiat urna ac facilisis. Nullam luctus viverra convallis. Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p><p>Etiam ac purus non velit mattis mattis eget vitae lorem. Fusce vehicula dui neque, sit amet luctus massa ullamcorper porta. Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa2.jpg', 'artigo-12', 'Artigo cinco', 'Artigo cinco', '<p>Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p>', 5, 1, 1, 1, 1, 1, '2019-01-06 15:01:44', '2019-01-12 16:56:01'),
(13, 'Artigo 13', '<p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus.&nbsp;</p>', '<p>Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p><p>Etiam ac purus non velit mattis mattis eget vitae lorem. Fusce vehicula dui neque, sit amet luctus massa ullamcorper porta. Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa1.jpg', 'artigo-13', 'Artigo seis', 'Artigo seis', '<p>Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 41, 1, 1, 1, 1, 1, '2019-01-06 15:03:05', '2019-01-12 16:55:45'),
(14, 'Artigo 14', '<p>Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor.&nbsp;</p>', '<p>Vestibulum bibendum auctor enim vehicula pretium. Donec in lectus sit amet erat malesuada convallis eget sed diam. Duis id sem blandit, auctor magna sed, fermentum tellus. Pellentesque non euismod lectus, eu cursus ligula. Phasellus nec augue accumsan tellus hendrerit ultrices vitae et nisi. Nullam sodales ultrices ipsum vitae porta. Vestibulum auctor, eros eu ornare sodales, dolor diam scelerisque sem, efficitur pretium quam felis nec orci. Nam elementum ac orci et lacinia.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat lacus elementum ante cursus semper. Vivamus elementum, erat nec ullamcorper suscipit, felis sem posuere neque, quis fermentum tortor quam ut turpis. Mauris maximus a sapien nec interdum. Integer iaculis nisi vel imperdiet porttitor. Duis vulputate lacus sollicitudin dignissim rutrum. Cras eget felis luctus, suscipit nunc quis, mattis massa. Vestibulum rhoncus risus et metus egestas luctus.</p><p>Vivamus massa risus, blandit ut fringilla ac, posuere eu leo. Nullam eget felis in ante finibus ultricies. Pellentesque congue id neque nec rhoncus. Ut sed urna feugiat, pulvinar odio eget, bibendum nisl. Nullam ac tristique elit. Donec bibendum, sem sed dignissim fringilla, lorem sapien iaculis velit, non consequat sapien metus eget arcu. Fusce gravida ornare magna eget aliquam. Phasellus turpis metus, sodales id ante non, vulputate lobortis ante. Quisque sed mi feugiat, molestie eros vitae, luctus massa. Nunc vel dictum tellus.</p><p>Aliquam semper ex ut tortor pulvinar, vitae consectetur erat varius. Mauris efficitur molestie metus vitae euismod. Ut sodales nulla justo, at dignissim ex malesuada at. Mauris semper mauris vel nulla sodales tempus. Nulla et tincidunt sapien. Mauris felis velit, dignissim vel neque ut, faucibus feugiat justo. Quisque in nisl et ipsum bibendum mollis. Morbi id tellus id sapien ultricies pulvinar. Nulla sed justo cursus, placerat lacus ac, luctus lorem.</p>', 'empresa4.jpg', 'artigo-14', 'Artigo sete', 'Artigo sete', '<p>Sed nibh sapien, faucibus sit amet sagittis vitae, dapibus sed magna. Maecenas dictum ante non molestie suscipit. Cras non blandit nisi. Proin rutrum risus quis nisi consequat gravida.</p>', 24, 1, 1, 2, 1, 1, '2019-01-06 15:04:36', '2019-01-12 16:57:43');

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigos_cats`
--

DROP TABLE IF EXISTS `artigos_cats`;
CREATE TABLE IF NOT EXISTS `artigos_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `situation_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `artigos_cats`
--

INSERT INTO `artigos_cats` (`id`, `nome`, `situation_id`, `created`, `modified`) VALUES
(1, 'PHP', 1, '2018-12-30 14:54:51', '2018-12-30 14:54:51'),
(2, 'Bootstrap', 1, '2018-12-30 14:55:02', '2018-12-30 14:55:02'),
(3, 'PHP OO', 1, '2018-12-30 14:55:12', '2018-12-30 14:55:12'),
(4, 'CakePHP', 1, '2018-12-30 14:55:20', '2018-12-30 14:55:20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `artigos_tps`
--

DROP TABLE IF EXISTS `artigos_tps`;
CREATE TABLE IF NOT EXISTS `artigos_tps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `artigos_tps`
--

INSERT INTO `artigos_tps` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Publico', '2018-12-30 14:52:56', '2018-12-30 14:52:56'),
(2, 'Privado', '2018-12-30 14:53:05', '2018-12-30 14:53:05'),
(3, 'Privado com resumo público', '2018-12-30 14:53:27', '2018-12-30 14:53:27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `autors_sobs`
--

DROP TABLE IF EXISTS `autors_sobs`;
CREATE TABLE IF NOT EXISTS `autors_sobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `situation_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `autors_sobs`
--

INSERT INTO `autors_sobs` (`id`, `titulo`, `descricao`, `situation_id`, `created`, `modified`) VALUES
(1, 'Sobre o autor', '<p>Etiam porta sem <i>malesuada magna</i> mollis euismod. Cras <strong>mattis consectetur</strong> purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>', 1, '2019-01-23 00:00:00', '2019-01-10 11:08:22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carousels`
--

DROP TABLE IF EXISTS `carousels`;
CREATE TABLE IF NOT EXISTS `carousels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_carousel` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo_botao` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordem` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `color_id` int(11) DEFAULT NULL,
  `situation_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `carousels`
--

INSERT INTO `carousels` (`id`, `nome_carousel`, `imagem`, `titulo`, `descricao`, `titulo_botao`, `link`, `ordem`, `position_id`, `color_id`, `situation_id`, `created`, `modified`) VALUES
(1, 'Carousel um', 'imagem-um.jpg', 'Titulo 1', '1Um Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Visualizar', 'https://celke.com.br', 1, 1, 1, 1, '2018-12-07 16:09:13', '2018-12-08 19:07:11'),
(2, 'Slide dois', 'imagem-dois.jpg', 'Titulo 2', '', 'Comprar', 'celke.com.br', 2, 2, 6, 1, '2018-12-08 17:00:49', '2018-12-08 19:07:11'),
(3, 'Slides tres', 'imagem-tres.jpg', 'Titulo 3', '', '', '', 3, 1, NULL, 1, '2018-12-08 17:01:06', '2018-12-08 19:04:26');

-- --------------------------------------------------------

--
-- Estrutura para tabela `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cor` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `colors`
--

INSERT INTO `colors` (`id`, `nome_cor`, `cor`, `created`, `modified`) VALUES
(1, 'Azul', 'primary', '2018-11-29 20:06:34', '2018-11-29 20:06:34'),
(2, 'Cinza', 'secondary', '2018-11-29 20:06:34', NULL),
(3, 'Verde', 'success', '2018-11-29 20:06:34', NULL),
(4, 'Vermelho', 'danger', '2018-11-29 20:06:34', NULL),
(5, 'Laranjado', 'warning', '2018-11-29 20:06:34', NULL),
(6, 'Azul claro', 'info', '2018-11-29 20:06:34', NULL),
(7, 'Claro', 'light', '2018-11-29 20:06:34', NULL),
(8, 'Cinza escuro', 'dark', '2018-11-29 20:06:34', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos_msgs`
--

DROP TABLE IF EXISTS `contatos_msgs`;
CREATE TABLE IF NOT EXISTS `contatos_msgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `conts_msgs_sit_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `contatos_msgs`
--

INSERT INTO `contatos_msgs` (`id`, `nome`, `email`, `assunto`, `mensagem`, `user_id`, `conts_msgs_sit_id`, `created`, `modified`) VALUES
(1, 'Cesar', 'cesar@celke.com.br', 'Mensagem 1', 'Conteúdo da mensagem 1', 1, 1, '2018-12-19 23:35:00', '2018-12-20 00:58:17'),
(3, 'Teste 2', 'cesar@celke.com.br', 'Teste 2', 'Teste 2', NULL, 3, '2018-12-20 00:59:37', '2018-12-21 14:32:39'),
(4, 'Teste 3', 'cesar@celke.com.br', 'Teste 3', 'Teste 3', NULL, 3, '2018-12-20 00:59:57', '2018-12-20 01:00:13'),
(5, 'Teste 5', 'cesar@celke.com.br', 'Teste 5', 'Teste 5', NULL, 1, '2018-12-20 01:06:17', '2018-12-21 14:12:55'),
(6, 'Teste 6', 'cesar@celke.com.br', 'Teste 6', 'Teste 6', NULL, 3, '2018-12-21 12:24:16', '2018-12-21 14:32:08'),
(7, 'Teste 7', 'cesar@celke.com.br', 'Teste 7', 'Teste 7', NULL, 1, '2018-12-21 12:28:46', '2018-12-21 14:11:58'),
(8, 'Teste 8', 'cesar@celke.com.br', 'Teste 8', 'Teste 8', NULL, 1, '2018-12-21 12:30:45', '2018-12-21 14:20:20'),
(9, 'Teste 9', 'cesar@celke.com.br', 'Teste 9', 'Teste 9', NULL, 2, '2018-12-21 14:01:15', '2018-12-21 14:01:15'),
(10, 'Cesar', 'cesar@celke.com.br', 'Teste 10', 'Teste 10', NULL, 2, '2018-12-21 15:16:32', '2018-12-21 15:16:32'),
(11, 'Cesar', 'celkeadm@gmail.com', 'Teste 11', 'Conteúdo Teste 11', NULL, 2, '2018-12-21 15:35:30', '2018-12-21 15:35:30'),
(12, 'Cesar', 'cesar@celke.com.br', 'Teste 12', 'Conteúdo Teste 12', NULL, 2, '2018-12-21 16:29:34', '2018-12-21 16:29:34'),
(13, 'Cesar', 'cesar@celke.com.br', 'Teste 13', 'Conteúdo Teste 13', NULL, 2, '2018-12-21 16:30:23', '2018-12-21 16:30:23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `conts_msgs_sits`
--

DROP TABLE IF EXISTS `conts_msgs_sits`;
CREATE TABLE IF NOT EXISTS `conts_msgs_sits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_sit_msg_cont` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `color_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `conts_msgs_sits`
--

INSERT INTO `conts_msgs_sits` (`id`, `nome_sit_msg_cont`, `color_id`, `created`, `modified`) VALUES
(1, 'Aberto', 1, '2018-12-19 23:32:15', '2018-12-19 23:32:15'),
(2, 'Novo', 4, '2018-12-19 23:32:35', '2018-12-19 23:32:35'),
(3, 'Respondido', 3, '2018-12-19 23:32:54', '2018-12-19 23:32:54');

-- --------------------------------------------------------

--
-- Estrutura para tabela `depoimentos`
--

DROP TABLE IF EXISTS `depoimentos`;
CREATE TABLE IF NOT EXISTS `depoimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_dep` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_dep` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `video_um` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `video_dois` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `video_tres` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `depoimentos`
--

INSERT INTO `depoimentos` (`id`, `nome_dep`, `descricao_dep`, `video_um`, `video_dois`, `video_tres`, `created`, `modified`) VALUES
(1, 'Depoimentos', 'This is a wider card with supporting text below as a natural lead-in to additional content.', '<iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/JfAgl6CGg2Q?rel=0\"  frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/4tBeeMcw2sM?rel=0\"  frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/i_R6sMRRQ0s?rel=0\"  frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2018-12-16 12:27:05', '2018-12-16 12:57:41');

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresas_sobs`
--

DROP TABLE IF EXISTS `empresas_sobs`;
CREATE TABLE IF NOT EXISTS `empresas_sobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `ordem` int(11) NOT NULL,
  `situation_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `empresas_sobs`
--

INSERT INTO `empresas_sobs` (`id`, `titulo`, `descricao`, `imagem`, `ordem`, `situation_id`, `created`, `modified`) VALUES
(1, 'Sobre Empresa Um', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'empresa1.jpg', 2, 1, '2018-12-16 00:00:00', '2018-12-18 10:55:38'),
(2, 'Sobre Empresa Dois', 'Curabitur justo nunc, blandit vitae libero quis, cursus facilisis dui. Cras vel nibh aliquam, fermentum libero et, placerat lorem. Sed a mollis sem. Suspendisse laoreet ipsum sit amet est venenatis, eget tempus ante malesuada. Cras id tristique diam. Nunc sed sapien luctus, finibus ligula et, iaculis nulla.', 'produto.jpg', 1, 1, '2018-12-18 10:54:30', '2018-12-18 10:55:38');

-- --------------------------------------------------------

--
-- Estrutura para tabela `positions`
--

DROP TABLE IF EXISTS `positions`;
CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_posicao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `posicao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `positions`
--

INSERT INTO `positions` (`id`, `nome_posicao`, `posicao`, `created`, `modified`) VALUES
(1, 'Esquerdo', 'text-left', '2018-12-07 00:00:00', NULL),
(2, 'Centralizado', 'text-center', '2018-12-07 00:00:00', NULL),
(3, 'Direito', 'text-right', '2018-12-07 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `redes_socias`
--

DROP TABLE IF EXISTS `redes_socias`;
CREATE TABLE IF NOT EXISTS `redes_socias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `icone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `situation_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `redes_socias`
--

INSERT INTO `redes_socias` (`id`, `titulo`, `link`, `icone`, `situation_id`, `created`, `modified`) VALUES
(1, 'Instagram', 'https://www.instagram.com/celkecursos', 'fab fa-instagram', 1, '2019-01-10 10:37:01', '2019-01-10 10:37:01'),
(2, 'Facebook', 'https://www.facebook.com/celkecursos/', 'fab fa-facebook-square', 1, '2019-01-10 11:13:42', '2019-01-10 11:13:42'),
(3, 'YouTube', 'https://www.youtube.com/channel/UC5ClMRHFl8o_MAaO4w7ZYug', 'fab fa-youtube', 1, '2019-01-10 11:14:24', '2019-01-10 11:14:24'),
(4, 'Twiter', 'https://twitter.com/celkecursos', 'fab fa-twitter-square', 1, '2019-01-10 11:15:05', '2019-01-10 11:15:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `robots`
--

DROP TABLE IF EXISTS `robots`;
CREATE TABLE IF NOT EXISTS `robots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `robots`
--

INSERT INTO `robots` (`id`, `nome`, `tipo`, `created`, `modified`) VALUES
(3, 'Indexar a página mas não seguir os links', 'index,nofollow', '2018-12-30 14:47:30', '2018-12-30 14:47:30'),
(2, 'Não indexar a página mas seguir os links', 'noindex,follow', '2018-12-30 14:46:29', '2018-12-30 14:46:29'),
(1, 'Indexar a página e seguir os links', 'index,follow', '2018-12-30 14:45:50', '2018-12-30 14:45:50'),
(4, 'Não indexar a página e nem seguir os links', 'noindex,nofollow', '2018-12-30 14:49:33', '2018-12-30 14:49:33'),
(5, 'Não exibir a versão em cache da página', 'noarchive', '2018-12-30 14:50:13', '2018-12-30 14:50:13');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_ser` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `icone_um` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_um` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_um` text COLLATE utf8_unicode_ci NOT NULL,
  `icone_dois` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_dois` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_dois` text COLLATE utf8_unicode_ci NOT NULL,
  `icone_tres` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_tres` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_tres` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `servicos`
--

INSERT INTO `servicos` (`id`, `titulo_ser`, `icone_um`, `titulo_um`, `descricao_um`, `icone_dois`, `titulo_dois`, `descricao_dois`, `icone_tres`, `titulo_tres`, `descricao_tres`, `created`, `modified`) VALUES
(1, 'Serviços', 'fas fa-plane', 'Serviço um', 'This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.', 'fas fa-train', 'Serviço dois', 'This is a wider card with supporting text below as a natural lead-in to additional content. This card has even content than the second to show that equal height action.', 'fa fa-bus', 'Serviço tres', 'This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content that equal height action.', '2018-12-14 19:14:30', '2018-12-14 20:28:23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `situations`
--

DROP TABLE IF EXISTS `situations`;
CREATE TABLE IF NOT EXISTS `situations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_situacao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `color_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `situations`
--

INSERT INTO `situations` (`id`, `nome_situacao`, `color_id`, `created`, `modified`) VALUES
(1, 'Ativo', 3, '2018-11-23 00:00:00', NULL),
(2, 'Inativo', 4, '2018-11-23 00:00:00', NULL),
(3, 'Analise', 1, '2018-11-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `cod_val_email` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recuperar_senha` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_val` int(11) DEFAULT '2',
  `imagem` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `cod_val_email`, `recuperar_senha`, `email_val`, `imagem`, `created`, `modified`) VALUES
(1, 'Cesar Szpak', 'cesar@celke.com.br', 'cesar@celke.com.br', '$2y$10$tHEUV.r.DtJ1yYgyS7S6HeBk/HSNY1fAPCFURXG9VylKeDT/ZpOF2', NULL, NULL, 2, 'logo-celke.jpg', '2018-10-19 19:09:13', '2018-12-08 12:18:09'),
(2, 'Kelly', 'kelly@celke.com.br', 'kelly@celke.com.br', '$2y$10$z070kD3WrrMDuSecjLeziu7rhA/umvvegVT/vGHCN3limQmB4oWcC', NULL, NULL, 2, 'logo-celke.jpg', '2018-10-19 20:53:00', '2018-11-20 00:49:07'),
(3, 'Jessica', 'jessica@celke.com.br', 'jessica@celke.com.br', '$2y$10$P..6EG1vACcS8dzssr/QG.k7bafE34umn/4oqSidwBo8m6oRKIiJq', NULL, NULL, 2, 'logo-celke.jpg', '2018-10-27 22:34:06', '2018-11-24 20:41:46'),
(4, 'Cesar 4', 'cesar4@celke.com.br', 'cesar4@celke.com.br', '$2y$10$2aDZ/zMM0C49tHpjRnR7vu8ttEQ9tOFQesAuamIcw/yImRYD7Dame', NULL, NULL, 2, 'logo-celke.jpg', '2018-11-25 16:27:21', '2018-11-25 16:28:51'),
(5, 'Cesar', 'celkeadm@gmail.com', 'celkeadm@gmail.com', '$2y$10$E7aS/4XFwwTW4fgFZxtFH.zrDElmaYFTST79eoZSTiMa5dBmun5W6', 'ed4ebfe98409ffe01e4a4685feffc37ddd246bbec87e1d5f4b6c2afd699f6bb7', 'a8f8b5ba58fd93da24071665718dc56e20663c08d5a39cc21e1aed7fe7eec892', 2, NULL, '2018-11-29 14:31:43', '2018-12-02 15:13:53'),
(6, 'Cesar 6', 'cesar6@celke.com.br', 'cesar6@celke.com.br', '$2y$10$Cj7ztBN.bvWL4VcRIv0l7.3FADEPmmiI4LehcTnmqbcKkc2i0NNk6', 'd241326aaf4ba3c43289db7f09af75d3d93359041163962210c818f2f20a3fe2', NULL, 2, 'logo-celke.jpg', '2018-12-02 15:17:34', '2018-12-08 13:40:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
