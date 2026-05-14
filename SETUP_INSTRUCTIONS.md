# MAA Tours - Laravel Setup Instructions

## 🎉 Conversion Complete!

Your MAA Tours website has been successfully converted to Laravel! Follow these steps to get it running.

---

## 📋 Step 1: Copy Assets (CSS, JS, Images)

You need to copy your assets from the old project to the new Laravel project.

**Option A: Using File Explorer**
1. Copy `c:\laragon\www\maatours\maatours\css\` → `c:\laragon\www\maatours-laravel\public\css\`
2. Copy `c:\laragon\www\maatours\maatours\js\` → `c:\laragon\www\maatours-laravel\public\js\`
3. Copy `c:\laragon\www\maatours\maatours\images\` → `c:\laragon\www\maatours-laravel\public\images\`

**Option B: Using Command Line (Laragon Terminal)**
```bash
cd c:\laragon\www\maatours-laravel

# Copy CSS
xcopy c:\laragon\www\maatours\maatours\css public\css /E /I /Y

# Copy JS
xcopy c:\laragon\www\maatours\maatours\js public\js /E /I /Y

# Copy Images
xcopy c:\laragon\www\maatours\maatours\images public\images /E /I /Y
```

---

## 📋 Step 2: Run Database Migrations

Open **Laragon Terminal** and run:

```bash
cd c:\laragon\www\maatours-laravel

# Run migrations and seed data
php artisan migrate:fresh --seed
```

This will:
- Create all database tables
- Add admin user (username: `admin`, password: `admin123`)
- Add 5 sample tours

---

## 📋 Step 3: Start the Laravel Server

```bash
php artisan serve
```

The server will start at: **http://localhost:8000**

---

## 🌐 Access Your Application

### Frontend (Public Website)
- **Home:** http://localhost:8000
- **Tours:** http://localhost:8000/tours
- **Destinations:** http://localhost:8000/destinations
- **About:** http://localhost:8000/about
- **Contact:** http://localhost:8000/contact
- **Booking:** http://localhost:8000/booking

### Admin Panel
- **Login:** http://localhost:8000/admin/login
- **Username:** `admin`
- **Password:** `admin123`

### API Endpoints
- **Get Tours:** http://localhost:8000/api/tours
- **Get Single Tour:** http://localhost:8000/api/tour/{id}
- **Submit Booking:** POST http://localhost:8000/api/booking
- **Submit Contact:** POST http://localhost:8000/api/contact

---

## 🎯 What's Been Converted

### ✅ Backend
- **5 Database Migrations** (admin_users, tours, bookings, contact_submissions, newsletter_subscriptions)
- **5 Eloquent Models** with relationships
- **3 API Controllers** (Tours, Bookings, Contacts)
- **5 Admin Controllers** (Auth, Dashboard, Tours, Bookings, Contacts)
- **Custom Middleware** for admin authentication
- **Database Seeders** for initial data

### ✅ Frontend
- **7 Blade Templates** (layout, home, tours, destinations, about, contact, booking)
- **JavaScript API Integration** (fetch tours, submit bookings, contact forms)
- **Responsive Navigation** with active states

### ✅ Admin Panel
- **8 Admin Views** (login, layout, dashboard, tours CRUD, bookings, contacts)
- **Full CRUD Operations** for tours
- **Booking Management** with status updates
- **Contact Message Management**
- **Dashboard Statistics**

---

## 🔧 Key Features

### Admin Panel Features
1. **Dashboard**
   - View total tours, bookings, pending bookings, new messages
   - Recent bookings table

2. **Tour Management**
   - Add new tours
   - Edit existing tours
   - Activate/Deactivate tours
   - Delete tours

3. **Booking Management**
   - View all bookings
   - Update booking status (Pending/Confirmed/Cancelled)
   - Delete bookings

4. **Message Management**
   - View contact submissions
   - Update message status (New/Read/Replied)
   - Delete messages

### Frontend Features
1. **Dynamic Tour Loading** - Tours loaded from database via API
2. **Booking System** - Submit bookings with automatic price calculation
3. **Contact Form** - Send inquiries directly to database
4. **Responsive Design** - Works on all devices

---

## 📁 Project Structure

```
maatours-laravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/          # Admin panel controllers
│   │   │   └── Api/            # API controllers
│   │   └── Middleware/
│   │       └── AdminAuth.php   # Admin authentication
│   └── Models/                 # Eloquent models
├── database/
│   ├── migrations/             # Database migrations
│   └── seeders/                # Database seeders
├── public/
│   ├── css/                    # Your CSS files (copy here)
│   ├── js/                     # Your JS files (copy here)
│   └── images/                 # Your images (copy here)
├── resources/
│   └── views/
│       ├── admin/              # Admin panel views
│       └── frontend/           # Public website views
└── routes/
    ├── web.php                 # Web routes
    └── api.php                 # API routes
```

---

## 🚀 Next Steps

### 1. Customize Your Design
- Edit CSS files in `public/css/`
- Update Blade templates in `resources/views/`

### 2. Add More Features
- Newsletter subscription functionality
- User reviews and ratings
- Payment gateway integration
- Email notifications

### 3. Deploy to Production
When ready to go live:
1. Update `.env` with production database credentials
2. Set `APP_ENV=production` and `APP_DEBUG=false`
3. Run `php artisan config:cache`
4. Run `php artisan route:cache`
5. Upload to your hosting server

---

## 🔐 Security Notes

1. **Change Admin Password**
   ```bash
   php artisan tinker
   $admin = App\Models\AdminUser::first();
   $admin->password = Hash::make('your-new-password');
   $admin->save();
   ```

2. **Generate New APP_KEY** (if needed)
   ```bash
   php artisan key:generate
   ```

3. **Update .env** with secure credentials before going live

---

## 🐛 Troubleshooting

### Database Connection Error
- Check `.env` file has correct database credentials
- Ensure MySQL is running in Laragon
- Database name should be `maa_tours`

### Assets Not Loading
- Make sure you copied CSS, JS, and images to `public/` folder
- Check browser console for 404 errors
- Clear browser cache

### Admin Login Not Working
- Run `php artisan migrate:fresh --seed` to recreate admin user
- Default credentials: admin / admin123

### Tours Not Showing
- Check API endpoint: http://localhost:8000/api/tours
- Open browser console for JavaScript errors
- Ensure migrations and seeders ran successfully

---

## 📞 Support

If you encounter any issues:
1. Check Laravel logs: `storage/logs/laravel.log`
2. Check browser console for JavaScript errors
3. Verify all migrations ran: `php artisan migrate:status`

---

## 🎊 You're All Set!

Your Laravel application is ready to use. The conversion maintains all functionality from your original PHP website with the added benefits of:
- Modern MVC architecture
- Better security
- Easier maintenance
- Scalable structure
- Built-in features (validation, routing, ORM)

**Happy coding! 🚀**
