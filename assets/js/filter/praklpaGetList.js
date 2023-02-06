const prakalpaGetList=()=>{
const {data} = praklpaApi.getList()
    console.log(data,"get lis datat");

    const praklpaList=document.querySelector("#praklpaList")

    const praklp=data?.map((element,i)=>{
        return `
        <tr>
        <td>${i+1}</td>
        <td>${element?.title}</td>
    </tr>
    `

    })
    
    praklpaList.innerHTML=praklp.join("");
    
}