-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 06:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamevault2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessory`
--

CREATE TABLE `accessory` (
  `AccName` varchar(50) NOT NULL,
  `Variations` varchar(50) DEFAULT NULL,
  `AccID` int(5) NOT NULL,
  `ProductID` int(3) DEFAULT NULL,
  `HowMany` int(10) NOT NULL,
  `Specifications` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessory`
--

INSERT INTO `accessory` (`AccName`, `Variations`, `AccID`, `ProductID`, `HowMany`, `Specifications`) VALUES
('Xbox 360 Controller Battery', 'None', 1, 42, 1, 'Capacity: 3600mAh'),
('Wii U Controller', ' White, Black', 2, 66, 2, ''),
('PS4 Controller', 'Blue, Black,Red', 3, 65, 2, ''),
('PS4 Battery', 'None', 4, 50, 0, 'Capacity: 2000mAh'),
('XBox 360 Joystick', 'Colors: Blue, Black', 5, 48, 2, 'Not Wireless'),
('NES Controller', 'Colors: Blue', 6, 51, 2, ''),
('SNES Controller', 'Colors: Blue, White', 7, 52, 2, ''),
('PS2 Joystick', 'Colors: Blue, Black,', 8, 53, 2, ''),
('Wii Battery', 'None', 9, 54, 1, 'Capacity: 3600mAh'),
('GBA Battery', 'None', 10, 55, 1, 'Capacity: 750mAh'),
('Wii Remote Charger', 'Colors: White, Black', 11, 56, 1, 'Ports: 2'),
('Wii controller', 'Colors: White, Black', 12, 57, 2, ''),
('GBA Charger', 'None', 13, 58, 1, 'Output: 450 mA'),
('PSP Charger', 'None', 14, 59, 1, 'Output: 5V'),
('Sega Saturn', 'Colors: Black, Maroon, Grey', 15, 64, 1, 'Connecting wires included'),
('PS3 Wireless Controller', 'Colors: Blue, Black, Red', 16, 63, 2, ''),
('PS1 Controller', 'Colors: Red, Black', 17, 62, 2, ''),
('PS1 Controller', 'Colors: White, Black', 18, 62, 4, ''),
('NDS Stylus', 'Colors: Pink, SkyBlue, Cream, Grey, White', 19, 60, 5, 'Compatibilty: DS only'),
('HDMI Cable', 'None', 20, 61, 1, 'Length: 1.5m');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(3) NOT NULL,
  `UserID` int(3) DEFAULT NULL,
  `AdminJob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

CREATE TABLE `console` (
  `ConsoleName` varchar(30) DEFAULT NULL,
  `ProductID` int(3) DEFAULT NULL,
  `ConsoleID` int(3) NOT NULL,
  `Developer` varchar(20) DEFAULT NULL,
  `Memory` varchar(20) NOT NULL,
  `Colors` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`ConsoleName`, `ProductID`, `ConsoleID`, `Developer`, `Memory`, `Colors`) VALUES
('Play Station 2', 88, 1, 'Sony', '16GB', 'Black'),
('Play Station 1', 89, 2, 'Sony', '1GB', 'Black'),
('XBox', 90, 3, 'Microsoft', '1GB', 'White and Black'),
('XBox 360', 91, 4, 'Microsoft', '16GB', 'White'),
('Nintendo Game Boy Advance', 92, 5, 'Nintendo', '1GB', 'Blue, Red'),
('Super NES', 93, 6, 'Nintendo', '64MB', 'Blue'),
('Nintendo Game Boy Color', 94, 7, 'Nintendo', '4MB', 'Indigo'),
('Atari 2600', 95, 8, 'Atari', 'Not Applicable', 'Standard'),
('NES', 96, 9, 'Nintendo', '8MB', 'White'),
('Sony PSP', 97, 10, 'Sony', '1GB', 'Black'),
('Nintendo Wii', 98, 11, 'Nintendo', '1GB', 'White'),
('Nintendo DS', 99, 12, 'Nintendo', '1GB', 'White, Black');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(100) NOT NULL,
  `CustID` int(3) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `OrderCount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `CustID`, `UserID`, `OrderCount`) VALUES
