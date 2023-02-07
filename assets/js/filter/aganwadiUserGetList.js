const aganwadiUserGetList=()=>{
    const {data} = aganwadiUserApi.GetList()
    console.log(data,"User List Print");
    
        const aganwadiuserList=document.querySelector("#aganwadiuserList")
    
        const aganwadiUser=data?.map((element,i)=>{
            return `
            <tr>
            <td>${i+1}</td>
            <td>${element?.anganwadi_id}</td>
            <td>${element?.f_name}${element?.m_name}${element?.l_name}</td>
            <td>${element?.contact_no}</td>
            <td>${element?.email}</td>
            <td>${element?.state} ${element?.district} ${element?.block} ${element?.village}</td>
        </tr>
        `
        })
        aganwadiuserList.innerHTML=aganwadiUser.join("");
        
    }