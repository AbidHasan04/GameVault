-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 03:38 PM
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
  `UsedIn` varchar(20) DEFAULT NULL,
  `AccID` int(5) NOT NULL,
  `ProductID` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(3) NOT NULL,
  `UserID` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

CREATE TABLE `console` (
  `ConsoleName` varchar(30) DEFAULT NULL,
  `ProductID` int(3) DEFAULT NULL,
  `ConsoleID` int(3) NOT NULL,
  `Developer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customerreceipt`
--

CREATE TABLE `customerreceipt` (
  `Address` varchar(100) DEFAULT NULL,
  `PhoneNo` varchar(20) DEFAULT NULL,
  `DeliveryDate` varchar(20) DEFAULT NULL,
  `OrderID` int(5) NOT NULL,
  `ProductID` int(3) DEFAULT NULL,
  `CustID` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `PlayedIn` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`GameName`, `Genre1`, `Genre2`, `Genre3`, `GameID`, `ProductID`, `PlayedIn`) VALUES
('God Of War 2', 'Action', 'Adventure', 'Beat\'em Up', 1, 1, 'PS3'),
('Metal Gear Solid', 'Action', 'Thriller', 'Drama', 2, 3, 'Play Station'),
('Dragon Ball Z: Shin Budokai', 'Action', 'Fighting', 'Anime', 3, 4, 'Play Station Portable'),
('Pokemon Black', 'RPG', 'Adventure', 'Handheld', 4, 5, 'Nintendo DS'),
('Mario RPG Maker', 'RPG', 'Adventure', 'Handheld', 5, 6, 'Nintendo DS'),
('House Of The Dead 2', 'FPS', 'Horror', 'Action', 6, 11, 'PC'),
('Halo', 'FPS', 'Action', 'Adventure', 7, 20, 'XBox'),
('Dragon Ball Z Supersonic Warriors', 'Action', 'Fighting', 'Handheld', 8, 19, 'Game Boy Advance'),
('Megaman 3', 'Action', 'Sidescroller', 'Handheld', 9, 18, 'NES');

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProdName` varchar(50) DEFAULT NULL,
  `ProductID` int(11) NOT NULL,
  `Price` double(5,2) DEFAULT NULL,
  `Discount` double(5,2) DEFAULT NULL,
  `ImageLink` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProdName`, `ProductID`, `Price`, `Discount`, `ImageLink`) VALUES
