export default defineEventHandler( (event) => {

    const config = useRuntimeConfig()
    
    const {slug}=getQuery(event)
     
    // return $fetch(`${config.wpURI}/wp-json/wp/v2/posts?_embed=1&slug=${slug}`,

    // Optimized API fields
    return $fetch(`${config.wpURI}/wp-json/wp/v2/posts?_embed=1&slug=${slug}&_fields=
    _links.wp:featuredmedia,
    _embedded.wp:featuredmedia,
    id,
    title.rendered,
    content.rendered,
    acf,
    slug`,
    {
        method:'GET'
    }
    )
    })