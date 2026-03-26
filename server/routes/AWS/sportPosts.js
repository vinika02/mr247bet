

export default defineEventHandler( (event) => {
    
    const {perPage,page}=getQuery(event)
    // Fetching posts from old project
      return $fetch(`https://mr247bet.com/news/index.php/wp-json/wp/v2/posts?_embed&per_page=${perPage}&page=${page}&_fields=
      _links.wp:featuredmedia,
      _embedded.wp:featuredmedia,
      id,
      title.rendered,
      link`,{
        method:'GET'
      }
      )
    })