('God Of War 2', 1, 500.00, 0.00, 'https://th.bing.com/th/id/R.34fb8c4a0745efa7f432e5951ef37e8d?rik=i75r28VxHGTeiQ&pid=ImgRaw&r=0'),
('Pokemon Emerald', 2, 200.00, 10.00, 'https://th.bing.com/th/id/OIP.VgQ0vi3z5y-yrcTNCebwcwHaHa?pid=ImgDet&rs=1'),
('Metal Gear Solid', 3, 300.00, 0.00, 'https://www.mobygames.com/images/covers/l/5777-metal-gear-solid-playstation-front-cover.jpg'),
('Dragon Ball Z: Shin Budok', 4, 200.00, 0.00, 'https://th.bing.com/th/id/OIP.2Z8Bvipe1h-A51JtYO0gKgHaM4?pid=ImgDet&rs=1'),
('Pokemon Black', 5, 250.00, 0.00, 'https://th.bing.com/th/id/R.2e0249e82072719944847ae273b1451e?rik=qaM5XD1atG51jA&pid=ImgRaw&r=0'),
('Mario RPG Maker', 6, 150.00, 0.00, 'https://th.bing.com/th/id/OIP.efOGktHan1Z69y5jWnxJ5AHaGP?pid=ImgDet&rs=1'),
('Zelda Twilight Princess', 7, 300.00, 0.00, 'https://th.bing.com/th/id/OIP.LyaWcLHzhZfL40qUDMryPQHaKd?pid=ImgDet&w=183&h=258&c=7'),
('Prince Of Persia', 10, 150.00, 0.00, 'https://th.bing.com/th/id/R.216e443c7cdb03fb7a022ce4eba396e0?rik=1LmONmQ3lXp3BQ&riu=http%3a%2f%2fwww.firsthour.net%2fscreenshots%2fprince-of-persia%2fprince-of-persia-cover.jpg&ehk=rGA1ZZW9BhPG8ETN8zUeWY1A5qRpLtaIJnobn%2bBVq3s%3d&risl=&pid=ImgRaw&r=0'),
('House Of The Dead 2', 11, 100.00, 0.00, 'https://th.bing.com/th/id/R.bbf8bbc8ca74a74fe83694c2fae4450e?rik=SfyQFGFytZ%2biuw&pid=ImgRaw&r=0'),
('Pokemon Rangers', 12, 200.00, 0.00, 'https://www.mobygames.com/images/covers/l/75614-pokemon-ranger-nintendo-ds-front-cover.jpg'),
('Fifa 2002', 13, 140.00, 0.00, 'https://upload.wikimedia.org/wikipedia/en/c/c7/2002_FIFA_World_Cup_Coverart.jpg'),
('Legend Of Zelda: Occarina Of Time', 14, 120.00, 0.00, 'https://upload.wikimedia.org/wikipedia/en/5/57/The_Legend_of_Zelda_Ocarina_of_Time.jpg'),
('King Of Fighters PS2', 15, 100.00, 0.00, 'https://th.bing.com/th/id/R.628135498271fe88c211c728e17890af?rik=PiLueysAKaCBvQ&pid=ImgRaw&r=0'),
('Mario Kart', 16, 130.00, 0.00, 'https://th.bing.com/th/id/R.c0a68a9f7a75ace2a4aca691e7c8eecf?rik=LSdhXaKt6cgehw&pid=ImgRaw&r=0'),
('God of War', 17, 200.00, 0.00, 'https://th.bing.com/th/id/R.b79cc9df9d20d711d8a41a35245da399?rik=Q0NOkg%2b8KuY3cQ&pid=ImgRaw&r=0'),
('Megaman 3', 18, 120.00, 0.00, 'https://th.bing.com/th/id/R.276a6c6faf538f23baa561291287ed5c?rik=pMELvwuyXkrO4g&riu=http%3a%2f%2fwww.mobygames.com%2fimages%2fcovers%2fl%2f41576-mega-man-4-nes-front-cover.jpg&ehk=5YRWPvvHIaGEOj5fwphX5zT0ExGdXw1vvrIUfd8NW6I%3d&risl=&pid=ImgRaw&r=0'),
('Dragon Ball Z: Supersonic Warriors', 19, 100.00, 0.00, 'https://th.bing.com/th/id/OIP.TBzCu0z4FMOTNNa47guA_QHaGp?pid=ImgDet&rs=1'),
('Halo', 20, 180.00, 0.00, 'https://th.bing.com/th/id/OIP.GRakB3xFfBuPULg0THLGcwHaKl?pid=ImgDet&rs=1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(3) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `FaveGame` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Email`, `Password`, `FaveGame`) VALUES
(1, 'Taher122', NULL, 'a2c4dbf5b13df5130618', NULL),
(2, 'Niloy123', NULL, '123456', NULL),
(3, 'Niloy123', NULL, '1232', NULL),
(4, 'Niloy123', NULL, '1232jweljle', NULL),
(5, 'Niloy123', NULL, '12345', NULL),
(6, 'Niloy123', NULL, '11223', NULL),
(7, 'Niloy123', NULL, '09876', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`AccID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`ConsoleID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustID`),
  ADD KEY `UserID` (`UserID`);

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
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ProductID`,`InStock`);

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
  MODIFY `AccID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `console`
--
ALTER TABLE `console`
  MODIFY `ConsoleID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerreceipt`
--
ALTER TABLE `customerreceipt`
  MODIFY `OrderID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `GameID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessory`
--
ALTER TABLE `accessory`
  ADD CONSTRAINT `accessory_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `console`
--
ALTER TABLE `console`
  ADD CONSTRAINT `console_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

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
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
