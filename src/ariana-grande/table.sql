CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `id_post`, `date`) VALUES
(1,'George','george@gmail.com','Hello World',1,'2016-11-30 15:30:52'),
(2,'John','john@yahoo.com','Ariana is the best',1,'2016-12-05 17:13:23'),
(3,'Mary','mary@gmail.com','Concert tomorrow night',1,'2016-12-12 12:27:01'),
(4,'Kate','kate@yahoo.com','Getting ready to see her!!',1,'2016-12-16 22:45:43'),
(5,'Ryan','ryan@hotmail.com','Great site',1,'2016-12-19 10:35:28'),
(6,'Virginia','virginia@hotmail.com','I love you Ariana',1,'2016-12-22 20:12:20'),
(7,'Bill','bill@yahoo.com','Cant''s stop listening to "side to side"',1,'2016-12-22 23:10:40'),
(8,'Juddy','juddy@gmail.com','Ariana, can''t wait to hear you live',1,'2016-12-24 15:24:37'),
(9,'Chris','chris@hotmail.com','Merry Christmas everybody',1,'2016-12-25 14:25:55'),
(10,'Steve','steve@gmail.com','Check the quiz out!',1,'2016-12-27 19:47:20'),
(11,'Edward','edward@yahoo.com','Almost the end of an "amazing" year..',1,'2016-12-29 03:13:23'),
(12,'Charlie','charlie@hotmail.com','Happy New Year fellow fans!!',1,'2017-01-01 23:29:31');