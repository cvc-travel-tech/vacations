
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content relative">
                    <div class="modal-header">
                        <h4 class="modal-title">Log In</h4>
                        <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                            <i class="input-icon field-icon fa">
                                <img src="http://cvc.vacations/images/ico_close.svg" alt="close">
                            </i>
                        </span>
                    </div>
                    <div class="modal-body relative">
                        <form class="bravo-form-login" method="POST" action="http://cvc.vacations/login">
                            <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" autocomplete="off"
                                    placeholder="Email address">
                                <i class="input-icon fa fa-envelope-o"></i>
                                <span class="invalid-feedback error error-email"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" autocomplete="off"
                                    placeholder="Password">
                                <i class="input-icon fa fa-lock"></i>
                                <span class="invalid-feedback error error-password"></span>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <label for="remember-me" class="mb0">
                                        <input type="checkbox" name="remember" id="remember-me" value="1"> Remember me
                                        <span class="checkmark fcheckbox"></span>
                                    </label>
                                    <a href="http://cvc.vacations/password/reset">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="error message-error invalid-feedback"></div>
                            <div class="form-group">
                                <button class="btn btn-primary form-submit" type="submit">
                                    Login
                                    <span class="spinner-grow spinner-grow-sm icon-loading" role="status"
                                        aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="c-grey font-medium f14 text-center"> Do not have an account? <a href=""
                                    data-target="#register" data-toggle="modal">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>