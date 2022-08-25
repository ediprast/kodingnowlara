/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "2rem",
            // default breakpoints but with 40px removed
            screens: {
                sm: "600px",
                md: "728px",
                lg: "1024px",
                xl: "1440px",
            },
        },
        fontFamily: {
            sans: ["Poppins", "ui-sans-serif", "system-ui"],
        },
        extend: {
            colors: {
                "blue-bold": "#262262",
                "blue-medium": "#0078BD",
                "blue-regular": "#197BFF",
                "blue-light": "#F3F7FF",
                "purple-bold": "#262262",
                "purple-light": "#8777FC",
                "white-light": "#FCFCFC",
            },
        },
    },
    plugins: [],
};
