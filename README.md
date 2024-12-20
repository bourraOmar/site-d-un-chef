# Chef's Personal Website 👨‍🍳

A sophisticated web platform for a world-renowned chef, offering exclusive menus and personalized culinary experiences.

## 🌟 Features

### For Clients
- Browse exclusive menus
- Create and manage personal accounts
- Book culinary experiences
- Track reservation status
- View booking history
- Modify or cancel reservations

### For Chefs (Admin)
- Comprehensive dashboard
- Reservation management system
- Real-time statistics including:
  - Pending requests
  - Today's approved bookings
  - Tomorrow's approved bookings
  - Next client details
  - Total registered clients
- Menu management capabilities

## 🛠️ Technical Stack

- **Frontend:**
  - HTML5/CSS3
  - Tailwind CSS
  - JavaScript (ES6+)
  - Regular Expressions for form validation
  - Dynamic form handling
  - Modal implementations
  
- **Backend:**
  - PHP
  - MySQL
  - Session management
  - Secure authentication system

## 🔐 Authentication System

- Secure user registration
- Role-based access control (Client/Admin)
- Password encryption
- Session management
- Form validation using RegEx

## 💻 Installation

1. Clone the repository
```bash
git clone [repository-url]
```

2. Set up the database
```sql

source database.sql
```

3. Configure the connection
```php

$conn = mysqli_connect("hostname", "username", "password", "database");
```

4. Start your local server
```bash
php -S localhost:8000
```

## 🎨 Design Features

- Responsive design for all devices
- Modern and elegant UI
- Intuitive user experience
- Luxurious color scheme
- Clean and professional layout

## 📱 Responsive Design

- Mobile-first approach
- Tablet-friendly interface
- Desktop optimization
- Cross-browser compatibility

## ⚙️ JavaScript Functionalities

### Form Validation
- RegEx patterns for:
  - Email validation
  - Password requirements
  - Phone number format
  - Text input sanitization

### Dynamic Menu Management
- Add/remove menu items
- Real-time form updates
- Dynamic pricing calculation
- Image preview functionality

### Modal System
- Reservation details
- Confirmation dialogs
- Error messages
- Success notifications

## 👥 User Roles

### Client
- Account creation
- Menu browsing
- Booking management
- Profile customization

### Admin (Chef)
- Dashboard access
- Reservation handling
- Statistics viewing
- Menu management

## 🔒 Security Features

- Password hashing
- Input sanitization
- SQL injection prevention
- Session security
- XSS protection

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🤝 Contributing

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request
