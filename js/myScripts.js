
//Funcao de redirecionamento para tela inicial 'Index'
function backHome(){
    window.location.href='../main/index.php';
}

//Funcao de redirecionamento para Login 'SignIn'
function signIn(){
    window.location.href='../components/signIn.php';
}

function logOut(){
    let sessionSpanData = $(document.getElementById('sessionSpan')).text();
    window.location.href='../components/signOut.php';
}

//Funcao para exibir o campo de nome caso o Checkbox de 'First Time' esteja ativo
function displayNameField() {
    let checkBox = document.getElementById('ckFirstTime');
    let nameDiv = document.getElementById('nameDiv');
    let inputName = document.getElementById('floatingName');
    let formAction = document.getElementById('signInForm');
    let btnChange = document.getElementById('btnSignInUp');
    let iniTextChange = document.getElementById('initialText');

    //Verificacao de Checkbox 'First Time'
    if(checkBox.checked == false){

        //Caso o Checkbox esteja desativado adiciona classe HIDDEN na div e retira a propriedade REQUIRED
        nameDiv.classList.add('hidden')
        $(inputName).prop('required', false)

        //Altera o endereco da pagina PHP que processa os dados de LOGIN
        $(formAction).prop('action', 'signInProcessor.php')

        //Altera o texto inicial de 'Please sign up' para 'Please sign in'
        $(iniTextChange).text("Please sign in")

        //Altera o texto do botao de 'Sign Up' para 'Sign in'
        $(btnChange).text("Sign In")

    }else if (checkBox.checked == true){

        //Caso o Checkbox esteja ativo retira a classe HIDDEN e adiciona a propriedade REQUIRED
        nameDiv.classList.remove('hidden')
        $(inputName).prop('required', true)
        
        //Altera o endereco da pagina PHP que processa os dados de LOGIN para os dados de CADASTRO
        $(formAction).prop('action', 'signUpProcessor.php')

        //Altera o texto inicial de 'Please sign in' para 'Please sign up'
        $(iniTextChange).text("Please sign up")

        //Altera o texto do botao de 'Sign In' para 'Sign up'
        $(btnChange).text("Sign Up")
    }
}