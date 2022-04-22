-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `chatrooms`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `members`
--

CREATE TABLE `members` (
  `mid` int(11) NOT NULL,
  `m_uid` int(11) NOT NULL,
  `m_rid` int(11) NOT NULL,
  `mstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `messages`
--

CREATE TABLE `messages` (
  `msid` int(11) NOT NULL,
  `ms_uid` int(11) NOT NULL,
  `ms_rid` int(11) NOT NULL,
  `msdatetime` datetime NOT NULL,
  `mstext` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rooms`
--

CREATE TABLE `rooms` (
  `rid` int(11) NOT NULL,
  `rname` varchar(15) NOT NULL,
  `rowner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `rooms`
--

INSERT INTO `rooms` (`rid`, `rname`, `rowner`) VALUES
(1, 'Public ChatRoom', 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uusername` varchar(15) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `usurname` varchar(20) NOT NULL,
  `upass` varchar(15) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mid`);

--
-- Ευρετήρια για πίνακα `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msid`);

--
-- Ευρετήρια για πίνακα `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`rid`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `members`
--
ALTER TABLE `members`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT για πίνακα `messages`
--
ALTER TABLE `messages`
  MODIFY `msid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT για πίνακα `rooms`
--
ALTER TABLE `rooms`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1637796124;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1641413467;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
