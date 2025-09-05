import { Config } from 'tailwindcss';

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./app/**/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
} satisfies Config;