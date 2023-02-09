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


// Login Api

const loginApi = (data) => {
  const stringifyData = JSON.stringify(data);
  return FetchApi(stringifyData, "/api_anganwadi/public/login", "POST");
};

// Praklpa API

const stringifyData = (data) => {
  return JSON.stringify(data);
};

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
  get: function (id) {
    return FetchApi("", `/api_anganwadi/public/prakalpa/${id}`, "GET");
  },
  update: function (id, json) {
    console.log(id, json);
    return FetchApi2(
      stringifyData(json),
      `/api_anganwadi/public/prakalpa/update/${id}`,
      "PATCH"
    );
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
  get: function (id) {
    return FetchApi("", `/api_anganwadi/public/bit/${id}`, "GET");
  },
  update: function (id, json) {
    return FetchApi2(
      stringifyData(json),
      `/api_anganwadi/public/bit/update/${id}`,
      "PATCH"
    );
  },
};

//Aganwadi API

const aganwadiApi = {
  register: function (json) {
    const stringifyObj = JSON.stringify(json);
    return FetchApi2(
      stringifyObj,
      `/api_anganwadi/public/anganwadi/create`,
      "POST"
    );
  },
  GetList: function () {
    return FetchApi("", `/api_anganwadi/public/anganwadi/listAll`, "GET");
  },

  get: function (id) {
    return FetchApi("", `/api_anganwadi/public/anganwadi/${id}`, "GET");
  },
  update: function (id, json) {
    return FetchApi2(
      stringifyData(json),
      `/api_anganwadi/public/anganwadi/update/${id}`,
      "PATCH"
    );
  },
};

// Aganwadi User Api

const aganwadiUserApi = {
  register: function (json) {
    const stringifyObj = JSON.stringify(json);
    return FetchApi2(
      stringifyObj,
      `/api_anganwadi/public/anganwadi_user/create`,
      "POST"
    );
  },
  GetList: function () {
    return FetchApi("", `/api_anganwadi/public/anganwadi_user`, "GET");
  },
  get: function (id) {
    return FetchApi("", `/api_anganwadi/public/anganwadi_user/${id}`, "GET");
  },
  update: function (id, json) {
    return FetchApi2(
      stringifyData(json),
      `/api_anganwadi/public/anganwadi_user/update/${id}`,
      "PATCH"
    );
  },
};

// Student Api
const studentApi = {
  register: function (json) {
    const stringifyObj = JSON.stringify(json);
    return FetchApi2(
      stringifyObj,
      `/api_anganwadi/public/student/create`,
      "POST"
    );
  },
  GetList: function () {
    return FetchApi("", `/api_anganwadi/public/students/listAll`, "GET");
  },

  get: function (id) {
    return FetchApi("", `/api_anganwadi/public/student/${id}`, "GET");
  },
  update: function (id, json) {
    return FetchApi2(
      stringifyData(json),
      `/api_anganwadi/public/student/update/${id}`,
      "PATCH"
    );
  },
};

//user Api

const userApi = {
  register: function (json) {
    const stringifyObj = JSON.stringify(json);
    return FetchApi2(stringifyObj, `/api_anganwadi/public/user/create`, "POST");
  },
  GetList: function () {
    return FetchApi("", `/api_anganwadi/public/users/listAll`, "GET");
  },
  get: function (id) {
    return FetchApi("", `/api_anganwadi/public/user/${id}`, "GET");
  },
  update: function (id, json) {
    return FetchApi2(
      stringifyData(json),
      `/api_anganwadi/public/user/update/${id}`,
      "PATCH"
    );
  },
};

/* DELETE API */

const DeletePraklpaAPI = (id) => {
  return FetchApi("", `/api_anganwadi/public/prakalpa/delete/${id}`, "DELETE");
};

const DeleteBitpaAPI = (id) => {
  return FetchApi("", `/api_anganwadi/public/bit/delete/${id}`, "DELETE");
};

const DeleteStudentAPI = (id) => {
  return FetchApi("", `/api_anganwadi/public/student/delete/${id}`, "DELETE");
};

const DeleteUserAPI = (id) => {
  return FetchApi("", `/api_anganwadi/public/user/delete/${id}`, "DELETE");
};
const DeleteAganwadiAPI = (id) => {
  return FetchApi("", `/api_anganwadi/public/anganwadi/delete/${id}`, "DELETE");
};

const DeleteAganwadiUserAPI = (id) => {
  return FetchApi("", `/api_anganwadi/public/anganwadi_user/${id}`, "DELETE");
};

// All Address
const addressApi = {
  state: function () {
    return FetchApi("", `/demographic-info/public/states/all`, "GET");
  },
  district: function (state_code) {
    return FetchApi(
      "",
      `/demographic-info/public/districts/${state_code}`,
      "GET"
    );
  },
  block: function (district_code) {
    return FetchApi(
      "",
      `/demographic-info/public/blocks/${district_code}`,
      "GET"
    );
  },
  village: function (block_code) {
    return FetchApi(
      "",
      `/demographic-info/public/block/get/villages/${block_code}`,
      "GET"
    );
  },
};
