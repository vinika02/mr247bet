export default defineEventHandler( (event) => {

    const config = useRuntimeConfig()
    
    const {categoryId,perPage,page}=getQuery(event)
   
    // get posts related to categoryId
    return $fetch(`${config.wpURI}/wp-json/wp/v2/posts?_embed=1&categories=${categoryId}&per_page=${perPage}&page=${page} &_fields=
    _links.wp:featuredmedia,
    _embedded.wp:featuredmedia,
    id,
    title.rendered,
    date,
    slug`)
      })