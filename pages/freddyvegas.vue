<script setup>
definePageMeta({
    layout: 'blank'
})

const route = useRoute()
const pageTitle = 'MR247BET Featured Offer — FreddyVegas'
const pageDescription = 'MR247BET featured FreddyVegas welcome offer.'
const targetBase = 'https://www.freddyvegas.com/deep/player--register/mediaCode/textlink/affiliate/49149'

// Preserve any query params from the incoming link (e.g. email tracking) and
// forward them onto the FreddyVegas affiliate deep link.
const trackedHref = computed(() => {
    const url = new URL(targetBase)
    for (const [key, value] of Object.entries(route.query)) {
        if (value === undefined) continue
        url.searchParams.set(key, Array.isArray(value) ? value[0] : value)
    }
    return url.toString()
})

useHead({
    title: pageTitle,
    link: [
        { rel: 'canonical', href: 'https://www.mr247bet.com' + route.path },
    ],
})

useServerSeoMeta({
    description: pageDescription,
    ogTitle: pageTitle,
    ogType: 'website',
    ogUrl: 'https://www.mr247bet.com' + route.path,
    ogSiteName: 'Mr247Bet',
    ogLocale: 'en_US',
    ogDescription: pageDescription,
    twitterCard: 'summary_large_image',
    twitterTitle: pageTitle,
    twitterDescription: pageDescription,
})
</script>

<template>
    <div class="fv-page">
        <header class="wrap fv-topbar">
            <div class="brand">
                <img src="~/assets/img/mr247bet.svg" alt="mr247bet-logo" class="brand-logo">
                <small>FEATURED PICKS</small>
            </div>
            <div class="age">18+ · Play responsibly</div>
        </header>

        <main>
            <section class="wrap fv-hero">
                <div>
                    <div class="eyebrow">★ MR247BET Featured Offer</div>
                    <h1>Step into <span class="grad">FreddyVegas</span></h1>
                    <div class="offerline"><b>666%</b> + 250 Free Spins</div>
                    <p class="sub">A three-part welcome package for new players — highlighted by MR247BET.</p>
                    <div class="cta-row">
                        <a class="cta" :href="trackedHref" rel="nofollow sponsored">VIEW THE OFFER →</a>
                        <a class="cta secondary" href="#breakdown">SEE BREAKDOWN</a>
                    </div>
                    <p class="micro">New players only. Promotional terms and wagering requirements apply.</p>
                </div>

                <aside class="hero-card" id="breakdown">
                    <div class="fv">Freddy<span>Vegas</span></div>
                    <div class="package-label">WELCOME PACKAGE · 3 DEPOSITS</div>

                    <div class="cards">
                        <div class="offer-card">
                            <div class="num">01</div>
                            <div><strong>222% up to €2,000 + 100 Free Spins</strong><span>First qualifying deposit</span></div>
                        </div>
                        <div class="offer-card">
                            <div class="num">02</div>
                            <div><strong>222% up to €1,000 + 50 Free Spins</strong><span>Second qualifying deposit</span></div>
                        </div>
                        <div class="offer-card">
                            <div class="num">03</div>
                            <div><strong>222% up to €500 + 100 Free Spins</strong><span>Third qualifying deposit</span></div>
                        </div>
                    </div>
                </aside>
            </section>

            <section class="wrap trust" aria-label="Offer highlights">
                <div>★ Featured by MR247BET</div>
                <div>🔒 Secure redirect to FreddyVegas</div>
                <div>📱 Built mobile-first</div>
            </section>

            <section class="wrap section">
                <h2>One offer. Three stages.</h2>
                <p class="section-intro">Keep the journey simple: arrive from the email, understand the featured package immediately, then continue directly to FreddyVegas.</p>

                <div class="steps">
                    <article class="step">
                        <span class="tag">Stage 01</span>
                        <h3>Start with 222%</h3>
                        <p>Up to €2,000 plus 100 Free Spins on the first qualifying deposit.</p>
                    </article>
                    <article class="step">
                        <span class="tag">Stage 02</span>
                        <h3>Continue with 222%</h3>
                        <p>Up to €1,000 plus 50 Free Spins on the second qualifying deposit.</p>
                    </article>
                    <article class="step">
                        <span class="tag">Stage 03</span>
                        <h3>Finish with 222%</h3>
                        <p>Up to €500 plus 100 Free Spins on the third qualifying deposit.</p>
                    </article>
                </div>
            </section>

            <section class="wrap final">
                <h2>Ready to see the FreddyVegas offer?</h2>
                <p>You'll continue to FreddyVegas to review the full promotion details, eligibility and terms before participating.</p>
                <a class="cta" :href="trackedHref" rel="nofollow sponsored">CONTINUE TO FREDDYVEGAS →</a>
            </section>
        </main>

        <footer>
            <div class="wrap foot">
                <div>
                    <strong class="foot-title">MR247BET Featured Offer</strong>
                    <p>This page highlights a third-party promotional offer and redirects visitors to FreddyVegas. 18+ only. Terms, eligibility and wagering requirements apply.</p>
                    <p>Gambling can be addictive. Please play responsibly.</p>
                </div>
                <div>
                    <p><a href="https://www.freddyvegas.com/en/bonus_terms" rel="nofollow">Bonus Terms</a></p>
                    <p><a href="https://www.freddyvegas.com/en/" rel="nofollow">FreddyVegas</a></p>
                </div>
            </div>
        </footer>
    </div>
