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
const pageTitle = 'Sportsbooks - Promos | Mr247bet casino and reviews'
const pageDescription = "Looking for the best sports betting promos? Look no further than Mr247Bet! We offer a variety of exciting promotions to help you maximize your winnings."


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
    ogImageAlt: 'sportsbooks-promos',
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
    twitterImageAlt: 'sportsbooks-promos'
})
</script>

<template>
    <div>
        <SportsBooksHero categoryName="Sportsbooks Promos & Bonuses">
            Maximize your sports betting adventure with Mr247Bet's Sportsbooks Promos & Bonuses. Take advantage of our
            exclusive promotions and generous bonuses designed to enhance your winnings.
        </SportsBooksHero>
        <main id="main">
            <SportsBooksPromosFilterBy :mostPopularCasinos=items />
            <SportsBooksPromosInfo />
            <SportsBooksPromosFAQ />
        </main>
    </div>
</template>


<style scoped></style>