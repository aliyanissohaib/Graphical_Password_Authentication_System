# 🔐 Dual Authentication System

A secure authentication system that combines traditional text passwords with graphical password authentication for enhanced security. Built with modern web technologies for robust user verification.

## 📖 Description

This dual authentication system provides an extra layer of security by requiring users to authenticate using both a traditional text password and a graphical password system. The graphical password component uses image-based authentication where users select specific points or patterns on images, making it more resistant to shoulder surfing and keylogger attacks.

## ✨ Features
       
### 🔑 **Dual Authentication**       
- **Text Password**: Traditional alphanumeric password system    
- **Graphical Password**: Click-based image authentication
- **Two-Factor Verification**: Both methods required for access

### 🛡️ **Security Features**
- **Password Hashing**: Secure password storage using PHP hashing
- **Session Management**: Secure user session handling    
- **Brute Force Protection**: Login attempt limitations
- **SQL Injection Prevention**: Parameterized queries
- **XSS Protection**: Input sanitization and validation

### 🎨 **User Experience**
- **Responsive Design**: Mobile and desktop compatible
- **Interactive UI**: Smooth animations and transitions
- **Visual Feedback**: Clear success/error indicators
- **Progress Indicators**: Step-by-step authentication flow

### 📊 **Administrative Features**
- **User Management**: Admin panel for user accounts
- **Login Analytics**: Track authentication attempts
- **Security Logs**: Monitor suspicious activities
- **Password Reset**: Secure password recovery system

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 7.4+
- **Database**: MySQL/MariaDB
- **Security**: bcrypt password hashing, CSRF protection
- **Styling**: Custom CSS with responsive design
- **AJAX**: Asynchronous form submissions

## 📋 Prerequisites

- **Web Server**: Apache/Nginx with PHP support
- **PHP**: Version 7.4 or higher
- **Database**: MySQL 5.7+ or MariaDB 10.2+
- **Browser**: Modern browser with JavaScript enabled

## 🚀 Installation & Setup

### 1. Clone the Repository
```bash
git clone https://github.com/aliyanissohaib/Graphical_Password_Authentication_System.git
cd dual-authentication-system
```

### 2. Database Setup
```sql
-- Create database
CREATE DATABASE dual_auth_system;

-- Import database schema
mysql -u username -p dual_auth_system < database/schema.sql
```

### 3. Configuration
```php
// config/database.php
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'dual_auth_system');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
?>
```

### 4. Web Server Configuration
- Place files in web server document root
- Ensure PHP has write permissions for session storage
- Configure virtual host (optional)

### 5. Access the Application
```
http://localhost/dual-authentication-system
```

## 📂 Project Structure

```
dual-authentication-system/
├── index.php                  # Landing page
├── login.php                  # Login interface
├── register.php              # User registration
├── dashboard.php              # Protected area
├── logout.php                 # Session termination
├── config/
│   ├── database.php          # Database configuration
│   ├── session.php           # Session management
│   └── security.php          # Security functions
├── includes/
│   ├── auth.php              # Authentication logic
│   ├── functions.php         # Utility functions
│   └── validation.php        # Input validation
├── assets/
│   ├── css/
│   │   ├── style.css         # Main stylesheet
│   │   ├── login.css         # Login page styles
│   │   └── responsive.css    # Mobile responsiveness
│   ├── js/
│   │   ├── main.js           # Core JavaScript
│   │   ├── auth.js           # Authentication scripts
│   │   └── graphical.js      # Graphical password logic
│   └── images/
│       ├── auth-images/      # Graphical password images
│       └── ui/               # Interface elements
├── database/
│   ├── schema.sql            # Database structure
│   └── sample_data.sql       # Test data
└── admin/
    ├── index.php             # Admin dashboard
    ├── users.php             # User management
    └── logs.php              # Security logs
```

## 🔐 Authentication Flow

### **Registration Process**
1. **User Details**: Enter username, email, text password
2. **Graphical Setup**: Select authentication image and click points
3. **Verification**: Confirm graphical password pattern
4. **Account Creation**: Store hashed credentials securely

### **Login Process**
1. **Username Entry**: Enter registered username
2. **Text Password**: Provide traditional password
3. **Graphical Authentication**: Click correct points on image
4. **Verification**: Validate both authentication methods
5. **Access Granted**: Redirect to protected dashboard