</template>

<style scoped>
.fv-page {
    --bg: #070913;
    --panel: #0f1322;
    --panel2: #151a2d;
    --text: #f7f8fb;
    --muted: #a8afc2;
    --gold: #ffc928;
    --gold2: #ffad0a;
    --red: #ff4a55;
    --line: rgba(255, 255, 255, .10);
    --shadow: 0 24px 80px rgba(0, 0, 0, .48);

    margin: 0;
    min-height: 100vh;
    font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    color: var(--text);
    background:
        radial-gradient(circle at 78% 0%, rgba(255, 201, 40, .16), transparent 30%),
        radial-gradient(circle at 12% 22%, rgba(255, 74, 85, .13), transparent 30%),
        var(--bg);
    line-height: 1.5;
}

.fv-page * {
    box-sizing: border-box;
}

.fv-page a {
    text-decoration: none;
    color: inherit;
}

.wrap {
    width: min(1120px, calc(100% - 32px));
    margin: auto;
}

.fv-topbar {
    min-height: 72px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid var(--line);
}

.brand {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 900;
    letter-spacing: .04em;
    font-size: 22px;
}

.brand-logo {
    height: 34px;
    width: auto;
}

.brand small {
    display: block;
    font-size: 9px;
    letter-spacing: .19em;
    color: var(--muted);
    font-weight: 800;
    margin-top: 2px;
}

.age {
    border: 1px solid rgba(255, 255, 255, .18);
    border-radius: 99px;
    padding: 7px 11px;
    color: #d7dbea;
    font-size: 12px;
    font-weight: 800;
}

.fv-hero {
    display: grid;
    grid-template-columns: 1.08fr .92fr;
    gap: 54px;
    align-items: center;
    padding: 78px 0 50px;
}

.eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    border-radius: 99px;
    background: rgba(255, 201, 40, .10);
    border: 1px solid rgba(255, 201, 40, .24);
    color: #ffe58d;
    font-size: 12px;
    font-weight: 900;
    letter-spacing: .08em;
    text-transform: uppercase;
}

h1 {
    font-size: clamp(46px, 6vw, 78px);
    line-height: .98;
    margin: 20px 0 16px;
    letter-spacing: -.055em;
}

