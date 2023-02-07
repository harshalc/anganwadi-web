const updateaganwadi = (id) => {
  const { status, data } = bitApi.get(id);
  console.log("okokokokokokokokok", data);
  const title = document.querySelector("#title");

  title.value = data.title;

  document.querySelector("#submit").addEventListener("click", (e) => {
    e.preventDefault();
    const json = {
        "title":title.value,
        "title1":title1.value,
         "name": name.value,
         "aganwadi_no":aganwadi_no.value,
         "year":year.value,
         "state":state.value,
         "district":district.value,
         "block":block.value,
         "village":village.value,
         "zip_code":zip_code.value,


    
    
    };
    const resp = aganwadiApi.update(id, json);
    console.log("response ", resp);

    // alert("Form Update successfully");
  });
};
