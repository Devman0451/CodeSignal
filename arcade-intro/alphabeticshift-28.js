function alphabeticShift(inputString) {
    return [...inputString].map(el => el.charCodeAt(0) + 1 > 122 ? "a" : String.fromCharCode(el.charCodeAt(0) + 1)).join("");
}
