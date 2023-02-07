const updateBit = (id) => {
    const {status,data}=bitApi.get(id)
    console.log("okokokokokokokokok",data);
  const title=document.querySelector("#title");

  title.value=data.title;

  document.querySelector("#submit").addEventListener("click",(e)=>{
  e.preventDefault();
  const json={title:title.value}
  const resp=bitApi.update(id,json);
  console.log("response ",resp);

  alert("Form Update successfully")
  }) 
}