```javascript
// Example: Graphical password validation
function validateGraphicalPassword(clickPoints, storedPattern) {
    const tolerance = 20; // Pixel tolerance
    
    if (clickPoints.length !== storedPattern.length) return false;
    
    for (let i = 0; i < clickPoints.length; i++) {
        const distance = Math.sqrt(
            Math.pow(clickPoints[i].x - storedPattern[i].x, 2) +
            Math.pow(clickPoints[i].y - storedPattern[i].y, 2)
        );
        
        if (distance > tolerance) return false;
    }
    
    return true;
}
```

## 🎨 User Interface

### **Login Interface**
```
┌─────────────────────────────────────┐
│  🔐 Dual Authentication System      │
├─────────────────────────────────────┤
│  Username: [________________]       │
│  Password: [________________]       │
│                                     │
│  Step 2: Graphical Authentication   │
│  ┌─────────────────────────────┐   │
│  │                             │   │
│  │    Click on the correct     │   │
│  │    points in sequence       │   │
│  │         [Image]             │   │
│  │                             │   │
│  └─────────────────────────────┘   │
│                                     │
│  Progress: ████████░░ (80%)         │
│                                     │
│  [Login] [Reset] [Register]         │
└─────────────────────────────────────┘
```

## ⚙️ Configuration Options

### **Security Settings**
```php
// config/security.php
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOCKOUT_DURATION', 900); // 15 minutes
define('SESSION_TIMEOUT', 3600);  // 1 hour
define('PASSWORD_MIN_LENGTH', 8);
define('GRAPHICAL_POINTS_REQUIRED', 3);
```

### **Graphical Password Settings**
```javascript
// assets/js/config.js
const GRAPHICAL_CONFIG = {
    tolerance: 25,           // Click tolerance in pixels
    minPoints: 3,           // Minimum click points
    maxPoints: 8,           // Maximum click points
    imageWidth: 400,        // Standard image width
    imageHeight: 300        // Standard image height
};
```

## 🔧 API Endpoints

### **Authentication APIs**
```php
POST /api/login.php
{
    "username": "user123",
    "password": "textPassword",
    "graphical_points": [
        {"x": 150, "y": 200},
        {"x": 300, "y": 150}
    ]
}

POST /api/register.php
{
    "username": "newuser",
    "email": "user@example.com",
    "password": "securePass123",
    "graphical_image": "image1.jpg",
    "graphical_points": [...]
}
```

## 🛡️ Security Measures

### **Password Security**
- bcrypt hashing for text passwords
- Coordinate encryption for graphical passwords
- Salt generation for each user
- Password complexity requirements

### **Session Security**
- Secure session cookies
- Session regeneration on login
- Automatic timeout handling
- CSRF token validation

### **Input Validation**
- SQL injection prevention
- XSS protection
- File upload restrictions
- Rate limiting implementation

## 🚀 Deployment

### **Production Setup**
1. **SSL Certificate**: Enable HTTPS
2. **Database Security**: Configure secure credentials
3. **File Permissions**: Set appropriate access rights
4. **Error Logging**: Configure error reporting
5. **Backup Strategy**: Implement regular backups

### **Environment Variables**
```bash
# .env file
DB_HOST=localhost
DB_NAME=dual_auth_prod
DB_USER=prod_user
DB_PASS=secure_password
SECRET_KEY=your_secret_key
DEBUG_MODE=false
```

## 🤝 Contributing

Contributions are welcome! Areas for improvement:

- 🔐 Enhanced security features
- 🎨 UI/UX improvements
- 📱 Mobile app integration
- 🔧 Additional authentication methods
- 📊 Analytics and reporting
- 🌐 Multi-language support

### **Development Guidelines**
1. Follow PSR-4 coding standards
2. Write comprehensive tests
3. Document all functions
4. Use prepared statements for database queries
5. Validate all user inputs

## 🧪 Testing

### **Security Testing**
- SQL injection testing
- XSS vulnerability assessment
- Session management testing
- Password strength validation

### **Functionality Testing**
- User registration flow
- Login process validation
- Graphical password accuracy
- Error handling scenarios

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## ⚠️ Security Disclaimer

This system is designed for educational and demonstration purposes. For production use, conduct thorough security audits and implement additional security measures as needed.

## 🏷️ Tags

`authentication` `security` `php` `javascript` `html-css` `graphical-password` `dual-factor` `web-security` `login-system` `password-protection`

---

*Securing access with dual authentication! 🔐✨*
