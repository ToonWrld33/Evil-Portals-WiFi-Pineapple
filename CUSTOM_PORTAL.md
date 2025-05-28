# 🍍 WiFi Pineapple Evil Portal Creation Guide 🍍

## 📌 Prerequisites  
Ensure you’ve installed and configured the Evil Portal module. For complete instructions, refer to the main [README.md](README.md).

---

## 📂 Portal Directory Structure  
### SSH into your Pineapple device:

### Internal storage:  
```bash
ssh root@172.16.42.1  
cd /root/portals
```

### SD card storage:  
```bash
ssh root@172.16.42.1  
cd /sd/portals
```
### Create a new directory structure for your portal:  

```bash
mkdir portalname  
cd portalname
```

---

## 🛠 Create Essential Files  

```bash
nano MyPortal.php  
```
Paste contents from: [MyPortal.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Scripts/MyPortal.php)  
This is a plug and play for all future portals.


```bash
nano index.php  
```
Customize your portal landing page.  
Paste contents for Example: [index.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Scripts/index.php)  


```bash
nano helper.php  
```
Paste contents from: [helper.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Scripts/helper.php)  
This is a plug and play for all future portals.

### Essential:
Edit the .ep file to match your portal's directory name exactly.
For Example, if your portal directory is:
`/sd/portals/hooli-login`
then your file should be named
`hooli-login.ep`

```bash
nano portalname.ep  
```
Paste contents from:[Portal_Name.ep](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Scripts/Portal-Name.ep)  
Essential: edit the name to match your portal's directory name exactly!
This is a plug and play for all future portals.


---

## 📁 Create Assets Directory  
```bash
mkdir -p assets/img
```
---

## 🖼 Place Logo or Other Images  

Ensure your images are saved as `.png` files.

### From Kali Linux:  
```bash
scp logo.png root@172.16.42.1:/path/to/portalname/assets/img/
```
### Already on Pineapple:  
```bash
cp /current/location/logo.png /path/to/portalname/assets/img/`
```
Example `.png` file: [logo.png](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/images/logo.png)

---

## 🎯 Configure Your Portal  
Edit and customize `index.php` for branding, design, logo placement, form fields, and redirection after login.

---

## 🚦 Testing Your Portal

1. From the Pineapple GUI: Navigate to **Modules > Evil Portal**, locate your portal, click **Activate**, then **Start Portal**.
2. On your client device: Connect to your Pineapple’s WiFi AP. Your portal should appear automatically.

Adjust layout and design until your portal is perfect!

---

## 🎬 Hooli Portal Example (Silicon Valley Inspired)  

If you've copied all scripts correctly, you now have your own **hooli-login** portal, inspired by the TV show *Silicon Valley* from the **"Hooli-Con"** episode (Season 4, Episode 9), featuring realistic WiFi Pineapple captive portal attacks.

### Files needed for hooli-login:  
- [MyPortal.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Scripts/MyPortal.php)  
- [helper.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Scripts/helper.php)  
- [index.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Scripts/index.php)  
- [Portal_Name.ep](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Scripts/Portal-Name.ep)  
- [logo.png](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/images/logo.png)

### Enjoy replicating your own "Hooli-Con" experience!
![Hooli Portal Examole](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/images/hooli-login.png)
---

## 🚀 **Level-Up Your Portals: Advanced Multi-Step Captive Portals**  

Ready to create advanced multi-step portals with password resets, account creation, and more?

## 👉 See [ADVANCED_PORTALS.md](ADVANCED_PORTALS.md) for an in-depth guide.

---

# 🍍 **Happy hacking!** 🍍👾
