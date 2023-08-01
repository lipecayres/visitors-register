CREATE TABLE `people` (
  `id` int(11) NOT NULL ,
  `fname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
);

INSERT INTO `people` (`id`, `fname`, `city`) VALUES
(1, 'Felipe', 'Toronto'),
(2, 'Peter Parker', 'New York'),
(3, 'Batman', 'Gotham'),
(4, 'Black Panther', 'Wakanda'),
(5, 'Harry Potter', 'Hogsmeade'),
(6, 'Superman', 'Metropolis'),
(7, 'Shrek', 'Far Far Away Kingdom '),
(8, 'Shikamaru', 'Hidden Leaf Village');

ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;


CREATE TABLE `phpadmins` (
  `user_id` int(11) NOT NULL PRIMARY KEY,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
);