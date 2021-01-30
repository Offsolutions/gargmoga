-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 05:58 AM
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
(1, 'Garg Moga', 'admin@gmail.com', '01636234628', '+91-1234567890', '<p class=\"txt-400\">ZIra Road, opp. Army Cantonment,</p>\r\n<p class=\"lightgrey-color\">Moga, Punjab 142001</p>', '905861999.png', '725906931.png', '957832658.jpg', 'https://www.facebook.com', '', '1234567890', 'https://www.instagram.com', '', 'admin', '							<p>We give you here a few details so that your experience at our hospitals is comfortable and pleasant.</p>					', 'Open 24 hours', 'Garg Moga, Garg Hospital Moga', 'Garg Hospital believes in providing quality healthcare services at affordable cost. Our teams of expert medical professionals with combined extensive clinical expertise develop a perfect treatment plan that is best for you.');

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
(8, '<h5>&nbsp;</h5>\r\n<h2>Our Cardiologists</h2>\r\n<h2>always are</h2>\r\n<h5 class=\"p-md\">Meeting Global Benchmarks in Cardiac<br />Emergency Response Time</h5>', '398291618.jpg'),
(9, '<h5>WELCOME TO GARG HOSPITAL MULTISPECIALITY</h5>\r\n<h3 class=\"h3-md steelblue-color\">Solutions for Premature Baby</h3>', '38218908.jpg');

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
(3, 'Qualified Doctors', '<div class=\"sbox-7-txt\">\r\n<p class=\"p-sm\" style=\"text-align: justify;\">We are the top hospital in Punjab that is served with best doctors in every department.</p>\r\n</div>', '332953166.jpg', 'flaticon-137-doctor');

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
(7, '1', 0, '312964776.jpg'),
(8, '2', 0, '447764127.jpg'),
(9, '3', 0, '776328615.jpg');

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
(9, 'Who We Are', 'HIGHEST QUALITY CARE', '<div class=\"box-list\">\r\n<p style=\"text-align: justify;\">Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien undo pretium purus feugiat dolor impedit</p>\r\n<p style=\"text-align: justify;\">Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque vel laoreet turpis urna augue, viverra a augue eget, dictum tempor diam pulvinar massa purus nulla</p>\r\n</div>', '93671555.png', 'MedService is the Best Health Care Website', 'MedService is the Best Health Care Website'),
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
  `short_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_show` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `page_title`, `service_desc`, `meta_keys`, `meta_desc`, `img`, `thumb_img`, `icon`, `short_desc`, `home_show`) VALUES
