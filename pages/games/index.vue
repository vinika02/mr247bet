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
const pageTitle = 'Games | Mr247bet casino and reviews'
const pageDescription = "Explore a vast selection of thrilling online casino games at Mr247Bet. From slots to table games, experience non-stop entertainment and big wins today!"

useHead({
    title: pageTitle,
    link: [
        { rel: 'canonical', href: route.path },
        { rel: 'alternate', href: 'https://www.mr247bet.com', hreflang: 'en' }
    ],
})

useServerSeoMeta({
    description: pageDescription,
    ogTitle: pageTitle,
    ogType: 'website',
    ogUrl: 'https://www.mr247bet.com',
    ogImage: '/public/og/games.jpg',
    ogImageAlt: 'games',
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
    twitterImage: '/public/og/games.jpg',
    twitterImageAlt: 'games'
})
</script>

<template>
    <GamesIndexHero />
    <main id="main">
        <GamesIndexFeatured />
        <GamesIndexCasinoGames :items="items" />
        <GamesIndexLiveGames :items="items" />
        <GamesIndexTableGames :items="items" />
        <GamesIndexProgressive :items="items" />
        <GamesIndexSlots :items="items" />
        <GamesIndexBlackjack :items="items" />
        <GamesIndexRoulette :items="items" />
        <GamesIndexBaccarat :items="items" />
        <GamesIndexPoker :items="items" />
        <GamesIndexBingo :items="items" />
        <GamesIndexLotto :items="items" />
        <GamesIndexFreeToPlay :items="items" />
        <GamesIndexRecentPosts />
        <GamesIndexInfo />
        <GamesIndexFaq />
    </main>
</template>


<style scoped></style>