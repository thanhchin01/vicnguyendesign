/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",   // Dành cho Laravel Blade
        "./resources/**/*.js",
        "./public/**/*.html",
    ],
    theme: {
        extend: {
            colors: {
                brand: "#22d69f",

            },
        },
    },
    plugins: [],
}
