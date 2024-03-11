/** @type {import('tailwindcss').Config} */
//  ./tailwindcss -i ./css/tailwind-input.css -o ./css/style.css --watch
// npx tailwindcss -i ./css/tailwind-input.css -o ./css/style.css --watch
const plugin = require('tailwindcss/plugin')
module.exports = {
  content: [
    "./*.{html,php}",
    "./template-parts/content/*.{html,php}",
    "./pages/*.{html,php}",
  ],
  theme: {
    extend: {},
    container: {
      center: true,
      padding: "20px",
    },
    boxShadow: {
		'serviceSec': '0px 4px 44px 0px rgba(19, 71, 104, 0.08)',
		'testiBox': '0px 4px 44px 0px rgba(19, 71, 104, 0.08)',
    },
    backgroundImage: {
      'heroBg':"linear-gradient(45deg, #d9fce2, #92f4a7)",
      'serviceSec':"linear-gradient(0deg, rgb(67 193 112 / 53%) 0%, rgba(29, 161, 243, 0.00) 100%)",
	    'mobileViewBannerBg': "linear-gradient(0deg, rgb(26 26 26) 0%, rgba(71, 101, 103, 0.00) 100%)",
	    'headerBg': "linear-gradient(180deg, black, transparent);",
	    'headerBgDirt': "url('../images/dirt.gif')",
    },
    colors: {
		'primary': "#FF9843",
		'secondary': "#FF9843",
		'white': "#ffffff",
		'black': "#000000",
		'side-bar-bg': "#f8f8f8",
		'backgroundPrimaryLight': "#fcfcfc",
		'backgroundPrimaryDark': "#1a1a1a",
		'secBgBG': "#f4f4f4",
    transparent: 'transparent',
    },
    fontFamily: {
	montserrat: ["Montserrat"], 
	nexaBold: ["NexaBold"],
    },
  },
  rippleui: {
    themes: [
      {
        themeName: "light",
        colorScheme: "light",
        colors: {
          primary: "#0b65a8",
          secondary: "#0b65a8",
          backgroundPrimary: "#fcfcfc",
        },
      },
      {
        themeName: "dark",
        colorScheme: "dark",
        colors: {
          primary: "#FF9843",
          secondary: "#FF9843",
          backgroundPrimary: "#1a1a1a",
        },
      },
      
    ],
  },
  plugins: [
    require("rippleui"),
    plugin(function({ addVariant }) {
            addVariant('current', '&.active');
        })
  ],
  mode: "jit",
};
