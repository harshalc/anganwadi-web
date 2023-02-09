const praklpaRegister = (json) => {
  console.log("Swapnil pagar");
  const title = document.querySelector("#title");
  const submit = document.querySelector("#submit");
  submit.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("Button ");

    const user = {
      title: title.value,
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
    
    const response = praklpaApi.register(user);
    alert("Form submitted successfully");
    window.location.href="list-prakalpa.php"
  });
};

