<script setup>
import slotWolf from '/img/slotwolf.png'
import bitStarz from '/img/bitstarz.png'
import betItALL from '/img/betitall.png'
import zenBetting from '/img/zenbetting.png'
import pledoo from '/img/pledoo.png'
import playfina from '/img/playfina.png'

const items = [
    { name: "SlotWolf Sportsbooks", imgUrl: slotWolf, class: "carousel-item active" },
    { name: 'BitStarz Sportsbooks', imgUrl: bitStarz, class: "carousel-item" },
    { name: 'BetItAll Sportsbooks', imgUrl: betItALL, class: "carousel-item" },
    { name: 'ZenBetting Sportsbooks', imgUrl: zenBetting, class: "carousel-item" },
    { name: 'Pledoo Sportsbooks', imgUrl: pledoo, class: "carousel-item" },
    { name: 'Playfina Sportsbooks', imgUrl: playfina, class: "carousel-item" },
]

const route = useRoute()
const pageTitle = 'Sportsbooks | Mr247bet casino and reviews'
const pageDescription = "Experience the excitement of sports betting with Mr247Bet's top-rated sportsbooks. Place your bets on your favorite sports and teams, and win big!"

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
    ogImage: '/public/og/sport.jpg',
    ogImageAlt: 'sportsbooks',
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
    twitterImage: '/public/og/sport.jpg',
    twitterImageAlt: 'sportsbooks'
})
</script>

<template>
    <SportsBooksIndexHero />
    <SportsBooksIndexFeatured />
    <SportsBooksIndexCrypto :items="items" />
    <SportsBooksIndexBestOdds :items="items" />
    <SportsBooksIndexPromos :items="items" />
    <SportsBooksIndexInPlay :items="items" />
    <!-- <SportsBooksIndexRecentPosts /> -->
    <HomePostsSection />
    <SportsBooksIndexInfo />
    <SportsBooksIndexFaq />
</template>

<style scoped></style>