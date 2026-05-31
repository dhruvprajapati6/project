# <div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&height=300&color=0:00C9FF,20:92FE9D,40:6A5ACD,60:FF6FD8,80:FF512F,100:F9D423&text=PHP%20Registration%20System&fontSize=48&fontAlignY=40&animation=fadeIn&fontColor=ffffff"/>

### 🚀 Modern • Secure • Responsive • Database Powered

<img src="https://readme-typing-svg.demolab.com?font=Poppins&weight=600&size=24&duration=3000&pause=1000&center=true&vCenter=true&width=700&lines=Secure+PHP+Registration+System;User+Authentication+Project;Form+Validation+with+MySQL;Built+Using+PHP+%2B+MySQL+%2B+HTML+%2B+CSS" />

<br>

<img src="https://img.shields.io/github/stars/YOUR_USERNAME/YOUR_REPO?style=for-the-badge"/>
<img src="https://img.shields.io/github/forks/YOUR_USERNAME/YOUR_REPO?style=for-the-badge"/>
<img src="https://img.shields.io/github/license/YOUR_USERNAME/YOUR_REPO?style=for-the-badge"/>
<img src="https://img.shields.io/github/repo-size/YOUR_USERNAME/YOUR_REPO?style=for-the-badge"/>

</div>

---

# 🌟 Project Overview

This project is a **Professional User Registration System** developed using **PHP & MySQL** with powerful server-side validation and database integration.

It allows users to register securely while validating all important fields before storing information in the database.

Perfect for learning:

✔ PHP Forms

✔ MySQL Connectivity

✔ Authentication Concepts

✔ Input Validation

✔ Web Development Fundamentals

✔ Backend Development

---

# ✨ Premium Features

<table>
<tr>
<td width="50%">

### 👤 User Management

* New User Registration
* Database Storage
* Clean Form Interface
* Easy Integration

</td>
<td width="50%">

### 🛡 Security Features

* Email Validation
* Duplicate Email Check
* Password Verification
* Contact Validation

</td>
</tr>
<tr>
<td>

### 📧 Email System

* Email Format Validation
* Unique Email Checking
* Prevent Duplicate Accounts

</td>
<td>

### ⚡ Performance

* Lightweight
* Fast Processing
* Easy Deployment
* Beginner Friendly

</td>
</tr>
</table>

---

# 🧠 Validation Logic

### Name Validation

```php
preg_match("/^[a-zA-Z]*$/",$name);
```

✔ Allows only alphabets

✔ Prevents invalid names

---

### Email Validation

```php
filter_var($email,FILTER_VALIDATE_EMAIL);
```

✔ Valid email format

✔ Email verification before insertion

---

### Password Validation

```php
strlen($password) > 4;
```

✔ Prevents weak passwords

✔ Mandatory password length

---

### Contact Validation

```php
preg_match("/^[0-9]{10}$/",$contact);
```

✔ Only numbers allowed

✔ Exactly 10 digits required

---

# 🛠 Tech Stack

<div align="center">

| Technology | Usage         |
| ---------- | ------------- |
| PHP        | Backend Logic |
| MySQL      | Database      |
| HTML5      | Structure     |
| CSS3       | Styling       |
| XAMPP      | Local Server  |
| Regex      | Validation    |

</div>

---

# 📂 Project Structure

```bash
📦 PHP-Registration-System
│
├── 📄 pr30reg.php
├── 📄 pr25.php
├── 📄 login.php
├── 🎨 mystyle1.css
├── 📘 README.md
│
└── 🗄 Database
```

---

# ⚙ Installation Guide

## 1️⃣ Clone Repository

```bash
git clone https://github.com/YOUR_USERNAME/PHP-Registration-System.git
```

## 2️⃣ Move Project

```bash
xampp/htdocs/
```

---

## 3️⃣ Start Services

```bash
Apache
MySQL
```

Using XAMPP Control Panel.

---

## 4️⃣ Create Database

```sql
CREATE DATABASE registration_db;
```

---

## 5️⃣ Create Table

```sql
CREATE TABLE cust_info(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100) UNIQUE,
password VARCHAR(255),
contact BIGINT
);
```

---

# 🔥 Workflow

```text
User Input
     │
     ▼
Validation
     │
     ▼
Duplicate Email Check
     │
     ▼
Database Storage
     │
     ▼
Registration Success
```

---

# 🚀 Future Enhancements

### Authentication

* Login System
* Logout System
* Session Handling

### Security

* Password Hashing
* SQL Injection Protection
* CSRF Protection

### User Features

* Profile Management
* Forgot Password
* Email Verification

### UI Improvements

* Bootstrap UI
* Dark Mode
* Mobile Responsive Design

---

# 📊 Project Highlights

<div align="center">

| Feature             | Status |
| ------------------- | ------ |
| Registration System | ✅      |
| Email Validation    | ✅      |
| Password Validation | ✅      |
| Contact Validation  | ✅      |
| MySQL Database      | ✅      |
| Login Module        | 🔄     |
| Password Hashing    | 🔄     |
| Email Verification  | 🔄     |

</div>

---

# 🎯 Learning Outcomes

After building this project, you will understand:

✔ PHP Fundamentals

✔ Database Connectivity

✔ Form Handling

✔ CRUD Basics

✔ Authentication Workflow

✔ Input Validation

✔ Web Security Basics

---

# 👨‍💻 Developer

<div align="center">

## Dhruv Prajapati

🎓 BCA Student

💻 PHP Developer

🐍 Python Learner

🔐 Cyber Security Enthusiast

🚀 Building Projects & Learning Daily

</div>

---

# ⭐ Support The Project

If you like this project:

```text
⭐ Star the Repository
🍴 Fork the Repository
📢 Share with Friends
💙 Follow for More Projects
```

---

<div align="center">

## 💖 Thank You For Visiting

<img src="https://capsule-render.vercel.app/api?type=waving&height=120&section=footer&color=0:00C9FF,25:92FE9D,50:6A5ACD,75:FF6FD8,100:FF512F"/>

### 🚀 Happy Coding 🚀

</div>
