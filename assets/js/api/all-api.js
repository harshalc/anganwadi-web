/* GET LIST API */
//  const GetUsersApi = () => {
//     return FetchApi('', "/user/index", "GET");
//   };

/* CREATE API */
//   const CreateUserApi = (data) => {
//     const stringifyObj=JSON.stringify(data)
//     return FetchApi2(stringifyObj, "/user/create", "POST");
//   };

/* GET BY ID API */
//   const GetUserByIdAPI = (id) => {
//     return FetchApi('', `/user/show/${id}`, "GET");
//   };

/* UPDATE API */
// const UpdateUserApi = (id, data) => {
//     const stringifyObj=JSON.stringify(data)
//     return FetchApi2(stringifyObj, `/user/${id}`, "PATCH");
//   };

/* DELETE API */
// const DeleteUserAPI = (id) => {
//     return FetchApi("", `/user/${id}`, "DELETE");
//   };


const userApi={
   login:function(json){
    return FetchApi2(json,``,"POST");
}
}

const addressApi={
   state:function(){
    return FetchApi();
   },
   district:function(params) {
    return FetchApi()
   },
   
}