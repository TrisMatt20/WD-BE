-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 02:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(500) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'Friendship Island.png', 'As a kid, I spent a lot of time indoors because my parents were very strict about letting me go out. But when I was about 9 years old, they finally allowed me to explore. I still vividly remember the joy of making my first friend and playing together. It was like discovering a whole new world outside our home, full of connection and adventure.', NULL),
(2, 1, 'Friendship Island.png', 'In 10th grade, I met my best friend, Louie, a truly unforgettable person who stood out from everyone else I’d ever known. He embodied all the qualities you’d hope for in a best friend. Together, we shared countless moments, created beautiful memories, and most importantly, we grew and became better versions of ourselves side by side.', NULL),
(3, 1, 'Friendship Island.png', 'When I started college at PUP Sto. Tomas in 2022, I encountered all kinds of people, but I never expected to meet someone I’d come to see as a sister. Yet, I did—her name is Jade. She’s one of the smartest, most supportive, and truly remarkable people I’ve ever met. Together, with Louie and Jade, our circle became one of the most cherished and defining parts of my life in this universe.', NULL),
(5, 2, 'Pixel Peak.png', 'When I was 8, I played my first video game, NBA 2K14, on our old PC. I’ll never forget the joy and excitement of that moment, the dribbling, shooting, and immersing myself in the game. It wasn’t just about playing; it was about the memories and happiness it brought into my childhood.', NULL),
(6, 2, 'Pixel Peak.png', 'When I got my first mobile phone, I discovered Clash of Clans, my first mobile game. It was all about building your base, attacking others for trophies, and climbing the ranks. Beyond the gameplay, it introduced me to a world of multiplayer fun where I made many online friends, creating unforgettable memories.', NULL),
(7, 2, 'Pixel Peak.png', 'During junior high, I discovered Mobile Legends: Bang Bang, a 5v5 multiplayer online battle arena. The thrill of teamwork and strategy made it unforgettable. Through this game, I made many friends and cherished memories, and even now, I still enjoy playing and reliving those moments.', NULL),
(8, 3, 'Hoop Haven.png', 'When I was 7, I played basketball for the first time. I still vividly remember my first shot—it went in! It felt like the best day of my life. I was so excited and proud that I couldn’t wait to tell everyone about it. That moment sparked a love for basketball that still burns bright.', NULL),
(9, 3, 'Hoop Haven.png', 'At 13, I joined my first inter-color basketball league in my barangay. I was so nervous with the crowd watching, but when I hit my first three-pointer, the cheers erupted. That moment of joy and pride was unforgettable—a memory that still fuels my love for the game.', NULL),
(10, 3, 'Hoop Haven.png', 'In the last inter-color league in our barangay, our team made its first-ever championship appearance after 7 years of competing. It was a moment of pride and joy for all of us. Though we didn’t win, the journey and achievement of reaching the finals will always be a highlight of my basketball experience.', NULL),
(11, 4, 'TechnoSphere.png', 'I remember when we got our first PC as a kid. Driven by curiosity, I explored its insides and accidentally broke something, causing the PC to stop booting for a few days. My parents were angry at the time, but luckily the problem was fixed, and the PC was up and running again.', NULL),
(12, 4, 'TechnoSphere.png', 'When I was a kid, I learned a valuable lesson. Our PC’s CPU needed cleaning, so I took it upon myself to fix it. I was nervous, worried I might break something, but luckily, I successfully cleaned the PC. I felt so proud of myself for overcoming the challenge and fixing the problem.', NULL),
(13, 4, 'TechnoSphere.png', 'When I was in college, I pursued Information Technology, a field deeply rooted in technology. When I first tried programming, it felt like I was breaking the system, but in reality, I was creating my own programs. The excitement of building something useful for the future made me incredibly happy and motivated.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(1500) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Bonding Bay', 'This island is the foundation of my strongest bonds. Here reside laughter, shared experiences, and countless memories forged with friends—adventures that have shaped our connection. It\'s a place where the spirit of friendship thrives, reminding me of the special people by my side.', 'Bonding Bay is a unique and vibrant friendship island that reflects my journey of connection, shared experiences, and the meaningful relationships that shape who I am today. This island thrives on the moments spent with friends, each one adding to its dynamic landscape. At the heart of Bonding Bay lies my passion for forming strong bonds, highlighted by adventures shared, group achievements, and laughter-filled memories. These moments are symbolized by gathering spots, shared photo walls, and pathways lined with stories of friendship.\n\nAs I continue my journey through life, especially as a third-year Information Technology student at the Polytechnic University of the Philippines, Bonding Bay grows with every new interaction and experience. It reflects my commitment to nurturing relationships, supporting my friends, and creating lasting memories. It’s a place where teamwork, trust, and the joy of being there for each other come together. Every corner of Bonding Bay tells the story of my connections—from the first moments of friendship to the deep bonds that continue to strengthen over time.\n', '#FAD693', 'Friendship Island.png', NULL),
(2, 'Pixel Peak', 'Pixel Peak Island embodies my gaming experiences, showcasing my passion for immersive worlds, strategic thinking, and creative exploration. It\'s where my favorite gaming moments, achievements, and adventures come to life, reminding me of the thrill and joy in every challenge.', 'Pixel Peak is my vibrant personality island that celebrates my deep connection to the world of gaming. It\'s a place where my passion for immersive virtual experiences thrives, with each game I play shaping the landscape of this island. Whether I\'m strategizing in Mobile Legends, perfecting my skills in NBA 2K, or exploring new adventures in countless other games, Pixel Peak reflects the joy, excitement, and creativity that gaming brings into my life. \n\nPixel Peak is also a place of connection, where I bond with friends and fellow gamers, sharing victories, stories, and experiences. It\'s an island that represents my ability to balance fun, skill, and camaraderie, all while continuously exploring new worlds, unlocking new levels, and pushing my limits as a gamer. It’s a space where creativity, strategy, and competition blend into a reflection of my passion for gaming and the world it creates.', '#4587C4', 'Pixel Peak.png', NULL),
(3, 'Hoop Haven', 'This island represents my basketball experiences. It\'s a place where my love for the sport, the thrill of competition, and the lessons of teamwork and determination come together, driving me to excel both on and off the court, pushing me to always strive for greatness.', 'Hoop Haven is my personality island dedicated to my love for basketball, representing the passion, teamwork, and determination that the sport instills in me. It’s a place where the thrill of the game comes to life, from the intense moments on the court to the lessons learned off it. Whether I’m playing a pickup game, practicing shots, or watching my favorite teams, Hoop Haven reflects the drive and excitement I feel whenever I’m involved in basketball.\n\nHoop Haven is more than just a reflection of my athletic side—it’s a symbol of my mental resilience, leadership, and dedication to teamwork. It’s a space where my love for the game blends with the life lessons it imparts, shaping my character and motivating me to keep striving for excellence in every aspect of my life.', '#C8582F', 'Hoop Haven.png', NULL),
(4, 'TechnoSphere', 'Technosphere Island holds my knowledge and experiences in the technical world. It\'s a hub where my passion for innovation, problem-solving, and continuous learning in technology thrive, driving me to explore and create in the ever-evolving digital landscape.', 'Technosphere is my personality island that represents my deep connection to the technical world, where innovation, problem-solving, and continuous learning converge. It’s a dynamic space fueled by my passion for technology, programming, and the digital landscape that constantly evolves around me. At the core of Technosphere is my desire to explore, create, and push the boundaries of what’s possible in the world of tech.\n\nThis island is filled with structures that symbolize my journey in the world of IT—from coding stations and algorithm hubs to innovation labs where new ideas and projects come to life. Technosphere is where I challenge myself to solve problems, improve my skills, and stay curious in a rapidly changing technological landscape. Whether I’m building new websites, diving into programming languages, or experimenting with the latest tech trends, this island represents my commitment to growth and exploration.', '#1A4291', 'TechnoSphere.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
