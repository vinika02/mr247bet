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
const pageTitle = 'Sportsbooks - Best odds | Mr247bet casino and reviews'
const pageDescription = "Looking for the best odds on your favorite sports? Look no further than Mr247Bet's selection of sportsbooks. Get the edge you need to win big today!"

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
    ogImageAlt: 'sportsbooks-best-odds',
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
    twitterImageAlt: 'sportsbooks-best-odds'
})
</script>

<template>
    <div>
        <SportsBooksHero categoryName="All Sports Books Reviews">
            Welcome to Mr247Bet All Our Sportsbooks directory! Here, we take pride in offering you the best and most
            trustworthy online Sportsbooks that have undergone rigorous screening to ensure they meet our high standards.
            So, get ready to dive in and experience the ultimate sports betting adventure with us!
        </SportsBooksHero>
        <main id="main">
            <SportsBooksAllFilterBy :mostPopularCasinos=items />
            <SportsBooksAllInfo />
            <SportsBooksAllFAQ />
        </main>
    </div>
</template>


<style scoped></style>