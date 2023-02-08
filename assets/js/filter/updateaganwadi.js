const updateaganwadi = (id) => {
  const {data,status}=aganwadiApi.get(id);
  console.log("response =======",data,status);
  setValuesForm(data);
  const userFormData = document.querySelector("#userFormData");
  const submit = document.querySelector("#submit");
  submit.innerHTML="update";
  submit.addEventListener("click", (e) => {
    e.preventDefault();
    const formData = new FormData(userFormData);
    const userRegister = Object.fromEntries(formData);
    const user = {
      ...userRegister,
    };
    const response =  aganwadiApi.update(user);
    alert("Form submitted successfully");
  });
};

