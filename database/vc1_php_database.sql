-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vc1_php&database`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `categoryName`) VALUES
(1, 'Food'),
(2, 'soft_drink'),
(3, 'desert');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `public_date` datetime DEFAULT NULL,
  `profile` varchar(300) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `productName`, `description`, `public_date`, `profile`, `price`, `category_id`) VALUES
(99, 'Fried nugget', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-61214a49877b27.84649536.png', 5, 1),
(101, 'Bell pepper', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-612144ca0d4ad9.51113180.jpg', 6, 1),
(102, 'Tulip croissant', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-61214ae50c5fb6.69029342.jpg', 4, 1),
(104, 'Nimantran pune', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-6121484e881b34.16816683.jpg', 4, 1),
(105, 'Fish Continental', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-612250be496c10.36575474.png', 3, 1),
(106, 'Kudla chanadi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-612149a655f926.86317517.jpg', 6, 1),
(107, 'Raspberry yogurt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-61214f32478bc4.09623939.jpg', 3, 2),
(108, 'Cocktail Strawberry', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-61214effc725e4.18962837.jpg', 4, 2),
(109, 'Juice pomegranate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-61214d3d0f07e5.98599099.jpg', 2, 2),
(110, 'Pineapple melone', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-61214f59406f81.01236387.jpg', 3, 2),
(111, 'Banana strawberry', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-61214dd924e833.11435583.jpg', 3, 2),
(112, 'Juice stemware', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-61214f712c0892.89482987.jpg', 3, 2),
(113, 'Strawberry saucer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-6121500b80eaf2.92352612.jpg', 2, 3),
(114, 'Cake strawberry', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-6121504b6794d1.67028263.jpg', 3, 3),
(115, 'Cream strawberry', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-612150aadb8de6.59728401.jpg', 4, 3),
(116, 'Foliage dessert', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-612150d515d3d3.68458578.jpg', 3, 3),
(117, 'Cake raspberry', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-6121513be79b64.64256655.jpg', 4, 3),
(118, 'Cake fruit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-61215193d36432.84305520.jpg', 10, 3),
(120, 'Cake chocolate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-612152499d6471.78519968.jpg', 15, 3),
(121, 'chocolate rose', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum fugiat facilis eum architecto quam numquam deserunt reprehenderit beatae dolores, vitae magnam ad corrupti delectus amet dicta nihil nulla! Mollitia nam facilis repudiandae aut maiores saepe consequatur ratione nihil, iusto molestiae ipsum sit voluptatum non natus tenetur commodi facere odio illo maxime voluptate? Non dolorem suscipit nesciunt aspernatur quas, alias aliquam sequi minus! Non nesciunt odio excepturi aspernatur ipsa min', '2021-08-22 00:00:00', 'php-612153678c97a4.29901252.jpg', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `profile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`user_id`, `username`, `password`, `email`, `user_type`, `profile`) VALUES
(1, 'sinet', '$2y$10$yoeDZJhVgQPpgbFpomTo8uPI9AfsypDNeRRUOxJ9Wh2WLI8fIQ826', 'sinet.sem@gmail.com', 'admin', 'php-6120ad6f8bbf31.99870948.jpg'),
(21, 'chanda', '$2y$10$zr6ZGTXx4YkemzmC3DnD5.Ufr.9mUQ5pprmT7a3YP46FhqAC9gF02', 'chanda.chen@gmail.com', 'admin', 'php-6121ae5b7085b4.51576299.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
