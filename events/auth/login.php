<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Session</title>
        <link href="/sige/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .form-control {
            padding-right: 35px; /* Ajustar el padding para dar espacio al icono */
        }
        body {
            background-image: url("/sige/assets/img/fondo login.jpg");
            background-size: cover; /* Ajustar el tamaño de la imagen para que cubra todo el fondo */
            background-repeat: no-repeat; /* Evitar que la imagen se repita */
        }

        .card {
            background: rgba(255, 255, 255, .1); /* Fondo semitransparente, ajusta el valor alpha para cambiar la opacidad */
            backdrop-filter: blur(10px); /* Agrega un desenfoque al fondo */
            box-shadow: 0 0 40px rgba(255, 255, 255, .5); /* Agrega una sombra para el efecto de cristal */
        }



    </style>
        </head>
        <body > 
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-0" style="color:white;">Bienvenido a S.I.G.E</h3> <div class="text-center font-weight-light "><span style="color: black;">Para iniciar sesión, por favor ingrese con sus credenciales.</span></div></div>
                                    <div class="card-body">
                                        <!-- <form action="procesar_formulario.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="usuario@ejemplo.com" />
                                                <label for="inputEmail">Correo electrónico</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Contraseña" />
                                                <label for="inputPassword">Contraseña</label>
                                                <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>

                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Recuerdame!</label>
                                            </div>
                                            <div class="g-recaptcha" data-sitekey="6LeB0GAjAAAAAPu8p4vGEaB_rTy_eyiaTk8UDtN_"></div>
                                                <button type="submit">Enviar</button>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Olvide mi contraseña.</a>
                                                <a class="btn btn-primary" href="index.html">Inciar sesión</a>
                                                <input type="submit" value="Iniciar sesión">
                                            </div>
                                        </form> -->
                                        <form action="procesar_formulario.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="usuario@ejemplo.com" name="femail" required="required" value="ejemplo@mail.com" >
                                                <label for="inputEmail">Correo electrónico</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Contraseña" name="fpassword" required="required">
                                                <label for="inputPassword">Contraseña</label>
                                                <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="">
                                                <label class="form-check-label" for="inputRememberPassword">Recuérdame</label>
                                            </div>
                                            <div class="g-recaptcha" data-sitekey="6LeB0GAjAAAAAPu8p4vGEaB_rTy_eyiaTk8UDtN_"></div>
                                            <button type="submit">Enviar</button> -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0"><style></style>
                                                <a class="small" href="password.html text-white"> Olvidé mi contraseña</a>
                                                <!-- <a class="btn btn-primary" href="index.html">Iniciar sesión</a> -->
                                                <input type="submit" value="Iniciar sesión">
                                            </div>
                                        </form>

                                    </div>
                                    <div class="mb-0 card-footer text-center py-3 bg-white">
                                        <img src="/sige/assets/img/cloudflare-logo.svg" alt="Cloud-flare" style="max-width: 80px; max-height:auto;">
                                        <img src="/sige/assets/img/google_recaptcha-official.svg" alt="Cloud-flare" style="max-width: 50px; max-height:auto;">
                                        <img src="/sige/assets/img/ssl.svg" alt="Cloud-flare" style="max-width: 140px; max-height:auto;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("inputPassword");
            const eyeIcon = document.querySelector(".toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
    </body>
</html>
