

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `certification`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2019-09-05 01:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, '273 Taum Street, Christchurch- New Zealand																							', 'info@everestfood.co.nz', '0226509326');

-- --------------------------------------------------------

--
-- Table structure for table `contactusform`
--

CREATE TABLE `contactusform` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactusform`
--

INSERT INTO `contactusform` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(2, 'Vijay Maharjan', 'vijaymaharjan911@gmail.com', '0226509326', 'hello ', '2019-09-05 15:01:30', 1),
(3, 'Vijay Maharjan', 'vijaymaharjan911@gmail.com', '14455211555', 'test message. heklloposalmfl;kasdhvon;sdfgvas', '2019-09-06 01:36:14', 1),
(4, 'Vijay Maharjan', 'vijaymaharjan911@gmail.com', '0226509326', 'hello ', '2019-09-06 11:38:46', NULL);

-- --------------------------------------------------------


CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '										<p align=\"justify\"><br></p>\r\n										'),
(2, 'Privacy Policy', 'privacy', ''),
(3, 'About Us ', 'aboutus', '																																																																																																																																																																										<p style=\"text-align: justify;\"><span style=\"font-family: arial; font-size: medium;\">Everest Restaurants offers Nepali-style food and a wide variety of dishes. Everest Restaurants provides a memorable meal for our customers with its warm service in a casual atmosphere.</span></p><h2><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-weight: bold; font-size: x-large;\">Our Mission</span></h2><div><span style=\"font-family: &quot;comic sans ms&quot;;\"><span style=\"color: rgb(0, 0, 0); font-size: 1em; text-align: justify;\">To delight and nourish our customers with healthy, quality and delicious food and excellent service at a reasonable price.</span><br><span style=\"color: rgb(0, 0, 0); font-size: 1em; text-align: justify;\">To understand our customer’s changing needs and constantly improve our customer experience.</span><br><span style=\"color: rgb(0, 0, 0); font-size: 1em; text-align: justify;\">To generate a sustainable profit growth for our company’s shareholders.</span><br></span></div><div><div><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span></div><h2><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: x-large; font-weight: bold;\">Our Vision</span></h2><div><span style=\"color: rgb(0, 0, 0); text-align: center; font-size: 1em; font-family: &quot;comic sans ms&quot;;\">To serve happiness to our customers through delicious, quality meals and extraordinary restaurant experience while working toward the greater good for our employees, community and environment.</span><br></div></div>\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										\r\n										'),
(11, 'FAQs', 'faqs', '																																								<span style=\"color: rgb(0, 0, 0); text-align: justify; font-family: &quot;comic sans ms&quot;;\">This </span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">is <span style=\"font-size: 14px; text-decoration-line: underline;\">FAQ </span><span style=\"font-size: x-large;\">Section</span></span>');

-- --------------------------------------------------------


-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactusform`
--
ALTER TABLE `contactusform`
  ADD PRIMARY KEY (`id`);



--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactusform`
--
ALTER TABLE `contactusform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

