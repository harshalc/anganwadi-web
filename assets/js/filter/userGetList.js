const UserGetList=()=>{
    const {data} = userApi.GetList()
    console.log(data,"User List Print uuuuuuuuuuuuuuuu");
    
        const UserList=document.querySelector("#UserList")
    
        const User=data?.map((element,i)=>{
            return `
            <tr>
            <td>${i+1}</td>
            <td>${element?.role_id}</td>
            <td>${element?.f_name}${element?.m_name}${element?.l_name}</td>
            <td>${element?.state} ${element?.district} ${element?.block} ${element?.village}</td>
        </tr>
        `
        })
        UserList.innerHTML=User.join("");
        
    }