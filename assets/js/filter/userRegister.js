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
    const response = userApi.register(user);
    alert("Form submitted successfully");
    window.location.href="list-user.php"
  });
};
