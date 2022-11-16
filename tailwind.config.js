/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                limena: {
                    200: "#52525A",
                    300: "#CCD1A8",
                    400: "#CD9C87",
                    500: "#BAD1D0",
                },
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
