const FetchApi = (data, path, method) => {
    let res;
    var settings = {
      url: `${"https://kitintellect.tech"}${path}`,
      data: data,
      dataType: "json",
      method: method,
      timeout: 0,
      async: false,
    };
  
    $.ajax(settings).done(function (response) {
      res = response;
    });
    return res;
  };
  

  const FetchApi2 = (data, path, method) => {
    
    let res;
    var settings = {
      url: `${"https://kitintellect.tech"}${path}`,
      data: data,
      dataType: "json",
      method: method,
      timeout: 0,
      async: false,
      headers: {
        "Content-Type": "application/json",
      },
    };
  
    $.ajax(settings).done(function (response) {
      res = response;
    });
    return res;

    
};
