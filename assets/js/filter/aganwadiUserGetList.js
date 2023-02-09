const aganwadiUserGetList = () => {
  const { data } = aganwadiUserApi.GetList();
  const aganwadiuserList = document.querySelector("#aganwadiuserList");
  const aganwadiUser = data?.map((element, i) => {
    return `
            <tr>
            <td>${i + 1}</td>
            <td>${element?.anganwadi_name}</td>
            <td>${element?.f_name} ${element?.m_name} ${element?.l_name}</td>
            <td>${element?.contact_no}</td>
            <td>${element?.email}</td>
            <td>${element?.state} ${element?.district} ${element?.block} ${
      element?.village
    }</td>
        
        <td class="text-center"><span><a href="frm-aganwadi_user.php?id=${
          element.id
        }"><i class="fas fa-edit mr-3 text-primary"></i></a></span>
                                    <span><a id="deleteRow-${
                                      element.id
                                    }" ><i class="fas fa-trash text-danger mr-1"></i></a></span></td> </tr>
        `;
  });
  aganwadiuserList.innerHTML = aganwadiUser.join("");

  data?.forEach((data) => {
    if (!document.querySelector(`#deleteRow-${data.id}`)) return;
    document
      .querySelector(`#deleteRow-${data.id}`)
      .addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(`#deleteRow-${data.id}`).closest("tr").remove();
        const response = DeleteAganwadiUserAPI(data.id);
      });
  });
};
