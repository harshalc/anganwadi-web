const userRegister = (json) => {
  const userFormData = document.querySelector("#userFormData");
  const submit = document.querySelector("#submit");
  submit.addEventListener("click", (e) => {
    e.preventDefault();
    const formData = new FormData(userFormData);
    const userRegister = Object.fromEntries(formData);
    const user = {
      ...userRegister,
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

    const response = userApi.register(user);
    alert("Form submitted successfully");
    window.location.href="list-user.php"
  });
};
