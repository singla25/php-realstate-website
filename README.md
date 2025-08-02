# Real Estate Listing Website — PHP & MySQL Project

A full-stack web application for property listings, built using **PHP**, **MySQL**, **Bootstrap**, **jQuery**, and **AJAX**, with a clean role-based access control mechanism integrated directly into the user database table.

---

## 🚀 Overview

This project is a real estate listing platform where users can browse properties and admins (or agents) can manage property listings. It implements a role-based access system using a single user table without the complexity of a separate admin dashboard.

---

## ✨ Key Features

* **Full-stack real estate listing platform** using PHP and MySQL
* **User Registration & Login system** with session-based authentication
* **Role-based access control**:

  * Admins can create, update, and manage property listings
  * Regular users can only view listed properties
* **Single User Table Approach**:

  * Role management handled within the users database table
  * No separate admin panel — admin privileges determined dynamically at login
* **Responsive UI** using Bootstrap 5 ensuring a seamless experience across devices
* **Dynamic content updates** using AJAX & jQuery (property search, filters, etc.)
* **Version-controlled** using GitHub

---

## 🛠️ Tools & Technologies Used

* **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript, jQuery, AJAX
* **Backend:** PHP (Core PHP, Procedural PHP)
* **Database:** MySQL
* **Version Control:** Git, GitHub
* **Development Environment:** XAMPP (Apache & MySQL Server)
* **Database Management:** phpMyAdmin

---

## 🧻 Installation & Setup Instructions

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/singla25/php-realstate-website.git
   ```
2. **Setup Localhost:**

   * Use **XAMPP** or **LAMP** to run a local Apache and MySQL server.
3. **Database Configuration:**

   * Create a new database, e.g., `realestate_db` in **phpMyAdmin**.
   * Import the provided `schema.sql` (if available).
4. **Edit Database Credentials:**

   * Configure DB credentials in `config.php`:

     ```php
     $dbHost = 'localhost';
     $dbUsername = 'root';
     $dbPassword = '';
     $dbName = 'realestate_db';
     ```
5. **Run the Application:**

   * Navigate to `http://localhost/php-realstate-website/` in your browser.

---

## ✅ Future Enhancements

* Add property image uploads and galleries.
* Implement search filters by price, location, and property type.
* Add email notifications for new listings.
* Integrate a contact form for property inquiries.

---

## 📄 License

This project is developed solely for educational purposes and is not intended for commercial use.

---

## 👤 About the Author

Developed by **Sahil Singla** — a passionate full-stack PHP developer working on building real-world applications using open-source technologies. Connect on [LinkedIn](https://www.linkedin.com/in/ssingla25).
