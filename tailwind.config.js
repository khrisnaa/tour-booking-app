import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "node_modules/preline/dist/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                mont: ["Montserrat", ...defaultTheme.fontFamily.sans],
                inter: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: "#1C1D28",
                white: "#FDFCF7",
                accent: "#5733FF",
            },
        },
    },

    plugins: [forms, require("preline/plugin")],
};
