module.exports = {
  base: '/docs/',
  dest: 'public/docs',
  title:'Docs',
  description:'This is description',
  head: [
    ['link', { rel: 'icon', href: 'https://picsum.photos/100' }]
  ],
  markdown: {
    lineNumbers: true
  },
  themeConfig: {
    nav: [
      { text: 'Home', link: '/' },
    ],
  }
}