('qqwe', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customerreceipt`
--

CREATE TABLE `customerreceipt` (
  `Address` varchar(100) DEFAULT NULL,
  `PhoneNo` varchar(20) DEFAULT NULL,
  `DeliveryDate` date DEFAULT NULL,
  `OrderID` int(5) NOT NULL,
  `ProductID` int(3) DEFAULT NULL,
  `CustID` int(3) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerreceipt`
--

INSERT INTO `customerreceipt` (`Address`, `PhoneNo`, `DeliveryDate`, `OrderID`, `ProductID`, `CustID`, `Name`, `Status`) VALUES
('22, Jump Street HollyWood', '00121433', NULL, 51, NULL, NULL, '', 'Not Delivered'),
('22, Jump Street HollyWood', '00121433', NULL, 52, NULL, NULL, '', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 53, NULL, NULL, 'Abid Hasan', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 54, NULL, NULL, 'Abid Hasan', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 55, NULL, NULL, 'Abid Hasan', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 56, NULL, NULL, 'Abid Hasan', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 57, NULL, NULL, 'Abid Hasan', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 58, NULL, NULL, 'Abid Hasan', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 59, NULL, NULL, 'Abid Hasan', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 60, NULL, NULL, 'Abid Hasan', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 61, NULL, NULL, 'Abid Hasan', 'Not Delivered'),
(NULL, NULL, '2022-12-31', 62, NULL, NULL, 'Abid Hasan', 'Not Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `GameName` varchar(50) DEFAULT NULL,
  `Genre1` varchar(15) DEFAULT NULL,
  `Genre2` varchar(15) DEFAULT NULL,
  `Genre3` varchar(15) DEFAULT NULL,
  `GameID` int(3) NOT NULL,
  `ProductID` int(3) DEFAULT NULL,
  `PlayedIn` varchar(30) DEFAULT NULL,
  `TotalPlayers` int(5) NOT NULL,
  `ImageLink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`GameName`, `Genre1`, `Genre2`, `Genre3`, `GameID`, `ProductID`, `PlayedIn`, `TotalPlayers`, `ImageLink`) VALUES
('God Of War 2', 'Action', 'Adventure', 'Beat\'em Up', 1, 1, 'PS3', 1, ''),
('Metal Gear Solid', 'Action', 'Thriller', 'Drama', 2, 3, 'Play Station', 1, ''),
('Dragon Ball Z: Shin Budokai', 'Action', 'Fighting', 'Anime', 3, 4, 'Play Station Portable', 2, ''),
('Pokemon Black', 'RPG', 'Adventure', 'Handheld', 4, 5, 'Nintendo DS', 2, ''),
('Mario RPG Maker', 'RPG', 'Adventure', 'Handheld', 5, 6, 'Nintendo DS', 1, ''),
('House Of The Dead 2', 'FPS', 'Horror', 'Action', 6, 11, 'PC', 1, ''),
('Halo', 'FPS', 'Action', 'Adventure', 7, 20, 'XBox', 4, ''),
('Dragon Ball Z Supersonic Warriors', 'Action', 'Fighting', 'Handheld', 8, 19, 'Game Boy Advance', 2, ''),
('Megaman 3', 'Action', 'Sidescroller', 'Handheld', 9, 18, 'NES', 1, ''),
('Pokemon Emerald', 'RPG', '2D', 'Handheld', 10, 2, 'GameBoy Advance', 2, ''),
('Prince Of Persia', 'Action', 'Mystery', '3rd-Person', 11, 10, 'PS3', 1, ''),
('Pokemon Heartgold', 'RPG', 'Adventure', 'Handheld', 12, 67, 'Nintendo DS', 2, ''),
('FInal Fantasy VII', 'RPG', 'Action', 'Handheld', 13, 68, 'PlayStation', 1, ''),
('Pokemon Platinum', 'RPG', 'Adventure', 'Handheld', 14, 69, 'Nintendo DS', 2, ''),
('Infamous', 'Action', 'Adventure', 'Beat\'em Up', 15, 70, 'PlayStation 3', 1, ''),
('Prototype 2', 'Action', 'Thriller', 'Open World', 16, 71, 'XBox 360', 1, ''),
('Prototype', 'Action', 'Thriller', 'Open World', 17, 72, 'XBox 360', 1, ''),
('Tetris', 'Arcade', '', '', 18, 73, 'GameBoy', 1, ''),
('Ice Climber', 'Platformer', 'Action', 'Handheld', 19, 74, 'NES', 1, ''),
('Super Mario Bros', 'Action', 'Side-Scroller', 'Handheld', 20, 75, 'GameBoy', 1, ''),
('Halo 2', 'Open World', 'Action', 'FPS', 21, 76, 'XBox', 4, ''),
('Need For Speed: Underground', 'Racing', 'Action', '', 22, 77, 'PC', 2, ''),
('Need For Speed: Most Wanted', 'Racing', 'Action', '', 23, 78, 'PC', 2, ''),
('Need For Speed: Carbon', 'Racing', 'Action', '', 24, 79, 'PC', 2, ''),
('Lion King', 'Action', 'Side-Scroller', 'Handheld', 25, 80, 'Super NES', 1, ''),
('Super Metroid', 'Metroidvania', 'Adventure', 'Side-Scroller', 26, 81, 'Super NES', 1, ''),
('Metroid Fusion', 'Metroidvania', 'Adventure', 'Side-Scroller', 27, 82, 'Game Boy Advance', 1, ''),
('Dig Dug', '2D', 'Platformer', 'Arcade', 28, 83, 'Atari 2600', 2, ''),
('Space Invaders', '2D', 'Platformer', 'Arcade', 29, 84, 'Atari 2600', 1, ''),
('Radiant Silvergun', 'Shoot\'em Up', 'Arcade', 'Action', 30, 85, 'Sega Saturn', 1, ''),
('Virtua Cop', 'FPS', 'Arcade', 'Action', 31, 86, 'Sega Saturn', 1, ''),
('Sonic R', 'Racing', '', '', 32, 87, 'Sega Saturn', 2, ''),
('Grand Theft Auto', 'Open World', '3rd Person', 'Action', 33, 25, 'PC', 1, '110820-grand-theft-auto-iv-xbox-360-front-cover.jpg'),
('Grand Theft Auto 3', 'Open World', 'Action', '3rd Person', 34, 29, 'PC', 1, ''),
('FarCry', 'Action', 'Thriller', 'Adventure', 35, 30, 'XBox 360', 1, ''),
('Splinter Cell', 'Action', 'Adventure', 'Spy', 36, 32, 'XBox', 1, ''),
('Dirt Rally', 'Action', 'Racing', 'Simulation', 37, 34, 'PC', 5, ''),
('Counter Strike', 'FPS', 'Action', 'Online', 38, 35, 'PC', 5, ''),
('Mafia', 'Action', 'Adventure', 'Shooting', 39, 37, 'Play Station 2', 1, ''),
('Shin Megami Tensei IV', 'Action', 'RPG', 'Horror', 40, 38, 'Nintendo 3DS', 1, ''),
('Battlefield', 'Action', 'Warfare', 'FPS', 41, 40, 'PC', 5, ''),
('Pokemon Sun', 'RPG', 'Adventure', 'Handheld', 42, NULL, 'Nintendo 3DS', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `InStock` int(10) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `OrderNumber` int(10) NOT NULL,
  `CustID` int(3) DEFAULT NULL,
  `OrderName` varchar(50) DEFAULT NULL,
  `OrderPrice` int(10) DEFAULT NULL,
  `OrderDiscount` int(10) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`OrderNumber`, `CustID`, `OrderName`, `OrderPrice`, `OrderDiscount`, `Username`, `Status`) VALUES
(102, 0, 'PS4 battery', 300, 0, '', 'Processed'),
(108, NULL, '', 0, NULL, '', 'Processed'),
(109, NULL, '', 0, NULL, '', 'Processed'),
(110, NULL, 'Nothing', 0, NULL, '', 'Processed'),
(111, NULL, 'Nothing', 0, NULL, '', 'Processed'),
(112, NULL, '', 0, NULL, '', 'Processed'),
(113, NULL, '', 0, NULL, '', 'Processed'),
(114, NULL, '', 0, NULL, '', 'Processed'),
(115, NULL, '', 0, NULL, '', 'Processed'),
(116, NULL, 'Pokemon Emerald', 200, NULL, '', 'Processed'),
(117, NULL, 'Pokemon Emerald', 200, NULL, '', 'Processed'),
(118, NULL, 'Pokemon Emerald', 200, NULL, '', 'Processed'),
(129, NULL, 'Metal Gear Solid', 300, 20, 'Abid Hasan', 'Not Processed'),
(130, NULL, 'Play Station 2', 1000, 0, 'Abid Hasan', 'Not Processed'),
(131, NULL, 'Play Station 1', 1000, 0, 'Abid Hasan', 'Not Processed'),
(132, NULL, 'XBox', 1000, 0, 'Abid Hasan', 'Not Processed'),
(133, NULL, 'XBox 360', 1000, 0, 'Abid Hasan', 'Not Processed'),
(134, NULL, 'Nintendo Game Boy Advance', 1000, 0, 'Abid Hasan', 'Not Processed'),
(135, NULL, 'Super NES', 1000, 0, 'Abid Hasan', 'Not Processed'),
(136, NULL, 'Nintendo Game Boy Color', 1000, 0, 'Abid Hasan', 'Not Processed'),
(137, NULL, 'Atari 2600', 1000, 0, 'Abid Hasan', 'Not Processed'),
(138, NULL, 'NES', 1000, 0, 'Abid Hasan', 'Not Processed'),
(139, NULL, 'Sony PSP', 1000, 0, 'Abid Hasan', 'Not Processed'),
(140, NULL, 'Nintendo Wii', 1000, 0, 'Abid Hasan', 'Not Processed'),
(141, NULL, 'Nintendo DS', 1000, 0, 'Abid Hasan', 'Not Processed'),
(198, NULL, 'Metal Gear Solid', 300, 20, '', 'Processed'),
(199, NULL, 'Metroid Fusion', 180, NULL, 'Niloy', 'Processed'),
(200, NULL, 'Wii Battery', 400, 0, 'Niloy', 'Processed'),
(201, NULL, 'NES Controller', 200, 0, 'Niloy', 'Processed'),
(202, NULL, 'Nintendo DS', 12000, 0, 'Niloy', 'Processed'),
(203, NULL, 'Nintendo Game Boy Advance', 5000, 0, 'Niloy', 'Processed'),
(204, NULL, 'Pokemon Black', 250, 0, 'Niloy', 'Processed'),
(205, NULL, 'Play Station 2', 10000, 0, '', ''),
(206, NULL, 'Play Station 1', 9400, 0, '', ''),
(207, NULL, 'Play Station 2', 10000, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProdName` varchar(50) DEFAULT NULL,
  `ProductID` int(11) NOT NULL,
  `Price` double(7,2) DEFAULT NULL,
  `Discount` double(5,2) DEFAULT NULL,
  `ImageLink` varchar(500) DEFAULT NULL,
  `InStock` int(10) NOT NULL,
  `Ordered` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProdName`, `ProductID`, `Price`, `Discount`, `ImageLink`, `InStock`, `Ordered`) VALUES
('God Of War', 1, 500.00, 0.00, 'God_of_War_(2005)_cover.jpg', 40, 0),
('Pokemon Emerald', 2, 200.00, 0.00, 'PokemonEmeraldBox.jpg', 39, 1),
('Metal Gear Solid', 3, 300.00, 20.00, 'https://www.mobygames.com/images/covers/l/5777-metal-gear-solid-playstation-front-cover.jpg', 33, 10),
('Dragon Ball Z: Shin Budokai', 4, 200.00, 0.00, 'https://th.bing.com/th/id/OIP.2Z8Bvipe1h-A51JtYO0gKgHaM4?pid=ImgDet&rs=1', 40, 0),
('Pokemon Black', 5, 250.00, 0.00, 'https://th.bing.com/th/id/R.2e0249e82072719944847ae273b1451e?rik=qaM5XD1atG51jA&pid=ImgRaw&r=0', 37, 3),
('Mario RPG Maker', 6, 150.00, 0.00, 'https://th.bing.com/th/id/OIP.efOGktHan1Z69y5jWnxJ5AHaGP?pid=ImgDet&rs=1', 40, 2),
('Zelda Twilight Princess', 7, 300.00, 0.00, 'https://th.bing.com/th/id/OIP.LyaWcLHzhZfL40qUDMryPQHaKd?pid=ImgDet&w=183&h=258&c=7', 40, 0),
('Double Dragon', 8, 160.00, 0.00, 'https://th.bing.com/th/id/OIP.jcTq5XtMCNLoDlG4489-CQHaJ_?pid=ImgDet&rs=1', 40, 0),
('Legend of Zelda 2', 9, 200.00, 0.00, 'https://www.mobygames.com/images/covers/l/14437-zelda-ii-the-adventure-of-link-nes-front-cover.jpg', 40, 0),
('Prince Of Persia', 10, 150.00, 0.00, 'https://th.bing.com/th/id/OIP.Xem8MNas4ogQ7QyTkIrOpwHaKU?pid=ImgDet&rs=1', 40, 0),
('House Of The Dead 2', 11, 100.00, 0.00, 'https://th.bing.com/th/id/R.bbf8bbc8ca74a74fe83694c2fae4450e?rik=SfyQFGFytZ%2biuw&pid=ImgRaw&r=0', 40, 0),
('Pokemon Rangers', 12, 200.00, 0.00, 'https://www.mobygames.com/images/covers/l/75614-pokemon-ranger-nintendo-ds-front-cover.jpg', 40, 0),
('Fifa 2002', 13, 140.00, 0.00, 'https://upload.wikimedia.org/wikipedia/en/c/c7/2002_FIFA_World_Cup_Coverart.jpg', 40, 0),
('Legend Of Zelda: Occarina Of Time', 14, 120.00, 0.00, 'https://upload.wikimedia.org/wikipedia/en/5/57/The_Legend_of_Zelda_Ocarina_of_Time.jpg', 40, 0),
('King Of Fighters PS2', 15, 100.00, 0.00, 'https://th.bing.com/th/id/R.628135498271fe88c211c728e17890af?rik=PiLueysAKaCBvQ&pid=ImgRaw&r=0', 40, 2),
('Mario Kart', 16, 130.00, 0.00, 'https://th.bing.com/th/id/R.c0a68a9f7a75ace2a4aca691e7c8eecf?rik=LSdhXaKt6cgehw&pid=ImgRaw&r=0', 40, 0),
('God of War 2', 17, 500.00, 0.00, 'God_of_War_II_cover.jpg', 40, 0),
('Megaman 3', 18, 120.00, 0.00, 'https://th.bing.com/th/id/OIP.DDCGiA1JXoznzXyYD81pTgHaJ4?pid=ImgDet&rs=1', 40, 0),
('Dragon Ball Z: Supersonic Warriors', 19, 100.00, 0.00, 'https://th.bing.com/th/id/OIP.TBzCu0z4FMOTNNa47guA_QHaGp?pid=ImgDet&rs=1', 40, 0),
('Halo', 20, 180.00, 0.00, 'https://th.bing.com/th/id/OIP.GRakB3xFfBuPULg0THLGcwHaKl?pid=ImgDet&rs=1', 40, 0),
('PlayStation 3', 21, 25000.00, 100.00, 'Sony-PlayStation-3-2001A-wController-L.jpg', 40, 0),
('PlayStation 4', 23, 40000.00, 0.00, '800px-Sony-PlayStation-4-PS4-wDualShock-4.jpg', 40, 0),
('Grand Theft Auto: Vice City', 25, 200.00, 0.00, 'Vice-city-cover.jpg', 40, 0),
('Call Of Duty 2', 28, 900.00, 0.00, 'https://th.bing.com/th/id/OIP.CSpoaygS36hYj33qE-plUQHaLH?pid=ImgDet&rs=1', 40, 0),
('Grand Theft Auto 2', 29, 400.00, 0.00, 'https://th.bing.com/th/id/R.ccbf3fa96bfa74a91e6be3d3f23379c3?rik=5hvnktNUQzosew&pid=ImgRaw&r=0', 40, 0),
('FarCry', 30, 999.99, 0.00, 'https://th.bing.com/th/id/R.23018a98ab8f7cb2225423754ea12f93?rik=%2b%2b1odDg1FxHueA&pid=ImgRaw&r=0', 40, 0),
('Alien Shooter', 31, 0.00, 0.00, 'Alien_Shooter_cover.jpg', 40, 0),
('Splinter Cell', 32, 999.99, 0.00, '84860-tom-clancy-s-splinter-cell-xbox-front-cover.jpg', 40, 0),
('House Of The Dead', 33, 0.00, 0.00, 'House_of_the_Dead_arcade_flyer.jpg', 20, 0),
('Dirt Rally', 34, 999.99, 0.00, 'https://th.bing.com/th/id/OIP.xzwsUPbr78NcgdCb5_IEUwHaHa?pid=ImgDet&rs=1', 40, 0),
('Counter Strike', 35, 437.00, 0.00, 'Counter-Strike_Box.jpg', 40, 0),
('Age Of Empires 2', 36, 200.00, 0.00, 'https://th.bing.com/th/id/R.1f94cf1015ec7b878e6bd3a74bc51152?rik=64Qrf07QaR%2f%2f%2fw&riu=http%3a%2f%2fwww.mobygames.com%2fimages%2fcovers%2fl%2f15975-age-of-empires-ii-the-age-of-kings-windows-front-cover.jpg&ehk=%2fsxTK6Ix6Xc%2fVcVuaEnXCAm9inzueGGY%2fA4w%2bnc3EY0%3d&risl=&pid=ImgRaw&r=0', 10, 2),
('Mafia', 37, 400.00, 0.00, 'MafiaUSCov.jpg', 40, 0),
('Shin Megami Tensei IV', 38, 300.00, 0.00, 'Shin_Megami_Tensei_IV.jpg', 40, 0),
('Age Of Empires', 39, 300.00, 10.00, 'https://th.bing.com/th/id/OIP.Q_rJ-LJhoT6O5BDkYm9yTAHaHX?pid=ImgDet&rs=1', 10, 2),
('Battlefield', 40, 400.00, 0.00, 'Battlefield_1942_Box_Art.jpg', 40, 0),
('Xbox 360 Controller Battery', 42, 400.00, 0.00, 'https://th.bing.com/th/id/OIP.QTnJXl8FHsRqld15b_XO5AEsEs?pid=ImgDet&rs=1', 40, 0),
('PS3 Battery', 43, 200.00, 0.00, 'https://i5.walmartimages.com/asr/a1005e54-2397-4793-bd25-237f4f9fbac2_1.7cbc70c2ed23c113322242be3d0fd756.jpeg?odnHeight=450&odnWidth=450&odnBg=ffffff', 40, 0),
('PSP Rechargable Battery', 46, 300.00, 0.00, 'https://th.bing.com/th/id/R.ff62188679b70c21ac4c50ec2c1929ba?rik=77FLsFdgFRMifQ&pid=ImgRaw&r=0', 40, 0),
('Xbox 360 Joystick', 48, 600.00, 0.00, 'https://i5.walmartimages.com/asr/b482b5de-1dce-426f-99dc-c7be2c0925da.d2471715e78064bac0de45868773746a.jpeg', 40, 0),
('PS4 Battery', 50, 500.00, 0.00, 'https://images-na.ssl-images-amazon.com/images/I/61UqXjmCcwL._SL1280_.jpg', 39, 1),
('NES Controller', 51, 200.00, 0.00, 'https://th.bing.com/th/id/OIP.SN80ie3hRqCc-ysjD6GXYQHaFY?pid=ImgDet&rs=1', 37, 3),
('SNES Controller', 52, 220.00, 0.00, 'https://th.bing.com/th/id/OIP.uisq72XMmp1lkJh7tr8DnQHaDn?pid=ImgDet&rs=1', 40, 0),
('PS2 Joystick', 53, 600.00, 0.00, 'https://th.bing.com/th/id/R.c7fda15d5f26108c27845deb28afa9dc?rik=BmRRPywV%2f6VVCQ&pid=ImgRaw&r=0', 40, 0),
('Wii Battery', 54, 400.00, 0.00, 'https://th.bing.com/th/id/R.3b758d36800e5d85c2da97c99a4993d7?rik=FrTeDTtL4klRhg&pid=ImgRaw&r=0', 37, 3),
('GBA Battery', 55, 200.00, 0.00, 'https://th.bing.com/th/id/OIP.xmvrZH4zSu_P1CMD_A5-2AHaF2?pid=ImgDet&rs=1', 40, 0),
('Wii Remote Charger', 56, 300.00, 0.00, 'https://i5.walmartimages.com/asr/0da5d8bc-7dbb-4a8d-abc6-b1a34bc8059c_1.212ce269289398d3f0b128433e90217a.jpeg', 40, 0),
('Wii controller', 57, 200.00, 0.00, 'https://i5.walmartimages.com/asr/5ffbb474-ae02-4c07-bd03-fcb9ec5bd646_1.b4f9ed8f392dd8812341736558573894.jpeg', 40, 0),
('GBA Charger', 58, 200.00, 0.00, 'https://i5.walmartimages.com/asr/8982d9a1-1b2f-4035-bf8e-6249cf628363_1.3e63300e64079e9a1daf4863f509b176.jpeg?odnWidth=1000&odnHeight=1000&odnBg=ffffff', 40, 0),
('PSP Charger', 59, 500.00, 0.00, 'https://i5.walmartimages.com/asr/7513e3ff-57ae-4eb4-8da0-a98050a55780_1.3a2601e761292369ce351146484e1e1f.jpeg', 40, 0),
('NDS Stylus', 60, 300.00, 0.00, 'https://img.fruugo.com/product/6/14/138131146_max.jpg', 40, 0),
('HDMI Cable', 61, 100.00, 0.00, 'https://th.bing.com/th/id/R.3bb7e11b9a801a7447691434f2fac16b?rik=X3jW7ukj4U4FtA&pid=ImgRaw&r=0', 40, 0),
('PS1 controller', 62, 600.00, 0.00, 'https://th.bing.com/th/id/OIP._MItfrvXao3WFGL6vO4I5AHaGc?pid=ImgDet&rs=1', 40, 0),
('PS3 Wireless Controller', 63, 400.00, 0.00, 'https://th.bing.com/th/id/OIP.0mFtxYD2P7xZVG0ElVv5ngHaGT?pid=ImgDet&rs=1', 40, 0),
('Sega Saturn Controller', 64, 400.00, 0.00, 'https://th.bing.com/th/id/OIP.G4Yngqtr3QX9vQW5mV8qMwHaFF?pid=ImgDet&rs=1', 40, 0),
('PS4 Controller', 65, 300.00, 0.00, 'https://th.bing.com/th/id/OIP.NLICH3YxYE6Ap0QHev1YOAHaD4?pid=ImgDet&rs=1', 40, 0),
('WiiU controller', 66, 300.00, 0.00, 'https://th.bing.com/th/id/R.438237076d109e08859984e5d89dcb77?rik=oX74LTTTnFdswA&pid=ImgRaw&r=0', 40, 0),
('Pokemon Heartgold', 67, 210.00, NULL, 'https://www.mobygames.com/images/covers/l/186988-pokemon-heartgold-version-nintendo-ds-other.jpg', 40, 0),
('FInal Fantasy VII', 68, 180.00, NULL, 'Final_Fantasy_VII_Box_Art.jpg', 40, 0),
('Pokemon Platinum', 69, 210.00, NULL, 'PokPlatinumBoxArt.webp', 40, 0),
('Infamous', 70, 450.00, NULL, 'https://www.mobygames.com/images/covers/l/167371-infamous-playstation-3-front-cover.jpg', 40, 0),
('Prototype 2', 71, 500.00, NULL, 'https://www.mobygames.com/images/covers/l/371696-prototype-2-xbox-360-front-cover.png', 40, 0),
('Prototype', 72, 400.00, NULL, 'https://th.bing.com/th/id/OIP.Ub6_f4wG3-TWDDKWiQtBugHaKg?pid=ImgDet&rs=1', 40, 0),
('Tetris', 73, 120.00, NULL, 'https://www.mobygames.com/images/covers/l/39235-tetris-game-boy-front-cover.jpg', 40, 0),
('Ice Climber', 74, 120.00, NULL, 'https://th.bing.com/th/id/R.cd045096a378095e476e81a6fa2bf5d5?rik=G9IFM8PO%2byUiZA&pid=ImgRaw&r=0', 40, 0),
('Super Mario Bros', 75, 200.00, NULL, 'https://th.bing.com/th/id/OIP.44bRsWB6PGsecr_cON1gmQHaKe?pid=ImgDet&rs=1', 40, 0),
('Halo 2', 76, 600.00, NULL, 'https://th.bing.com/th/id/R.944b32e00b22e0aff3bc818a6b392aa0?rik=h%2bnllOZC3zslHQ&pid=ImgRaw&r=0', 40, 0),
('Need For Speed: Underground', 77, 500.00, NULL, 'https://th.bing.com/th/id/OIP.54NB3bIHukp2hrI-UxdNtQAAAA?pid=ImgDet&rs=1', 40, 0),
('Need For Speed: Most Wanted', 78, 580.00, NULL, 'https://www.mobygames.com/images/covers/l/265563-need-for-speed-most-wanted-windows-front-cover.jpg', 40, 0),
('Need For Speed: Carbon', 79, 600.00, NULL, 'https://th.bing.com/th/id/OIP.9gxmvzAVY4Q5AXTblU1lngHaKr?pid=ImgDet&rs=1', 40, 0),
('Lion King', 80, 150.00, NULL, 'https://upload.wikimedia.org/wikipedia/en/1/16/The_Lion_King_Coverart.png', 40, 0),
('Super Metroid', 81, 200.00, NULL, 'https://th.bing.com/th/id/R.cee9b335eb2b3b9df024b5ea0520d6a7?rik=ECQ2RknUsoiTmA&riu=http%3a%2f%2fimages.eurogamer.net%2f2014%2fusgamer%2fsuper-metroid-box.jpg&ehk=dQ2E0hYKSnUcAVnIOPpOtVBGCUC8g7zEgxyGTtkaozU%3d&risl=&pid=ImgRaw&r=0', 40, 0),
('Metroid Fusion', 82, 180.00, NULL, 'https://assets1.ignimgs.com/2019/09/05/metroid-fusion---button-1567645379534.jpg', 37, 3),
('Dig Dug', 83, 160.00, NULL, 'https://th.bing.com/th/id/OIP.bPtROtW_wqU0LE9c5KuaTQHaKa?pid=ImgDet&rs=1', 0, 0),
('Space Invaders', 84, 150.00, NULL, '19650-space-invaders-atari-2600-front-cover.jpg', 0, 0),
('Radiant Silvergun', 85, 300.00, NULL, 'Radiant_Silvergun_flyer.jpg', 0, 0),
('Virtua Cop', 86, 260.00, NULL, 'https://www.mobygames.com/images/covers/l/50873-virtua-cop-sega-saturn-front-cover.jpg', 0, 0),
('Sonic R', 87, 300.00, NULL, '15278-sonic-r-sega-saturn-front-cover.jpg', 0, 0),
('Play Station 2', 88, 10000.00, NULL, 'PS2-Versions.jpg', 30, 2),
('Play Station 1', 89, 9400.00, NULL, 'PSX-Console-wController.jpg', 30, 2),
('XBox', 90, 11000.00, NULL, 'Xbox-console.jpg', 30, 2),
('XBox 360', 91, 18500.00, NULL, 'Xbox-360S-Console-Set.jpg', 30, 2),
('Nintendo Game Boy Advance', 92, 5000.00, NULL, 'Nintendo-Game-Boy-Advance-Purple-FL.jpg', 27, 5),
('Super NES', 93, 8000.00, NULL, 'SNES-Mod1-Console-Set.jpg', 30, 2),
('Nintendo Game Boy Color', 94, 2000.00, NULL, '800px-Nintendo-Game-Boy-Color-FL.jpg', 30, 2),
('Atari 2600', 95, 2300.00, 200.00, 'Atari-2600-Wood-4Sw-Set.png', 30, 2),
('NES', 96, 8000.00, 140.00, '1024px-NES-Console-Set.jpg', 0, 2),
('Sony PSP', 97, 26000.00, NULL, 'https://th.bing.com/th/id/OIP.vE3iE9Mlhr7bVVQR0JH1ZgHaEK?pid=ImgDet&rs=1', 30, 2),
('Nintendo Wii', 98, 20000.00, NULL, 'https://images.nintendolife.com/954d9e39e3e04/nintendo-wii.original.jpg', 30, 2),
('Nintendo DS', 99, 12000.00, NULL, 'Nintendo-DS-Fat-Blue.jpg', 27, 5),
('Nintendo 3ds', 100, 30000.00, 200.00, '800px-Nintendo-3DS-AquaOpen.jpg', 20, 0),
('Pokemon Sun', 101, 999.99, 0.00, 'https://th.bing.com/th/id/R.c3c8dbdf08351a709dab3b33069611d7?rik=LSW9oKt0vHvZEg&pid=ImgRaw&r=0', 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(3) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `FaveGame` varchar(30) DEFAULT NULL,
  `UserType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Email`, `Password`, `Phone`, `Address`, `FaveGame`, `UserType`) VALUES
(13, 'Niloy123', 'Niloy123', '123456', '00121433', '11234q', 'Pokemon Emerald', 'Customer'),
(14, 'Abid Hasan', 'niloy3513@gmail.com', '112233', '00121433', '22, Jump Street HollyWood', 'Pokemon Emerald', 'Admin'),
(21, 'Niloy', 'abid.hasan$gmail.com', 'zxcvb', '012223', 'IDK really', 'Pokemon HeartGold', 'Admin'),
(22, 'abid', 'qwer.gmail.com', 'lkjhg', '1234456', 'Jump Street, Litterroot Town', 'Supermna NES', 'Customer'),
(42, 'Nilo', 'GameEnjoyer@gmail.com', '11111', '09123456', '22, Jump Street HollyWood', 'Superman NES', ''),
(43, 'qqwe', 'wedeih', '11111', '21010303', 'ldnednelw', 'Pokemon Emerald', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`AccID`),
  ADD KEY `accessory_ibfk_1` (`ProductID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD KEY `admin_ibfk_1` (`UserID`);

--
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`ConsoleID`),
  ADD KEY `console_ibfk_1` (`ProductID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustID`),
  ADD KEY `customer_ibfk_1` (`UserID`);

--
-- Indexes for table `customerreceipt`
--
ALTER TABLE `customerreceipt`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `CustID` (`CustID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`GameID`),
  ADD KEY `game_ibfk_1` (`ProductID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ProductID`,`InStock`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`OrderNumber`),
  ADD KEY `orderlist_ibfk_1` (`CustID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessory`
--
ALTER TABLE `accessory`
  MODIFY `AccID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `console`
--
ALTER TABLE `console`
  MODIFY `ConsoleID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customerreceipt`
--
ALTER TABLE `customerreceipt`
  MODIFY `OrderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `GameID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `OrderNumber` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessory`
--
ALTER TABLE `accessory`
  ADD CONSTRAINT `accessory_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `console`
--
ALTER TABLE `console`
  ADD CONSTRAINT `console_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customerreceipt`
--
ALTER TABLE `customerreceipt`
  ADD CONSTRAINT `customerreceipt_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`),
  ADD CONSTRAINT `customerreceipt_ibfk_2` FOREIGN KEY (`CustID`) REFERENCES `customer` (`CustID`);

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD CONSTRAINT `orderlist_ibfk_1` FOREIGN KEY (`CustID`) REFERENCES `customer` (`CustID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
