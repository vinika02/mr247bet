<script setup>
definePageMeta({
    layout: 'blank'
})

const pageTitle = 'MR247BET Featured Offer — FreddyVegas'
const pageDescription = 'MR247BET featured offer: the FreddyVegas welcome package — 666% + 250 Free Spins across three deposits. New players only, 18+.'

// AFFILIATE TRACKING — single source of truth.
// Every call-to-action on this page points to this one tracked deep-link.
// There are NO other outbound links on this page (no untracked leaks).
// To attribute per placement later, vary the mediaCode segment.
const AFF_LINK = 'https://www.freddyvegas.com/deep/player--register/mediaCode/textlink/affiliate/49149'

useHead({
    title: pageTitle,
    meta: [
        { name: 'description', content: pageDescription },
        { name: 'robots', content: 'noindex,nofollow' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1, viewport-fit=cover' },
    ],
    link: [
        { rel: 'preconnect', href: 'https://fonts.googleapis.com' },
        { rel: 'preconnect', href: 'https://fonts.gstatic.com', crossorigin: '' },
        { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css2?family=Anton&family=Manrope:wght@400;500;600;700;800&display=swap' },
    ],
    bodyAttrs: {
        style: 'background:#08070F',
    },
})
</script>

<template>
    <div class="fv-page">
        <div class="topbar">
            <div class="brand"><img src="~/assets/img/mr247bet.svg" alt="mr247bet-logo" class="brand-logo"> <span style="color:var(--faint);font-weight:600">· Featured Offer</span></div>
            <span class="pill18">18+</span>
        </div>
        <header class="hero">
            <div class="wrap">
                <div class="eyebrow">★ MR247BET Featured Offer</div>
                <h1><span class="thin">Step into</span>FreddyVegas</h1>
                <div class="offer">666%<span class="plus">+</span><span class="fs">250 Free Spins</span></div>
                <p class="lede">A three-part welcome package for new players, highlighted by MR247BET.</p>
                <div class="cta-row">
                    <a class="fv-btn btn-gold" :href="AFF_LINK" target="_blank" rel="noopener sponsored">Claim the offer →</a>
                    <a class="fv-btn btn-ghost" href="#breakdown">See breakdown</a>
                </div>
                <p class="disc">New players only. Promotional terms and wagering requirements apply.</p>
            </div>
        </header>
        <section class="band" id="breakdown">
            <div class="wrap">
                <div class="sec-label">Welcome package · 3 deposits</div>
                <h2 class="sec-title">The breakdown</h2>
                <p class="sec-sub">One package, split across your first three qualifying deposits.</p>
                <div class="deps">
                    <div class="dep"><div class="no">01</div><div class="pct">222%</div><div class="up">up to €2,000</div><div class="spins">+ 100 Free Spins</div><div class="when">First qualifying deposit</div></div>
                    <div class="dep"><div class="no">02</div><div class="pct">222%</div><div class="up">up to €1,000</div><div class="spins">+ 50 Free Spins</div><div class="when">Second qualifying deposit</div></div>
                    <div class="dep"><div class="no">03</div><div class="pct">222%</div><div class="up">up to €500</div><div class="spins">+ 100 Free Spins</div><div class="when">Third qualifying deposit</div></div>
                </div>
                <div class="badges">
                    <span class="fv-badge">★ <b>Featured</b> by MR247BET</span>
                    <span class="fv-badge">🔒 Secure redirect to <b>FreddyVegas</b></span>
                    <span class="fv-badge">📱 Built <b>mobile-first</b></span>
                </div>
            </div>
        </section>
        <section class="band how">
            <div class="wrap">
                <div class="sec-label">One offer · three stages</div>
                <h2 class="sec-title">How it works</h2>
                <div class="steps3">
                    <div class="st"><div class="stn">1</div><h3>Start with 222%</h3><p>Up to €2,000 plus 100 Free Spins on your first qualifying deposit.</p></div>
                    <div class="st"><div class="stn">2</div><h3>Continue with 222%</h3><p>Up to €1,000 plus 50 Free Spins on your second qualifying deposit.</p></div>
                    <div class="st"><div class="stn">3</div><h3>Finish with 222%</h3><p>Up to €500 plus 100 Free Spins on your third qualifying deposit.</p></div>
                </div>
            </div>
        </section>
        <section class="band">
            <div class="wrap terms">
                <div class="sec-label">Good to know</div>
                <h2 class="sec-title">Key terms</h2>
                <ul>
                    <li><span>Offer available to <b>new players only</b>, 18+.</span></li>
                    <li><span>Applies to the first three qualifying deposits.</span></li>
                    <li><span>Bonuses and free spins carry <b>wagering requirements</b>.</span></li>
                    <li><span>Full bonus terms, eligibility and country restrictions are shown on FreddyVegas before you opt in.</span></li>
                </ul>
                <p class="note">You'll continue to FreddyVegas to review the full promotion details and terms before participating.</p>
            </div>
        </section>
        <section class="band final">
            <div class="wrap">
                <h2 class="sec-title">Ready to play?</h2>
                <p class="sec-sub">Continue to FreddyVegas to claim the welcome package.</p>
                <a class="fv-btn btn-gold" :href="AFF_LINK" target="_blank" rel="noopener sponsored">Continue to FreddyVegas →</a>
            </div>
        </section>
        <footer>
            <div class="wrap">
                <p class="rg">This page highlights a third-party promotional offer and redirects visitors to FreddyVegas. <strong>18+ only.</strong> Terms, eligibility and wagering requirements apply. Gambling can be addictive — please play responsibly.</p>
                <p class="fine">© MR247BET · Featured Offer</p>
            </div>
        </footer>
        <div class="sticky">
            <a class="fv-btn btn-gold" :href="AFF_LINK" target="_blank" rel="noopener sponsored">Claim the offer →</a>
        </div>
    </div>
</template>

<style scoped>
/* Ported from the supplied freddyvegas-landing.html (REL-265).
   Global selectors (body, *) are scoped to .fv-page, and .btn/.badge are
   renamed fv-btn/fv-badge so the site's Bootstrap styles don't bleed in. */
.fv-page {
    --bg: #08070F; --bg2: #0F0E1C; --card: #16152A; --card2: #1D1B34; --line: #2A2844;
    --gold: #F6C948; --gold-2: #E0A81E; --violet: #8B5CF6; --violet-2: #6D3BE0;
    --text: #F5F3FA; --muted: #A7A3BE; --faint: #6E6A88; --good: #3ED08A;
    background: var(--bg); color: var(--text); font-family: "Manrope", system-ui, -apple-system, Segoe UI, Roboto, sans-serif; line-height: 1.55; -webkit-font-smoothing: antialiased; overflow-x: hidden; min-height: 100vh;
}
.fv-page * { box-sizing: border-box; margin: 0 }
@media (prefers-reduced-motion:reduce) { .fv-page * { animation: none !important; transition: none !important } }
.fv-page a { color: inherit }
.wrap { width: 100%; max-width: 1080px; margin: 0 auto; padding: 0 20px }
.topbar { display: flex; align-items: center; justify-content: space-between; padding: 16px 20px; max-width: 1080px; margin: 0 auto; gap: 12px }
.brand { display: flex; align-items: center; gap: 9px; font-weight: 800; letter-spacing: .02em; font-size: 15px }
.brand-logo { height: 30px; width: auto }
.pill18 { font-size: 12px; font-weight: 700; color: var(--gold); border: 1px solid var(--gold-2); border-radius: 999px; padding: 4px 10px; letter-spacing: .04em }
.hero { position: relative; text-align: center; padding: 34px 0 48px; overflow: hidden }
.hero::before { content: ""; position: absolute; inset: -40% 50% auto 50%; transform: translateX(-50%); width: 900px; max-width: 140vw; height: 640px; background: radial-gradient(closest-side, rgba(246,201,72,.22), rgba(139,92,246,.10) 55%, transparent 72%); pointer-events: none; z-index: 0 }
.hero > * { position: relative; z-index: 1 }
.eyebrow { font-size: 12.5px; font-weight: 700; letter-spacing: .22em; text-transform: uppercase; color: var(--gold); margin-bottom: 18px }
h1 { font-family: "Anton", Impact, sans-serif; font-weight: 400; letter-spacing: .005em; line-height: .98; font-size: clamp(34px, 8vw, 66px); text-transform: uppercase; color: var(--text) }
h1 .thin { display: block; font-size: .4em; letter-spacing: .14em; color: var(--muted); font-family: "Manrope"; font-weight: 700; text-transform: uppercase; margin-bottom: 10px }
.offer { font-family: "Anton", Impact, sans-serif; font-size: clamp(46px, 13vw, 120px); line-height: .9; margin-top: 14px; background: linear-gradient(180deg, #FFE9A8, var(--gold) 45%, var(--gold-2)); -webkit-background-clip: text; background-clip: text; color: transparent; filter: drop-shadow(0 6px 30px rgba(246,201,72,.25)) }
.offer .plus { -webkit-text-fill-color: var(--text); color: var(--text); font-size: .42em; vertical-align: middle; margin: 0 .12em; filter: none }
.offer .fs { display: block; font-size: .34em; letter-spacing: .04em; color: var(--text); -webkit-text-fill-color: var(--text); filter: none; margin-top: 6px }
.lede { color: var(--muted); max-width: 44ch; margin: 20px auto 0; font-size: clamp(15px, 2.4vw, 18px) }
.cta-row { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; margin-top: 30px }
.fv-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; font-weight: 800; font-size: 16px; border-radius: 14px; padding: 16px 30px; text-decoration: none; cursor: pointer; border: 0; transition: transform .12s ease, box-shadow .12s ease; letter-spacing: .01em }
.fv-page .btn-gold { background: linear-gradient(180deg, var(--gold), var(--gold-2)); color: #26200A; box-shadow: 0 10px 30px rgba(246,201,72,.28) }
.fv-page .btn-gold:hover { transform: translateY(-2px); box-shadow: 0 14px 38px rgba(246,201,72,.38); color: #26200A }
.fv-page .btn-ghost { background: transparent; color: var(--text); border: 1px solid var(--line) }
.fv-page .btn-ghost:hover { border-color: var(--gold-2); color: var(--gold) }
.disc { color: var(--faint); font-size: 12.5px; margin-top: 22px }
section { position: relative; z-index: 1; overflow: visible }
.band { padding: 44px 0 }
.sec-label { text-align: center; font-size: 12.5px; font-weight: 700; letter-spacing: .2em; text-transform: uppercase; color: var(--violet); margin-bottom: 8px }
.sec-title { font-family: "Anton", Impact, sans-serif; font-weight: 400; color: var(--text); text-transform: uppercase; text-align: center; font-size: clamp(26px, 5vw, 40px); line-height: 1; letter-spacing: .01em; margin-bottom: 8px }
.sec-sub { text-align: center; color: var(--muted); max-width: 52ch; margin: 0 auto 30px }
.deps { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px }
@media(max-width:760px) { .deps { grid-template-columns: 1fr } }
.dep { background: linear-gradient(180deg, var(--card2), var(--card)); border: 1px solid var(--line); border-radius: 18px; padding: 26px 22px; position: relative; overflow: hidden }
.dep::after { content: ""; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, var(--gold), var(--violet)) }
.dep .no { font-family: "Anton", Impact, sans-serif; font-size: 40px; color: var(--line); line-height: 1 }
.dep .pct { font-family: "Anton", Impact, sans-serif; font-size: clamp(30px, 6vw, 42px); color: var(--gold); line-height: 1; margin-top: 6px }
.dep .up { font-weight: 800; font-size: 19px; margin-top: 4px }
.dep .spins { color: var(--violet); font-weight: 700; margin-top: 10px; font-size: 15px }
.dep .when { color: var(--faint); font-size: 13px; margin-top: 12px; border-top: 1px solid var(--line); padding-top: 12px }
.badges { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; margin-top: 28px }
.fv-badge { display: inline-flex; align-items: center; gap: 8px; background: var(--card); border: 1px solid var(--line); border-radius: 999px; padding: 9px 16px; font-size: 13.5px; color: var(--muted); font-weight: 600 }
.fv-badge b { color: var(--text); font-weight: 700 }
.how { background: var(--bg2); border-top: 1px solid var(--line); border-bottom: 1px solid var(--line) }
.steps3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 10px }
@media(max-width:760px) { .steps3 { grid-template-columns: 1fr } }
.st { text-align: center; padding: 8px }
.st .stn { width: 44px; height: 44px; border-radius: 50%; margin: 0 auto 12px; display: flex; align-items: center; justify-content: center; font-family: "Anton"; font-size: 20px; color: var(--gold); border: 1px solid var(--gold-2); background: rgba(246,201,72,.06) }
.st h3 { font-family: "Manrope", system-ui, sans-serif; font-size: 17px; font-weight: 800; margin-bottom: 4px; color: var(--text) }
.st p { color: var(--muted); font-size: 14px }
.terms { max-width: 760px; margin: 0 auto }
.terms ul { list-style: none; padding: 0; margin: 18px 0 0; display: grid; gap: 10px }
.terms li { display: flex; gap: 10px; color: var(--muted); font-size: 14px; align-items: flex-start }
.terms li::before { content: ""; flex: 0 0 auto; width: 7px; height: 7px; border-radius: 50%; background: var(--gold); margin-top: 8px }
.terms .note { color: var(--faint); font-size: 13px; margin-top: 16px; text-align: center }
.final { text-align: center; padding: 54px 0 60px }
.final::before { content: ""; position: absolute; inset: auto 50% 0 50%; transform: translateX(-50%); width: 760px; max-width: 120vw; height: 340px; background: radial-gradient(closest-side, rgba(139,92,246,.20), transparent 72%); z-index: 0; pointer-events: none }
.final > * { position: relative; z-index: 1 }
footer { background: #050409; border-top: 1px solid var(--line); padding: 30px 0 120px; text-align: center }
footer .rg { color: var(--muted); font-size: 13px; max-width: 640px; margin: 0 auto; line-height: 1.7 }
footer .rg strong { color: var(--gold) }
footer .fine { color: var(--faint); font-size: 12px; margin-top: 14px }
.sticky { position: fixed; left: 0; right: 0; bottom: 0; z-index: 50; padding: 12px 16px calc(12px + env(safe-area-inset-bottom)); background: linear-gradient(180deg, rgba(8,7,15,0), var(--bg) 34%); display: none }
.sticky .fv-btn { width: 100%; padding: 16px }
@media(max-width:760px) { .sticky { display: block } footer { padding-bottom: 120px } }
</style>
