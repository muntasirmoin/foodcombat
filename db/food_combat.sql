-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 12:14 PM
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
-- Database: `food_combat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `admin_img`) VALUES
(24, 'ashraf@gmail.com', '12345678', 'Ashraf Rahman', '01762557708', 'images/userimg/ashrf.jpg'),
(26, 'muntasir@gmail.com', '12345678', 'Muntasir Moin Chowdhury', '01768968938', 'images/userimg/mun2.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `contact_message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_name`, `contact_email`, `contact_number`, `contact_message`, `status`) VALUES
(1, 'Muntasir Moin Chowdhury', 'muntasir@gmail.com', '01768968938', 'can you suggest me which food is best?', 1),
(17, 'Radbin', 'radbin@gmail.com', '01700000000', 'Please Please give your menu list, which food available now?', 1),
(18, 'Rakin', 'rakin@gmail.com', '01700000000', 'good service!', 1),
(19, 'Akif', 'akif@gmail.com', '01768968938', 'good service!', 1),
(20, 'Atik', 'atik@gmail.com', '013456987', 'which food available now?', 1),
(21, 'Amir Ali', 'amirali@gmail.com', '01732145687', 'which food available now?', 1),
(22, 'Nayeeb', 'nayeeb@gmail.com', '01378965432', 'which food available now?', 1),
(23, 'Ashraf Ali', 'ashraf@gmail.com', '01478965432', 'good service!', 1),
(24, 'Imad', 'imad@gmail.com', '0179845621', 'Bad service!', 1),
(25, 'Yamin', 'yamin@gmail.com', '01632165478', 'good service!', 1),
(26, 'Ashik', 'ashik@gmail.com', '0142365987', 'Please Please give your menu list!', 0),
(27, 'Rabib', 'rabib@gmail.com', '01478965412', 'Please Please give your menu list!', 0),
(28, 'Sakif', 'sakif@gmail.com', '01332165479', 'hope next time get a good service!', 0),
(29, 'Amir Ahmed', 'amira@gmail.com', '01762557708', 'Good Service!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE `food_item` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`food_id`, `food_name`, `food_price`) VALUES
(1, 'Special Wonthon', '150 tk'),
(2, 'Chicken Wonthon', '140 tk'),
(3, 'Beef Wonthon', '140 tk'),
(4, 'Prown Wonthon', '150 tk'),
(5, 'Spring Roll', '120 tk'),
(6, 'Chicken Roll', '120 tk'),
(7, 'Egg Roll', '110 tk'),
(8, 'Chime Spring Roll', '120 tk'),
(9, 'Chicken Cutlet', '140 tk'),
(10, 'Prawn Cutlet', '150 tk'),
(11, 'Beef Cutlet', '140 tk'),
(12, 'French Fry', '120 tk'),
(13, 'American Chopsvey', '250 tk'),
(14, 'Chicken Toast', '120 tk'),
(15, 'Prawn Toast', '140 tk'),
(16, 'Vegatable toast', '100 tk'),
(17, 'Beef Toast', '120 tk'),
(18, 'Chicken Chowmein', '190 tk'),
(19, 'Beef Chowmein', '200 tk'),
(20, 'Egg Chowmein', '170 tk'),
(21, 'Vegetable Chowmein', '140 tk'),
(22, 'Prown Tomato Chowmein', '220 tk'),
(23, 'American Chowmein', '240 tk'),
(24, 'Special Chowmein', '240 tk'),
(25, 'Chicken Vegetable Soup', '180 tk'),
(26, 'Special Soup', '240 tk'),
(27, 'Thai Soup', '220 tk'),
(28, 'Chicken Corn Soup', '180 tk'),
(29, 'Prawn Corn Soup', '200 tk'),
(30, 'Vegetable Soup', '160 tk'),
(31, 'Special Corn Soup', '240 tk'),
(32, 'Special Rice', '230 tk'),
(33, 'Chicken Rice', '200 tk'),
(34, 'Vegetable Rice', '160 tk'),
(35, 'Prawn Rice', '220 tk'),
(36, 'Beef Rice', '210 tk'),
(37, 'Egg Rice', '170 tk'),
(38, 'Steam Rice', '80 tk'),
(39, 'Special Chicken Fry', '360 tk'),
(40, 'Chicken Mosalla', '320 tk'),
(41, 'Chicken Jul Fry', '320 tk'),
(42, 'Peaking Chicken', '350 tk'),
(43, 'Chicken Chilles dry', '340 tk'),
(44, 'Beef Hot fry', '340 tk'),
(45, 'Beef Curri', '320 tk'),
(46, 'Beef Chilles indian', '300 tk'),
(47, 'Beef Chilles Dry', '320 tk'),
(48, 'Prawn Garlic', '300 tk'),
(49, 'King Prawn Jhal Fry', '380 tk'),
(50, 'Prawn Jhal Fry', '340 tk'),
(51, 'Fried Prawn Boll', '300 tk'),
(52, 'King Prawn Butter fly', '360 tk'),
(53, 'Finger Prawn', '330 tk'),
(54, 'Bual Fish', '200 tk'),
(55, 'Elish Fish', '350 tk'),
(56, 'Rui Fish', '150 tk'),
(57, 'Pabda Fish', '190 tk'),
(58, 'Koi Fish', '80 tk'),
(59, 'Chital Fish', '280 tk'),
(60, 'Mixed Vegatable', '120 tk'),
(61, 'Chicken Chilies Vegatable', '200 tk'),
(62, 'Beef Chilies Vegatable', '220 tk'),
(63, 'Prawn Chilies Vegatable', '220 tk'),
(64, 'Dal', '70 tk'),
(65, 'Chicken Beriany', '150 tk'),
(66, 'Beef Beriany', '180 tk'),
(67, 'Prawn Beriany', '200 tk'),
(68, 'Egg Rice + Chicken Roast', '180 tk'),
(69, 'Green Salad', '120 tk'),
(70, 'Chicken Salad', '200 tk'),
(71, 'Prawn Salad', '250 tk'),
(72, 'Special Salad', '300 tk'),
(73, 'Coke', '35 tk'),
(74, 'Coffee', '50 tk'),
(75, 'Mineral Water', '30 tk'),
(77, 'Fanta', '40 tk');

-- --------------------------------------------------------

--
-- Table structure for table `order_food`
--

CREATE TABLE `order_food` (
  `order_id` int(11) NOT NULL,
  `order_yourname` varchar(255) NOT NULL,
  `order_yournumber` varchar(255) NOT NULL,
  `order_youraddress` varchar(255) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_foodname` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time(6) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_food`
--

INSERT INTO `order_food` (`order_id`, `order_yourname`, `order_yournumber`, `order_youraddress`, `order_quantity`, `order_foodname`, `order_date`, `order_time`, `status`) VALUES
(20, 'Muntasir', '01768968938', 'Sylhet', 2, 'Special Wonthon', '2020-12-25', '16:08:00.000000', 1),
(23, 'Rakin', '01700000000', 'Kulaura', 2, 'Vegatable toast', '2020-12-23', '19:53:00.000000', 1),
(25, 'Abdul Mannan', '01700000000', 'Sylhet', 3, 'Chicken Chowmein', '2020-12-29', '14:54:00.000000', 1),
(26, 'Rakib', '01700000000', 'Sylhet', 7, 'Beef Cutlet', '2020-12-29', '18:12:00.000000', 1),
(27, 'Amir', '01700000000', 'Sylhet', 1, 'Chicken Toast', '2020-12-28', '13:33:00.000000', 1),
(28, 'Ali', '01700000000', 'Sylhet', 6, 'Vegatable toast', '2021-01-02', '13:36:00.000000', 0),
(29, 'Radbin', '01700000000', 'Sylhet', 1, 'Coke', '2020-12-28', '17:37:00.000000', 0),
(30, 'Akif', '01700000000', 'Sylhet', 3, 'Beef Wonthon', '2020-12-29', '00:52:00.000000', 1),
(31, 'Arif', '01702300001', 'Sylhet', 2, 'Beef Wonthon', '2020-12-12', '01:37:00.000000', 1),
(32, 'Roni', '01712345678', 'Sylhet', 4, 'American Chopsvey', '2021-01-01', '00:00:00.000000', 0),
(33, 'Soni', '01612365478', 'Sylhet', 5, 'Chime Spring Roll', '2020-12-30', '05:32:00.000000', 0),
(34, 'Atik', '01532165487', 'Sylhet', 4, 'Vegatable toast', '2021-01-01', '06:36:00.000000', 0),
(35, 'Adib', 'adib@gmail.com', 'Sylhet', 5, 'Chicken Toast', '2020-12-28', '16:42:00.000000', 1),
(36, 'Amir', '01712654789', 'Sylhet', 4, 'Vegatable toast', '2020-12-28', '17:03:00.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time(6) NOT NULL,
  `reservation_person` int(255) NOT NULL,
  `reservation_name` varchar(255) NOT NULL,
  `reservation_email` varchar(255) NOT NULL,
  `reservation_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_us`
--

CREATE TABLE `reservation_us` (
  `reservation_id` int(255) NOT NULL,
  `reservation_name` varchar(255) NOT NULL,
  `reservation_email` varchar(255) NOT NULL,
  `reservation_number` varchar(255) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time(6) NOT NULL,
  `reservation_person` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation_us`
