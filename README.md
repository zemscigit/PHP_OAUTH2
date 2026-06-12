# PHP OAuth2 & Joke Generator Projects

This repository contains two complete PHP projects:

1. **OAuth2 REST API** - Enterprise-grade OAuth2 API with JWT authentication
2. **Joke Generator** - Multi-source joke generator using external APIs

## 📁 Project Structure

```
├── OAuth2_API/          - OAuth2 REST API project
│   ├── config/          - Configuration files
│   ├── public/          - Web root
│   ├── src/             - Source code
│   ├── composer.json    - PHP dependencies
│   └── README.md        - OAuth2 API documentation
│
├── Joke_Generator/      - Joke Generator project
│   ├── src/             - Source code
│   ├── public/          - Web root
│   ├── composer.json    - PHP dependencies
│   └── README.md        - Joke Generator documentation
│
└── README.md            - This file
```

## 🚀 Quick Start

### OAuth2 REST API

```bash
cd OAuth2_API
composer install
cp .env.example .env
php -S localhost:8000
```

API available at: **http://localhost:8000/api**

### Joke Generator

```bash
cd Joke_Generator
composer install
cp .env.example .env
php -S localhost:8001
```

API available at: **http://localhost:8001/api**

## 📚 Documentation

For detailed documentation, see:

- [OAuth2 REST API Documentation](./OAuth2_API/README.md)
- [Joke Generator Documentation](./Joke_Generator/README.md)

## ✨ Features

### OAuth2 REST API
- ✅ OAuth2 with JWT authentication
- ✅ User registration & login
- ✅ Customer management (CRUD)
- ✅ Product management (CRUD)
- ✅ Sales order management
- ✅ Password hashing (bcrypt)
- ✅ CORS support
- ✅ Error handling

### Joke Generator
- ✅ Multiple joke API sources
- ✅ Category filtering
- ✅ Search functionality
- ✅ Caching system
- ✅ Health monitoring
- ✅ Statistics tracking
- ✅ CORS enabled
- ✅ Well documented

## 🛠️ Requirements

- PHP 7.4 or higher
- Composer
- cURL extension
- JSON extension
- MySQLi extension (for OAuth2 API)

## 📖 API Endpoints

### OAuth2 REST API (23 endpoints)
- Authentication (Register, Login, Refresh, Me, Logout)
- Customers (List, Get, Create, Update, Delete)
- Products (List, Get, Create, Update, Delete)
- Sales Orders (List, Get, Create, Update, Customer Orders)
- Sales Order Items (Add, Update, Remove)

### Joke Generator (8 endpoints)
- Get random joke
- Get joke by category
- Get multiple jokes
- Search jokes
- Get available sources
- Cache statistics
- Clear cache
- Check API health

## 🔐 Security

✅ Password hashing (bcrypt)  
✅ JWT token validation  
✅ CORS protection  
✅ Input validation  
✅ Prepared statements  
✅ Error message sanitization  

## 💾 Installation

### 1. Clone Repository

```bash
git clone https://github.com/zemscigit/PHP_OAUTH2.git
cd PHP_OAUTH2
```

### 2. Install Dependencies

```bash
# For OAuth2 API
cd OAuth2_API && composer install && cd ..

# For Joke Generator
cd Joke_Generator && composer install && cd ..
```

### 3. Configure Environment

```bash
# OAuth2 API
cd OAuth2_API
cp .env.example .env
# Edit .env with your settings

# Joke Generator
cd ../Joke_Generator
cp .env.example .env
# Edit .env with your settings
```

### 4. Run Projects

```bash
# Terminal 1 - OAuth2 API
cd OAuth2_API
php -S localhost:8000

# Terminal 2 - Joke Generator
cd Joke_Generator
php -S localhost:8001
```

## 🧪 Testing

### Test OAuth2 API

```bash
# Register
curl -X POST http://localhost:8000/api/auth/register \
  -H "Content-Type: application/json" \
  -d '{"username":"testuser","email":"test@example.com","password":"test123","first_name":"Test","last_name":"User"}'

# Login
curl -X POST http://localhost:8000/api/auth/login \
  -H "Content-Type: application/json" \
  -d '{"email":"test@example.com","password":"test123"}'
```

### Test Joke Generator

```bash
# Get random joke
curl http://localhost:8001/api/joke

# Get programming joke
curl "http://localhost:8001/api/joke?category=programming"

# Get 5 jokes
curl "http://localhost:8001/api/jokes?count=5"

# Search jokes
curl "http://localhost:8001/api/jokes/search?q=programmer"
```

## 📝 Configuration

Both projects use `.env` files for configuration:

**OAuth2_API/.env**
```env
DB_HOST=localhost
DB_NAME=oauth_db
DB_USER=root
JWT_SECRET=your_secret_key
```

**Joke_Generator/.env**
```env
CACHE_ENABLED=true
CACHE_TTL=3600
CORS_ENABLED=true
```

## 🐛 Troubleshooting

### Port Already in Use

```bash
# Use different port
php -S localhost:9000
```

### Composer Not Found

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

### Database Connection Error

Check `.env` file and ensure MySQL is running:

```bash
mysql -u root -p < OAuth2_API/config/database.sql
```

## 📚 Additional Resources

- [PHP Documentation](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [OAuth 2.0 Specification](https://tools.ietf.org/html/rfc6749)
- [JWT.io](https://jwt.io/)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

MIT License - See LICENSE file for details

## 👨‍💻 Author

Zemscigit - [GitHub](https://github.com/zemscigit)

---

**Last Updated:** June 12, 2024  
**Status:** Production Ready ✅  
**Version:** 1.0.0  
