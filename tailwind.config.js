const autoprefixer = require("autoprefixer");
const { default: postcss } = require("postcss");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/src/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [postcss, autoprefixer],
};
