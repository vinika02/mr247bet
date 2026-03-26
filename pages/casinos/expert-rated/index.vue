<script setup>
const route = useRoute()
const pageTitle = 'Casinos - Expert-rated | Mr247bet casino and reviews'
const pageDescription = "Looking for expert-rated online casinos? Look no further than Mr247Bet's expert-rated casinos page. Discover top-rated online casinos and start playing today!"

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
    ogImageAlt: 'expert-rated-casino',
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
    twitterImageAlt: 'expert-rated-casino'
})
</script>

<template>
    <CasinosHero categoryName="Expert-Rated Casinos">
        Welcome to the Mr247Bet Expert-Rated Casinos directory, which contains the most reliable online casino reviews. All
        casinos in the directory have been vetted using strict CasinoRank criteria, augmented with Mr247Bet expert reviews,
        and paired with player reviews. This page provides in-depth information about each online venue featured on our
        website.
    </CasinosHero>
    <main id="main">
        <!-- ALL CASINOS PAGE -->
        <CasinosExpertRatedFilterBy />
        <CasinosExpertRatedInfo />
        <CasinosExpertRatedFAQ />
    </main>
</template>


<style scoped></style>