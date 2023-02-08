const praklpOpstionList = () => {
  const { data } = praklpaApi.getList();
  const optionset = [];
  optionset.push(`<option value="">Select option</option>`);

  data?.forEach((element) => {
    const html = `<option value="${element.id}">${element.title}</option>`;
    optionset.push(html);
  });
  document.querySelector("#title").innerHTML = optionset.join("");
};

const bitOpstionList = () => {
    const { data } = bitApi.getList();
    const optionset = [];
    optionset.push(`<option value="">Select option</option>`);
    data?.forEach((element) => {
      const html = `<option value="${element.id}">${element.title}</option>`;
      optionset.push(html);
    });
    document.querySelector("#title1").innerHTML = optionset.join("");
  };
  // State 
  const stateOptionsSet = (selectedStateCode) => {
    const { data } = addressApi.state();
    const stateSelect = document.querySelector("#state");
    const DistrictName = document.querySelector("#district");
    const blocksName = document.querySelector("#block");
    const villageName = document.querySelector("#village");
    const optionArray = [];
    optionArray.push(` <option value="" >Select states</option>`);
    data.forEach(({ state_code, state_title }) => {
      const option = `<option value=${state_code} ${state_code==selectedStateCode?"selected":""}>${state_title}</option>`;
      optionArray.push(option);
    });
    stateSelect.innerHTML = optionArray.join("");
    stateSelect.addEventListener("change", (e) => {
      DistrictName.innerHTML = " <option value='' >Select district</option>";
      blocksName.innerHTML = " <option value=''>Select Taluka</option>";
      villageName.innerHTML = " <option value=''>Select villages</option>";
      districtOptionsSet(e.target.value);
    });
  };

  //district

  const districtOptionsSet = (state_code,selectedDistrictCode) => {
    console.log("statet code ",state_code);
    const { data } = addressApi.district(state_code);
    const DistrictName = document.querySelector("#district");
    const blocksName = document.querySelector("#block");
   // const grampanchayatName = document.querySelector("#grampanchayatName");
    const villageName = document.querySelector("#village");
    const optionArray = [];
    optionArray.push(` <option  value="" >Select</option>`);
    console.log("district option set data",data);
    data.forEach(({district_code,district_title}) => {
      const option = `<option value=${district_code} ${selectedDistrictCode==district_code?"selected":""}>
      ${district_title}</option>`;
      optionArray.push(option);
    });
    DistrictName.innerHTML = optionArray.join("");
    DistrictName.addEventListener("change", (e) => {
      blocksName.innerHTML = " <option value=''>Select Taluka</option>";
      villageName.innerHTML = " <option value=''>Select villages</option>";
      blocksOptionsSet(e.target.value);
    });
  };
  // Taluka 

  const blocksOptionsSet = (district_code, blockCode, isDisabled) => {
    const { data } = addressApi.block(district_code);
    const blocksName = document.querySelector("#block");
    const grampanchayatName = document.querySelector("#grampanchayatName");
    const villageName = document.querySelector("#village");
    const optionArray = [];
    optionArray.push(` <option  value="">Select</option>`);
    console.log("data-----",data);
  data.forEach((block) => {
      const options = `<option value=${block.block_code} ${
        blockCode == block.block_code ? "selected" : ""
      }>${block.block_title}</option>`;
      optionArray.push(options);
    });
  
    blocksName.innerHTML = optionArray.join("");
    isDisabled &&
      (blocksName.disabled = true) &&
      grampanchayatOptionsSet(blockCode);
    blocksName.addEventListener("change", (e) => {
      villageName.innerHTML = " <option value='' >Select villages</option>";
      console.log(e.target.value);
      villageOptionsSet(e.target.value);
    });
  };

  //village

const villageOptionsSet=(talukaCode,selectedVillageCode)=>{
  const { data}=addressApi.village(talukaCode);
  const VillageName=document.querySelector("#village");
  const optionArray = []
  optionArray.push (` <option  value="">Select</option>`)
 data.forEach(Village=>{
  const options =`<option value=${Village.village_code} ${selectedVillageCode==Village.village_code?"selected":""}>${Village.village_name}</option>`
  optionArray.push(options)
 })
 VillageName.innerHTML = optionArray.join("");
 VillageName.addEventListener("change",(e)=>{
 })
}