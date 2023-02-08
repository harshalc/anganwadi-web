const setValuesForm=(data)=>{
    console.log("data foe set form",data);
    Object.keys(data).forEach(key=>{
        const selector=document.querySelector(`#${key}`)
        if(!selector) return
        if(key=="state"){
            stateOptionsSet(data[key])
            return;
        }
        if(key=="district"){
            districtOptionsSet(data["state"],data[key])
            return;
        }
        if(key=="block"){
            blocksOptionsSet(data["district"],data[key])
            return ;
        }
        if(key=="village"){

            villageOptionsSet(data["block"],data[key])
            return;
        }
        // if(key=="photo"||key=="anotherphotoid")return
        else selector.value=data[key];  
    })
}