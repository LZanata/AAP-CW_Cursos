<!DOCTYPE html>
<html>

<head>
    <title>Editar minha conta</title>
    <link rel="stylesheet" media="all" href="S.css" />
</head>

<body class='registrations my-account container-fluid'>

    <style>
        #user-menu .hello,
        .my-account .my-account-form h3.box-title {
            color: #51627f !important;
        }

        #fee-box .btn-fee-choose-plan {
            background-color: #51627f !important;
        }

        .my-account .my-account-nav li.active,
        .my-account .my-account-nav li.active .outside-block {
            background-color: #51627f;
            border-color: #51627f;
        }

        .my-account .my-account-form.registration-form .button,
        .my-account .my-account-form .button,
        #my-account-content .change-plan a,
        .cards .header a,
        #modal .btn-modal-form.btn-primary {
            background-color: #1abc9c !important;
        }

        .my-account .my-account-form .input .form-control:focus {
            border-color: #51627f !important;
        }

        #user-menu-block .menu a:not(.locales):last-child:hover {
            background-color: #2b384d !important;
        }

        .mail-brand-header {

            background-size: cover;
            border-top-color: #1abc9c !important;
            border-bottom-color: #51627f !important;
        }

        .brand-mail-btn {
            background-color: #1abc9c !important;
        }

        .brand-mail-primary-color,
        #my-account-content .checkout-section .checkout.review-update .header h1,
        .billings .not-have-billings {
            color: #1abc9c !important;
        }

        .brand-mail-footer {
            background-color: #51627f !important;
        }

        .brand-mail-footer .social-icons a.social-media,
        .mail-container .coursify-tec {
            background-color: #667a9d !important;
        }
    </style>
    <header>

        <div class='mobile-ajusts'>
            <div class='row'>
                <div class='brand-backdrop backdrop col-xs-12'>
                    <div class='backdrop-content'>
                        <div class='container'>
                            <div class='col-xs-12'>
                                <div class='back-to-school'>
                                    <a href="index.html">
                                        <i class='fui fui-home'></i>
                                        <span class='text-back-to-school'>Voltar para o painel</span>
                                    </a>
                                </div>
                                <div id='user-menu'>
                                    <img src="https://d1ze31r0gfoq0o.cloudfront.net/assets/user-menu-arrow-e510ca0057e5d3150ed28f1c041253ffaf054536de32f3c575a1698846f3ca75.png" alt="User menu arrow" />
                                    <div class='user-image' style='background-image: url(https://d2ffu0zq97rhm7.cloudfront.net/fallback/profile_image/circle_img_default.png)'></div>
                                    <div class='user-identification text-right'>
                                        <div class='hello'>Olá,</div>
                                        <div class='username'>Professor(a)</div>
                                    </div>
                                </div>
                                <div class='customer' id='user-menu-block'>
                                    <div class='arrow'></div>
                                    <span class='user_email'>emailprofessor@cw.com</span>

                                    <div class='menu'>
                                        <a href="../Painel professor/perfil.html">Minha Conta</a>
                                        <a target="_blank" href="../Suporte/Suporte.html">Suporte</a>
                                        <a class="logout" rel="nofollow" data-method="delete" href="/users/sign_out">Sair</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='brand-image' style='background-image: url(&#39;https://d2ffu0zq97rhm7.cloudfront.net/fallback/brand_image/default.png&#39;);'></div>
                        <h2>Nome professor</h2>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div id='form_registration'>
            <div class='col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 my-account-box'>

                <div class='col-xs-12' id='my-account-content'>
                    <form class="simple_form registration-form my-account-form" id="edit_user" enctype="multipart/form-data" action="/users" accept-charset="UTF-8" method="post">
                        <input name="utf8" type="hidden" value="&#x2713;" />
                        <input type="hidden" name="_method" value="put" />
                        <div class="body-group">
                            <input type="text" name="body" id="body" tabindex="-1" />
                            <span class="help">Do not fill in this field. It is an anti-spam measure.</span>
                        </div>
                        <div class="input string required user_name field_with_hint field_without_errors">
                            <label class="string required" for="user_name">
                                <abbr title="required">*</abbr>
                                Nome
                            </label>
                            <input class="string required form-control" autocomplete="off" required="required" aria-required="true" maxlength="255" minlength="3" placeholder="Digite seu nome" size="255" type="text" value="" name="user[name]" id="user_name" />
                            <span class="hint">Informe o seu nome e sobrenome.</span>
                        </div>

                        <div class="input string optional user_phone field_with_hint field_without_errors">
                            <label class="string optional" for="user_phone">telefone</label>
                            <input class="string optional form-control" autocomplete="off" placeholder="+55 11 99999-9999" type="text" value="" name="user[phone]" id="user_phone" />
                            <span class="hint">Digite o número do seu telefone.</span>
                        </div>
                        <label class="file optional label-control" for="user_profile_image">Foto do perfil</label>
                        <div class='row'>
                            <div class='form-group image-form-input'>
                                <div class='fileinput fileinput-new' data-provides='fileinput'>
                                    <div class='preview-container col-sm-2 col-xs-12'>
                                        <div class='fileinput-preview fileinput-profile_image pull-left thumbnail' data-field='profile_image' data-trigger='fileinput'>
                                            <img class="placeholder" src="https://d2ffu0zq97rhm7.cloudfront.net/fallback/profile_image/circle_img_default.png" alt="Circle img default" />
                                        </div>
                                    </div>
                                    <div class='col-sm-10 col-xs-12 image-input'>
                                        <div class='input-group'>
                                            <div class='form-control uneditable-input' data-trigger='fileinput'>
                                                <p class='fui-clip fileinput-exists'></p>
                                                <p class='fileinput-filename'></p>
                                            </div>
                                            <span class='input-group-btn btn-file'>
                                                <span class='btn btn-inverse fileinput-new' data-role='select-file'>Selecionar imagem</span>
                                                <span class='btn btn-inverse fileinput-exists' data-reference='fileinput-profile_image' data-role='change'>
                                                    <span class='fui-gear'></span>
                                                    Alterar

                                                </span>
                                                <input class="file optional flatui-fileinput" data-field="profile_image" data-change="false" data-placeholder="https://d2ffu0zq97rhm7.cloudfront.net/fallback/profile_image/circle_img_default.png" type="file" name="user[profile_image]" id="user_profile_image" />
                                                <input class="remove_image" value="false" type="hidden" name="user[remove_profile_image]" id="user_remove_profile_image" />
                                                <a class='btn btn-inverse fileinput-exists' data-default='https://d2ffu0zq97rhm7.cloudfront.net/fallback/profile_image/circle_img_default.png' data-dismiss='fileinput' data-reference='fileinput-profile_image' href='#' style='border-left: 2px solid rgba(255, 255, 255, 0.12);'>
                                                    <span class='fui-trash'></span>
                                                    Remover

                                                </a>
                                            </span>
                                        </div>
                                        <p class='image-input-hint'>
                                            <span class="hint">Escolha uma foto para ser exibida no seu perfil.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input password optional user_password field_with_hint">
                            <label class="password optional" for="user_password">Nova senha</label>
                            <input class="password optional form-control" autocomplete="off" placeholder="Digite sua nova senha" maxlength="128" minlength="6" size="128" type="password" name="user[password]" id="user_password" />
                            <span class="hint">Para alterar sua senha, digite a nova senha neste campo e repita no campo abaixo.</span>
                        </div>
                        <div class="input password optional user_password_confirmation field_with_hint">
                            <label class="password optional" for="user_password_confirmation">Confirme sua nova senha</label>
                            <input class="password optional form-control" autocomplete="off" placeholder="Repita sua nova senha" type="password" name="user[password_confirmation]" id="user_password_confirmation" />
                            <span class="hint">Para confirmar a nova senha, repita a senha digitada no campo acima.</span>
                        </div>

                        <div class='row'>
                            <div class='col-xs-12 my-account-box-footer edit-account-footer'>
                                <a class="btn btn-inverse btn-cancel pull-left" href="index.html">Cancelar</a>
                                <input type="submit" name="commit" value="Salvar alterações" class="button button btn btn-primary btn-large pull-right" data-disable-with="Salvar alterações" />
                            </div>
                        </div>
                    </form>
                    <script>
                        $('select.form-control').removeClass('select');
                    </script>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class='mobile-ajusts'>
            <div class='row'>
                <div class='col-xs-12 text-center my-account-footer'>


                </div>
            </div>
        </div>
    </footer>
    <div class='modal fade' data-backdrop='static' data-keyboard='false' data-replace='true' id='modal' tabindex='-1'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button aria-hidden='true' class='close fui-cross' data-dismiss='modal' type='button'></button>
                    <h5 id='modal-header'></h5>
                    <div class='modal-header-content'></div>
                </div>
                <div class='modal-body' id='modal-body'></div>
                <div class='modal-footer' id='modal-footer'></div>
            </div>
        </div>
    </div>

</body>

</html>