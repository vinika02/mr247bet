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
const pageTitle = 'Sportsbooks - In-play betting | Mr247bet casino and reviews'
const pageDescription = "Experience the thrill of live sports betting with in-play betting at Mr247Bet. Bet on your favorite sports and take advantage of real-time odds and updates."

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
    ogImageAlt: 'sportsbooks-in-play-betting',
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
    twitterImageAlt: 'sportsbooks-in-play-betting'
})
</script>

<template>
    <div>
        <SportsBooksHero categoryName="In-Play Betting Sportsbooks">
            Immerse yourself in the excitement of live sports action with Mr247Bet's In-Play Betting Sportsbooks. Join us
            now and bet on your favorite sports in real-time, leveraging up-to-the-minute odds and dynamic betting options.
        </SportsBooksHero>
        <main id="main">
            <SportsBooksInPlayFilterBy :mostPopularCasinos=items />
            <SportsBooksInPlayInfo />
            <SportsBooksInPlayFAQ />
        </main>
    </div>
</template>


<style scoped></style>