const praklpaRegister =(json) =>{
    console.log("Swapnil pagar");
    const title = document.querySelector("#title");
    const submit = document.querySelector("#submit");

    submit.addEventListener("click",(e)=>{
        e.preventDefault();
        console.log("Button ");
    // const UserFormData = new FormData(registeruserForm);
    // const registerStudentObj = Object.fromEntries(UserFormData);
    const user ={
        title:title.value,

    }
    console.log(user,".......................");
    const response= praklpaApi.register(user);
    console.log(response,"----------------");

    })
}