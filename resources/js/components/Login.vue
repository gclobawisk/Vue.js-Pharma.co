<template>
<div>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <body class="h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md- col-lg-12 col-xl-6">
            <div class="card shadow-lg border-0 my-5 bg-interno-login">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col-lg-12 bg-interno">
                    <div class="p-5">
                      <div class="text-center">
  
                          <img src="assets/img/Pharmaco-logo.png" alt="" srcset="assets/img/Pharmaco-logo.png" class="img-fluid mb-4">
  
                      </div>
                      <form class="user" method="post" action="/auth">
                        
                        
                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="email" name="email"
                            aria-describedby="email" placeholder="Entre com seu email..." value="usuarioteste@gmail.com">
                      </div>

                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="password" name="password"
                            placeholder="Digite sua senha" value="usuarioteste">
                          </div>
                        <div class="mb-3">

                          <div class="custom-control custom-checkbox small">
                            <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox"
                                id="formCheck-1"><label class="form-check-label custom-control-label"
                                for="formCheck-1">Lembrar-me</label>
                              </div>
                          </div>

                        </div><button class="btn btn-logar d-block btn-user w-100" type="submit">Login</button>
                        <hr>
                      </form>
                      <div class="text-center"><a class="small" href="/cadastro">Criar uma Conta!</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </div>
</template>
  
  
  <script>
  
  </script>
  
  <style lang="scss" scoped>
  @import '../../scss/app.scss';
  
  
  
  </style>