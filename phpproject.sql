-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 02:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 'Dignissimos repellendus quia molestiae saepe omnis.', 'Nisi rerum totam dolores. Atque dolores eveniet ad nostrum. Libero sint sunt laborum recusandae et.\n\nRerum omnis rerum sunt omnis et suscipit. Tempore eos sunt ullam voluptatem. Ratione corporis iusto id voluptatibus.\n\nExcepturi repudiandae velit eveniet ipsa dignissimos eligendi id. Est sed dolor nihil deserunt deserunt laudantium. Itaque non est libero id quia.', NULL, NULL, 1),
(3, 'Repudiandae perspiciatis eligendi inventore.', 'Molestias labore saepe beatae cupiditate dolorem officia. Nam et reprehenderit et cupiditate id nihil. Totam enim ut consequatur recusandae dolor quia quasi sapiente.\n\nLaudantium dignissimos nihil dolores. Quae aut est ab optio. Et est in voluptatem dignissimos ut distinctio beatae cum. Velit ratione voluptates aut.\n\nDolore occaecati corrupti libero soluta est. Fuga cupiditate porro laborum est pariatur et odit. Aliquid ut ut placeat et dolorum odio facere. Fugiat et voluptatum consequatur quos saepe.', NULL, NULL, 1),
(5, 'Quia et veritatis sed aut quis reiciendis earum.', 'Nihil asperiores deserunt est est error aperiam qui. Cumque illum perferendis beatae molestiae nostrum rerum. Qui occaecati aut omnis earum saepe eos earum sint.\n\nAperiam eum quis error itaque. Quis itaque harum quod similique. Sed quis quidem temporibus provident ipsam a voluptatum.\n\nHic laudantium est inventore molestiae libero aut consequatur. Praesentium ut possimus qui consequuntur. Est qui inventore soluta magnam numquam omnis velit laboriosam. Temporibus minus est aut aut veritatis ipsa id eos. Consequuntur quod vel dicta reprehenderit.', NULL, NULL, 1),
(6, 'Aut quia culpa iure.', 'Culpa amet perferendis est consectetur officiis. Sit aliquid unde voluptas exercitationem. Cumque aspernatur officia voluptatem a voluptas.\n\nEst veritatis autem suscipit quos sit ut veniam. Est commodi alias ea mollitia. Laborum autem ut earum aut sed maxime eligendi.\n\nIllo alias dolorem ab enim qui quasi dolorem. At et aliquid et. Inventore perspiciatis dolores sed harum recusandae dolorem fuga.', NULL, NULL, 1),
(7, 'Quos molestiae voluptatibus rerum.', 'Quae aut et eum at ea totam. Qui omnis cupiditate consectetur pariatur eum corporis. Quia molestias iusto voluptas debitis. Quo assumenda est est sint reprehenderit nam.\n\nDelectus libero accusamus dolores et mollitia ea et. Sed voluptate dolor voluptatem pariatur nulla ut consequuntur. Incidunt dolores expedita cum qui adipisci pariatur sit. Ipsam omnis pariatur rerum. Ea inventore ea et eaque.\n\nIn deleniti ut corporis rerum earum molestiae quis. Et qui quisquam rerum qui commodi dolores. Vel dolorem dolorem qui iusto.', NULL, NULL, 1),
(8, 'Laborum atque iste exercitationem.', 'Vel perferendis nostrum rerum sequi omnis. Quis nostrum dignissimos eligendi veritatis ab possimus sapiente. Occaecati nesciunt voluptatem voluptas repellat velit magni.\n\nVoluptatem assumenda iure nihil fugit numquam laudantium. Facilis mollitia deleniti et ducimus qui consequatur. Illum eos tempore et natus animi. Voluptatem sequi laboriosam commodi cumque incidunt.\n\nEum alias minus quasi laborum a autem temporibus. Excepturi doloremque atque veniam. Ut porro est assumenda eaque aut vero.', NULL, NULL, 1),
(9, 'Eius eveniet tempore quae enim praesentium incidunt.', 'Sequi nobis qui et non ad omnis tenetur. Quia aliquam facilis facilis culpa. Enim quos quaerat non.\n\nSit aperiam sint porro ut sit illum vero. Et qui aliquam consectetur illum dolores ratione. Aut est assumenda ut voluptatibus eveniet omnis eius ut.\n\nEx quisquam odio officiis rem inventore. Aut impedit quod vero praesentium. Fugit eius rerum voluptas dolorem animi est eveniet.', NULL, NULL, 1),
(10, 'Voluptatem perspiciatis repellendus laboriosam ipsa voluptates sint.', 'Et harum at omnis eligendi asperiores laboriosam amet quia. Repellat qui temporibus ipsam consequatur.\n\nBeatae fugit unde id nulla corrupti dolor et. Tempore illum non reprehenderit iure qui sit. Repellendus omnis eos nostrum aliquid est commodi.\n\nConsequatur nemo qui ipsam aliquam quos autem voluptate. Ut odit perferendis ea asperiores tenetur corporis neque. Provident temporibus quia ut ad soluta molestiae.', NULL, NULL, 1),
(11, 'Totam et expedita aspernatur quasi et eveniet.', 'Itaque quia libero quia doloribus officia et vel ut. Dolore molestias et velit corrupti dignissimos consequatur mollitia. Quidem omnis doloremque sed. Aperiam incidunt quis voluptatem id omnis.\n\nUnde odio ducimus illum dolor sit. Voluptatem cumque fugit nulla laboriosam qui. Repudiandae quo error hic architecto. Debitis quo reiciendis ipsa commodi culpa repellendus sunt.\n\nCommodi earum aut ut tenetur nisi et ea. Qui nostrum quia quisquam dolorum. Aut sunt possimus tenetur numquam sed quis repellendus.', NULL, NULL, 1),
(12, 'Voluptatum facilis sit id voluptatem quam qui.', 'Sit culpa incidunt enim rerum illum sed voluptates aut. Qui ut voluptas qui tempora modi. Nam dolorum molestias eum molestiae.\n\nEnim illum omnis quas voluptatem accusantium. Cum delectus molestiae corrupti vel esse modi quis. Est dolorem quisquam modi magnam sit.\n\nRerum cum quia nostrum in et natus. Quibusdam ea saepe sit consequatur possimus. Accusantium cumque eveniet occaecati iusto. Amet voluptatem quia et eveniet quibusdam.', NULL, NULL, 1),
(13, 'Doloribus quo expedita illum sit illum nesciunt.', 'Quaerat eius quisquam sequi modi culpa. Sed iste accusantium rerum. Odio perferendis quia harum distinctio in officiis nulla. Occaecati qui deleniti quis consequatur explicabo exercitationem aperiam.\n\nDistinctio praesentium ipsa dolor quibusdam aut. Laborum aliquid ea qui natus est saepe ex. Enim quia illum et nihil.\n\nVoluptatum delectus porro quaerat sequi. Atque possimus officia aperiam. Sit reiciendis ullam recusandae aut quisquam numquam repellendus quibusdam.', NULL, NULL, 1),
(14, 'Ea inventore excepturi sit.', 'Et perferendis ea fugit nam consequuntur optio. Quia eos sequi dolores odit doloremque et cupiditate veritatis. Sunt impedit quam ipsa consectetur fuga eaque. Soluta earum vitae libero aliquam saepe.\n\nSunt asperiores perspiciatis ab adipisci. Incidunt qui occaecati in sunt. Voluptas atque facere explicabo dolore necessitatibus qui.\n\nPossimus itaque illum dignissimos id id. Ipsa tempora maiores sequi in doloremque explicabo id. Aut dolorem ab nisi iusto blanditiis velit quaerat.', NULL, NULL, 1),
(15, 'Sed odit dolore in possimus quisquam rerum.', 'Dolores quaerat excepturi enim consequuntur. Nisi esse ut ut voluptas omnis. Sit autem et facilis eos. Cumque laborum facere porro iusto.\n\nNon dicta architecto et. Aperiam sed cum labore sit iste.\n\nRecusandae deserunt culpa expedita tenetur maxime ut quis. Veniam id saepe blanditiis veritatis quas est dolor. Amet aut ut vel adipisci. Consequuntur et officiis incidunt et recusandae distinctio asperiores. Fugit ea numquam vel et.', NULL, NULL, 1),
(16, 'Nemo et minima culpa doloribus numquam.', 'Eveniet perspiciatis culpa et repellat. Perferendis quo est nihil dolores omnis. Esse ad cum laborum voluptatem alias exercitationem in. Neque minus fugit voluptatem sunt quos ipsum suscipit quaerat.\n\nEius libero eveniet commodi eos natus. Est error praesentium eveniet. Ratione in ut atque aut illum dolor quos. Qui assumenda sed atque expedita rem culpa. Eius deserunt doloribus voluptates quia dolorem omnis cumque dolorem.\n\nEst debitis aspernatur soluta est. Dolorum molestias exercitationem incidunt ex facilis aperiam. Omnis sunt officiis libero laboriosam necessitatibus voluptatum.', NULL, NULL, 1),
(17, 'Sit laboriosam veritatis distinctio consectetur assumenda.', 'Nihil rerum consequuntur enim ex ut aut. Aut fugiat eum et incidunt fugiat. Minus et voluptatem omnis qui molestiae explicabo voluptas porro. Molestiae quae sapiente aut enim maxime sed.\n\nDolores sit pariatur odit rerum et quis. Est ut totam quibusdam aliquam placeat eius.\n\nOmnis cupiditate cum occaecati asperiores quae aut. Ratione accusamus non ut aut. Nemo ipsa et libero optio magnam repellat maxime.', NULL, NULL, 1),
(18, 'Tempore cupiditate tempore dolore.', 'Mollitia odio dolore asperiores fugiat qui illo. Sunt odio dolor nemo nisi tenetur assumenda atque.\n\nConsectetur beatae non sunt qui sunt sunt. Ut dolorum dignissimos omnis delectus minima aliquam dolores. Aut quisquam qui laboriosam eum architecto officiis esse. Dignissimos temporibus autem dolorum commodi dolores.\n\nVero rem est cupiditate adipisci dolore ipsam voluptatem distinctio. Amet sit ea dolorem nam repellat. Culpa quidem reiciendis quis fugit omnis.', NULL, NULL, 1),
(19, 'Et aut iusto ullam fuga et.', 'Quia ex sint occaecati quam omnis aut autem. Nisi ab molestias amet sequi maiores numquam nisi. Ut dolorum voluptates ut omnis ea.\n\nPossimus voluptatem odit qui incidunt adipisci autem. Quod et dicta similique est labore. Numquam iure et nihil repellat. Ea ut omnis possimus natus tempora quo molestiae.\n\nNam consectetur aut rerum animi. Provident sint voluptas sed qui qui commodi. Eaque voluptates unde nobis. Corporis atque vitae a quia incidunt et maiores.', NULL, NULL, 1),
(20, 'Sint sed sint perferendis error.', 'Rerum quo consequuntur qui iure. Rerum iure ex debitis et. Nihil et quo et qui nisi vero ut.\n\nPossimus repudiandae nulla iure aut dicta. Nihil illo nulla pariatur quas voluptatem corporis hic at. Iure impedit laborum illum quidem.\n\nDeleniti unde repellat tenetur eaque molestiae. Repellendus atque quasi vero et. Delectus fugit qui eligendi hic laboriosam. Aut eum quibusdam placeat veritatis provident architecto facilis.', NULL, NULL, 1),
(21, 'Pariatur facilis et blanditiis reprehenderit qui et.', 'Voluptate nesciunt fugiat doloremque a sit expedita consequuntur. Nam rerum ut ut minima incidunt alias. Quia aut consequatur facilis molestiae.\n\nUt vel at in nostrum quibusdam autem sed. Dolor ad quam perferendis. Nihil est neque dolores odit debitis incidunt.\n\nDebitis eos sint rerum alias. Magni voluptate dignissimos blanditiis voluptates natus optio sapiente. Odit minus eveniet nobis aliquid dolores rerum. Quia vitae in sit est accusamus.', NULL, NULL, 1),
(22, 'Hic adipisci eos et et.', 'Rem aliquam et voluptas sunt. Cupiditate soluta reiciendis dolores voluptate itaque similique. Recusandae eos qui quia et quam deleniti.\n\nCulpa molestias et perspiciatis expedita. Sit aliquid sit sint expedita. Tempora culpa harum asperiores consequuntur.\n\nRem dolorum aliquam nesciunt magni autem adipisci vel. Facilis exercitationem et excepturi quam id delectus. Qui maiores ut molestias.', NULL, NULL, 1),
(23, 'Ut assumenda quos eum et.', 'Similique animi et sit. Voluptas expedita nemo quibusdam vel itaque. Labore tenetur unde enim et laborum.\n\nVoluptatem voluptatem tempora ipsam et delectus accusantium aspernatur. At ea distinctio vero nihil maxime sit natus. Aut ab ipsa architecto. Qui praesentium non quo. Excepturi tenetur dignissimos velit voluptatem.\n\nQuas praesentium aut et tempore. Necessitatibus exercitationem consequatur dolorem delectus consectetur quod. Ea voluptates tenetur eveniet sint velit tempora. Doloremque assumenda tempore qui nostrum tempore beatae a.', NULL, NULL, 1),
(24, 'Eum ut quam ut perspiciatis quas corrupti.', 'Quibusdam et voluptatem rerum. Repudiandae praesentium maxime omnis expedita vel.\n\nNisi et cum id. Vel in fugiat ut officiis eligendi. Et ex nesciunt odio et sint eum error.\n\nPraesentium repellendus sit ut sed iusto. Quasi eaque ut sed optio. Qui explicabo ut reprehenderit labore quibusdam est molestiae. Maiores eos numquam esse aspernatur.', NULL, NULL, 1),
(25, 'Aut qui amet voluptatibus et.', 'Est veniam dolorem rem fuga officiis provident. Debitis accusamus quibusdam repellendus quia nisi. Labore ut qui vel labore adipisci quaerat esse inventore. Est placeat voluptatum non veniam ipsa libero.\n\nQuae aliquam sint debitis autem. Consequatur nihil eos culpa ut harum error nemo. Illum consequatur et omnis sed.\n\nSunt quia debitis reiciendis sed ea fuga iusto dolorum. Sunt beatae repudiandae aliquam assumenda. Tempora iusto minus autem.', NULL, NULL, 1),
(26, 'Doloribus delectus rerum repudiandae nemo vel cupiditate.', 'Natus eius tenetur ut nesciunt quasi maiores corporis. Laboriosam eum quibusdam velit qui corrupti facilis eaque. Magni architecto eveniet molestias sint. Voluptas laborum accusantium eos sunt est incidunt.\n\nLabore dignissimos corrupti molestiae asperiores. Non adipisci eveniet ab alias vitae est vel. Voluptatem delectus quo corporis hic labore ab.\n\nA quia accusamus dicta nostrum. Voluptatum veritatis harum veritatis provident esse blanditiis sed saepe. Necessitatibus hic dignissimos nihil.', NULL, NULL, 1),
(27, 'Reiciendis ut illo sed sit non.', 'Non voluptas animi reprehenderit omnis sint iste exercitationem at. Ut nulla impedit sed rerum et sit. Eligendi vel distinctio id. Cum eum dolorum in.\n\nVoluptatem tempora quia ut iste exercitationem. Fuga aut et iusto nesciunt impedit illum quidem. Numquam ab incidunt magni ut esse. Voluptates rerum facilis quis omnis.\n\nMinus similique facilis iure qui laboriosam. Laborum nulla ea aut vel omnis. Eveniet velit ad fuga maxime. Cumque consectetur maiores recusandae perferendis nulla.', NULL, NULL, 1),
(28, 'Voluptates aut inventore consectetur amet blanditiis vitae.', 'At nihil molestiae tenetur fugiat quis. Ad commodi doloribus velit quo est. Architecto et voluptas enim reiciendis aperiam occaecati id. Dolorem labore modi sed delectus.\n\nVelit et ipsam eveniet ut perferendis provident maiores. Aut ut veritatis nihil. Distinctio aliquid natus eveniet ipsam voluptatem deserunt qui.\n\nSunt velit et atque nam corrupti. Adipisci et voluptatem aut dolores sunt. Saepe tenetur velit odio aspernatur sed ut perferendis quia.', NULL, NULL, 1),
(29, 'Autem et quis ut perferendis.', 'Rerum numquam repellendus possimus ex est. Repellat qui id est alias ea et. Voluptates dolorem occaecati qui omnis quo. Quidem ab iure quidem deserunt praesentium magni minima.\n\nEveniet quasi vel deserunt molestiae minus nihil. Distinctio quasi ut nulla odit sed repudiandae saepe quia. Quia eos enim velit odit et.\n\nQuis necessitatibus sint ab rerum ut. Minus ipsum libero soluta eius et. Dolorem recusandae officiis eos consectetur nostrum et.', NULL, NULL, 1),
(30, 'Et reprehenderit et excepturi et eligendi.', 'Hic itaque et et nisi. Cum possimus libero vero perspiciatis possimus. Molestias cumque velit enim iure doloribus. Ea dicta occaecati ut enim.\n\nConsequatur vel nemo dignissimos eos. Eum quidem esse dicta maxime. Velit beatae ullam delectus assumenda et rerum.\n\nVeritatis debitis vel aut officiis sit laborum. Nulla et dolorem quia numquam. Facere et aperiam molestiae qui hic. Consequuntur est vel itaque esse at officiis.', NULL, NULL, 1),
(31, 'Repudiandae dignissimos adipisci voluptatem adipisci.', 'Qui sed qui quidem dolores eos. Qui consectetur natus aliquam nisi. Sed sit explicabo quia dolor quod repudiandae. Ipsum explicabo impedit omnis molestiae quos sit.\n\nNon vero porro vero provident. Aliquam molestias nam molestiae est sit. Eos fugit numquam sint nisi. Asperiores consequuntur eum molestias enim.\n\nEnim et rem commodi necessitatibus cupiditate et molestiae. Est qui iure dolore quo dolor. Quia quidem veritatis dicta repudiandae. Laboriosam qui et ea veritatis aut consequuntur quam.', NULL, NULL, 1),
(32, 'Enim deserunt placeat eos adipisci aut enim.', 'Fugit sunt vitae repellat sed. Optio alias sed similique expedita accusantium. Pariatur autem aut consequatur vel ut qui. Placeat dolor deleniti iusto est et in.\n\nFuga optio quo quod voluptatem similique sunt. Quo qui est odit rerum error. Iure est aliquam ratione.\n\nDolores voluptate rerum sunt accusamus impedit laboriosam. Assumenda est ut necessitatibus. Ex aut odit nemo magnam. Itaque vitae non atque.', NULL, NULL, 1),
(33, 'Atque architecto blanditiis commodi perferendis sint vel nulla.', 'Sit molestiae illo quidem et. Explicabo aut dolorum commodi rerum deleniti. Eveniet est minima dolores veritatis alias.\n\nAut similique asperiores minima assumenda explicabo. Aut veritatis hic aut saepe. Nulla dolorem consectetur impedit et ad.\n\nIpsum unde sed voluptatem adipisci sunt eos sapiente eius. Quasi autem asperiores et quia et. Delectus non reiciendis laboriosam explicabo dolorum assumenda est.', NULL, NULL, 1),
(34, 'Iure accusamus perspiciatis ab.', 'Reiciendis et porro tempora dolorum. Aspernatur quos ut omnis. Animi vero aut dicta dolore eligendi quae error.\n\nSint esse est voluptate rerum enim et. Dolor iure suscipit dolores excepturi. Sunt fugit in vero minus a eos ipsa. Ut aut et incidunt pariatur sit temporibus.\n\nMinus reiciendis nihil dolor alias. Sed nisi placeat modi nobis dolore qui exercitationem. Aut doloribus vel perferendis esse dignissimos.', NULL, NULL, 1),
(35, 'Unde ipsa dolore et.', 'Explicabo fugiat est accusantium vero possimus autem. Aliquid distinctio ducimus doloribus similique molestias. Nobis quia doloribus deleniti qui dicta qui et. Suscipit facilis nihil in rerum.\n\nOdit dolore voluptatem consequatur voluptatem delectus magni unde. Non enim id amet. Excepturi minima assumenda maiores provident cum tempore.\n\nExercitationem voluptas sint necessitatibus aliquid dolorum eius. Ut earum a sequi ipsa omnis. Modi est rerum omnis ipsam. Impedit qui ut ad sunt iure et necessitatibus.', NULL, NULL, 1),
(36, 'Ut doloremque nesciunt et sint modi.', 'Aliquid voluptatem ad magni molestiae accusantium. Et dolor consectetur et odio rerum possimus. Amet distinctio sed quidem velit quia qui.\n\nQuia quia quisquam omnis perferendis dignissimos. Quia voluptas sed sed aliquid provident dolorum. Sunt et unde magni dolore et.\n\nDolorum qui sequi saepe. Iste saepe corporis iusto sint aspernatur voluptatem aut. Minus qui ad quis. Voluptatum aut accusamus officiis perspiciatis.', NULL, NULL, 1),
(37, 'Necessitatibus corporis non ducimus dolores sed.', 'Corrupti enim sint labore nemo aut quas sint. Beatae nemo velit fugit excepturi nesciunt assumenda. Quibusdam molestiae sed a aut facilis optio est.\n\nAut repellat sapiente veritatis veniam. Aut rerum quis enim consequatur totam. Veritatis ab dolores atque accusantium vel soluta velit. Sed atque ducimus illum rerum est ratione beatae. Minima quasi tenetur molestiae itaque et necessitatibus.\n\nDolorem temporibus voluptatem est atque. Similique odio sit voluptas commodi delectus cupiditate. Iure harum libero vitae qui.', NULL, NULL, 1),
(38, 'Sunt sed et et fuga optio nisi.', 'Mollitia omnis omnis nam sunt cum odio inventore quia. Laboriosam soluta temporibus beatae assumenda. Ut inventore doloremque sint cumque.\n\nNemo velit quis veritatis sed. Nobis reprehenderit ea eius minus est. Accusantium id excepturi quod delectus eaque enim vel. Sit ratione mollitia sit architecto non.\n\nNon dolorem velit neque ut aut deleniti est. Officiis et eum ea omnis accusamus totam quia. Inventore quisquam sunt voluptatem quia enim iste. Omnis qui aut facilis sint aut laudantium.', NULL, NULL, 1),
(39, 'Rem velit et dolores animi dignissimos.', 'Rerum voluptatibus suscipit non tenetur aut. Veniam iusto est eum enim explicabo. Asperiores iste libero est reprehenderit et vero exercitationem. Laboriosam et officia voluptatem voluptatem.\n\nCumque fugit ut et est praesentium qui aut. Voluptatem in et repudiandae earum. Maiores in quidem perferendis reiciendis omnis.\n\nEx sit vitae illo nisi. Aut qui quis nesciunt aspernatur dolorem facilis officia. Sed ut molestias officia reiciendis est minima soluta.', NULL, NULL, 1),
(40, 'Ut repellat voluptates repellendus libero.', 'Architecto vero laboriosam vel. Laborum nesciunt ducimus voluptatem ut architecto est. Optio et laboriosam sit aspernatur.\n\nEt rem qui recusandae aut rerum sint officia perferendis. Accusamus aut sit tenetur quis labore debitis. Dolore sed magnam tenetur eligendi iste voluptatum nam reiciendis. Animi dignissimos sunt vero.\n\nOmnis ad nihil consequatur aliquid non reiciendis. Aut laudantium in ut temporibus qui modi animi. Natus in qui voluptatum dicta quidem pariatur fugit consequatur. Explicabo et dolor atque esse odit quam ad expedita.', NULL, NULL, 1),
(42, 'Qui dolores distinctio voluptas quisquam.', 'Dignissimos eos debitis eos at doloribus ea. Aut molestias placeat enim doloribus. Voluptas commodi dolores unde. Tempore assumenda voluptatem est est praesentium asperiores excepturi.\n\nNemo vero quas et. Suscipit laboriosam similique dolorem rerum doloribus et consequatur. Neque est magnam fugiat numquam non est tempora.\n\nConsequatur et soluta nemo consequatur eos natus pariatur. Veniam modi labore ut ducimus perspiciatis. Unde distinctio et voluptatem sint sunt perferendis maxime. Illum et est saepe et quod molestiae.', NULL, NULL, 1),
(43, 'Debitis fugit aut eligendi.', 'Esse quam impedit molestias voluptatibus tempore asperiores non. Maiores rerum modi provident aut reprehenderit. Dignissimos sit sint ut laborum quod ad. Repellat illum omnis voluptatem.\n\nEt aperiam fugiat quis ea. Nemo iste sed occaecati qui qui officiis consequatur. Illo error dolor in in reprehenderit consequatur asperiores a. Officiis itaque cumque officiis numquam est suscipit ipsum.\n\nAtque quae autem vel sit. Dicta et culpa recusandae nemo error neque aut. Atque magni officia ut ratione unde quia.', NULL, NULL, 1),
(45, 'Fugit voluptatum recusandae et.', 'Amet cumque veritatis et doloribus iure et vel ut. Similique voluptatem dolorum deserunt adipisci. Atque sequi minus eligendi et est et.\n\nPraesentium et aut omnis nulla perferendis et. Velit ut quia ut quam fugiat. Culpa enim natus rem eligendi repellat ut. Reiciendis reprehenderit nisi est.\n\nFacere quia consequuntur impedit similique et consequuntur. Ut ut atque sunt et. Quo et officiis quo nemo unde.', NULL, NULL, 1),
(46, 'Voluptatem cum harum qui consequatur vitae.', 'Laudantium voluptatem blanditiis est autem. Molestias ut unde accusamus laudantium quaerat. Possimus alias quis sit deserunt provident.\n\nLaborum id vitae ab minus. Esse fugit et architecto dolores dolores pariatur eos. Suscipit quibusdam repudiandae aliquam inventore corrupti veniam qui.\n\nEa necessitatibus nobis voluptas velit repellat eos. Quia unde dolorem libero quibusdam delectus asperiores dolore asperiores. Incidunt voluptatem assumenda harum vel eos.', NULL, NULL, 1),
(47, 'Illum quo facilis hic voluptate qui.', 'Sunt placeat veniam cupiditate tempore et. Et rerum nulla est enim ex. Expedita ut iure et modi. Et id dolore dolorem deserunt.\n\nConsequatur iste soluta quisquam voluptas est distinctio. Rerum est necessitatibus vel. Quia sed deleniti illum perferendis.\n\nVoluptatem qui et dicta ratione deleniti tempora. Nobis harum eum eius exercitationem beatae. Cum maxime sit qui culpa omnis inventore consequatur.', NULL, NULL, 1),
(48, 'Aut ea nihil quam.', 'Impedit illo non in blanditiis. In sapiente veritatis ipsum. Consequatur laboriosam neque et laudantium pariatur sit nemo. Numquam id expedita nesciunt aut recusandae perferendis voluptate facilis.\n\nConsequatur asperiores occaecati placeat adipisci odio et ex. Adipisci sit assumenda recusandae explicabo aut qui molestias. Eum reprehenderit et ea. Facilis doloribus nesciunt perspiciatis ducimus nostrum omnis adipisci aut. Id quasi enim vitae consequuntur exercitationem ipsum perferendis.\n\nQui assumenda ut nam quis praesentium ratione laudantium. Velit commodi voluptatem eum totam molestiae omnis quaerat provident. Sequi sit inventore illum placeat. Neque neque voluptas cumque est vel excepturi vitae.', NULL, NULL, 1),
(49, 'Eos a veniam maiores eius est fugiat.', 'Aliquam voluptatum qui dicta neque et omnis. Nulla laudantium voluptatem a dolore sunt officiis aspernatur. Vero doloremque reprehenderit praesentium in minus eum. Et velit minus non voluptatem asperiores nesciunt nobis ab.\n\nVoluptas consectetur eos praesentium sed. Qui sint autem laboriosam quia dolor rerum qui.\n\nSunt natus iure ex quis eum. Iusto eum iusto et. Aut at asperiores repudiandae quas magni voluptates.', NULL, NULL, 1),
(50, 'Ut earum magnam eos voluptas reprehenderit.', 'Eligendi facilis numquam laboriosam ullam vel in. Molestiae accusamus recusandae consequatur optio ut. Corrupti iste assumenda at itaque corporis. Aperiam occaecati atque neque deleniti quia maiores quidem.\n\nEa suscipit velit voluptatem pariatur numquam et modi. Laborum non delectus eveniet mollitia ipsam dolorem. Autem laudantium ut harum autem quia.\n\nAutem quia amet est accusantium est illum ullam. Ipsum ratione qui labore eligendi. Praesentium ut nulla praesentium neque quasi quaerat.', NULL, NULL, 1),
(51, 'asdasd', 'sadasdasd', '2017-10-26 00:09:35', '2017-10-26 00:09:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `description`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 1, 1, '2017-10-25 23:56:21', '2017-10-25 23:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` int(10) UNSIGNED NOT NULL,
  `goal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `goal`, `goal_id`, `created_at`, `updated_at`, `Image`) VALUES
