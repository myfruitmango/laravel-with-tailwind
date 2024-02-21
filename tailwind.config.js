/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            maxWidth: {
                "16": "16rem",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
