<script setup>
const route = useRoute()
const pageTitle = "Casinos - Pay 'N' Play  | Mr247bet casino and reviews"
const pageDescription = "Experience hassle-free gaming with Pay 'N' Play casinos at Mr247Bet. No registration, no waiting, and instant withdrawals. Play now and enjoy the benefits!"

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
    ogImageAlt: 'pay-n-play-casinos',
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
    twitterImageAlt: 'pay-n-play-casinos'
})
</script>

<template>
    <CasinosHero categoryName="Pay 'N' Play Casinos">
        Welcome to the Mr247Bet Pay-'N'-Play Casinos directory, your trusted source for online casino reviews. Our directory
        features only those casinos that have passed our rigorous CasinoRank standards, along with expert evaluations from
        Mr247Bet and feedback from players. Explore this page to gain a comprehensive understanding of each online venue
        listed on our website.
    </CasinosHero>
    <main id="main">
        <!-- ALL CASINOS PAGE -->
        <CasinosPayNplayFilterBy />
        <CasinosPayNplayInfo />
        <CasinosPayNplayFAQ />
    </main>
</template>


<style scoped></style>