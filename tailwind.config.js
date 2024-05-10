import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                nunito: ["Nunito"],
            },
            colors: {
                primary: "#FF6363",
                secondary: {
                    100: "#E2E2D5",
                    200: "#888883",
                },
            },
        },
    },

    plugins: [forms],
};
