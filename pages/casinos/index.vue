<script setup>
import slotWolf from '/img/slotwolf.png'
import bitStarz from '/img/bitstarz.png'
import betItALL from '/img/betitall.png'
import zenBetting from '/img/zenbetting.png'
import pledoo from '/img/pledoo.png'
import playfina from '/img/playfina.png'

const items = [
    { name: "SlotWolf Casino", imgUrl: slotWolf, class: "carousel-item active" },
    { name: 'BitStarz Casino', imgUrl: bitStarz, class: "carousel-item" },
    { name: 'BetItAll Casino', imgUrl: betItALL, class: "carousel-item" },
    { name: 'ZenBetting Casino', imgUrl: zenBetting, class: "carousel-item" },
    { name: 'Pledoo Casino', imgUrl: pledoo, class: "carousel-item" },
    { name: 'Playfina Casino', imgUrl: playfina, class: "carousel-item" },
]

const route = useRoute()
const pageTitle = 'Casinos | Mr247bet casino and reviews'
const pageDescription = "Explore the best online casinos with Mr247Bet. Our expert reviews will help you find the perfect casino for your gaming needs. Play now and win big!"


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
    ogImageAlt: 'casino',
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
    twitterImageAlt: 'casino'
})
</script>

<template>
    <CasinosIndexHero />
    <main id="main">
        <CasinosIndexFeatured />
        <CasinosIndexNewest :items="items" />
        <CasinosIndexExpertRated :items="items" />
        <CasinosIndexCrypto :items="items" />
        <CasinosIndexMobile :items="items" />
        <CasinosIndexInstant :items="items" />
        <CasinosIndexPayNPlay :items="items" />
        <!-- <CasinosIndexRecentPosts /> -->
        <HomePostsSection />
        <CasinosIndexInfo />
        <CasinosIndexFaq />
    </main>
</template>


<style scoped></style>