<script setup>
const route = useRoute()
const pageTitle = 'Casinos - Crypto | Mr247bet casino and reviews'
const pageDescription = "Looking for the best crypto casinos? Mr247Bet has got you covered! Explore our top-rated crypto casinos and start playing your favorite games with ease and security."

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
    <CasinosHero categoryName="Crypto Casinos">
        Looking for a reliable and safe crypto casino to play at? Look no further than Mr247bet. Our expert reviews and
        guides will help you navigate the world of crypto casinos and find the best platform for your needs. Enjoy the
        benefits of fast and secure transactions, anonymous gameplay, and a wide variety of games to choose from. Join the
        revolution of online gambling with crypto and start playing at Mr247bet today.
    </CasinosHero>
    <main id="main">
        <CasinosCryptoFilterBy />
        <CasinosCryptoInfo />
        <CasinosCryptoFAQ />
    </main>
</template>


<style scoped></style>