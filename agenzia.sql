-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 20, 2021 alle 16:20
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenzia`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `aereo`
--

CREATE TABLE `aereo` (
  `Nome` varchar(255) NOT NULL,
  `Immagine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `aereo`
--

INSERT INTO `aereo` (`Nome`, `Immagine`) VALUES
('Alitalia', 'alitalia.png'),
('Ryanair', 'ryanair.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `automobile`
--

CREATE TABLE `automobile` (
  `Nome` varchar(255) NOT NULL,
  `Immagine` varchar(255) NOT NULL,
  `Caratteristiche` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `automobile`
--

INSERT INTO `automobile` (`Nome`, `Immagine`, `Caratteristiche`) VALUES
('Fiat 500', '500.png', '1.2 benzina 69cv'),
('Ford Focus', 'focus.png', '1.5 diesel 120cv');

-- --------------------------------------------------------

--
-- Struttura della tabella `hotel`
--

CREATE TABLE `hotel` (
  `Nome` varchar(255) NOT NULL,
  `Immagine` varchar(255) NOT NULL,
  `Camere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `hotel`
--

INSERT INTO `hotel` (`Nome`, `Immagine`, `Camere`) VALUES
('Baia Verde', 'baiaverde.png', 2),
('Plaza', 'plaza.png', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--

CREATE TABLE `prenotazione` (
  `Nome` varchar(255) NOT NULL,
  `Servizio` varchar(255) NOT NULL,
  `Tipo` varchar(255) NOT NULL,
  `Part_airoport` varchar(255) NOT NULL,
  `Dest_airport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `servizi`
--

CREATE TABLE `servizi` (
  `Tipo` varchar(255) NOT NULL,
  `Immagine` varchar(255) NOT NULL,
  `Descrizione` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `servizi`
--

INSERT INTO `servizi` (`Tipo`, `Immagine`, `Descrizione`, `URL`) VALUES
('Hotel', 'hotel.png', 'Seleziona un hotel', 'prenotazionehotel.php'),
('Noleggio Automobili', 'auto.png', 'Seleziona il tipo di automobile', 'noleggio.php'),
('Prenotazione volo', 'alitalia.png', 'Seleziona la destinazione \r\ne le modalità di viaggio', 'prenotazionevolo.php');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`Username`, `Password`) VALUES
('aldfier', 'aA234567890?'),
('vesspino', 'aA123456789?');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `aereo`
--
ALTER TABLE `aereo`
  ADD PRIMARY KEY (`Nome`);

--
-- Indici per le tabelle `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`Nome`);

--
-- Indici per le tabelle `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Nome`);

--
-- Indici per le tabelle `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`Nome`);

--
-- Indici per le tabelle `servizi`
--
ALTER TABLE `servizi`
  ADD PRIMARY KEY (`Tipo`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
