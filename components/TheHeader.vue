<script setup>
import { useMainJS } from '../composables/useMainJS'

onMounted(() => {
    // Enables Toggling of mobile menu
    // Getting rid of it would be great
    useMainJS()
})
</script>

<template>
    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <NuxtLink to="/" class="logo d-flex align-items-center">
                <img src="~/assets/img/mr247bet.svg" alt="mr247bet-logo">
            </NuxtLink>
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown">
                        <a href="">
                            <span>Casinos</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <!-- <li class="mainCategory">
                                <NuxtLink to="/casinos">Online Casinos</NuxtLink>
                            </li> -->
                            <li>
                                <NuxtLink to="/casinos/newest">Newest Casinos</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/casinos/expert-rated">Expert-Rated Casinos</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/casinos/crypto">Crypto Casinos</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/casinos/mobile">Mobile Casinos </NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/casinos/instant-play">Instant Play Casinos </NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/casinos/pay-n-play">Pay 'N' Play Casinos </NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/freddyvegas">FreddyVegas</NuxtLink>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="">
                            <span>Sportsbooks</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <!-- <li class="mainCategory">
                                <NuxtLink to="/sportsbooks">Online Sportsbooks</NuxtLink>
                            </li> -->
                            <li>
                                <NuxtLink to="/sportsbooks/crypto">Crypto</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/sportsbooks/best-odds">Best Odds</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/sportsbooks/promos">Promos And Bonuses</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/sportsbooks/in-play-betting">In-Play Betting</NuxtLink>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="dropdown">

                        <a href="">
                            <span>Bonuses</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>

                        <ul>
                            <li class="mainCategory">
                                <NuxtLink to="/bonuses">Casino Bonuses</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/bonuses/welcome">Welcome Bonuses</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/bonuses/free-spins">Free spins</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/bonuses/no-deposit">No-deposit</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/bonuses/cashback">Cashback</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/bonuses/no-wagering">No Wagering</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/bonuses/match-deposit">Match Deposit</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/bonuses/high-roller">High Roller</NuxtLink>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="">
                            <span>Games</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>

                        <ul>
                            <li class="mainCategory">
                                <NuxtLink to="/games">Online Games</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/casino-games">Casino Games</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/live-games">Live Games</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/table-games">Table Games</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/progressive-jackpot">Progressive Jackpot Slots</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/slots">Slots</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/blackjack">Blackjack</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/roulette">Roulette</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/baccarat">Baccarat</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/poker">Poker</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/bingo">Bingo</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/lotto">Lotto</NuxtLink>
                            </li>
                            <li>
                                <NuxtLink to="/games/free-to-play">Free To Play</NuxtLink>
                            </li>

                        </ul>
                    </li> -->
                    <li>
                        <NuxtLink to="/betting-guides">Betting Guides</NuxtLink>
                    </li>
                    <li>
                        <NuxtLink to="https://www.mr247bet.com/news" target="_blank">News</NuxtLink>
                    </li>
                    <li>
                        <NuxtLink to="/about">About</NuxtLink>
                    </li>
                    <li>
                        <NuxtLink to="https://mr247bet.com/news/contact/" target="_blank">Contact</NuxtLink>
                    </li>
                </ul>
            </nav>

            <!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
</template>


<style scoped>
/* Setting menu position to fixed to counter scroll misbehaviour caused by mainJS */
#header {
    position: fixed;
    width: 100%;
}

.mainCategory {
    text-decoration: underline;
    color: #ffffffb3;
}
</style>