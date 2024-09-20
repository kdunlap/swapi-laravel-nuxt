
export interface Person {
  name: string
  birth_year: string
  gender: string
  eye_color: string
  hair_color: string
  height: string
  mass: string
  movies: string
}

export interface Movie {
  episode_id: number
  title: string
  opening_crawl: string
  characters: String[]
}

export interface SearchResults <T> {
  count: Number
	next: String | null,
	previous: String | null,
	results: Array<T>
}

export type SearchType = "people" | "movies";

const type = ref<SearchType>("people")
const searching = ref(false)

export const useSearch = () => {

  const movieResults = useState<Array<Movie>>('movie-results', () => [])
  const personResults = useState<Array<Person>>('person-results', () => [])
  
  watch(type, (newValue) => {
    if(newValue === 'movies') {
      movieResults.value = []
    } 
    else if(newValue === 'people') {
      personResults.value = []
    }
  })

  async function searchPeople(query: string): Promise<void> {
    try {
      personResults.value = []

      const params = new URLSearchParams({ search: query })
      const searchQuery = query.length > 0 ? `?${ params.toString() }` : ""

      searching.value = true
      const result = await $fetch<SearchResults<Person>>('/api/v1/people' + searchQuery)
      personResults.value = result.results

    } catch(e) {
      console.error(e)
    }
    finally {
      searching.value = false
    }
  }

  async function searchMovies(query: string): Promise<void> {
    try {
      movieResults.value = []

      const params = new URLSearchParams({ search: query })
      const searchQuery = query.length > 0 ? `?${ params.toString() }` : ""

      searching.value = true
      const result = await $fetch<SearchResults<Movie>>('/api/v1/movies' + searchQuery)
      movieResults.value = result.results

    } catch(e) {
      console.error(e)
    }
    finally {
      searching.value = false
    }
  }

  return {
    searchPeople,
    searchMovies,
    movieResults,
    personResults,
    searching,
    type
  }
}