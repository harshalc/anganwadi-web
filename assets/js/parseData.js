const parseData = (objName) => {
  if (!sessionStorage.getItem(`${objName}`)) return;
  return JSON.parse(sessionStorage.getItem(`${objName}`));
};
