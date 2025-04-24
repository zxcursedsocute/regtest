<?php
require_once 'db/db_connection.php';

/* $conn->exec("CREATE TABLE users (
                    `id` int NOT NULL,
                    `login` varchar(50) NOT NULL,
                    `password_hash` varchar(255) NOT NULL,
                    `email` varchar(100) NOT NULL,
                    `role` enum('user','admin') DEFAULT NULL,
                    `is_blocked` tinyint(1) DEFAULT '0',
                    `created_at` datetime DEFAULT NULL)"); */

/* $conn->exec("CREATE TABLE `messages` (
  `id` int NOT NULL,
  `sender_id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `message_text` text,
  `is_deleted` tinyint(1) DEFAULT '0',
  `sent_at` datetime DEFAULT NULL)"); */

  $conn->exec("CREATE TABLE `reports` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `target_type` enum('message','user') DEFAULT NULL,
  `target_id` int DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `description` text,
  `status` enum('new','in_progress','resolved') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
)");
?>