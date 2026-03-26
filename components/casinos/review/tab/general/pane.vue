<script setup>
const {
    website, languages, established, company, licenses,
    affiliateProgram, acceptedCountries, restrictedCountries, casinoType, affiliateLink
} = defineProps([
    'website', 'languages', 'established', 'company', 'licenses',
    'affiliateProgram', 'acceptedCountries', 'restrictedCountries', 'casinoType', 'affiliateLink'
])
</script>

<template>
    <div class="tab-pane fade show active" id="general-tab-pane" role="tabpanel" aria-labelledby="general-tab" tabindex="0">
        <div class="row">
            <div class="col-md-6">
                <CasinosReviewTabGeneralWebsite :website="website" :affiliateLink="affiliateLink" />
                <CasinosReviewTabGeneralLang :languages="languages" />
                <CasinosReviewTabGeneralEst :established="established" />
                <CasinosReviewTabGeneralCompany :company="company" />
                <CasinosReviewTabGeneralLicences :licenses="licenses" />
            </div>
            <div class="col-md-6">
                <CasinosReviewTabGeneralAffiliate :affiliateProgram="affiliateProgram" />
                <CasinosReviewTabGeneralRestricted v-if="restrictedCountries" :restrictedCountries="restrictedCountries" />
                <CasinosReviewTabGeneralAccepted v-if="acceptedCountries" :acceptedCountries="acceptedCountries" />
                <CasinosReviewTabGeneralCasinoType :casinoType="casinoType" />
            </div>
        </div>

    </div>
</template>


<style scoped></style>