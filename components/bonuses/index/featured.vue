<script setup>
import slotWolf from '/img/slotwolf.png'
import bitStarz from '/img/bitstarz.png'
import betItALL from '/img/betitall.png'
import zenBetting from '/img/zenbetting.png'
import pledoo from '/img/pledoo.png'
import playfina from '/img/playfina.png'

const items = [
    { name: "SlotWolf Bonuses", imgUrl: slotWolf, },
    { name: 'BitStarz Bonuses', imgUrl: bitStarz, },
    { name: 'BetItAll Bonuses', imgUrl: betItALL, },
    { name: 'ZenBetting Bonuses', imgUrl: zenBetting, },
    { name: 'Pledoo Bonuses', imgUrl: pledoo, },
    { name: 'Playfina Bonuses', imgUrl: playfina, },
]
</script>

<template>
    <section id="featured" class="featured sections-bg">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">
                <div class="section-header">
                    <h2>Featured Bonuses</h2>
                </div>
                <CardFeatured v-for="item in items" :imgUrl="item.imgUrl" :name="item.name" />
            </div>
            <div class="row gy-4 mt-4">
                <div class="col-md-12 d-none d-md-block">
                    <a href="#">
                        <img src="~/assets/img/promos/bb-100-up-to-eur-250-100-free-spins.jpg" class="img-fluid"
                            alt="free-spins">
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped></style>