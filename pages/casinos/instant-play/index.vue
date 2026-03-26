<script setup>


const route = useRoute()
const pageTitle = 'Casinos - Instant-play | Mr247bet casino and reviews'
const pageDescription = "Discover the best instant-play casinos at Mr247Bet. No download required, just sign up and start playing your favorite casino games instantly."

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
    ogImageAlt: 'instant-play-casino',
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
    twitterImageAlt: 'instant-play-casino'
})
</script>

<template>
    <CasinosHero categoryName="Instant-Play Casinos">
        Welcome to the Mr247Bet Instant-Play Casinos directory, where you’ll find the most reliable online casino reviews.
        Our directory only features casinos that have passed our strict CasinoRank standards, expert evaluations from
        Mr247Bet and player feedback. Here, you can access comprehensive information on each online venue showcased on our
        website.
    </CasinosHero>
    <main id="main">
        <!-- ALL CASINOS PAGE -->
        <CasinosInstantPlayFilterBy />
        <CasinosInstantPlayInfo />
        <CasinosInstantPlayFAQ />
    </main>
</template>


<style scoped></style>