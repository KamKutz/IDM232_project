-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 13, 2017 at 02:05 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idm232_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(15) COLLATE utf8_bin NOT NULL,
  `brand_picture` varchar(180) COLLATE utf8_bin NOT NULL,
  `bg_picture` varchar(150) COLLATE utf8_bin NOT NULL,
  `phrase_1` varchar(150) COLLATE utf8_bin NOT NULL,
  `phrase_2` varchar(150) COLLATE utf8_bin NOT NULL,
  `description` varchar(800) COLLATE utf8_bin NOT NULL,
  `company` varchar(60) COLLATE utf8_bin NOT NULL,
  `review` varchar(100) COLLATE utf8_bin NOT NULL,
  `website` varchar(150) COLLATE utf8_bin NOT NULL,
  `vid_desc_1` text COLLATE utf8_bin NOT NULL,
  `vid_desc_2` text COLLATE utf8_bin NOT NULL,
  `video_1` varchar(200) COLLATE utf8_bin NOT NULL,
  `video_2` varchar(200) COLLATE utf8_bin NOT NULL,
  `brand_pic` varchar(100) COLLATE utf8_bin NOT NULL,
  `color` varchar(80) COLLATE utf8_bin NOT NULL,
  `color_2` varchar(50) COLLATE utf8_bin NOT NULL,
  `stat_1` varchar(180) COLLATE utf8_bin NOT NULL,
  `stat_2` varchar(180) COLLATE utf8_bin NOT NULL,
  `stat_3` varchar(180) COLLATE utf8_bin NOT NULL,
  `stat_1_value` int(11) NOT NULL,
  `stat_2_value` decimal(10,2) NOT NULL,
  `stat_3_value` int(11) NOT NULL,
  `height` varchar(40) COLLATE utf8_bin NOT NULL,
  `width` varchar(40) COLLATE utf8_bin NOT NULL,
  `wheelbase` varchar(40) COLLATE utf8_bin NOT NULL,
  `length` varchar(40) COLLATE utf8_bin NOT NULL,
  `cylinders` varchar(40) COLLATE utf8_bin NOT NULL,
  `weight` varchar(40) COLLATE utf8_bin NOT NULL,
  `fuel` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `brand_picture`, `bg_picture`, `phrase_1`, `phrase_2`, `description`, `company`, `review`, `website`, `vid_desc_1`, `vid_desc_2`, `video_1`, `video_2`, `brand_pic`, `color`, `color_2`, `stat_1`, `stat_2`, `stat_3`, `stat_1_value`, `stat_2_value`, `stat_3_value`, `height`, `width`, `wheelbase`, `length`, `cylinders`, `weight`, `fuel`) VALUES