(7, 'CARDIOLOGY', 'CARDIOLOGY', '<p style=\"text-align: justify;\"><strong>The Department of Cardiac Sciences</strong>&nbsp;has an integrated health care approach with a dedicated panel of Cardiologists who have a team to provide comprehensive, multidisciplinary care to patients suffering from heart ailments. Our team of doctors, nurses, technicians and other heart experts are there to ensure unparalleled excellence in patient care, education and research. State-of-the-heart-technology which is first of its kind in this region of the world, houses all the equipment and monitoring devices necessary to perform minimally invasive cardiac operations. Our Interventional team is available round the clock to help patients with cardiac emergencies with primary and complex coronary angioplasties and stenting.</p>', 'The Department of Cardiac Sciences has an integrated health care approach with a dedicated panel of Cardiologists who have a team to provide comprehensive,', 'The Department of Cardiac Sciences has an integrated health care approach with a dedicated panel of Cardiologists who have a team to provide comprehensive,', '51265173.jpg', '187385892.png', NULL, 'The Department of Cardiac Sciences has an integrat', '1'),
(8, 'CRITICAL CARE CENTER', 'CRITICAL-CARE-CENTER', '<p style=\"text-align: justify;\"><strong>The Department of Critical Care Centre</strong>&nbsp;at GargHospital offers 24*7 care to patients in potentially life-threatening conditions who need continuous monitoring to be carried out by multidisciplinary team. The discipline, generally the most expensive, technologically advanced and resource-intensive area of medical care, integrates many specialties and diverse technologies, holding out the hope of survival to patients who are acutely and critically ill.<br />Our Critical care team comprising specially trained physicians, anesthetists, surgeons, nurses and allied health care professionals partner together 24 hours a day to ensure quality care for each individual patient.<br />They provide the full spectrum of medical, surgical and trauma critical care services to patients including the psychological, physical and emotional needs of the patient.<br />With the state of the art Central monitoring system, All invasive and minor surgical procedures are done at the bed side. Facilities exist for bedside Dialysis, Bronchoscopy, Endoscopy, Echocardiography, Ultrasonography etc.<br />A lot of emphasis is also placed on areas like nurses training, standardizing care through clinical pathways and documentation of ethical and economic issues pertaining to Critical Care, managing the in-hospital environment, infection control.</p>', 'CRITICAL CARE CENTER', 'CRITICAL CARE CENTER', '315341902.jpg', '6787425.png', NULL, 'The Department of Critical Care Centre at Garg Hos', NULL),
(9, 'DERMATOLOGY', 'DERMATOLOGY', '<p style=\"text-align: justify;\"><strong>The department for Dermatology</strong>&nbsp;at Garg Hospital offers treatments for various skins, Hair &amp; Nail diseases and ailments such as acne, eczema, Psoriasis, Age Spots, Melasma, marks, scars, skin tags, moles, and adopts surgery for warts with great results.</p>\r\n<p style=\"text-align: justify;\">&nbsp;The inherent disfiguring nature of some skin diseases often causes tremendous emotional stress to patients. Our consultants complement the medical treatment given to patients by providing psychological support through counselling.</p>', 'DERMATOLOGY', 'DERMATOLOGY', '655819850.jpg', '292682073.png', NULL, 'The department for Dermatology at Garg Hospital of', '1'),
(10, 'ENT', 'ENT', '<p style=\"text-align: justify;\"><strong>Department of ENT</strong>&nbsp;at Garg Hospital is equipped with the finest technology and the best manpower to provide the best possible facilities for the patients. With the help of world class equipment available in the outpatient department, Emergency &amp; Operation Theater, several procedures can be performed without much hospitalization.</p>\r\n<p style=\"text-align: justify;\">The Department is well-equipped to take care of all Ear, Nose and Throat emergencies and has teams available round the clock to do so. The Department also provides audiology, voice and speech therapy as allied services.</p>', 'Department of ENT at Garg Hospital is equipped with the finest technology and the best manpower to provide the best possible facilities for the patients.', 'Department of ENT at Garg Hospital is equipped with the finest technology and the best manpower to provide the best possible facilities for the patients.', '137423755.png', '443177930.png', NULL, 'Department of ENT at Garg Hospital is equipped wit', NULL),
(11, 'ENDOCRINOLOGY & DIABETES CLINIC', 'ENDOCRINOLOGY-AND-DIABETES-CLINIC', '<p style=\"text-align: justify;\"><strong>Department of endocrinology</strong>&nbsp;deals with various hormonal disorders. Endocrinology is one of the latest and very rapidly evolving super specialties of the medicine. Department is well equipped with the latest advances in the diagnosis and treatment of both common as well as rare hormonal disorders. Department of endocrinology with the help of state of art laboratory facilities and the team of highly skilled surgeons provides comprehensive care for all endocrine disorders.</p>\r\n<p style=\"text-align: justify;\">Our department provides the most advanced diagnosis and treatment modalities of widely prevalent hormonal diseases like Diabetes, Thyroid, Obesity, PCOS, etc.</p>\r\n<p style=\"text-align: justify;\">We have a team of trained experts headed by renowned endocrinologists For these lifestyle disorders, we provide customized care for our patients through individualized pragmatic treatment plans.</p>', 'Department of endocrinology deals with various hormonal disorders. Endocrinology is one of the latest and very rapidly evolving super specialties of the medicine. Department is well equipped with the latest advances in the diagnosis and treatment of both common as well as rare hormonal disorders. Department of endocrinology with the help of state of art laboratory facilities and the team of highly skilled surgeons provides comprehensive care for all endocrine disorders.  Our department provides the most advanced diagnosis and treatment modalities of widely prevalent hormonal diseases like Diabetes, Thyroid, Obesity, PCOS, etc.  We have a team of trained experts headed by renowned endocrinologists For these lifestyle disorders, we provide customized care for our patients through individualized pragmatic treatment plans.', 'Department of endocrinology deals with various hormonal disorders. Endocrinology is one of the latest and very rapidly evolving super specialties of the medicine. Department is well equipped with the latest advances in the diagnosis and treatment of both common as well as rare hormonal disorders. Department of endocrinology with the help of state of art laboratory facilities and the team of highly skilled surgeons provides comprehensive care for all endocrine disorders.  Our department provides the most advanced diagnosis and treatment modalities of widely prevalent hormonal diseases like Diabetes, Thyroid, Obesity, PCOS, etc.  We have a team of trained experts headed by renowned endocrinologists For these lifestyle disorders, we provide customized care for our patients through individualized pragmatic treatment plans.', '926933859.jpg', '123946279.png', NULL, 'Department of endocrinology deals with various hor', NULL),
(12, 'FETAL MEDICINE', 'FETAL-MEDICINE', '<p style=\"text-align: justify;\">Faith Fetal center is the center of excellence for invasive and advanced radiology. The objective of Faith Fetal Center is to build trust between the patient and doctor.<br />&nbsp;<br />Fetal medicine is the specialty that addresses the inborn individual. It includes assessment of fetal growth &amp; well being, the maintenance of fetal health &amp; diagnosis of fetal illness &amp; abnormalities. FFC has both the expertise and equipments to achieve parental diagnosis. FFC is well equipped to perform both invasive screening &amp; diagnostic studies for fetal. FFC is one stop for all fetal queries and solutions.</p>', 'FETAL MEDICINE', 'FETAL MEDICINE', '6869145.jpg', '336056327.jpg', NULL, 'Faith Fetal center is the center of excellence for', NULL),
(13, 'GASTROENTEROLOGY', 'GASTROENTEROLOGY', '<p style=\"text-align: justify;\">Doctors and residents have long felt the need for quality medical care for disorders of the liver and digestive tract. Recognizing that patients with gastrointestinal disease have special requirements, Garg Healthcare provide high quality tertiary level services in gastroenterology and gastrointestinal surgery. Such services, as a cohesive unit, were so far provided only in a handful of India&rsquo;s premier government institutions. The advantages of a &ldquo;team&rdquo; approach i.e. medical and surgical has been well documented in these units and the aim was to extend this to the private sector.</p>\r\n<p style=\"text-align: justify;\">The center has a highly qualified team of doctors which is supported by state of the art equipment such as video endoscopes, laparoscopic surgical equipment, a well equipped ICU and operation theater with an image intensifier. Emergency and elective treatment can be provided for a wide range of liver and digestive disorders from the simplest to the most complex.</p>', 'GASTROENTEROLOGY', 'GASTROENTEROLOGY', '366852473.jpg', '337978860.png', NULL, 'Doctors and residents have long felt the need for ', NULL),
(14, 'INTERNAL MEDICINE', 'INTERNAL-MEDICINE', '<p style=\"text-align: justify;\"><strong>Internal Medicine</strong>&nbsp;is the foundation on which all the medical super specialties are built. It is the first point of contact for any patient who seeks a specialist opinion as the internist has a holistic approach towards a patient, analyses various problems and treats the patient accordingly and if required refers to the concerned super specialist whose highly specialized skills are used for the patients&rsquo; benefit.</p>\r\n<p style=\"text-align: justify;\">The Department of Internal Medicine at Garg Healthcare is a link between all the departments and super specialties in the hospital. The Centre prides itself in its well renowned and experienced professional experts and state-of-the-art facilities to deliver complete all round care for patient&rsquo;s wellness, health and care. It provides complete In-patient and Out-patient diagnostic and treatment facilities.</p>\r\n<p style=\"text-align: justify;\">Our medical specialists believe in delivering patient centered care with highly ethical &amp; safe medical practices. They are backed by professionally trained &amp; compassionate team of nurses and supportive staff to provide high quality, best in class comfortable and caring, safe care in a friendly environment at par with international level to all our patients.</p>', 'INTERNAL MEDICINE', 'INTERNAL MEDICINE', '734881374.jpg', '91979245.png', NULL, 'Internal Medicine is the foundation on which all t', NULL),
(15, 'KIDNEY TRANSPLANT', 'KIDNEY-TRANSPLANT', '<p style=\"text-align: justify;\">Kidney failure is a very common problem , and its prevalance is increasing at a very high rate in developing countaries like India.<br />Treatment options include dialysis or kidney transplant. Various large studies have shown that quality of life and survival is much better after kidney transplant than dialysis.&nbsp;<strong>Kidney Transplant in the Year of 2016 to November 2017</strong></p>', 'KIDNEY TRANSPLANT', 'KIDNEY TRANSPLANT', '332555013.jpg', '519417474.png', NULL, 'Kidney failure is a very common problem , and its ', NULL),
(16, 'LAPROSCOPIC & GENERAL SURGERY', 'LAPROSCOPIC-AND-GENERAL-SURGERY', '<p style=\"text-align: justify;\"><strong>Department of General Surgery</strong>&nbsp;at Garg Hospital is dedicated to performing surgical procedures using minimally invasive techniques for various medical conditions. Department of general surgery provide indoor, outdoor &amp; 24 hours emergency services by well trained, qualified &amp; experienced surgeons.</p>\r\n<p style=\"text-align: justify;\">&nbsp;Besides the scheduled surgeries, there are various emergency surgeries taken care. All surgical procedures are delivered to the patient with utmost care and healthcare standard.</p>', 'LAPROSCOPIC & GENERAL SURGERY', 'LAPROSCOPIC & GENERAL SURGERY', '321870290.jpg', '723126484.png', NULL, 'Department of General Surgery at Garg Hospital is ', NULL),
(17, 'NEPHROLOGY', 'NEPHROLOGY', '<p style=\"text-align: justify;\"><strong>The Department of Nephrology</strong>&nbsp;at Garg Hospital is a multidisciplinary patient care department providing&nbsp;<strong>advanced treatment for short-term and long-term kidney diseases.</strong>&nbsp;As a major tertiary care center, our goal is to deliver the highest level patient care at Department of Nephrology.</p>\r\n<p style=\"text-align: justify;\">At Garg we provide patient oriented management of various kidney diseases by integrating and leveraging our combined expertise. Our department provides the highest level of care for widely prevalent kidney disorders like diabetic kidney disease, kidney stones, acute renal failure, chronic kidney disease, electrolyte and acid-base abnormalities, critical care nephrology, hemodialysis, peritoneal dialysis and care of renal transplant recipients.</p>\r\n<p style=\"text-align: justify;\">This department is concerned with the diagnosis and treatment of kidney diseases, including electrolyte disturbances and hypertension, and care of those requiring renal replacement therapy, including dialysis and renal transplantation.</p>', 'NEPHROLOGY', 'NEPHROLOGY', '174992987.jpg', '841266799.png', NULL, 'The Department of Nephrology at Garg Hospital is a', NULL),
(18, 'NEUROSCIENCES', 'NEUROSCIENCES', '<p style=\"text-align: justify;\"><strong>The Department of Neurosciences&nbsp;</strong>at Garg Healthcare is amongst our centers of excellence,&nbsp;providing the highest levels of professional expertise and leadership in field of Neurology &amp; Neurosurgery. Department is committed to provide a comprehensive 24&times;7 patient care. The department performs a variety of spine surgeries where even minimally invasive techniques are followed.</p>\r\n<p style=\"text-align: justify;\">The department has attained the expertise in Spinal Surgery, Paediatric Neuro-Surgery, Neuro-Vascular diseases, Skull-base, Neuro-Endoscopy, Functional Neurosurgery and Vascular Neuro-Intervention.</p>', 'NEUROSCIENCES', 'NEUROSCIENCES', '251593149.jpg', '493242255.png', NULL, 'The Department of Neurosciences at Garg Healthcare', NULL),
(19, 'NUTRITION & DIETETICS', 'NUTRITION-AND-DIETETICS', '<p style=\"text-align: justify;\"><strong>The Department of Neurosciences&nbsp;</strong>at Garg Healthcare is amongst our centers of excellence,&nbsp;providing the highest levels of professional expertise and leadership in field of Neurology &amp; Neurosurgery. Department is committed to provide a comprehensive 24&times;7 patient care. The department performs a variety of spine surgeries where even minimally invasive techniques are followed.</p>\r\n<p style=\"text-align: justify;\">The department has attained the expertise in Spinal Surgery, Paediatric Neuro-Surgery, Neuro-Vascular diseases, Skull-base, Neuro-Endoscopy, Functional Neurosurgery and Vascular Neuro-Intervention.</p>', 'NUTRITION & DIETETICS', 'NUTRITION & DIETETICS', '452907357.jpg', '238723026.jpg', NULL, 'The Department of Neurosciences at Garg Healthcare', NULL),
(20, 'OBSTETRICS GYNAECOLOGY', 'OBSTETRICS-GYNAECOLOGY', '<p style=\"text-align: justify;\">The Garg Hospital provides a state of the art facility to ensure comfort to Mother and the baby. At Garg Hospital&nbsp;<strong>department of Obstetrics and Gynaecology</strong>&nbsp;is fully committed to deliver world-class health care services to women looking for gynecological solutions. The primary objective of this Institute is to promote health of women by providing them complete support, care and, empathy that they require.</p>\r\n<p style=\"text-align: justify;\">The department of Obstetrics &amp; Gynaecology looks after only women patients. Obstetrics deals with pregnancy and child birth. An obstetrician gives pre pregnancy counseling, looks after the woman and her baby during pregnancy, helps with child birth and looks after the woman for six weeks after delivery.</p>\r\n<p style=\"text-align: justify;\">A gynaecologist looks after women with diseases of the reproductive system. These include period problems, infections, benign tumours like fibroids and ovarian cysts and cancers.</p>\r\n<p style=\"text-align: justify;\">Women wanting to conceive are looked after by the Reproductive Medicine Unit which will look after the gynaecological problems of these women also.</p>\r\n<p style=\"text-align: justify;\">We have a dedicated team of obstetricians and gynecologists offering a wide range of services. From pre-pregnancy care to childbearing and post-menopausal care, there is a solution for all health concerns a woman experiences during these stages.</p>', 'OBSTETRICS GYNAECOLOGY', 'OBSTETRICS GYNAECOLOGY', '863716682.jpg', '738517225.png', NULL, 'The Garg Hospital provides a state of the art faci', NULL),
(21, 'ONCOLOGY', 'ONCOLOGY', '<p style=\"text-align: justify;\">Welcome to the&nbsp;<strong>Department of Oncology</strong>, a center of excellence in patient care. Our Team in the oncology department is specialists in this field and aims to provide coordinated and holistic care that is focused on the complete needs of the patients. Right from cancer screening, early detection, dialysis &amp; multi-disciplinary treatment to rehabilitation, Garg Hospital provides complete cancer care to patients. Our radiation oncologists specialize in the treatment of all kind of tumors and use state-of-the-art technology to provide compassionate care to patients. We continually strive to advance the field of Radiation Oncology through close collaboration with other Oncologists, Radiologists and our dedication to advancing treatment of all cancers has led to improved outcomes.</p>', 'ONCOLOGY', 'ONCOLOGY', '619725331.png', '58331736.png', NULL, 'Welcome to the Department of Oncology, a center of', NULL),
(22, 'ORTHOPEDICS', 'ORTHOPEDICS', '<p style=\"text-align: justify;\"><strong>Department of Orthopedics</strong>&nbsp;at Garg Hospital aims to provide world-class, evidence-based treatment for various orthopedic disorders and sports injuries. Highly specialized orthopedics medical professionals use the most advanced orthopedic surgery techniques, specializing in all kinds of joint replacement surgeries- hip replacement, knee replacement, shoulder replacement, elbow replacement, etc.</p>\r\n<p style=\"text-align: justify;\">Our team is pioneer in Tricity for Oxford&nbsp;<strong>Partial Knee Replacement</strong>&nbsp;which is advancement from Total Knee Replacement, performing about 20 surgeries every month. Here we are using Rapid Recovery Program for replacement surgeries. With this method patient are mobilized the day of, or the day after surgery.</p>\r\n<p style=\"text-align: justify;\"><strong>Benefits of New techniques use for knee replacement surgery</strong></p>\r\n<ul>\r\n<li style=\"text-align: justify;\">Rapid recovery</li>\r\n<li style=\"text-align: justify;\">Morbidity is less</li>\r\n<li style=\"text-align: justify;\">Fast recover</li>\r\n</ul>', 'ORTHOPEDICS', 'ORTHOPEDICS', '59631973.jpg', '496598979.png', NULL, 'Department of Orthopedics at Garg Hospital aims to', NULL),
(23, 'PHYSIOTHERAPY', 'PHYSIOTHERAPY', '<p style=\"text-align: justify;\"><strong>The Department of Physiotherapy</strong>&nbsp;at Garg Hospitals provides&nbsp;<strong>a comprehensive range of services to help patients prevent injury, recover both function and strength and manage pain.</strong>&nbsp;Our trained physiotherapists use the best equipment and technology to treat patients with varying physical conditions.</p>\r\n<p style=\"text-align: justify;\">&nbsp;An essential aspect of physiotherapy treatment is rehabilitation, which may be required to re-educate an individual and enable them to safely return to their normal life. It aims at maximizing the functional potential of an individual following a disease or injury.</p>', 'PHYSIOTHERAPY', 'PHYSIOTHERAPY', '120878299.jpg', '376804445.png', NULL, 'The Department of Physiotherapy at Garg Hospitals ', NULL),
(24, 'PLASTIC SURGERY', 'PLASTIC-SURGERY', '<p style=\"text-align: justify;\"><strong>The Department of Plastic, Reconstructive &amp; Cosmetic Surgery</strong>&nbsp;at Garg Healthcare is a state of the art ultra-modern facility that provides tertiary level care in all disciplines of plastic surgery with an objective of providing wholesome care to our patients. Our plastic surgeon is supported by cutting edge technology is committed to providing patients with the best possible care and unparalleled results. A highly qualified and experienced staff understands specific needs and concerns of plastic surgery patients and delivers excellent service with compassion and care.</p>\r\n<p style=\"text-align: justify;\">&nbsp;Department of Plastic, Reconstructive &amp; Cosmetic Surgery offer expertise covering all aspects of Plastic Surgery such as Aesthetic Surgery, Craniofacial surgery, Hand Surgery, Reconstructive Microsurgery, Burns and General Plastic Surgery.</p>\r\n<p style=\"text-align: justify;\">&nbsp;This department Is a super specialized branch that is concerned with enhancement of looks, correction of deformities as well as repair of functional deficits .Plastic surgery can be broadly divided into AESTHETIC (COSMETIC), RECONSTRUCTIVE, BURNS AND TRAUMA MANAGEMENT. It has been rightly said that beauty lies in the eyes of the beholder ,but in this era of medical and cosmetic boom ,a plethora of procedures can be done for ageing face and body contouring. Procedures like Rhinoplasty ( nose job), Abdominoplasty (tummy tuck ),Breast enhancement , face Lift ,liposuction and body contouring can boost your self confidence and enhance your looks.</p>\r\n<p style=\"text-align: justify;\">Hair Restoration has shaped up in a big way in INDIA. Even foreign clients are also making use of these services at affordable prices.</p>', 'PLASTIC SURGERY', 'PLASTIC SURGERY', '3579720.jpg', '22972414.png', NULL, 'The Department of Plastic, Reconstructive & Cosmet', NULL),
(25, 'PSYCHIATRIC-UNIT', 'PSYCHIATRIC UNIT', '<p style=\"text-align: justify;\"><strong>The Department of Psychiatry</strong>&nbsp;provides comprehensive care for a wide spectrum of psychiatric disorders &amp; psychological problems. The highlight of Psychiatric Unit is providing services in the area of Psychiatric / Mental Illness, Sexual Disorder &amp; Drug De-Addiction (all type of drugs). The department also providing counseling to children with various developmental disorders, emotional problems and learning &amp; scholastic difficulties.</p>\r\n<p style=\"text-align: justify;\">&nbsp;The department also has excellent liaison services with the other medical and surgical departments for the interdisciplinary management of psychosomatic (mental/emotional) disorders. This includes counseling services for surgical cases and the management of psychiatric co-morbidity in patients with physical disorders.</p>', 'PSYCHIATRIC UNIT', 'PSYCHIATRIC UNIT', '891623683.jpg', '202575342.png', NULL, 'The Department of Psychiatry provides comprehensiv', NULL),
(26, 'UROLOGY', 'UROLOGY', '<p style=\"text-align: justify;\"><strong>The department of Urology</strong>&nbsp;is amongst our centers of excellence, dedicated to providing state-of-the-art medical and surgical care in all aspects of adult and pediatric urology. We provide patient oriented management of cancer and benign urological diseases by integrating and leveraging our combined expertise.</p>\r\n<p style=\"text-align: justify;\">Urology is expanding at a tremendous pace due to rapid technological advancements. It has seven -divisions, hence complete urology cannot be handled by a single urologist. An advanced urology center should have a group of urologists with further sub-specialized expertise , covering the entire gamut of urology i.e. Endo &ndash; urology, onco- Urology, Pediatric &ndash; Urology, Uro- Gynaecology, Neuro- Urology, Andrology, Laproscopist &amp; kidney transplant surgeon. The center performs advanced surgical procedures which include the most current surgical and reconstructive techniques. Our team of highly experienced surgeons are supported by the most advanced medical equipment, computer navigation and imaging equipment.</p>', 'UROLOGY', 'UROLOGY', '329636048.jpg', '496986064.png', NULL, 'The department of Urology is amongst our centers o', NULL);

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
  `cat_id` int(11) DEFAULT NULL,
  `mon` int(11) DEFAULT NULL,
  `tue` int(11) DEFAULT NULL,
  `wed` int(11) DEFAULT NULL,
  `thu` int(11) DEFAULT NULL,
  `fri` int(11) DEFAULT NULL,
  `sat` int(11) DEFAULT NULL,
  `sun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `post`, `img`, `team_desc`, `cat_id`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`, `sun`) VALUES
