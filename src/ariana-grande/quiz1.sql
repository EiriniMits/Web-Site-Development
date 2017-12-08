

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_name` text NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


INSERT INTO `questions` (`id`, `question_name`, `image1`, `image2`, `image3`, `image4`, `answer`) VALUES
(1, 'Who is Ariana''s celebrity crush?', 'pictures/mickjagger.jpg', 'pictures/adamlevine.png', 'pictures/bonjovi.jpg', 'pictures/brunomars.jpg', '3'),
(2, 'Which of these things is Ariana not allergic to?', 'pictures/pollen.jpg', 'pictures/banana.jpg', 'pictures/cat.jpg', 'pictures/shellfish.jpg', '1'),
(3, 'What state is Ariana from?', 'pictures/florida.jpg', 'pictures/newyork.jpg', 'pictures/texas.jpg', 'pictures/california.jpg', '1'),
(4, 'What color is Ariana''s hair naturally?', 'pictures/red.jpg', 'pictures/brown.jpg', 'pictures/black.jpg', 'pictures/blonde.jpg', '2'),
(5, 'What is Ariana''s favorite sport?', 'pictures/tennis.jpg', 'pictures/soccer.jpg', 'pictures/gymnastics.jpg', 'pictures/swimming.jpg', '4');


