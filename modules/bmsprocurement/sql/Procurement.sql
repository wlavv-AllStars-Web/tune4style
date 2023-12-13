-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 13 Juillet 2017 à 10:24
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
/*SET time_zone = "00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ju_prestaDev`
--

-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_currency`
--

CREATE TABLE `ps_bms_procurement_currency` (
  `id_bms_procurement_currency` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `iso_code` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ps_bms_procurement_currency`
--

INSERT INTO `ps_bms_procurement_currency` (`id_bms_procurement_currency`, `name`, `iso_code`) VALUES
(1, 'Afghani', 'AFN'),
(2, 'Lek', 'ALL'),
(3, 'Armenian Dram', 'AMD'),
(4, 'Netherlands Antillian Guilder', 'ANG'),
(5, 'Kwanza', 'AOA'),
(6, 'Argentine Peso', 'ARS'),
(7, 'Australian Dollar', 'AUD'),
(8, 'Aruban Guilder', 'AWG'),
(9, 'Azerbaijanian Manat', 'AZN'),
(10, 'Convertible Marks', 'BAM'),
(11, 'Barbados Dollar', 'BBD'),
(12, 'Taka', 'BDT'),
(13, 'Bulgarian Lev', 'BGN'),
(14, 'Bahraini Dinar', 'BHD'),
(15, 'Burundi Franc', 'BIF'),
(16, 'Bermudian Dollar (customarily known as Bermuda Dollar)', 'BMD'),
(17, 'Brunei Dollar', 'BND'),
(18, 'Boliviano Mvdol', 'BOB BOV'),
(19, 'Brazilian Real', 'BRL'),
(20, 'Bahamian Dollar', 'BSD'),
(21, 'Pula', 'BWP'),
(22, 'Belarussian Ruble', 'BYR'),
(23, 'Belize Dollar', 'BZD'),
(24, 'Canadian Dollar', 'CAD'),
(25, 'Congolese Franc', 'CDF'),
(26, 'Swiss Franc', 'CHF'),
(27, 'Chilean Peso Unidades de fomento', 'CLP CLF'),
(28, 'Yuan Renminbi', 'CNY'),
(29, 'Colombian Peso Unidad de Valor Real', 'COP COU'),
(30, 'Costa Rican Colon', 'CRC'),
(31, 'Cuban Peso Peso Convertible', 'CUP CUC'),
(32, 'Cape Verde Escudo', 'CVE'),
(33, 'Czech Koruna', 'CZK'),
(34, 'Djibouti Franc', 'DJF'),
(35, 'Danish Krone', 'DKK'),
(36, 'Dominican Peso', 'DOP'),
(37, 'Algerian Dinar', 'DZD'),
(38, 'Kroon', 'EEK'),
(39, 'Egyptian Pound', 'EGP'),
(40, 'Nakfa', 'ERN'),
(41, 'Ethiopian Birr', 'ETB'),
(42, 'Euro', 'EUR'),
(43, 'Fiji Dollar', 'FJD'),
(44, 'Falkland Islands Pound', 'FKP'),
(45, 'Pound Sterling', 'GBP'),
(46, 'Lari', 'GEL'),
(47, 'Cedi', 'GHS'),
(48, 'Gibraltar Pound', 'GIP'),
(49, 'Dalasi', 'GMD'),
(50, 'Guinea Franc', 'GNF'),
(51, 'Quetzal', 'GTQ'),
(52, 'Guyana Dollar', 'GYD'),
(53, 'Hong Kong Dollar', 'HKD'),
(54, 'Lempira', 'HNL'),
(55, 'Croatian Kuna', 'HRK'),
(56, 'Gourde US Dollar', 'HTG USD'),
(57, 'Forint', 'HUF'),
(58, 'Rupiah', 'IDR'),
(59, 'New Israeli Sheqel', 'ILS'),
(60, 'Indian Rupee', 'INR'),
(61, 'Indian Rupee Ngultrum', 'INR BTN'),
(62, 'Iraqi Dinar', 'IQD'),
(63, 'Iranian Rial', 'IRR'),
(64, 'Iceland Krona', 'ISK'),
(65, 'Jamaican Dollar', 'JMD'),
(66, 'Jordanian Dinar', 'JOD'),
(67, 'Yen', 'JPY'),
(68, 'Kenyan Shilling', 'KES'),
(69, 'Som', 'KGS'),
(70, 'Riel', 'KHR'),
(71, 'Comoro Franc', 'KMF'),
(72, 'North Korean Won', 'KPW'),
(73, 'Won', 'KRW'),
(74, 'Kuwaiti Dinar', 'KWD'),
(75, 'Cayman Islands Dollar', 'KYD'),
(76, 'Tenge', 'KZT'),
(77, 'Kip', 'LAK'),
(78, 'Lebanese Pound', 'LBP'),
(79, 'Sri Lanka Rupee', 'LKR'),
(80, 'Liberian Dollar', 'LRD'),
(81, 'Lithuanian Litas', 'LTL'),
(82, 'Latvian Lats', 'LVL'),
(83, 'Libyan Dinar', 'LYD'),
(84, 'Moroccan Dirham', 'MAD'),
(85, 'Moldovan Leu', 'MDL'),
(86, 'Malagasy Ariary', 'MGA'),
(87, 'Denar', 'MKD'),
(88, 'Kyat', 'MMK'),
(89, 'Tugrik', 'MNT'),
(90, 'Pataca', 'MOP'),
(91, 'Ouguiya', 'MRO'),
(92, 'Mauritius Rupee', 'MUR'),
(93, 'Rufiyaa', 'MVR'),
(94, 'Kwacha', 'MWK'),
(95, 'Mexican Peso Mexican Unidad de Inversion (UDI)', 'MXN MXV'),
(96, 'Malaysian Ringgit', 'MYR'),
(97, 'Metical', 'MZN'),
(98, 'Naira', 'NGN'),
(99, 'Cordoba Oro', 'NIO'),
(100, 'Norwegian Krone', 'NOK'),
(101, 'Nepalese Rupee', 'NPR'),
(102, 'New Zealand Dollar', 'NZD'),
(103, 'Rial Omani', 'OMR'),
(104, 'Balboa US Dollar', 'PAB USD'),
(105, 'Nuevo Sol', 'PEN'),
(106, 'Kina', 'PGK'),
(107, 'Philippine Peso', 'PHP'),
(108, 'Pakistan Rupee', 'PKR'),
(109, 'Zloty', 'PLN'),
(110, 'Guarani', 'PYG'),
(111, 'Qatari Rial', 'QAR'),
(112, 'New Leu', 'RON'),
(113, 'Serbian Dinar', 'RSD'),
(114, 'Russian Ruble', 'RUB'),
(115, 'Rwanda Franc', 'RWF'),
(116, 'Saudi Riyal', 'SAR'),
(117, 'Solomon Islands Dollar', 'SBD'),
(118, 'Seychelles Rupee', 'SCR'),
(119, 'Sudanese Pound', 'SDG'),
(120, 'Swedish Krona', 'SEK'),
(121, 'Singapore Dollar', 'SGD'),
(122, 'Saint Helena Pound', 'SHP'),
(123, 'Leone', 'SLL'),
(124, 'Somali Shilling', 'SOS'),
(125, 'Surinam Dollar', 'SRD'),
(126, 'Dobra', 'STD'),
(127, 'El Salvador Colon US Dollar', 'SVC USD'),
(128, 'Syrian Pound', 'SYP'),
(129, 'Lilangeni', 'SZL'),
(130, 'Baht', 'THB'),
(131, 'Somoni', 'TJS'),
(132, 'Manat', 'TMT'),
(133, 'Tunisian Dinar', 'TND'),
(135, 'Turkish Lira', 'TRY'),
(136, 'Trinidad and Tobago Dollar', 'TTD'),
(137, 'New Taiwan Dollar', 'TWD'),
(138, 'Tanzanian Shilling', 'TZS'),
(139, 'Hryvnia', 'UAH'),
(140, 'Uganda Shilling', 'UGX'),
(141, 'US Dollar', 'USD'),
(142, 'Peso Uruguayo Uruguay Peso en Unidades Indexadas', 'UYU UYI'),
(143, 'Uzbekistan Sum', 'UZS'),
(144, 'Bolivar Fuerte', 'VEF'),
(145, 'Dong', 'VND'),
(146, 'Vatu', 'VUV'),
(147, 'Tala', 'WST'),
(148, 'CFA Franc BEAC', 'XAF'),
(149, 'Silver', 'XAG'),
(150, 'Gold', 'XAU'),
(151, 'Bond Markets Units European Composite Unit (EURCO)', 'XBA'),
(152, 'European Monetary Unit (E.M.U.-6)', 'XBB'),
(153, 'European Unit of Account 9(E.U.A.-9)', 'XBC'),
(154, 'European Unit of Account 17(E.U.A.-17)', 'XBD'),
(155, 'East Caribbean Dollar', 'XCD'),
(156, 'SDR', 'XDR'),
(157, 'UIC-Franc', 'XFU'),
(158, 'CFA Franc BCEAO', 'XOF'),
(159, 'Palladium', 'XPD'),
(160, 'CFP Franc', 'XPF'),
(161, 'Platinum', 'XPT'),
(162, 'Codes specifically reserved for testing purposes', 'XTS'),
(163, 'Yemeni Rial', 'YER'),
(164, 'Rand', 'ZAR'),
(165, 'Rand Loti', 'ZAR LSL'),
(166, 'Rand Namibia Dollar', 'ZAR NAD'),
(167, 'Zambian Kwacha', 'ZMK'),
(168, 'Zimbabwe Dollar', 'ZWL'),
(169, 'United Arab Emirates Dirham', 'AED')
;
-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_payment_method`
--

CREATE TABLE `ps_bms_procurement_payment_method` (
  `id_bms_procurement_payment_method` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ps_bms_procurement_payment_method`
--

INSERT INTO `ps_bms_procurement_payment_method` (`id_bms_procurement_payment_method`, `name`) VALUES
(1, 'Credit card'),
(2, 'PayPal'),
(3, 'Bank wire'),
(4, 'Cash on delivery'),
(5, 'Check'),
(6, 'Cash')
;

-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_payment_status`
--

CREATE TABLE `ps_bms_procurement_payment_status` (
  `id_bms_procurement_payment_status` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ps_bms_procurement_payment_status`
--

INSERT INTO `ps_bms_procurement_payment_status` (`id_bms_procurement_payment_status`, `name`) VALUES
(1, 'Pending'),
(2, 'Partially paid'),
(3, 'Paid');

-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_payment_term`
--

CREATE TABLE `ps_bms_procurement_payment_term` (
  `id_bms_procurement_payment_term` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ps_bms_procurement_payment_term`
--

INSERT INTO `ps_bms_procurement_payment_term` (`id_bms_procurement_payment_term`, `name`) VALUES
(1, 'Payment in advance'),
(2, 'On delivery'),
(3, 'Net 30'),
(4, 'Net 60'),
(5, 'Net 90'),
(6, 'End of month')
;

-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_product`
--

CREATE TABLE `ps_bms_procurement_product` (
  `id_bms_procurement_product` int(10) UNSIGNED NOT NULL,
  `prestashop_id` int(10) UNSIGNED NOT NULL,
  `prestashop_attribute_id` int(10) UNSIGNED NOT NULL,
  `warning_stock_level` int(11) DEFAULT NULL,
  `use_default_warning_stock_level` tinyint(1) NOT NULL DEFAULT '1',
  `ideal_stock_level` int(11) DEFAULT NULL,
  `use_default_ideal_stock_level`tinyint(1) NOT NULL DEFAULT '1',
  `qty_in_po` int(11) DEFAULT NULL,
  `next_po_eta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_purchase_order`
--

CREATE TABLE `ps_bms_procurement_purchase_order` (
  `id_bms_procurement_purchase_order` int(10) UNSIGNED NOT NULL,
  `date_add` datetime DEFAULT NULL,
  `date_upd` datetime DEFAULT NULL,
  `reference` varchar(50) NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `eta` date NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `currency_id` int(10) UNSIGNED NOT NULL,
  `change_rate` decimal(10,4) NOT NULL DEFAULT '1.00',
  `shipping_cost` decimal(10,2) NOT NULL,
  `shipping_cost_base` decimal(10,2) NOT NULL,
  `shipping_tax_rate` decimal(10,2) NOT NULL,
  `additional_cost` decimal(10,2) NOT NULL,
  `additional_cost_base` decimal(10,2) NOT NULL,
  `additional_tax_rate` decimal(10,2) NOT NULL,
  `total` decimal(10,4) NOT NULL,
  `total_base` decimal(10,4) NOT NULL,
  `products_count` int(11) NOT NULL,
  `reception_progress` int(11) NOT NULL,
  `comments_private` text NOT NULL,
  `comments_public` text NOT NULL,
  `shipping_tracking` varchar(50) NOT NULL,
  `shipping_carrier` varchar(50) NOT NULL,
  `supplier_po_reference` varchar(50) NOT NULL,
  `supplier_invoice_reference` varchar(50) NOT NULL,
  `supplier_invoice_date` date DEFAULT NULL,
  `supplier_invoice_due_date` date DEFAULT NULL,
  `supplier_payment_terms_id` int(10) UNSIGNED NOT NULL,
  `supplier_payment_date` date DEFAULT NULL,
  `supplier_payment_method_id` int(10) UNSIGNED NOT NULL,
  `supplier_payment_status_id` int(10) UNSIGNED NOT NULL,
  `warehouse_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `taxe_rate` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Structure de la table `ps_bms_procurement_purchase_order_payment_status`
--

CREATE TABLE `ps_bms_procurement_purchase_order_payment_status` (
  `id_bms_procurement_purchase_order_payment_status` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ps_bms_procurement_purchase_order_payment_status`
--

INSERT INTO `ps_bms_procurement_purchase_order_payment_status` (`id_bms_procurement_purchase_order_payment_status`, `name`) VALUES
(1, 'Pending'),
(2, 'Partially paid'),
(3, 'Paid');

-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_purchase_order_product`
--

CREATE TABLE `ps_bms_procurement_purchase_order_product` (
  `id_bms_procurement_purchase_order_product` int(10) UNSIGNED NOT NULL,
  `po_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_attribute_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `supplier_sku` varchar(50) NOT NULL,
  `qty_ordered` int(11) NOT NULL,
  `qty_received` int(11) NOT NULL,
  `qty_expected` int(11) NOT NULL,
  `price` decimal(10,4) NOT NULL,
  `price_base` decimal(10,4) NOT NULL,
  `tax_rate` decimal(10,2) NOT NULL,
  `extended_cost` decimal(10,4) NOT NULL,
  `extended_cost_base` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_purchase_order_reception`
--

CREATE TABLE `ps_bms_procurement_purchase_order_reception` (
  `id_bms_procurement_purchase_order_reception` int(10) UNSIGNED NOT NULL,
  `po_id` int(10) UNSIGNED NOT NULL,
  `date_add` datetime DEFAULT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `products_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_purchase_order_reception_product`
--

CREATE TABLE `ps_bms_procurement_purchase_order_reception_product` (
  `id_bms_procurement_purchase_order_reception_product` int(10) UNSIGNED NOT NULL,
  `reception_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_attribute_id` int(10) UNSIGNED NOT NULL,
  `sku` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_purchase_order_status`
--

CREATE TABLE `ps_bms_procurement_purchase_order_status` (
  `id_bms_procurement_purchase_order_status` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `expected` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ps_bms_procurement_purchase_order_status`
--

INSERT INTO `ps_bms_procurement_purchase_order_status` (`id_bms_procurement_purchase_order_status`, `name`, expected) VALUES
(1, 'Draft', 0),
(2, 'Pending internal approval', 0),
(3, 'Pending payment', 0),
(4, 'Pending supplier confirmation', 0),
(5, 'Expected', 1),
(6, 'Partially received', 1),
(7, 'Received', 0),
(8, 'Finished', 0),
(9, 'Canceled', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_supplier`
--

CREATE TABLE `ps_bms_procurement_supplier` (
  `id_bms_procurement_supplier` int(10) UNSIGNED NOT NULL,
  `minimum_of_order` int(11) NOT NULL,
  `carriage_free_amount` int(11) NOT NULL,
  `procurement_currency_id` int(10) UNSIGNED NOT NULL,
  `default_currency_change_rate` decimal(6,4) NOT NULL,
  `lead_time` int(11) NOT NULL,
  `payment_terms_id` int(10) UNSIGNED NOT NULL,
  `payment_method_id` int(10) UNSIGNED NOT NULL,
  `paypal_account` varchar(200) NOT NULL,
  `bank_details` varchar(400) NOT NULL,
  `default_tax_class` decimal(4,2) NOT NULL,
  `export_file_name` varchar(200) NULL,
  `export_header` TEXT NULL,
  `export_order_row` TEXT NULL,
  `export_footer` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Structure de la table `ps_bms_procurement_supplier_contact`
--

CREATE TABLE `ps_bms_procurement_supplier_contact` (
  `id_bms_procurement_supplier_contact` int(10) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `type` enum('Sales','Aftersales','Accounting','') NOT NULL,
  `contact` varchar(256) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Index pour les tables exportées
--

--
-- Index pour la table `ps_bms_procurement_currency`
--
ALTER TABLE `ps_bms_procurement_currency`
  ADD PRIMARY KEY (`id_bms_procurement_currency`);

--
-- Index pour la table `ps_bms_procurement_payment_method`
--
ALTER TABLE `ps_bms_procurement_payment_method`
  ADD PRIMARY KEY (`id_bms_procurement_payment_method`);

--
-- Index pour la table `ps_bms_procurement_payment_status`
--
ALTER TABLE `ps_bms_procurement_payment_status`
  ADD PRIMARY KEY (`id_bms_procurement_payment_status`);

--
-- Index pour la table `ps_bms_procurement_payment_term`
--
ALTER TABLE `ps_bms_procurement_payment_term`
  ADD PRIMARY KEY (`id_bms_procurement_payment_term`);

--
-- Index pour la table `ps_bms_procurement_product`
--
ALTER TABLE `ps_bms_procurement_product`
  ADD PRIMARY KEY (`id_bms_procurement_product`),
  ADD KEY `prestashop_id` (`prestashop_id`),
  ADD KEY `prestashop_attribute_id` (`prestashop_attribute_id`);

--
-- Index pour la table `ps_bms_procurement_purchase_order`
--
ALTER TABLE `ps_bms_procurement_purchase_order`
  ADD PRIMARY KEY (`id_bms_procurement_purchase_order`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `status` (`status_id`),
  ADD KEY `supplier_payment_status_id` (`supplier_payment_status_id`),
  ADD KEY `supplier_payment_method_id` (`supplier_payment_method_id`),
  ADD KEY `supplier_payment_terms_id` (`supplier_payment_terms_id`),
  ADD KEY `currency_id` (`currency_id`);

--
-- Index pour la table `ps_bms_procurement_purchase_order_payment_status`
--
ALTER TABLE `ps_bms_procurement_purchase_order_payment_status`
  ADD PRIMARY KEY (`id_bms_procurement_purchase_order_payment_status`);

--
-- Index pour la table `ps_bms_procurement_purchase_order_product`
--
ALTER TABLE `ps_bms_procurement_purchase_order_product`
  ADD PRIMARY KEY (`id_bms_procurement_purchase_order_product`),
  ADD UNIQUE `po_id` (`po_id`,`product_id`,`product_attribute_id`);


--
-- Index pour la table `ps_bms_procurement_purchase_order_reception`
--

ALTER TABLE `ps_bms_procurement_purchase_order_reception`
  ADD PRIMARY KEY (`id_bms_procurement_purchase_order_reception`),
  ADD KEY `po_id` (`po_id`);

--
-- Index pour la table `ps_bms_procurement_purchase_order_reception_product`
--

ALTER TABLE `ps_bms_procurement_purchase_order_reception_product` 
  ADD PRIMARY KEY (`id_bms_procurement_purchase_order_reception_product`),
  ADD UNIQUE( `reception_id`, `product_id`, `product_attribute_id`);


--
-- Index pour la table `ps_bms_procurement_purchase_order_status`
--
ALTER TABLE `ps_bms_procurement_purchase_order_status`
  ADD PRIMARY KEY (`id_bms_procurement_purchase_order_status`);

--
-- Index pour la table `ps_bms_procurement_supplier`
--
ALTER TABLE `ps_bms_procurement_supplier`
  ADD PRIMARY KEY (`id_bms_procurement_supplier`),
  ADD KEY `payment_terms_id` (`payment_terms_id`),
  ADD KEY `payment_method_id` (`payment_method_id`),
  ADD KEY `bms_procurement_currency_id` (`procurement_currency_id`);

--
-- Index pour la table `ps_bms_procurement_supplier_contact`
--
ALTER TABLE `ps_bms_procurement_supplier_contact`
  ADD PRIMARY KEY (`id_bms_procurement_supplier_contact`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_currency`
--
ALTER TABLE `ps_bms_procurement_currency`
  MODIFY `id_bms_procurement_currency` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_payment_method`
--
ALTER TABLE `ps_bms_procurement_payment_method`
  MODIFY `id_bms_procurement_payment_method` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_payment_status`
--
ALTER TABLE `ps_bms_procurement_payment_status`
  MODIFY `id_bms_procurement_payment_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_payment_term`
--
ALTER TABLE `ps_bms_procurement_payment_term`
  MODIFY `id_bms_procurement_payment_term` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_product`
--
ALTER TABLE `ps_bms_procurement_product`
  MODIFY `id_bms_procurement_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_purchase_order`
--
ALTER TABLE `ps_bms_procurement_purchase_order`
  MODIFY `id_bms_procurement_purchase_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_purchase_order_payment_status`
--
ALTER TABLE `ps_bms_procurement_purchase_order_payment_status`
  MODIFY `id_bms_procurement_purchase_order_payment_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_purchase_order_product`
--
ALTER TABLE `ps_bms_procurement_purchase_order_product`
  MODIFY `id_bms_procurement_purchase_order_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_purchase_order_reception`
--
ALTER TABLE `ps_bms_procurement_purchase_order_reception`
  MODIFY `id_bms_procurement_purchase_order_reception` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_purchase_order_reception_product`
--
ALTER TABLE `ps_bms_procurement_purchase_order_reception_product`
  MODIFY `id_bms_procurement_purchase_order_reception_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_purchase_order_status`
--
ALTER TABLE `ps_bms_procurement_purchase_order_status`
  MODIFY `id_bms_procurement_purchase_order_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `ps_bms_procurement_supplier_contact`
--
ALTER TABLE `ps_bms_procurement_supplier_contact`
  MODIFY `id_bms_procurement_supplier_contact` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `ps_bms_procurement_date` (`jour` date NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `ps_bms_procurement_date`
  ADD PRIMARY KEY (`jour`);

CREATE TABLE IF NOT EXISTS `ps_bms_procurement_storage`
(
    `id_bms_procurement_storage` int(10) UNSIGNED NOT NULL,
    `employee_id` int(10) UNSIGNED NOT NULL,
    `data` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `ps_bms_procurement_storage`
  ADD PRIMARY KEY (`id_bms_procurement_storage`);

ALTER TABLE `ps_bms_procurement_storage`
  MODIFY `id_bms_procurement_storage` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
