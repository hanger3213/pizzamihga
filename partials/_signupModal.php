  <!-- Sign up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(111 202 203);">
            <h5 class="modal-title" id="signupModal">Регистраци </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="partials/_handleSignup.php" method="post">
              <div class="form-group">
                  <b><label for="username">Логин</label></b>
                  <input class="form-control" id="username" name="username" placeholder="Выберите уникальное имя пользователя" type="text" required minlength="3" maxlength="11">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <b><label for="firstName">Имя</label></b>
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Имя" required>
                </div>
                <div class="form-group col-md-6">
                  <b><label for="lastName">Фамилия</label></b>
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Фамилия" required>
                </div>
              </div>
              <div class="form-group">
                  <b><label for="email">Email:</label></b>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Введите свой Email" required>
              </div>
              <div class="form-group">
                <b><label for="phone">Номер телефона</label></b>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon">+373</span>
                  </div>
                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Введите номер телефона" required pattern="[0-9]{10}" maxlength="10">
                </div>
              </div>
              <div class="text-left my-2">
                  <b><label for="password">Пароль</label></b>
                  <input class="form-control" id="password" name="password" placeholder="Введите пароль" type="password" required data-toggle="password" minlength="4" maxlength="21">
              </div>
              <div class="text-left my-2">
                  <b><label for="password1">Повторите пароль</label></b>
                  <input class="form-control" id="cpassword" name="cpassword" placeholder="Повторите пароль" type="password" required data-toggle="password" minlength="4" maxlength="21">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <p class="mb-0 mt-1">У вас уже есть аккаунт? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Войти здесь</a>.</p>
          </div>
        </div>
      </div>
    </div>
