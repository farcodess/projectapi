import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        screens: {
            'xxs': '320px',
            // => @media (min-width: 320px) { ... }
            
            'xs': '375px',
            // => @media (min-width: 375px) { ... }

            'sl': '425px',
            // => @media (min-width: 425px) { ... }

            'sm': '640px',
            // => @media (min-width: 640px) { ... }
      
            'md': '768px',
            // => @media (min-width: 768px) { ... }
      
            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }
      
            'xl': '1440px',
            // => @media (min-width: 1280px) { ... }
      
            '2xl':'2560px',
            // => @media (min-width: 1536px) { ... }
        },
        extend: {
            animation: {
                "spin-slow": "spin 3s linear infinite",
                "loop-scroll": "loop-scroll 50s linear infinite", 
                "slide-left": "slide-left 30s linear infinite",
            },
            keyframes: {
                "loop-scroll": {
                    "0%": { transform: "translateX(0)" },
                    "100%": { transform: "translateX(-100%)" },
                },
                "slide-left": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
            },
            colors: {
                current: {
                    primary: "#003152",
                    secondary: "#859fb2",
                    green: "#6aff36",
                },
            },
            fontFamily: {
                oswald: ["Oswald", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
                roboto: ["Roboto", ...defaultTheme.fontFamily.sans],
                inter: ["Inter", ...defaultTheme.fontFamily.sans],
                ptsans: ["PT Sans", ...defaultTheme.fontFamily.sans],
                ptserif: ["PT Serif", ...defaultTheme.fontFamily.sans],
                nunito: ["Nunito", ...defaultTheme.fontFamily.sans],
                calibri: ["Calibri", ...defaultTheme.fontFamily.sans],
                inknut: ["Inknut Antiqua", ...defaultTheme.fontFamily.sans],
                montserrat: ["Montserrat", ...defaultTheme.fontFamily.sans],
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        typography,
        plugin(function({ addVariant }) {
            addVariant('optional', '&:optional')
            addVariant('hocus', ['&:hover', '&:focus'])
            addVariant('inverted-colors', '@media (inverted-colors: inverted)')
        }),
        plugin(function({ addBase, theme }) {
            addBase({
                'h1': { fontSize: theme('fontSize.2xl') },
                'h2': { fontSize: theme('fontSize.xl') },
                'h3': { fontSize: theme('fontSize.lg') },
            })
        })
    ]
}