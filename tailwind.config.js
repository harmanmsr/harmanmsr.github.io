// /** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html'],
  theme: {
    container:{
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#14b8a6',
        secondary: '#64748b',
        dark: '#0f172a',
        github: '#181717',
        youtube: '#FF0000',
        instagram: '#E4405F',
        linkedin: '#0A66C2'
      },
      screens: {
        '2xl': '1320px'
      }
    },
  },
  plugins: [],
}

