# Admin Login Details

## Default Admin Credentials

After running the seeder, use these credentials:

**Email:** `admin@validcertpk.com`  
**Password:** `admin123`

⚠️ **IMPORTANT:** Change this password immediately after first login!

## How to Create Admin User

### Option 1: Using Seeder (Recommended)

Run this command:
```bash
php artisan db:seed --class=AdminUserSeeder
```

This will create an admin user with:
- Email: `admin@validcertpk.com`
- Password: `admin123`

### Option 2: Using Tinker

```bash
php artisan tinker
```

Then run:
```php
$user = new App\Models\User();
$user->name = 'Admin';
$user->email = 'admin@validcertpk.com';
$user->password = bcrypt('your_password_here');
$user->email_verified_at = now();
$user->save();
exit
```

### Option 3: Using Database Seeder

```bash
php artisan db:seed
```

This will run all seeders including the AdminUserSeeder.

## Access Admin Panel

1. Go to: `http://localhost/admin/login`
2. Enter the credentials above
3. Click "Login"

## Change Password After Login

After logging in, you can change the password by:
1. Going to your user profile (if implemented)
2. Or update directly in database:
   ```sql
   UPDATE users SET password = '$2y$12$...' WHERE email = 'admin@validcertpk.com';
   ```
   (Use `bcrypt('new_password')` to generate the hash)

## Security Note

⚠️ **Never use default passwords in production!**

Always change the default password immediately after setup.

