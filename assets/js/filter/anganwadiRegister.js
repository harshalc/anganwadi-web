const anganwadiRegister = (json) => {
  const UserFormData = document.querySelector("#UserFormData");
  const submit = document.querySelector("#submit");
  submit.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("Button ");
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
    if (emptyField.length != 0) {
      alert(`${emptyField.join(",")} Please fill this field !!`);
      return;
    }
    const response = aganwadiApi.register(user);
    alert("Form submitted successfully");
    window.location.href="list-aganwadi.php"
  });
};
