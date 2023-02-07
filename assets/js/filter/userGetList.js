const UserGetList = () => {
  const { data } = userApi.GetList();
  const UserList = document.querySelector("#UserList");
  const User = data?.map((element, i) => {
    return `
            <tr>
            <td>${i + 1}</td>
            <td>${element?.role_id}</td>
            <td>${element?.f_name}${element?.m_name}${element?.l_name}</td>
            <td>${element?.state} ${element?.district} ${element?.block} ${
      element?.village
    }</td>
        
        <td class="text-center"><span><a href="frm-register_user.php?id=${
          element.id
        }"><i class="fas fa-edit mr-3 text-primary"></i></a></span>
                                    <span><a id="deleteRow-${
                                      element.id
                                    }" ><i class="fas fa-trash text-danger mr-1"></i></a></span></td> </tr>
        `;
  });
  UserList.innerHTML = User.join("");
  data?.forEach((data) => {
    if (!document.querySelector(`#deleteRow-${data.id}`)) return;
    document
      .querySelector(`#deleteRow-${data.id}`)
      .addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(`#deleteRow-${data.id}`).closest("tr").remove();
        const response = DeleteUserAPI(data.id);
      });
  });
};
