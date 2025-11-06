# Admin Panel Setup Guide

## Database Setup

1. **Run Migrations:**
   ```bash
   php artisan migrate
   ```

2. **Create Admin User:**
   You can create an admin user using Laravel Tinker:
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
   ```

## Admin Panel Access

- **Login URL:** `/admin/login`
- Use the email and password you created above

## Admin Panel Features

### Services Management (`/admin/services`)
- ✅ Create, Read, Update, Delete services
- ✅ Search functionality
- ✅ Rich text editor (TinyMCE) for descriptions
- ✅ Image upload for services
- ✅ Dynamic form fields for booking forms
- ✅ Sort order management
- ✅ Active/Inactive status

### Bookings Management (`/admin/bookings`)
- ✅ View all service bookings
- ✅ Search and filter by status
- ✅ View booking details
- ✅ Update booking status (pending, contacted, completed, cancelled)
- ✅ Add admin notes
- ✅ Delete bookings

### Contact Submissions (`/admin/contacts`)
- ✅ View all contact form submissions
- ✅ Search and filter by status
- ✅ View submission details
- ✅ Update status (new, read, replied, archived)
- ✅ Add admin notes
- ✅ Delete submissions

## Email Configuration

Update `.env` file with your email settings:

```env
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS=info@validcertpk.com
MAIL_FROM_NAME="ValidCert"
```

## Dynamic Booking Forms

When creating/editing a service, you can add custom form fields:
- Field Label: Display name
- Field Name: Database field name
- Field Type: text, email, tel, textarea, number, date
- Required: Yes/No

These fields will automatically appear on the service booking form.

## File Structure

- Admin Controllers: `app/Http/Controllers/Admin/`
- Admin Views: `resources/views/admin/`
- Models: `app/Models/`
- Migrations: `database/migrations/`
- Email Templates: `resources/views/emails/`

## Notes

- Service images are stored in `public/assets/images/services/`
- Make sure this directory exists and is writable
- Email notifications are sent to `info@validcertpk.com` (configure in controllers if needed)