(1, 'Audi', 'graphics/audi.png', 'bg', 'Progress is never\r\n', 'blending in', 'Audi is an internationally renowned manufacturer of high-quality cars. Our success has been achieved through creativity, commitment and the ability to generate enthusiasm. The wishes and emotions of our customers are the guiding principle behind our every action.', 'comp_audi', 'Audi TT RS Review', 'https://www.audiusa.com/', 'An innovative addition to the Audi Sport line-up, the all-new 2018 Audi TT RS enhances its signature design with serious performance. The aggressive RS-specific exterior captivates, but it’s the new 400-hp, five-cylinder turbocharged engine and immersive technology that elevate the feeling behind the wheel to new heights. Going from 0-60 mph in just 3.6 seconds, it embodies the essence of Audi Sport.', 'Appointed with rich infotainment systems, the all-new TT RS lets you live the good life. The available Audi virtual cockpit is a fully digital 12.3-inch instrument cluster that allows the driver to customize information such as audio and the available MMI® navigation plus. Additionally, with sport-specific features such as a g-meter, power gauges, boost gauge and lap-timer, the Audi TT RS puts it motorsport heritage on full display.\r\n\r\n', 'https://www.youtube.com/embed/pVrJdbpjfOc?ecver=2', 'https://www.youtube.com/embed/aSLtlXXtQ60?ecver=2', 'audi', 'p_bar_audi', 'skill_2_audi', 'Audi TT RS against Bugatti Veyron Super Sport (World Record Holder for Average Top Speed) in MPH', 'Audi TT RS against Bugatti Veyron Super Sport in Acceleration Time', 'Audi TT RS against Bugatti Veyron Super Sport in Power', 174, '4.30', 360, '1.35 m', '1.84 m', '2.47 m', '4.20 m', '5', '3,307 lbs', '15.9 gal'),
(2, 'Aston Martin', 'graphics/aston.png', 'bg_1', 'Power, Beauty,', 'Soul', 'World‑leading design, exceptional engineering and extraordinary craftsmanship are central to Aston Martin’s ethos of Power, Beauty and Soul, and each and every Aston Martin is an expression of this. New resources, continual investment in the best people and the latest computer‑aided design and engineering facilities have empowered Aston Martin to build exceptional cars.', 'comp_aston', 'Aston Martin DB11 Review', 'http://www.astonmartin.com/', 'A fearless design philosophy has led to the DB11\'s iconic looks. Discover the striking new grille, clamshell bonnet and innovative Aston Martin Aeroblade™, a way of flowing air through the DB11’s bodywork.', 'The interior of the DB11 is a beautiful private space. Natural materials, craftsmanship, and state-of-the-art infotainment technology provide the ultimate in comfort and convenience.', 'https://www.youtube.com/embed/7FVjb__p0K4?ecver=2', 'https://www.youtube.com/embed/zN8DGSswGDo?ecver=2', 'aston', 'p_bar_aston', 'skill_2_aston', 'Aston Martin DB11 against Bugatti Veyron Super Sport (World Record Holder for Average Top Speed) in MPH', 'Aston Martin DB11 against Bugatti Veyron Super Sport in Acceleration Time', 'Aston Martin DB11 against Bugatti Veyron Super Sport in Power', 200, '3.90', 600, '1.28 m', '1.94 m', '2.81 m', '4.74 m', '12', '3,902 lbs', '20.5 gal'),
(3, 'BMW', 'graphics/bmw.png', 'bg_2', 'The Ultimate', 'Driving Machine', 'The special fascination of the BMW Group not only lies in its products and technology, but also in the company’s history, written by inventors, pioneers and brilliant designers. Today, the BMW Group, with its 31 production and assembly facilities in 14 countries as well as a global sales network, is the world’s leading manufacturer of premium automobiles and motorcycles, and provider of premium financial and mobility services.', 'comp_bmw', 'BMW i8 Review', 'https://www.bmwusa.com/', 'The BMW i8 is an icon of progress, marking an extraordinary evolution of The Ultimate Driving Machine.® As an innovative plug-in hybrid, it uses eDrive technology to combine the efficiency of an all-electric motor and the power of a TwinPower Turbo engine for an exhilarating driving experience that\'s every bit BMW.', 'Rethinking mobility from the ground up, BMW decided to use Carbon Fiber Reinforced Plastic (CFRP) to construct the foundation for both the BMW i3 and the BMW i8. This material is as strong as steel, but half the weight, allowing for incredibly responsive acceleration, impressive handling, and undeniable efficiency. The use of CFRP in mass-production vehicles is truly unprecedented and speaks to BMW’s pioneering attitude toward the future of mobility.', 'https://www.youtube.com/embed/EoojNzIL2cQ?ecver=2', 'https://www.youtube.com/embed/3ea8_CNdJ54?ecver=2', 'bmw', 'p_bar_bmw', 'skill_2_bmw', 'BMW i8 against Bugatti Veyron Super Sport (World Record Holder for Average Top Speed) in MPH', 'BMW i8 against Bugatti Veyron Super Sport in Acceleration Time', 'BMW i8 against Bugatti Veyron Super Sport in Power', 155, '4.80', 357, '1.29 m', '1.94 m', '2.80 m', '4.70 m', '3', '3,394 lbs', '11.1 gal'),
(4, 'Ferrari', 'graphics/ferrari.png', 'bg_3', 'The Ferrari Legacy.\r\n', 'Join the Celebration', 'Being Ferrari means being part of a unique future-focused team in which people are the most valuable resource. Together we compete on the track and markets all over the world. Together we’ve crafted the Vision, Mission and Values that are the very essence of feeling part of Ferrari and which guide us as we tackle our day-to-day challenges.', 'comp_ferrari', 'Ferrari 488 Spider Review', 'https://www.ferrari.com/en-US', 'The Ferrari 488 Spider is the latest chapter in Maranello’s ongoing history of open-top v8 sports cars, a story that started with the targa-top version of the 308 gtb - the immortal 308 gts - and which ultimately resulted in the full convertible spider architecture.\r\n', 'Starting with the RHT (Retractable Hard Top) around which the entire car was developed, every area of the 488 Spider has been designed to set new technological benchmarks for the sector.', 'https://www.youtube.com/embed/iqxIu1cyRfk?ecver=2', 'https://www.youtube.com/embed/6SABi3Lv5TQ?ecver=2', 'ferrari', 'p_bar_ferrari', 'skill_2_ferrari', 'Ferrari 488 Spider against Bugatti Veyron Super Sport (World Record Holder for Average Top Speed) in MPH', 'Ferrari 488 Spider against Bugatti Veyron Super Sport in Acceleration Time', 'Ferrari 488 Spider against Bugatti Veyron Super Sport in Power', 205, '3.00', 660, '1.21 m', '1.95 m', '2.65 m', '4.57 m', '8', '3,362 lbs', '20.6 gal'),
(5, ' Lamborghini', 'graphics/lamb.png', 'bg_4', 'We are not supercars.\r\n', 'We are Lamborghini', 'Since more than 35 years, Tonino Lamborghini has been a byword for Made in Italy lifestyle, by staying true to the tradition and heritage of the Lamborghini family. All the products are recognized by the raging Bull symbol on a red shield. The rewards of a strategic plan begun in 2009, with new projects dedicated to the most exclusive and luxury markets and aimed to emphasize the essence of the brand: design, innovative style, Italian flair together with the legend of a timeless heritage.', 'comp_lamb', 'Lamborghini Aventador Review', 'https://www.lamborghini.com/en-en/', 'Forget the idea of performance you are used to. The Aventador Coupé has been engineered to revolutionize this concept and establish a new benchmark in the segment of super sports cars and beyond. This car aims to bring the future forward.', 'Design is not sufficient to describe it. It is the signature of a brand which has created the history of the super sports cars all around the world. A Lamborghini must always be recognizable at first sight. This is why every detail of the Aventador Coupé has been conceived to embody the purest DNA of Lamborghini: a true design gem that expresses dynamism and aggression, which has made the carbon-fiber monocoque the symbol of the innovation from our R&D department.', 'https://www.youtube.com/embed/0QjF6A3Zwkk?ecver=2', 'https://www.youtube.com/embed/zbeBtjntISs?ecver=2', 'lamb', 'p_bar_lamb', 'skill_2_lamb', 'Lamborghini Aventador against Bugatti Veyron Super Sport (World Record Holder for Average Top Speed) in MPH', 'Lamborghini Aventador against Bugatti Veyron Super Sport in Acceleration Time', 'Lamborghini Aventador against Bugatti Veyron Super Sport in Power', 217, '2.70', 740, '1.14 m', '2.03 m', '2.70 m', '4.84 m', '12', '4,196 lbs', '23.8 gal'),
(6, 'Mercedes', 'graphics/mercedes.png', 'bg_5', 'Distinctive by design.\r\n', 'Dynamic by definition.', '\r\n“Dedicated to Customers, Driven by Excellence” – As brand ambassadors of Mercedes-Benz we are committed to excellence, aiming to provide premium solutions for our customers, retail partners and business partners, supporting them in every situation. In this way, we strengthen the brand and add value to our brand promise: “The best or nothing”.', 'comp_mercedes', 'Mercedes AMG GT Review', 'https://www.mbusa.com/mercedes/vehicles/model/class-GTS/model-GTS', 'The tautly drawn shape of the AMG GT S is sculpted to conquer wind and weight, and capture stares and hearts. Its proportions celebrate its rear-wheel-drive power and ideally balanced chassis. Every brilliant detail combines purpose with poise. The result is at once timeless and trendsetting, and a sports car that seduces your gaze to linger.', 'With AMG DYNAMIC SELECT, a twist of a console knob fine-tunes the car\'s character. Each mode adapts the throttle maps, gear changes, and more to your driving desires, from Comfort to Sport+. The modes can also tune in the available adaptive suspension and AMG Performance exhaust. An Individual mode lets you custom-tailor a mode all your own.', 'https://www.youtube.com/embed/Y2j_IQVRiiU?ecver=2', 'https://www.youtube.com/embed/nGyMzFjBiOI', 'mercedes', 'p_bar_mercedes', 'skill_2_mercedes', 'Mercedes AMG GT against Bugatti Veyron Super Sport (World Record Holder for Average Top Speed) in MPH', 'Mercedes AMG GT against Bugatti Veyron Super Sport in Acceleration Time', 'Mercedes AMG GT against Bugatti Veyron Super Sport in Power', 198, '3.60', 503, '1.29 m', '1.94 m', '2.63 m', '4.55 m', '8', '3,627 lbs', '19.8 gal'),
(7, 'Porsche', 'graphics/porsche.png', 'bg_6', 'Shaping the future of the sportscar, ', 'Strategy 2025', 'Shaping the future of the sportscar this is the theme of Strategy 2025. At the heart of the strategy is our future product portfolio. The sportscar of the future will blend the history and values of the Porsche brand with innovative technologies, while at the same time ensuring sustainability. In achieving this, topics such as electromobility, digitalisation and connectivity will play an important role. Embracing these topics will allow us to shape the exclusive and sporty mobility of tomorrow. Nevertheless, with all the innovations and modifications in front of us, one thing remains constant: Anything that carries the Porsche crest will also feature the excellent quality that is synonymous with Porsche.', 'comp_porsche', 'Porsche 911 Turbo Review', 'http://www.porsche.com/usa/', 'To the rear, the rear lid grille with vertical slats attracts admiring glances. As do the three-dimensional taillights, the reflector units integrated into the air outlets and the powerfully shaped twin tailpipes. The new GT sports steering wheel is derived from the 918 Spyder super sports car.', 'The interior is just as dynamic as the exterior, thanks to the GT sports steering wheel, among other features. It is derived from the 918 Spyder super sports car and features gearshift paddles for ergonomic shifting, a Mode switch for four driving modes, as well as an option for multifunction controls. In short: tangible motor sports emotion.', 'https://www.youtube.com/embed/kFKMPTIa3OI', 'https://www.youtube.com/embed/tD5iy5Zrg7o?ecver=2', 'porsche', 'p_bar_porsche', 'skill_2_porsche', 'Porsche 911 Turbo against Bugatti Veyron Super Sport (World Record Holder for Average Top Speed) in MPH', 'Porsche 911 Turbo against Bugatti Veyron Super Sport in Acceleration Time', 'Porsche 911 Turbo against Bugatti Veyron Super Sport in Power', 205, '2.50', 560, '1.297 m', '1.88 m', '2.45 m', '4.507 m', '6', '4431 lbs', '16.9 gal'),
(8, 'Tesla', 'graphics/tesla.png', 'bg_7', 'Electric All-Wheel Drive', '', 'Tesla’s mission is to accelerate the world’s transition to sustainable energy. Tesla was founded in 2003 by a group of engineers in Silicon Valley who wanted to prove that electric cars could be better than gasoline-powered cars. With instant torque, incredible power, and zero emissions, Tesla’s products would be cars without compromise. Each new generation would be increasingly affordable, helping the company work towards its mission: to accelerate the world’s transition to sustainable energy.', 'comp_tesla', 'Tesla Model S Review', 'https://www.tesla.com/', 'Model S is designed from the ground up to be the safest, most exhilarating sedan on the road. With unparalleled performance delivered through Tesla\'s unique, all-electric powertrain, Model S accelerates from 0 to 60 mph in as little as 2.5 seconds. Model S comes with Autopilot capabilities designed to make your highway driving not only safer, but stress free.', 'Model S now features a Medical grade HEPA air filtration system, which removes at least 99.97% of particulate exhaust pollution and effectively all allergens, bacteria and other contaminants from cabin air. The bioweapon defense mode creates positive pressure inside the cabin to protect occupants.', 'https://www.youtube.com/embed/6HtlmNzqQdo?ecver=2', 'https://www.youtube.com/embed/WOiAJmRgweQ', 'tesla', 'p_bar_tesla', 'skill_2_tesla', 'Tesla Model S against Bugatti Veyron Super Sport (World Record Holder for Average Top Speed) in MPH', 'Tesla Model S against Bugatti Veyron Super Sport in Acceleration Time', 'Tesla Model S against Bugatti Veyron Super Sport in Power', 155, '3.10', 691, '1.42 m', '1.96 m', '2.96 m', '4.98 m', '0', '4,941 lbs', 'Electric ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
