
// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2024-04-03',
  devtools: { enabled: true },
  modules: ['@nuxt/ui', '@nuxt/eslint', '@nuxt/test-utils/module', '@nuxt/fonts'],
  app: {
    head: {
      title: "SWStarter",
      htmlAttrs: {
        lang: 'en'
      } 
    }
  },
  tailwindcss: {
    cssPath: ['~/assets/css/tailwind.css', { injectPosition: "first" }],
  },
  colorMode: {
    preference: 'light'
  },
  nitro: {
    routeRules:{
      "/api/**": { proxy: `${ process.env.NUXT_API_PROXY }/api/**` }
    }
  }
})