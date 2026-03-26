export default defineEventHandler( (event) => {

const config = useRuntimeConfig()

const {perPage,page,categories}=getQuery(event)

// for casinos:
// &categories=28

// for sportsbooks:
// &categories=76

  // Optimized API fields
    return $fetch(`${config.wpURI}/wp-json/wp/v2/posts?_embed&per_page=${perPage}&page=${page}&categories=${categories}
    &_fields=
    _links.wp:featuredmedia,
    _embedded.wp:featuredmedia,
    id,
    title.rendered,
    content.rendered,
    acf,
    slug`,{
      method:'GET'
    }
    )
})