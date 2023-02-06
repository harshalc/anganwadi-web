const anganwadiRegister = (json) => {
//   const title = document.querySelector("#name");

console.log("________________ ples deta fill");
  const UserFormData = document.querySelector("#UserFormData");

  const submit = document.querySelector("#submit");
console.log("swapnil ncndcknkd");
  submit.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("Button ");

    const formData = new FormData(UserFormData);
    const anganwadiRegister = Object.fromEntries(formData);
    console.log(anganwadiRegister," Data Regester");

    const user = {
      ...anganwadiRegister,
    };

    console.log(user," Data User");

    const response = aganwadiApi.register(user);
    console.log(response, "data respones");

    alert("890")
  });
};
