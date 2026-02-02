# DTU Admission Portal - Complete Setup Script
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "DTU Admission Portal - GitHub Setup" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Step 1: Create directories
Write-Host "[1/3] Creating image directories..." -ForegroundColor Yellow
New-Item -ItemType Directory -Force -Path "images\logos" | Out-Null
New-Item -ItemType Directory -Force -Path "images\home" | Out-Null
New-Item -ItemType Directory -Force -Path "images\student_life" | Out-Null
Write-Host "✓ Directories created!" -ForegroundColor Green
Write-Host ""

# Step 2: Copy images
Write-Host "[2/3] Copying images..." -ForegroundColor Yellow
$source = "C:\Users\ratho\.gemini\antigravity\brain\bf96d65a-9ab5-4083-962b-883167e3dd39\"

# Copy logo
Copy-Item "$source\uploaded_media_1769887371671.png" "images\logos\dtu_logo.png" -Force
Write-Host "  ✓ Logo copied" -ForegroundColor Green

# Copy home images
Copy-Item "$source\uploaded_media_0_1769887863759.png" "images\home\hero_image.png" -Force
Copy-Item "$source\uploaded_media_0_1769967656838.png" "images\home\hod_photo.png" -Force
Copy-Item "$source\uploaded_media_1_1769967656838.png" "images\home\event1.png" -Force
Copy-Item "$source\uploaded_media_2_1769967656838.png" "images\home\leader1.png" -Force
Copy-Item "$source\uploaded_media_3_1769967656838.png" "images\home\event2.png" -Force
Copy-Item "$source\uploaded_media_0_1769967737479.png" "images\home\event3.png" -Force
Copy-Item "$source\uploaded_media_1_1769967737479.png" "images\home\leader2.png" -Force
Write-Host "  ✓ Home images copied (7 files)" -ForegroundColor Green

# Copy student life images
Copy-Item "$source\uploaded_media_0_1769860586160.png" "images\student_life\industrial_visit.png" -Force
Copy-Item "$source\uploaded_media_1_1769860586160.png" "images\student_life\cultural_event.png" -Force
Write-Host "  ✓ Student life images copied (2 files)" -ForegroundColor Green
Write-Host ""

# Step 3: Git commands
Write-Host "[3/3] Preparing for GitHub..." -ForegroundColor Yellow
Write-Host ""
Write-Host "All images copied successfully! ✓" -ForegroundColor Green
Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "NEXT STEPS - Run these commands:" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "git add ." -ForegroundColor White
Write-Host "git commit -m 'Complete DTU Admission Portal with images'" -ForegroundColor White
Write-Host "git push origin main" -ForegroundColor White
Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Your portal is ready for GitHub! 🚀" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Cyan
