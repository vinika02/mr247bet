<script setup>
import { computed } from 'vue'

const route = useRoute()

const pageTitle = 'Home | Mr247bet casino and reviews'
const pageDescription = 'Welcome to mr247bet, the right place to inform yourself about the online betting reviews of various casinos, sportsbooks, bonuses, games and sports news.'

// ✅ Safer canonical (prevents undefined during prerender)
const canonical = computed(() => {
  return 'https://www.mr247bet.com' + (route.path || '/')
})

// ✅ Head tags
useHead({
  title: pageTitle,
  link: [
    { rel: 'canonical', href: canonical.value },
    { rel: 'alternate', href: 'https://www.mr247bet.com', hreflang: 'en' }
  ]
})

// ✅ Fixed SEO meta (SSR-safe)
useServerSeoMeta({
  description: pageDescription,
  ogTitle: pageTitle,
  ogType: 'website',
  ogUrl: 'https://www.mr247bet.com',

  // ❗ FIXED: removed /public
  ogImage: '/og/casino.jpg',
  ogImageAlt: 'casino-page',
  ogImageType: 'image/png',
  ogImageWidth: '1200',
  ogImageHeight: '630',

  ogSiteName: 'Mr247Bet',
  ogLocale: 'en_US',

  // ❗ FIXED: use array instead of duplicate keys
  ogLocaleAlternate: ['en_GB', 'en_AU', 'en_NZ', 'en_ZA'],

  ogDescription: pageDescription,

  twitterCard: 'summary_large_image',
  twitterTitle: pageTitle,
  twitterDescription: pageDescription,

  // ❗ FIXED: removed /public
  twitterImage: '/og/casino.jpg',
  twitterImageAlt: 'casino-page'
})

// ✅ keep if defined globally
defineRobotMeta()
</script>

<template>
  <HomeHero />

  <main id="main">
    <HomeFeaturedCasinos />
    <HomeTabSection />
    <HomeSportsSection />
    <HomePostsSection />
    <HomeInfoSection />
  </main>
</template>

<style scoped>
</style>