--

INSERT INTO `reservation_us` (`reservation_id`, `reservation_name`, `reservation_email`, `reservation_number`, `reservation_date`, `reservation_time`, `reservation_person`, `status`) VALUES
(8, 'Muntasir Moin Chowdhury', 'muntasir@gmail.com', '01768968938', '2020-12-22', '05:24:00.000000', '7', 1),
(13, 'Rakin', 'rakin@gmail.com', '01700000000', '2020-12-24', '07:54:00.000000', '2', 1),
(16, 'Amir', 'amir@gmail.com', '01700000000', '2020-12-31', '13:36:00.000000', '7', 1),
(17, 'Akif', 'akif@gmail.com', '01700000001', '2020-12-29', '12:49:00.000000', '5', 1),
(18, 'Rdbin', 'radbin@gmail.com', '01787654123', '2020-12-26', '15:15:00.000000', '5', 1),
(19, 'Rabib', 'rabib@gmail.com', '01698654321', '2020-12-25', '15:15:00.000000', '3', 1),
(20, 'Atikur Rahman', 'atikur@gmail.com', '01578654123', '2020-12-30', '15:37:00.000000', '5', 1),
(21, 'Anik', 'anik@gmail.com', '01387654123', '2020-12-31', '03:37:00.000000', '4', 1),
(22, 'Abir', 'abir@gmail.com', '0178456321', '2020-12-30', '15:39:00.000000', '4', 1),
(23, 'Imad', 'imad@gmail.com', '01765412387', '2020-12-31', '15:40:00.000000', '5', 0),
(24, 'Fatema', 'fatema@gmail.com', '01978654123', '2021-01-01', '15:39:00.000000', '3', 0),
(25, 'Amir', 'amir@gmail.com', '01323654879', '2020-12-30', '15:43:00.000000', '5', 1),
(26, 'Nahid', 'nahid@gmail.com', '01347895632', '2020-12-31', '16:04:00.000000', '5', 0),
(27, 'Amir', 'amir@gmail.com', '01762557708', '2020-12-28', '17:07:00.000000', '4', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `order_food`
--
ALTER TABLE `order_food`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `reservation_us`
--
ALTER TABLE `reservation_us`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `order_food`
--
ALTER TABLE `order_food`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_us`
--
ALTER TABLE `reservation_us`
  MODIFY `reservation_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
