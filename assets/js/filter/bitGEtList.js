const bitGEtList = () => {
  const { data } = bitApi.getList();
  const bitList = document.querySelector("#bitList");
  const bit = data?.map((element, i) => {
    return `
            <tr>
            <td>${i + 1}</td>
            <td>${element?.title}</td>
        
        <td class="text-center"><span><a href="frm-register_bit.php?id=${
          element.id
        }"><i class="fas fa-edit mr-3 text-primary"></i></a></span>
                                    <span><a id="deleteRow-${
                                      element.id
                                    }" ><i class="fas fa-trash text-danger mr-1"></i></a></span></td> </tr>
        `;
  });
  bitList.innerHTML = bit.join("");
  data?.forEach((data) => {
    console.log(data);
    if (!document.querySelector(`#deleteRow-${data.id}`)) return;
    document
      .querySelector(`#deleteRow-${data.id}`)
      .addEventListener("click", (e) => {
        e.preventDefault();
        console.log("this is click event");
        document.querySelector(`#deleteRow-${data.id}`).closest("tr").remove();
        const response = DeleteBitpaAPI(data.id);
        console.log("swapnil pagar", response);
      });
  });
};
