<script setup>
const route = useRoute()
const pageTitle = 'Casinos - All | Mr247bet casino and reviews'
const pageDescription = "Browse through the vast selection of Mr247Bet casinos! Explore our top-rated crypto casinos and start playing your favorite games with ease and security."

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
    ogImageAlt: 'crypto-casinos',
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
    twitterImageAlt: 'crypto-casinos'
})
</script>

<template>
    <CasinosHero categoryName="All Casino Reviews">
        At Mr247Bet, we bring to you an extensive collection of advanced and contemporary casinos. We invite you to explore
        our exceptional range of options and immerse yourself in an unparalleled gaming adventure.
    </CasinosHero>
    <main id="main">
        <CasinosAllFilterBy />
        <CasinosAllInfo />
        <CasinosAllFAQ />
    </main>
</template>


<style scoped></style>