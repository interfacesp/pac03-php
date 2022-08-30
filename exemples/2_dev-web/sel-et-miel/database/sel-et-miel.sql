
--
-- Table structure for table `crepes`
--

CREATE TABLE `crepes` (
  `nom` varchar(256) NOT NULL,
  `prix` decimal(4,2) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table des crêpes ';

--
-- Dumping data for table `crepes`
--

INSERT INTO `crepes` (`nom`, `prix`, `id`) 
VALUES
('crepe au chocolat', '10.25', 1),
('crêpe aux fraises', '20.20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gaufres`
--

CREATE TABLE `gaufres` (
  `nom` varchar(258) NOT NULL,
  `prix` decimal(4,2) NOT NULL,
  `id` int(11) NOT NULL,
  `username_gaufre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gaufres`
--

INSERT INTO `gaufres` (`nom`, `prix`, `id`, `username_gaufre`) VALUES
('gaufre aux fraises', '20.20', 1, ''),
('gaufre aux myrtilles', '11.20', 2, ''),
('Gaufre des bois', '8.90', 3, ''),
('gaufre au Sucre ', '11.20', 4, ''),
('Gaufre de bruxelles', '15.70', 5, ''),
('Gaufrite', '19.20', 6, ''),
('Gaufrite 2 ', '76.40', 7, ''),
('Gaufrite 5', '10.60', 9, ''),
('Test ', '99.20', 10, ''),
('Test 2', '99.30', 11, ''),
('Test 3', '99.20', 12, ''),
('Test', '99.20', 13, ''),
('Test 3.1', '22.00', 14, ''),
('Test 4.2 : 99.99', '99.99', 15, ''),
('Test 9.999', '10.00', 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nom` varchar(256) DEFAULT NULL,
  `prenom` varchar(256) DEFAULT NULL,
  `date-inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`username`, `password`, `nom`, `prenom`, `date-inscription`) VALUES
('menen', 'hello', NULL, NULL, '2021-11-30'),
('valentina', 'hello', NULL, NULL, '2021-11-30'),
('victoria', 'hello', NULL, NULL, '2021-11-30'),
('welcome', 'hello', NULL, NULL, '2021-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crepes`
--
ALTER TABLE `crepes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaufres`
--
ALTER TABLE `gaufres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crepes`
--
ALTER TABLE `crepes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

