-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2023, 11:31:17
-- Sunucu sürümü: 10.1.29-MariaDB
-- PHP Sürümü: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `lib`
--

-- --------------------------------------------------------

CREATE TABLE posts
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    title      VARCHAR(255) NOT NULL,
    content    TEXT         NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    user_id    INT          NOT NULL
);

CREATE TABLE comments
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    content    TEXT NOT NULL,
    post_id    INT  NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts (id) ON DELETE CASCADE
);



--
-- Tablo için tablo yapısı `activity`
--

CREATE TABLE `activity`
(
    `id`          bigint(20) UNSIGNED                     NOT NULL,
    `user_id`     bigint(20)                              NOT NULL,
    `lat`         varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `lot`         varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `date`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `title`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `image_url`   varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `status`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at`  date DEFAULT NULL,
    `updated_at`  date DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `activity_registrations`
--

CREATE TABLE `activity_registrations`
(
    `id`          bigint(20) AUTO_INCREMENT,
    PRIMARY KEY (`id`),
    `user_id`     bigint(20) NOT NULL,
    `activity_id` bigint(20) NOT NULL,
    `created_at`  timestamp  NULL DEFAULT NULL,
    `updated_at`  timestamp  NULL DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--



-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users`
(
    `id`         bigint(20) UNSIGNED auto_increment primary key NOT NULL,
    `first_name` varchar(999) COLLATE utf8_turkish_ci           NOT NULL,
    `last_name`  varchar(999) COLLATE utf8_turkish_ci           NOT NULL,
    `phone`      varchar(999) COLLATE utf8_turkish_ci           NOT NULL,
    `status`     varchar(999) COLLATE utf8_turkish_ci           NOT NULL,
    `email`      varchar(999) COLLATE utf8_turkish_ci           NOT NULL,
    `password`   varchar(999) COLLATE utf8_turkish_ci           NOT NULL,
    `created_at` date DEFAULT NULL,
    `updated_at` date DEFAULT NULL,
    `remember_token` varchar(999) COLLATE utf8_turkish_ci default NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `activity`
--
ALTER TABLE `activity`
    ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `activity_registrations`
--
ALTER TABLE `activity_registrations`
    ADD PRIMARY KEY (`id`),
    ADD KEY `activity_registrations_activity_id_index` (`activity_id`),
    ADD KEY `activity_registrations_user_id_index` (`user_id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
    ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `activity`
--
ALTER TABLE `activity`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `activity_registrations`
--
ALTER TABLE `activity_registrations`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
