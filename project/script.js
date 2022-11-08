function acceptForm(){
        var nm = document.getElementById("nameInput").value;
        var lastNm = document.getElementById("lastNameInput").value;
        var pasw = document.getElementById("passwordInput").value;
        var mail = document.getElementById("emailInput").value;
        
        var regexp = /[a-z]/;
        if (!regexp.test(nm) || !regexp.test(lastNm)){
            alert("Name and lastname must not contain any numbers!")
            return
        }

        var regexp2 = /^[0-9a-z]{5,100}/i;

        if(!regexp2.test(pasw)){
            alert("Password must be from 5 to 100 symbols length!")
            return
        }

        alert("Success")

        /*alert(nm);
        alert(lastNm);
        alert(pasw);
        alert(mail);*/
    }

document.querySelector(".button").addEventListener("click", acceptForm);