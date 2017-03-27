-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 10:35 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `sale_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_type`) VALUES
(1, 'Fruits'),
(2, 'Vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `details` varchar(8000) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`, `details`, `stock`, `category_id`) VALUES
(1, 'Apple', 150, 'images/inventory/apple.jpg', 'Enjoy delicious, crisp, sugary sweet and juicy Fresho apples Fuji, which are procured from reputed growers and packed and stored with utmost care. They have a yellowish exterior with a delicate red blush and reddish stripes. The firm, creamy white flesh and fine-grained interior make the fruits all the more appealing.', 'Being high on dietary fibres, Fuji apples help in reducing the risk of type 2 diabetes, degenerative nerve diseases like Alzheimers or Parkinsons, and improves brain health. It boosts bone health, lowers osteoporosis risk, prevents digestive and liver problems, promotes skin and hair health, and diminishes the risk of cancers.', 200, 1),
(2, 'Watermelon', 200, 'images/inventory/watermelon.jpg', 'Watermelon Kiran is sugary, juicy with a grainy texture. It is wealthy in electrolytes & water. It brings more nutrients per calorie making it an outstanding health product. It is wealthy in photonutrients including anti-oxidant flavonoids. It is an excellent source of potassium & manganese and it is an outstanding source of Vitamin A, includes a good amount of thiamin (vitamin B-1), vitamin-B6 (pyridoxine), and vitamin-C. ', 'Watermelon is extremely alkaline forming and reduces acidity, also it is a natural diuretic. They contain citrulline which can trigger production of a compound in the body that helps relax the body''s blood vessels, promoting cardiovascular health. It eases inflammation in conditions like asthma, atherosclerosis, diabetes, colon cancer, and arthritis.', 60, 1),
(3, 'Orange', 150, 'images/inventory/orange.jpg', 'These imported oranges are much bigger in size as compared to the Indian counterpart. You will notice their skin is much brighter and vibrant too. Easy to peel, these oranges are a healthy snack alternative.', 'Oranges are rich in antioxidants along with vitamins. This not only fights cancer but also visible signs of ageing. You can also use the peel in beauty packs. Plus being fiber-rich, they aid in digestion and help in balancing pH levels of the skin. In fact the peel of these oranges are also used for medicinal and beauty purposes.', 120, 1),
(4, 'Mango', 220, 'images/inventory/mango.jpg', 'Banganpalli are sourced from Andhra Pradesh and known for their unique sweet and rich taste. They are moderately juicy and aromatic with a maize-yellow colour.', 'Mangos are known to contain more than 20 different vitamins and minerals, which make them a super food. Laden with the goodness of Vitamin C and A, mangoes also have a high fibre content. The mangoes are also rich in minerals like iron, folate, magnesium, etc. A cup of mango is around 100 calories and adds the perfect dietary balance to your meal.', 90, 1),
(5, 'Strawberry', 300, 'images/inventory/strawberry.jpg', 'Fresho Strawberries are bright red fruits with juicy texture inside. Comes with a unique tangy-sweet taste that lingers on your mouth. Fresho is our brand of fresh fruits and vegetables which are individually handpicked everyday by our trained farmers. Our buying, storing and packaging processes are tailored to ensure that only the fresh, nutrient dense, healthy and delicious produce reaches your doorstep. We guarantee the quality of all Fresho products.', 'Strawberries are a storehouse of antioxidants and vitamin C, alongside essential minerals and dietary fiber.', 45, 1),
(6, 'Pineapple', 170, 'images/inventory/pineapple.jpg', 'The ripe fruits have a quality sweet aroma, which also shows its flavor. It has a dripping sweet, taste with a sharp bite. It is an extremely juicy fruit. It has more sugar content and therefore a sweeter flavor and more caring texture. It includes the proteolytic enzyme bromelain that digests food by breaking down protein. It is an admirable supply of Vitamin C and also holds Vitamin A, K and B-complex group of vitamins. ', 'Bromelain has anti-inflammatory properties and also reduces swelling caused due to inflammation. It also helps regulate the secretions in the pancreas to aid in digestion. It is a immune booster, prevents colds & coughs, strengthens bones.', 60, 1),
(7, 'Green Apple', 200, 'images/inventory/greenapple.jpg', 'Granny Smith apples are light green in colour. They are popularly used in many apple dishes, such as apple pie, apple cobbler, apple crisp, and apple cake. They are also commonly eaten raw as table apples. Granny Smith are high in antioxidant activity, and they boast the highest concentration of phenols amongst the apple breeds, efficient source of antioxidants, particularly the flavonoids cyanidin and epicatechin, especially if eaten with the skin intact. Granny Smiths are also naturally low in calories and high in dietary fiber and potassium, making them commonly recommended as a component of healthy and weight-loss diets.', 'The phytonutrients and antioxidants in apples may help reduce the risk of developing cancer, hypertension, diabetes, and heart disease. It can potentially improve neurological health that prevents dementia, lower levels of bad cholesterol.', 90, 1),
(8, 'Papaya', 160, 'images/inventory/papaya.jpg', 'Papayas grow in tropical climates and are also known as papaws or pawpaws. Initially green and somewhat bitter in taste, papayas are butter-yellow when fully ripe and shaped like a pear. Their pale-orange flesh has dozens of small, black, sticky seeds at the center, similar to a melon.', 'Papaya is rich in anti-oxidants and phytonutrients that work against free radicals and therefore is said to protect the body from possible heart diseases and cancer. Papaya is a great source of vitamin A, B, C, and K and is known as an excellent immunity booster. It is great for the growth of body tissues, including hair and skin.', 35, 1),
(9, 'Onion', 70, 'images/inventory/onion.jpg', 'Onion is a vegetable which is almost like a staple in Indian food. This is also known to be one of the essential ingredients of raw salads. They come in different colours like white, red or yellow and are quite in demand in cold salads and hot soups. You can dice, slice or cut it in rings and put it in burgers and sandwiches. Onions emit a sharp flavour and fragrance once they are fried; it is due to the sulphur compound in the vegetable.', 'Onions are known to be rich in biotin. Most of the flavonoids which are known as anti-oxidants are concentrated more in the outer layers, so when you peel off the layers, you should remove as little as possible. Onions, like garlic, are also rich in sulphur compounds. Onions are known to contain manganese, copper, Vitamin B6, Vitamin C and dietary fibers along with phosphorus, folate and copper.', 50, 2),
(10, 'Tomato', 50, 'images/inventory/tomato.jpg', 'Tomato is an amazingly popular and versatile food that comes in several different varieties that vary in shape, color and size. There are tiny cherry tomatoes, Italian pear-shaped tomatoes, bright yellow tomatoes, and the green tomato. Lycopene is the substance that provides tomatoes their rich red color and tomatoes are natures finest source of lycopene, which is a potent antioxidant and tomatoes cooked with a touch of oil give more lycopene than raw tomatoes. ', 'Simply include a tomato in your daily meal and protect yourself from the dangers of cancer and heart diseases. The lycopene in tomatoes is an antioxidant highly effective in scavenging cancer causing free radicals and protects against cancer has been proven to be particularly effective in fighting advanced-stage prostate cancer.', 60, 2),
(11, 'Potato', 80, 'images/inventory/potato.jpg', 'Fresho Potatoes are nutrient-dense, non-fattening and have reasonable amount of calories. Include them in your regular meals so that the body receives a good supply of carbohydrates, dietary fibers and essential minerals such as copper, magnesium, and iron. In India, potatoes are probably the second-most consumed vegetables after onions.', 'Apart from containing useful minerals such as potassium, iron, copper and magnesium, potatoes are also full of phytochemical antioxidants such as flavonoids, Vitamin B and folate.', 110, 2),
(12, 'Carrot', 90, 'images/inventory/carrot.jpg', 'The carrot is a root vegetable lengthy, narrow and cylindrical/cone shaped generally bright orange in color & available during the year. Naturally sweet, and crispy, carrots are healthy additions you can make to the vegetable list in your diet as they include several health benefiting nutrients such as anti-oxidants, vitamin A, minerals & beta-carotenes in ample amounts. ', 'Raw carrots are used as a home remedy for treating worms in children. It helps in preventing gastric ulcers and digestive disorders. These are rich in Beta carotene which is a powerful antioxidant which helps in maintaining a healthy skin and also keep one away from many diseases.', 35, 2),
(13, 'Cauliflower', 100, 'images/inventory/cauliflower.jpg', 'Cauliflower is a versatile vegetable, which makes for a great side dish or main dish. A member of the cruciferous vegetable family, to which also belongs the more famous broccoli, cauliflower is loaded with anti-oxidants and phyto-nutrients. To get the best out of this vegetable, try to saute it instead of boiling it in water and making it mushy.', 'Cauliflower contains sulforaphane, a sulfur compound that has also been shown to kill cancer stem cells, thereby slowing tumor growth. They are an excellent source of natural antioxidants due to their high levels of various phytochemicals, as well as good suppliers of essential vitamins, carotenoids, fiber, soluble sugars, minerals, and phenolic compounds.', 25, 2),
(14, 'Cucumber', 75, 'images/inventory/cucumber.jpg', 'Hybrid cucumber contains a striped light-dark green colored outer skin that can be peeled off or consumed. The flesh is watery and crunchy. It is an extremely good source of vitamins and minerals. It is low in calories and high in water content. ', 'Cucumber is known to contain lignins that reduces risk of several cancer types including breast, ovarian, uterine and prostate cancers. Cucumbers contain 95 percent water, which keeps the body hydrated. Cucumbers have been used for ages in daily skin care regimens and help stimulate hair growth.', 80, 2),
(15, 'Broccoli', 130, 'images/inventory/broccoli.jpg', 'Fresho broccoli comes in an easy to use 250 gram pack and it is indeed the freshest. This broccoli is now available all year through and has been sourced from the best of the farmers. It is then packaged hygienically for you. On the whole, it reaches you with all the goodness. You just have to de-stem it and enjoy the same.', 'Broccoli is known for its many nutrients, especially it gets a deep rich colour from the high iron content. The other benefits that you get from here include being rich in phytonutrients, vitamins like vitamin B6, vitamin E, vitamin B1, vitamin A, etc. It has phosphorus and choline too.', 70, 2),
(16, 'Cabbage', 120, 'images/inventory/cabbage.jpg', 'Cabbage has a round shape and is composed of superimposed leaf layers. There should be minimally a few outer loose leaves attached to the stem. If not, it may be an indication of disagreeable texture and savor. It is a brilliant supply of vitamin B6, C, K. \r\nProduct image shown is for representation purpose only, the actually product may vary based on season, produce & availability.', 'The health benefits of cabbage include frequent use as a treatment for constipation, stomach ulcers, headaches, obesity, skin disorders, eczema, jaundice, scurvy, rheumatism, arthritis, gout, eye disorders, heart diseases, aging, and Alzheimer''s disease.', 20, 2),
(17, 'Corn', 160, 'images/inventory/corn.jpg', 'Sweet corn is an annual with, yellow and white, bi-colored ear. It is a fine supply of potassium and folate. Fresh sweet corn is one of summer''s cooking treats, whether it''s sauteed, souffleed or boiled on the cob. Corn Bhel prepares as an instant and healthy snack for your kid''s lunch boxes. 1 cup of sweet corn kernels has around 90 calories, excellent supply of complex carbohydrates, and rich in dietary fiber and protein.', 'Corn is a good source of phenolic flavonoid antioxidant, ferulic acid. Several studies suggest that ferulic acid plays vital role in preventing cancers especially breast & liver cancer, aging, and inflammation. This aids in alleviating digestive problems such as constipation and hemorrhoids, as well as lowering the risk of colon cancer.', 55, 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_type`) VALUES
(1, 'Admin'),
(2, 'Guest'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `user_info_id` int(11) DEFAULT NULL,
  `total_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `email`, `password`, `role_id`) VALUES
(1, 'admin@onlinestore.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(9, 'newuser@onlinestore.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `user_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `address`, `contact_number`, `user_account_id`) VALUES
(4, 'First User', 'Manila, Philippines', '09275565071', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `sale_id` (`sale_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_type` (`category_type`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_info_id` (`user_info_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `user_account_id` (`user_account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `sale` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`user_info_id`) REFERENCES `user_info` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_account_id`) REFERENCES `user_account` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
