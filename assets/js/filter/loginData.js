const loginData = (data) => {
    console.log(data);
  
    const response = loginApi(data);
  
    if (!response) {
      alert("please valid password add!!!!");
      return;
    }
    console.log(response);
    sessionStorage.setItem("loginData", JSON.stringify(response));
    redirectPage("./index.php");
  };