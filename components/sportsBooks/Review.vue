<script setup>
const { post } = defineProps(['post'])

let lastKnownScrollPosition = 0;
let changePosition = ref(false)

// Handling classes color depending on sportsbookRating prop  
let rankCheck = computed(() => {
    return post?.acf.sportsbookRating > 3.5 ? true : false
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
    <!-- ======= Review Intro ======= -->
    <section id="review-intro" class="casino-review sections-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="review-main">
                        <img :src="post._embedded['wp:featuredmedia'][0].source_url" class="review-logo img-thumbnail"
                            alt="">
                        <h2 class="review-title">{{ post?.acf.sportsbookName }}</h2>
                    </div>



                    <div class="rating-intro">
                        <div class="review-rating mt-5">
                            <div class="rating-circle">
                                <span class="rating-number">{{ post?.acf.sportsbookRating }}</span>
                                <div :class="[rankCheck ? 'ratingGreen' : 'rating-bg-rank']"></div>
                            </div>
                            <div class="rating-info">
                                <span class="rating-label">Sportsbook Rank</span>
                                <span class="rating-text">Trusted</span>
                            </div>
                        </div>

                        <!-- <div class="review-rating mt-5">
                            <div class="rating-circle">
                                <span class="rating-number">8.8</span>
                                <div class="rating-bg-player"></div>
                            </div>
                            <div class="rating-info">
                                <span class="rating-label">Player Rating</span>
                                <span class="rating-text"><a href="#">500 reviews</a></span>
                            </div>
                        </div> -->
                    </div>

                    <div class="mt-4">
                        <span class="rating-text-small">On our website, we offer objective and detailed reviews of
                            sportsbooks, thanks to our extensive experience in the sports betting sector. </span>
                    </div>

                    <!-- <div class="review-intro-info mt-4">
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
                                <li v-for="pros in post?.acf.sportsbookPros">{{ pros }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="bi bi-hand-thumbs-down"></i>What we don't like</h5>
                            <ul>
                                <li v-for="cons in post?.acf.sportsbookCons">{{ cons }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Review Sidebar -->
                <div class="col-lg-4 sidebox">
                    <div :class="[changePosition ? 'sidebar-stop' : 'sidebar-review']">

                        <div class="rating-intro">
                            <div class="review-rating">
                                <div class="rating-circle">
                                    <span class="rating-number">{{ post?.acf.sportsbookRating }}</span>
                                    <div :class="[rankCheck ? 'ratingGreen' : 'rating-bg-rank']"></div>
                                </div>
                                <div class="rating-info">
                                    <span class="rating-label">Sportsbook Rank</span>
                                    <span class="rating-text">Trusted</span>
                                </div>
                            </div>

                            <!-- <div class="review-rating">
                                <div class="rating-circle">
                                    <span class="rating-number">8.8</span>
                                    <div class="rating-bg-player"></div>
                                </div>
                                <div class="rating-info">
                                    <span class="rating-label">Player Rating</span>
                                    <span class="rating-text"><a href="#">500 reviews</a></span>
                                </div>
                            </div> -->
                        </div>

                        <div class="review-visit">

                            <NuxtLink v-if="post?.acf.affiliateLink" :to="post?.acf.affiliateLink ? post?.acf.affiliateLink : post?.acf.sportsbookUrl"
                                target="_blank" :rel="post?.acf.affiliateLink ? 'noopener' : 'nofollow noopener'">
                                <button type="button" class="primary-btn">
                                    Visit Sportsbook
                                </button>
                            </NuxtLink>

                            <NuxtLink v-if="post?.acf.affiliateTerms" :to="post?.acf.affiliateTerms ? post?.acf.affiliateTerms : post?.acf.sportsbookTerms"
                                target="_blank" :rel="post?.acf.affiliateTerms ? 'noopener' : 'nofollow noopener'">T&C Apply
                            </NuxtLink>
                        </div>

                        <div class="review-bonus">
                            <p>Welcome Bonus</p>
                            <h4>{{ post?.acf.sportsbookBonusTitle }}</h4>
                            <NuxtLink v-if="post?.acf.affiliateBonus" :to="post?.acf.affiliateBonus ? post?.acf.affiliateBonus : post?.acf.sportsbookBonusUrl"
                                target="_blank" :rel="post?.acf.affiliateBonus ? 'noopener' : 'nofollow noopener'">
                                <button type="button" class="primary-btn">Claim offer and play</button>
                            </NuxtLink>
                            <NuxtLink v-if="post?.acf.affiliateTerms" :to="post?.acf.affiliateTerms ? post?.acf.affiliateTerms : post?.acf.sportsbookTerms"
                                target="_blank" :rel="post?.acf.affiliateTerms ? 'noopener' : 'nofollow noopener'"> Full
                                terms apply</NuxtLink>
                        </div>

                        <!-- <div class="mt-3">
                            <a href="#" class="">Show all bonuses ??? <i class="bi bi-chevron-right"></i></a>
                        </div> -->
                    </div><!-- End Sidebar -->
                </div>

            </div>
        </div>
    </section>


    <section id="review-details" class="review-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-tabs">
                        <!-- Tabs -->
                        <SportsBooksReviewTabsNav />
                        <!-- Tab Content -->
                        <div class="tab-content" id="myTabContent">
                            <SportsBooksReviewTabGeneralPane :website="post?.acf.sportsbookUrl"
                                :languages="post?.acf.sportsbookLang" :established="post?.acf.sportsbookEst"
                                :company="post?.acf.sportsbookCompany" :licenses="post?.acf.sportsbookLicences"
                                :affiliateProgram="post?.acf.sportsbookAffiliate"
                                :acceptedCountries="post?.acf.sportsbookAccCountries"
                                :restrictedCountries="post?.acf.sportsbookResCountries"
                                :sportsbookType="post?.acf.sportsbookType" :affiliateLink="post?.acf.affiliateLink" />

                            <SportsBooksReviewTabPaymentsPane :depositMethods="post?.acf.sportsbookDepositMethods"
                                :currencies="post?.acf.sportsbookCurrencies"
                                :withdrawalMethods="post?.acf.sportsbookWithdrawalMethods"
                                :withdrawalTimes="post?.acf.sportsbookWithdrawalTimes"
                                :withdrawalLimit="post?.acf.sportsbookWithdrawalLimit" />

                            <SportsBooksReviewTabGamesPane :gameProviders="post?.acf.sportsbookProviders" />

                            <SportsBooksReviewTabResponsibleGamingPane :depositTool="post?.acf.sportsbookDepositTool"
                                :wagerTool="post?.acf.sportsbookWagerLimit" :lossLimit="post?.acf.sportsbookLossLimit"
                                :timeLimit="post?.acf.sportsbookTimeLimit" :selfExclusion="post?.acf.sportsbookSelfExclusion"
                                :coolOff="post?.acf.sportsbookCoolOff" :realityCheck="post?.acf.sportsbookRealityCheck"
                                :selfAssessment="post?.acf.sportsbookSelfAssessment"
                                :withdrawalLock="post?.acf.sportsbookWithdrawalLock" />

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <hr>
                    <div class="description" v-html="post.content.rendered">
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