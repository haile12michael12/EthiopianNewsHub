# 🇪🇹 EthioNewsHub

### Ethiopian Digital News & Media Platform

**EthioNewsHub** is a modern, scalable, and feature-rich **Laravel-based digital news platform** designed for Ethiopian media organizations, journalists, reporters, editors, and readers.

The platform provides a complete news publishing ecosystem with **multi-role content management, multilingual publishing, SEO optimization, analytics, comments, scheduled publishing, APIs, and AI-powered features**.

---

## 📸 Overview

EthioNewsHub brings together journalists, editors, administrators, and readers in one modern digital newsroom.

### Core Workflow

```text
Reporter
   ↓
Create Article
   ↓
Editor Review
   ↓
Approval
   ↓
Scheduled / Immediate Publishing
   ↓
Readers
   ↓
Analytics & Engagement
```

---

# ✨ Features

## 📰 News & Content Management

* Create, edit, and delete articles
* Draft articles
* Article review workflow
* Editor approval
* Scheduled publishing
* Breaking news
* Featured articles
* Trending articles
* Related articles
* Popular articles
* Article revisions
* Article version history
* Categories
* Subcategories
* Tags
* Authors
* Journalists
* Featured images
* Image galleries
* Video news
* Audio news
* Attachments
* Article sharing

---

# 👥 User Roles

EthioNewsHub supports multiple user roles.

### 👑 Administrator

* Manage users
* Manage roles & permissions
* Manage articles
* Manage categories
* Manage tags
* Manage media
* Manage comments
* Manage advertisements
* Manage site settings
* Manage SEO
* View analytics
* Manage reporters
* Manage editors
* Audit system activity

### ✍️ Reporter

* Create articles
* Save drafts
* Submit articles for review
* Upload media
* Manage own articles
* View article statistics
* Receive editorial feedback

### 📝 Editor

* Review submitted articles
* Approve articles
* Reject articles
* Request changes
* Schedule publication
* Manage featured stories
* Manage breaking news
* Edit reporter submissions

### 👤 Reader

* Read articles
* Search news
* Comment
* Like articles
* Bookmark articles
* Follow categories
* Follow journalists
* Share articles
* Manage reading history

---

# 🇪🇹 Ethiopian News Categories

The platform can support Ethiopian-focused categories such as:

* 🇪🇹 Ethiopia
* 🏙️ Addis Ababa
* 🏛️ Politics
* 💰 Business
* 📈 Economy
* 💻 Technology
* ⚽ Sports
* 🎬 Entertainment
* 🎓 Education
* 🏥 Health
* 🏗️ Construction
* 🌾 Agriculture
* 🌍 International
* 🚗 Transportation
* 💼 Jobs & Careers
* 🧑‍💻 Startups
* 🌱 Environment
* ✈️ Travel
* 📰 Opinion

---

# 🌍 Multilingual Support

EthioNewsHub is designed for multilingual Ethiopian audiences.

Supported languages can include:

* 🇬🇧 English
* 🇪🇹 Amharic


The architecture can be extended to support additional languages.

---

# 📅 Ethiopian Calendar

The platform can be extended with Ethiopian calendar support for:

* Article publishing dates
* Events
* Announcements
* Editorial schedules
* Ethiopian holidays

Example:

```text
Gregorian:
August 31, 2026

Ethiopian Calendar:
Nehase 25, 2018
```

---



---

# 🔎 Advanced Search

Powerful search functionality for discovering news.

Features include:

* Full-text search
* Search by title
* Search by author
* Search by category
* Search by tag
* Search by date
* Search by language
* Trending searches
* Search suggestions
* Popular keywords

Search example:

```text
"Addis Ababa construction"
```

---

# 📊 Analytics Dashboard

Administrators and reporters can monitor content performance.

### Analytics

* Total visitors
* Unique visitors
* Page views
* Article views
* Most-read articles
* Trending articles
* Popular categories
* Popular authors
* Traffic sources
* Device statistics
* Browser statistics
* Geographic statistics
* Engagement statistics

