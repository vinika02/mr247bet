<script setup>

const route = useRoute()
// console.log('route.path:', 'https://www.mr247bet.com' + route.path)
const pageTitle = 'Home | Mr247bet casino and reviews'
const pageDescription = 'Welcome to mr247bet, the right place to inform yourself about the online betting reviews of various casinos, sportsbooks, bonuses, games and sports news.'
useHead({
    title: pageTitle,
    link: [
        { rel: 'canonical', href: 'https://www.mr247bet.com' + route.path },
        { rel: 'alternate', href: 'https://www.mr247bet.com', hreflang: 'en' }
    ],
})

useServerSeoMeta({
    description: pageDescription,
    ogTitle: pageTitle,
    ogType: 'website',
    ogUrl: 'https://www.mr247bet.com',
    ogImage: '/public/og/casino.jpg',
    ogImageAlt: 'casino-page',
    ogImageType: 'image/png',
    ogImageWidth: '1200',
    ogImageHeight: '630',
    ogSiteName: 'Mr247Bet',
    ogLocale: 'en_US',
    ogLocaleAlternate: 'en_GB',
    ogLocaleAlternate: 'en_AU',
    ogLocaleAlternate: 'en_NZ',
    ogLocaleAlternate: 'en_ZA',
    ogDescription: pageDescription,
    twitterCard: 'summary_large_image',
    twitterTitle: pageTitle,
    twitterDescription: pageDescription,
    twitterImage: '/public/og/casino.jpg',
    twitterImageAlt: 'casino-page'
})

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

<style scoped></style>