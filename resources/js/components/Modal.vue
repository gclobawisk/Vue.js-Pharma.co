<template>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="alert alert-danger" v-if="Object.keys(errors).length > 0">
            <ul>
              <li v-for="(error, key) in errors" :key="key">
                {{ error[0] }}
              </li>
            </ul>
          </div>



          <form class="user" method="post" @submit.prevent="submitForm">

            <div class="mb-3"><input class="form-control form-control-user" type="text" id="name" aria-describedby="name"
                placeholder="Digite seu nome completo..." name="name" v-model="name">
            </div>

            <div class="mb-3"><input class="form-control form-control-user" type="text" id="user"
                aria-describedby="username" placeholder="Escolha um nome de usuario..." name="username"
                v-model="username">
            </div>

            <div class="mb-3"><input class="form-control form-control-user" type="email" id="email"
                aria-describedby="email" placeholder="Entre com seu email..." name="email" v-model="email">
            </div>

            <div class="mb-3"><input class="form-control form-control-user" type="email" id="confirmEmail"
                aria-describedby="confirmEmail" placeholder="Confirme seu email..." name="confirmEmail"
                v-model="confirmEmail">
            </div>


            <div class="mb-3"><input class="form-control form-control-user" type="password" id="password"
                placeholder="Digite sua senha" name="password" v-model="password"></div>


            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</template>



<script>
import axios from 'axios';

export default {
  data() {
    return {
      name: '',
      email: '',
      username: '',
      confirmEmail: '',
      password: '',
      errors: {}
    }
  },
  methods: {
    validarEmailsIguais() {
      return this.email === this.confirmEmail;
    },

    submitForm() {

      if (!this.validarEmailsIguais()) {
        alert('Os campos de e-mail e confirmação de e-mail devem ser iguais.');
        return;
      }

      const formData = {
        name: this.name,
        email: this.email,
        username: this.username,
        confirmEmail: this.confirmEmail,
        password: this.password,
      }
      axios.post('/api/register', formData)
        .then(response => {
          console.log('Formulário enviado com sucesso!');
          alert('Cadastro Efetuado!');
          this.name = '';
          this.email = '';
          this.username = '';
          this.confirmEmail = '';
          this.password = '';
        })

        .catch(error => {
          if (error.response.status === 422) {
            this.errors = error.response.data.errors;
          } else {
            console.error('Erro ao enviar formulário:', error.response.data);
          }
        });
    }
  }
}
</script>