### Reporter Analytics

```text
Articles Published
Article Views
Comments
Shares
Likes
Engagement Rate
Top Performing Article
```

---

### Advertisement Management

* Banner advertisements
* Homepage advertisements
* Article advertisements
* Sidebar advertisements
* Sponsored content
* Advertisement campaigns
* Impression tracking
* Click tracking
* Campaign analytics

### Premium Content

Future support can include:

* Premium articles
* Subscription plans
* Subscriber-only content
* Membership system
* Donations

---

# 🔔 Notifications

Users can receive notifications for:

* Breaking news
* New articles
* Followed categories
* Followed journalists
* Comments
* Editorial feedback
* Article approval
* Article rejection
* Scheduled publication

---

# 💬 Community Features

* Article comments
* Comment moderation
* Like comments
* Reply to comments
* Report comments
* User profiles
* Journalist profiles
* Follow journalists
* Follow categories
* Bookmarks
* Reading history

---

# 📱 Responsive Design

EthioNewsHub is designed to work across:

* 💻 Desktop
* 📱 Mobile
* 📲 Tablet

The platform follows a responsive-first approach for modern news consumption.

---

# 🔌 REST API

The project can expose a RESTful API for mobile applications and third-party integrations.

Example endpoints:

```http
GET    /api/articles
GET    /api/articles/{id}
POST   /api/articles
PUT    /api/articles/{id}
DELETE /api/articles/{id}

GET    /api/categories
GET    /api/tags
GET    /api/authors
GET    /api/trending
GET    /api/search
```

Possible clients:

* Flutter
* React Native
* Android
* iOS
* React
* Vue
* Third-party applications

---

# 🛡️ Security

Security is an important part of the platform.

Features include:

* Authentication
* Authorization
* Role-based permissions
* CSRF protection
* Request validation
* Password hashing
* Rate limiting
* Secure file uploads
* Admin activity logs
* Login monitoring
* API authentication

---


---

# 🏗️ Technology Stack

### Backend

* PHP
* Laravel
* Laravel Sanctum
* REST API

### Frontend

* Blade
* HTML5
* CSS3
* JavaScript
* Tailwind CSS
* Alpine.js

### Database

* MySQL


### Infrastructure

* Redis
* Queue Workers
* Laravel Scheduler
* Storage
* CDN-ready architecture

### Development Tools

* Git
* GitHub
* Composer
* NPM
* Vite

---

# 📂 Project Structure

```text
EthioNewsHub/
│
├── app/
│   ├── Console/
│   ├── Events/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   ├── Editor/
│   │   │   ├── Reporter/
│   │   │   ├── Reader/
│   │   │   ├── Api/
│   │   │   └── Frontend/
│   │   │
│   │   ├── Middleware/
│   │   └── Requests/
│   │
│   ├── Jobs/
│   ├── Models/
│   ├── Notifications/
│   ├── Policies/
│   ├── Services/
│   └── Support/
│
├── bootstrap/
│
├── config/
│
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── public/
│   ├── images/
│   ├── uploads/
│   └── assets/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── admin/
│       ├── editor/
│       ├── reporter/
│       ├── reader/
│       └── frontend/
│
├── routes/
│   ├── web.php
│   ├── api.php
│   └── channels.php
│
├── storage/
│
├── tests/
│   ├── Feature/
│   └── Unit/
│
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

---

# 🗄️ Core Database Models

The application can include models such as:

```text
User
Role
Permission

Article
Category
Subcategory
Tag
Author
ArticleRevision

Comment
Like
Bookmark
ReadingHistory

Media
Video
Audio

Advertisement
AdvertisementCampaign

Notification

Newsletter
NewsletterSubscriber

Setting
SeoMetadata
ActivityLog

