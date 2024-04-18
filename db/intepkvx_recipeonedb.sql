-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2024 at 07:57 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intepkvx_recipeonedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `email` char(50) NOT NULL,
  `username` char(30) NOT NULL,
  `role` char(20) NOT NULL DEFAULT 'CEO',
  `password` char(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Deliciousfood Admin', 'deladmin@mail.com', 'deliciousadmin', 'C.E.O', 'del123', '2023-12-15 11:42:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `chef_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `chef_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 8, 'Pasta', '1712567950_4768.png', '2024-04-08 04:49:27', '0000-00-00 00:00:00'),
(2, 8, 'Vegan', '1712562489_5778.png', '2024-04-08 07:48:09', '0000-00-00 00:00:00'),
(3, 8, 'Desserts', '1712573772_6518.png', '2024-04-08 10:56:12', '0000-00-00 00:00:00'),
(4, 8, 'Smoothies', '1712583761_3352.png', '2024-04-08 13:42:41', '0000-00-00 00:00:00'),
(9, 8, 'Cakes', '1712648065_5766.jpeg', '2024-04-09 07:34:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Del Seller', 'delfood@mail.com', 'password', '2024-04-08 08:58:50', '0000-00-00 00:00:00'),
(8, 'chef dammy', 'dammy@mail.com', 'password', '2024-04-09 07:20:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text NOT NULL,
  `preparation_time` text NOT NULL,
  `servings` text DEFAULT NULL,
  `instructions` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ingredients` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `category_id`, `name`, `description`, `image`, `preparation_time`, `servings`, `instructions`, `created_at`, `updated_at`, `ingredients`) VALUES
(1, 8, 4, 'Cream Cake', '<h5><span style=\"font-family: Inter, sans-serif; font-size: 20px;\">One thing I learned living in the Canarsie section of Brooklyn, NY was how to cook a good Italian meal. Here is a recipe I created after having this dish in a restaurant. Enjoy!</span></h5>', 'r33.jpeg', '12hrs', '23', '<div class=\"single-preparation-step d-flex\">\n                            <h4>01.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>\n                        <div class=\"single-preparation-step d-flex\">\n                            <h4>02.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>\n                        <div class=\"single-preparation-step d-flex\">\n                            <h4>03.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>\n                        <div class=\"single-preparation-step d-flex\">\n                            <h4>04.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>', '2024-04-08 10:29:12', '0000-00-00 00:00:00', ' <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">\n                                <label class=\"custom-control-label\" for=\"customCheck1\">4 Tbsp (57 gr) butter</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck2\">\n                                <label class=\"custom-control-label\" for=\"customCheck2\">2 large eggs</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck3\">\n                                <label class=\"custom-control-label\" for=\"customCheck3\">2 yogurt containers granulated sugar</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck4\">\n                                <label class=\"custom-control-label\" for=\"customCheck4\">1 vanilla or plain yogurt, 170g container</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck5\">\n                                <label class=\"custom-control-label\" for=\"customCheck5\">2 yogurt containers unbleached white flour</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck6\">\n                                <label class=\"custom-control-label\" for=\"customCheck6\">1.5 yogurt containers milk</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck7\">\n                                <label class=\"custom-control-label\" for=\"customCheck7\">1/4 tsp cinnamon</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck8\">\n                                <label class=\"custom-control-label\" for=\"customCheck8\">1 cup fresh blueberries </label>\n                            </div>'),
(2, 8, 3, 'Sponge Cake', '<h5><span style=\"font-family: Inter, sans-serif; font-size: 20px;\">One thing I learned living in the Canarsie section of Brooklyn, NY was how to cook a good Italian meal. Here is a recipe I created after having this dish in a restaurant. Enjoy!</span></h5>', 'r11.jpeg', '7hrs', '40', '<div class=\"single-preparation-step d-flex\">\n                            <h4>01.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>\n                        <div class=\"single-preparation-step d-flex\">\n                            <h4>02.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>\n                        <div class=\"single-preparation-step d-flex\">\n                            <h4>03.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>\n                        <div class=\"single-preparation-step d-flex\">\n                            <h4>04.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>', '2024-04-08 10:29:12', '0000-00-00 00:00:00', ' <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">\n                                <label class=\"custom-control-label\" for=\"customCheck1\">4 Tbsp (57 gr) butter</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck2\">\n                                <label class=\"custom-control-label\" for=\"customCheck2\">2 large eggs</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck3\">\n                                <label class=\"custom-control-label\" for=\"customCheck3\">2 yogurt containers granulated sugar</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck4\">\n                                <label class=\"custom-control-label\" for=\"customCheck4\">1 vanilla or plain yogurt, 170g container</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck5\">\n                                <label class=\"custom-control-label\" for=\"customCheck5\">2 yogurt containers unbleached white flour</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck6\">\n                                <label class=\"custom-control-label\" for=\"customCheck6\">1.5 yogurt containers milk</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck7\">\n                                <label class=\"custom-control-label\" for=\"customCheck7\">1/4 tsp cinnamon</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck8\">\n                                <label class=\"custom-control-label\" for=\"customCheck8\">1 cup fresh blueberries </label>\n                            </div>'),
(3, 8, 4, 'Mousse Cake', '<h5><span style=\"font-family: Inter, sans-serif; font-size: 20px;\">One thing I learned living in the Canarsie section of Brooklyn, NY was how to cook a good Italian meal. Here is a recipe I created after having this dish in a restaurant. Enjoy!</span></h5>', 'r22.jpeg', '2hrs', '30', '<div class=\"single-preparation-step d-flex\">\n                            <h4>01.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>\n                        <div class=\"single-preparation-step d-flex\">\n                            <h4>02.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>\n                        <div class=\"single-preparation-step d-flex\">\n                            <h4>03.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>\n                        <div class=\"single-preparation-step d-flex\">\n                            <h4>04.</h4>\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>\n                        </div>', '2024-04-08 10:29:12', '0000-00-00 00:00:00', ' <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">\n                                <label class=\"custom-control-label\" for=\"customCheck1\">4 Tbsp (57 gr) butter</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck2\">\n                                <label class=\"custom-control-label\" for=\"customCheck2\">2 large eggs</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck3\">\n                                <label class=\"custom-control-label\" for=\"customCheck3\">2 yogurt containers granulated sugar</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck4\">\n                                <label class=\"custom-control-label\" for=\"customCheck4\">1 vanilla or plain yogurt, 170g container</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck5\">\n                                <label class=\"custom-control-label\" for=\"customCheck5\">2 yogurt containers unbleached white flour</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck6\">\n                                <label class=\"custom-control-label\" for=\"customCheck6\">1.5 yogurt containers milk</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck7\">\n                                <label class=\"custom-control-label\" for=\"customCheck7\">1/4 tsp cinnamon</label>\n                            </div>\n\n                            <div class=\"custom-control custom-checkbox\">\n                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck8\">\n                                <label class=\"custom-control-label\" for=\"customCheck8\">1 cup fresh blueberries </label>\n                            </div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
