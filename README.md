# Basic PHP Log In

## Project Overview

Basic PHP Log In is a basic web application built with PHP, MySQL, and CSS. The main goal of this project was to create a login page that allows users to register, log in, and update their personal information. It was initially conceived as a learning project to get hands-on experience with PHP and MySQL. The original plan was to expand the project into a full-fledged personal finance tracker, but due to time constraints, the project was not further developed beyond its current state.

## Features

- **User Authentication**: Users can sign up, log in, and log out. User sessions are managed with PHP sessions.
- **Profile Management**: Users can update their profile information.
- **Basic Finance Tracking**: The application was designed to eventually track bank trends, income, spending trends, and net change from banks like PNC and Discover.
- **Job Information**: Users can view and update job-related information.

## Technologies Used

- **PHP**: Server-side scripting language used to handle the backend logic.
- **MySQL**: Database management system used to store user information securely.
- **CSS**: Used for styling the user interface.
- **HTML**: Markup language for structuring the web pages.

## File Structure

- **php/config.php**: Contains database configuration and connection settings.
- **home.php**: Main dashboard page where users can view their bank trends and personal information.
- **register.php**: User registration page.
- **edit.php**: Page where users can edit their profile information.
- **job.php**: Page dedicated to displaying job-related information.
- **style/style.css**: Contains the CSS for styling the application.

## Future Plans (Not Implemented)

- **Personal Finance Tracker**: The original intention was to expand the application to track and analyze personal finance trends, including spending, income, and net changes across multiple banks.
- **Bank Integration**: Integration with bank APIs to automatically pull in transaction data and provide insights to users.
- **Detailed Analytics**: Display detailed financial analytics, including graphs and charts.

## Installation

To run this project locally:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/BasicPHPLogIn.git
   ```

2. **Navigate to the project directory**:
   ```bash
   cd BasicPHPLogIn
   ```

3. **Set up the database**:
   - Create a MySQL database.
   - Import the SQL file provided in the repository to set up the required tables.
   - Update `php/config.php` with your database credentials.

4. **Run the application**:
   - Use a local server like XAMPP or WAMP to run the PHP files.
   - Open your browser and navigate to `http://localhost/bankbuddy`.

## Known Issues

- **Incomplete Features**: The application lacks the complete functionality of a personal finance tracker.
- **Security**: The project was created for learning purposes and may not follow best practices for security.

## License

This project is open-source and available to use and modify it as needed.

## Acknowledgments

This project was created as a learning exercise to get hands-on experience with PHP and MySQL. It is a starting point for anyone looking to develop a simple web application with user log in features.

---

Feel free to modify the README according to any additional details or changes in your project.
