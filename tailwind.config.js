/** @type {import('tailwindcss').Config} */
module.exports = {
  //Va a escanear los estilos que requiera cualquier archivo (aquí se van a definir los estilos la programación con js)
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [],
}
