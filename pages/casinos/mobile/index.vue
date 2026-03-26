<script setup>
const route = useRoute()
const pageTitle = 'Casinos - Mobile | Mr247bet casino and reviews'
const pageDescription = "Find the best mobile casinos at Mr247Bet. Play your favorite games on-the-go and win big from your mobile device. Experience convenience and excitement today."

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
    ogImageAlt: 'mobile-casinos',
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
    twitterImageAlt: 'mobile-casinos'
})
</script>

<template>
    <div>
        <CasinosHero categoryName="Mobile Casinos">
            Welcome to the Mr247Bet Mobile Casinos directory, your go-to source for trustworthy online casino reviews. Our
            directory features only those casinos that have passed our rigorous CasinoRank standards, expert evaluations
            from Mr247Bet and feedback from players. Here, you can find comprehensive information on each online venue
            highlighted on our website.
        </CasinosHero>
        <main id="main">
            <!-- ALL CASINOS PAGE -->
            <CasinosMobileFilterBy />
            <CasinosMobileInfo />
            <CasinosMobileFAQ />
        </main>
    </div>
</template>


<style scoped></style>