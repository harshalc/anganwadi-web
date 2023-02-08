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
    const response = aganwadiApi.register(user);
    // alert("Form submitted successfully");
  });
};
