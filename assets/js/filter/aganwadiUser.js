const aganwadiuserOpstionList = () => {
  const { data } = aganwadiApi.GetList();
  const optionset = [];
  optionset.push(`<option value="">Select option</option>`);

  data?.forEach((element) => {
    const html = `<option value="${element.id}"> ${element.name}</option>`;
    optionset.push(html);
  });
  document.querySelector("#anganwadi_id").innerHTML = optionset.join("");
  // optionset.innerHTML=html.join("");
};
//anganwadi User Register

const anganwadiUserRegister = (json) => {
  const UserFormData = document.querySelector("#UserFormData");

  const submit = document.querySelector("#submit");
  submit.addEventListener("click", (e) => {
    e.preventDefault();
    const formData = new FormData(UserFormData);
    const anganwadiUserRegister = Object.fromEntries(formData);
    const user = {
      ...anganwadiUserRegister,
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

    const response = aganwadiUserApi.register(user);
    alert("Form submitted successfully");
    // window.location.href="list-aganwadi_user.php"
  });
};
