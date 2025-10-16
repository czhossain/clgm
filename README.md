# KLUST - Kuala Lumpur University of Science and Technology

Official website for Kuala Lumpur University of Science and Technology (KLUST), formerly known as Infrastructure University Kuala Lumpur.

## 📁 Project Structure

```
clgm/
├── index.html              # Main landing page (entry point)
├── README.md               # Project documentation
├── src/                    # Source files
│   ├── home.html          # Alternative home page
│   ├── program.html       # Programs page
│   ├── contact.html       # Contact us page
│   └── css/               # Stylesheets
│       ├── main.css       # Main styles (used by index.html)
│       ├── program.css    # Program page styles
│       └── contact.css    # Contact page styles
├── assets/                # Static assets
│   └── images/           # Image files
└── figma-design/         # Original design files (legacy)
    ├── index.html
    ├── program.html
    ├── contact.html
    ├── styles.css
    ├── program.css
    └── contact.css
```

## 🚀 Getting Started

### Prerequisites
- A modern web browser (Chrome, Firefox, Safari, or Edge)
- Optional: Local web server for development

### Installation

1. Clone the repository:
```bash
git clone https://github.com/czhossain/clgm.git
cd clgm
```

2. Open the website:
   - **Option 1**: Simply open `index.html` in your web browser
   - **Option 2**: Use a local development server:
     ```bash
     # Using Python 3
     python -m http.server 8000
     
     # Using Node.js (http-server)
     npx http-server
     ```
   - Then navigate to `http://localhost:8000`

## 📄 Pages

- **Home** (`index.html`) - Main landing page with university overview
- **Programs** (`src/program.html`) - Academic programs and courses
- **Contact** (`src/contact.html`) - Contact form and information

## 🎨 Features

- Responsive design for all devices
- Modern UI/UX
- Contact form
- Program showcase
- University information and branding

## 🛠️ Technology Stack

- HTML5
- CSS3
- Vanilla JavaScript (if applicable)

## 📝 Development Notes

### File Organization
- Main entry point: `index.html` in the root directory
- All page-specific HTML files are in the `src/` directory
- All stylesheets are organized in `src/css/`
- The `figma-design/` folder contains the original design files and is kept for reference

### Navigation Structure
- Root `index.html` links to `src/program.html` and `src/contact.html`
- Pages in `src/` link back to root `index.html` via `../index.html`
- Internal src pages link to each other directly

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📧 Contact

For inquiries about KLUST:
- Phone: 019 388 3435
- Email: ram@klust.edu.my
- Website: [klust.edu.my](https://klust.edu.my)

## 📜 License

This project is part of the official KLUST website infrastructure.

---
*Kuala Lumpur University of Science & Technology - Advancing education, innovation & sustainability across ASEAN*
```