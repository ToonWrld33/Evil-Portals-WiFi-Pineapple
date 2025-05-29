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
cd /root/portals/
```

* SD card storage:

```bash
ssh root@172.16.42.1
cd /sd/portals/
```
### Create a new directory structure for your portal:  

```bash
mkdir portalname  
cd portalname
```

⸻

## 📜 Essential Files for Multi-Page Portals. THese three are a plug-and-play for all future portals.

To create a more sophisticated portal, you'll add additional pages:

### 🔧 `MyPortal.php`

Copy `MyPortal.php` to handle and log additional user information across your advanced pages.

```bash
nano MyPortal.php
```
Paste contents from:[MyPortal.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/MyPortal.php)


### 📂 `helper.php`

This file contains functions to dynamically retrieve client details.

```bash
nano helper.php
```
Paste contents from:[helper.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/helper.php)

### 🛠 `Portal-Name.ep`

This file contains functions to link portal name to GUI

```bash
nano Portal-Name.ep
```
Paste contents from:[Portal-Name.ep](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/Portal-Name.ep)

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


Example structure: [reset.php template](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/reset.php)


### 📝 Create Account (`create.php`)

```bash
nano create.php
 ```
 Create fields like:
  - First name, Last name
  - Email
  - Username
  - Create Password

Example structure: [create.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/create.php)

⸻

## 🌐 `index.php`

This main page directs users to advanced pages (`reset.php` and `create.php`) seamlessly.

```bash
nano index.php
# Customize landing page and link advanced pages clearly.
```

Example structure: [index.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/index.php)

## 🔐 `privacy.php`

This main page directs users to advanced pages (`reset.php` and `create.php`) seamlessly.

```bash
nano index.php
# Customize landing page and link advanced pages clearly.
```

Example structure: [privacy.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/privacy.php)

⸻

## 🖼 Place Logo or Other Images  

Ensure your images are saved as `.png` files.

### From Kali Linux:  
```bash
scp background.png logo.png root@172.16.42.1:/path/to/portalname/assets/img/
```
### Already on Pineapple:  
```bash
cp /current/location/{logo.png,background.png} /path/to/portalname/assets/img/`
```
Example `.png` files: [logo.png](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/logo.png) [background.png](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/background.png)

⸻

## 🚦 Testing Your Advanced Portal

* Activate your portal via Pineapple GUI.
* Connect from a client device and thoroughly test all pages and interactions.

Fine-tune your advanced portal until satisfied with realism and functionality!

⸻
🏨 **The Continental Hotel Portal Example (John Wick Inspired)**

If you've copied all scripts correctly, you now have your own `continental-login` portal, inspired by the iconic "Continental Hotel" from the *John Wick* movie series, allowing you to simulate realistic WiFi Pineapple captive portal scenarios.

### Files needed for continental-login:  
- [MyPortal.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/MyPortal.php) 
- [helper.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/helper.php)
- [index.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Scripts/MyPortal.php) 
- [reset.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/reset.php)  
- [create.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/create.php)  
- [privacy.php](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/privacy.php)  
- [Portal_Name.ep](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/Portal-Name.ep)  
- [logo.png](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/logo.png)
- [background.png](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/background.png)


---

### Examples of Captive Portal Pages:

* [**Login Page Example**](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/Example%20Images/Portal_Example.png)
* [**Reset Page Example**](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/Example%20Images/Rest_Example.png)
* [**Create Account Page Example**](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/Example%20Images/Create_Exapmple.png)
* [**Privacy Policy Page Example**](https://github.com/ToonWrld33/Evil-Portals-WiFi-Pineapple/blob/main/Advanced%20Scripts/Example%20Images/Privacy_Example.png)

🎉 Enjoy creating your very own "Continental Hotel" experience! 🏨🍍
