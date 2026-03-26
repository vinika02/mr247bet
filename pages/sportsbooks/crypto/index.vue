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
const pageTitle = 'Sportsbooks - Crypto | Mr247bet casino and reviews'
const pageDescription = "Mr247Bet offers a wide range of sports betting options with cryptocurrencies. Bet on your favorite sports with ease and security using crypto at our sportsbook."

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
    ogImageAlt: 'sportsbooks-crypto',
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
    twitterImageAlt: 'sportsbooks-crypto'
})
</script>

<template>
    <div>
        <SportsBooksHero categoryName="Crypto Sportsbooks">
            Embrace the future of sports betting with Mr247Bet's Crypto Sportsbooks. Discover innovative features, secure
            cryptocurrency transactions, and thrilling betting opportunities in a crypto-friendly environment.
        </SportsBooksHero>
        <main id="main">
            <SportsBooksCryptoFilterBy :mostPopularCasinos=items />
            <SportsBooksCryptoInfo />
            <SportsBooksCryptoFAQ />
        </main>
    </div>
</template>


<style scoped></style>