const bitGEtList=()=>{
    const {data} = bitApi.getList()
        console.log(data,"get lis datat");
    
        const bitList=document.querySelector("#bitList")
    
        const bit=data?.map((element,i)=>{
            return `
            <tr>
            <td>${i+1}</td>
            <td>${element?.title}</td>
        </tr>
        `
        })
        
        bitList.innerHTML=bit.join("");
        
    }