-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2020 at 03:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(10) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL,
  `paragraph` longtext NOT NULL,
  `review_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `title`, `image`, `paragraph`, `review_id`) VALUES
(1, 'Fifa 20', 'Fifa20.jpeg', 'The studio has approached such complaints constructively. FIFA 20 Ultimate Team gets a re-structure of sorts via an all-encompassing feature called Seasons, whereby every activity you complete scores XP towards tangible rewards. These are smartly tiered to placate newcomers and well-versed players alike: early bonuses include loans for Virgil van Dijk and Eden Hazard, while those who commit the necessary time can eventually turn 96,055 XP into 85-rated Wilfried Zaha or Lucas Vazquez cards. \r\n\r\nMyriad other changes impress similarly, even if they’re largely a case of redecoration over renovation. Offline Squad Battles, where you tackle a series of AI line-ups across the week to score Monday rewards, are bolstered by the option to refresh opponents at any time, up to eight times per week – no longer forcing you to log in daily or have your leaderboard spot suffer. The squad screen is completely redesigned and makes replacing players from within your club or the transfer market much swifter. Customisable celebrations and Tifo displays add a welcome element of personalisation, albeit one which won’t matter to hardcore Weekend Leaguers.', 1),
(2, 'Pokemon Sword ', 'Pokemon.jpeg', 'Sword and Shield introduce players to the new Galar region. Inspired by the UK, this region is characterful and utterly full of personality. It has a cohesive identity that affectionately caricatures British pop culture and speech, while each town and city that make it up still manages to have its own utterly distinct look, resulting in a region that’s a playful mix of modernity and mythology. We had a niggling feeling as we wandered around the suspiciously clean cities and green rolling hills that this is potentially what some have convinced themselves the pre-EU UK once looked like. Galar is idyllic bordering on fantastical. \r\n\r\nDrawing on British culture and folklore in a similarly successful manner are the new Pokémon native to this region. These regional variants and completely new creations are some of the best Pokémon designs we’ve seen in a long time, not only because they’re so creative and likeable but because they actually introduce some exciting new type combinations, adding a greater capacity for variety and balance when building your team.', 2),
(3, 'fallout 76', 'fallout76.jpeg', 'Valley Galleria is a rotting shopping mall in Fallout 76, and one of the most eerie and unsettling places I\'ve ever visited in a game. It\'s dark and spooky, with cheery music still faintly echoing through the grimy, decaying halls. It\'s my first time here and this place scares the crap out of me. I immediately drop into a crouch and ready my rifle, terrified of what unknown horrors I might find inside. I have a quest to complete here but now I\'m too nervous to crabwalk more than a few feet at a time.\r\n\r\nCut to a few minutes later, and I\'m jogging briskly through the Galleria, following my quest markers, my fear completely gone. The atmosphere of horror lifted when I discovered the mall was filled with Scorched, Fallout 76\'s less-interesting version of raiders, the same enemy type I\'ve been killing since I first stepped out of the vault 50 hours ago. Now, I just slash them down with my spiked sword when they get in my way, and follow the yellow icons on my radar.\r\n\r\nFallout 76 is a lot like Valley Galleria. It\'s a fantastic and evocative setting for a game, but the novelty of its sights disperse quickly and you\'re back to following quest markers and absentmindedly killing the same crowd of monsters, again and again.', 3),
(4, 'Cyberpunk', 'cyberpunk.jpg', 'Cyberpunk 2077 is the next big RPG from CD Projekt RED after concluding the Witcher series. Silver swords are out, but cybernetic blades are very much in. For a couple months, information about Cyberpunk 2077 was dropping almost every week. We met Keanu Reeves\' character, got details about the story, and have seen several new videos both trailers and gameplay. \r\n\r\nWith release day pushed back to September from its initial April date, there\'s still plenty of time for CD Projekt RED to drip feed new information. Until then, we\'ve absorbed all of the precious Cyberpunk 2077 deets and consolidated them into a digestible briefing. When the information train starts back up again, you\'ll be able to find out what\'s new right here.\r\n\r\nHere\'s everything you need to know about Cyberpunk 2077.\r\n\r\nCDPR has previously explained that each of Cyberpunk\'s quests is \"handcrafted,\" including the Street Stories, side quests similar to Geralt\'s monster hunting contracts in The Witcher 3. \r\n\r\nIn a new interview with OnMSFT, CD Projekt\'s Krakow studio head John Mamais said there will be about 75 such Street Stories and explained a bit more about how they\'ll work. \r\n\r\n\"I think there’s around 75 street stories. Then there’s minor activities as well,\" Mamais said. \"The street stories are like little quests. There’s story but there’s not, like, advanced cinematic storytelling sequences so much. They’re a way to explore the world and level-up your character.\r\n\r\n\"They’re all custom done. There’s nothing like that that’s automatically generated. There are set templates that the guys can use but each one is customized to make them feel unique. The world’s going to be filled with that stuff. It should feel really good.\"', 4);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(5) NOT NULL,
  `user_id` int(10) NOT NULL,
  `review_id` int(10) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `review_id`, `text`) VALUES
(1, 32, 1, 'dasads'),
(2, 32, 1, 'ghjjgjgh'),
(3, 32, 2, 'ljghjhg'),
(4, 32, 1, 'ghjggjggjghgh'),
(5, 32, 1, 'gjhgjgh'),
(6, 32, 2, 'I love the new legends'),
(7, 32, 1, 'dasds'),
(8, 32, 1, 'dsads'),
(9, 32, 1, 'dasdsa'),
(10, 32, 1, 'adsds'),
(11, 32, 1, 'adsdsa'),
(12, 32, 1, 'dda'),
(13, 32, 1, 'dsadsd'),
(14, 32, 1, 'dsadsa'),
(15, 32, 1, 'I love fifa'),
(16, 32, 1, 'sadsa'),
(17, 32, 1, 'nnmm,nm'),
(18, 32, 1, 'asdsa'),
(19, 32, 1, 'sddsads'),
(20, 32, 1, 'sdasdsd'),
(21, 32, 1, 'dsasdasad'),
(22, 32, 1, 'dasds'),
(23, 32, 1, 'Ronaldo is sick'),
(24, 32, 1, 'Ronaldo is good'),
(25, 32, 1, 'dssda'),
(26, 32, 3, 'Really good game'),
(27, 32, 3, 'asddsaasd'),
(28, 32, 3, 'dsdsasdadasdsdadssdasdasadads'),
(29, 32, 3, 'asdasdsd'),
(30, 32, 3, 'asdsdads'),
(31, 32, 3, 'dssdds'),
(32, 32, 3, 'dasdssda'),
(33, 32, 3, 'What is your favourite game '),
(34, 32, 3, 'dsasdsd'),
(35, 32, 1, 'Hello'),
(36, 32, 1, 'sdsda'),
(37, 32, 1, 'I love fifa 20'),
(38, 32, 1, 'Fifa 20 is slow'),
(39, 32, 4, 'keanu reeves is a bad ass'),
(40, 32, 4, 'I really want to play this game loooool');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20200229090000);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(5) NOT NULL,
  `review` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `console` varchar(100) NOT NULL,
  `slug` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review`, `image`, `title`, `console`, `slug`) VALUES
(1, 'This is a football Game', 'Images/Fifa20.jpeg', 'Fifa20', 'ps4,xbox-one,Nintendo-Switch', 'fifa-20'),
(2, 'This is an rpg game', 'Images/Pokemon.jpeg', 'Pokemon Sword ', 'Nintendo Switch', 'pokemon-sword'),
(3, 'This is an action game', 'Images/fallout76.jpeg', 'Fallout76', 'ps4,Xbox-one', 'fallout-76'),
(4, 'Action game', 'Images/cyberpunk.jpg', 'Cyberpunk', 'Ps4,Xbox One', 'cyber-punk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text DEFAULT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `telephone` varchar(16) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `darkmode` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `telephone`, `dob`, `isAdmin`, `darkmode`) VALUES
(32, 'lee34', '123', 'Lee', 'Pop', 'Lee34@gmail.com', '01618932804', '1998-04-24', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
