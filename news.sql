-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 01:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(24, 'Bangladesh', 'News about Bangladesh'),
(25, 'International', 'News about International\r\n'),
(26, 'Sports', 'News about sports'),
(27, 'Opinion', 'News about opinion'),
(28, 'Business', 'News about Business'),
(29, 'Youth', 'News about Youth'),
(30, 'Entertainment', 'News about entertainment'),
(31, 'Lifestyle', 'News about lifestyle');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` text NOT NULL,
  `sta` varchar(200) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id`, `user_id`, `title`, `image`, `description`, `sta`, `date`) VALUES
(7, 7, 'TIME’s Second Century Begins', 'EditorImage/time-centennial-ed-desk-luce-hadden.webp', 'This issue is, for all of us at TIME, an extra­ordinarily special one. Publishing 100 years since our brand came to life as a 32-page weekly, it is a marker of ­constancy and change. Constancy in our unwavering commitment to trusted journalism that tells the world’s story through the people who shape it. Change in so many ways, but most importantly in the stories themselves and the ways we tell them.\r\n\r\nOne measure of the distance of 10 decades: On the cover of that March 3, 1923, issue: “Uncle Joe” Cannon, the then 86-year-old retiring Speaker of the House who, as TIME put it, “represents the Old Guard in the very flower of its maturity.” A century later in this issue, our focus is on leaders disrupting the Old Guard: TIME’s 2023 Women of the Year, which will be revealed March 2, is now an annual franchise amending the record of a magazine that at its outset was explicitly for “busy men.” Today, of course, we tell these and all of our stories not only in print but also across all of our digital, video, and social platforms to an audience of more than 100 million people around the world, by far the largest in our history.', 'True', '2023-03-05'),
(8, 7, '‘News With Attitude’: The Impact of TIME’s First Cover', 'EditorImage/1ST-cover-wide.webp', 'Henry Luce and Briton Hadden and their scrappy team of 20-somethings piled into a cab to barrel across town to the printing plant on the last Tuesday in February 1923. There they spent the final hours cutting, pasting, and fine-tuning the first issue of the magazine that would come to define the American Century. It was a skinny issue, stripped-­down stories slotted into 22 sections, designed for an age of information overload, to be read in an hour—its unique value proposition signaled in its very name.Henry Luce and Briton Hadden and their scrappy team of 20-somethings piled into a cab to barrel across town to the printing plant on the last Tuesday in February 1923. There they spent the final hours cutting, pasting, and fine-tuning the first issue of the magazine that would come to define the American Century. It was a skinny issue, stripped-­down stories slotted into 22 sections, designed for an age of information overload, to be read in an hour—its unique value proposition signaled in its very name.', 'True', '2023-03-05'),
(9, 7, 'Forbes', 'EditorImage/Screenshot 2023-03-05 025748.png', 'To boost more talented Black executives into the stratosphere of American business, Ariel Investments’ Mellody Hobson plans to install them at the top of existing businesses— and connect them with the customers and capital to succeed.AAS A SIXTH GRADER IN CHICAGO PUBLIC SCHOOLS IN 1980, MELLODY HOBSON WAS MORTIFIED BY THE SNAGGLETOOTH THAT PROTRUDED WHEN SHE SMILED. IT SIMPLY DIDN’T FIT THE FUTURE SHE ENVISIONED FOR HERSELF.\r\n\r\nShe asked her friends who wore braces for the name of their orthodontist, and without her mother knowing, made an appointment, walking from school to his office. He said she’d have to wear braces for years and that it would cost $2,500—a monumental sum for Hobson’s struggling single mother, who was raising her and her five siblings in a home where money was so tight the electricity was periodically shut off because of unpaid bills. No matter. That tooth was going to be fixed: Hobson and the orthodontist agreed to a payment plan of about $50 per month.', 'True', '2023-03-05'),
(10, 7, 'Forbes', 'EditorImage/Screenshot 2023-03-05 030043.png', 'Overregulation. Overtaxation. Contradictions. America’s politicians have completely blown the easiest revenue opportunity ever: legalized drugs. But it’s not too late to save the $72 billion marijuana industry.\r\n\r\nOVERREGULATION. OVERTAXATION. CONTRADICTIONS. AMERICA’S POLITICIANS HAVE COMPLETELY BLOWN THE EASIEST REVENUE OPPORTUNITY EVER— LEGALIZED DRUGS. BUT IT’S NOT TOO LATE TO SAVE THE $72 BILLION MARIJUANA INDUSTRY.\r\n\r\nFIVE HOURS NORTH ON ROUTE 101from\r\n\r\nSan Francisco to Humboldt County, through a few cool redwood groves, Johnny Casali turns on a woodchipper and empties 55 pounds of pot into the chute. Casali grew cannabis illegally under the California sun for four decades. Now a state-licensed grower, he’s destroying what used to be his cash crop.\r\n\r\n“It doesn’t matter how good your product is; there’s so much supply in California that it’s a race to the bottom,” says Casali, founder of the Garberville-based Huckleberry Hill Farms, which produces about 500 pounds of craft cannabis a year from the two small greenhouses in his backyard in America’s weed country. “It feels like I’m a lettuce farmer right now—I’m working on the smallest of small margins.”\r\n\r\nCannabis legalization was supposed to make a slew of entrepreneurs rich—including “legacy” operators, a coy euphemism for what used to be called drug traffickers, dealers and illegal growers. It was supposed to take something used widely and erase the criminal element from it. But of course, America’s politicians are blowing it. Thanks to overregulation, overtaxation and state-by-state inconsistencies, the biggest no-brainer in the history of capitalism—legalizing the world’s most popular illicit drug—is turning into a massive market failure.', 'True', '2023-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `mobile_number` int(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `skills` text NOT NULL,
  `job_time` varchar(100) NOT NULL,
  `job_system` varchar(100) DEFAULT NULL,
  `job_salary` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `bkash_payment` varchar(11) DEFAULT NULL,
  `bkash_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job_title`, `location`, `image`, `description`, `mobile_number`, `start_date`, `end_date`, `skills`, `job_time`, `job_system`, `job_salary`, `status`, `bkash_payment`, `bkash_number`) VALUES
