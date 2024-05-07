/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#FF7517",
                "primary-dark": "#B75818",
                secondary: "#2C2727",
            },
        },

        container: {
            center: true,
            padding: "1rem",
        },
    },
    plugins: [require("flowbite/plugin")],
};
