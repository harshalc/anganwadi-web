const updatePraklpa = (id) => {
    const {status,data}=praklpaApi.get(id)
    console.log("dtatatatatatatatatat",data);
  const title=document.querySelector("#title");

  title.value=data.title;

  document.querySelector("#submit").addEventListener("click",(e)=>{
  e.preventDefault();
  const json={title:title.value}
  const resp=praklpaApi.update(id,json);
  console.log("response ",resp);
  alert("Form Update successfully")
  window.location.href="list-prakalpa.php";
  }) 
}