.grad {
    background: linear-gradient(90deg, #fff 0%, #ffe187 42%, var(--gold) 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.sub {
    font-size: clamp(18px, 2vw, 22px);
    color: #c6cada;
    max-width: 640px;
    margin: 0 0 26px;
}

.offerline {
    font-size: clamp(31px, 4vw, 52px);
    font-weight: 950;
    letter-spacing: -.04em;
    margin: 10px 0 8px;
}

.offerline b {
    color: var(--gold);
}

.micro {
    color: var(--muted);
    font-size: 13px;
}

.cta-row {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin: 28px 0 14px;
}

.cta {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 54px;
    padding: 0 24px;
    border-radius: 14px;
    font-weight: 950;
    background: linear-gradient(135deg, var(--gold), var(--gold2));
    color: #16130b;
    box-shadow: 0 16px 38px rgba(255, 185, 15, .22);
    transition: .18s ease;
}

.cta:hover {
    transform: translateY(-1px);
    filter: brightness(1.05);
}

.secondary {
    background: transparent;
    color: #fff;
    border: 1px solid rgba(255, 255, 255, .17);
    box-shadow: none;
}

.hero-card {
    position: relative;
    overflow: hidden;
    border-radius: 26px;
    padding: 28px;
    background:
        linear-gradient(145deg, rgba(255, 255, 255, .06), rgba(255, 255, 255, .015)),
        var(--panel);
    border: 1px solid rgba(255, 255, 255, .12);
    box-shadow: var(--shadow);
}

.hero-card:before {
    content: "";
    position: absolute;
    width: 260px;
    height: 260px;
    border-radius: 50%;
    background: rgba(255, 201, 40, .12);
    right: -90px;
    top: -100px;
    filter: blur(6px);
}

.fv {
    font-weight: 950;
    letter-spacing: -.04em;
    font-size: 34px;
    margin-bottom: 4px;
}

.fv span {
    color: var(--gold);
}

.package-label {
    color: var(--muted);
    font-size: 13px;
}

.cards {
    display: grid;
    gap: 12px;
    margin-top: 22px;
}

.offer-card {
    display: grid;
    grid-template-columns: 48px 1fr;
    gap: 14px;
    align-items: center;
    padding: 15px;
    border-radius: 16px;
    background: rgba(255, 255, 255, .035);
    border: 1px solid rgba(255, 255, 255, .085);
}

.num {
    width: 42px;
    height: 42px;
    border-radius: 13px;
    display: grid;
    place-items: center;
    background: rgba(255, 201, 40, .12);
    border: 1px solid rgba(255, 201, 40, .26);
    color: var(--gold);
    font-weight: 950;
}

.offer-card strong {
    display: block;
    font-size: 17px;
}

.offer-card span {
    color: var(--muted);
    font-size: 13px;
}

.trust {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    padding: 26px 0 54px;
}

.trust div {
    text-align: center;
    padding: 16px;
    border: 1px solid var(--line);
    border-radius: 16px;
    background: rgba(255, 255, 255, .025);
    color: #d9ddec;
    font-size: 13px;
    font-weight: 800;
}

.section {
    padding: 46px 0;
}

.section h2 {
    font-size: clamp(30px, 4vw, 46px);
    letter-spacing: -.04em;
    margin: 0 0 12px;
}

.section-intro {
    color: var(--muted);
    max-width: 660px;
    margin-bottom: 25px;
}

.steps {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}

.step {
    padding: 22px;
    border-radius: 18px;
    background: var(--panel);
    border: 1px solid var(--line);
}

.step .tag {
    display: inline-block;
    color: var(--gold);
    font-size: 12px;
    font-weight: 950;
    letter-spacing: .08em;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.step h3 {
    margin: 0 0 6px;
    font-size: 20px;
}

.step p {
    margin: 0;
    color: var(--muted);
    font-size: 14px;
}

.final {
    margin: 48px auto 72px;
    padding: 34px;
    border-radius: 24px;
    text-align: center;
    background: linear-gradient(145deg, rgba(255, 201, 40, .13), rgba(255, 74, 85, .07));
    border: 1px solid rgba(255, 201, 40, .18);
}

.final h2 {
    margin: 0 0 8px;
    font-size: clamp(30px, 4vw, 44px);
    letter-spacing: -.04em;
}

.final p {
    margin: 0 auto 22px;
    color: #ccd0dc;
    max-width: 620px;
}

footer {
    padding: 28px 0 44px;
    border-top: 1px solid var(--line);
    color: #888fa3;
    font-size: 11px;
}

footer .foot {
    display: flex;
    justify-content: space-between;
    gap: 24px;
    align-items: flex-start;
}

footer .foot-title {
    color: #c7cbd8;
}

footer p {
    margin: 4px 0;
    max-width: 780px;
}

footer a {
    text-decoration: underline;
}

@media(max-width:820px) {
    .fv-hero {
        grid-template-columns: 1fr;
        gap: 30px;
        padding-top: 50px;
    }

    .trust,
    .steps {
        grid-template-columns: 1fr;
    }

    .fv-topbar {
        min-height: 64px;
    }

    footer .foot {
        display: block;
    }
}

@media(max-width:520px) {
    .wrap {
        width: min(100% - 22px, 1120px);
    }

    .fv-hero {
        padding-top: 34px;
    }

    .hero-card {
        padding: 20px;
    }

    .cta {
        width: 100%;
    }

    h1 {
        font-size: 48px;
    }
}
</style>
