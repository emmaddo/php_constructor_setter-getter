function minusPlus(arr){
    let positiveArray = [];
    let negativeArray = [];
    let zeroArray = [];
    for(let i = 0; i < arr.length; i++){
        if(arr[i] == 0){
            zeroArray.push(arr[i]);
        }
        else if(arr[i] >= 0){
            positiveArray.push(arr[i]);
        }
        else{
            negativeArray.push(arr[i]);
        }
    }
   const ratioPositive = (positiveArray.length / arr.length).toFixed(6);
   const ratioNegative = (negativeArray.length / arr.length).toFixed(6);
    const ratioZero = (zeroArray.length / arr.length).toFixed(6);
    //console.log(`${ratioPositive} ${ratioNegative} ${ratioZero}`);
    console.log(ratioPositive);
    console.log(ratioNegative);
    console.log(ratioZero);

/*
    return {
        ratioPositive,
        ratioNegative,
        ratioZero

    }
        */
}

minusPlus([-4, 3, -9, 0, 4, 1]);