<script setup>
const route = useRoute()
const pageTitle = 'Casinos - Newest | Mr247bet casino and reviews'
const pageDescription = "Looking for the latest and greatest in online casinos? Check out Mr247Bet's newest casino offerings and experience the cutting-edge technology and exciting games."

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
    ogImageAlt: 'newest-casinos',
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
    twitterImageAlt: 'newest-casinos'
})
</script>

<template>
    <CasinosHero categoryName="Newest Casinos">
        Discover the latest and greatest online casinos available at Mr247bet. Be among the first to play at the newest
        online casinos and experience the latest casino games and features.
    </CasinosHero>
    <main id="main">
        <CasinosNewestFilterBy />
        <CasinosNewestInfo />
        <CasinosNewestFAQ />
    </main>
</template>


<style scoped></style>