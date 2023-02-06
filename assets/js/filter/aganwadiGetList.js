const aganwadiGetList=()=>{
    const {data} = aganwadiApi.GetList()
        console.log(data,"get lis datat");
    
        const aganwadiList=document.querySelector("#aganwadiList")
    
        const aganwadi=data?.map((element,i)=>{
            return `
            <tr>
            <td>${i+1}</td>
            <td>${element?.name}</td>
            <td>${element?.aganwadi_no}</td>
            <td>${element?.prakalpa_id}</td>
            <td>${element?.bit_id}</td>
            <td>${element?.year}</td>
            <td>${element?.state} ${element?.district} ${element?.block} ${element?.village}</td>
        </tr>
        `
        })
        
        aganwadiList.innerHTML=aganwadi.join("");
        
    }