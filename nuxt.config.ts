// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  runtimeConfig: {
    wpURI: process.env.WP_URI,
    public: {
      siteUrl: "https://www.mr247bet.com",
    },
    indexable: true,
  },
  robots: {
    // sitemap: ["/0-sitemap.xml"],
    disallow: ["/news", "/news/**"],
  },
  routeRules: {
    "/**": { index: true },
    "/news": { robots: "noindex,nofollow" },
    "/news/**": { robots: "noindex,nofollow" },
  },
  sitemap: {
    enabled: true,
    sitemaps: true,
  },
  nitro: {
    prerender: {
      crawlLinks: true,
      routes: ["/"],
    },
  },
  app: {
    head: {
      charset: "utf-8",
      viewport: "width=device-width, initial-scale=1",
      link: [
        {
          rel: "icon",
          type: "image/png",
          sizes: "32x32",
          href: "/mr247bet-32x32.png",
        },
        {
          rel: "icon",
          type: "image/png",
          sizes: "16x16",
          href: "/mr247bet-16x16.png",
        },
        {
          href: "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap",
          rel: "stylesheet",
        },
      ],
      htmlAttrs: {
        lang: "en",
      },
      meta: [
        { "http-equiv": "x-ua-compatible", content: "IE=edge" },
        { name: "robots", content: "max-snippet:-1, max-image-preview:large" },
        { name: "author", content: "Mr247Bet" },
      ],
    },
  },

  css: [
    "bootstrap/dist/css/bootstrap.min.css",
    "~/assets/css/main.css",
    "~/assets/vendor/bootstrap-icons/bootstrap-icons.css",
    "~/assets/vendor/aos/aos.css",
    "~/assets/vendor/glightbox/css/glightbox.min.css",
    "~/assets/vendor/swiper/swiper-bundle.min.css",
  ],
  modules: [
    "nuxt-simple-robots",
    "@nuxt/devtools",
    "@nuxt/image-edge",
    "nuxt-simple-sitemap",
  ],
});
