-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 29, 2020 at 01:12 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `innovative_bridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `hero_images`
--

CREATE TABLE `hero_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hero_images`
--

INSERT INTO `hero_images` (`id`, `page_name`, `image`) VALUES
(1, 'contact', 'contact-hero.png'),
(2, 'index', 'home-hero.png'),
(3, 'team', 'team-hero.png'),
(4, 'services', 'service-hero.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `publish_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `image`, `publish_date`) VALUES
(1, 'Construction on Patttullo Bridge replacement to begin this year ', 'The British Columbia government has awarded a contract for the replacement of the Pattullo Bridge in Metro Vancouver.\r\n\r\nThe $1.4-billion project will see a new four-lane bridge built with wider lanes connecting Surrey and New Westminster.\r\n\r\nThe expanded bridge will also include dedicated lanes for pedestrians and cyclists. It will be built to potentially allow for the bridge to be expanded to six lanes.\r\n\r\nConstruction is slated to being this year with the new bridge scheduled to open in fall of 2023.\r\n\r\nFraser Crossing Partners — consisting of a number of construction companies — has been awarded a $967.5 million contract to replace the bridge, with the remaining costs covering project management, financing, property acquisition and other project-related items.\r\n\r\nThe bridge is being built under a so-called community benefits agreement, which is aimed at boosting apprenticeship opportunities and hiring more women, Indigenous people and other under-represented workers.', 'news.png', '2020-06-24'),
(2, 'McLeod River Bridge', 'The Mcleod River Bridge on Rosevear Road near Edson, BC was completed in the summer of 2020 with the completed road scheduled to be open to traffic in 2021.  The bridge was constructed to replace the Rosevear Ferry which ended its run in 2018 after more than 70 years of service.\r\n\r\nUnder the project management of Stantec, Calgary based general contractor Trevcon Enterprises retained Rapid Span to fabricate, deliver and erect the steel superstructure.  Fabrication of the girders started in the fall of 2016 with Rapid Span’s subcontractor, Forbes Industrial, completing the erection of the superstructure in March 2017.  The girders were erected off of an ice bridge to help minimize the costs of winter construction. ', 'n.png', '2020-06-26'),
(3, 'Construction Crews Connect Inuvik to Tuktoyaktuk Highway in the Middle\r\n', 'Construction teams on both sides of the Inuvik to Tuktoyaktuk Highway have met in the middle, meaning an all-weather road now connects the two communities. The two sides met in April of 2016, as crews poured the last bit of gravel to fill the gap.\r\n\r\nThere’s still much more work to be done before the road opens to the public in the fall of 2017, but this marks another milestone for the 120-kilometre highway. Construction of the highway began in January 2014. Once completed, Canada will officially be connected from coast to coast to coast. Currently, Tuktoyaktuk is only accessible by ice road, barge and air.\r\n\r\nThe Government of the Northwest Territories is contributing $99 million to the project while the federal government will provide the remaining $200 million.', 'n2.png', '2020-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `location`, `phone`, `email`, `image`, `about`) VALUES
(1, 'Vancouver/Headquarter', '1212-2n st , Vancouver ', '1-800-234-1212', 'innvoatibe-vancouver@.me', 'officehead.png', 'We are an international engineering company. Specializing in wide span bridge construction and gondola installation and design, We have offices in 4 major cities around the world. Though We have offices in these major cities Vancouver, Berlin, San Francisco and Oslo. We also do installations and consulting around the globe. '),
(2, 'Berlin', '1234-Smoyve st, Berlin', '1-800-234-1213', 'innvoatibe-berlin@.me', 'o2.png', 'We are Specializing in wide span bridge construction and installation and design; we have offices in 4 major cities in North America. We also do the installation and consulting around the globe—our main office located in beautiful British Colombia. For more details, click the link.'),
(3, 'Oslo', '3421 7allo,Oslo ', '1-800-234-1214', 'innvoatibe-norway@.me', 'o3.png', 'We are Specializing in wide span bridge construction and installation and design; we have offices in 4 major cities in would. We also do the installation and consulting around the globe. '),
(4, 'San Francisco', '12342 Bay Way San Francisco', '1-800-234-1215', 'sanfrancisco@me.com', 'o4.png', 'We are Specializing in wide span bridge construction and installation and design; we have offices in 4 major cities in would. We also do the installation and consulting around the globe. ');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `service_id`, `name`, `location`, `description`, `image`) VALUES
(1, 1, 'Capilano Suspension Bridge Park (Vancouver)\r\n\r\n', 'Vancouver,Canada', 'The 450 ft (137m) long, 230 ft (70m) high Capilano Suspension Bridge has thrilled visitors since 1889. While the wobbly bridge and stunning location is a Vancouver landmark, Capilano Suspension Bridge Park offers an all-encompassing BC experience. History, culture and nature are presented in unique and thrilling ways with knowledgeable staff and interpretive signage providing as much, or as little, information as guests want.\r\n\r\nCliffwalk follows a granite precipice along Capilano River on a labyrinth-like series of narrow cantilevered bridges, stairs and platforms through rainforest vegetation. With 16 anchor points in the cliff supporting the structure and open grated walkways, Cliffwalk is not for the faint of heart! Interactive exhibits demonstrate the need for water conservation.\r\n\r\n\r\n\r\n', 'b1.png'),
(2, 1, 'Cool bridge in Oslo', 'Oslo,Norway', 'Rialto Bridge, Italian Ponte di Rialto, stone-arch bridge crossing over the narrowest point of the Grand Canal in the heart of Venice. Built in the closing years of the 16th century, the Rialto Bridge is the oldest bridge across the canal and is renowned as an architectural and engineering achievement of the Renaissance. It was designed and built by Antonio da Ponte and his nephew, Antonio Contino, following a design competition in the city', 'b2.png'),
(3, 2, 'Record-breaking cable car for tallest mountain(Berlin)', 'Berlin , Germany', ' Deputy Minister President of Bavaria Ilse Aigner and Minister of the Interior Joachim Herrmann will also be present at the official launch.\r\n\r\nBut prior to the cable car’s debut ride up the 2,962 metre-high mountain, Munich’s archbishop Cardinal Reinhard Marx and regional bishop Susanne Breit-Keßler will give it their blessings.  The cable car breaks three world records:No other cable car on the planet spans further than the 3,213 metres from the base to the mountaintop station. No other pendular cable car has a 127 metre-high steel stay or can carry up to 600 people an hour, either. Also unique is the height difference of 1,945 metres between the valley and mountaintop stations', 'g1.png'),
(4, 2, 'Daycation to Oakland Zoo’s California Trail', 'San Francisco,United states', 'With sweeping views of six counties and nearly all of San Francisco Bay, the restaurant seats up to 194 people and offers more than typical zoo fare, with a seasonal menu comprised of 75% locally-sourced raw materials.\r\n\r\nThe Landing Café is only 650 feet above sea level, “which doesn’t sound like much, but when you’re up there, you are way up there,” said Harrison.', 'g2.png'),
(5, 3, 'Road to Norway', 'Oslo,Norway', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'r.png'),
(6, 1, 'The Geierlay bridge: a must-do in the German Hunsrück (Germany)', 'Berlin , Germany', 'Looking for a something fun to do in the German Hunsrück region? Then definitely consider the Geierlay suspension bridge. This suspension bridge in Germany is located in the Hunsrück just a three-hour drive from the Dutch-German border. I visited the bridge three times in recent years, the last time I even was completely alone. Below you will first find my original report and photos from August 2016, followed by updates and tips that I added following my second and most recent visit in May 2019. Looking for a hotel at the Geierlay bridge? You will find this later in the report, as well as my tips to experience the Geierlay suspension bridge on your own, just like me. Enjoy reading!', 'b3.png'),
(7, 1, 'Carquinez Bridge Replacement (San Francisco)', 'San Francisco,United states', 'The 1927 Carquinez Bridge across the Carquinez Straits, San Francisco Bay area, was replaced with a new twin-tower suspension bridge that opened on 11 November 2003. Construction on the project started early in 2000 and the project cost an estimated $240m.\r\nThe original bridge (designed by Robinson & Steinman) was dismantled in 2006 but the other Carquinez Bridge crossing that was first opened in 1958 (a cantilever bridge) received a $70m renovation as part of an upgrade to interstate status. This project was completed by Balfour Beatty in August 2001. ', 'b4.png'),
(8, 2, 'Sea to Sky Gondola', 'Vancouver,Canada', 'The proposed lift is to be constructed through a provincial park between the Stawamus Chief and Shannon Falls. The project plans call for a detachable lift system with eight-passenger enclosed cabins that will take visitors to a scenic top-station 823 metres (2,700 feet) above Howe Sound.\r\n\r\nThe park permit was issued despite the concerns of a group called Friends of the Stawamus Chief. The group opposes the gondola and has been critical of the provincial government\'s approval process for the project.', 'g23.png'),
(9, 2, 'Oslo Gondola Ride ', 'Oslo,Norway', 'Starting at Voss Station and ending at Hangurstoppen (820 metres above sea level), the new Voss Gondola will have 9 cabins with a capacity of 1069 passengers per hour. Voss Gondola will be replacing the old Hangursbanen cable car (Dinglo and Danglo), which has been out of service since 2015.\r\nThe new gondola rail in Voss is very stable, compared to gondolas that usually hang on a cable. The track has a free span of a whopping 900 meters from the lower station to the first mast!', 'g28.png'),
(10, 3, 'Vancouver Road', 'Vancouver,Canada', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'r2.png'),
(11, 3, 'Road mods', 'Berlin , Germany', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'r4.png'),
(12, 3, 'San Francisco Road', 'San Francisco,United states', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'r5.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `image`) VALUES
(1, 1, 'b12.png'),
(2, 1, 'b13.png'),
(5, 2, 'b14.png'),
(6, 2, 'b15.png'),
(8, 7, 'b20.png'),
(9, 7, 'b21.png'),
(10, 6, 'b18.png'),
(11, 6, 'b19.png'),
(12, 3, 'g15.png'),
(13, 3, 'g16.png'),
(14, 4, 'g17.png'),
(15, 4, 'g18.png'),
(16, 8, 'g24.png'),
(17, 8, 'g25.png'),
(18, 9, 'g29.png'),
(19, 9, 'g30.png'),
(20, 11, 'r6.png'),
(21, 11, 'r7.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_videos`
--

CREATE TABLE `project_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_videos`
--

INSERT INTO `project_videos` (`id`, `project_id`, `url`, `title`, `description`) VALUES
(1, 1, 'https://www.youtube.com/embed/ZV3nMMREPeI', 'Bridging North America and the Gordie Howe International Bridge Project ', 'The innovative company join to build and design ,finance , operate and maintain the Canadian and US ports of enter and the bridge, and to design, build and finance the Michigan interchange under a public_private partnership agreement.'),
(2, 9, 'https://www.youtube.com/embed/E9eb2BT2br4', '\r\nSPECIAL GONDOLA DESIGN', 'At the expense of sounding overly dramatic, the Dresden Suspended Railway may very well be the world’s most fascinating or perhaps unusual urban transport line. Built in 1901 on the slopes of the River Elbe, the 273m long system takes 4.5 minutes to climb 84m from the lower district of Loschwitz to the top of Oberloschwitz.'),
(3, 10, 'https://www.youtube.com/embed/cT4YG-2zCJQ', 'ALL ROADS CONSTRUCTION', 'All Roads Construction Ltd. was formed under the Management of industry leaders who have been involved in some of the most high-profile construction projects in the Lower Mainland. We have extensive experience in construction management, asphalt paving, asphalt milling, concrete curb and sidewalk, underground utility installations, grading, excavations and large-scale infrastructure works. We believe that our Safety Culture and People are our Biggest Assets to successfully expediting all projects.'),
(6, 11, 'https://www.youtube.com/embed/https://youtu.be/sRCvDHa4gq0', 'Permission and Massive Road Construction at Tesla Giga Berlin\r\n', 'German media is reporting that Tesla is given permission to start road construction at its Giga Berlin plant and as our friend Jurgen\'s video shows Tesla has started a massive road construction at Giga Berlin factory\'s property.\r\n\r\nHere is another day at Tesla\'s German Gigafactory with active work progressing.\r\n\r\nAfter a lot of gravel has been delivered by train, the construction work on the construction roads is progressing quickly.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `bio`) VALUES
(1, 'Bridge', 'b.png', 'We build the most beautiful bridges in the world.'),
(2, 'Gondola', 'g.png', 'We build the longest gondola in North America.'),
(3, 'Road', 'r.png', 'The longest and safest roads in the country.');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`) VALUES
(1, 'slideshow3.png'),
(2, 'slideshow2.png'),
(3, 'slideshow1.png'),
(4, 'slideshow4.png');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `full_name`, `title`, `image`, `bio`) VALUES
(1, 'Steve Richards ', 'Head Manager Vancouver ', 't1.png', 'Steve Richards is President of Shimmick Constructions. Mr. Richards has 38 years of experience in the engineering and construction industry, with particular expertise in the management and oversight of design-build projects. He is responsible for domestic and international construction operations for a variety of projects in the infrastructure and mining markets, including rail and transit, highways and bridges, water resources, hydropower, mine development, and mine operations.'),
(2, 'Fernando DeLeon ', 'Head Manager Oslo', 't2.png', 'Fernando DeLeon is a Vice President for AECOM Civil Construction in the Northwest Region. Fernando has overseen some of Shimmick’s largest projects and is currently focusing on Shimmick’s growth and success in Northern California and the Pacific Northwest.\r\n\r\nFernando joined the Shimmick team in 2009 as a project sponsor and has taken a key leadership role on many of our signature projects since then.'),
(3, 'Jimmy Draper', 'Head Manager Berlin ', 't3.png', 'Jimmy Draper is a Vice President for Shimmick Construction and he oversees operations for the Southwest Region. He has over 20 years of experience in heavy civil construction and brings a wide range of experience in managing complex heavy civil projects including design/build, heavy rail, bus transit, technical bridges, dams, flood control, and water treatment.\r\n\r\n'),
(4, 'Andy Sloane', 'Head Manager San Francisco  ', 't4.png', 'Andy Sloane is an Executive Vice President of AECOM Civil Construction, where he is responsible for strategic partnering with potential contractors and designers, as well as design/build pursuits. He currently oversees business development and corporate administration for the Southwest Division of the company.'),
(5, 'Robert Schraeder', 'CEO', 't5.png', 'Robert “Bob” Schraeder is a Vice President, Mega Projects with over 30 years of industry experience and over 15 years of experience working on large design build projects. He is skilled at managing the design and construction of complex infrastructure projects within congested urban environments in Southern California.'),
(6, 'Don Heinrich ', 'Human Resources', 't6.png', 'Don Heinrich is a HR for AECOM Civil Construction who brings 40 years of experience with him to his role as the lead of SCCI Electric for the AECOM Civil Construction. Shimmick’s ability to self-perform electrical work has given us an edge in the market, and Don is a key leader of our highly successful electrical team.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hero_images`
--
ALTER TABLE `hero_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_videos`
--
ALTER TABLE `project_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hero_images`
--
ALTER TABLE `hero_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `project_videos`
--
ALTER TABLE `project_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
