const bitRegister=(json)=>{
    const title = document.querySelector("#title")
    const submit = document.querySelector("#submit");
    submit.addEventListener("click",(e)=>{
        e.preventDefault();
    const user ={
        title:title.value,
    }   
    const response= bitApi.register(user);
    alert("Form submitted successfully");
    })
}