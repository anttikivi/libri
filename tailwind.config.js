import colors from "tailwindcss/colors";
import defaultTheme from "tailwindcss/defaultTheme";
import plugin from "tailwindcss/plugin";

/** @type {import("tailwindcss").Config} */
export default {
  content: ["./views/**/*.{html,php}"],
  corePlugins: {
    container: false,
  },
  theme: {
    colors: {
      current: "currentColor",
      gray: {
        /**
         * The background colour for the site in light mode and text colour for
         * dark mode.
         */
        100: colors.stone["100"],
        /**
         * The background colour for the site in dark mode and text colour for
         * light mode.
         */
        900: colors.stone["900"],
      },
    },
    container: {
      center: true,
    },
    fontFamily: {
      sans: ["Inter", ...defaultTheme.fontFamily.sans],
      serif: ['"Libre Baskerville"', ...defaultTheme.fontFamily.serif],
    },
  },
  plugins: [
    plugin(({ addComponents, theme }) => {
      addComponents({
        ".container": Object.assign(
          {
            width: "100%",
            paddingRight: theme("spacing.4"),
            paddingLeft: theme("spacing.4"),
          },
          theme("container.center", false) ? { marginRight: "auto", marginLeft: "auto" } : {},
          {
            [`@media (min-width: ${theme("screens.sm")})`]: {
              maxWidth: "48rem",
            },
          },
        ),
      });
    }),
  ],
};
