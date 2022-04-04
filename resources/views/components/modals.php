<!-- Modal HTML -->
<div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-login  ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <div class="avatar ">
                        <img src="assets/images/avatar.png " alt="Avatar ">
                    </div>
                    <h4 class="modal-title mt-5 text-center border-1 border-bottom">Member Login</h4>
                    <button type="button " class="btn-close close " data-bs-dismiss="modal" aria-bs-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="./dashboard/index.html" method="post " class="was-validated">
                        <div class="form-group mb-2 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2 position-relative">
                            <label for="validationTooltipPassword" class="form-label">Password</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipPasswordPrepend">
                                    *
                                </span>
                                <input type="password" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipPasswordPrepend" required>
                                <div class="invalid-feedback">
                                    Type Valid Password.
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-5 ">
                            <button type="submit " class="btn btn-danger rounded-pill w-100 mb-1">
                                <li class="fab fa-sign-in-alt text-light"></li>
                                Login</button>
                            <button type="button " data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signUpModal" class="btn btn-outline-secondary rounded-pill w-100">
                            <li class="fab fa-user-alt"></li>SignUp</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer ">
                    <a href=" # ">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signUpModal">
        <div class="modal-dialog modal-login ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <div class="avatar ">
                        <img src="assets/images/avatar.png " alt="Avatar ">
                    </div>
                    <h4 class="modal-title mt-5 text-center border-1 border-bottom">Member SignUp</h4>
                    <button type="button " class="btn-close close " data-bs-dismiss="modal" aria-bs-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="./dashboard/index.html" method="post " class="was-validated">
                        <div class="form-group mb-2 position-relative">
                            <label for="validationTooltipPassword" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipEmailPrepend">
                                    @
                                </span>
                                <input type="email" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipEmailPrepend" required>
                                <div class="invalid-feedback">
                                    Type Valid Email.
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2 position-relative">
                            <label for="validationTooltipPassword" class="form-label">Password</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipPasswordPrepend">
                                    *
                                </span>
                                <input type="password" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipPasswordPrepend" required>
                                <div class="invalid-feedback">
                                    Type Valid Password.
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-5 ">
                            <button type="button " data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signUpModal" class="btn btn-outline-secondary rounded-pill w-100">
                                <li class="fab fa-user"></li>SignUp</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer ">
                    <a href=" # " data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">has account?</a>
                </div>
            </div>
        </div>
    </div>