(25, 'OSMO Corporation', 'Dhaka', 'download.jpg', 'Osmo Corporation is a leading first growing organization that produces high-quality residential, commercial, and industrial water filters in Bangladesh.\r\nAs the demand for our products continues to increase, we are looking for an experienced and highly motivated Production Manager to join our team and oversee our manufacturing facility.\r\nAs the Production Manager, you will be responsible for managing the production process from start to finish, ensuring that our products are manufactured efficiently, on time, and to the highest quality standards. You will work closely with other departments such as engineering, procurement, quality control, and logistics to ensure that all necessary resources are available to support production.\r\nIn this role, you will lead a team of production workers, including supervisors, technicians, and line workers, and will be responsible for ensuring that they are properly trained, motivated, and equipped to perform their job duties. You will work closely with the team to identify and implement process improvements to increase productivity, reduce waste, and improve quality.\r\nThe successful candidate will have a strong background in manufacturing operations, with experience managing a team of production workers and a track record of driving process improvements. They will be a self-starter with excellent organizational and communication skills, and the ability to work effectively in a fast-paced, dynamic environment.\r\nIf you are a driven and experienced Production Manager looking for an exciting new challenge in a growing company, we encourage you to apply for this position.', 1712345678, '2023-02-02', '2023-01-03', 'Not required', '10.00 AM-6.00 PM', 'Online', 'Negotiable', 'True', NULL, NULL),
(26, 'Senior Fire Safety Engineer', 'Dhaka', 'istockphoto-475352876-612x612.jpg', 'We are looking for a senior fire safety engineer who will be responsible to drawings documents, calculations for our projects. The Engineer responsibilities include understanding written and verbal instructions, drafting technical drawings, implementing feedback from engineers and architects keeping up-to- date with CAD software, and working long hours to meet deadlines. He should be able to explain technical aspects clearly to both the team and the client.', 1712345678, '2023-01-02', '2023-03-02', 'At least 5 years of working skills', '10.00 AM-6.00 PM', 'Offline', 'Negotiable', 'True', NULL, NULL),
(27, 'Executive, Sales & Marketing', 'Dhaka', 'job-search-career-recruitment-occupation-260nw-414963955.webp', 'We have more than 500 available flats so Apply for sale. If you are confident about achieving a sales target or want to work for a Handsome Commission, this is your opportunity. Who wants to work full time as salaried, must have to achieve the sales target.', 1712345678, '2023-02-02', '2023-03-02', 'Not Required', '10.00 AM-6.00 PM', 'Offline', 'Negotiable', 'True', NULL, NULL),
(28, 'Assistant Manager/Manager - Sales and Marketing', 'Dhaka', 'images.jpg', 'Acquaint Technologies is a global IT service and Software development company providing bespoke solutions across custom software development, Web application, Custom Mobile app development, E-commerce and Enterprise Solutions. Now we are looking for Smart, Energetic, Confident & self-motivated guys who can take the challenge to become future business leaders in this sector.', 1712345678, '2023-02-02', '2023-02-03', '4 to 6 year of experience\r\nThe applicants should have experience in the following area(s):\r\nB2C (Business to Consumer), Business Development, Corporate Sales (B2B B2C), Corporate Sales (B2B Business)\r\nThe applicants should have experience in the following business area(s):\r\nIT Enabled Service, Software Company', '10.00 AM-6.00 PM', 'Offline', 'Negotiable', 'True', NULL, NULL),
(29, 'Media Supervisor', 'Dhaka', 'images (1).jpg', 'The Media Supervisor will play a key role in introducing new best practices and processes for a new line of business; formulating a training curriculum and coordinating with multiple stakeholders to execute strategy. The Media Supervisor assists with staffing, training, managing Junior Media Planners, reporting, ongoing campaign optimization, deck preparation, and defining overall KPI`s and goals per client.', 1712345678, '2023-02-02', '2023-03-02', 'At least 2 year(s)\r\nThe applicants should have experience in the following area(s):\r\nMedia Planning/ Media Buying', '10.00 AM-6.00 PM', 'Offline', 'Negotiable', 'True', NULL, NULL),
(30, 'Sr. Full Stack Java Developer/Architect', 'Dhaka', 'images (2).jpg', 'Techno Green-Carbon Ltd is looking for a Sr. Full Stack Java Developer/Architect for the Software Department.\r\nAs a Full Stack Java Developer/Architect, you will be responsible for designing and implementing enterprise-level web applications using Java and related technologies. You will be working closely with cross-functional teams including software engineers, quality assurance engineers, project managers, and business stakeholders to ensure the timely delivery of high-quality software solutions.', 1712345678, '2023-03-02', '2023-04-02', '3 to 7 year(s) working skills', '10.00 AM-6.00 PM', 'Offline', 'Negotiable', 'True', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `like_post`
--

CREATE TABLE `like_post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `category`, `thumbnail`) VALUES
(67, 'Former British PM Tony Blair calls on Speaker', 'Executive Chairman of the Tony Blair Institute for Global Change and former British Prime Minister Sir Tony Blair today paid a courtesy call on Jatiya Sangsad (JS) Speaker Dr Shirin Sharmin Chaudhury at the latter’s office here.\r\n\r\nDuring the meeting, they discussed the UK’s contribution to the Great War of Liberation, the development of democracy in Bangladesh, the ongoing development of Bangladesh, women’s empowerment and the steps taken by the Bangladesh government to build a better country, a press release said.\r\n\r\nThe speaker said Father of the Nation Bangabandhu Sheikh Mujibur Rahman fought for 23 years to bring smiles to the faces of the miserable people of the country.\r\n\r\nThe protest movement for language started in 1948 and ended in 1971 with the achievement of great freedom, she said, adding that the dark chapter of Bangladesh started with the assassination of the Father of the Nation in 1975.\r\n\r\nNow, Bangabandhu’s worthy daughter Prime Minister Sheikh Hasina has been making her allout strides for the development of democracy in the country, the speaker said.', '2023-03-04 19:12:19', 'Bangladesh', 'speaker.jpg'),
(68, 'PM in Doha to attend UN LDC Conference', 'Prime Minister Sheikh Hasina today arrived in Qatar’s capital Doha to attend 5th United Nations Conference on Least Developed Countries (LDC5: From Potential to Prosperity).\r\n\r\nA special VVIP flight (BG-325) of Biman Bangladesh Airlines carrying the premier and her entourage members landed Hamad International Airport, Doha around 01:30pm local time.\r\n\r\nHigh level representatives of Qatar government and Bangladesh Ambassador to Qatar Md Nazrul Islam received the prime minister.\r\n\r\nLater, Sheikh Hasina was escorted to the place of residence in a ceremonial motorcade.\r\n\r\nEarlier, the Biman flight took off from Hazrat Shahjalal International Airport, Dhaka for Doha at 11:15am local time.', '2023-03-04 19:13:08', 'Bangladesh', 'PM-3.jpg'),
(69, 'PM has breakfast meeting with Tony Blair', 'Prime Minister Sheikh Hasina today had a breakfast meeting with Executive Chairman of the Tony Blair Institute for Global Change and former British Prime Minister Tony Blair at her official Ganabhaban residence here.\r\n\r\nDuring the meeting, the former British prime minister apprised the Bangladesh premier of his institute’s activities.\r\n\r\nPM’s Press Secretary Ihsanul Karim briefed the newsmen after the meeting.\r\n\r\nSheikh Hasina and Tony Blair both reviewed Bangladesh-UK relations, Karim said\r\n\r\nSheikh Hasina appreciated the Tony Blair Institute’s mission to enable leaders and governments for a global future.\r\n\r\nThe premier recalled her meetings with Tony Blair while he was British prime minister.', '2023-03-04 19:13:43', 'Bangladesh', 'PM-2.jpg'),
(70, 'BNP will join polls eventually, hopes Razzaque', 'Awami League (AL) Presidium Member and Agriculture Minister Dr Md Abdur Razzaque today expressed his firm believe that at one stage BNP leaders will come in the polls for the sake of their existence in the politics as their good sense will arise.\r\n\r\n“The next election will be held as per the country’s constitution. We will try to bring the BNP in the polls. If BNP does not come to the polls, it will be extinct,” he said.\r\n\r\nRazzaque said while speaking as the chief guest at the freshers’ reception programme at Kumudini Government College here, said a press release.\r\n\r\nTangail district AL General Secretary Md Joaherul Islam, MP, Md Sanowar Hossain, MP, Kh. Momota Hena Lovely, MP, and Vice Principal of the college Professor Abdul Karim Miah spoke at the function with Kumudini Government College Principal Professor Badrul Alam in the chair.\r\n\r\nReferring to BNP’s stance in the last three parliamentary elections, he said, “In the last three elections, BNP suffered an extreme disaster. Observing their current activities, it’s seemed to me that BNP is going to face the disaster for the fourth consecutive time in the next election”.', '2023-03-04 19:14:22', 'Bangladesh', 'razzak.jpg'),
(71, 'Tony Blair pays homage to Bangabandhu', 'Former British Prime Minister Sir Tony Blair today paid homage to Father of the Nation Bangabandhu Sheikh Mujibur Rahman in the capital.\r\n\r\nBlair visited Bangabandhu Memorial Museum at Dhanmondi 32 and placed a floral wreath at the portrait of the Father of the Nation there, a foreign ministry press release said.\r\n\r\nThe former British premier who is currently Executive Chairman of Tony Blair Institute for Global Change took a tour at the Museum and signed the Visitors’ Book.\r\n\r\nHe was received at the Museum by Deputy Minister for Education Mohibul Hassan Chowdhoury, MP.\r\n\r\nBlair arrived here on Friday evening on a two-day visit.', '2023-03-04 19:18:44', 'Bangladesh', 'tony.jpg'),
(72, 'US ignores Russia warning on arms as Biden meets Scholz', 'The United States responded Friday to a Russian warning against arming Ukraine by offering a further $400 million in security assistance, as President Joe Biden hosted German Chancellor Olaf Scholz in a show of unity against Moscow.\r\n\r\nThe head of Russia’s Wagner mercenary group meanwhile said its forces had “practically encircled” the eastern Ukraine city of Bakhmut, which has seen the fiercest fighting of Moscow’s invasion.\r\n\r\nWestern military aid for Ukraine has been key to Kyiv’s ability to hold out against Moscow’s military onslaught and to even regain ground, but the Kremlin said such assistance will only “prolong the conflict and have sad consequences for the Ukrainian people.”\r\n\r\nArms deliveries “place a significant burden on the economies of these countries and negatively affect the well-being of citizens of these countries, including Germany,” Kremlin spokesman Dmitry Peskov said.', '2023-03-04 19:19:27', 'Bangladesh', 'us.jpg'),
(73, 'Govt fulfilling all the electoral pledges: Faridul Huq', 'DHAKA : State Minister for Religious Affairs M Faridul Huq Khan has said the government is going to implement all the pledges according to the election manifesto. “The government led by the ruling Awami League is going to fulfill all the pledges which earlier being made in the electoral manifesto”, he said while addressing an inter-religious dialogue held at the Islamic Foundation Auditorium on Wednesday, reports BSS.\r\n\r\nAt the same time, Faridul Huq said the religious affairs ministry is now being implemented diversified programmes in line with the instructions of Prime Minister Sheikh Hasina aiming to develop of all the religious communities and increasing communal harmony as well.\r\n“Country’s development is now expediting ahead as communal harmony and stability has been sustaining in the country under the befitting leadership of Prime Minister Sheikh Hasina”, he told the function arranged by Dhaka District Administration.', '2023-03-04 19:19:54', 'Bangladesh', 'Islam.png'),
(74, 'Head-on train crash kills dozens in Greece', 'At least 36 people were killed and another 66 injured after two trains collided head-on near the Greek city of Larissa, authorities said, as emergency services raced Wednesday to find survivors among the charred wreckage.\r\n\r\nSeveral carriages were almost completely destroyed in the collision between a passenger train and a freight train just before midnight on Tuesday, with at least one car appearing to catch fire and trap passengers inside.\r\n\r\n“I’ve never seen anything like this in my entire life,” said one rescue worker, emerging from the wreckage. “It’s tragic. Five hours later, we are finding bodies.”\r\n\r\nSeveral cars had overturned or caught fire when they came off the tracks in the impact, leaving a tangled mess of metal and shattered glass.\r\n\r\nThe passenger train, carrying 350 people, had been travelling from the capital Athens to the northern city of Thessaloniki.\r\n\r\nHealth Minister Thanos Plevris said most passengers were “young people”, with the train carrying many students returning to Thessaloniki after a long holiday weekend.', '2023-03-04 19:23:17', 'International', 'taine.jpg'),
(75, 'UN chief visits Iraq for first time in six years', 'UN Secretary-General Antonio Guterres arrived in Iraq for his first visit in six years Tuesday in a show of “solidarity” after a drawn-out political crisis in the country.\r\n\r\nGuterres said he wanted to demonstrate “solidarity with the people and the democratic institutions of Iraq and a solidarity that means that the United Nations is totally committed to support the consolidation of the institutions in this country”.\r\n\r\nHe said he also wanted to express his “confidence that Iraqis will be able to overcome the difficulties and challenges they still face through an open and inclusive dialogue”.\r\n\r\nGuterres, who landed overnight from Tuesday to Wednesday in Baghdad, is due to meet Wednesday with Prime Minister Mohammed Shia al-Sudani, as well as representatives of women’s and youth rights groups.\r\n\r\nOn Thursday, he will visit a camp for displaced people in the north of the country, before going to Erbil to meet with representatives of the regional government of Iraqi Kurdistan.', '2023-03-04 19:23:52', 'International', 'UN-cheif.jpg'),
(76, 'Top Al-Qaeda figure killed in Yemen air strike: sources', 'A senior Al-Qaeda figure was killed in a suspected US air strike in war-torn Yemen, security and local government sources told AFP on Wednesday.\r\n\r\nHamad bin Hamoud al-Tamimi, a top leader of Al-Qaeda in the Arabian Peninsula (AQAP), which Washington regards as among the global jihadist network’s most dangerous branches, died in the strike along with a bodyguard, a security official said, requesting anonymity.\r\n\r\nThe air strike, targeting a house in the northern province of Marib that al-Tamimi had recently rented, was “apparently American”, the official said.\r\n\r\nA Marib government official, also speaking anonymously, confirmed the deaths.\r\n\r\nTamimi, a Saudi also known as Abdel Aziz al-Adnani, headed up AQAP’s leadership council and acted as the militant group’s “judge”, the sources said.\r\n\r\nThe “president of the consultative council and judge, known as Abdel Aziz al-Adnani, was killed with a Yemeni bodyguard”, the Marib official said.', '2023-03-04 19:24:26', 'International', 'yemen.jpg'),
(77, 'Erdogan says elections to be held May 14 despite Turkey quake', 'President Recep Tayyip Erdogan on Wednesday ruled out any delay in elections after the devastating earthquake in February and said the vote would be held on May 14.\r\n\r\n“(Turkish) people will do what is necessary on May 14,” he told his ruling party lawmakers in the parliament in Ankara.\r\n\r\nThe Turkish leader previously proposed holding the crunch election on May 14 that could keep his Islamic-rooted government in power until 2028.\r\n\r\nBut after the massive quake that killed more than 45,000 people in Turkey, there had been suspicion whether that vote could go ahead as planned.\r\n\r\nErdogan has declared a three-month state of emergency across 11 quake-hit provinces. The region is still suffering from strong tremors, making the likelihood of campaigning in the area extremely unlikely.', '2023-03-04 19:25:18', 'International', 'erdogan.jpg'),
(78, 'World Bank estimates Turkey quake damage at $34 bn', 'The devastating February 6 earthquake and aftershocks that hit southern Turkey have caused damage worth more than $34 billion in the country, the World Bank said on Monday.\r\n\r\nThe amount is equivalent to four percent of Turkey’s GDP in 2021, the Washington-based institution said, adding that the estimate does not account for the costs of reconstruction that were “potentially twice as large,” a statement said.\r\n\r\nThe estimate also does not take into account the damage caused in northern Syria, also particularly affected by the earthquakes, with a World Bank estimate of the costs there to be released on Tuesday.\r\n\r\nThe World Bank warned that the continuing aftershocks are likely to increase the total amount of damage caused by the disaster.\r\n\r\n“This disaster serves as a reminder of Turkey’s high risk to earthquakes and of the need to enhance resilience in public and private infrastructure,” said Humberto Lopez, the World Bank Country Director for Turkey.', '2023-03-04 19:25:47', 'International', 'turkey-2.jpg'),
(79, 'Putin says Sarmat nuclear missile to be deployed this year', 'Russian President Vladimir Putin said Thursday the new Sarmat intercontinental ballistic missile will be deployed this year following US reports that the weapon failed a recent test.\r\n\r\nThe Sarmat — dubbed Satan 2 by Western analysts — is capable of carrying multiple nuclear warheads and is among Russia’s next-generation missiles that Putin has described as “invincible”.\r\n\r\n“We pay special attention, as before, to strengthening the nuclear triad. This year, the first launchers of the Sarmat missile system will be put on combat duty,” he said in a video released by the Kremlin to mark the “Defender of the Fatherland Day” in Russia.\r\n\r\nThe address also comes a day before the first anniversary of Russia’s military campaign in neighbouring Ukraine.\r\n\r\nCNN has cited two anonymous US officials as saying the Sarmat appears to have failed a test this week.', '2023-03-04 19:27:33', 'International', 'putin.jpg'),
(80, 'Malan overcomes Bangladesh spinners to guide England home', 'Dawid Malan overcame Bangladesh’s much-vaunted spin attack, showing an unwavering resolve as England secured a three-wicket victory in the first of three-match ODI series at Sher-e-Bangla National Cricket Stadium today.\r\n\r\nThe left-hand batter hit an unbeaten 114 off 145, smashing eight fours and four sixes to script the victory, giving England 1-0 lead in the series.\r\n\r\nHis fourth ODI century in just 16 matches, proved to be key as the Three Lions cantered to the victory with 212-7 in 48.4 overs after Bangladesh were bowled out for 209 in 47.2 overs.\r\n\r\nThe next best was debutant Will Jacks’ 26, who added 38-run with Malan after England were reduced to 65-4.\r\n\r\nBangladesh rode on Najmul Hossain Shanto’s 58 but England’s disciplined attack left the hosts at least 20 runs short.\r\n\r\nThe home side spins attack, which fashioned many victories at home yard proved to be tough to deal with.\r\n\r\nLeft-arm spinner Shakib Al Hasan (1-45) struck in the first over, dismissing Jason Roy (4) while another left-arm spinner Taijul Islam removed Phil Salt for 12.', '2023-03-04 19:28:30', 'Sports', 'england.webp'),
(81, 'Independence & National Day Volleyball Championship ', 'Independence and National Day Volleyball Championship are set to be held from March 13-16 at Shaheed Suhrawardy Indoor Stadium at Mirpur in the city.\r\n\r\nAt least ten teams are expected to participate in the four-day meet, organized by Bangladesh Volleyball Federation (BVF).\r\n\r\nFive teams including Bangladesh Army, Bangladesh Navy, Bangladesh Air Force, Power Development Board, and Titas have already completed their registered formality for the competition.\r\n\r\nThe registration will continue till Match 5.\r\n\r\nThe top players from the event will be selected for the squad for the upcoming Asian Volleyball Championship to be held in Tehran, Iran from August 18-26.\r\n\r\nIn this regards, a press conference was held today (Thursday) at the Shaheed Noor National Volleyball Stadium to provide all the details of the meet.', '2023-03-04 19:29:12', 'Sports', 'bolibol.jpg'),
(82, 'Sprint king Kerley opens season with 200m win', 'American sprint star Fred Kerley kicked off his season Thursday with a comfortable 200m victory in Melbourne, easing up in the final stretch to cross in 20.32 seconds.\r\n\r\nThe reigning 100m world champion and Tokyo Olympic silver medallist was the star attraction at the Maurie Plant meet, which has been upgraded to World Continental Tour Gold level — second only to Diamond League in status.\r\n\r\nOne of only three men in history to run sub-10 seconds for the 100m, sub-20 for the 200m and sub-44 for the 400m, he stressed during the week he wanted to focus more on the 200 after missing a medal at last year’s world championships.\r\n\r\n“I just wanted to put on a show for the crowd,” said the 27-year-old, who powered into the front off the bend then eased off and lifted his arm in the air when he knew the race was won.\r\n\r\n“I still got to work on the bend, but I’m not too worried about that. I know coming home, I’m good.”\r\n\r\nAustralia’s fastest man, Rohan Browning, came second in 20.71.', '2023-03-04 19:29:48', 'Sports', 'sprint.jpg'),
(83, 'Lukaku fires Inter past Porto to boost Champions League hopes', 'Romelu Lukaku boosted Inter Milan’s chances of reaching the Champions League quarter finals for the first time in over a decade after scoring the only goal in Wednesday’s 1-0 win over Porto.\r\n\r\nBelgium forward Lukaku struck with four minutes remaining of the first leg at the San Siro on the rebound from his own header to decide an absorbing encounter at the San Siro.\r\n\r\nSimone Inzaghi’s side travel to Portugal next month to decide who will go through to the last eight with a slight advantage thanks to Lukaku’s second goal in as many games in all competitions.\r\n\r\nThe 29-year-old, who has struggled with injury all season, struck his first league goal since August at the weekend and came off the bench in the second half to ensure Inter will have a lead to protect in the second leg as they seek a first quarter-final tie since 2011.\r\n\r\n“Winning is the most important thing… I’m focusing on trying to do what’s best for Inter,” said Lukaku to Amazon Prime.', '2023-03-04 19:30:26', 'Sports', 'likaku.jpg'),
(84, 'Tigresses end T20 WC mission empty-handed', 'The Bangladesh Women’s team ended their T20 World Cup mission empty handed after suffering a humiliating 10-wicket defeat to South Africa in their last group match at Cape Town in South Africa on Tuesday.\r\n\r\nComing here to win at least a couple matches, they found them in wrong side in every match they played this time. They lost their first game to Sri Lanka by seven wickets, then tasted an eight-wicket defeat to Australia, 71-run defeat to New Zealand and now in the last match, came up with their worst ever performance.\r\n\r\nElecting to bat first, Bangladesh women’s team was restricted to 113-6 with Captain Nigar Sultana Joty making the highest 30. Sobhana Mostary made 27 while Nahida Akter was the other notable contributor with 15 not out.\r\n\r\nMarizanne Kapp and Ayabonga Khaka claimed two wickets apiece for South Africa.\r\n\r\nSouth Africa raced to the victory with 13 balls to spare, making 117 for no loss. Laura Wolvaardt made highest 66 off 56, hitting seven fours and one six. Her fellow opener Tazmin Brits was not out on 50 off 51, sending the ball across the ropes for four times.', '2023-03-04 19:35:19', 'Sports', 'tiger.jpg'),
(85, 'We need to find own game plan to do well in Test and T20: Hathurusingha', 'Chandika Hathurusingha, who returned to Bangladesh as head coach for the second spell vowed to find a proper game plan to make the Tigers a force in the Test and T20 formats, the two formats in which they still remain vulnerable.\r\n\r\nIn his first spell, which was from 2014-2017, Hathurusingha guided Bangladesh astutely to establish them as a giant for ODI cricket.\r\n\r\nBefore Hathurusingha’s arrival, Bangladesh showed occasional flashes of brilliance in ODI format but they couldn’t be consistent, which needed to make them a force. Hathurusingha’s master planning was key in making the side super consistent and under his supervision, Bangladesh reached quarterfinal of 2015 World Cup and semifinal of 2017 Champions Trophy.\r\n\r\nTheir run of success at home in bilateral ODI series also started in Hathurusingha’s first stint as coach. Now this time he was handed the greater responsibility as Bangladesh have the ambition of reaching a certain height in other formats too.\r\n\r\n“Test cricket is very competitive. T20 is more popular now. So we have to find our own game plan. As a nation, we know how to play ODI cricket. We need to do well in other formats as well,” Hathurusingha said in his first official press conference today after returning to Bangladesh.', '2023-03-04 19:36:21', 'Sports', 'hathurising.jpg'),
(86, 'Why the fall in remittances?', 'For a country that depends on the earnings of migrant workers for its economic stability, it is certainly a worrying trend when remittance keeps on declining year after year. What is particularly perplexing is that this is happening despite an increasing number of Bangladeshis leaving for jobs abroad each year. In 2021, for instance, 617,209 workers left for overseas jobs, bringing in $22.07 billion in remittances. In 2022, a record 1,135,873 workers found jobs abroad, which should have almost doubled our earnings. Yet, the remittance inflow was actually 1.5 percent lower year-on-year at $21.25 billion. \r\n\r\nOne of the major reasons for this fall – and the one most often highlighted by the government – is that an unknown volume of money is being transacted through unofficial channels, i.e. hundi. Migrants prefer unofficial channels because they are offered better exchange rates than banks, they are not charged any transaction fees, there is no unnecessary paperwork or bureaucracy, and it is easier and considerably faster for them to send money to their families in the villages than through banks. ', '2023-03-04 19:44:56', 'Opinion', 'declining_remittance.webp'),
(87, 'Shrinkflation: Downsizing in the time of inflation', 'One live poultry market in the capital has decided to sell pieces of chicken for those who cannot afford to buy an entire bird. This is not unusual: all supermarkets serve chicken cuts. However, the ones who cannot afford to buy a whole bird would probably not go to fancy supermarkets. Rather, they would get a portion directly from the poultry sellers. The price of one quarter of a small broiler chicken would come down to Tk 55-60. This will at least give them a fowl taste of a market that is fast spinning out of control.\r\n\r\nWe have heard of getting a share in the sacrifice of a cow. Getting a share of a bird or a fish is becoming popular as people are forced to downsize their monthly budgets. Our reputation as big eaters has taken a hit as we adjust to the recent price hikes. People have to \"shrink\" their food choices amid the inflation.', '2023-03-04 19:45:50', 'Opinion', 'ed_1_-_oms_truck_sale_-_star.png'),
(88, 'What makes a good teacher in the 21st century?', 'Over the next two months, The Daily Star will publish op-eds on six themes representing some of the most basic and important issues of higher education in Bangladesh. These articles will be written by four educators – professionals who have vast experience in learning, teaching, publishing, and managing various aspects of a university both in Bangladesh and the United States.\r\n\r\nDespite some significant achievements in Bangladesh over the past few decades, some of the major problems that plague our education system make the graduates of our higher educational institutions some of the least prepared for the new age. The purpose of this project is to highlight the problems of low quality of education, lack of qualified teachers, lack of funding, low literacy rates, gender disparities, inadequate teacher training, limited use of technology, and limited access to higher education compared to the need. The authors will also attempt to help us look for solutions.', '2023-03-04 19:49:09', 'Opinion', 'good_teacher.avif'),
(89, 'Could the President have done more during his tenure?', 'The president of Bangladesh, albeit with limited authority, has the highest honour in the state, as stipulated in Article 48 of our constitution. Other than appointing the prime minister and the chief justice, the president is stipulated to work on the advice of the prime minister.\r\n\r\nHe is also the chancellor of all universities in the country. That is the topic of this discussion.On February 25, while speaking at the convocation of Jahangirnagar University, President and Chancellor Abdul Hamid made some instructive and critical comments. Most of the issues he commented on have been the subjects of debates and criticism over the last few years.\r\n\r\n', '2023-03-04 19:51:02', 'Opinion', 'could_the_president_have_done_more_during_his_tenure.avif'),
(90, 'President asks lawyers to uphold professionalism beyond politics', 'President M Abdul Hamid today called upon the lawyers to perform their respective professional duties beyond the politics as he exchanged views with members of Kishoreganj District Bar Council here.\r\n\r\n“There may be political differences among the lawyers . . . but they (lawyers) must keep up their professional duties above the political identities,” the head of state said.\r\n\r\nReferring to it (law) a noble profession, Abdul Hamid said the lawyers must be careful in their jobs so that no justice-seekers get frustrated with the behavior of lawyers anyway.\r\n\r\nPresident Hamid requested all members of Kishoreganj District Bar Council to work together irrespective of party affiliations to brighten the image of the association here.\r\n\r\nEarlier, he visited the “Bangabandhu Corner” set up at the newly constructed Chief Judicial Magistrate Court in Kishoreganj.', '2023-03-04 20:04:14', 'Opinion', 'President.jpg'),
(91, 'Momen urges int’l community to help ensure Rohingya repatriation to Myanmar', 'Foreign Minister A K Abdul Momen today urged the international community including the G20 to help ensure repatriation of forcibly displaced Rohingyas to Myanmar without further delay.\r\n\r\n“The prolonged stay of Rohingyas is creating huge security problems with ramifications across the region and they may also be a potential target group for radicalization and recruitment by terrorist groups,” he said.\r\n\r\nThe foreign minister made the remarks while addressing a session at the G20 Foreign Ministers’ Meeting here today under the presidency of India.\r\n\r\nIndia’s External Affairs Minister Dr. S. Jaishankar chaired the meeting.\r\n\r\nMomen, however, said that in addition to help displaced Rohingyas, Bangladesh continues to stand ready to respond to any emergency to save lives and protect people inhumanitarian crises.', '2023-03-04 20:05:08', 'Opinion', 'momen.jpg'),
(92, 'BIWTA to seek 2-year extension for Nagarbari river port', 'After missing the deadline for a second time about eight months ago, the Bangladesh Inland Water Transport Authority (BIWTA) will seek a two-year extension for constructing a river port in Bera upazila of Pabna.\r\n\r\nUnder the project initiated by the shipping ministry in July 2018, the BIWTA was supposed to have built the port and its associated facilities at a cost of Tk 513.09 crore by June 2021.', '2023-03-04 20:06:08', 'Business', 'biwta1.avif'),
(93, 'Women’s rise to the top: the invisible barriers', 'With the exception of a few, gender inequality has plagued society for centuries, with women being consistently denied access to positions of true power and influence. There have always been the more obvious and visible barriers which we are well aware of, but much more powerful and troublesome are the invisible barriers that have systematically held back qualified women from reaching the highest levels of leadership. \r\n\r\nIn the case of Bangladesh, the preconceived notions, and biases regarding traditional gender roles and stereotypes appear to be even more deeply ingrained in the culture and this can make it much more challenging for women to break into leadership positions, especially in the workplace.', '2023-03-04 20:06:54', 'Business', 'mamun-rashid.avif'),
(94, 'Another local firm gains top green factory certification', 'NHT Fashions Ltd, a concern of Pacific Jeans Group, has got recognition for establishing green factory thanks to its efforts to continue improving.\r\n\r\nThe Chattogram-based factory aced platinum Leadership in Energy and Environmental Design (LEED) recertification early this month, upgrading from gold certification it secured in 2017, according to Bangladesh Garment Manufacturers and Exporters Association (BGMEA).', '2023-03-04 20:08:49', 'Business', 'nht-fashions-ltd.avif'),
(95, 'Oil settles up on China demand hopes', 'Oil prices recovered from a brief sell-off to gain by more $1 per barrel on Friday and ended the week higher, driven by renewed optimism around demand from top oil importer China.\r\n\r\nBrent crude futures rose $1.08, or 1.3 per cent, to settle at $85.83 a barrel. US West Texas Intermediate (WTI) crude futures settled at $79.68 a barrel, up by $1.52, or 1.9 per cent. Both benchmarks posted their highest closing levels since February 13.', '2023-03-04 20:12:31', 'Business', 'oil-settles.avif'),
(96, 'Pakistani rupee strengthens 2.38% versus dollar', 'The Pakistani rupee on Friday strengthened 2.38 per cent in interbank closing at 278.46 rupees against the dollar, a day after the central bank raised its policy interest rate by 300 basis points (bps) to 20 per cent, trading data showed.\r\n\r\nThe rupee, which fell more than 6 per cent on Thursday, was trading at 275.5 against the dollar during the day, up nearly 3.5 per cent, after the opening session.', '2023-03-04 20:13:34', 'Business', 'the-pakistani-rupee.avif'),
(97, 'Bangladesh needs to create political momentum', 'Bangladesh needs to play a key role at the Doha Conference to create political momentum and translate that momentum into a United Nations resolution with a view to ensuring international support measures for a smooth transition of the graduating least-developed countries, said Debapriya Bhattacharya, a distinguished fellow of the Centre for Policy Dialogue. \r\n\r\n\"The graduating LDCs need to have various flexibilities for at least a certain period considering the global economic scenario,\" he said.', '2023-03-04 20:15:04', 'Business', 'debapriya-bhattacharya.avif'),
(98, 'Career options if you have basic computer skills', '\"Proficient at using Microsoft Office.\" Being able to add just this one line to your CV can open up a host of career options for you. With this one requirement in common, said options do need a couple of additional skills specific to each, such as communication and organisation skills. But having the essential tech down makes it very likely for you to easily find a match. \r\n\r\nHere are a few career options if you have basic computing skills.', '2023-03-04 20:18:11', 'Youth', 'career_options.webp'),
(99, 'Career options if you are good at writing', 'Growing up, were you that one kid who had an affinity for words? Perhaps the first time you put pen to paper or finger to keyboard, you realised that this was your calling. \r\n\r\nWriting is a skill you can put to good use. Irrespective of whether you are writing in English or Bangla, your skills have value, and you can use them to generate some income if you so choose.', '2023-03-04 20:19:44', 'Youth', 'career-opportunities-good-at-writing-jobs-2022-shout-the-daily-star.webp'),
(100, 'Treating life as a transitional period', '\"Baba, you can play all day and night as soon as your exams end.\"\r\n\r\n\"Just bear with it four more years and you will be set for life at a good university.\"\"Wear that dress after losing a few kilos.\"\r\n\r\nEvery single one of us has come across some form of this talk growing up. An unfortunate majority have heard them frequently from a very young age.\r\n\r\n', '2023-03-04 20:22:57', 'Youth', 'transition.webp'),
(101, 'In conversation with Team Bangladesh – Battle of Minds 2022', 'Battle of Minds (BOM) started its journey in Bangladesh in 2004. It was created with the aim of bridging the gap between institutional education and the corporate world and has evolved into a global platform since 2018.\r\n\r\nIn the 19th edition of BOM, after multiple rounds of ideation, teamwork, and resilience, \"Team Drogo\" from Institute of Business Administration (IBA), University of Dhaka came out victorious as the champions of the Bangladesh chapter. The team composed of Syed Shadab Tajwar, Tasmim Sultana Nawmi and Sadid Jubayer Murshed have already pitched their winning idea on October 18 in the Global Finale, where they represented Bangladesh amidst top 9 teams selected from the 25 countries that participated.', '2023-03-04 20:24:02', 'Youth', 'shc06600.avif'),
(102, 'Full-time internships for students don’t make sense', 'Being a full-time university student is no joke. You have migraine-inducing 300 and 400-level courses to balance alongside elusive deadlines, uncooperative groupmates, and a terminally ill social life. Add tuitions, side hustles, and club commitments to this chaotic mess, and you have the typical overworked and under-rewarded university senior. \r\n\r\nWhile salvation from 8 AM classes seem close, students need to pass one last hurdle before corporate life: a full-time internship. Even though internships are meant to prepare final year students for a work life, many companies tend to advertise them to students still taking courses. This rarely benefits young people and often ends up being a burden on their academic lives. ', '2023-03-04 20:24:45', 'Youth', 'you-guys-are-getting-paid-meme-template-on-were-the-millers_0.avif'),
(103, 'What is “workation” and why is it gaining popularity worldwide?', 'Tired of working from the office or home? Need a break? Want to take your work to a beach, a resort or maybe to another city? \"Workation\" could be the solution that can provide a much-needed break without making you miss that work deadline.\r\n\r\nThe concept of workation is not brand new. Digital nomads have been working remotely — seizing the chance to take their work wherever they go, provided that place has good Wi-Fi service.', '2023-03-04 20:26:16', 'Youth', 'workation.avif'),
(104, 'Tisha to return soon', 'Nusrat Imrose Tisha is one of the popular small screen and film actresses of the country. The artiste has won the hearts of millions for her fabulous acting style. She has been absent from the TV dramas and film scenes for long time due to taking care of her baby Ilham Nusrat Farooki.\r\nThe noted actress confirmed her return to the film scenes through a post on her official Facebook page on Monday evening.\r\n“I always feel happy when I stand in front of the camera. I have missed being in front of the camera for days, weeks and months. Alhamdulillah, Ilham is growing well.\r\nNow, she can stay with her father when I go out to work. That’s why I’m returning to work once again with a few advertisements. Everyone will get big news soon. Love you all,” the post reads.\r\nThe actress and her husband, filmmaker Mostofa Sarwar Farooki celebrated their daughter Ilham’s first birthday on January 5.\r\nNusrat Imrose Tisha is a popular actress and model in the country. She started her acting career through the drama ‘Shat Prohorer Kabbo’ directed by Ahsan Habib and written by Anonto Heera. Tisha also formed a band named Angel Four. Her film ‘Doob: No Bed of Roses’ gained critical acclaimation worldwide.', '2023-03-04 20:27:53', 'Entertainment', 'tisha.png'),
(105, 'Runa, Alamgir, Ankhi, Ferdous along with Simrin in TVC', 'Legendary singer Runa Laila, her husband noted film actor Alamgir, Alamgir’s daughter Ankhi Alamgir and popular actor Ferdous Ahmed have stood before camera together for a television commercial (TVC).\r\nThe shooting of the TVC was completed at Bangladesh Film Development Corporation (BFDC) in the capital on Tuesday. Filmmaker Anonno Mamun has made the TVC for a housing company.\r\nEarlier, Ferdous has worked with Alamgir and Ankhi Alamgir, but it is his first work with Runa Laila. Ferdous is very excited to work with legendary singer Runa Laila. He said, “It is a good luck for me that I’ve worked with Runa Laila apa. When I got the offer to act with Runa apa, Alamgir bhai and Ankhi Alamgir, I thought it is best offer in my acting career. I’ve portrayed the role of Ankhi’s husband in the TVC. I’m very happy to work with them. I hope the audience will also enjoy the TVC.”\r\nSimrin Libaba, the granddaughter of late actor Abdul Kader, will also be seen in the TVC.\r\nRuna Laila went to BFDC on Tuesday after about 30 years for the shooting of the TVC.', '2023-03-04 20:28:25', 'Entertainment', 'alamgir-family.png'),
(106, 'Amitabh Bachchan wishes Chanchal Chy for ‘Padatik’', 'Popular Bangladeshi actor Chanchal Chowdhury will play the role of Mrinal Sen in the film ‘Padatik’.\r\nBased on the life of renowned Bengali filmmaker Mrinal Sen, the movie is being directed by noted Kolkata’s filmmaker Srijit Mukherji.\r\nBollywood megastar Amitabh Bachchan on Wednesday shared a poster of the Mrinal Sen biopic titled ‘Padatik’ and sends his good wishes to the actor Chanchal Chowdhury\r\nand the team.\r\n“All good wishes…#Padatik # Chanchal Chowdhury # Srijit Mukherji,” the post reads.\r\nMrinal Sen was a pioneer in his craft, coincidentally also giving Bollywood legend Amitabh Bachchan one of his first ‘film work’, in the form of a voiceover in his 1969 film\r\n‘Bhuvan Shome’.\r\nKolkata’s actress Monami Ghosh will play Mrinal Sen’s wife Gita Sen in the maverick filmmaker’s biopic.\r\nThe shooting of the film Padatik will begin this month. This movie will be released in 2023. ‘Padatik’ will be produced by Firdousul Hasan’s Friends Communication.', '2023-03-04 20:28:57', 'Entertainment', 'amitav.png'),
(107, 'Hugh Jackman renames Deadpool 3 As Wolverine 10', 'Marvel Studio’s film Deadpool 3 is one of the much-awaited films that will bring together Hugh Jackman’s Wolverine and Ryan Reynolds’ Wade Wilson. Interestingly, the film will serve both as an ending and a start of a new chapter for the title character.\r\nThe Australian actor’s return as the X-Men character for the first time since 2017’s Logan is one of the most anticipated films from the MCU. As excitement among fans is skyrocketing, the Aussie actor now has teased about the unique arch of his character and called it Wolverine 10. Scroll down to know more.\r\nDuring a conversation with People magazine, Hugh Jackman teased Deadpool 3 will include a brand-new experience for him as Wolverine.\r\nHe also shared his excitement over the source material being adapted, by admitting he wants to bring the classic comic-book rivalry of Deadpool and Wolverine to the big screen.\r\nThe actor said, “I mean you categorize it as Deadpool 3 but we would like to call it Wolverine 10 in our house. Basically, the story is taking place pre-Logan. Which is exactly as you said, it is before Logan died.”\r\nHugh Jackman also spoke of Wolverines’ unique arc in Deadpool 3, teasing it’s “Something I’ve never done before.”\r\nHe said, “When I keep thinking of me and Ryan, of Deadpool and Wolverine, which are classic comic-book rivals, there’s also a dynamic that I’ve never really got to do before as Wolverine. I just thought, “This is gonna be fun. Something I’ve never done before.” I can’t wait.”\r\nFor the unversed, Wolverine and Deadpool have a relationship that will be 15 years old when the pair gets reunited in 2024’s Deadpool 3.\r\nThe duo, already played at the time by actors Jackman and Reynolds, first met in the disappointing X-Men Origins: Wolverine, which made Deadpool look bad.\r\nSource: Collider', '2023-03-04 20:34:54', 'Entertainment', 'news.png'),
(108, 'Mohanlal to have a cameo in Rajinikanth’s Jailer', 'Mohanlal, who is gearing up for the release of his single character Malayalam film Alone later this month, has been signed for a cameo role in Rajinikanth’s upcoming Tamil film Jailer. The Drishyam star is expected to join the sets over the weekend to shoot his portion, as per reliable sources. This will be the first time Mohanlal will be sharing screen space with Rajinikanth.\r\nWhile the makers are yet to make an official statement, a source from the film’s unit has confirmed about the casting. “Mohanlal sir has been signed for a cameo appearance. He will complete shooting for his portion over the weekend,” the source said.\r\nReacting to the news that has been circulating on social media since Thursday, fans are excited about the collaboration. One fan wrote: “This is going to be an iconic moment.” Another fan wrote: “It’ll be something else to watch Rajinikanth and Mohanlal walking in slow-motion to Anirudh’s music.”\r\nIn Tamil, Mohanlal was last seen in Suriya-starrer Kaappaan, in which he played the role of Prime Minister.\r\nIn Jailer, Rajinikanth plays a prison jailer and the film has been majorly shot inside a prison. Recently, pictures of Rajinikanth posing with a little girl on the sets of Jailer surfaced on social media. In the pictures, he can be seen signing an autograph on a book and giving the kid a hug from behind while posing for a picture. Reacting to the pictures, fans said the kid is lucky and blessed. Rajinikanth has teamed up with director Nelson for Jailer, which also stars Tamannaah Bhatia, Vinayakan and Ramya Krishnan in key roles.\r\nRajinikanth will also soon commence work on his daughter Aishwarya Rajinikanth’s film, Laal Salaam. He will be seen playing an extended cameo in the movie. With Laal Salaam, Aishwarya returns to direction after a gap of seven years. The film, which is rumoured to be set against the backdrop of cricket and communism, stars Vishnu Vishal and Vikrant in lead roles.\r\nThe project was launched with a pooja ceremony on November 5. Sharing pictures from the event, Aishwarya wrote on her Twitter page: “When your FATHER trusts in you.. When you believe GOD is by you. MIRACLES happen in true. After 7 long years. The journey begins again with grateful and joyful tears (sic).”\r\nSource: Hindustan Times', '2023-03-04 20:35:37', 'Entertainment', 'rajonikant.png'),
(109, 'Sakib Ahmed All Set for Tv Drama Scene', 'Popular model turned tv actor Md Sakib Ahmed is becoming a known face in the tv industry. He started appearing as a model in body building contests and ramp shows from 2013. This opened opportunities for him in commercial advertisement spots. He did a commercial with popular ecommerce site Ekhanei. While the modelling gig was rolling, he found interest in acting. To prepare himself for this new journey he started rehearsing with a leading Shilpakala Academy based theatre group. Continuous practice hours gave him confidence and he started to approach tv drama directors. After some successful auditions he was casted by few leading directors. After airing of these tv dramas Sakib was noticed by the industry. His co-actors have praised him as a newcomer. After this initial success Sakib decided to take his career to next level. He’s being humble of his initial success and now fully engaged in acting classes and rehearsing to become a versatile actor. Sakib is talking his time to face challenge of any difficult role. Upcming actors can learn a lot from him and we wish him great success.', '2023-03-04 20:36:25', 'Entertainment', 'sakib.jpg'),
(110, '5 amazing pyramids you should visit around the world', 'Initially being built as a mausoleum to bury royalties, pyramids have always been revered as marvels of human engineering and a sense of wonder. Even though we picture Egypt and the great pyramid of Giza when we hear the name pyramids, these magnificent structures exist in just about every ancient culture and civilization. With time, pyramids have made their rightful place in the wonders of the world lists.\r\n\r\nHere are our top 5 travel-worthy pyramids around the globe.', '2023-03-04 20:40:00', 'Lifestyle', 'pexels-pixabay-262780.avif'),
(111, 'Work from home you’d want to do!', 'Many work-from-home positions are available for people with varied talents and hobbies, ranging from independent writing and graphic design to virtual teaching and customer service. Anyone can find a fulfilling work-from-home position that offers the financial stability and professional development they desire with the proper tools, resources, and dedication. \r\n\r\nThe possibilities are infinite, and the benefits are boundless, whether you are looking to switch from a conventional office job to a work-from-home position or begin your career as a remote worker.', '2023-03-04 20:40:45', 'Lifestyle', 'chris-montgomery-smgtvepind4-unsplash.avif'),
(112, 'Why babies cry on flights and how you can help  Star Digital Desk', 'Few things are as harrowing as flying with an unhappy baby.\r\n\r\nThe sound of the wailing makes all on board uncomfortable and is a constant source of embarrassment for the parents of the tiny but outrageously loud passenger.The parents die a thousand deaths; passengers in nearby seats curse their luck and one would imagine even the flight attendants become flustered, beneath their smiling exteriors.\r\n\r\nThere are many reasons that a baby cries on an airplane. They can have feelings of discomfort, exhaustion, hunger, loneliness, boredom, anger, pain and general unrest.', '2023-03-04 20:42:58', 'Lifestyle', 'baby_cry.avif'),
(113, 'Can exercise help battle depression in children?', 'Childhood has forever been synonymous with positive attributes like innocence, fun, and vigour. In recent times, however, the scenario seems to have taken something of a darker turn. Children are being associated more and more with issues such as depression and other mental health problems. Emerging as an unsung hero in battling these issues, exercise has been known to work wonders in preventing mental health troubles in young people, becoming an invaluable supplement to any depression treatment plan.\r\n\r\nTo determine just how much of an impact physical activity can have on mental health, the Norwegian University of Science and Technology (NTNU) took a sample size of 800 6-year-old children and put an activity tracker around their waist for seven days. At each stage of the study, parents and children had to complete a psychiatric report to assess their well-being and likelihood of depression. The study went on to show that children who had moderate-to-high levels of physical exercise between the ages of 6 to 8 years were less likely to have symptoms of depression a couple of years later.', '2023-03-04 20:43:54', 'Lifestyle', 'what-is-depression.avif'),
(114, 'Health benefits of citrus fruits', 'Regarded as a nutritional powerhouse, citrus fruits are a rich source of vitamins and minerals. It includes a variety of healthy ingredients, including vitamin C, an antioxidant that guards against cell damage.\r\n\r\nNot only does the water-soluble vitamin C reduce inflammation but also aids in iron absorption, which is important for tissue growth and development. Lemons, oranges, grapefruits, and others citrus fruits that are popular in Bangladesh are also abundant in enzymes. These help with the many metabolic processes taking place within our bodies.', '2023-03-04 20:44:43', 'Lifestyle', 'citrus.avif'),
(115, 'How to not be SAD', 'December can be a joyous and festive time of year, but for many people, it can also be a time of stress and depression. The post-holiday season can bring about a lot of pressure, from financial stress to social obligations, and it can be challenging to enjoy the season entirely. Believe it or not, there is an actual name for this psychological phenomenon. Seasonal affective disorder (SAD) is a kind of depression that appears and disappears with the seasons. SAD is often called \"winter depression\" since the symptoms are more noticeable and severe throughout the winter.\r\n\r\nSome people with SAD may experience symptoms in the summer but feel better in the winter. If you are one of them and feeling down after the holiday season, here are some tips for getting over your post-December depression:', '2023-03-04 20:45:24', 'Lifestyle', 'sasha-freemind-pv5weeyxmwu-unsplash.avif');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `text` varchar(200) NOT NULL,
  `time_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `code` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`, `code`, `status`) VALUES
(7, 'Swapnil Talukder', 'swapnilanik5@gmail.com', 1710341696, 'e5c42328de57e31797fa1ba68ad63b91', 0, ''),
(14, 'Emad', 'amadahmed1234678@gmail.com', 1312241148, '$2y$10$ZQgkevu752SRvlACcoNxu.n2plhFcxO6rN.JHQ2leXHkvSiHolqDq', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rr` (`user_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_post`
--
ALTER TABLE `like_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test4` (`user_id`),
  ADD KEY `test5` (`post_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test6` (`user_id`),
  ADD KEY `test7` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `like_post`
--
ALTER TABLE `like_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `editor`
--
ALTER TABLE `editor`
  ADD CONSTRAINT `rr` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `like_post`
--
ALTER TABLE `like_post`
  ADD CONSTRAINT `test4` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test5` FOREIGN KEY (`post_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD CONSTRAINT `test6` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test7` FOREIGN KEY (`post_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
