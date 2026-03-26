<script setup>
import slotWolf from '/img/slotwolf.png'
import bitStarz from '/img/bitstarz.png'
import betItALL from '/img/betitall.png'
import zenBetting from '/img/zenbetting.png'
import pledoo from '/img/pledoo.png'
import playfina from '/img/playfina.png'

const items = [
    { name: "SlotWolf Casino", imgUrl: slotWolf },
    { name: 'BitStarz Casino', imgUrl: bitStarz },
    { name: 'BetItAll Casino', imgUrl: betItALL },
    { name: 'ZenBetting Casino', imgUrl: zenBetting },
    { name: 'Pledoo Casino', imgUrl: pledoo },
    { name: 'Playfina Casino', imgUrl: playfina },
]

const route = useRoute()
const pageTitle = 'Games - Live games | Mr247bet casino and reviews'
const pageDescription = "Immerse yourself in the authentic casino experience with Mr247Bet's selection of live games. Play with real dealers and enjoy the thrill of live gaming today!"

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
    ogImage: '/public/og/games.jpg',
    ogImageAlt: 'live-games',
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
    twitterImageAlt: 'live-games'
})
</script>

<template>
    <div>
        <GamesHero categoryName="Live Games" />
        <main id="main">
            <GamesFilterBy :mostPopularCasinos=items />
            <GamesInfo />
            <GamesFAQ />
        </main>
    </div>
</template>


<style scoped></style>