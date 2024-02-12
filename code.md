CREATE TABLE `Customers` (
  `customers_id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `CustomersFeedback` (
  `feedback_id` int NOT NULL,
  `customers_id` int NOT NULL,
  `feedbackMessage` varchar(400) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `ResponseMessage` (
  `response_id` int NOT NULL,
  `feedback_id` int NOT NULL,
  `response_message` varchar(100) NOT NULL,
  `timestamp` date NOT NULL,
  `staff_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;