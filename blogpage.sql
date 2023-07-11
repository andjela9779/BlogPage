-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 12:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `content`) VALUES
(1, 'This environmentally conscious smartphone is finally coming to the US', 'The Fairphone 4 — a user-repairable smartphone built using ethically sourced materials — is finally coming to the US, almost two years after it first debuted back in September 2021. Well, sort of anyway. Fairphone is partnering with Murena, a company best known for de-Googling Android phones, to launch the US pilot of the Murena Fairphone 4 — a variant of the handset that runs on a privacy-oriented Android-based operating system: /e/OS.\r\n\r\nThere are two configurations available: one with 6GB of RAM and 128GB of storage for $599 and another with 8GB of RAM and 256GB of storage for $679. The storage of both models can be expanded via microSD, and the phone features a modular design that can be easily disassembled using a standard Phillips #00 screwdriver to replace broken components. It also has an IP54 rating, meaning the device is protected against dust and water sprays.\r\nThe Murena Fairphone 4 will ship to US customers with 5G and dual SIM support, a removable 3905mAh battery, a 48-megapixel main camera, a 48-megapixel ultrawide, and a 25-megapixel selfie camera. The phones will be available to order exclusively from Murena’s webstore starting today. \r\n\r\nThe Murena Fairphone 4 also comes with the /e/ operating system preinstalled, which is described as a privacy-focused, Google-free mobile ecosystem for folks who want to avoid handing any data over to the search giant. Instead of the usual Google apps, the Fairphone 4 will come with a range of default Murena Cloud apps for things like email, calendar, and cloud storage as well as a dedicated app store that highlights the privacy ratings of each app to help users monitor how their online activity is being tracked.'),
(2, 'Porsche is updating how CarPlay works in its cars, adding climate controls and more', 'Porsche is releasing an iPhone app update that gives drivers a taste of what future CarPlay can look like — including new buttons for climate, interior lighting, and other controls.\r\n\r\nThe automaker’s My Porsche iOS app connects with the car after scanning a QR code inside the vehicle’s infotainment system, which is known as Porsche Communication Management or PCM. Upon connecting, third-party software (like Apple Music) in Porsche’s infotainment system can link accounts with the iPhone.\r\n\r\nAnd for the company’s electric vehicles, the CarPlay interface will also be able to display the battery state of charge — which would go great with a recent Taycan software update that supports Apple Maps’ EV routing feature.\r\n\r\nIn its current form, CarPlay hasn’t reached its full potential. Apple is planning to make a version that can fully take over vehicles’ infotainment and cluster screens but has only gone as far as including Maps projection in Polestar vehicles. Meanwhile, Polestar, Ford, and many others are choosing to run Google’s Android Automotive platform underneath.\r\n\r\nBut Porsche’s CarPlay integration is showing a hint of what a total Apple in-car solution could look like. Quick actions like warming up the car within the CarPlay interface, as well as changing sound profiles, are examples of how Porsche seems to be embracing an Apple solution. Porsche has been a fan of Apple’s software in the past, including being an early adopter of CarPlay, and including Apple Podcasts as its native podcast app.\r\n\r\nThe new My Porsche app CarPlay experience is available now for owners of the new Porsche Cayenne but will be rolled out to other models as well. Don’t count on it working in your vintage Boxster, though.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
