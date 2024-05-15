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
                secondary: "#231f1f",
            },
        },

        container: {
            center: true,
        },
    },
    plugins: [require("flowbite/plugin")],
};
