function backHome(){
    window.location.href='../main/index.php';
}

function signIp(){
    window.location.href='../components/signIn.php';
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