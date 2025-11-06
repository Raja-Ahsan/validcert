# Moving Public Folder to Root - Instructions

## Step 1: Move Assets Folder

Manually copy the `public/assets` folder to the root directory:
- Copy `public/assets` → `assets` (root level)

## Step 2: Files Already Created

I've already created:
- ✅ `index.php` in root (updated paths)
- ✅ `.htaccess` in root

## Step 3: Copy Other Files

Copy these files from `public` to root:
- `favicon.ico` → root
- `robots.txt` → root

## Step 4: Update AppServiceProvider

I'll update the AppServiceProvider to change asset paths.

## Step 5: Delete Public Folder

After everything is moved:
- Delete the `public` folder

## Step 6: Access Your Site

Now access your site directly:
- `http://localhost/validcert/` (instead of `http://localhost:8000`)