(9, 'Jonathan Barnes D.M.', 'Chief Medical Officer', '463070491.jpg', '<p style=\"text-align: justify;\">Donec vel sapien augue integer turpis cursus porta, mauris sed augue luctus magna dolor luctus ipsum neque</p>', NULL, 1, 1, 1, 1, 1, 0, 0);

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
(3, 'Krishan Kumar', 'Good', '<p>Perfect hospital for DENGUE treatment, Nice Canteen staff and excellent food quality.</p>', '342695105.png'),
(4, 'UPINDER MITTAL', 'Good', '<p>Best super speciality hospital across the town.Doctor\'s are co-operative.</p>', '976960879.png'),
(5, 'Jaswinder Choudhary', 'Good', '<p class=\"lead\" style=\"text-align: center;\">Good Staff and clean .... feel happy donating blood.Grate hospital&nbsp; in moga .</p>', '553843133.png');

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
(1, 'Clinic with Innovative Approach to Treatment', '722455638.jpeg', '<p style=\"text-align: justify;\">An enim nullam tempor sapien gravida donec pretium ipsum porta justo integer at odio velna vitae auctor integer congue magna purus pretium ligula rutrum luctus ultrice aliquam a augue suscipit</p>\r\n<p style=\"text-align: justify;\">Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor lacinia cubilia curae integer congue leo metus, eu mollislorem primis in orci integer metus mollis faucibus. An enim nullam tempor sapien gravida donec pretium and ipsum porta justo integer at velna vitae auctor integer congue</p>');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
