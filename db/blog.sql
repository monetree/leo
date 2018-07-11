-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2018 at 09:29 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_blogcats`
--

CREATE TABLE `admin_blogcats` (
  `id` int(11) NOT NULL,
  `blog_cat_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_blogcats`
--

INSERT INTO `admin_blogcats` (`id`, `blog_cat_name`) VALUES
(1, 'OS'),
(2, 'programming'),
(3, 'technology'),
(4, 'Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `admin_blogpost`
--

CREATE TABLE `admin_blogpost` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(60) NOT NULL,
  `blog_type` varchar(60) NOT NULL,
  `blog_content` longtext NOT NULL,
  `blog_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_file` varchar(100) DEFAULT NULL,
  `blog_cat_name` varchar(60) NOT NULL,
  `tag_name` varchar(60) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_author` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_blogpost`
--

INSERT INTO `admin_blogpost` (`blog_id`, `blog_title`, `blog_type`, `blog_content`, `blog_added`, `blog_file`, `blog_cat_name`, `tag_name`, `youtube_link`, `meta_description`, `meta_keywords`, `meta_author`) VALUES
(16, 'Django Mongodb SetUp', 'Programming,Tutorial', 'requirements: <b>pip install djongo</b> \n<p><b>Add these code inside your seetings.py by replacing default sqlite3 connection.</b></p> \n<pre style="background:#f0f4f7;border:none;padding:10px;"> \n\nDATABASES = { \n   \'default\': {   \n       \'ENGINE\' : \'djongo\', \n       \'NAME\'   : \'dbname\',  <span style="color:lightgrey;"><small>#database name here</small></span>    \n  }\n} \n \n </pre>\n      <p>You can get Mongodb from <a href="https://www.mongodb.com/download-center">Here</a>..</p> \n       <p> <b>Note: </b>Make Sure That you are using python verion 3.6 or later .. because, older versions of python are not compartable with djongo(The engine we are using to connect mongodb with django) engine. </p>  \n       <p style="color:grey"> Still having problem go for this above tutorial.. </p>', '2018-06-02 18:25:09', '', 'technology', 'programming,learning,django,python,mongodb,mongodb,setup', 'https://www.youtube.com/embed/DDt9VdTR_rg', 'Seo description', 'Seo Keywords', 'Sobhagya Kumar'),
(20, 'Top Ten Programming Languages In 2018', 'Trending,Education', '<h3>1.Python</h3>\n<p>Python is the most popular and trending language in this decade because it its beauty structure and bulkness with excelent\n   performance. IEEE spectrum has also been declared the same We are discussing here.companies like google,nasa,facebook are\n    also using python.And python having dynamic and large frameworks like django who is supercool by itself.if you go for\n    machine learing ,artificial inteligency and data science python is the best one to choose.Ofcourse some peoples are using\n     R language for the same but, still python is best for these stuffs for is official support.You can find the official website of python from <a href="https://www.python.org/">here</a></p>\n<h3>2.Java</h3>\n<p>Java ruled the it market for more than 15 years by staying at the top before python was popular.\njava is famous for its securuty. Because java wriiten purely in object oriented style(Defining a class if mandate).\ncompanies like google,facebook,amazon are using java. Apart from that the gmail engine,and amazon search engine has been developed using java.\nJava is more popular for android because, java is the only one choice to to built android native apps.\n</p>\n<h3>3.C/C++</h3>\n<p>Opcourse it is an old school language but, C/C++ is again comes with object oriented style and it is popular for its perfomance. It is the best choice for built games and desktop applications.\ncompanies like sony is using c++ to butilt playstation games.The most popular playstation games like god of war,wwe,devol may cry has been developed using c++. And not even\nPlaystation games but also desktop games like farcry3,farcry 4 and battelfields has been deveoped using c++. when we cames to software development applications like photoshop,after effect,adobe premeure pro are also deveoped using c/c++. </p>\n<h3>4.Javacsript</h3>\n<p>Here comes the champ.if there is no javascript then there is not we development. javascript is every where to built any weblication\nno matter it is small or big.Even if websites like google and youtube won\'t work properly if you disable the javascript from your\nbrowser setting by going to developer option.css will give beauty to your website but, javascript make your website look beatify along with dynamic.\nThere are more than 20+ frameworks available for javascript. angular js,react js and vue js are some of them. angular is using and maintaing by google while react js is by facebook.\nNot it is also possible to built cross platform mobile application using javascript frameworks like react native and react js. which means\nwrite once pulish for many platforms.Javscript shold be at more top but the limitation is it is client side language and can\'t communicate with database.</p>\n<h3>5.Php</h3>\n<p>Php is one of the most usning language for web developement projects because of its performance and its good way to interact with client side languages.Php provides best perfomance like python\nbecause it is purely scripting language. In previus time php was not popular enough but, it started dominating the it market from 2005. because it is the yesr when php introduced\nobject oriented programming language.then there was not frameworks available for for php before 2005 and later ellis lab declared one one\nframework names <b>Codeigniter</b> Which is purely written in object oriented style. And now also 90% of projects are developing using codeigniter.Apart from that\nsome other frameworks like laraval,symphony,yii are also avilable. Companies like facebook,yahoo are using php.</p>\n<h3>6.C#</h3>\n<p>When you heared about c# MICROSOFT comes in to out mind.It is a new and mondern language in market using by companies like microsoft and yes it has been created by them only.\nApplicatons like ms word,excel,skype has been developed by using c# and to created xbox games and microsoft mobiles the are also using the same.\nBut c# is not that much popular like python and java because of its poor perfomance but it comes with high security and large library.\n</p>\n<h3>7.Ruby</h3>\n<p>A dynamic, open source programming language with a focus on simplicity and productivity. It has an elegant syntax that is natural to read and easy to write.\ncompanies like github,ask.com,slide share are usning Ruby.Ruby is more famous for it no1. framework <a href="https://rubyonrails.org/">rubyonrails</a>\n(Web development framework) which is at the no1. framework from\nlast few years.</p>\n<h3>8.R</h3>\n<p>R is a old language like java and python but now it comes to the trending ranks because of maching learning and artificial inteligency.\nBecause AI and ML are the most trening technologies in market right now. Some examples of AI and ML are face recognition,speech recognition,\ntext to speech,dynamic search engine,recommended engine etc..</p>\n<h3>9.Swift</h3>\n<p>Swift is a general-purpose, multi-paradigm, compiled programming language developed by Apple Inc. for iOS, macOS, watchOS, tvOS, and Linux.\nSwift is the replacement objective c for developing ios applications.Previously there was only one choice to native ios apps and that was objective c .Now 90% of developers are using swift and most of the freelancing projects are coming for swift only.\n</p>\n<h3>10.Go</h3>\n<p>Go is a new language created by google(Robert Griesemer, Rob Pike, and Ken Thompson) in 2009.it is Strong, static, inferred, structural language. It has been wriiten in c and assembly language.\nIt is also used in web development purpose.It is not that much popular in market but still is is a trending technology write now.\nyou can find more about golang from <a href="https://golang.org/">here</a></p>\n', '2018-06-03 07:10:35', '99463.jpg', 'Education', 'Education', '', 'Top Ten Trending Programming Languages In 2018', 'top ten, top ten programming languages in 2018,php,python,ruby,javascript,swift,r,j,machine learning,artificial inteligency,monetimes,Top ten programming languafge in india,Top ten programming languafge in usa,best language for web development', 'Sobhagya Kumar'),
(22, 'Run Python In Web Server', 'Programming,Tutorial', '<pre>\n\nstep1:\n      download xampp from <a href="https://www.apachefriends.org/index.html">here</a>\n\nstep2:\n      download by choosing your platform.\n\nstep:3\n      Move to your lampp/xampp directory\n          linux path   :/opt/lampp/\n          windows path :C:\\xampp\\\n\nstep4:\n      Search for -> <b>httpd.conf</b>\n      Inside that file again search for addhandler you can find\n      some extensions overthere add one more extension called\n      .py(For Python)\n\nstep5:\n      Inside htdocs create one .py(python) file and paste\n       the below code.\n\nstep6:\n     Run In Browser: localhost/file.py\n\n</pre>\n  <p><b>Note: Path of python as per os.</b></p>\n  <p>linux   :   #!/usr/bin/python : python path for linux</p>\n  <p>windows :   #!c:\\python : python path for windows</p>\n<br>\n\n<pre>\n#!/usr/bin/python\nimport cgi, cgitb\nform = cgi.FieldStorage()\nfirst_name = "hello"\nlast_name  = "World"\nprint "Content-type:text/html\\r\\n\\r\\n"\nprint "&lt;html&gt;"\nprint "&lt;head&gt;"\nprint "&lt;title&gt;Hello - Second CGI Program&lt;/title&gt;"\nprint "&lt;/head&gt;"\nprint "&lt;body&gt;"\nprint "&lt;h2 style=\'color:red;text-shadow:5px 5px 20px;\'&gt; %s %s&lt;/h2&gt;"\n % (first_name, last_name)\nprint "&lt;/body&gt;"\nprint "&lt;/html&gt;"\n</pre>\n<p><b>Note:</b>If You are using linux some chmod permissions is required so, better to go for above video.</p>\n', '2018-06-03 08:34:23', '', 'Programming', 'programming,education,python,xampp,apache', 'https://www.youtube.com/embed/2gj2OtObSfU', 'How To Run Python In Web Server', 'python,php,xampp,lampp,run python in web server,how to run python in web server,run python in web browser,python run with apache', 'Sobhagya Kumar'),
(23, 'Python Text To Speech App', 'programming', '<p>Requirements: </p>\r\n<pre>\r\n    pip install pyttsx3\r\n    pip install speechrecognition\r\n    sudo apt-get install portaudio19-dev\r\n    pip install pyaudio\r\n</pre>\r\n\r\n<p>Source code</p>\r\n<pre>\r\n  import pyttsx3\r\n  import speech_recognition as sr\r\n  r = sr.Recognizer()\r\n  with sr.Microphone() as source:\r\n  	print(\'say something\')\r\n  	audio  = r.listen(source)\r\n  engine = pyttsx3.init()\r\n  engine.say(r.recognize_google(audio))\r\n  engine.runAndWait()\r\n</pre>', '2018-06-03 09:04:20', '', 'python,Artificial Inteligency', 'Artificial Intelligence,machine learning,python', 'https://www.youtube.com/embed/HmoK8xsIXpI', 'Built Text To Speech Application Using Python', 'Artificial Intelligence,machine learning,python,python text to speech app,speech recognition,python speech recgnition,machine lrearning tspeech recognition', 'Sobhagya Kumar'),
(24, 'Php Virtualhost Setup ', 'os, technology,education', '<p><b>Step1:</b> create project folder inside <p class="text-danger"><b>var/www/html</b></p>\n<p><b>Step2:</b> <kbd>sudo nano /etc/apache2/sites-available/000-default.conf</kbd></p>\n<p><b>Step3:</b></p>\n<pre>\n      &lt;VirtualHost *:80&gt;\n      ServerName yoursite.com\n      DocumentRoot /var/www/html/muvi\n      &lt;/VirtualHost&gt;\n</pre>\n<p><b>Step4:</b></p>\n<p>Put there code inside <p class="text-danger"><b>000-default.conf</b></p></p>\n<p><b>Step5:</b></p>\n<p><kbd>sudo nano /etc/hosts</kbd></p>\n<p class="text-danger"><b>127.0.0.1   yoursite.com</b></p>\n<p>Put this line of code in <b>hosts</b></p>\n<p><b>Step6:</b>Finally Run server by using this command</p>\n<p><kbd>sudo systemctl restart apache2.service</kbd></p>', '2018-06-03 09:27:36', '', 'os,server,technology', 'os,technology', 'https://www.youtube.com/embed/ymxz9QHnPGA', 'Php Virtualhost Setup Locally in system', 'php virtualhost setup,php virtualhost setup locally.\r\nphp virtualhost setup locally in linux.\r\nphp virtualhost setup locally in windows.\r\nphp virtualhost setup locally in ubuntu.php,virtualhost,php virtualhost setup,apache virtualhost setup,virtualhost setup in apache server', 'Sobhagya Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `admin_blogtags`
--

CREATE TABLE `admin_blogtags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_blogtags`
--

INSERT INTO `admin_blogtags` (`id`, `tag_name`) VALUES
(1, 'python'),
(2, 'Php'),
(3, 'Linux'),
(4, 'Ubuntu');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('admin@monetimes.com', 'Thinkonce');

-- --------------------------------------------------------

--
-- Table structure for table `blog_seo`
--

CREATE TABLE `blog_seo` (
  `blog_seo_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `author` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_seo`
--

CREATE TABLE `home_seo` (
  `home_seo_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `author` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_seo`
--

INSERT INTO `home_seo` (`home_seo_id`, `description`, `keywords`, `author`) VALUES
(1, 'Find Trending Technology Stuff, Programming Languages, operating system, Business Ideas And Many More.', 'HTML,CSS,XML,JavaScript,json,php,python,django,codeigniter,laravel,yii,rest api,rest framework,machine learning,artificial intelligence,deep learning,Cms analytics,ecommerce,codes,frameworks,programming languages,sql,mysql,mongodb,pymongo,angular js,jquery,learning,programming languages,django tutorial,php tutorial,angular js,sqlite,ubuntu,linux,github,uoutube,facebooktwitter,react js,vue js', 'sobhagy kumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_blogcats`
--
ALTER TABLE `admin_blogcats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_blogpost`
--
ALTER TABLE `admin_blogpost`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `admin_blogtags`
--
ALTER TABLE `admin_blogtags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_seo`
--
ALTER TABLE `home_seo`
  ADD PRIMARY KEY (`home_seo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_blogcats`
--
ALTER TABLE `admin_blogcats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin_blogpost`
--
ALTER TABLE `admin_blogpost`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `admin_blogtags`
--
ALTER TABLE `admin_blogtags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `home_seo`
--
ALTER TABLE `home_seo`
  MODIFY `home_seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
