-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2018 at 04:36 AM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 5.6.37-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_parsing`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) UNSIGNED NOT NULL,
  `Title` text,
  `Job_Title` text,
  `Original_text` text,
  `Lead_Tags` text,
  `Source` text,
  `Reference_URL` text,
  `Project_Start` text,
  `Project_deadline` text,
  `Work_Type` text,
  `Lead_Value` text,
  `Value_Type` text,
  `CMS` text,
  `Website` text,
  `Website_Built` text,
  `Website_Information` text,
  `Mobile_Responsive` text,
  `Google_Desktop_score` text,
  `Google_Mobile_score` text,
  `SEO_Score` text,
  `Website_Speed` text,
  `Website_Performance_Grade` text,
  `Google_Sandbox` text,
  `Schema_text` text,
  `Domain_Age` text,
  `Website_Create` text,
  `Website_Last_Update` text,
  `Status_Code` text,
  `Contact_title` text,
  `First_Name` text,
  `Last_Name` text,
  `Position` text,
  `Company_Name` text,
  `Nature_of_Business_SIC` text,
  `Company_Registration_Number` text,
  `linkedin` text,
  `google_plus` text,
  `facebook` text,
  `skype` text,
  `Personal_email` text,
  `Email` text,
  `Mailto` text,
  `Phone_Number` text,
  `Mobile_Number` text,
  `Lead_Class` text,
  `Email_Subject` text,
  `Status` text,
  `Note` text,
  `Instagram` text,
  `Professional_Email` text,
  `Contact_Number` text,
  `Experince` text,
  `Reference` text,
  `Why_are_you_leaving_current_job` text,
  `How_many_Years_Experince` text,
  `Internal_Grade` text,
  `CV` text,
  `Salary_Expectation` text,
  `Category` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
