@echo off
echo ========================================
echo DTU Admission Portal - Complete Setup
echo ========================================
echo.

echo [Step 1/4] Creating folders...
md images\logos 2>nul
md images\home 2>nul
md images\student_life 2>nul
echo Done!
echo.

echo [Step 2/4] Copying images...
set SRC=C:\Users\ratho\.gemini\antigravity\brain\bf96d65a-9ab5-4083-962b-883167e3dd39

copy "%SRC%\uploaded_media_1769887371671.png" "images\logos\dtu_logo.png" >nul
copy "%SRC%\uploaded_media_0_1769887863759.png" "images\home\hero_image.png" >nul
copy "%SRC%\uploaded_media_0_1769967656838.png" "images\home\hod_photo.png" >nul
copy "%SRC%\uploaded_media_1_1769967656838.png" "images\home\event1.png" >nul
copy "%SRC%\uploaded_media_2_1769967656838.png" "images\home\leader1.png" >nul
copy "%SRC%\uploaded_media_3_1769967656838.png" "images\home\event2.png" >nul
copy "%SRC%\uploaded_media_0_1769967737479.png" "images\home\event3.png" >nul
copy "%SRC%\uploaded_media_1_1769967737479.png" "images\home\leader2.png" >nul
copy "%SRC%\uploaded_media_0_1769860586160.png" "images\student_life\industrial_visit.png" >nul
copy "%SRC%\uploaded_media_1_1769860586160.png" "images\student_life\cultural_event.png" >nul
echo Done! All 10 images copied.
echo.

echo [Step 3/4] Verifying images...
dir images\logos\*.png /b 2>nul
dir images\home\*.png /b 2>nul
dir images\student_life\*.png /b 2>nul
echo.

echo [Step 4/4] Git commands ready!
echo.
echo ========================================
echo SUCCESS! Now run these commands:
echo ========================================
echo.
echo git add .
echo git commit -m "Complete DTU Admission Portal with images"
echo git push origin main
echo.
echo ========================================
pause
