tinymce.init({
  selector: '#postContent',
  resize: false,
  plugins: '',
  toolbar: '',
  toolbar_drawer: 'floating',
  language_url : 'assets/js/TinyMCE/fr_FR.js',
  language: 'fr_FR',
  formats: {
  h2: { block: 'h2', classes: 'section__post-title' },
  p: { block: 'p', classes: 'section__post-p' }
  },
  style_formats: [
    { title: 'Titre de chapitre', format: 'h2' },
    { title: 'Paragraphe', format: 'p' }
  ]
})
  
  