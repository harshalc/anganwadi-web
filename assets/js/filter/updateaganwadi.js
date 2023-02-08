const updateaganwadi = (id) => {
  const {data,status}=aganwadiApi.get(id);
  console.log("response =======",data,status);
  setValuesForm(data);
  const UserFormData = document.querySelector("#UserFormData");
  const submit = document.querySelector("#submit");
  submit.innerHTML="update";
  submit.addEventListener("click", (e) => {
    e.preventDefault();
    const formData = new FormData(UserFormData);
    const userRegister = Object.fromEntries(formData);
    const user = {
      ...userRegister,
    };
    const response =  aganwadiApi.update(id,user);
    alert("Form Update data successfully");
    window.location.href="list-aganwadi.php"
  });

};

