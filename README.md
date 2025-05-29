# 🍍 WiFi Pineapple Evil Portals

This repository contains a collection of ready-to-use Evil Portals for the **WiFi Pineapple Mark VII** and **WiFi Pineapple Clones (Nano/Tetra)**.

---

## ⚠️ Important Ethical Notice

This toolkit is explicitly designed for **ethical security testing and educational purposes only**.

Unauthorized use on networks or devices without explicit permission is illegal and unethical.

**Always use responsibly** and ensure you have explicit permission before deploying any portals.

Happy hacking! 🍍👾

---

## ✅ Prerequisites

* Official Hak5 WiFi Pineapple Mark VII firmware
* Xchwarze WiFi Pineapple clones

## 📖 Setup Guides

* 📘 [Hak5 Official Setup Guide](https://docs.hak5.org/wifi-pineapple/setup/setting-up-your-wifi-pineapple)
* 📙 [ShurikenHacks Pineapple Clone Setup Guide](https://github.com/SHUR1K-N/wifi-mangoapple-resources)

📝 **Recommendation:** For Pineapple clones, it's highly recommended to store modules and portals on the SD card.

---

## 🚀 Installation Instructions

### 🌐 Step 1: Connect to WiFi Pineapple

Log in to your WiFi Pineapple Web Interface:

🌍 [http://172.16.42.1:1471](http://172.16.42.1:1471)

Ensure your Pineapple is connected to your AP (Access Point).

### 📦 Step 2: Install Evil Portal Module

1. Navigate to **Modules**.
2. Search and download the **Evil Portal** module.
3. Choose storage: **Internal** (if enough space) or **SD** (recommended for clones).
4. Open the Evil Portal module and install dependencies if prompted.

### 📂 Step 3: Clone Existing Portals

Download ready-made portals by community creators:

* 📌 [Kleo’s Evil Portals](https://github.com/kleo/evilportals)
* 📌 [SgtFoose’s Evil Portals](https://github.com/SgtFoose/Evil-Portals)

Clone portals using your Kali Terminal:

```bash
mkdir -p ~/PineapplePortals
cd ~/PineapplePortals
git clone <REPO_URL>
cd evilportals/portals
```

You should now see directories with all available portals.

---

## 📤 Transferring Portals

### 🍍 WiFi Pineapple Mark VII

* **Internal Storage:**

```bash
scp -r portal-name root@172.16.42.1:/root/portals/
```

* **SD Storage:**

```bash
scp -r portal-name root@172.16.42.1:/sd/portals/
```

### 🍍 WiFi Pineapple Clone

Create a tarball for easy transfer:

```bash
tar -czvf portal-name.tar.gz portal-name
scp portal-name.tar.gz root@172.16.42.1:/sd/portals/
```

Extract it on your clone:

```bash
ssh root@172.16.42.1
cd /sd/portals/
tar -xzvf portal-name.tar.gz

# Optional: Cleanup tarball
rm portal-name.tar.gz
```

---

## 🚦 Activate Portals

From the Pineapple GUI:

* Navigate to the **Evil Portal** module.
* Your newly transferred portals should now be visible and ready to activate.

Repeat these steps for all desired portals.

---

🛠️ **Create Your Own Custom Portals**

Interested in crafting your own personalized Evil Portals?

👉 Check out [CUSTOM_PORTAL.md](CUSTOM_PORTAL.md) for a detailed, step-by-step guide on building custom Evil Portals from scratch!

---

## ⚠️ Important Ethical Notice

This toolkit is explicitly designed for **ethical security testing and educational purposes only**.

Unauthorized use on networks or devices without explicit permission is illegal and unethical.

**Always use responsibly** and ensure you have explicit permission before deploying any portals.

---

## 📜 License

This project is licensed under the MIT License.

---

## 💻 Support

For questions, issues, or contributions, feel free to open a GitHub issue or pull request.

Happy hacking! 🍍💻👾

