-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 05:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvc-hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice_table`
--

CREATE TABLE `notice_table` (
  `id` int(20) NOT NULL,
  `message` text NOT NULL,
  `dateposted` text NOT NULL,
  `archive` int(10) NOT NULL,
  `noticeread` text NOT NULL,
  `noticeposterid` int(20) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_table`
--

INSERT INTO `notice_table` (`id`, `message`, `dateposted`, `archive`, `noticeread`, `noticeposterid`, `title`) VALUES
(15, 'ANNOUNCEMENT!!!\r\nExclusive for SHS Students only (Grade 11 & 12)\r\nKindly click the link below for your VACCINATION DATA.\r\nThis is for DepEd requirement for Learners Information System (LIS) Enrollment.', 'December 13, 2022, 3:56 am', 0, '-3', 3, 'Sample'),
(16, 'Good day DVCians!\r\nFor MODULAR students both PDF/DIGITAL MODULE and PRINTED MODULE. The schedule of your PRELIM EXAMINATION is on September 16, 2022, starts @8:00am to 5:00 pm.', 'December 13, 2022, 3:57 am', 0, '', 3, 'Sample 2'),
(17, 'all', 'December 13, 2022, 4:09 am', 0, '-2-4-24', 2, 'Sample'),
(18, 'ANNOUNCEMENT!!!\r\nExclusive for SHS Students only (Grade 11 & 12)\r\nKindly click the link below for your VACCINATION DATA.\r\nThis is for DepEd requirement for Learners Information System (LIS) Enrollment.', 'December 13, 2022, 4:11 am', 0, '-2-4', 2, 'Sample'),
(19, 'ANNOUNCEMENT!!! Exclusive for SHS Students only (Grade 11 & 12) Kindly click the link below for your VACCINATION DATA. This is for DepEd requirement for Learners ', 'December 13, 2022, 4:19 am', 0, '-4-1-2-11', 1, 'Sample'),
(20, 'annoucement', 'December 13, 2022, 4:57 pm', 0, '-2', 1, 'Sample announcement'),
(21, 'This coming December 12-16, 2022 is our Final exam.', 'December 14, 2022, 9:41 am', 0, '-2', 1, 'FINAL EXAM'),
(22, 'Goodluck and Godbless', 'December 15, 2022, 3:00 pm', 0, '-34', 1, 'FINAL EXAM HRIS!');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(10) NOT NULL,
  `user_type` int(10) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `date_employed` date NOT NULL,
  `educ_attainment` text NOT NULL,
  `employment_record` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` int(10) NOT NULL,
  `archive` int(10) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `department` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `user_type`, `fullname`, `email`, `user_name`, `password`, `birthday`, `date_employed`, `educ_attainment`, `employment_record`, `gender`, `status`, `archive`, `phone_number`, `department`, `designation`) VALUES
(1, 0, 'Shane Enriquez', 'shaneenriquez50@gmail.com', 'admin', 'admin', '1999-08-30', '2019-10-12', 'FBNS', 'Tagum Vivo Service Center', 'Male', 0, 0, '991-232-242', '', ''),
(2, 1, 'Paul Alan Lazaro Alcala', 'paul@gmail.com', 'paul', 'paul', '2022-12-13', '2022-11-27', 'Harvard University is a private Ivy League research university in Cambridge, Massachusetts. Founded in 1 \r\n', 'Employee records are a compilation of all information pertaining to an employee\"', 'Male', 1, 0, '0932-024-3214', 'IT', 'Teacher'),
(4, 1, 'Gladys', 'gladysrubingudmalin96@gmail.com', 'gladys', '1234', '2022-12-11', '2022-12-12', 'Harvard', 'Tesla', 'on', 0, 1, '092-456-5526', 'IT', 'teacher'),
(6, 1, 'Ardy Beloy', 'ardy@gmail.com', 'ardy', '1234', '2022-12-12', '2022-12-05', 'asdasdasd', 'asdasdasdas', 'on', 0, 1, '0923-332-525', 'IT', 'teacher'),
(10, 1, 'Jeraline A. Astillo', 'jeralineastillo@gmail.com', 'jeraline123', 'jeralineastillo21', '1978-08-08', '2014-06-07', 'Master Degree', 'UM -Program Head (Teacher) 2001-2011\r\nHoly Child -Program Head (Teacher)- 2010-2011\r\nJhon Paul College- Faculty-2011-2012\r\nDVC -Program Head (Faculty)- 2014-Present\"\"', 'Female', 1, 0, '0914-142-365', 'BSIT', 'Program Head'),
(11, 1, 'Charlyn D. Atos', 'charlyn3@gmail.com', 'charlyn123', 'charlyn05', '1997-08-20', '2019-12-10', 'Bachelor of Arts Major in English', 'Registrar\"', 'Female', 1, 0, '0923-323-473', 'BEED', 'Registrar'),
(12, 1, 'Limuel L. Cento', 'limuel26@gmail.com', 'limuel123', 'limuel26', '1990-07-26', '2009-10-12', 'Master of Divinity', 'Theology (Program Head)', 'Male', 1, 0, '0938-917-625', 'THEOLOGY', 'Teacher'),
(13, 1, 'Mary Jane M. Pichon', 'maryjane1@gmail.com', 'maryjane123', 'maryjane01', '1995-05-01', '2020-12-15', 'Completed Academic Requirement (MAED-English)\r\nBachelor of Secondary Education-English', 'Teacher Faculty', 'Female', 1, 0, '0980-455-243', 'BSED', 'Teacher'),
(14, 1, 'Rosie C. Dela Cruz', 'rosiedelacruz02@gmail.com', 'rosie123', 'delacruz02', '1959-08-02', '2015-06-01', 'Doctor of Philosophy(Ph,D.)', 'UCCP Cotabato City NPU avenue, Cotabato City\r\nSouthern Christian College, Midsayap Cotabato', 'Female', 1, 0, '0987-647-786', 'BSED', 'School President'),
(15, 1, 'Nikko N. Gorne', 'nikkogorne@gmail.com', 'nikko123', 'nikko01', '1996-07-01', '2021-12-03', 'Bachelors Degree', 'Mindanao Medical Foundation College 1 year & months 2018 to early 2020', 'Male', 1, 0, '0987-654-877', 'BSED', 'Teacher'),
(16, 1, 'Rosendo V. Legurpa', 'rosendo2gmail.com', 'legurpa05', 'legurpa123', '1978-08-05', '2022-08-01', 'Bachelor of Secondary Education MAED-PE On- Going', 'DVC-SSC president\"', 'Male', 1, 0, '0976-775-786', 'BSED', 'Teacher'),
(17, 1, 'Lhyndyl A. Lianza', 'lhyndyl@gmail.com', 'lhyndyl123', 'lhyndyl1234', '1993-02-13', '2015-10-01', 'Post Grad Complete  Academic reAED-English', 'Davao Vision Colleges, Inc.\"', 'Female', 1, 0, '0973-373-145', 'BSED', 'Program Head'),
(18, 1, 'Baby Jane Joseco Lugas', 'babyjane01@gmail.com', 'babyjane123', 'lugas123', '1987-01-25', '2021-08-20', '2009-Holy Cross of Davao College-BSED', 'Davao Vision Colleges-College Faculty\"', 'Female', 1, 0, '0937-464-325', 'BSED', 'Teacher'),
(19, 1, 'Mary Angel L. Lagbas', 'maryangellagbas@gmail.com', 'angellagbas123', 'maryangel12345', '1999-03-04', '2022-02-15', 'College Graduate-BSED Mathematics- University of Southeastern Philippines', 'May 2021-December 2021-ESl Teacher', 'Female', 1, 0, '0935-213-317', 'BSED', 'Teacher'),
(20, 1, 'Cecile Tapini', 'ceciletapini@gmail.com', 'cecile123', 'cecile24', '1991-06-24', '2021-12-05', 'BSED-English in DVC', 'Hello Life-2011-2012', 'Female', 1, 0, '0922-344-124', 'BSED', 'Teacher'),
(21, 1, 'CHARMAINE KAY S. CLARETE', 'charmain123@gmail.com', 'charemain12345', '123', '1997-09-24', '2017-04-17', '•	2013 – H.N Cahisot Central Elementary School\r\n•	2007 – Gen. Santos City High school\r\n•	2015 – Davao Vision Colleges, Inc.\r\n', '•	SHS Teacher in DVC\r\n•	Class Adviser in DVC\r\n', 'Female', 1, 0, '0913-342-144', 'BSED', 'TEACHER'),
(22, 1, 'FERDINAND M. SERDIÑA ', 'ferdinand@gmail.com', 'ferdinand123', '123', '1997-05-22', '2020-06-14', '•	2010 – Catalunan Grande Elementary School\r\n•	2014 – Jesus J. Soriano National High school Catalunan Grande\r\n•	2019 – Davao Vision Colleges, Inc.\r\n', '•	SHS Faculty in DVC\r\n•	Class Adviser in DVC\r\n•	SSG Adviser\r\n•	Math Instructor\r\n\"', 'Male', 1, 0, '0924-324-148', 'BSED', 'MATH TEACHER'),
(23, 1, 'GRACE ANN P. DALAGAN ', 'grace12@gmail.com', 'grace123', '123', '1986-01-08', '2015-07-08', '•	1998-1999 – Catalunan Grande Elementary School\r\n•	2002-2003 – Catalunan Grande National High School\r\n•	2012-2013 – Davao Vision Colleges (BS-Information Technology)\r\n•	2017-2018 – Davao Vision Colleges (BSED major in Social Studies)\r\n•	2020-2021 – Cumberland University (Master in Christian Education)\r\n•	2022-Present – HCDC (Doc. of Educ. Major in Educational Management)\r\n', '•	2015-2018 – I.T Department\r\n•	2018-Present – SHS Department\r\n•	2021-2020 – SMYL\r\n•	2020-2022 – PCT \r\n\"', 'Female', 1, 0, '0939-138-138', 'BSED', 'Senior High Teacher'),
(24, 1, 'JOSE D. RABOR ', 'joserabor@gmail.com', 'jose123', '123', '1964-08-27', '2017-07-09', '•	1979 – International Harvardian University \r\n•	1984-1988 – Hope Life bible College (AB-Theology)\r\n•	1997-2000 – RMC (Bachelor of Education major in English)\r\n', '•	2007-2008 – SMYL\r\n•	2011-2012 – Joji Ilagan\r\n•	2008-2009 – Tamson Christian School\r\n•	2008-2015 – HLBC\r\n•	2010 – Presbyterian Seminary\r\n•	2017-Present – Davao Vision Colleges, Inc.\r\n', 'Male', 1, 0, '0913-484-1372', 'THEOLOGY', 'OSAD DIRECTOR'),
(25, 1, 'PETER TUSTON GABANO ', 'peter1@gmail.com', 'peter123', '123', '1999-02-01', '2022-06-14', '•	2006-2012 – Matina Pangi Elementary School\r\n•	2013-2018 – Daniel R. Aguinaldo National High school\r\n•	2019-2022 – Davao Vision Colleges, Inc.\r\n', '•	2022 – Davao Vision Colleges, Inc.\"', 'Male', 1, 0, '0927-316-373', 'BSIT', 'Teacher Assistant'),
(26, 1, ' MARY CRIS MAGBANUA', 'marycris@gmail.com', 'marycris123', '123', '1988-12-22', '2019-12-09', '•	2000-2001 – Don Manuel Gutierrez  Elementary School\r\n•	2004-2005 – Daniel R. Aguinaldo national High school\r\n•	2006-2010 – University of Mindanao\r\n', '•	2010-2011 – NSO\r\n•	2012-2019 – MATS \r\n•	2019-Present – Davao Vision Colleges, Inc.\r\n\"', 'Female', 1, 0, '0933-374-163', 'BSIT', 'TEACHER'),
(27, 1, 'CHARINA M. BACLAY', 'charina12@gmail.com', 'charina123', '123', '1978-08-04', '2008-09-06', '•	BSED major in Library Science\r\n•	Master of Library Information Science (CAR)\r\n•	Food and Beverages NCII\r\n', '•	Librarian, Information Desk Staff, Registrar\"', 'Female', 1, 0, '0937-378-378', 'BSED', 'TEACHER'),
(28, 1, 'LUZVIMINDA P. ASHOORIYAN, LPT', 'luzviminda@gmail.com', 'luzviminda123', '123', '1977-11-22', '2021-09-07', '•	MBA\r\n•	Practical Nurse\r\n', '•	2019-2021 – SHS Faculty in Brokenshire College of Toril\"\"', 'Female', 1, 0, '0921-367-174', 'BSED', 'TEACHER'),
(29, 1, 'MARILOU E. TEJERO', 'marilou@gmail.com', 'marilou123', '123', '1958-05-02', '2009-07-06', '•	Bachelor of Science major in Biology in MSU – Iligan Institutee of Technology – Iligan City \r\n•	Master of Arts in Education major in Administration & Supervision\r\n•	With units in BSED, with units in ED.D. (UM)\r\n•	a PRC Licensed Teacher\r\n', '•	25 yrs. College Instructor at Andres Soriano College, Bislig Surigao Sur\r\n•	4 yrs. College Instructor at DVC\r\n•	6 yrs. as SHS Principal at DVC\r\n', 'Female', 0, 0, '0926-374-374', 'BSED', 'SHS Prencipal'),
(30, 1, 'ROGER TOLEDO', 'roger@gmail.com', 'roger123', '123', '1964-12-09', '2009-07-12', '•	1971 – Ladtingan Elementary School\r\n•	1989 – High school Notre Dame\r\n•	1984 – Agro Industrial College of Philippines\r\n•	1985 – National Polytechnic Tacloban - BSMT\r\n', '•	2009-Present – Davao Vision Colleges, Inc.', 'Male', 0, 0, '0936-374-137', 'BSED', 'TEACHER'),
(31, 1, 'Sample', 'sample1@gmail.com', 'paul', '12345', '2022-12-15', '2022-12-08', 'sample', 'sample', 'Male', 0, 0, '0912-345-6987', 'IT', 'Teacher'),
(32, 1, 'Mojima', 'mojimar19@gmail.com', 'mojimar', '1234', '2000-09-19', '2022-12-15', 'Graduated in Bachelor of Science and Information Technology', 'June 22, 2022\"', 'Male', 0, 0, '0930-402-1060', 'BSIT', 'Teacher'),
(33, 1, 'Russel jay Lor', 'arjaylor@gmail.com', 'russel13', '1234', '1999-10-13', '2022-12-15', 'Graduated in Bachelor of Science in Information Technology', 'N/A', 'Male', 0, 0, '0946-675-7977', 'BSIT', 'Student'),
(34, 1, 'abboran', 'abboran@gmail.com', 'abboran', '1234', '1996-12-06', '2022-12-15', 'Graduated in BSIT', 'N>A', 'Male', 0, 0, '0912-927-1762', 'BSIT', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice_table`
--
ALTER TABLE `notice_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice_table`
--
ALTER TABLE `notice_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
