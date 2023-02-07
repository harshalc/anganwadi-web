const aganwadiuserOpstionList = () => {
    const { data } = aganwadiApi.GetList();
    console.log(data, "afadsas");
  
    const optionset = [];
    optionset.push(`<option value="">Select option</option>`);
  
    data?.forEach((element) => {
      const html = `<option value="${element.id}"> ${element.name}</option>`;
      optionset.push(html);
    });
    document.querySelector("#anganwadi_id").innerHTML= optionset.join("");
    // optionset.innerHTML=html.join("");
  };


  //anganwadi User Register

  const anganwadiUserRegister = (json) => {
    
    console.log("________________ ples deta fill");
      const UserFormData = document.querySelector("#UserFormData");
    
      const submit = document.querySelector("#submit");
    console.log("swapnil ncndcknkd");
      submit.addEventListener("click", (e) => {
        e.preventDefault();
        console.log("Button ");
    
        const formData = new FormData(UserFormData);
        const anganwadiUserRegister = Object.fromEntries(formData);
        console.log(anganwadiUserRegister," Data Regester");
    
        const user = {
          ...anganwadiUserRegister,
        };
    
        console.log(user," Data User");
    
        const response = aganwadiUserApi.register(user);
        console.log(response, "data respones");
    
        alert("Form submitted successfully");
      });
    };