Translation
View
```

---

# ⚙️ Installation

## 1. Clone the repository

```bash
git clone https://github.com/haile12michael12/ethiopianewshub.git
```

## 2. Enter the project

```bash
cd Laravel-News-portal
```

## 3. Install PHP dependencies

```bash
composer install
```

## 4. Install frontend dependencies

```bash
npm install
```

## 5. Create environment file

```bash
cp .env.example .env
```

On Windows:

```bash
copy .env.example .env
```

## 6. Generate application key

```bash
php artisan key:generate
```

## 7. Configure database

Update `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ethionewshub
DB_USERNAME=root
DB_PASSWORD=
```

## 8. Run migrations

```bash
php artisan migrate
```

## 9. Seed database

```bash
php artisan db:seed
```

Or:

```bash
php artisan migrate --seed
```

## 10. Create storage link

```bash
php artisan storage:link
```

## 11. Build frontend assets

```bash
npm run build
```

For development:

```bash
npm run dev
```

## 12. Start Laravel

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

---

# 🔐 Environment Configuration

Example `.env` configuration:

```env
APP_NAME=EthioNewsHub
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ethionewshub
DB_USERNAME=root
DB_PASSWORD=

CACHE_STORE=file
QUEUE_CONNECTION=database

MAIL_MAILER=log

FILESYSTEM_DISK=public
```

For production, use secure credentials and production-ready services.

---

# 🧪 Testing

Run the test suite:

```bash
php artisan test
```

Run a specific test:

```bash
php artisan test --filter=ArticleTest
```

---


```

Production checklist:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

---

# 🧑‍💻 Development Workflow

```text
Feature
   ↓
Development
   ↓
Testing
   ↓
Code Review
   ↓
Staging
   ↓
Production
```

Recommended Git workflow:

```bash
git checkout -b feature/article-workflow

git add .

git commit -m "Add article approval workflow"

git push origin feature/article-workflow
```

---

# 🗺️ Roadmap

## Phase 1 — Core CMS

* [x] Authentication
* [x] User management
* [x] Article management
* [x] Categories
* [x] Tags
* [x] Comments
* [x] Roles

## Phase 2 — Professional Newsroom

* [ ] Editorial workflow
* [ ] Article revisions
* [ ] Breaking news
* [ ] Scheduled publishing
* [ ] Media library
* [ ] Journalist profiles
* [ ] Advanced moderation

## Phase 3 — Advanced Platform

* [ ] AI assistant
* [ ] Advanced analytics
* [ ] Recommendation engine
* [ ] Newsletter
* [ ] Advertisement management
* [ ] Premium content
* [ ] Subscription system

## Phase 4 — Mobile Ecosystem

* [ ] REST API
* [ ] Flutter application
* [ ] Push notifications
* [ ] Mobile authentication
* [ ] Offline reading

---

# 🤝 Contributing

Contributions are welcome.

### Fork the project

```bash
git clone https://github.com/haile12michael12/Laravel-News-portal.git
```

Create your feature branch:

```bash
git checkout -b feature/new-feature
```

Commit your changes:

```bash
git commit -m "Add new feature"
```

Push:

```bash
git push origin feature/new-feature
```

Then create a Pull Request.

---

# 📜 License

This project is open-source software licensed under the MIT License.

See the `LICENSE` file for more information.

---

# 👨‍💻 Developer

**Hailemichael Assefa**

Full-Stack Developer | Laravel | PHP | React | AI

GitHub:

https://github.com/haile12michael12

---

# ⭐ Support

If you find this project useful:

⭐ Star the repository

🍴 Fork the project

🐛 Report issues

💡 Suggest new features

🤝 Contribute to the project

---

# 🇪🇹 Built for Ethiopia

**EthioNewsHub** aims to provide a modern digital publishing ecosystem for Ethiopian media organizations, journalists, and readers.

> **Inform. Connect. Empower.**

---

## 📌 Project Status

**Status:** 🚧 Active Development

**Platform:** Web + API + Mobile-ready

**Framework:** Laravel

**Target:** Ethiopian Digital News & Media
