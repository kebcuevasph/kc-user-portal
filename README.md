# KEBCO User Portal

**KEBCO User Portal** is a WordPress plugin that provides a centralized and customizable dashboard for logged-in users—excluding administrators. Designed for platforms that need a secure and user-friendly access point, this plugin ensures that users land directly on their personalized "User Portal" after login.

## 🔧 Features

- 🔐 Redirects all non-admin users to a `/user-portal/` dashboard after login
- 🧩 Modular and developer-friendly architecture
- 📁 Clean folder structure (`/includes`, `/public`, `/assets`)
- 🎯 Ideal for learning platforms, community sites, agri-tech tools, and client-facing portals
- 🪝 Extensible with WordPress hooks using the `kc_` prefix

## 🚀 Use Cases

- Online learning and LMS platforms
- Membership or subscription-based websites
- Client or employee dashboards
- Agricultural or B2B tools with user-based access

## 📥 Installation

1. Clone or download this repository.
2. Zip the folder if uploading manually.
3. In WordPress Admin: Go to `Plugins → Add New → Upload Plugin`.
4. Activate the plugin.
5. Ensure a page exists at `/user-portal/` to serve as the user dashboard.

## 🧠 Developer Notes

- Uses the `login_redirect` filter to send all users (except admins) to `/user-portal/`.
- Add additional UI and logic inside `/public/` and `/includes/` using prefixed functions like `kc_`.

---

🛠 Built with ❤️ by Keb Cuevas  
🔗 [kebcuevas.com](https://kebcuevas.com) | 📘 [Docs Coming Soon]
