function arrayChange(inputArray) {
    let prev = inputArray[0], count = 0;
    
    for(let i = 1; i < inputArray.length; i++) {
        if(inputArray[i] <= prev) {
            count += prev - inputArray[i] + 1;
            prev += 1;
        } else {
            prev = inputArray[i];
        }
    }
    
    return count;
}
