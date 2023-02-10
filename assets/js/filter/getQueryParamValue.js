const idNameOfObj = {
  role_id: "Role",
  prakalpa_id: "Prakalpa id",
  bit_id: "Bit id",
  name: "Aganwadi Name",
  aganwadi_no: "Aganwadi Number",
  anganwadi_id: "Aganvadi Kendra",
  year: "Year",
  f_name: "First NAme",
  m_name: "Middle Name",
  l_name: "Last Name",
  mother_name: "Mother Name",
  father_name: "Father Name",
  dob: "Date Of Birth",
  gender: "Gender",
  join_date: "Joining Date to Aganwadi",
  join_photo: "Joining Date Photo",
  email: "Email",
  contact_no: "Contact Number",
  title: "Bit Name",
  state: "State",
  district: "District",
  block: "Taluka",
  village: "Tillage",
  zip_code: "Pin code",
};

const notFillValue = (arr) => {
  const arrOfValue = [];
  arr.forEach((val) => {
    arrOfValue.push(idNameOfObj[val]);
  });
  return arrOfValue;
};

const getQueryParamValue = (value) => {
  const params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
  });
  // Get the value of "some_key" in eg "https://example.com/?some_key=some_value"
  return params[value]; // "some_value"
};

// Zip Code Validation

function isUSAZipCode(str) {
  return /^\d{6}(-\d{4})?$/.test(str);
}

function zipCode() {
  console.log("validateInput NUUUUUUUUUUUUUUUU");
  let zipCode = document.getElementById("zip_code").value;
  let message = "";
  if (isUSAZipCode(zipCode)) {
    // message = "Valid Zip Code";
  } else {
    message = "Invalid  Zip Code  only 6 Digit No ";
  }
  document.getElementById("msg").innerHTML = message;
}

// function onlyNumberKey(evt) {
//   evt = evt ? evt : window.event;
//   var charCode = evt.which ? evt.which : evt.keyCode;
//   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
//     // alert("Please enter only Numbers.");
//     return false;
//   }

//   return true;
// }


function isUSAContactNO(str) {
  return /^\d{10}(-\d{4})?$/.test(str);
}

function contactNumber() {
  console.log("validateInput NUUUUUUUUUUUUUUUU");
  let contact_no = document.getElementById("contact_no").value;
  let message = "";
  if (isUSAContactNO(contact_no)) {
    // message = "Valid";
  } else {
    message = "Invalid Contact Number";
  }
  document.getElementById("msg1").innerHTML = message;
}

// Email ID
function checkEmail() {
  var email = document.getElementById('email');
  var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!filter.test(email.value)) {
      alert('Please provide a valid email address');
      email.focus;
      return false;
  }
}

// function emailId(str) {
//   return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
// }

// function checkEmail() {
//   console.log("validateInput NUUUUUUUUUUUUUUUU");
//   let email = document.getElementById("email").value;
//   let message = "";
//   if (emailId(email)) {
//     message = "Valid";
//   } else {
//     message = "Invalid Contact Number";
//   }
//   document.getElementById("msg").innerHTML = message;
// }
