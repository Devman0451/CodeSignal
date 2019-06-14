function isIPv4Address(inputString) {
    return inputString.split(".").length == 4 && 
           inputString.split(".").reduce((tot, curr) => !isNaN(Number(curr)) && parseInt(curr) >= 0 && parseInt(curr) <= 255 ? tot += 1 : tot, 0) == 4;
}
