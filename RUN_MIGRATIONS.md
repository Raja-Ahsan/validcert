# Database Migration Instructions

## Your Current Database Configuration

Your `.env` file is configured correctly:
- **Database:** `validcert`
- **Host:** `127.0.0.1`
- **Port:** `3306`
- **Username:** `root`
- **Password:** (empty - typical for XAMPP)

## Step 1: Verify Database Connection

Run this command in your terminal:
```bash
php artisan migrate:status
```

Or test the connection:
```bash
php test_db_connection.php
```

## Step 2: Run Migrations

Once the connection is verified, run:
```bash
php artisan migrate
```

This will create the following tables:
1. `services` - For storing services
2. `service_bookings` - For storing booking submissions
3. `contact_submissions` - For storing contact form submissions

## Step 3: Create Admin User

After migrations are complete, create an admin user:

```bash
php artisan tinker
```

Then run:
```php
$user = new App\Models\User();
$user->name = 'Admin';
$user->email = 'admin@validcertpk.com';
$user->password = bcrypt('your_password_here');
$user->save();
exit
```

## Common Issues & Solutions

### Issue: "Access denied for user 'root'@'localhost'"
**Solution:** Check if MySQL is running in XAMPP Control Panel

### Issue: "Unknown database 'validcert'"
**Solution:** 
1. Open phpMyAdmin (http://localhost/phpmyadmin)
2. Create database named `validcert`
3. Run migrations again

### Issue: "Connection refused"
**Solution:**
1. Make sure MySQL is running in XAMPP
2. Check if port 3306 is correct
3. Verify DB_HOST is `127.0.0.1` or `localhost`

## Verify Tables Created

After running migrations, check in phpMyAdmin:
- `services` table should exist
- `service_bookings` table should exist
- `contact_submissions` table should exist

## Next Steps

1. ✅ Run migrations
2. ✅ Create admin user
3. ✅ Access admin panel at `/admin/login`
4. ✅ Start creating services!

