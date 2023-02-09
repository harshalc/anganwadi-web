const bitRegister=(json)=>{
    const title = document.querySelector("#title")
    const submit = document.querySelector("#submit");
    submit.addEventListener("click",(e)=>{
        e.preventDefault();
    const user ={
        title:title.value,
    } 
    
    const emptyField = [];
    const keys = Object.keys(user);
    keys.forEach((key) => {
      if (user[key] == "") {
        emptyField.push(key);
      } 
    });
    if (emptyField.length != 0) {
      alert(`${emptyField.join(",")} Please fill this field !!`);
      return;
    }
    const response= bitApi.register(user);
    alert("Form submitted successfully");

    window.location.href="frm-register_bit.php"
    })
}