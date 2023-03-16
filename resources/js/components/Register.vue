<template>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">


    <body class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md- col-lg-12 col-xl-6">
                    <div class="card shadow-lg border-0 my-5 bg-interno">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12 bg-interno">
                                    <div class="p-5">
                                        <div class="text-center">

                                            <img src="assets/img/Pharmaco-logo.png" alt=""
                                                srcset="assets/img/Pharmaco-logo.png" class="img-fluid mb-4">

                                        </div>

                                        <div class="alert alert-danger" v-if="Object.keys(errors).length > 0">
                                            <ul>
                                                <li v-for="(error, key) in errors" :key="key">
                                                    {{ error[0] }}
                                                </li>
                                            </ul>
                                        </div>



                                        <form class="user" method="post" @submit.prevent="submitForm">

                                            <div class="mb-3"><input class="form-control form-control-user" type="text"
                                                    id="name" aria-describedby="name" name="name"
                                                    placeholder="Digite seu nome completo..." v-model="name">
                                            </div>


                                            <div class="mb-3"><input class="form-control form-control-user" type="text"
                                                    id="user" aria-describedby="username"
                                                    placeholder="Escolha um nome de usuario..." name="username"
                                                    v-model="username">
                                            </div>

                                            <div class="mb-3"><input class="form-control form-control-user" type="email"
                                                    id="email" aria-describedby="email" placeholder="Entre com seu email..."
                                                    v-model="email">
                                            </div>

                                            <div class="mb-3"><input class="form-control form-control-user" type="email"
                                                    id="confirmEmail" aria-describedby="confirmEmail"
                                                    placeholder="Confirme seu email..." name="confirmEmail"
                                                    v-model="confirmEmail">
                                            </div>


                                            <div class="mb-3"><input class="form-control form-control-user" type="password"
                                                    id="password" placeholder="Digite sua senha" name="password"
                                                    v-model="password">
                                            </div>

                                            <div class="mb-3">

                                            </div><button class="btn btn-primary d-block btn-user w-100"
                                                type="submit">Cadastrar</button>
                                            <hr>
                                        </form>
                                        <div class="text-center"><a class="small" href="/login">Clique aqui se já possui
                                                cadastro ?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
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
  
<style scoped>
/* CSS Here! */
</style>