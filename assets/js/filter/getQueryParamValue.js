const idNameOfObj={
  role_id:"Role",
  prakalpa_id:"Prakalpa id",
  bit_id:"Bit id",
  name:"Aganwadi Name",
  aganwadi_no:"Aganwadi Number",
  anganwadi_id: "Aganvadi Kendra",
  year:"Year",
  f_name: "First NAme",
  m_name:"Middle Name",
  l_name:"Last Name",
  mother_name:"Mother Name",
  father_name:"Father Name",
  dob:"Date Of Birth",
  gender:"Gender",
  join_date:"Joining Date to Aganwadi",
  join_photo:"Joining Date Photo",
  state:"State",
  district:"District",
  block:"Taluka",
  village:"Tillage",
  zip_code:"Pin code",
}

const notFillValue=(arr)=>{
  const arrOfValue=[];
  arr.forEach((val)=>{
    arrOfValue.push(idNameOfObj[val])
  })
return arrOfValue;
}

const getQueryParamValue = (value) => {
    const params = new Proxy(new URLSearchParams(window.location.search), {
      get: (searchParams, prop) => searchParams.get(prop),
    });
    // Get the value of "some_key" in eg "https://example.com/?some_key=some_value"
    return params[value]; // "some_value"
  };