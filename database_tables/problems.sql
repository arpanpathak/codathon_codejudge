-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2016 at 12:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `statement` mediumtext NOT NULL,
  `input` mediumtext NOT NULL,
  `output` mediumtext NOT NULL,
  `setno` int(11) NOT NULL,
  `d` varchar(1) NOT NULL,
  `pts` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`no`, `statement`, `input`, `output`, `setno`, `d`, `pts`) VALUES
(3, '<b>Problem1</b><br />\n<b><u>BENNY AND SHOPPING</b></u> <br />\n<p>\nYesterday, Benny decided to buy something from a television shop. She created a list that consisted of small description of N orders. The description for an order number i is a string Si.\nThe description may consist of uppercase/lowercase Latin letters, digits and a Â‘$Â’ sign. But, every time after the sign ''$'' Benny has written one integer C. This specific integer C is the price of the items contained in the order and it might have leading zeroes.</p>\n<p>\nIt''s guaranteed that every string contains exactly one ''$'' character.</p>\n<p>\nAs, it was rainy yesterday, there are some white spaces present within the description of each order. Therefore, the digits might be separated by some amount of spaces.</p>\n<br />\n<p>\nYour task is to determine the price of each order and print it without leading zeroes.</p>\n<br />\n\n<b><u>Input format</b></u>\n<br/>\nThe first line contains a single integer N denoting the number of orders.\n<br />\nThe next lines contains N strings Si denoting the description for each order.\n<br />\n<br />\n\n<b><u>Output format</b></u>\n<br />\nPrint the cost to each of the order in a single line .\n<br />\n<b><u>Constraints</b></u>\n<ul>\n<li>1 <= N <= 500500</li>\n<li>2 <= |Si| <= 10000</li>\n</ul>\n<br />\n<b><u>\nSample input: </b></u>\n<br/>\n4\n<br />\nI want to buy Microsoft for $10000\n<br />\nthis house costs $0 5 0 00 0 Just buy it\n<br />\nsiejfsuhn $ 1 2 3 4 5 6 7 8 9 hello123\n<br />\nthe cost is zero $ 0 0 0 0 0 0\n<br/> \n\n<b><u>Sample Output:</u></b>\n<br />\n$10000\n<br/ >\n$50000\n<br />\n$123456789\n<br />\n$0\n<br />\n<b><u>\nExplanation</u></b>\n<br />\n<ul>\n<li>In the first sample test case, it is clear from the order description that the amount is 10000$</li>\n<li>In the second test case, you have to ignore a leading zero and delete spaces between the digits. So, the answer is $50000.</li>\n<li>The third test case is similar to the second one.</li>\n<li>And the fourth test case has the cost equal to $0 but with many leading zeroes. Hence, to show that the order was free, it is necessary to print a single 0.</li>\n', '4\nThis is the best saree $4000\nmy fuck to you $5 0 0 0 0\nfuck you  $ 0 1 0 0\n\n', '$4000\n$50000\n$100', 1, 'e', 500),
(6, '<b><u>Social Network :</u></b><br />\n<p> Arpan spend most of his time on social networking sites.He loves to use facebook. But he always wanted to make his own Social Networking Site. His idol is Mark Zuckerberg. But he doesn''t know how to code and implement his idea to make his own Social Networking Site.So we he wants you to hire as a software/web developer.Now your job is to help Arpan to create his own Social Networking Site by writing the code for implementing his idea.His idea is :-\n</p>\n<ol>\n<li>Two users registered in the Social Networking Site can become friend anytime. </li>\n<li>If A is friend of B, and C is friend of B, then C is considered as <strong>"Friend of Friend"</strong> of A. Again ,if A is friend of B,C is friend of B and D is friend of C then C is also <strong>"Frieund of Friend" </strong> of A.You may encounter a situation where you would have to fund whether two users X and Y are friend of friend or not. </li>\n<li> If two users A and B are friend of each other then their mutual friends are, <br />\n  M={X | X is friend of A and X is also friend of B}.You may have to find all the mutual friend of two friend.</li>\n<li>Any user can unfriend one or more friends at any time </li>\n</ul>\n<br />\n<b><u>Input Format</u></b><br />\nThe first line of input will take an integer N, which is the number of registered users.<br /> From next line, each line of input will take a command which consists of three fields. The first field is a String which is the Command type or operation type. Next two fields are two integer i and j which are user ids.(User id always starts from 1). \n<br />\nNow command type or Operation type can be of 5 types and they are :-\n<ol>\n<li>"C" for connecting two users </li>\n<li>"F" for checking whether two users are friend of each other or not</li>\n<li>"FF"  For checking whether two users are friend of friend or not </li>\n<li>"M" For finding all the Mutual friend of two Users </li>\n<li>"U" For unfriending two users </li>\n</ol>\nthe system will stop taking input if user gives -1 as input.\n<br />\n<b><u>Output</u></b>\n<br />\nFor each line of input, print the result after performing the given operation. You will not have to print anything for "F" or "U" type operation.\n<br/> For <b>"F" </b> type operation print <b>"Friend"</b> if i,j are friend of each other else print <b>"Not Friend"</b>.For <b>"FF"</b> type operation print <b>"Friend of Friend"</b> else print <b>"Not Friend Of Friend"</b>. For <b>"M"</b> Type Command, print All the Mutual Friends separated by space in single line.\n<br />\n<b><u>Sample Input</b></u><br/>\n5<br />\nF 1 5<br />\nC 1 5<br />\nF 1 5<br />\nC 1 3<br />\nC 2 3<br />\nM 1 2<br />\nC 3 7<br />\nFF 1 7<br />\n-1<br />', '100\nF 1 100\nC 1 100\nF 1 100\nU 1 100\nF 1 100\nC 1 5\nC 5 87\nC 87 27\nC 27 91\nC 91 92\nC 92 93\nC 93 94\nC 94 95\nFF 1 95\nC 1 3\nC 2 3\nC 1 8\nC 2 8\nC 1 6\nC 2 6\nC 1 9\nC 2 9\nM 1 2\nM 1 2\nF 1 100\nF 1 87\nM 1 95\n-1\n', 'Not Friend\nFriend\nNot Friend\nFriend Of Friend\n3 6 8 9 \n3 6 8 9 \nNot Friend\nNot Friend\nNo Mutual Friends', 1, 'm', 700);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
