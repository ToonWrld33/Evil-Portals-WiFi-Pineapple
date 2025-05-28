# 🍍 Advanced Evil Portal Creation Guide 🌀

Elevate your Evil Portals by crafting advanced, multi-page, realistic captive portal experiences! This guide walks you through implementing enhanced functionalities such as reset-password pages and user registration flows, significantly increasing realism and effectiveness.

⸻

## 📌 Prerequisites

Before you begin, ensure you have:

* A fully configured Evil Portal module on your WiFi Pineapple.

  * Follow the setup instructions in the main [README.md](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple).
* Familiarity with basic portal creation by reviewing [CUSTOM_PORTAL.md](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/CUSTOM_PORTAL.md).

⸻

## 📂 Advanced Portal Directory Structure

SSH into your Pineapple device and navigate to your portal's directory:

* Internal storage:

```bash
ssh root@172.16.42.1
cd /root/portals/portalname
```

* SD card storage:

```bash
ssh root@172.16.42.1
cd /sd/portals/portalname
```

⸻

## 📜 Essential Files for Multi-Page Portals

To create a more sophisticated portal, you'll add additional pages:

### 🔧 `MyPortal.php`

Copy `MyPortal.php` to handle and log additional user information across your advanced pages.

```bash
nano MyPortal.php
```
Paste contents from:[MyPortal.php](link-to-reset.php)


### 📂 `helper.php`

This file contains functions to dynamically retrieve client details.

```bash
nano helper.php
```
Paste contents from:[helper.php](link-to-reset.php)


⸻

## 🔗 Creating Advanced Portal Pages

You'll now create separate pages to simulate realistic interactions:

### 🔑 Reset Password (`reset.php`)

```bash
nano reset.php
```
 Create fields like:
 - Email or username
 - Last known password


Example structure: [reset.php template](link-to-reset.php)


### 📝 Create Account (`create.php`)

```bash
nano create.php
 ```
 Create fields like:
  - First name, Last name
  - Email
  - Username
  - Create Password

Example structure: [create.php](link-to-create.php)

⸻

## 🌐 `index.php`

This main page directs users to advanced pages (`reset.php` and `create.php`) seamlessly.

```bash
nano index.php
# Customize landing page and link advanced pages clearly.
```

Example structure: [index.php](link-to-index.php)


⸻

## 🖼️ Branding and Assets

Ensure your branding assets (logos, backgrounds) are placed in:

```
portalname/assets/img/
```

⸻

## 🚦 Testing Your Advanced Portal

* Activate your portal via Pineapple GUI.
* Connect from a client device and thoroughly test all pages and interactions.

Fine-tune your advanced portal until satisfied with realism and functionality!

⸻

🎉 Enjoy your sophisticated captive portals and continue hacking responsibly! 🍍💻✨
