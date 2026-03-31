# Olive Au Portfolio SPA

This project is a client-side Single Page Application (SPA) converted from a legacy PHP-based portfolio website. It is designed to be hosted on static storage services like Amazon S3, Google Cloud Storage, or GitHub Pages.

## Project Structure

- `public_html/`: The root directory for the web application.
    - `index.html`: The single entry point for the application.
    - `main.css`, `navlist.css`, etc.: Original stylesheets preserved for design consistency.
    - `js/`: JavaScript logic and data.
        - `data.js`: Contains all portfolio and resume content in a structured JavaScript object.
        - `app.js`: Contains the routing logic, rendering engine (using jQuery), and interactive features (image sliders, YouTube API).
        - `jquery-1.7.2.min.js`: The dependency used for DOM manipulation.
    - `images/`: All project thumbnails and full-size assets.
    - `fonts/`: Custom web fonts used throughout the site.

## Architecture

The application uses a hash-based router (`#/`, `#/resume`, `#/item/0`) to navigate between pages without refreshing. 

1.  **Data-Driven**: Content is decoupled from the presentation. To update the portfolio or resume, modify the objects in `public_html/js/data.js`.
2.  **Legacy Compatibility**: The code uses ES5 syntax and standard string concatenation to ensure compatibility with the project's original environment and the older version of jQuery (1.7.2) included in the codebase.
3.  **Components**:
    - `renderPortfolio()`: Renders the main grid of items.
    - `renderPortfolioItem(id)`: Renders the detail page for a specific project.
    - `renderResume()`: Generates the resume view from `resumeData`.
    - `renderAbout()`: Displays the "About Me" content and profile image.

## Local Development

To run the project locally for inspection or testing:

```bash
# Using Python 3
python3 -m http.server --directory public_html 8000

# Or using Node.js (if installed)
npx serve public_html
```

Then visit `http://localhost:8000`.

## Deployment

Simply upload the contents of the `public_html/` directory to any static web host. No PHP or server-side runtime is required.
