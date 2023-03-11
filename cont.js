const container = document.querySelector(".forms"),
pwShowHide = document.querySelectorAll(".eye-incon");
const cont = document.querySelector(".forms"),
pwShow = document.querySelectorAll(".eye-icon");

//links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", ()=>{
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password =>{
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
            return;
        })
    })
 
})
pwShow.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", ()=>{
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password =>{
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
            return;
        })
    })
 
})

/*links.forEach(links =>{
        links.addEventListener("click", e=>{
            e.preventDefault();//prevenção do envio de formulário
            container.classList.toggle("show-signup");
        })
    });*/
