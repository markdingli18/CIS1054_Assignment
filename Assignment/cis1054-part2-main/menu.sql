-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 10:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Salads'),
(2, 'Platters'),
(3, 'Pasta Dishes'),
(4, 'Fish Dishes'),
(5, 'Meat Dishes'),
(6, 'Pizza');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(700) NOT NULL,
  `ingredients` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category`, `image`, `name`, `price`, `description`, `ingredients`) VALUES
(1, 1, "assets/images/Menu/summerdel.jpg", "Summer\'s Delight","€9.45", "This is a very simple but a healthy dish on the menu. It is made up of fresh and local ingredients all coming from our own garden", "Mozzarella, tomatoes, basil and onions"),
(2, 1, "assets/images/Menu/tuna.jpg", "Tuna", "€9.95", "The ingredients in this salad fit together quite well and as a result they make up one of the best tuna salad.", "Tuna chunks, anchovies and a hardboiled egg"),
(3, 1, "assets/images/Menu/parma.jpg", "Parma Ham and Melon", "€11.95", "This is our take on bringing an italian cusine on our menu. This one of the most popular thing around italy. The flavours in this dish are out of this world.", "Fined cured Italian Parma ham and melon"),
(4, 1, "assets/images/Menu/caeser.jpg", "Caeser", "€11.95","This is one of the most popular dish in the salads section. It has a lot of fresh ingredients that make up a good health salad. This is a must if one is going for a healthy option", "Lettuce and croutons dressed with lemon juice, olive oil, egg, Worchster sauce, anchovies, garlic, Dijon mustard, Parmesan cheese and black pepper"),
(5, 1, "assets/images/Menu/salad1.jpg", "Highlands", "€12.95", "Highlands is prepared with fresh smoked salmon in order to elevatte more the plate.", "Smoked Salmon and avacado"),
(6, 2, "assets/images/Menu/platter1.jpg", "Sea Breeze Platter", "€12.95 / €23.00", "If you are a big group of people and would like something to share than this platter is ideal. It serves around 1 or 2 people and is made up of fresh fish bought from the market and prepared by our am", "Serves 1/Serves 2. Cuts of smoked fish, with tail on shrimp and mussels, on a bed of rucola, served with tartar sauce"),
(7, 2, "assets/images/Menu/platter.jpg", "Gozo Platter", "€10.95/€19.00", "This platter serves 1 or two people. If you like to taste the traditional food Malta and Gozo offers then this platter is ideal. This is like heaven on a plate", "Peppered Gozo cheese, tomato wedges, local Maltese sausage, capers, olives, sun-dried tomatoes, water biscuits, tomato paste and butter beans"),
(8, 3, "assets/images/Menu/raviolli.jpg", "Homemade Ravioli", "€7.25/€11.95", "Homemade Raviolli are generally stuffed from our fresh local sheep cheese, topped of with homemade tomato sauce, garlic and basil. This is one of the most popular dish on the menu", "Ravioli stuffed with local sheep cheese and drizzled with tomato, garlic and basil sauce"),
(9, 3, "assets/images/Menu/pasta2.jpg", "Marinara", "€9.95/€13.50", "Fresh fish served with some of the best ingredients. The flavours in this dish are exceptional", "Spaghetti served with a variety of seafood and shellfish, cooked in garlic, mixed herbs, tomato sauce, white wine and homemade olive oil"),
(10, 3, "assets/images/Menu/tortellini.jpg", "Tortellini", "€8.95/€11.95", "This plate is made up of mushrooms and cream with bacon and our ricotta and spinach filling tortellini. This is quite a simple plate but the flavours are incredible", "Ricotta and spinach filling, served with bacon, mushrooms and cream"),
(11, 3, "assets/images/Menu/salmonrav.jpg", "Rettangoli", "€9.25/€12.95", "This plate is similar to the homemade ravioli but these are filled with salmon and ricotta. For those who love seafood and pasta then this is the right plate for you.", "Salmon and ricotta filled ravioli, served with medium prawns and cherry tomatoes cooked in white wine, homemade olive oil and garlic"),
(12, 3, "assets/images/Menu/coniglio.jpg", "Coniglio", "€9.65/€12.95", "This dish is cooked with local ingredients in order to bring out the traditional flavours the dish has.", "Spaghetti with traditional local rabbit, tomato sauce, peas and garlic"),
(13, 4, "assets/images/Menu/catch.jpg", "Catch of the day", "Market Price", "Kindly ask our staff in order to guide to our speciality on our menu for today", "Our staff will happily guide you to the perfect selection"),
(14, 4, "assets/images/Menu/salmon1.jpg", "Grilled Atlantic Salmon", "€19.00", "This is a freshly baked herb salmon,served with fresh seasonal vegetables and roasted potatoes. The salmon is cooked with such care in order to serve clients their best dish.", "Slowly baked herb crusted salmon drizzled with a buttery lemon sauce"),
(15, 4, "assets/images/Menu/pot.jpg", "The Shellfish Pot", "€21.00", "This is served in a plate full of shellfish that is sautéed in white wine, garlic, cherry tomatoes and mixed fresh herbs. These components add more flavours to the plate.", "Variety of shellfish sautéed in white wine, garlic, cherry tomatoes and mixed fresh herbs"),
(16, 4, "assets/images/Menu/prawns.jpg", "Fresh King Prawns", "€24.00", "The brandy adds a great flavour to this dish. The braised king prawns is then served on top of a bed of rice. ", "Braised king prawns in garlic and herb oil, flamed with Brandy and served with rice"),
(17, 4, "assets/images/Menu/fish.jpg", "The Fishermans Choice", "24.50", "This dish serves fresh seasonal fish with calamari and fresh mussels, with the chefs choice of ingredients.", "Three types of seasonal fish, calamari and fresh mussels"),
(18, 5, "assets/images/Menu/ribs.jpg", "BBQ Spare Ribs", "€22.00", "The spare ribs are seasoned overnight in order to absorb their seasoning, then they are glazed in our homemade barbecue sauce and roasted until tender. This plate takes a lot of dedication and time.", "Marinated pork spare ribs glazed in our homemade barbecue sauce and roasted until fork tender"),
(19, 5, "assets/images/Menu/lamb.jpg", "Lamb Chops", "€20.00", "First they are seasoned well, then they are placed on the grill in order to get the char-grilled effect. The chef will cook the meat to ones liking. The dish also comes with our homemade mint sauce", "Char-grilled lamb chops served with our homemade fresh mint sauce"),
(20, 5, "assets/images/Menu/tagliata.jpg", "Beef Tagliata", "€24.75", "The beef tagliata is grilled to the customers liking and then carved into thin slices and served on a bed of rucola, topped with grana shavings. Also as a side dish vegetables and roasted potatoes are", "Thick steak, grilled then carved into thin slices and served on a bed of rucola, topped with grana shavings"),
(21, 5, "assets/images/Menu/ribeye.jpg", "Grilled Rib-Eye Steak", "€26.00", "The ribeye is seasoned well, then placed on the grill and cooked to the customers liking. This is served with our homemade pepper or mushroom sauce. As a side dish this comes with vegetables as well as vegetables", "Char-grilled rib-eye served with our homemade pepper or mushroom sauce"),
(22, 5, "assets/images/Menu/rabbit.jpg", "Traditional Gozitan Rabbit", "€18.50", "The chef cooks the rabbit in a very traditional way with peas, herbs from our garden, garllic and white wine gravy. These ingredients makes the dish more flavourful", "Fried in garlic, peas, herbs, in a white wine gravy"),
(23, 5, "assets/images/Menu/chicken.jpg", "Chicken Breast", "€18.50", "The chicken breast is sautéed in gravy, topped with Parma ham and mozzarella. This will make the dish look appetizing", "Tender chicken breast sautéed in gravy, topped with Parma ham and mozzarella"),
(24, 6, "assets/images/Menu/margherita.jpg", "Margherita", "€7.50", "Although it is simple it is also popular on the pizza menu", "Tomato sauce, mozzarella and oregano"),
(25, 6, "assets/images/Menu/pizza2.jpg", "BBQ Chicken", "€9.25", "This pizza is made up of chicken chunks with sweetcorn, onions and BBQ sauce. The sweetness from the BBQ sauce and sweetcorn make the flavours more elevated.", "Tomato sauce, mozzarella, chicken, sweetcorn, onions, BBQ sauce"),
(26, 6, "assets/images/Menu/pizza3.jpg", "Capricciosa", "€8.50", "This is by far the most popular pizza on the menu. It is topped with fresh ingredients.", "Tomato sauce, mozzarella, eggs, ham, mushrooms, sausages and oregano"),
(27, 6, "assets/images/Menu/pizza4.jpg", "Diavolo", "€8.50", "It has a kick to it with the spicy Italian salami and chilli, so if you are not good with spice I would not recommend", "Tomato sauce, mozzarella, spicy Italian salami, chilli, onions and oregano"),
(28, 6, "assets/images/Menu/pizza5.jpg", "Napolitana", "€7.95", "This pizza is simple but one of the most popular", "Tomato sauce, mozzarella, anchovies, olives and oregano"),
(29, 6, "assets/images/Menu/pizza7.jpg", "Crudo", "€10.50", "The chefs cooke the dough with their tomato sauce and after it is done they place parma ham, rucola and paresan shavings.", "Tomato sauce, mozzarella, Parma ham, rucola and parmesan shavings"),
(30, 6, "assets/images/Menu/pizza8.jpg", "Frutti Di Mare", "€10.95", "This is one of the best and most popular pizza on our menu since it is filled with seafood items.", "Tomato sauce, mozzarella, shrimps, tuna, fresh mussels, olives and oregano"),
(31, 6, "assets/images/Menu/pizza9.jpg", "Meat Lovers", "€10.95", "Pizza made up of all salami and pepperoni found on the menu.", "Tomato sauce, mozzarella, pepperoni, spicy Italian salami, ham, bacon, local Maltese sausage and oregano");
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
