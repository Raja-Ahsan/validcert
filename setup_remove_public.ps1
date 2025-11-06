# PowerShell script to move public folder to root
# Run this script in PowerShell from the project root

Write-Host "Moving public folder contents to root..." -ForegroundColor Green

# Copy assets folder
if (Test-Path "public\assets") {
    Write-Host "Copying assets folder..." -ForegroundColor Yellow
    Copy-Item -Path "public\assets" -Destination "assets" -Recurse -Force
    Write-Host "Assets folder copied successfully!" -ForegroundColor Green
} else {
    Write-Host "Assets folder not found in public!" -ForegroundColor Red
}

# Copy favicon
if (Test-Path "public\favicon.ico") {
    Copy-Item -Path "public\favicon.ico" -Destination "favicon.ico" -Force
    Write-Host "Favicon copied!" -ForegroundColor Green
}

# Copy robots.txt
if (Test-Path "public\robots.txt") {
    Copy-Item -Path "public\robots.txt" -Destination "robots.txt" -Force
    Write-Host "robots.txt copied!" -ForegroundColor Green
}

Write-Host ""
Write-Host "All files copied successfully!" -ForegroundColor Green
Write-Host "You can now delete the public folder manually." -ForegroundColor Yellow
Write-Host ""
Write-Host "Access your site at: http://localhost/validcert/" -ForegroundColor Cyan

