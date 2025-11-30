# NutriGuide 🍎

NutriGuide is a web‑based nutrition tracking app built with PHP, HTML, JavaScript and CSS that helps you record meals and track dietary information easily.  

## 🔍 What is NutriGuide  

- Let users sign up / log in, then log their meals.  
- Store user‑specific dietary logs and track daily intake.  
- Allow users to view summaries/statistics of what they eat over time.  

## ⚙️ Technology Stack  

- PHP (backend)  
- MySQL / PHP‑based database (via `connect.php`)  
- HTML / CSS / JavaScript for frontend UI  
- Lightweight, web‑accessible, and easy to self‑host  

## 📝 How to use  

1. Clone or download the repository.  
2. Import the database (or configure your DB credentials in `connect.php`).  
3. Open in browser (e.g. via XAMPP) → register a new user → start logging meals.  
4. Add meals via the diet/tracker pages; view intake history and summaries.  

## 💡 Why NutriGuide  

- Simple, no-frills — great for anyone wanting to track meals without heavy apps.  
- Easy to self‑host, customizable — ideal for learning or personal use.  
- Minimal dependencies, easy to deploy on local setups (e.g. XAMPP).  

## 📁 Project Structure  

```
index.html      – landing / login  
login.html / login.js / login.css  – authentication  
diet.html, tracker.html, fetch_data.php, fetch_tracker_data.php, get_user_data.php – meal logging & tracking  
… (various UI & helper files: .html, .css, .js) …  
```  

## 🚀 Future Ideas  

- Add nutrition‑database integration (for calories, macros)  
- Allow custom meal recipes & macro breakdowns  
- Add weekly/monthly
