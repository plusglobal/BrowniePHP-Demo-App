-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2012 at 09:13 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `browniedemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `password`, `last_login`) VALUES
(1, 'Luke', 'luke@browniephp.org', '4db8b7176b5f5cbf746f01e8b51608150f2181bf', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brw_files`
--

DROP TABLE IF EXISTS `brw_files`;
CREATE TABLE IF NOT EXISTS `brw_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `record_id` int(10) unsigned NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_code` (`category_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `brw_images`
--

DROP TABLE IF EXISTS `brw_images`;
CREATE TABLE IF NOT EXISTS `brw_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `record_id` int(10) unsigned NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_code` (`category_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `brw_images`
--

INSERT INTO `brw_images` (`id`, `name`, `record_id`, `model`, `description`, `category_code`, `created`, `modified`) VALUES
(1, '_cara.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:38:00', '2012-08-13 20:38:00'),
(2, '_Changing-Faces-Face.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:38:00', '2012-08-13 20:38:00'),
(3, '_dancing-underwater-by-kenvinpinardy.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:38:01', '2012-08-13 20:38:01'),
(4, '__dancing-underwater-by-kenvinpinardy.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:38:13', '2012-08-13 20:38:13'),
(5, '_33284382.SadfaceLarge.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:39:20', '2012-08-13 20:39:20'),
(6, '__cara.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:39:42', '2012-08-13 20:39:42'),
(7, '_0204.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:39:42', '2012-08-13 20:39:42'),
(8, '__33284382.SadfaceLarge.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:42:26', '2012-08-13 20:42:26'),
(9, '___dancing-underwater-by-kenvinpinardy.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:45:56', '2012-08-13 20:45:56'),
(10, '__Changing-Faces-Face.jpg', 4, 'Post', '', 'gallery', '2012-08-13 20:51:21', '2012-08-13 20:51:21'),
(11, 'Lotus-043.jpg', 4, 'Post', '', 'gallery', '2012-08-13 21:24:30', '2012-08-13 21:24:30'),
(12, '1john.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:50', '2012-08-14 21:22:50'),
(13, '1john-digweed-main.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:50', '2012-08-14 21:22:50'),
(14, '1nicole-5.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:50', '2012-08-14 21:22:50'),
(15, '1oeil-triste.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:51', '2012-08-14 21:22:51'),
(16, '1Sir-John-Sulston.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:51', '2012-08-14 21:22:51'),
(17, '6a00d4143222993c7f00d4143c461d6a47-500pi.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:51', '2012-08-14 21:22:51'),
(18, '0204.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:51', '2012-08-14 21:22:51'),
(19, '33284382.SadfaceLarge.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:51', '2012-08-14 21:22:51'),
(20, '139140906-d351a234dd.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:52', '2012-08-14 21:22:52'),
(21, 'cara.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:52', '2012-08-14 21:22:52'),
(22, 'Changing-Faces-Face.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:52', '2012-08-14 21:22:52'),
(23, 'dancing-underwater-by-kenvinpinardy.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:52', '2012-08-14 21:22:52'),
(24, 'faces02.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:52', '2012-08-14 21:22:52'),
(25, 'mime-Laura-sad-face.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:53', '2012-08-14 21:22:53'),
(26, 'normal-face.JPG', 9, 'Page', '', 'gallery', '2012-08-14 21:22:53', '2012-08-14 21:22:53'),
(27, 'sad-face.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:53', '2012-08-14 21:22:53'),
(28, '_sad-face.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:53', '2012-08-14 21:22:53'),
(29, 'Underwater-27-by-Sugarock99.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:53', '2012-08-14 21:22:53'),
(30, 'wdi06alvaroferrer.jpg', 9, 'Page', '', 'gallery', '2012-08-14 21:22:54', '2012-08-14 21:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `brw_users`
--

DROP TABLE IF EXISTS `brw_users`;
CREATE TABLE IF NOT EXISTS `brw_users` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `root` tinyint(1) NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `brw_users`
--

INSERT INTO `brw_users` (`id`, `email`, `password`, `root`, `last_login`, `created`, `modified`) VALUES
(1, 'demo@browniephp.org', '4db8b7176b5f5cbf746f01e8b51608150f2181bf', 1, '2012-08-14 21:21:40', '2011-02-23 16:57:08', '2011-02-23 16:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `post_count` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `enabled`, `post_count`, `parent_id`, `lft`, `rght`, `created`, `modified`) VALUES
(1, 'News', 1, 0, NULL, 1, 2, '2011-02-23 17:13:04', '2012-08-10 20:51:25'),
(2, 'Articles', 1, 0, NULL, 3, 4, '2011-02-23 17:13:12', '2012-08-10 20:51:25'),
(3, 'Code and examples', 1, 0, NULL, 5, 6, '2011-02-23 17:13:23', '2012-08-10 20:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

DROP TABLE IF EXISTS `i18n`;
CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(2, 'eng', 'Page', 6, 'title', 'te');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `date`, `author_id`, `body`, `created`, `modified`) VALUES
(9, 'test', '2012-08-14 21:22:00', NULL, NULL, '2012-08-14 21:22:35', '2012-08-14 21:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `category_id` int(10) NOT NULL,
  `post_status_id` int(10) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `date`, `category_id`, `post_status_id`, `author_id`, `body`, `created`, `modified`) VALUES
(1, 'Images gallery example', '2011-02-23 19:47:00', 1, 1, NULL, '<p><a href="http://www.example.com">This is a link</a>, consectetuer adipiscing elit. <strong>&quot;This is bold&quot;</strong> In quis tellus vitae arcu iaculis elementum. Fusce lectus magna, tempor et, faucibus sed, suscipit vel, urna. Nam ac leo at nunc placerat rhoncus. Nunc porta pede in orci. Duis ante justo, pharetra non, semper sit amet, dignissim id, enim.</p>\r\n<p>Cras pulvinar. <strong>Proin lacus</strong>. Curabitur sed leo. In hac habitasse platea dictumst. Quisque pede est, convallis id, luctus at, pulvinar aliquet, nibh. Donec ultrices, ante ut sodales aliquam, dui enim placerat neque, a interdum diam nunc interdum purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat.  Duis aliquet, sem vel malesuada <u>interdum</u></p>\r\n<ul>\r\n    <li>Lorem mi feugiat pede, quis rhoncus risus augue eu augue.</li>\r\n    <li>Pellentesque eget dui eu felis luctus rutrum.</li>\r\n    <li>Vestibulum sed elit.</li>\r\n    <li>Sed molestie convallis felis.</li>\r\n</ul>\r\n<p>Praesent varius vulputate felis. Ut nunc sapien, ultricies id, blandit nec, gravida sit amet, magna. Duis tellus. Fusce pellentesque. Nam nibh. Morbi dignissim ante eget quam. Nulla semper, lacus eu interdum rutrum, lectus lectus blandit libero, dictum facilisis tortor sem a nisl.</p>\r\n<ol>\r\n    <li>Donec dolor justo, iaculis in, gravida quis, aliquet eu, turpis.</li>\r\n    <li>In id mi ut mi posuere porttitor. Phasellus tempus aliquet mauris.</li>\r\n    <li>Sed fermentum dapibus quam.</li>\r\n</ol>\r\n<p>Nascetur ridiculus mus. Maecenas sem massa, faucibus eget, semper non, gravida viverra, lacus. Sed dolor. Phasellus facilisis arcu id enim. Curabitur sapien nisi, tempor eu, auctor ut, varius at, quam. Etiam convallis facilisis leo. Nunc faucibus auctor justo.</p>\r\n<table border="1">\r\n    <tbody>\r\n        <tr>\r\n            <td><strong>bold</strong> et magnis dis parturient montes</td>\r\n            <td>Donec felis tortor, porta quis, semper sed, sagittis sed, tellus</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Italic</td>\r\n            <td><a href="http://www.example.com">link</a></td>\r\n        </tr>\r\n        <tr>\r\n            <td>None</td>\r\n            <td>something</td>\r\n        </tr>\r\n    </tbody>\r\n</table>', '2011-02-23 19:49:26', '2011-02-23 19:51:08'),
(2, 'BrowniePHP: Admin panel · meta-framework · CMS', '2011-02-23 19:51:00', 2, 1, NULL, '<h1>BrowniePHP</h1>\r\n<h3>Admin panel &middot; meta-framework &middot; CMS</h3>\r\n<h2>What is BrowniePHP?</h2>\r\n<p><a href="http://browniephp.org"> BrowniePHP </a>  is a plugin for the  <a href="http://cakephp.org"> CakePHP framework </a>  that saves you the work to create a back-end for your app. With minimal configuration, the plugin adapts itself to any CakePHP application and automatically provides you a very intuitive and easy to use admin panel.</p>\r\n<p>Developers familiarized with CakePHP might see it as an advanced ready-to-deploy  <a href="http://book.cakephp.org/view/1103/Scaffolding"> scaffolding </a>  system.</p>\r\n<h2>Is BrowniePHP a CMS?</h2>\r\n<p>Yes, you could say so, but we prefer to say that BrowniePHP is a meta-framework; some kind of high-level framework built upon CakePHP that makes your development more agile, giving you an automatic content management system and some tools for the creation of front-ends.</p>\r\n<h2>What is the difference between BrowniePHP and other popular CMS like Drupal, Joomla and Wordpress?</h2>\r\n<p>Most CMS in the market can be deployed and used turnkey, you only have to run the installer and a few steps ahead you are ready to use them. BrowniePHP is a CakePHP plugin and it works based in the  <a href="http://book.cakephp.org/view/1000/Models"> models </a>  you create for your application. That means: BrowniePHP by itself is useless, you have to create an app to give it life.</p>\r\n<h2>Who is BrowniePHP for?</h2>\r\n<p>BrowniePHP is a plugin for the CakePHP framework, therefore, you have to know how to develop websites and webapps with CakePHP in order to use it.</p>\r\n<h2>How do I use it?</h2>\r\n<p>Follow the  <a href="http://codaset.com/plusglobal/browniephp/wiki/Setup"> setup instructions </a></p>\r\n<h2>Where can I find help?</h2>\r\n<p>The documentation is under development and unfortunately we cannot predict when it is going to see the light. In the meantime, you can  <a href="http://codaset.com/plusglobal/browniephp-demo-app"> grab the demo app </a>  that will give you a pretty good idea of how to use it.</p>\r\n<p>You can ask a question at  <a href="http://stackoverflow.com/"> stackoverflow </a>  and  <a href="http://ask.cakephp.org"> CakePHP Questions </a> . Be sure to tag your question with ''browniephp''. We will try to answer you as soon as possible.</p>\r\n<h2>How can I contribute to BrowniePHP?</h2>\r\n<p>Same as any open source project: you can  <a href="http://codaset.com/plusglobal/browniephp/tickets"> open a ticket </a>  or fork the project, change the code and then make a pull request.</p>\r\n<h2>Requirements</h2>\r\n<p>Check out  <a href="http://codaset.com/plusglobal/browniephp/wiki/Requirements"> the Requirements page </a></p>\r\n<h2>License</h2>\r\n<p>BrowniePHP is released under the  <a href="http://www.opensource.org/licenses/mit-license.php"> MIT license </a></p>', '2011-02-23 19:53:17', '2011-02-23 19:53:43'),
(3, 'Technical Requirements', '2011-02-23 19:54:00', 2, 2, NULL, '<h1>Requirements</h1>\r\n<h2>PHP 5 +</h2>\r\n<p>We didn''t make any effort to make it PHP 4 compatible, so you will need to have at least PHP 5.1 to use the plugin.</p>\r\n<h2>CakePHP 1.3+</h2>\r\n<p>BrowniePHP is tested with CakePHP 1.3.6. It should work with some previous versions from the 1.3 branch, but it won''t work with CakePHP 1.2.</p>\r\n<h2>Database</h2>\r\n<p>The plugin is tested with MySQL, but it should work with any database engine because it uses standar''s CakePHP methods to access datasources. Anyway, feel free to  <a href="http://codaset.com/plusglobal/browniephp/tickets"> open a ticket </a>  if you have any issue.</p>', '2011-02-23 19:54:34', '2011-02-23 19:54:34'),
(4, 'How to setup BrowniePHP', '2011-02-23 19:55:00', 3, 2, NULL, '<h1>Setup instructions</h1>\r\n<h2>First</h2>\r\n<p>Create a basic app, you need at least one model with its own database table (or the datasource you use).</p>\r\n<h2>Second:</h2>\r\n<p><a href="http://codaset.com/plusglobal/browniephp/source/master/download"> Download the plugin </a>  and extract it into  <strong> app/plugins/brownie </strong>  or  <strong> plugins/brownie </strong></p>\r\n<h2>Third</h2>\r\n<p>Add the component in  <strong> app/app_controller.php </strong> , the code could be something like this:</p>\r\n<pre><code> &lt;?php class AppController extends Controller {     var $components = array(''Session'', ''Brownie.panel'');     /* ... */ }  </code>\r\n\r\n</pre>\r\n<h2>Fourth</h2>\r\n<p>Add the behavior in  <strong> app/app_model.php </strong>  (this step should not be neccessary, we are working to remove it)</p>\r\n<pre><code> &lt;?php class AppModel extends Model {     var $actsAs = array(''Brownie.Panel'');     /* ... */ }  </code>\r\n\r\n</pre>\r\n<h2>Fifth</h2>\r\n<p>Create the tables for the models needed for BrowniePHP, you will find it in  <strong> brownie.sql </strong>  inside the plugin folder. After executing the SQL you will find 3 tables:  <code> brw_users </code> ,  <code> brw_files </code>  and  <code> brw_images </code></p>\r\n<h2>Finally</h2>\r\n<p>Go to www.your-domain.com/brownie and login with any user you want (the username have to be a valid email address). When the table  <code> brw_users </code>  is empty the first login you make is going to be saved instead of validated.</p>', '2011-02-23 19:56:23', '2011-02-23 19:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

DROP TABLE IF EXISTS `posts_tags`;
CREATE TABLE IF NOT EXISTS `posts_tags` (
  `post_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL,
  PRIMARY KEY (`post_id`,`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts_tags`
--

INSERT INTO `posts_tags` (`post_id`, `tag_id`) VALUES
(1, 2),
(1, 3),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post_statuses`
--

DROP TABLE IF EXISTS `post_statuses`;
CREATE TABLE IF NOT EXISTS `post_statuses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post_statuses`
--

INSERT INTO `post_statuses` (`id`, `name`) VALUES
(1, 'Draft'),
(2, 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created`, `modified`) VALUES
(1, 'php', '2011-02-23 18:29:24', '2011-02-23 18:29:24'),
(2, 'cakephp', '2011-02-23 18:29:31', '2011-02-23 18:29:31'),
(3, 'css', '2011-02-23 18:29:35', '2011-02-23 18:29:35'),
(4, 'javascript', '2011-02-23 18:29:41', '2011-02-23 18:29:41'),
(5, 'jquery', '2011-02-23 18:29:50', '2011-02-23 18:29:50'),
(6, 'html', '2011-02-23 18:30:10', '2011-02-23 18:30:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
