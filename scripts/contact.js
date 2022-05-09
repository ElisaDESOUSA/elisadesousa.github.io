function checkErr(element, id) {
    if (element.value == '')
    {
        document.getElementById(id).classList.remove('cache');
    } else {
        document.getElementById(id).classList.add('cache');
    }
}

function checkErrBox(checkbox, id) {
    if (checkbox.checked == false) {
        document.getElementById(id).classList.remove('cache');
    } else {
        document.getElementById(id).classList.add('cache');
    }
}

document.querySelector("form").addEventListener("submit", (ev) => 
{
    ev.preventDefault();

    checkErr(nom, 'verif_nom');
    checkErr(prenom, 'verif_prenom');
    checkErr(email, 'verif_email');
    checkErr(sujet, 'verif_sujet');
    checkErr(message, 'verif_message');
    checkErrBox(checkbox, 'verif_cgu');

})