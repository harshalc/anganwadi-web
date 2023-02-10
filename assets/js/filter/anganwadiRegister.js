const anganwadiRegister = (json) => {
  const UserFormData = document.querySelector("#UserFormData");
  const submit = document.querySelector("#submit");
  const modalBtn=document.querySelector("#modalBtn")
  submit.addEventListener("click", (e) => {
    e.preventDefault();
   
    const formData = new FormData(UserFormData);
    const anganwadiRegister = Object.fromEntries(formData);
    const user = {
      ...anganwadiRegister,
    };

    const emptyField = [];
    const keys = Object.keys(user);
    keys.forEach((key) => {
      if (user[key] == "") {
        emptyField.push(key);
      } 
    });
    tosterDisplay(300,notFillValue(emptyField).join(","))
    if (emptyField.length != 0) {
      // alert(`${notFillValue(emptyField).join(",")} Please fill this field !!`);
    console.log("clicked btn");
     (()=> modalBtn.click())()
      return;
    }
    const response = aganwadiApi.register(user);
    alert("Form submitted successfully");
    window.location.href="list-aganwadi.php"
  });
};
