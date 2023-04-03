/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                mellon: {
                    primary: "#DBA506",
                    contrast: "#000000",
                    shade: "#c19105",
                    tint: "#dfae1f",
                },
                onyx: {
                    primary: "#282C2F",
                    contrast: "#ffffff",
                    // contrast: '#D6D6D7',
                    shade: "#202124",
                    tint: "#323639",
                },
            },
            width: {
                96: "24rem",
                "movie-cast-profile": "300px",
            },
            height: {
                "movie-cast-profile": "300px",
                "movie-image": "400px",
            },
        },
    },
    plugins: [],
};