(1, 'Finances', 1, '2017-11-02 16:00:00', '2017-11-02 16:00:00', ''),
(2, 'Physical', 2, '2017-11-02 16:00:00', '2017-11-02 16:00:00', ''),
(3, 'Relationship', 3, '2017-11-02 16:00:00', '2017-11-02 16:00:00', ''),
(4, 'Mental', 4, '2017-11-02 16:00:00', '2017-11-02 16:00:00', ''),
(5, 'Spiritual', 5, '2017-11-07 16:00:00', '2017-11-07 16:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_24_025154_createArticlesTable', 1),
(4, '2017_10_26_050826_create_comments_table', 1),
(5, '2017_10_26_054133_AddUserIDtoArticle', 1),
(6, '2017_11_02_080536_create_goals_table', 2),
(7, '2017_11_03_034050_createUserGoal', 3),
(8, '2017_11_03_065413_createUserGoal', 4),
(9, '2017_11_09_041845_updateTable', 5),
(10, '2017_11_09_042228_userTable', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usergoals`
--

CREATE TABLE `usergoals` (
  `id` int(10) UNSIGNED NOT NULL,
  `goal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Completed` text COLLATE utf8mb4_unicode_ci,
  `notes` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usergoals`
--

INSERT INTO `usergoals` (`id`, `goal`, `description`, `priority`, `name`, `created_at`, `updated_at`, `Completed`, `notes`) VALUES
(4, 'Finance', 'Manage Budget', '1', 'kdavadil', '2017-11-02 23:36:16', '2017-11-13 19:42:29', '0000-00-00 00:00:00', NULL),
(9, 'Spiritual', 'Be Grateful', '1', 'kdavadil', '2017-11-05 20:34:44', '2017-11-13 19:42:21', '', NULL),
(11, 'Finance', 'Manage Budget', '1', 'bianca', '2017-11-05 23:53:59', '2017-11-05 23:53:59', '', ''),
(12, 'Finance', 'Increase US GDP', '1', 'dtrump', '2017-11-12 23:54:03', '2017-11-12 23:54:03', '', ''),
(14, 'Mental', 'Read a book daily', '1', 'kdavadil', '2017-11-13 00:51:32', '2017-11-13 00:51:32', '', ''),
(15, 'Mental', 'Listen to Podcasts', '1', 'bianca', '2017-11-13 21:01:22', '2017-11-13 21:01:22', '', ''),
(16, 'Physical', 'Yoga', '1', 'bianca', '2017-11-13 21:03:44', '2017-11-13 21:03:44', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kdavadil', 'kenneth.davadilla@upstr3am.com', '1510553961.jpg', '$2y$10$rNAJmAg233HEzMD2LDZOAOjD.NSRuVEPDF7Ig7gMwiMSJ6dL9k9EW', '2FRDRBIX2vxS3WB7pZ674F8S86apShGR82Q38SjSk1H2HSkT2gjie2KqlVzs', '2017-11-08 20:24:21', '2017-11-12 22:19:21'),
(2, 'bianca', 'biancadolor@gmail.com', '1510211313.png', '$2y$10$Ox6AXvYvOLfTbQNig8/1aeLhygdRBpm8J4Bu8lqWnzwy1Fz9gRMDi', 'T9SQnNP3wUzzzrB298Zah4SaUMte2VbkqgOFebHlMAbBSnKHcKNtysBb3RZY', '2017-11-08 21:50:44', '2017-11-08 23:08:33'),
(3, 'admin', 'admin@upstr3am.com', 'default.jpg', '$2y$10$dfpjWLOlNV7M0DEbYyrRteEZvIebjz4/nqOVrmnQY4XcTKBZIJMla', 'AFzJcPSgxJTq56HydpA3QYQv5b2SNlXkl9guYvR9rXRBCWaqSrHvv5i37Rb8', '2017-11-08 23:13:15', '2017-11-08 23:13:15'),
(4, 'dtrump', 'donald.trump@gmail.com', 'default.jpg', '$2y$10$KaGLEhmRedp12KJeHAGfhuo/OIh/59VIhdFirW1uGiyQcjyWGrQ9O', 'fAq4W18zIQBE7GOpzzPUsKPjo2nYTP2Ve0OinYXyQEMU6TTQosPWGPjViLgw', '2017-11-12 23:28:25', '2017-11-12 23:28:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `usergoals`
--
ALTER TABLE `usergoals`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `usergoals`
--
ALTER TABLE `usergoals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
