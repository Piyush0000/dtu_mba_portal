# GitHub Deployment Checklist

## ✅ Pre-Deployment Steps

### 1. Image Setup (CRITICAL)
- [ ] Run `setup_images.bat` to create folder structure
- [ ] Manually copy all 10 images from temp location to project folders
- [ ] Verify all images are in place:
  - [ ] `images/logos/dtu_logo.png`
  - [ ] `images/home/hero_image.png`
  - [ ] `images/home/hod_photo.png`
  - [ ] `images/home/event1.png`
  - [ ] `images/home/event2.png`
  - [ ] `images/home/event3.png`
  - [ ] `images/home/leader1.png`
  - [ ] `images/home/leader2.png`
  - [ ] `images/student_life/industrial_visit.png`
  - [ ] `images/student_life/cultural_event.png`

### 2. Test Locally
- [ ] Open `http://localhost/dtu_admission/index.php`
- [ ] Verify all images load correctly
- [ ] Check all pages work:
  - [ ] Home page
  - [ ] About page
  - [ ] Admission page
  - [ ] Faculty page
  - [ ] Placements page
  - [ ] Student Life page
  - [ ] Gallery page

### 3. Code Review
- [ ] All PHP files use relative paths (no absolute paths)
- [ ] No sensitive information in code
- [ ] All links work correctly
- [ ] No console errors in browser

## 📤 GitHub Upload Steps

### 1. Initialize Git Repository
```bash
cd c:\xampp\htdocs\dtu_admission
git init
```

### 2. Add Files
```bash
git add .
```

### 3. Commit
```bash
git commit -m "Initial commit: DTU DSM Admission Portal"
```

### 4. Create GitHub Repository
- Go to https://github.com/new
- Name: `dtu_admission` or `dtu-dsm-portal`
- Description: "Official admission portal for Delhi School of Management, DTU"
- Public/Private: Choose based on requirement
- Don't initialize with README (we already have one)

### 5. Push to GitHub
```bash
git remote add origin https://github.com/YOUR_USERNAME/REPO_NAME.git
git branch -M main
git push -u origin main
```

## 🌐 Post-Deployment

### Verify on GitHub
- [ ] All files uploaded successfully
- [ ] README.md displays correctly
- [ ] Images folder structure is intact
- [ ] All images are visible in repository

### Share with Team
- [ ] Share repository URL
- [ ] Provide setup instructions (README.md)
- [ ] Document any additional configuration needed

## 📝 Important Notes

1. **Faculty Photos**: These load from DTU website, no local copy needed
2. **Image Paths**: All use relative paths (`images/...`)
3. **Browser Compatibility**: Tested on Chrome, Firefox, Safari, Edge
4. **Server Requirements**: PHP 7.4+, Apache/Nginx

## 🔧 Troubleshooting

### Images not showing after deployment?
- Verify image files are in correct folders
- Check file names match exactly (case-sensitive on Linux)
- Ensure file permissions are correct (644 for files, 755 for folders)

### Faculty photos not loading?
- These load from external DTU URLs
- Check internet connection
- Verify DTU website is accessible

## ✨ Ready for GitHub!

Once all checkboxes are complete, your portal is ready to be pushed to GitHub and shared with others!

---
**Last Updated**: February 2, 2026
