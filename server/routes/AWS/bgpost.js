export default defineEventHandler( (event) => {

    const config = useRuntimeConfig()
    
    const {slug}=getQuery(event)
    // Gets only wp:featuredmedia without unnecessary
    // _embed&_fields=_links.wp:featuredmedia,_embedded.wp:featuredmedia,id,acf
return $fetch(
    `${config.wpURI}/wp-json/wp/v2/posts?_embed&_fields=
    _links.wp:featuredmedia
    ,_embedded.wp:featuredmedia,
    id,
    title.rendered,
    content.rendered,
    date,
    tags
    &slug=${slug}`,
{
    method:'GET'
}
)
})