Vue.component("Navbar", {
  template: `
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Knižara Mali Princ</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myBooks.php">Moje Knjige</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">O nama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Kontakt</a>
            </li>
          </ul>
          <div>
          <a class="btn btn-success" href="login.php"">Prijava</a>
          </div>
        </div>
      </div>
    </nav>
  `
});

Vue.component("Book", {
  props: ['book', 'member'],
  template: `<div class="card" style="width: 18rem;">
  <img :src="book.cover" class="card-img-top" alt="..."> 
  <div class="card-body">
    <h5 class="card-title">{{book.title}}</h5>
    <p
      class="card-text"
    >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" v-if="member" class="btn btn-primary">Go somewhere</a>
  </div>
</div>`
});

Vue.component("Bottom", {
  template: `
  <div class="footer">
  <div class="container">
    <div class="row">
      <div class="col col-12 col-md-4">
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Non, repellat officia. Alias, sed.</li>
          <li>Saepe sint officiis ipsum rerum?</li>
          <li>Tempore voluptatibus laborum corporis officiis.</li>
          <li>Dolore blanditiis obcaecati vel amet.</li>
        </ul>
      </div>
      <div class="col col-12 col-md-4">
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Non, repellat officia. Alias, sed.</li>
          <li>Saepe sint officiis ipsum rerum?</li>
          <li>Tempore voluptatibus laborum corporis officiis.</li>
          <li>Dolore blanditiis obcaecati vel amet.</li>
        </ul>
      </div>
      <div class="col col-12 col-md-4">
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Non, repellat officia. Alias, sed.</li>
          <li>Saepe sint officiis ipsum rerum?</li>
          <li>Tempore voluptatibus laborum corporis officiis.</li>
          <li>Dolore blanditiis obcaecati vel amet.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
  `
});

Vue.component('Loader', {
  template: `
  <div>
  <div class="spinner-grow text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
  <span class="sr-only">Loading...</span>
</div></div>
  `
})

new Vue({
  el: "#app",
  data: {
    books: [],
    search: '',
    member: 'true'
  },
  computed: {
    filterBooks() {
      return this.books.filter(book => {
        return book.title.includes(this.search);
      })
    }
  },
  methods: {
    fetchBooks() {
      fetch('./php/fetchBooks.php')
        .then(res => res.json())
        .then(data => this.books = data)
    },
  },
  created() {
    this.fetchBooks();
  }
});


