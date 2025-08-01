# SpaceWebApp

## Overview

**SpaceWebApp** is a web-based platform dedicated to space exploration, news, and community engagement. The application allows users to register, log in, and interact with space-related content. Admin users can manage user accounts, including adding, updating, and deleting users. The site features news articles, information about the organization, and contact details.

## Purpose

The purpose of SpaceWebApp is to provide a visually engaging and interactive website for space enthusiasts. It serves as a hub for the latest space news, organizational information, and user management for both regular users and administrators.

## Features

- **User Registration & Login:** Users can sign up, log in, and log out securely.
- **Admin Panel:** Admins can view all users, add new users, update user information, and delete users.
- **News Section:** Displays curated space news articles and updates.
- **About & Contact Pages:** Information about the organization and ways to get in touch.
- **Responsive Design:** Optimized for desktop and mobile devices.
- **Profile Images:** Users can upload a profile image during registration.

## Technologies Used

- **Frontend:**
  - HTML5
  - CSS3 ([css/style.css](css/style.css))
  - JavaScript ([js/index.js](js/index.js))

- **Backend:**
  - PHP (all `.php` files, e.g., [index.php](index.php), [admin.php](admin.php), [registerAction.php](registerAction.php))
  - MySQL (database connection via [connect.php](connect.php))

- **Database:**
  - MySQL database named `webproject`
  - Table: `myUsers` (fields: Id, FullName, UserName, Email, Password, Role, File)

## File Structure

- **Root Directory**
  - `.gitignore`
  - `index.php` - Homepage
  - `about.php` - About page
  - `news.php` - News articles
  - `contact.php` - Contact information
  - `login.php` - Login form
  - `registration.php` - Registration form
  - `registerAction.php` - Handles registration logic
  - `register-successful.php` - Registration success page
  - `signinAction.php` - Handles login logic
  - `logout.php` - Handles logout
  - `admin.php` - Admin dashboard
  - `addUser.php` - Add user form (admin)
  - `update_user.php` - Update user form (admin)
  - `updateuserAction.php` - Handles user update logic
  - `deleteuserAction.php` - Handles user deletion
  - `connect.php` - Database connection

- **css/**
  - `style.css` - Main stylesheet

- **images/**
  - Various images and videos used for content and user profiles

- **js/**
  - `index.js` - JavaScript for responsive navigation

## Setup Instructions

1. **Clone the Repository**
   ```sh
   git clone <your-repo-url>
   ```

2. **Database Setup**
   - Create a MySQL database named `webproject`.
   - Create a table `myUsers` with the following fields:
     - `Id` (INT, PRIMARY KEY, AUTO_INCREMENT)
     - `FullName` (VARCHAR)
     - `UserName` (VARCHAR)
     - `Email` (VARCHAR)
     - `Password` (VARCHAR)
     - `Role` (VARCHAR: 'admin' or 'user')
     - `File` (VARCHAR: image filename)

3. **Configure Database Connection**
   - Edit [connect.php](connect.php) if your database credentials differ.

4. **Web Server**
   - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
   - Ensure PHP and MySQL are running.

5. **Images Folder**
   - Ensure the `images/` folder is writable for profile image uploads.

## Usage

- Visit `index.php` for the homepage.
- Register as a new user via `registration.php`.
- Log in via `login.php`.
- Admin users can access `admin.php` to manage users.
- Explore news, about, and contact sections.

## Security Notes

- Passwords are hashed using MD5 (for demonstration purposes). For production, use stronger hashing (e.g., bcrypt).
- Basic input validation is implemented; further security hardening is recommended.

## Contributing

Feel free to fork the repository and submit pull requests for improvements or new features.

## License

This project is for educational purposes. Please contact the author for commercial use.

---

For any questions or support, see the [contact.php](contact.php)
