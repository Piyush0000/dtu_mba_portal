# DTU Admission Portal - Image Organization Guide

## Current Image Locations

All images are currently embedded using base64 encoding from temporary paths.

## Required Image Files

To make this project GitHub-ready, you need to manually copy the following images:

### 1. Logo (images/logos/)
- `dtu_logo.png` - DTU logo (circular)

### 2. Home Page Images (images/home/)
- `hero_image.png` - Main hero slider image
- `hod_photo.png` - Dr. Saurabh Agrawal's photo (circular)
- `event1.png` - Event collage 1
- `event2.png` - Event collage 2
- `event3.png` - Event collage 3
- `leader1.png` - Leader photo 1 (circular)
- `leader2.png` - Leader photo 2 (circular)

### 3. Student Life Images (images/student_life/)
- `industrial_visit.png` - Industrial visit photo
- `cultural_event.png` - Cultural event photo

## Source Files to Copy From

Copy images from:
```
C:/Users/ratho/.gemini/antigravity/brain/bf96d65a-9ab5-4083-962b-883167e3dd39/
```

### Mapping:
- uploaded_media_1769887371671.png → images/logos/dtu_logo.png
- uploaded_media_0_1769887863759.png → images/home/hero_image.png
- uploaded_media_0_1769967656838.png → images/home/hod_photo.png
- uploaded_media_1_1769967656838.png → images/home/event1.png
- uploaded_media_2_1769967656838.png → images/home/leader1.png
- uploaded_media_3_1769967656838.png → images/home/event2.png
- uploaded_media_0_1769967737479.png → images/home/event3.png
- uploaded_media_1_1769967737479.png → images/home/leader2.png
- uploaded_media_0_1769860586160.png → images/student_life/industrial_visit.png
- uploaded_media_1_1769860586160.png → images/student_life/cultural_event.png

## Faculty Photos

Faculty photos are loaded directly from DTU website URLs:
```
https://dtu.ac.in/Web/Departments/DSM/faculty_v2/images/[faculty_name].jpg
```

These don't need to be copied as they're external URLs.

## After Copying Images

Once images are copied to the proper folders, the PHP files are already configured to use them with relative paths for GitHub deployment.
