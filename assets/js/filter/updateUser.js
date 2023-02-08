const updateUser = (id) => {
    const {data,status}= userApi.get(id);
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
    //   user.role_id= role_id.value
      const response =  userApi.update(id,user);
      alert("Form Update data successfully");
      window.location.href="list-user.php"
    });
    
  };
  
  