<script setup>
const {
    website, languages, established, company, licenses,
    affiliateProgram, acceptedCountries, restrictedCountries, sportsbookType, affiliateLink
} = defineProps([
    'website', 'languages', 'established', 'company', 'licenses',
    'affiliateProgram', 'acceptedCountries', 'restrictedCountries', 'sportsbookType', 'affiliateLink'
])
</script>

<template>
    <div class="tab-pane fade show active" id="general-tab-pane" role="tabpanel" aria-labelledby="general-tab" tabindex="0">
        <div class="row">
            <div class="col-md-6">
                <SportsBooksReviewTabGeneralWebsite :website="website" :affiliateLink="affiliateLink" />
                <SportsBooksReviewTabGeneralLang :languages="languages" />
                <SportsBooksReviewTabGeneralEst :established="established" />
                <SportsBooksReviewTabGeneralCompany :company="company" />
                <SportsBooksReviewTabGeneralLicences :licenses="licenses" />
            </div>
            <div class="col-md-6">
                <SportsBooksReviewTabGeneralAffiliate :affiliateProgram="affiliateProgram" />
                <SportsBooksReviewTabGeneralRestricted v-if="restrictedCountries"
                    :restrictedCountries="restrictedCountries" />
                <SportsBooksReviewTabGeneralAccepted v-if="acceptedCountries" :acceptedCountries="acceptedCountries" />
                <SportsBooksReviewTabGeneralCasinoType :sportsbookType="sportsbookType" />
            </div>
        </div>

    </div>
</template>


<style scoped></style>