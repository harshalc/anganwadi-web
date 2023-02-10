const parseData = (objName) => {
  if (!sessionStorage.getItem(`${objName}`)) return;
  return JSON.parse(sessionStorage.getItem(`${objName}`));
};

let userSession = parseData("user");
if (userSession?.id === undefined) {
  window.location.replace("frm-login.php");
}
console.log(userSession )

document.querySelector("#user_login_name").innerHTML=userSession.f_name