const prakalpaGetList = () => {
  const { data } = praklpaApi.getList();
  const praklpaList = document.querySelector("#praklpaList");
  const praklp = data?.map((element, i) => {
    return `
        <tr>
        <td>${i + 1}</td>
        <td>${element?.title}</td>
        <td class="text-center"><span><a href="frm-register_praklpa.php?id=${
          element.id
        }"><i class="fas fa-edit mr-3 text-primary"></i></a></span>
                                    <span><a id="deleteRow-${
                                      element.id
                                    }" ><i class="fas fa-trash text-danger mr-1"></i></a></span></td> </tr>
    `;
  });

  praklpaList.innerHTML = praklp.join("");

  data?.forEach((data) => {
    if (!document.querySelector(`#deleteRow-${data.id}`)) return;
    document
      .querySelector(`#deleteRow-${data.id}`)
      .addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(`#deleteRow-${data.id}`).closest("tr").remove();
        const response = DeletePraklpaAPI(data.id);
      });
  });
};
