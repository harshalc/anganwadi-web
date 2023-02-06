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

// Praklpa API
const praklpaApi = {
  register: function (json) {
    const stringifyObj = JSON.stringify(json);
    return FetchApi2(
      stringifyObj,
      `/api_anganwadi/public/prakalpa/create`,
      "POST"
    );
  },
  getList: function () {
    return FetchApi("", `/api_anganwadi/public/prakalpa/listAll`, "GET");
  },
};

// Bit API

const bitApi = {
  register: function (json) {
    const stringifyObj = JSON.stringify(json);
    return FetchApi2(stringifyObj, `/api_anganwadi/public/bit/create`, "POST");
  },
  getList: function () {
    return FetchApi("", `/api_anganwadi/public/bit/listAll`, "GET");
  },
};

//Aganwadi API

const aganwadiApi = {
  register: function (json) {
    const stringifyObj = JSON.stringify(json);
    return FetchApi2(stringifyObj, `/api_anganwadi/public/anganwadi/create`, "POST");
  },
    GetList: function () {
    return FetchApi("", `/api_anganwadi/public/anganwadi/listAll`, "GET");
  },
};



// Address
 const addressApi = {
  state: function () {
    return FetchApi("", `/demographic-info/public/states/all`, "GET");
  },
  district: function (state_code) {
    return FetchApi("", `/demographic-info/public/districts/${state_code}`, "GET");
  },
  block: function (district_code) {
    return FetchApi("",`/demographic-info/public/blocks/${district_code}`,"GET")
  },
  village: function (block_code) {
    return FetchApi("", `/demographic-info/public/block/get/villages/${block_code}`, "GET");
  },
};




 
