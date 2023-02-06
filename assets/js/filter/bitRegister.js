const bitRegiste=(json)=>{

    const title = document.querySelector("#title")
    const submit = document.querySelector("#submit");

    submit.addEventListener("click",(e)=>{
        e.preventDefault();
        console.log("Button ");
    const user ={
        title:title.value,

    }
    
    const response= bitApi.register(user);
    console.log(response,"data respones");

    })
}