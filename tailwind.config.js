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
                    primary: {               
                        0: "#000000",
                        5: "#0c0d0e",
                        10: "#171a1c",
                        15: "#232729",
                        default: "#282C2F",
                        20: "#2f3437",
                        25: "#3b4045",
                        30: "#464d53",
                        35: "#525a60",
                        40: "#5e676e",
                        45: "#6a747c",
                        50: "#75818a",
                        55: "#838d95",
                        60: "#919aa1",
                        65: "#9fa7ad",
                        70: "#acb3b9",
                        75: "#bac0c4",
                        80: "#c8cdd0",
                        85: "#d6d9dc",
                        90: "#e3e6e8",
                        95: "#f1f2f3",
                        100: "#ffffff",
                    },
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
