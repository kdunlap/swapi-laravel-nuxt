import type { Config } from 'tailwindcss'

export default <Partial<Config>> {
  theme: {
    extend:{
      colors: {
        'site-background': '#ededed',
        'gainsboro': '#dadada',
        'green-teal': '#0ab463',
        'pinkish-grey': '#c4c4c4',
        'emerald': '#089954',
        'azure': '#0094ff',
        'warm-grey-75': 'rgba(132, 132, 132, 0.75)',
      },
      fontFamily: {
        sans: ['Montserrat'],
      },
    },
  }
}