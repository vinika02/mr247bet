<script setup>
const { post } = defineProps(['post'])

let lastKnownScrollPosition = 0;
let changePosition = ref(false)

// Handling classes color depending on casinoRating prop  
let rankCheck = computed(() => {
    return post.acf.casinoRating > 3.5 ? true : false
})

onMounted(() => {
    changePosition
    let postIntro = document.getElementById('review-intro');
    let postContent = document.getElementById('review-details');

    let pointOfStop = (postContent.clientHeight + postIntro.clientHeight) * 0.90
    // console.log('Point of stop:', pointOfStop)

    document.addEventListener("scroll", (event) => {
        lastKnownScrollPosition = window.scrollY;
        // console.log('Scroll position:', lastKnownScrollPosition)
        if (lastKnownScrollPosition >= pointOfStop) {

            changePosition.value = true
            // console.log('changePosition:', changePosition.value)
        } else {
            changePosition.value = false
            // console.log('changePosition:', changePosition.value)
        }
    });
})
</script>

<template>
    <section id="review-intro" class="casino-review sections-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="review-main">
                        <img :src="post?._embedded['wp:featuredmedia'][0].source_url" class="review-logo img-thumbnail"
                            alt="">
                        <h2 class="review-title">{{ post.acf.casinoName }}</h2>
                    </div>

                    <div class="rating-intro">
                        <div class="review-rating mt-5">
                            <div class="rating-circle">
                                <span class="rating-number">{{ post.acf.casinoRating }}</span>
                                <div :class="[rankCheck ? 'ratingGreen' : 'rating-bg-rank']"></div>
                            </div>
                            <div class="rating-info">
                                <span class="rating-label">Casino Rank</span>
                                <span class="rating-text">Trusted</span>
                            </div>
                        </div>

                    </div>

                    <div class="mt-4">
                        <span class="rating-text-small">
                            We provide honest and detailed reviews of online casinos on our platform due to our
                            long-term experience dealing with both players and casinos.
                        </span>
                    </div>
                    <!-- 
                    <div class="review-intro-info mt-4">
                        <div class="review-intro-info-items">
                            <i class="bi bi-globe review-globe"></i>
                            <span>Players from your country accepted</span>
                        </div>

                        <div class="review-intro-info-items">
                            <i class="bi bi-clock review-globe"></i>
                            <span>Players from your country accepted</span>
                        </div>

                        <div class="review-intro-info-items">
                            <i class="bi bi-patch-check review-globe"></i>
                            <span>Players from your country accepted</span>
                        </div>

                        <div class="review-intro-info-items">
                            <i class="bi bi-trophy review-globe"></i>
                            <span>Players from your country accepted</span>
                        </div>
                    </div> -->

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5><i class="bi bi-hand-thumbs-up"></i>What we like</h5>
                            <ul>
                                <li v-for="pros in post.acf.casinoPros">{{ pros }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="bi bi-hand-thumbs-down"></i>What we don't like</h5>
                            <ul>
                                <li v-for="cons in post.acf.casinoCons">{{ cons }}</li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 sidebox">
                    <div :class="[changePosition ? 'sidebar-stop' : 'sidebar-review']">
                        <div class="rating-intro">
                            <div class="review-rating">
                                <div class="rating-circle">
                                    <span class="rating-number">{{ post.acf.casinoRating }}</span>
                                    <div :class="[rankCheck ? 'ratingGreen' : 'rating-bg-rank']">
                                    </div>
                                </div>
                                <div class="rating-info">
                                    <span class="rating-label">Casino Rank</span>
                                    <span class="rating-text">Trusted</span>
                                </div>
                            </div>
                        </div>

                        <div class="review-visit">

                            <NuxtLink :to="post.acf.affiliateLink ? post.acf.affiliateLink : post.acf.casinoUrl"
                                target="_blank" :rel="post.acf.affiliateLink ? 'noopener' : 'nofollow noopener'">
                                <button type="button" class="primary-btn">Visit
                                    Casino</button>
                            </NuxtLink>

                            <NuxtLink :to="post.acf.affiliateTerms ? post.acf.affiliateTerms : post.acf.casinoTerms"
                                target="_blank" :rel="post.acf.affiliateTerms ? 'noopener' : 'nofollow noopener'">T&C Apply
                            </NuxtLink>
                        </div>

                        <div class="review-bonus">
                            <p>Welcome Bonus</p>
                            <h4>{{ post.acf.casinoBonusTitle }}</h4>
                            <NuxtLink :to="post.acf.affiliateBonus ? post.acf.affiliateBonus : post.acf.casinoBonusUrl"
                                target="_blank" :rel="post.acf.affiliateBonus ? 'noopener' : 'nofollow noopener'">
                                <button type="button" class="primary-btn">Claim offer and play</button>
                            </NuxtLink>
                            <NuxtLink :to="post.acf.affiliateTerms ? post.acf.affiliateTerms : post.acf.casinoTerms"
                                target="_blank" :rel="post.acf.affiliateTerms ? 'noopener' : 'nofollow noopener'">Full terms
                                apply</NuxtLink>
                        </div>

                        <!-- <div class="mt-3">
                            <a href="#" class="">??? Show all bonuses ??? <i class="bi bi-chevron-right"></i></a>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="review-details" class="review-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-tabs">

                        <CasinosReviewTabsNav />

                        <div class="tab-content" id="myTabContent">
                            <CasinosReviewTabGeneralPane :website="post.acf.casinoUrl" :languages="post.acf.casinoLang"
                                :established="post.acf.casinoEst" :company="post.acf.casinoCompany"
                                :licenses="post.acf.casinoLicences" :affiliateProgram="post.acf.casinoAffiliate"
                                :acceptedCountries="post.acf.casinoAccCountries"
                                :restrictedCountries="post.acf.casinoResCountries" :casinoType="post.acf.casinoType"
                                :affiliateLink="post?.acf.affiliateLink" />

                            <CasinosReviewTabPaymentsPane :depositMethods="post.acf.casinoDepositMethods"
                                :currencies="post.acf.casinoCurrencies"
                                :withdrawalMethods="post.acf.casinoWithdrawalMethods"
                                :withdrawalTimes="post.acf.casinoWithdrawalTimes"
                                :withdrawalLimit="post.acf.casinoWithdrawalLimit" />

                            <CasinosReviewTabGamesPane :gameProviders="post.acf.casinoGameProviders" />

                            <CasinosReviewTabResponsibleGamingPane :depositTool="post.acf.casinoDepositTool"
                                :wagerTool="post.acf.casinoWagerLimit" :lossLimit="post.acf.casinoLossLimit"
                                :timeLimit="post.acf.casinoTimeLimit" :selfExclusion="post.acf.casinoSelfExclusion"
                                :coolOff="post.acf.casinoCoolOff" :realityCheck="post.acf.casinoRealityCheck"
                                :selfAssessment="post.acf.casinoSelfAssessment"
                                :withdrawalLock="post.acf.casinoWithdrawalLock" />

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <hr>
                    <div id="postContent" class="description" v-html="post.content.rendered">
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped>
#review-intro {
    padding-top: 11rem;
}

.img-thumbnail {
    background-color: #d4d4d4;
}

.sidebar-stop {
    align-self: start;
    background-color: var(--color-light);
    box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.3);
    border-radius: 1rem;
    padding: 20px;
    left: auto;
    position: fixed;
    width: 25%;
    top: 11rem;
    z-index: 999;
    display: none;
}

/* stays the same */
.rating-number {
    position: absolute;
    font-size: 0.9rem;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.ratingGreen {
    background-color: var(--color-success);
    border-radius: 50%;
    height: 3rem;
    width: 3rem;
}

/* interchanges with ratingGreen */
.rating-bg-rank {
    background-color: var(--color-warning);
    border-radius: 50%;
    height: 3rem;
    width: 3rem;
    z-index: 4;
}

.sidebox {
    z-index: 1;
}
</style>