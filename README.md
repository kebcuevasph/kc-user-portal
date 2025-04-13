# KEBCO User Portal

**KEBCO User Portal** is a WordPress plugin that provides a centralized and customizable dashboard for logged-in users—excluding administrators.
Designed to serve as a landing page for user-specific tools and access, this plugin is modular and developer-friendly.

## 🔧 Features

- 🔐 Redirects all non-admin users to a `/user-portal/` page after login
- 🧩 Modular architecture (includes, public, admin, assets)
- 📁 GitHub and WordPress-friendly folder structure
- 🪝 Extensible using WordPress action and filter hooks
- 💼 Built for LMS, client portals, intranets, agri-tech tools, and more

## 📂 Folder Structure

```
kc-user-portal/
├── kc-user-portal.php
├── README.md
├── includes/
├── public/
├── admin/
├── assets/
│   ├── css/
│   └── js/
└── languages/
```

## 🚀 Usage

1. Upload the plugin to your WordPress site.
2. Ensure a WordPress Page exists at `/user-portal/`.
3. Customize the logic and UI inside `includes/` and `public/`.

---

🛠 Built with ❤️ by Keb Cuevas
🔗 https://github.com/kebcuevasph/kc-user-portal
