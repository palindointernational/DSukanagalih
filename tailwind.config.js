import flowbite from "flowbite/plugin";

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        colors: {
            orange: "#FFAE12",
            hoverorange: "#d48104",
        },
    },
    plugins: [flowbite],
};
