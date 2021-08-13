-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 07:49 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `GenresID` int(50) NOT NULL,
  `GenresName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`GenresID`, `GenresName`) VALUES
(1, 'Marvel Toy');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `UserNameC` varchar(1000) NOT NULL,
  `Bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE `singer` (
  `SingerID` int(50) NOT NULL,
  `SingerName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`SingerID`, `SingerName`) VALUES
(1, 'Stan Lee');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `SongID` int(50) NOT NULL,
  `SongName` varchar(1000) NOT NULL,
  `SongPrice` varchar(1000) NOT NULL,
  `SongImg` varchar(1000) NOT NULL,
  `Mp3` varchar(10000) NOT NULL,
  `SongDes` varchar(1000) NOT NULL,
  `SingerID` int(11) NOT NULL,
  `GenresID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`SongID`, `SongName`, `SongPrice`, `SongImg`, `Mp3`, `SongDes`, `SingerID`, `GenresID`) VALUES
(1, 'Đồ chơi mô hình Hulk', '40', '26.jpg', '1.mp3', 'The Hulk is a fictional character and superhero appearing in publications by the American publisher Marvel Comics. Created by writer Stan Lee and artist Jack Kirby, the character first appeared in the debut issue of The Incredible Hulk (May 1962). In his comic book appearances, the character is both the Hulk, a green-skinned, hulking and muscular humanoid possessing a vast degree of physical strength, and his alter ego Dr. Robert Bruce Banner, a physically weak, socially withdrawn, and emotionally reserved physicist. The two exist as independent dissociative personalities, and resent each other.', 1, 1),
(2, 'Đồ chơi mô hình Spider man', '50', '16.jpg', '2.mp3', 'Spider-Man is a superhero created by writer-editor Stan Lee and writer-artist Steve Ditko. He first appeared in the anthology comic book Amazing Fantasy #15 (Aug. 1962) in the Silver Age of Comic Books. He appears in American comic books published by Marvel Comics, as well as in a number of movies, television shows, and video game adaptations set in the Marvel Universe. In the stories, Spider-Man is the alias of Peter Parker, an orphan raised by his Aunt May and Uncle Ben in New York City after his parents Richard and Mary Parker died in a plane crash. Lee and Ditko had the character deal with the struggles of adolescence and financial issues, and accompanied him with many supporting characters, such as J. Jonah Jameson, Harry Osborn, Max Modell, romantic interests Gwen Stacy and Mary Jane Watson, and foes such as Doctor Octopus, the Green Goblin and Venom. His origin story has him acquiring spider-related abilities after a bite from a radioactive spider; these include clinging to surf', 1, 1),
(3, 'Đồ chơi mô hình Hulk buster', '60', '17.jpg', '3.mp3', 'The Hulk is a fictional character and superhero appearing in publications by the American publisher Marvel Comics. Created by writer Stan Lee and artist Jack Kirby, the character first appeared in the debut issue of The Incredible Hulk (May 1962). In his comic book appearances, the character is both the Hulk, a green-skinned, hulking and muscular humanoid possessing a vast degree of physical strength, and his alter ego Dr. Robert Bruce Banner, a physically weak, socially withdrawn, and emotionally reserved physicist. The two exist as independent dissociative personalities, and resent each other.', 1, 1),
(4, 'Đồ chơi mô hình Venom', '50', '18.jpg', '4.mp3', 'Venom is a 2018 American superhero film featuring the Marvel Comics character of the same name, produced by Columbia Pictures in association with Marvel[5] and Tencent Pictures. Distributed by Sony Pictures Releasing, it is the first film in the Sony Pictures Universe of Marvel Characters. Directed by Ruben Fleischer from a screenplay by Jeff Pinkner, Scott Rosenberg, and Kelly Marcel, it stars Tom Hardy as Eddie Brock / Venom, alongside Michelle Williams, Riz Ahmed, Scott Haze, and Reid Scott. In Venom, journalist Brock gains superpowers after becoming the host of an alien symbiote whose species plans to invade Earth.', 1, 1),
(5, 'Đồ chơi mô hình Thanos', '50', '19.jpg', '5.mp3', 'Thanos is a fictional character appearing in American comic books published by Marvel Comics. He was created by writer-artist Jim Starlin, and made his first appearance in The Invincible Iron Man #55 (cover dated February 1973). An Eternal–Deviant warlord from the moon Titan, Thanos is regarded as one of the most powerful beings in the Marvel Universe. He has clashed with many heroes including the Avengers, the Guardians of the Galaxy, the Fantastic Four, and the X-Men.', 1, 1),
(6, 'Đồ chơi Mô hình Thor', '120', '27.jpg', '6.mp3', 'Thor Odinson is a fictional character portrayed by Chris Hemsworth in the Marvel Cinematic Universe (MCU) film franchise, based on the Marvel Comics character of the same name. In the films, Thor is one of the most powerful of the Asgardians, an ancient alien civilization with long ties to Earth, who humans consider to be gods. Thor is a founding and central member of the Avengers and joins the Guardians of the Galaxy.', 1, 1),
(7, 'Mô hình găng tay vô cực', '40', '21.jpg', '7.mp3', 'Găng tay Vô Cực (Infinity Gauntlet) là một vũ khí giả tưởng xuất hiện trong Marvel Comics và MCU. Găng tay Vô cực được chế tạo bởi vua của tộc người lùn xứ Nidavellir - nơi đã rèn búa thần Mjolnir và rìu Stormbreaker của Thor. Nó được thiết kế để chứa đựng cũng như sử dụng sức mạnh của 6 Viên đá Vô cực. Khi hợp nhất với 6 Viên đá Vô cực, người sở hữu Găng tay Vô Cực sẽ trở thành một người toàn trí (hiểu biết), toàn năng (toàn năng) và toàn diện (luôn hiện diện). Nói cách khác, nếu có món đồ này trong tay, bất kỳ ai cũng có thể sở hữu quyền năng sánh ngang một vị thần, quyền năng hơn cả các thực thể vũ trụ. Trong cả phiên bản điện ảnh và truyện tranh, Thanos với sức mạnh này đã tiêu diệt nửa sự sống trong vũ trụ với chỉ 1 cú búng tay. Ngoài Thanos, trong truyện tranh, Captain America, Iron Man, Hulk, Black Panther, Spider-Man, Nebula và Adam Warlock đã từng sử dụng Găng tay Vô Cực. Tuy nhiên, nếu không chứa 6 Viên đá Vô cực, Găng tay Vô Cực không có sức mạnh.', 1, 1),
(8, 'Đồ chơi mô hình Captain America', '70', '22.jpg', '8.mp3', 'Captain America is a superhero appearing in American comic books published by Marvel Comics. Created by cartoonists Joe Simon and Jack Kirby, the character first appeared in Captain America Comics #1 (cover dated March 1941) from Timely Comics, a predecessor of Marvel Comics. Captain America was designed as a patriotic supersoldier who often fought the Axis powers of World War II and was Timely Comics\' most popular character during the wartime period. The popularity of superheroes waned following the war, and the Captain America comic book was discontinued in 1950, with a short-lived revival in 1953. Since Marvel Comics revived the character in 1964, Captain America has remained in publication.', 1, 1),
(9, 'Đồ chơi mô hình Black Widow', '30', '23.jpg', '9.mp3', 'Black Widow is a 2021 American superhero film based on Marvel Comics featuring the character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the 24th film in the Marvel Cinematic Universe (MCU). The film was directed by Cate Shortland from a screenplay by Eric Pearson, and stars Scarlett Johansson as Natasha Romanoff / Black Widow alongside Florence Pugh, David Harbour, O-T Fagbenle, Olga Kurylenko, William Hurt, Ray Winstone, and Rachel Weisz. Set after the events of Captain America: Civil War (2016), the film sees Romanoff on the run and forced to confront her past.', 1, 1),
(10, 'Dây chuyền Doctor Strange', '20', '24.jpg', '10.mp3', 'Doctor strange', 1, 1),
(11, 'Đồ chơi mô hình Doctor Strange', '150', '25.jpg', '11.mp3', 'Doctor Stephen Strange is a fictional character appearing in American comic books published by Marvel Comics. Created by Stan Lee and Steve Ditko,[5] the character first appeared in Strange Tales #110 (cover-dated July 1963). Doctor Strange serves as the Sorcerer Supreme, the primary protector of Earth against magical and mystical threats. Inspired by stories of black magic and based on Chandu the Magician by Harry A. Earnshaw and Raymond R. Morgan, Strange was created during the Silver Age of Comic Books to bring a different kind of character and themes of mysticism to Marvel Comics.', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `song-order`
--

CREATE TABLE `song-order` (
  `SongID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `song-singer`
--

CREATE TABLE `song-singer` (
  `SongID` int(50) NOT NULL,
  `SingerID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoneNumber` int(20) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Password`, `PhoneNumber`, `FullName`, `Email`) VALUES
(1, 'dat', '123', 389979662, 'Pham Thanh Dat', 'datptbhaf190023@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`GenresID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`SingerID`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`SongID`),
  ADD KEY `SingerID` (`SingerID`),
  ADD KEY `GenresID` (`GenresID`);

--
-- Indexes for table `song-order`
--
ALTER TABLE `song-order`
  ADD PRIMARY KEY (`SongID`,`OrderID`),
  ADD KEY `fk1` (`OrderID`),
  ADD KEY `SongID` (`SongID`);

--
-- Indexes for table `song-singer`
--
ALTER TABLE `song-singer`
  ADD PRIMARY KEY (`SongID`,`SingerID`),
  ADD KEY `SingerID` (`SingerID`),
  ADD KEY `SongID` (`SongID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `GenresID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `singer`
--
ALTER TABLE `singer`
  MODIFY `SingerID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `SongID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `song-order`
--
ALTER TABLE `song-order`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `song-order_ibfk_1` FOREIGN KEY (`SongID`) REFERENCES `song` (`SongID`);

--
-- Constraints for table `song-singer`
--
ALTER TABLE `song-singer`
  ADD CONSTRAINT `song-singer_ibfk_1` FOREIGN KEY (`SingerID`) REFERENCES `singer` (`SingerID`),
  ADD CONSTRAINT `song-singer_ibfk_2` FOREIGN KEY (`SongID`) REFERENCES `song` (`SongID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
