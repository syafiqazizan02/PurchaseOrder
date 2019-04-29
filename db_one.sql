-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 06:06 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Syafiq', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `status`) VALUES
(1, 'Yayasan Sultanah Bahiyah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `address`, `postcode`, `city`, `state`, `status`) VALUES
(2, 'Infogate Sdn Bhd', 'Lot 3G, Wisma Ihsan, Jalan Badak', '04560', 'Alor Setar', 'Kedah', 1),
(3, 'Ingram Micro Malaysia Sdn Bhd', 'Lot 3G, Wisma Haris, Jalan Gajah', '05639', 'Shah Alam', 'Selangor', 1),
(4, 'University Teknikal Malaysia Melaka', 'Jalan University', '05642', 'Durian Tungal', 'Melaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `res_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `redate` date NOT NULL,
  `product` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `eta` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `gst` double NOT NULL,
  `t_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `username`, `res_id`, `client_name`, `company_name`, `redate`, `product`, `model`, `description`, `shipping`, `price`, `quantity`, `eta`, `remark`, `amount`, `gst`, `t_amount`) VALUES
(23, 'Man', 1, 'Yayasan Sultanah Bahiyah', 'Ingram Micro Malaysia Sdn Bhd', '2017-04-06', 'SGH1234', 'HP Server', '', '', 1000, 1, '', '', 1000, 60, 1060),
(30, 'Man', 1, 'Yayasan Sultanah Bahiyah', 'Ingram Micro Malaysia Sdn Bhd', '2017-04-06', 'SDH2345', '***HP Monitor', '', '', 0, 1, '', '', 0, 0, 0),
(31, 'Man', 1, 'Yayasan Sultanah Bahiyah', 'Ingram Micro Malaysia Sdn Bhd', '2017-04-06', 'SGH3235', '***HP Hardisk', '', '', 0, 1, '', '', 0, 0, 0),
(32, 'Man', 1, 'Yayasan Sultanah Bahiyah', 'Ingram Micro Malaysia Sdn Bhd', '2017-04-06', 'SDH2345', 'HP Printer', '', '', 300, 1, '', '', 300, 18, 318),
(33, 'Man', 1, 'Yayasan Sultanah Bahiyah', 'Ingram Micro Malaysia Sdn Bhd', '2017-04-06', 'SDH4956', 'HP Monitor', '', '', 80, 2, '', '', 160, 9.6, 169.6),
(34, 'Man', 1, 'Yayasan Sultanah Bahiyah', 'Ingram Micro Malaysia Sdn Bhd', '2017-04-06', 'SDH2956', 'HP CPU', '', '', 130, 2, '', '', 260, 15.6, 275.6),
(35, 'Man', 2, 'Yayasan Sultanah Bahiyah', 'Infogate Sdn Bhd', '2018-02-23', '24252', 'ProBrain 345 Black', 'Odc', '', 10, 2, '', '', 20, 1.2, 21.2),
(36, 'Man', 3, 'Yayasan Sultanah Bahiyah', 'Infogate Sdn Bhd', '2018-02-16', '23838102', 'printer', '4t', '', 10, 2, '', '', 20, 1.2, 21.2),
(37, 'Man', 2, 'Yayasan Sultanah Bahiyah', 'Infogate Sdn Bhd', '2018-02-23', '35', 'of', 'sgfg', 'gsg', 10, 2, '1', '2', 20, 1.2, 21.2);

-- --------------------------------------------------------

--
-- Table structure for table `new_item`
--

CREATE TABLE `new_item` (
  `item_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `res_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `redate` date NOT NULL,
  `product` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `eta` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `gst` double NOT NULL,
  `t_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_request`
--

CREATE TABLE `new_request` (
  `res_id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_pic` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_number` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_pic` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `redate` date NOT NULL,
  `prodate` date NOT NULL,
  `status` int(11) NOT NULL,
  `po_no` varchar(255) NOT NULL,
  `attn` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `branch_address` varchar(255) NOT NULL,
  `delivered` int(11) NOT NULL,
  `dev_num` varchar(255) NOT NULL,
  `approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro_item`
--

CREATE TABLE `pro_item` (
  `item_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `res_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `redate` date NOT NULL,
  `product` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `eta` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `gst` double NOT NULL,
  `t_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro_request`
--

CREATE TABLE `pro_request` (
  `res_id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_pic` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_number` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_pic` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `redate` date NOT NULL,
  `prodate` date NOT NULL,
  `status` int(11) NOT NULL,
  `po_no` varchar(255) NOT NULL,
  `attn` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `branch_address` varchar(255) NOT NULL,
  `delivered` int(11) NOT NULL,
  `dev_num` varchar(255) NOT NULL,
  `approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `res_id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_pic` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_number` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_pic` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `redate` date NOT NULL,
  `prodate` date NOT NULL,
  `status` int(11) NOT NULL,
  `po_no` varchar(255) NOT NULL,
  `attn` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `branch_address` varchar(255) NOT NULL,
  `delivered` int(11) NOT NULL,
  `dev_num` varchar(255) NOT NULL,
  `approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`res_id`, `username`, `client_name`, `client_pic`, `client_email`, `client_number`, `company_name`, `company_pic`, `company_email`, `total`, `address`, `postcode`, `city`, `state`, `redate`, `prodate`, `status`, `po_no`, `attn`, `branch`, `branch_address`, `delivered`, `dev_num`, `approve`) VALUES
(1, 'Man', 'Yayasan Sultanah Bahiyah', 'Syafiq Azizan', 'syafiqazizan85@gmail.com', '011-35150835', 'Ingram Micro Malaysia Sdn Bhd', 'Lee Chong Kwat', 'chongkwat@gmail.com', 1823.2, 'Lot 3G, Wisma Haris, Jalan Gajah', '05639', 'Shah Alam', 'Selangor', '2017-04-06', '2017-04-08', 0, '23456', 'Faizal Ismail', 'MECACOM TECHNOLOGIES SDN BHD (KEDAH BRANCH)', 'No.1931-G, Taman Darulaman, Jalan Stadium, 05100 Alor Setar, Kedah.', 0, '', 0),
(2, 'Man', 'Yayasan Sultanah Bahiyah', 'Asyhraf', 'Asyhraf@gmail', '0111', 'Infogate Sdn Bhd', 'Syafiq', 'asssssasa@gmail', 42.4, 'Lot 3G, Wisma Ihsan, Jalan Badak', '04560', 'Alor Setar', 'Kedah', '2018-02-23', '0000-00-00', 0, '', '', '', '', 0, '', 0),
(3, 'Man', 'Yayasan Sultanah Bahiyah', 'kkk', 'dsfd@', '1122323', 'Infogate Sdn Bhd', 'ali', 'sgdg', 21.2, 'Lot 3G, Wisma Ihsan, Jalan Badak', '04560', 'Alor Setar', 'Kedah', '2018-02-16', '2018-02-14', 0, '334546', 'dgsrhtrhry', 'y5y5', 'e4t4', 0, '', 0),
(4, 'Man', 'Yayasan Sultanah Bahiyah', 'srgr', 'grgr', 'rgd', 'Infogate Sdn Bhd', '5h5y', 'drgr', 0, 'Lot 3G, Wisma Ihsan, Jalan Badak', '04560', 'Alor Setar', 'Kedah', '2018-02-15', '0000-00-00', 0, '', '', '', '', 0, '', 0),
(5, 'jan', 'Yayasan Sultanah Bahiyah', 'sef', 'sefsef', 'efsef', 'Infogate Sdn Bhd', 'sfe', 'fesffe', 0, 'Lot 3G, Wisma Ihsan, Jalan Badak', '04560', 'Alor Setar', 'Kedah', '2018-02-20', '0000-00-00', 0, '', '', '', '', 0, '', 0),
(6, '', 'Yayasan Sultanah Bahiyah', 'htrhh', 'thtr', 'tfhfh', 'Infogate Sdn Bhd', 'fth', 'tfh', 0, 'Lot 3G, Wisma Ihsan, Jalan Badak', '04560', 'Alor Setar', 'Kedah', '2018-02-13', '0000-00-00', 0, '', '', '', '', 0, '', 0),
(7, 'Man', 'Yayasan Sultanah Bahiyah', 'aer', 'aer@hjasdv', '167u', 'University Teknikal Malaysia Melaka', 's fd', 'sagtrg@.com', 0, 'Jalan University', '05642', 'Durian Tungal', 'Melaka', '2018-03-13', '0000-00-00', 0, '', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_one`
--

CREATE TABLE `staff_one` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_one`
--

INSERT INTO `staff_one` (`id`, `username`, `password`) VALUES
(1, 'Asmah', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `staff_three`
--

CREATE TABLE `staff_three` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_three`
--

INSERT INTO `staff_three` (`id`, `username`, `password`) VALUES
(1, 'Fizah', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `staff_two`
--

CREATE TABLE `staff_two` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_two`
--

INSERT INTO `staff_two` (`id`, `username`, `password`) VALUES
(1, 'Izze', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `status`) VALUES
(7, 'Man', '123', 1),
(9, 'jan', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `new_item`
--
ALTER TABLE `new_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `new_request`
--
ALTER TABLE `new_request`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `pro_item`
--
ALTER TABLE `pro_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `pro_request`
--
ALTER TABLE `pro_request`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `staff_one`
--
ALTER TABLE `staff_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_three`
--
ALTER TABLE `staff_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_two`
--
ALTER TABLE `staff_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `new_item`
--
ALTER TABLE `new_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_request`
--
ALTER TABLE `new_request`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pro_item`
--
ALTER TABLE `pro_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pro_request`
--
ALTER TABLE `pro_request`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `staff_one`
--
ALTER TABLE `staff_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff_three`
--
ALTER TABLE `staff_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff_two`
--
ALTER TABLE `staff_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
