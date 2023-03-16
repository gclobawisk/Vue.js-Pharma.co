<template>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


  <Navbar></Navbar>

  <div class="corpo h-100">


    <div class="container">

      <div class="d-flex justify-content-end mt-2">
        <button class="btn-primary" data-toggle="modal" data-target="#exampleModal">Adicionar Cliente</button> 
        <a href="logout"> <button class="btn-danger">Deslogar</button> </a>
      </div>

      <h1 class="text-center m-4">Clientes</h1>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Usuario</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>

          <tr v-for="user in users" :key="user.id">
            <td>{{ user.id }}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.username }}</td>
            <td>{{ user.email }}</td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>

  <Footer></Footer>
  <Modal></Modal>
</template>

<script>

import axios from 'axios';

export default {
  data() {
    return {
      users: [],
    };
  },
  mounted() {
    axios.get('/users')
      .then(response => {
        this.users = response.data.users;
      })
      .catch(error => {
        console.log(error);
      });
  },
};

</script>

<style lang="scss" scoped>
@import '../../scss/app.scss';



</style>