-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 12:55 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heritage_venue`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `email`, `password`) VALUES
(1, 'yadavj9991@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `user_id` int(11) NOT NULL,
  `date_of_book` int(11) NOT NULL,
  `venue` int(11) NOT NULL,
  `occassion` varchar(50) NOT NULL,
  `timings` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category_venue`
--

CREATE TABLE `category_venue` (
  `id` int(50) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` enum('active','deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_venue`
--

INSERT INTO `category_venue` (`id`, `category_name`, `status`) VALUES
(1, 'Banquet Hall', 'active'),
(2, 'Resturant', 'active'),
(3, 'Bar and Pub', 'active'),
(4, 'Resorts', 'active'),
(5, 'Farmhouse', 'active'),
(6, 'Rooftop', 'active'),
(7, 'Conference Room', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `id`, `name`, `state`) VALUES
(1, 0, 'Jalandhar', 'Punjab'),
(2, 0, 'Ludhiana', 'Punjab'),
(3, 0, 'Amritsar', 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `event_detail`
--

CREATE TABLE `event_detail` (
  `hall_id` int(50) NOT NULL,
  `event_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `booking_cost` int(50) NOT NULL,
  `food_cost` int(50) NOT NULL,
  `capacity` int(50) NOT NULL,
  `address` text NOT NULL,
  `services` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_name`
--

CREATE TABLE `event_name` (
  `event_id` int(100) NOT NULL,
  `event_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_name`
--

INSERT INTO `event_name` (`event_id`, `event_name`) VALUES
(1, 'Kids Party/Birthday Party'),
(2, 'All Wedding Events'),
(7, 'Bachler Party/Cocktail Party'),
(12, 'Meeting/Conference');

-- --------------------------------------------------------

--
-- Table structure for table `halls_details`
--

CREATE TABLE `halls_details` (
  `hall_id` int(50) NOT NULL,
  `cid` int(10) NOT NULL,
  `event_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `booking_cost` varchar(255) NOT NULL,
  `food_cost` varchar(255) NOT NULL,
  `Capacity` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `services` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `halls_details`
--

INSERT INTO `halls_details` (`hall_id`, `cid`, `event_id`, `name`, `contact`, `email`, `booking_cost`, `food_cost`, `Capacity`, `address`, `services`, `description`, `image`, `image2`, `image3`) VALUES
(1, 1, 2, 'Nirvana Hotel, Basant City, Ludhiana', '1615295000', 'nirvana@gmail.com', ' Starting Form-20000', 'Per Plate-1600 veg / non-veg-1700', '250-2000', 'Hambran Rd, Partap Singhwala, Ludhiana, Punjab 141007', 'Decor provided by the venue\r\nFood provided by the venue\r\nNon-Veg allowed at the venue\r\nAlcohol allowed at the venue\r\nHalls are air conditioned', 'Nirvana Hotel, Ludhiana is a perfect venue to host your pre-wedding function, wedding and reception ceremony. It is located near the famous Partap Public School Ludhiana which is on Humbran Road. Nirvana Hotel, Basant City, Ludhiana serves palatable delicacies in both vegetarian and non-vegetarian food to their guests. The decor of the venue is lavish and well-suited for your function. Nirvana Hotel Lawn has a lush green for having an open-air function. It has air-conditioned banquet halls that are ideal for having medium-sized and big functions. ', '../image/142_nirvana3.jpg', '../image/154_nirvana2.jpg', '../image/180_norvana1.jpg'),
(29, 1, 2, 'Hotel Ivory Retreat', '2147483647', 'ivory@gmail.com', 'Starting From-10000', 'Per Plate Veg-800/Non-veg-900', '300', 'Hotel Ivory Retreat, Opp Riviera Resort, Shaheed Bhagat Singh Nagar, Ludhiana, Punjab 142022', 'Food and decor provided by the venue\r\nCocktail privileges available\r\nLodging amenities available', 'Hotel Ivory Retreat, Ludhiana is one of the most comely venues in the entire city. With its multiple banquet halls of contrasting sizes, it is usually considered as the one-stop destination for all large social and corporate gatherings- weddings and recep', '../image/154_ivory2.jpg', '../image/171_hotel-ivory3.jpg', '../image/187_hotel-ivory-retreat-pakhowal-road-ludhiana.jpg'),
(31, 1, 2, 'South End Gardens, Pakhowal Road, Ludhiana', '+91114013636', 'southend@gmail.com', 'Starting From-10000', 'Per Plate veg-900/Non-veg-100', '300', 'South End Gardens, Pakhowal Road, Octroi Post, Near, Phullanwal, Ludhiana, Punjab 142022', 'Perfect for hosting grandiose wedding ceremonies\r\nFood and decor provided by the venue\r\nAttached lawn and banquet hall for convenience\r\nValet parking with ample space', 'South End Gardens, Ludhiana, is an expansive venue, usually booked for weddings and wedding-related festivities. Southend Garden Ludhiana has a lawn attached to a banquet hall to conveniently let you play host to your guests.', '../image/131_south-end-gardens-pakhowal-road-ludhiana.jpg', '../image/109_south-end2.jpg', '../image/140_south-end-gardens3.jpg'),
(32, 1, 2, 'KG Hotel, Ferozepur Road, Ludhiana', '+911140121339', 'kg@gmail.com', 'Starting From-20000', 'Per Plate-900 veg ,non-veg-1000', '300', 'KG Hotel, Ferozpur Road, Near MBD Mall, Rajguru Nagar Extension, Bhai Randhir Singh Nagar, Ludhiana, Punjab 142021', 'Food and decor provided by the venue\r\nServes both vegetarian and non-vegetarian food\r\nMultiple party areas for celebration\r\nGreat place to host cocktail parties', 'Planning to host a wedding or reception party? KG Hotel, Ludhiana is the one to look for! Located in Rajguru Nagar Extension and close to the MBD Mall Ludhiana. The venue is spacious and can easily accommodate your small to a midsize gathering. ', '../image/105_KGhotel.jpg', '../image/127_kg-hotel-2.jpg', '../image/166_kg-hotel-kg-3.jpg'),
(33, 1, 2, 'Regenta Central Klassik, Link Road, Ludhiana', '+911140140669', 'regenta@gmail.com', 'Starting From-20000', 'Per Plate-1200 veg ,non-veg-1300', '100-200', 'Regenta Central Klassik, Opposite Grover Hyundai, Jammu Colony, Link Road, Model Town, Ludhiana, Punjab 141002', 'Located 21 minutes away from Ludhiana Airport\r\nProvides commendable food and decor\r\nValet parking with ample space\r\n', 'Regenta Central Klassik, Ludhiana, is a stunning 4-star hotel that acts as an amazing venue to host your wedding and reception ceremony. It is located off Link Road in Model Town, it is 21 minutes away from Ludhiana Airport and 11 minutes away from Ludhiana.', '../image/113_regenta.jpg', '../image/192_regenta-central-klassik-2.jpg', '../image/154_regenta-central-klassik3.jpg'),
(34, 2, 1, 'Roche Restaurant And Banquets, Ferozepur Road, Ludhiana', '+911147619802', '', 'Starting From-20000', 'Per Plate-900 veg /non-veg-1000', '300', 'Roche Restaurant And Banquets, 71, Gurudwara Rd, I - Block, Sarabha Nagar, Ludhiana, Punjab 141001', 'house catering and decor available\r\nServes both veg and non-veg food\r\nAmple parking space provided', 'Roche Restaurant And Banquets, Ludhiana, is a popular venue set off Ferozepur Road. The venue offers multiple banquet halls that are suitable for a small gathering. \r\nIt is ideal for hosting birthday parties, wedding anniversaries, cocktail parties, bachechlor Party.', '../image/199_roche.jpg', '../image/154_roche-restaurant2.jpg', '../image/193_roche-restaurant-and3.jpg'),
(35, 2, 1, 'Lucky Wednesday', '099150 31740', '', 'Starting From-10000', 'Per Plate-1200 veg ,non-veg-1300', '100-200', 'Lucky Wednesday, 88/8, 1st Floor, Kunal Tower, Mall Road, Civil Lines, Ludhiana, Punjab 141001.', 'Food provided by the venue\r\nNon-Veg allowed at the venue\r\nDecor provided by the venue\r\n', 'Lucky Wednesday, Ludhiana, is a simple and affordable venue to get married in the presence of your loved ones. It is located on The Mall Road, which makes it easily accessible for all to reach there. Also, it is ideal for hosting your birthdays, anniversary.etc', '../image/185_lucky wednessday.jpg', '../image/127_lucky-wednesday-2.jpg', '../image/151_lucky-wednesday-lucky-wednesday-hall-3.jpg'),
(36, 2, 1, 'Hotel Mahal ', '0161 508 5222', '', 'Depends on event', 'Per Plate-1200 veg ,non-veg-1300', '300', '6, Inder Nagar, Ferozepur Road, opp. Verka Milk Plant, Ludhiana, Punjab 141004', 'Prefect venue to host wedding functions\r\nAuthentic punjabi food is served\r\nGreat ambiance and vibes\r\nComfortable lodging space', 'Hotel Mahal, Ludhiana is an amazing place to host a marriage ceremony. This place is very close to College of Agricultural Engineering & Technology. Hotel Mahal, Ludhiana, Punjab is a suitable place to host pre-wedding functions, weddings, receptions, etc', '../image/194_mahal-mubarak2.jpg', '../image/171_mahal-mubarak-mahal-mubarak2.jpg', '../image/192_mahal-mubarak-mahal-mubarak-3.jpg'),
(37, 2, 12, 'B Seven Restaurant And Banquet Hall, Ferozepur Road, Ludhiana', '09056544444', '', 'Depends on event', 'Per Plate-1200 veg ,non-veg-1300', '100-200', 'B Seven Restaurant and Banquet Hall, 18, Main Road, Sunet, GHS Sunet, BRS Nagar, Ludhiana, Punjab 141012.', 'Delicious food with multi-cuisine options\r\nFood and decor provided by the venue\r\nGreat place to host cocktail parties', 'B Seven Restaurant And Banquet Hall, Ludhiana, is a great place to host multiple events with your near and dear ones. B Seven Banquet Hall, Ludhiana Punjab is ideal for small gatherings. Here, you can organize pre-wedding functions, birthday parties, wedding anniversaries, cocktail party, and many more functions. B Seven Banquet Hall is near Sanjay Karate School on BRS Nagar Main Road.', '../image/163_b-seven.jpg', '../image/131_b-seven2.jpg', '../image/128_b-seven-fine-dining-brs-naga3.jpg'),
(40, 4, 2, 'GS Resorts, Gill Road, Ludhiana', '09814246288', 'qwert@gmail.com', 'Starting From-20000', 'Per Plate-550 veg /non-veg-650', '300', 'GS Resorts, Gill Road, Bulara, Ludhiana, Punjab 141122', 'Attached lawn and banquet hall for convenience\r\nAmple parking space and valet provided\r\nAllows alcohol consumption\r\nGreat set of professionals', 'GS Resorts, Ludhiana, is a magnificent place to host your wedding and pre-wedding functions. The venue is perfect to host an ideal big fat Indian wedding, as it provides a banquet hall attached to the lawn for the convenience of hosting your guests. G S Resort ideal for large social gatherings- engagements, weddings, and receptions.\r\n', '../image/181_gd.jpg', '../image/190_gs resort2.jpg', '../image/183_gs resort-3.jpg'),
(57, 2, 12, 'Barbeque Nation - Jalandhar - Model Town', ' 08591706060', 'feedback@barbequenation.com', 'Depends on event', 'Per Plate-659 veg/non-veg-659 Buffet', '100-200', '387-L, Prakash Nagar Road, Prakash Nagar, Model Town, Jalandhar', 'Full Bar Available\r\nIndoor Seating\r\nBuffet', 'It is one of the most famous restaurants in the country, with more than a hundred outlets worldwide. Barbeque Nation was found with a clear vision of providing a complete dining experience to the customer at an affordable price. They have introduced a new way of dining where you grill your food right on your table!', '../image/180_barbiquee1.jpg', '../image/126_barbiquee2.jpg', '../image/131_barbiquee3.jpg'),
(58, 2, 12, 'Sagar Ratna Jalandhar', '01814610022', ' ', 'Depends on event', ' 150 - 300 only Veg Food', '', '362-363, Model Town Rd, Shastri Nagar, Lajpat Nagar, Jalandhar, Punjab 144001', 'Vegetarian Friendly, Vegan Options', 'Making way for a hearty meal is Sagar Ratna Restaurant in Jalandhar. Established in the year 2010, this place is synonymous with delicious food that can satiate all food cravings. It is home to some of the most appreciated cuisines which include North Indian,South Indian,Punjabi,Pure Veg,Indian.', '../image2/170_mahraja hotel.jpg', '../image2/200_sagar ratna 2.jpg', '../image2/105_sagar ratna 2.jpg'),
(59, 1, 2, 'jjjjjjjjjjjj', '9876543211', ' bmohit0002@gmail.com', '2000', 'Per Plate-1200 veg ,non-veg-1300', '', 'ssssssssssssss', 'saaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', '../image2/117_harshsheela.jpg', '../image2/162_harshsheela.jpg', '../image2/150_harshsheela.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `user_id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phoneno` varchar(13) NOT NULL,
  `created` datetime NOT NULL,
  `status` enum('active','deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`user_id`, `username`, `email`, `password`, `address`, `phoneno`, `created`, `status`) VALUES
(27, 'Jyoti Yadav', 'yadavj9991@gmail.com', '123456', '672-R Model Town Mall Road, Jalandhar', '7087241900', '0000-00-00 00:00:00', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `category_venue`
--
ALTER TABLE `category_venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `event_detail`
--
ALTER TABLE `event_detail`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `event_name`
--
ALTER TABLE `event_name`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `halls_details`
--
ALTER TABLE `halls_details`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_venue`
--
ALTER TABLE `category_venue`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_detail`
--
ALTER TABLE `event_detail`
  MODIFY `hall_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_name`
--
ALTER TABLE `event_name`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `halls_details`
--
ALTER TABLE `halls_details`
  MODIFY `hall_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
