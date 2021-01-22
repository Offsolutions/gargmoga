-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 06:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gargmoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keys` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `about_img` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_desc`, `meta_keys`, `meta_desc`, `about_img`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ad consequatur illum unde! Sapiente accusantium, officiis ab velit sunt, perspiciatis ducimus expedita voluptates corrupti hic eligendi iusto ad error id!</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab sapiente ratione quidem aut rerum asperiores tenetur, minus eveniet porro! Quo, quos harum accusamus sapiente perspiciatis dicta ratione tempore officia.</p>\r\n<ul style=\"list-style-type: square;\">\r\n<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>\r\n<li>Culpa ad consequatur illum unde! Sapiente accusantium.</li>\r\n<li>A ab sapiente ratione quidem aut rerum asperiores tenetur</li>\r\n<li>Quo, quos harum accusamus sapiente perspiciatis</li>\r\n<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>\r\n</ul>', 'meta keys', 'meta desc', '90807552.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone2` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flogo` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `a_img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(222) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insta` varchar(222) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_time` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keys` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `phone`, `phone2`, `address`, `logo`, `flogo`, `a_img`, `facebook`, `youtube`, `whatsapp`, `insta`, `twitter`, `admin_password`, `admin_desc`, `open_time`, `meta_keys`, `meta_desc`) VALUES
(1, 'Garg Moga', 'admin@gmail.com', '+91-1234567890', '+91-1234567890', '																												<p class=\"txt-400\">ZIra Road, opp. Army Cantonment,</p>\r\n<p class=\"lightgrey-color\">Moga, Punjab 142001</p>																				', '198636431.png', '899481144.png', '957832658.jpg', 'https://www.facebook.com', '', '1234567890', 'https://www.instagram.com', '', 'admin', '<p>Admin</p>', 'Open 24 hours', 'Garg Moga', 'Garg Moga');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `app_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keys` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb_img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`id`, `title`, `app_desc`, `meta_keys`, `meta_desc`, `img`, `thumb_img`) VALUES
(1, 'app', '<p style=\"text-align: justify;\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'smk', 'smd', '741410872.png', '509766273.png');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `img`) VALUES
(8, '<h5>OUR CLINIC PROVIDE</h5>\r\n<h2>TOTAL HEALTH CARE SOLUTIONS</h2>\r\n<p class=\"p-md\">Feugiat primis ligula risus auctor egestas augue mauri viverra tortor in iaculis placerat eugiat mauris ipsum in viverra tortor and gravida purus lorem in tortor</p>', '51101423.jpg'),
(9, '<h5>WELCOME TO GARG HOSPITAL MULTI SPECIALITY</h5>\r\n<h2>TOP CLASS MEDICAL CENTER</h2>\r\n<p class=\"p-md\">Feugiat primis ligula risus auctor egestas augue mauri viverra tortor in iaculis placerat eugiat mauris ipsum in viverra tortor and gravida purus lorem in tortor</p>', '211466789.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `img`) VALUES
(1, 'American Association of Physicians of Pakistani Descent -MERIT (APPNA-Merit)', '321130115.jpg'),
(6, 'Association of Pakistani Physicians of North Europe (APPNE)', '39914876.png'),
(7, 'Yaran E Watan, Pakistan', '997342517.png');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `c_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `c1t` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c1n` int(11) NOT NULL,
  `c2t` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c2n` int(11) NOT NULL,
  `c3t` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c3n` int(11) NOT NULL,
  `c4t` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c4n` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`id`, `title`, `c_desc`, `c1t`, `c1n`, `c2t`, `c2n`, `c3t`, `c3n`, `c4t`, `c4n`) VALUES
(1, 'About Traveland', '<p><strong>Far far</strong> away, behind the word mountains, far from the countries Vokalia and Consonantia</p>', 'Amazing Deals', 30, 'Sold Tours', 200, 'New Tours', 2500, 'Happy Customers', 400);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `f_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `f_desc`, `img`, `icon`) VALUES
(3, 'Top Level Doctors', '<div class=\"sbox-7-txt\">\r\n<p class=\"p-sm\" style=\"text-align: justify;\">Porta semper lacus at cursus primis ultrice in ligula risus an auctor tempus feugiat dolor</p>\r\n</div>', '943296406.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `img` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `cat_id`, `img`) VALUES
(3, '1', 5, '690594084.jpg'),
(4, '2', 6, '84148816.png'),
(5, '3', 5, '456073737.jpg'),
(6, '4', 6, '645054417.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`id`, `title`) VALUES
(5, 'Pakistan'),
(6, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_title` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keys` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `page_title`, `page_desc`, `img`, `meta_keys`, `meta_desc`) VALUES
(7, 'Solutions for Premature Baby', 'BEST PRACTICES', '<p style=\"text-align: justify;\">Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugia dolor lacinia cubilia curae integer congue leo metus, eu mollislorem primis in orci integer metus mollis faucibus. An enim nullam tempor sapien gravida donec pretium</p>\r\n<div class=\"statistic-holder\">&nbsp;</div>', '820836086.png', '', ''),
(8, 'Group of Certified and Experienced Doctors', 'QUALIFIED DOCTORS', '<div class=\"box-list\">\r\n<p style=\"text-align: justify;\">Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque vel laoreet turpis urna augue, viverra a augue eget, dictum tempor diam pulvinar massa purus nulla</p>\r\n<p style=\"text-align: justify;\">Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien undo pretium purus feugiat dolor impedit</p>\r\n</div>\r\n<div class=\"box-list\">\r\n<p style=\"text-align: justify;\">Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien undo pretium purus feugiat dolor impedit magna purus pretium gravida donec ligula massa in faucibus</p>\r\n</div>', '846786494.jpg', '', ''),
(9, 'MedService is the Best Health Care Website', 'HIGHEST QUALITY CARE', '<div class=\"box-list\">\r\n<p style=\"text-align: justify;\">Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien undo pretium purus feugiat dolor impedit</p>\r\n<p style=\"text-align: justify;\">Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque vel laoreet turpis urna augue, viverra a augue eget, dictum tempor diam pulvinar massa purus nulla</p>\r\n</div>', '93671555.png', 'MedService is the Best Health Care Website', 'MedService is the Best Health Care Website'),
(10, 'Clinic with Innovative Approach to Treatment', 'about-us', '<p>An enim nullam tempor sapien gravida donec pretium ipsum porta justo integer at odio velna vitae auctor integer congue magna purus pretium ligula rutrum luctus ultrice aliquam a augue suscipit</p>\r\n<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor lacinia cubilia curae integer congue leo metus, eu mollislorem primis in orci integer metus mollis faucibus. An enim nullam tempor sapien gravida donec pretium and ipsum porta justo integer at velna vitae auctor integer congue</p>\r\n<div class=\"singnature mt-35\">\r\n<p class=\"p-small mb-15\">Randon Pexon, Head of Clinic</p>\r\n</div>', '422177125.jpg', 'meta keys', 'meta desc');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `port_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port_cat_id` int(11) DEFAULT NULL,
  `port_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `port_cats`
--

CREATE TABLE `port_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `port_cat_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `p_desc` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `title`, `price`, `p_desc`) VALUES
(1, 'Basic', '9999', '<ul>\r\n<li><strong>Domain</strong></li>\r\n<li><strong>Hosting</strong></li>\r\n<li><strong>10 Pages</strong></li>\r\n<li><strong>Custom Desgin</strong></li>\r\n<li><strong>Googel Map Integration</strong></li>\r\n<li><strong>5 Emails</strong></li>\r\n<li><strong>Social Media Link</strong></li>\r\n<li><strong>URL Submission</strong></li>\r\n<li><strong>Online Order Form</strong></li>\r\n</ul>'),
(2, 'Professional', '20000', '<ul>\r\n<li><strong>Domain</strong></li>\r\n<li><strong>Hosting</strong></li>\r\n<li><strong>20 Pages</strong></li>\r\n<li><strong>Testimonials</strong></li>\r\n<li><strong>Online Order Form</strong></li>\r\n<li><strong>Custom Desgin</strong></li>\r\n<li><strong>FeedBack Form</strong></li>\r\n<li><strong>Googel Map Interigration</strong></li>\r\n<li><strong>Testimonials</strong></li>\r\n<li><strong>Social Media Links</strong></li>\r\n</ul>'),
(3, 'Ecommerce', '50000', '<ul>\r\n<li><strong>Domain</strong></li>\r\n<li><strong>Hosting</strong></li>\r\n<li><strong>20 Pages</strong></li>\r\n<li><strong>Testimonials</strong></li>\r\n<li><strong>Online Order Form</strong></li>\r\n<li><strong>Custom Desgin</strong></li>\r\n<li><strong>FeedBack Form</strong></li>\r\n<li><strong>Googel Map Interigration</strong></li>\r\n<li><strong>Testimonials</strong></li>\r\n<li><strong>Social Media Links</strong></li>\r\n<li><strong>Shiping Company Tiesup</strong></li>\r\n<li><strong>Payment Company Tiesup</strong></li>\r\n<li><strong>Payment Gateway</strong></li>\r\n<li><strong>SMS Gateway</strong></li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `page_title` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keys` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb_img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `page_title`, `service_desc`, `meta_keys`, `meta_desc`, `img`, `thumb_img`, `icon`, `short_desc`) VALUES
(5, 'Professional Services', 'Professional-Services', '<div>\r\n<div>Porta&nbsp;semper&nbsp;lacus&nbsp;at&nbsp;cursus&nbsp;primis&nbsp;ultrice&nbsp;in&nbsp;ligula&nbsp;risus&nbsp;an&nbsp;&nbsp;auctor&nbsp;tempus&nbsp;feugiat&nbsp;dolor</div>\r\n</div>', 'meta keys', 'meta desc', '934989051.jpg', '677359304.jpg', 'icon flaticon-dentist', 'Porta semper lacus at cursus primis ultrice in ligula risus an auctor tempus '),
(6, 'Service 2', 'Service-2', '<p style=\"text-align: justify;\">Dentistry, also known as dental medicine and &lsquo;oral medicine, is a branch of medicine that consists of the study, diagnosis, prevention, and treatment.</p>', 'meta keys', 'meta desc', '381766014.jpg', '111654282.jpg', NULL, 'Dentistry, also known as dental medicine and ‘oral medicine, is a branch of ');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `social_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keys` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb_img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `title`, `social_desc`, `meta_keys`, `meta_desc`, `img`, `thumb_img`) VALUES
(1, 'Social', '<p style=\"text-align: justify;\">As people perceive you from how you present yourself similar is the case with your Business. Your presence and visibility is marked with your website .A efficiently designed website with right navigation, easy to use interface and good content can do wonders for you similarly a poor representation may make your whole efforts a big zero. Your website is the presentation of your buisness; it is the image you create for yourself so it must be awesome Converting a visitor to a potential client will be much easier if he already likes what he sees. Even if your website be a service related or it product based; better it is designed and put up together more beneficial it is for your business. If you are thinking how to do it. You are already on the right place If you want an up to trend, Eye-catching Designed website not only which enhances user engagement but is easy to use and go through. Official Solution is the right place; we will make everything smooth and easier for you.</p>', 'WEBSITE DESIGNING', 'WEBSITE DESIGNING', '927797686.jpg', '617616795.png');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8_unicode_ci NOT NULL,
  `team_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `post`, `img`, `team_desc`, `cat_id`) VALUES
(9, 'Jonathan Barnes D.M.', 'Chief Medical Officer', '463070491.jpg', '<p style=\"text-align: justify;\">Donec vel sapien augue integer turpis cursus porta, mauris sed augue luctus magna dolor luctus ipsum neque</p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `t_name`, `t_title`, `t_desc`, `t_img`) VALUES
(3, 'Jhon', 'Good', '<p style=\"text-align: justify;\">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus, blandit posuere ligula varius congue cursus porta feugiat</p>', '574852915.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

CREATE TABLE `top` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `top_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keys` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb_img` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `top`
--

INSERT INTO `top` (`id`, `title`, `top_desc`, `meta_keys`, `meta_desc`, `img`, `thumb_img`) VALUES
(1, 'top', '<h1>Improve your website\'s&nbsp;search engine rankings.</h1>\r\n<div class=\"text\">Solution is an easy to use tool for SEO. With the help of our system you can present your website. It is all very easy!</div>', 'tmk', 'tmd', '756161490.png', '617616795.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whats` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `fb`, `insta`, `youtube`, `whats`, `phone`, `address`, `logo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 'fb', 'insta.com', 'yt.com', '+91 9780551900 , 9914837549', '+91 9780551900 , 9914837549', '<p>moga</p>', '1596269058.PNG', '$2y$10$fICRJ9wAE5Ip.DY.lKjwtu6YfxN6AsekXmEHCiEIOl36ns5HwCVxS', NULL, '2020-08-01 02:05:31', '2020-08-05 06:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `link`, `cat_id`) VALUES
(1, 'APPNA MERIT Family Practice Specialty Rotations', 'https://www.youtube.com/watch?v=4pXeTBZSSEs&feature=youtu.be&ab_channel=APPNAMERIT', 5),
(2, 'Message for Family Medicine in Pakistan by Prof John Murtagh', 'https://www.youtube.com/watch?v=ThEXSX5Ch10&feature=youtu.be&ab_channel=YousufAhmad', 6),
(3, 'An Interview with Prof John Murtagh \"Family Medicine in Pakistan\"', 'https://www.youtube.com/watch?v=FD_-g2eUP80&feature=youtu.be&ab_channel=YousufAhmad', 6);

-- --------------------------------------------------------

--
-- Table structure for table `wcu`
--

CREATE TABLE `wcu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8_unicode_ci NOT NULL,
  `w_desc` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wcu`
--

INSERT INTO `wcu` (`id`, `title`, `img`, `w_desc`) VALUES
(1, 'Welcome', '513527141.jpg', '<p style=\"text-align: justify;\">One of the first major discoveries relevant to the field of pulmonology was the discovery of pulmonary circulation. Originally, it was thought that blood reaching the right side of the heart passed through small &lsquo;pores&rsquo; in the septum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8_unicode_ci NOT NULL,
  `w_desc` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `title`, `img`, `w_desc`) VALUES
(1, 'Clinic with Innovative Approach to Treatment', '7551887.jpg', '<p>An enim nullam tempor sapien gravida donec pretium ipsum porta justo integer at odio velna vitae auctor integer congue magna purus pretium ligula rutrum luctus ultrice aliquam a augue suscipit</p>\r\n<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor lacinia cubilia curae integer congue leo metus, eu mollislorem primis in orci integer metus mollis faucibus. An enim nullam tempor sapien gravida donec pretium and ipsum porta justo integer at velna vitae auctor integer congue</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port_cats`
--
ALTER TABLE `port_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wcu`
--
ALTER TABLE `wcu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `port_cats`
--
ALTER TABLE `port_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `top`
--
ALTER TABLE `top`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wcu`
--
ALTER TABLE `wcu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
