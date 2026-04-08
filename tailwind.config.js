
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    ],

    safelist: [
        'text-blue-600',
        'text-green-600',
        'text-red-600',
    ],

    theme: {
    extend: {
        colors: {
        gold: '#C9A646',
        dark: '#0F0F0F',
        dark2: '#1A1A1A'
        }
    }
    },
    plugins: [],
}

