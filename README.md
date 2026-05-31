# <div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&height=300&color=0:00C9FF,20:92FE9D,40:6A5ACD,60:FF6FD8,80:FF512F,100:F9D423&text=PHP%20Registration%20System&fontSize=50&fontAlignY=40&animation=fadeIn&fontColor=ffffff"/>

### 🔐 Modern User Registration System Using PHP & MySQL

<img src="https://readme-typing-svg.demolab.com?font=Poppins&weight=700&size=24&duration=3000&pause=1000&center=true&vCenter=true&width=750&lines=Secure+Registration+System;PHP+%2B+MySQL+Project;Server-Side+Validation;Beginner+Friendly+Backend+Project;Built+with+Clean+Code+Practices"/>

<br>

<img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php"/>
<img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql"/>
<img src="https://img.shields.io/badge/HTML5-Frontend-E34F26?style=for-the-badge&logo=html5"/>
<img src="https://img.shields.io/badge/CSS3-Styling-1572B6?style=for-the-badge&logo=css3"/>

</div>

---

# 🌟 About The Project

A secure and beginner-friendly **PHP Registration System** that allows users to register using their personal details while performing powerful server-side validations before storing data in the database.

This project demonstrates real-world backend concepts such as:

✨ Form Handling

✨ Input Validation

✨ Database Connectivity

✨ Duplicate Email Checking

✨ User Authentication Fundamentals

✨ Secure Data Processing

---

# 🎯 Key Features

### 👤 User Registration

* Register new users easily
* Clean registration interface
* Simple and responsive design

### 📧 Email Validation

* Valid email format checking
* Duplicate email prevention
* Database verification

### 🔒 Password Verification

* Password length validation
* Empty password protection
* Secure input processing

### 📱 Contact Validation

* 10-digit mobile number validation
* Numeric verification
* Invalid contact rejection

### 🛡 Server-Side Validation

* Name validation using Regular Expressions
* Email validation using PHP filters
* Input sanitization using trim()

---

# ⚡ System Workflow

```text id="i3bgjm"
User Opens Registration Form
              │
              ▼
        Enter Details
              │
              ▼
      Server Validation
              │
              ▼
     Email Duplication Check
              │
              ▼
       Database Storage
              │
              ▼
      Registration Success
```

---

# 🧠 Validation Methods

## Name Validation

```php id="1hkmbl"
preg_match("/^[a-zA-Z]*$/",$name);
```

✔ Only alphabets allowed

✔ Invalid characters blocked

---

## Email Validation

```php id="i5ndq5"
filter_var($email,FILTER_VALIDATE_EMAIL);
```

✔ Proper email format required

✔ Invalid emails rejected

---

## Password Validation

```php id="6mxpfr"
strlen($password) > 4;
```

✔ Minimum length required

✔ Empty passwords prevented

---

## Contact Validation

```php id="c4fifm"
preg_match("/^[0-9]{10}$/",$contact);
```

✔ Only digits accepted

✔ Exactly 10 digits required

---

# 🛠 Tech Stack

<div align="center">

| Technology | Purpose           |
| ---------- | ----------------- |
| PHP        | Backend Logic     |
| MySQL      | Database Storage  |
| HTML5      | Structure         |
| CSS3       | Styling           |
| Regex      | Validation        |
| XAMPP      | Local Development |

</div>

---

# 📂 Project Structure

```bash id="gggpg7"
📦 PHP-Registration-System
│
├── 📄 pr30reg.php
│     Registration Form
│
├── 📄 pr25.php
│     Database Connection
│
├── 📄 login.php
│     Login Page
│
├── 🎨 mystyle1.css
│     Styling File
│
└── 📘 README.md
```

---

# 💡 Why This Project?

This project is ideal for students and beginners who want to learn:

* PHP Forms
* MySQL Integration
* Backend Development
* Input Validation
* Authentication Concepts
* Database Operations

---

# 🔥 Future Improvements

### Security

* Password Hashing
* SQL Injection Protection
* Session Security
* CSRF Protection

### Authentication

* Login System
* Logout System
* Remember Me Feature

### User Features

* Forgot Password
* Email Verification
* User Dashboard
* Profile Management

### UI Enhancements

* Bootstrap Integration
* Mobile Responsive Layout
* Dark Mode Support
* Modern User Interface

---

# 🎓 Learning Outcomes

After completing this project, you will gain knowledge of:

✅ PHP Programming

✅ Form Handling

✅ MySQL Database Operations

✅ Input Validation

✅ Regular Expressions

✅ Backend Development Fundamentals

✅ Authentication Workflow

---

# 👨‍💻 Developer

<div align="center">

<img src="https://github.com/dhruvprajapati6.png" width="140"/>

## Dhruv Prajapati

🎓 BCA Student

💻 PHP Developer

🐍 Python Learner

🔐 Cyber Security Enthusiast

🚀 Passionate About Building Real-World Projects

### Connect With Me

GitHub: https://github.com/dhruvprajapati6

</div>

---

# ⭐ Project Status

```text id="f4skpj"
Status : Active ✅

Version : 1.0 🚀

Type : Educational Project 🎓

Difficulty : Beginner to Intermediate 📚
```

---

<div align="center">

## 💙 Thank You For Visiting

### If you found this project helpful, consider giving it a ⭐

<img src="https://capsule-render.vercel.app/api?type=waving&height=150&section=footer&color=0:00C9FF,20:92FE9D,40:6A5ACD,60:FF6FD8,80:FF512F,100:F9D423"/>

### 🚀 Happy Coding & Keep Learning 🚀

</div>
