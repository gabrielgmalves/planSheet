function backHome(){
    window.location.href='../main/index.php';
}

function signUp(){
    window.location.href='../components/signUp.php';
}

function displayNameField() {
    let checkBox = document.getElementById('ckFirstTime');
    let nameDiv = document.getElementById('nameInput');

    if(checkBox.checked == false){
        nameDiv.classList.add('hidden')
    }else if (checkBox.checked == true){
        nameDiv.classList.remove('hidden')
    }
}