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
        // if(key==="prakalpa_id"){
        // selector.value=data[key];
        // return
        // }
        // if(key==="bit_id"){
        //     selector.value=data[key]
        // }
        if(key=="block"){
            blocksOptionsSet(data["district"],data[key])
            return ;
        }
        if(key=="village"){

            villageOptionsSet(data["block"],data[key])
            return;
        }
        if(key=="join_photo"||key=="pass_photo")return
        else selector.value=data[key];  
    })
}