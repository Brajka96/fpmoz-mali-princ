Vue.component("v-table-users", {
  props: ['users'],
  data() {
    return {
      
    };
  },
  computed: {
    templateObject() {
      return Object.keys(this.users[0]);
    }
  },
  template: `
    <table class="table">
    <thead class="thead-primary bg-primary text-white">
      <tr>
        <th scope="col" v-for="(key, val) in templateObject" :key="key">
          {{key}}
        </th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="user in users" :key="user.id">
        <th scope="row">{{user.id}}</th>
        <td>{{user.full_name}}</td>
        <td>{{user.email}}</td>
        <td>{{user.password}}</td>
        <td>{{user.username}}</td>
        <td>{{user.user_type}}</td>
      </tr>
    </tbody>
  </table>
  
    `
});

Vue.component("v-table-books", {
  props: ['books'],
  data() {
    return {
      
    };
  },
  computed: {
    templateObject() {
      return Object.keys(this.books[0]);
    }
  },
  template: `
    <table class="table">
    <thead class="thead-primary bg-primary text-white">
      <tr>
        <th scope="col" v-for="(key, val) in templateObject" :key="key">
          {{key}}
        </th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="book in books" :key="book.id">
        <th scope="row">{{book.id}}</th>
        <td>{{book.title}}</td>
        <td>{{book.price}}</td>
        <td>{{book.cover}}</td>
      </tr>
    </tbody>
  </table>
  
    `
});


new Vue({
  el: "#admin",
  data: {
    users: [],
    books: [],
  },
  methods: {
    fetchUsers() {
      fetch('../php/users.php')
        .then(res => res.json())
        .then(data => this.users = data)
    },
    fetchBooks() {
      fetch('../php/fetchBooks.php')
        .then(res => res.json())
        .then(data => this.books = data)
    },
  },
  created() {
    this.fetchUsers();
    this.fetchBooks();
  }

});
