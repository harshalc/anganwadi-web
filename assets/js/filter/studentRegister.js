const aganwadiOpstionList = () => {
  const { data } = aganwadiApi.GetList();
  const optionset = [];
  optionset.push(`<option value="">Select option</option>`);

  data?.forEach((element) => {
    const html = `<option value="${element.id}"> ${element.name}</option>`;
    optionset.push(html);
  });
  document.querySelector("#anganwadi_id").innerHTML = optionset.join("");
};

//Student Register
const studentRegister = (json) => {
  const studentFormData = document.querySelector("#UserFormData");
  const submit = document.querySelector("#submit");
  submit.addEventListener("click", (e) => {
    e.preventDefault();
    const formData = new FormData(studentFormData);
    const studentRegister = Object.fromEntries(formData);
    studentRegister.join_photo = studentRegister.join_photo.name;
    const user = {
      ...studentRegister,
      pass_photo: "photo",
    };
    const response = studentApi.register(user);
    alert("Form submitted successfully");
    window.location.href="list-students.php"
  });
};
