const studentGetList = () => {
  const { data } = studentApi.GetList();
  console.log(data, "asdada");

  const studentList = document.querySelector("#studentList");

  const student = data?.map((element, i) => {
    return `
            <tr>
            <td>${i + 1}</td>
            <td>${element?.anganwadi_id}</td>
            <td>${element?.f_name} ${element?.m_name} ${element?.l_name}</td>
            <td>${element?.mother_name}</td>
            <td>${element?.father_name}</td>
            <td>${element?.dob}</td>
            <td>${element?.gender}</td>
            <td>${element?.join_date}</td>
            <td>${element?.pass_date}</td>
            <td>${element?.state} ${element?.district} ${element?.block} ${
      element?.village
    }</td>
  <td class="text-center"><span><a href="schemeRegistration.php?id=${
    element.id
  }"><i class="fas fa-edit mr-3 text-primary"></i></a></span>
                            <span><a id="deleteRow-${
                              element.id
                            }" ><i class="fas fa-trash text-danger mr-1"></i></a></span></td> </tr>

        `;
  });

  studentList.innerHTML = student.join("");
};