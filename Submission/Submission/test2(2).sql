-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 07:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket_items`
--

CREATE TABLE `basket_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basket_items`
--

INSERT INTO `basket_items` (`id`, `created_at`, `updated_at`, `product_id`, `user_id`, `quantity`) VALUES
(14, '2024-12-08 16:29:44', '2024-12-08 16:29:44', 1, 1, 1),
(15, '2024-12-08 17:18:24', '2024-12-08 17:18:24', 2, 2, 1),
(16, '2024-12-08 17:18:30', '2024-12-08 17:18:30', 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'Laptops', 'Easily portable personal computers with a battery based power supply'),
(2, 'Watches & Wearables', 'Watches, smart watches and wearable technology'),
(3, 'Tablets', 'Handheld tablets'),
(4, 'Phones', 'Mobile smartphones'),
(5, 'Audio', 'Devices capable of playing audio, headphones, speakers and more!'),
(6, 'Phone Accessories', 'Phone Covers, Screen Protectors and other extras for your phone.'),
(7, 'Chargers & Adapters', 'Charger plugs and cables for phones, laptops and everything else.');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text DEFAULT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `stock_quantity` int(11) DEFAULT 0,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img_id` int(11) NOT NULL,
  `img_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `stock_quantity`, `category_id`, `created_at`, `img_id`, `img_address`) VALUES
(1, 'APPLE MacBook Air 13.6\'\' (2024) - M3, 512 GB SSD, Midnight', 'Whatever you need to do, MacBook Air will make it look easy. Video editing and gaming are no match for the M3 chip\'s powerful CPU and GPU. In fact, it\'s up to 1.6x faster than the M1 MacBook Air, so you\'ll really by flying through your workflows. The 13\'\' Liquid Retina display makes every detail shine. It displays a billion colours, so you can appreciate every subtle shade. Just what you need for your creative projects and just what you want for movie nights. It\'s got a massive battery, that will keep you away from the plug for up to 18 hours on a single charge. All that power is hiding in an all-aluminium body that\'s only 1.13 mm thin, and it doesn\'t even need a fan. Apple Intelligence helps you write, express yourself and get things done effortlessly. It draws on your personal context while setting a brand-new standard for privacy in AI. ', 1416.00, 10, 1, '2024-11-26 22:53:46', 1, ''),
(2, 'Apple Watch Series 10 – 42mm', 'Biggest display. Thinnest design. The Apple Watch Series 10 has more screen and a slimmer, lighter design. Stay in the know with advanced health and fitness features. It\'ll even notify you if it detects signs of sleep apnea. Plus, faster charging gets you to 80% battery in just 30 minutes. \r\n \r\nGood to know \r\n \r\n- WHY APPLE WATCH SERIES 10 — Bigger display with up to 30 per cent more screen area. A thinner, lighter and more comfortable design. Advanced health and fitness features provide invaluable insights. Safety features connect you to help when you need it. Faster charging gives you 80 per cent battery in about 30 minutes. \r\n- ADVANCED HEALTH INSIGHTS — Take an ECG anytime. Get notifications if you have high or low heart rate or an irregular heart rhythm. Understand your menstrual cycle and get retrospective ovulation estimates. See overnight health metrics like heart rate, respiratory rate and more with the Vitals app. Track sleep and get notifications if signs of sleep apnoea are detected. \r\n- A POWERFUL FITNESS PARTNER — Measure all the ways you move with Activity rings, which are customisable to match your lifestyle. Get advanced metrics for a range of workouts with the Workout app. Track the intensity of your workouts with training load. Use depth and water temperature sensors for your aquatic adventures. And Apple Watch comes with three months of Apple Fitness+ free. \r\n- STAY CONNECTED — Send a text, take a call, listen to music and podcasts, use Siri and get notifications on the go. Apple Watch Series 10 (GPS) works with your iPhone or Wi-Fi to keep you connected. \r\n- INNOVATIVE SAFETY FEATURES — Fall Detection and Crash Detection can connect you to emergency services in the event of a hard fall or a serious car crash. Emergency SOS lets you call for help with the press of a button. Check In automatically notifies a loved one when you\'ve arrived at a your destination. \r\n- INCREDIBLE DURABILITY — Crack resistant and IP6X-certified dust resistant. With 50m water resistance. \r\n- CARBON NEUTRAL — Apple Watch Series 10 is carbon neutral when paired with select straps. Learn more about Apple\'s commitment to the environment at apple.com/uk/2030. \r\n- SIMPLY COMPATIBLE — It works seamlessly with your Apple devices and services. Unlock your Mac automatically. Get approximate distance and directions to your iPhone with Precision Finding on supported iPhone models. Pay with Apple Pay. \r\n- EASILY CUSTOMISABLE — With watch straps in a range of styles, materials and colours and fully customisable watch faces, you can change your watch to fit your mood or the moment.', 399.00, 20, 2, '2024-11-26 22:53:46', 2, ''),
(3, 'APPLE 11\'\' iPad Air (2024) - 128 GB, Space Grey', 'Inspiration can strike anywhere, and iPad Air will be right there with you. The 11\'\' Liquid Retina display\'s perfectly portable and packs accurate colours and life-like contrast. Just what you need for creative projects. You\'ll also need loads of power – luckily the M2 chip inside has got just that. From sketching to editing and gaming breaks in between, everything will run like a dream. Only longer, because it\'s got up to 10 hours of battery life. Apple Intelligence helps you write, express yourself and get things done effortlessly. It draws on your personal context while setting a brand-new standard for privacy in AI.\r\n \r\nGood to know \r\n \r\n- iPadOS 17 is full of powerful features and apps for productivity, entertainment and everything in-between \r\n- You can capture stunning photos, record 4K video, and scan documents using the 12 MP rear camera \r\n- The 12 MP Ultra Wide front camera is in a landscape orientation and supports Centre Stage, which is perfect for FaceTime \r\n- Touch ID\'s your key to quickly unlocking your iPad, signing into apps, and making secure payments with Apple Pay \r\n- With WiFi 6E you\'ll have fast and rock-solid internet connection \r\n- The USB Type-C lets you charge your iPad, connect and external display and transfer files in seconds ', 599.00, 15, 3, '2024-11-26 22:53:46', 3, '/public_html/images/APPLE 11\'\' iPad Air (2024) - 128 GB, Space Grey.png'),
(4, 'APPLE iPhone 16 Pro Max - 256 GB, Desert Titanium ', 'iPhone 16 Pro Max is built for Apple Intelligence. It helps you write, express yourself and get things done easily. Its stunning titanium design is lightweight and durable. Camera Control gives you handy access to camera tools, like zoom or depth of field, so you can take the perfect shot right away. Record cinema-worthy shots with support for 4K 120 fps Dolby Vision video. And the A18 Pro chip is incredibly powerful and efficient for stellar, all-day performance. \r\n \r\nGood to know \r\n \r\n- STUNNING TITANIUM DESIGN — iPhone 16 Pro Max has a strong and light titanium design with a larger 6.9-inch Super Retina XDR display. It\'s remarkably durable with the latest-generation Ceramic Shield front that\'s 2x tougher than any smartphone glass. \r\n- BUILT FOR APPLE INTELLIGENCE — Apple Intelligence is the personal intelligence system that helps you write, express yourself, and get things done effortlessly. With groundbreaking privacy protections, it gives you peace of mind that no one else can access your data. Coming December 2024. \r\n-TAKE TOTAL CAMERA CONTROL — Camera Control gives you an easier way to quickly access camera tools, like zoom or depth of field, so you can take the perfect shot in record time. \r\n- PRO VIDEO—Take your videos a whole new level with 4K 120 fps Dolby Vision—enabled by the 48MP Fusion camera—and studio-quality mics for higher-quality audio recording. A Pro studio in your pocket. \r\n- MAGNIFICENT SHOTS — Take your videos to a whole new level with 4K 120 fps Dolby Vision, enabled by the 48MP Fusion camera. The improved 48MP Ultra Wide camera lets you capture - mesmerising detail in macro pics and wide angle photos. \r\n- PHOTOGRAPHIC STYLES — The latest-generation Photographic Styles give you greater creative flexibility, so you can make every photo even more you. And thanks to advances in the image pipeline, you can now reverse any style, any time. \r\n- THE POWER OF A18 PRO — A18 Pro chip enables Apple Intelligence with a faster Neural Engine, improved CPU and GPU, and a big jump in memory bandwidth. It also drives advanced video and photo features and powers AAA gaming. \r\n- A HUGE LEAP IN BATTERY LIFE — iPhone 16 Pro Max delivers an incredibly power-efficient performance with up to 33 hours video playback. Charge via USB-C or snap on a MagSafe charger for faster wireless charging. \r\n- CUSTOMISE YOUR IPHONE — With iOS 18, you can tint your Home Screen icons with any colour. Find your favourite shots faster in the redesigned Photos app. And add playful, animated effects to any word, phrase or emoji in iMessage. \r\n- VITAL SAFETY FEATURES — With Crash Detection, iPhone can detect a serious car crash and call for help if you can\'t.', 1199.00, 25, 4, '2024-11-26 22:53:46', 4, ''),
(5, 'Apple iPhone 16 Pro Silicone Case with MagSafe – Stone Grey', '- This case is lined with microfibre to keep your iPhone in mint shape and safe from knocks and scratches \r\n- The soft silicone finish is smooth to the touch and comfortable to hold \r\n- Magnets in just the right places make your MagSafe charger snap on perfectly ', 39.00, 40, 6, '2024-11-26 22:53:46', 5, ''),
(6, 'Apple 20 W USB Type –C Power Adapter', 'Good to know \r\n \r\n- With 20 W, this adapter can take care of your iPhone, iPad and other gadgets \r\n- You can plug in any USB Type-C cable to charge a wide variety of devices \r\n- Featuring foldable UK plug connectors, it\'s perfect for travel and easy to pack in your bag ', 19.00, 60, 6, '2024-11-26 22:53:46', 6, ''),
(7, 'Lenovo Thinkpad IdeaPad Gaming 3 16\'\' Gaming Laptop - AMD Ryzen 5, RTX 3050, 512 GB SSD', 'The IdeaPad Gaming 3 is a certified gaming machine that fits into your backpack, so you can rack up wins anywhere. It\'s powered by the AMD Ryzen 5 6600H processor and an NVIDIA RTX 3050 graphics card – great for serious Full HD gaming or demanding software. For truly cinematic gaming, you can even switch on ray tracing. Or for esports, push those frame rates to extremes - the 165 HZ display won\'t miss a beat. Good thing you\'ve got fans and Quad Vent cooling to keep your battlestation running as fast as possible when the action gets heated. \r\n \r\nGood to know \r\n \r\n- WiFi 6 and Gigabit Ethernet will keep your online multiplayer lag-free so you can crush opps \r\n- The 16:10 Full HD screen makes sure every game, app or movie looks clear, crisp and detailed \r\n- Look sharp on all your virtual hangouts, thanks to the Full HD webcam \r\n- Light it up with the 4-zone RGB keyboard – and there\'s a numpad, too \r\n- With Nahimic Audio you can enjoy immersive  virtual surround sound \r\n- The 512 GB SSD is nice and speedy so less time wasted on load screens ', 799.00, 20, 1, '2024-11-26 22:53:46', 7, ''),
(8, 'LOGIK LPLENO24 Lenovo Laptop Power Adapter - 3 m', 'Good to know \r\n \r\n- This Logik power adapter comes with four different connectors, so you can connect to most Lenovo laptops \r\n- No more waiting around for your laptop to charge - 90 W of power means it\'ll be back to 100% in no time \r\n- Is your desk far away from the socket? No problem! The 3 m cable gives you loads of flexibility \r\n- It\'s got over voltage protection and short circuit protection, so you and your device are safe ', 44.99, 30, 7, '2024-11-26 22:53:46', 8, ''),
(9, 'LENOVO IdeaPad 1 15.\'\' Laptop - AMD Ryzen 5, 512 GB SSD, Cloud Grey', 'Whether you\'re catching up with friends or stuck in an important work call, look and sound better on the Lenovo IdeaPad 1. With an HD webcam and smart noise cancellation, your colleagues will focus on your lovely face and not any annoying background noise, like the sound of typing keyboards. And the AMD Ryzen 5 processor will help you power through your everyday tasks, like scrolling through social media or getting some online shopping done. \r\n \r\nGood to know \r\n \r\n- Hook up an external monitor, charge or transfer files with the USB-C port \r\n- The webcam privacy shutter lets you decide when you want to be seen on camera \r\n- Get 2 hours of charge from just 15 minutes of charging with Rapid Charge Boost \r\n- Your photos, music and apps will load up quickly on the 512 GB SSD ', 499.00, 10, 1, '2024-11-26 22:53:46', 9, ''),
(10, 'LENOVO Tab Plus 11.\'\' Tablet with Sleeve - 128 GB, Luna Grey ', 'With the Lenovo Tab Plus,you won\'t miss a beat. It\'s perfect for watching your favourite comfort show or the latest blockbuster. The 11.\'\' 2K screen brings scenes to life with amazing detail and vivid colours. And you\'ll be blown away by the sound coming out of the 8 JBL speakers. That\'s right – 8 speakers to total with 4 tweeters and 4 bass units. So everything from distant whispers to massive explosions will sound just right. There\'s even a 175° kickstand on the back that makes it easy to find the perfect viewing angle. Now you just need to find a comfy chair and kick back. \r\n \r\nGood to know \r\n \r\n- For switching apps, the octa-core MediaTek processor makes the Tab Plus nice and snappy \r\n- With a 90 Hz refresh rate you\'re in for some smooth action in your favourite mobile games \r\n- The 8 MP cameras on the front and back are perfect for crisp video calls \r\n- The microSD card slot gives you up to 1 TB of extra storage – no need to delete photos! \r\n- Log-ins are safe and speedy when you\'ve got a facial recognition \r\n- If you\'re travelling, the battery can keep you entertained for up to 12 hours of video playback \r\n- It comes with a handy sleeve that keeps the Tab safe while you\'re out and about ', 199.00, 20, 3, '2024-11-26 22:53:46', 10, ''),
(11, 'LENOVO Tab P12 12.7\'\' Tablet - 128 GB, Storm Grey ', 'Tired of lugging around a heavy laptop? This Lenovo tablet is a lightweight solution to work and play on the go. The 12.7\'\' display\'s so roomy that you can easily work in split screen mode – amazing for multitasking. And it\'ll take your note taking to the next level. Use the 8 MP rear cam to snap lecture notes, then annotate all over them with the Tab Pen Plus. For treating yourself to some Netflix, the 3K screen will make any show look stunningly vibrant. And no Bluetooth speakers necessary when you\'ve got 4 Dolby Atmos speakers from JBL that\'ll crank out big, bold, immersive sound. \r\n \r\nGood to know \r\n \r\n- For switching apps, the octa-core MediaTek processor makes the P12 nice and snappy \r\n- The 13 MP front-facing cam is perfect for crisp and clear video calls \r\n- Use Lenovo Freestyle and your tablet turns into a drawing pad and pairs to compatible Windows PCs \r\n- The microSD card slot gives you up to 1 TB of extra storage – no need to delete photos! \r\n- Log-ins are safe and speedy when you\'ve got a fingerprint sensor \r\n- If you\'re travelling, the battery can keep you entertained for up to 10 hours of video playback \r\n- For the ultimate mobile productivity, you can connect it to the Lenovo Keyboard Pack (sold separately)', 229.00, 10, 3, '2024-11-26 22:53:46', 11, ''),
(12, 'HP 15 –fc0514sa 15.6” Laptop', 'Work and play on the go with this HP laptop. Whether you\'re working on a project or diving into entertainment, its 12th Gen Intel® Core™ i3 processor has got you covered. You can see all your spreadsheets clearly without an external monitor on this detailed Full HD display. For speedy startups and quick file access, the 128 GB SSD storage is just what you need.  \r\n \r\nGood to know  \r\n \r\n- With a battery life of up to 7.5 hours your movie marathons won\'t need charging breaks \r\n- Fast-charging means you can fuel it from 0 to 50% in about 45 minutes \r\n- You\'re all sorted for ports, with USB A, C, and HDMI all on board \r\n- Expand, save, and access your data with ease thanks to its SD and Micro SD card reader \r\n- Set up your home office anywhere – the anti-glare display won\'t mind some sunlight \r\n- The dual speakers let you catch up on your favourite shows or put on some tunes', 309.00, 4, 1, '2024-11-26 22:53:46', 12, ''),
(13, 'HP Pavilion 24-cr1007na 23.8\'\' All-in-One PC - Intel® Core™ Ultra 5, 1 TB SSD', 'By packing all the hardware into a single monitor, this HP Pavilion PC gives you all the power you need while saving space on your desk. Get the most out of your content with the 24” IPS LCD display. The Full HD resolution shows sharp detail and clarity, and the three-sided micro-edge design means you won\'t get distracted by chunky borders. The Intel® Core™ Ultra 5 inside will give you plenty of power for editing documents, streaming TV shows and multitasking. \r\n \r\nGood to know \r\n \r\n- Only be seen when you want to - the Full HD webcam has a privacy shutter for peace of mind \r\n- Windows Hello facial recognition lets you sign in with just a smile, no need to type your password over and over \r\n- The 1 TB SSD is plenty of space for your important photos and files \r\n- A wireless mouse and keyboard are included in the box, so you can get set up straight away \r\n- It\'s made using sustainable materials, including ocean-bound and post-consumer recycled plastic \r\n- Stay productive with Windows 11 and it\'s improved Start menu and multi-tasking tools', 699.00, 14, 1, '2024-11-26 22:53:46', 13, ''),
(14, 'HP OMEN Transcend 14-fb0008na Gaming Laptop, RTX 4070, Intel® Core Ultra 9, 14\'\' OLED 120 Hz, 1TB SS', 'This HP OMEN Transcend lets you go full throttle in any game. It\'s kitted out with the Intel® Core™ Ultra 9 processor and an NVIDIA RTX 4070 graphics card. That means you can take on the latest and greatest AAA titles and crank up the settings. You can even throw on ray tracing for those life-like visuals. It\'ll look amazing on the 2.8K OLED screen. It\'ll spoil you with pin-sharp resolution and perfect contrast. Perfect for gaming or binging your favourite show. And it can go up to 120 Hz for gloriously smooth motion. No choppy frames here! \r\n \r\nGood to know \r\n \r\n- Go crazy with 32 GB of DDR5 RAM – it\'s super-fast, so you can multitask your heart out \r\n- 1 TB of SSD storage means you can keep a nice games library and load it up super quick \r\n- Put that GPU to use in creative workflows and you\'ll love the wide 100% sRGB colour gamut \r\n- With support for WiFi 7, you\'ll be ready for the feature of wireless connectivity \r\n- The keyboard has both style and substance - 4-zone RGB backlighting and anti-ghosting \r\n- For Discord streams or work calls, you\'ll look nice and clear on the Full HD webcam \r\n- Breeze through log-ins with just a smile using Windows Hello \r\n- With HDMI 2.1 you can hook up 8K screens or dual 4K monitors', 1499.00, 20, 1, '2024-11-26 22:53:46', 14, ''),
(15, 'FRESH N REBEL Code Core Wireless Bluetooth Headphones - Dive Blue', 'Dance along to your favourite songs without any cables tying you down with these Fresh n Rebel wireless Bluetooth headphones \r\n- 30 hours of playtime means you can enjoy audiobooks and podcasts for an entire day before needing a recharge \r\n- You can ask Google Assistant or Siri to play you a song – it has voice assistant \r\n- The side buttons let you pick up calls or change the music easily \r\n- Its foldable, so you can pop it in your bag and take it with you', 29.99, 25, 5, '2024-11-26 22:53:46', 15, ''),
(16, 'HP Pavilion SE 14\'\' Laptop - Intel® Core™ i5, 512 GB SSD, Silver', 'Work and play on the go with this HP. It\'s slim and lightweight - just 1.4 kg - so it\'ll pop into your bag without weighing you down. The 13th gen Intel® Core™ i5 processor has plenty of power to keep things running smoothly. And the battery can last up to 9 hours, which makes it great for working in cafes or libraries. When you do finally run out charge, HP fast charging gets it back to 50% in only 45 minutes. Just long enough for a well-deserved break! \r\n \r\nGood to know \r\n \r\n- 8 GB of RAM lets you run multiple apps at the same time and loads of browser tabs \r\n- Its Full HD screen and dual front-facing speakers are great for kicking back with a movie \r\n- 512 GB of SSD storage will give you speedy access to all your essentials \r\n- The Full HD webcam is perfect for work or family calls \r\n- Load up websites and videos in no time thanks to WiFi 6 \r\n- You\'re all sorted for ports, with USB A, C, and HDMI all on board \r\n- Set up your home office anywhere – the anti-glare display can handle a bit of sunlight', 499.00, 23, 1, '2024-11-26 22:53:46', 16, ''),
(17, 'SONY WH-CH520C/B Wireless Bluetooth Headphones', 'There\'s nothing quite like losing yourself in your favourite tunes. The Digital Sound Enhancement Engine on these Sony headphones restores the harmonics that are lost during music compression, so your tunes sound more authentic. And with Multi-Point Connection, you can seamlessly switch between 2 Bluetooth devices – go from watching a movie on your tablet to taking a call on your phone. Simple! \r\n \r\nGood to know \r\n \r\n- The adjustable headband and soft earcups are super comfy so you can rock out all day \r\n- You can answer a call simply by clicking the button on the earcup – you won\'t even have to take your phone out of your pocket \r\n- The high-quality built-in microphone and noise suppression tech means you\'ll be heard loud and clear on calls, even in loud environments \r\n- You get 1.5 hours of battery from just 3 minutes of charge – perfect when you need a quick top up before setting out \r\n- Fully charged, you get a whopping 50 hours of listening time', 39.99, 16, 5, '2024-11-26 22:53:46', 17, ''),
(18, 'SONY WF – 510 Wireless Bluetooth Earbuds', 'The Sony WF-C510 are made to fit nice and snug, so they stay comfy all day. In fact, they\'re some of the lightest and smallest earbuds Sony have ever made. They sound fantastic too. DSEE technology upscales music to bring it closer to how it originally sounded. Plus, you can tweak the EQ or pick from a bunch of sound presets to find your perfect vibe. If you\'re heading out for a jog or ordering a coffee, simply switch on Ambient Sound Mode to connect to the world around you. \r\n \r\nGood to know \r\n \r\n- Hop from one device to another with Bluetooth multipoint – handy for incoming calls \r\n- Between the buds and the case, you get up to 22 hours of battery life so you can keep the tunes coming \r\n- If you\'re about the head out the door, a quick 5-minute charge will give you 1 hour of playback \r\n- Launch Spotify and jump straight into your music with Spotify Tap – no need to touch your phone \r\n- They can handle a bit of rain thanks to the IPX4 water resistant design', 55.00, 26, 5, '2024-11-26 22:53:46', 18, ''),
(19, 'SONY WF –1000HM5 Wireless Bluetooth Noise', 'Great music deserves your full attention. These Sony earbuds use Multi Noise Sensor technology to block out life\'s annoying distractions, so it\'s just you and your tunes. You can even tweak the level of noise cancelling in real-time, based on your surroundings. The Dynamic Driver X in each earbud produces crystal clear sound with next to no distortion across a wide frequency range. What does that mean? You\'ll hear every lyric, beat and riff exactly the way the band intended. And you\'ll be heard loud and clear on your calls thanks to Precise Voice Pickup technology. It uses clever AI to reduce background noise, so your voice will come through as clear as a bell, even when it\'s blowing up a gale outside. \r\n \r\nGood to know \r\n \r\n- The ergonomic design perfectly matches the shape of the human ear, so they\'re super comfortable and stay put \r\n- Multi-Point Connection lets you switch between 2 Bluetooth devices – go from watching a movie on your tablet to taking a call on your phone \r\n- You get up to 24 hours of listening time when combined with the charging case – that\'s one hell of a playlist! \r\n- Need a top up before heading out? Quick Charge gives you an hour of battery from just 3 minutes of charging \r\n- Their IPX4 rating means they\'re water resistant, so they won\'t let you down even if the weather does', 219.00, 20, 5, '2024-11-26 22:53:46', 19, ''),
(20, 'SONY WH –1000XM4 Wireless Bluetooth Noise', 'Create your very own one-man party. These Sony headphones have a QN1 Processor which is in charge of cancelling noise around you, so you can get lost in the sound of your music. Thanks to 40 mm drivers and support for High-Resolution Audio Wireless everything will sound its best – with rumbly lows, clear vocals, and bright highs. Adaptive Sound Control automatically adjusts the sound profile to your environment, so you\'ll always get the most out of your music. Speak-to-Chat will pause your music when you start having a conversation and resume playing once you\'re done. \r\n \r\nGood to know \r\n \r\n- The microphones use precise voice pickup tech to make your voice clearer on calls – even in a busy office \r\n- With up to 30 hours of battery life, you\'ll have enough juice to listen for days \r\n- Thanks to quick charging, just 10 minutes on the charger will give you up to 5 hours of play time \r\n- Have 2 devices connected at the same time and switch between them automatically \r\n- The earcup controls let you control your music, incoming calls, or summon your smart assistant \r\n- The included carry case will keep your headphones safe and sound, even in a stuffed backpack', 229.00, 43, 5, '2024-11-26 22:53:46', 20, ''),
(21, 'SONY WH –1000XM5 Wireless Bluetooth Noise', 'Savour your music wherever you are with the Sony WH-1000XM5. The QN1 Processor is in charge of cancelling noise around you, so you can get lost in the sound of your music, podcast, or a TV show. Thanks to 30 mm drivers and support for High-Resolution Audio Wireless everything will sound its best – with rumbly lows, clear vocals, and bright highs. Adaptive Sound Control automatically adjusts the sound profile to your environment, so you\'ll always get the most out of your music. Speak-to-Chat will pause your music when you start having a conversation and resume playing once you\'re done. \r\n \r\nGood to know \r\n \r\n- The microphones use AI noise reduction to make your voice sound clear on calls – even in a busy office \r\n- With up to 30 hours of battery life, you\'ll have enough juice for days of listening \r\n- Thanks to quick charging, just 10 minutes on the charger will give you up to 5 hours of play time \r\n- You can have 2 devices connected at the same time, and the XM5s will switch between them automatically \r\n- Swift Pair makes connecting new devices quick and simple, and it can even help you find your headphones if you misplace them \r\n- The earcup controls let you control your music, incoming calls, or summon your smart assistant \r\n- The included carry case will keep your headphones safe and sound, even in a stuffed backpack', 229.00, 40, 5, '2024-11-26 22:53:46', 21, ''),
(22, 'SAMSUNG Galaxy Watch7 BT with Bixby', 'Get closer to your body with this Samsung Galaxy Watch7. Its next-gen BioActiveSensor detects the smallest of changes to your heart rate, so it logs your every move and sleep cycle accurately. The Galaxy AI-powered Energy Score compiles all of your data into one easy-to-understand number. It then suggests ways to improve your health so you can smash your fitness goals in style. And it\'s beautiful as well as brainy. The Super AMOLED display is bright and crisp so you can see all of you favourite apps clearly. Better still, its Sapphire Crystal glass is built tough so it can hold its own against anything life can throw at it. \r\n \r\nGood to know \r\n \r\n- The powerful Exynos processor makes sure every swipe and touch is smooth and lightning fast \r\n- With up to 40 hours of battery life, you won\'t lose any progress when you\'re in the middle of a workout \r\n- Pair it with your Galaxy phone to chat hands-free, use your favourite apps, or find your misplaced belongings \r\n- Samsung Wallet lets you buy your morning coffee with a tap of your watch \r\n- Its Dual GPS system is super accurate even in built up areas like cities and woodlands \r\n- The one-click rubber strap is easy to put on and feels comfortable against your skin \r\n- With 32 GB of storage, there\'s loads of room for your essential apps, photos and playlists \r\n- There\'s almost no downtime with fast wireless charging – you can top it up while you\'re getting ready \r\n- It\'s water resistant to 50 metres, so you can wear it in the shower or the swimming pool', 289.00, 25, 2, '2024-11-26 22:53:46', 22, ''),
(23, 'SAMSUNG Galaxy Tab a9 8.7” Tablet – 64GB', 'The Galaxy Tab A9 is perfect for watching movies and TV shows. It\'s got a nice and bright 8.7\'\' screen that lets you enjoy every detail. And to make sure the audio is just as good, there are two powerful speakers. They use Dolby Atoms surround sound to make your shows even more gripping. And if you need to knock a thing or two off of your to-do list, all your apps will be snappy thanks to the octa-core processor. \r\n \r\nGood to know \r\n \r\n- The 8 MP camera on the back a 5 MP camera on the front let you take sharp photos and jump on video calls \r\n- Facial recognition keeps your personal files safe, secure and for your eyes only \r\n- There\'s 64 GB of space for your apps and photos - and you can extend the storage up to 1 TB with a microSD card ', 129.00, 23, 3, '2024-11-26 22:53:46', 23, ''),
(24, 'SAMSUNG Galaxy Tab S9 FE 10.9\'\' 5G Tablet ', 'The Galaxy Tab S9 FE\'s got a screen to behold. The 2K display has a 90 Hz refresh rate, so the image isn\'t just super-sharp, but nice and smooth, too. So whether you\'re reading, binging or gaming, you\'ll have a great time. Or whip out the mighty S Pen and turn the Galaxy Tab into a notepad, sketchbook or a canvas. It\'s up to you and your creativity. The Exynos 1380 processor\'s got plenty of power, so it won\'t be holding you back. \r\n \r\nGood to know \r\n \r\n- Browse, scroll and stream wherever you are thanks to 5G connectivity \r\n- From video calls to Insta-worthy selfies – the 8 MP rear camera and a 12 MP selfie camera will always make you look sharp \r\n- It\'s IP68 water-resistant, so getting caught in a rain shower doesn\'t have to bother you \r\n- AKG tuned dual speakers pump out full and punchy sound to match the screens visuals \r\n- You\'ll have plenty of space for your files and photos with 128 GB of storage  \r\n- Super Fast Charging means you can quickly top-up the battery level between uses (45W Super Fast charger sold separately) \r\n- It supports WiFi 6 connection for super-fast and rock-steady internet \r\n- A fingerprint scanner keeps the tablet secure and for your eyes only', 469.00, 31, 3, '2024-11-26 22:53:46', 24, ''),
(25, 'SAMSUNG Galaxy Watch FE with Bixby', 'Keeping tabs on your health and wellbeing is simple with the Samsung Galaxy Watch FE. It tracks over 100 workouts from yoga poses to laps in the pool. No need to set a timer – it\'ll automatically log them for you. For an all-round picture of your fitness, it monitors your heart rate, stress, and body composition. It then uses all that data to coach you on your workouts, so you can ace that 10K. And because a decent night\'s rest is the key to living your best life, you can check your sleep score in the morning. It gives you a breakdown of your sleep stages and tips on how to get more ZZZs. \r\n \r\nGood to know \r\n \r\n- Crafted with sapphire crystal glass, it\'s made to withstand everyday knocks and drops \r\n- The strap can be switched out in one click, so you can change your look in an instant \r\n- There are handy running tools like Advanced Running Analysis and Personalised Heart Rate Zone \r\n- See all your insights on the Samsung Health app, both on your phone and on your wrist \r\n- It keeps an eye on your heart rate and alerts you if it\'s too high or too low \r\n- With up to 40 hours of battery life, you won\'t lose any progress mid-run ', 199.00, 37, 2, '2024-11-26 22:53:46', 25, ''),
(26, 'SAMSUNG Galaxy S24 FE 5G – 128GB', 'The Galaxy S24 FE uses onboard Galaxy AI to do amazing things. You can translate calls in real time, get info on objects in photos and lots, lots more. Its 50 MP camera system is perfect for snapping everything from selfies to epic landscapes. And it uses AI to brighten images even when its dark. The 6.7\'\' Full HD+ Dynamic AMOLED 2X screen is packed with punchy colours that make games and movies really pop. And with a powerful octa-core Exynos processor, there\'s plenty of muscle for multitasking, gaming, and streaming all day long. \r\n \r\nGood to know \r\n \r\n- Note Assist spits out bite-sized summaries of long articles in seconds, helping you get straight to the point \r\n- Where\'s that sweater from? Circle to Search with Google lets you search objects in your photos just by circling them \r\n- With a massive 4700 mAh battery you\'ll never run out of juice before the end of the day \r\n- The display runs at a 120 Hz refresh rate for super smooth gaming, swiping and binging \r\n- 5G connectivity lets you stream films and shows on-the-go – even when you\'re on the bus to work \r\n- The 10 MP front camera is perfect for selfies with your friends, and video calls with your family \r\n- Facial recognition and fingerprint scanning keeps your personal files safe, secure and for your eyes only \r\n- With an IP68 rating, youve got no worries about splashes or rain showers.', 499.00, 12, 4, '2024-11-26 22:53:46', 26, '');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('egXOHkqr4j14piXpwYnRm8bpMt7LXix1pNwgXzZf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:133.0) Gecko/20100101 Firefox/133.0', 'YTozOntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiR3Z6eGdldno4SWc4WTlIclZXb0xBbXFEMUIyWXhJcVJsck1tUmRadCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9fQ==', 1733680807);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'tester@gmail.com', NULL, '$2y$12$ndLO/sBC0LRxQNaLbvwUuuBSCQXb7ABF9qF40mFlJp9/XT/YG8ciq', NULL, '2024-12-07 18:10:52', '2024-12-07 18:10:52'),
(2, 'admin2', 'tester3@gmail.com', NULL, '$2y$12$JN9So14ZzgxW.AWvVfriRuB36egQfKPeAM.SAN9hcPAYEaWTGSONq', NULL, '2024-12-08 17:18:00', '2024-12-08 17:18:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket_items`
--
ALTER TABLE `basket_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basket_items_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket_items`
--
ALTER TABLE `basket_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basket_items`
--
ALTER TABLE `basket_items`
  ADD CONSTRAINT `basket_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
