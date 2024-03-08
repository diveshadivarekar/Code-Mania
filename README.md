# Online Quiz

This software has been custom-developed for the CODE MANIA competition/event held at JSPM's RSCOE polytechnic by the Computer Engineering Department.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
  - [Quizzes](#quizzes)
  - [Problem Statements](#problem-statements)
- [Contributing](#contributing)
- [License](#license)

## Introduction

Welcome to the Online Quiz system! This software was specifically designed for the CODE MANIA competition/event conducted by the Computer Engineering Department at JSPM's RSCOE polytechnic. The system provides a platform for conducting online quizzes and supporting problem statements as a second round, facilitating a seamless experience for both participants and organizers.

## Features

- User-friendly interface
- Support for multiple-choice questions
- Real-time scoring and leaderboard
- Secure login and registration system
- Customizable quiz settings
- Detailed analytics for organizers
- Dedicated support for problem statements as a second round

## Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- Web server (e.g., Apache, Nginx)
- PHP 5.6, 7.x, or 8.x
- MySQL or other compatible database

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/diveshadivarekar/online-quiz.git
   ```

## Configuration

1. **Configure the database settings in `config.php`.**

   Update the `config.php` file with your database connection details.

2. **Import the database schema from `database.sql`.**

   Use the provided `database.sql` file to create the necessary database tables. You can import it using a database management tool like MySQL Workbench or through the command line.

   ```bash
   mysql -u username -p database_name < database.sql
   ```

## Set Up Your Web Server

1. **Configure your web server (e.g., Apache, Nginx) to serve the project from the appropriate directory.**

   Make sure your web server is set up to recognize and serve PHP files. Adjust the server configuration to point to the root directory of your project.

2. **Ensure that PHP is enabled and properly configured.**

   Verify that PHP is installed on your server and configured correctly. Confirm that the necessary extensions and settings are in place.

## Accessing the Application

1. **Open your web browser and navigate to the URL where the project is hosted.**

   Once your web server is configured and running, open your preferred web browser and enter the URL where the project is hosted.

## Usage

### Quizzes

1. Participants can register/login to the platform.
2. Organizers can create quizzes, set questions, and define quiz settings.
3. Participants can take quizzes.

### Problem Statements

1. Organizers can set up problem statements for the second round.
2. Participants can submit their solutions.
3. Organizers can review submissions and provide feedback.

## Contributing

We welcome contributions!

## License

This project is licensed under the MIT License.
