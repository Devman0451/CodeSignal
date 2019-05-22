function reverseInParentheses(inputString) {
    while (true) {
        let c = inputString.indexOf(")");    
        if (c === -1) break;
        let o = inputString.substring(0, c).lastIndexOf("(");
        let s = inputString.substring(0, o);
        let m = inputString.substring(o + 1, c).split("").reverse().join("");
        let e = inputString.substring(c + 1, inputString.length);
        inputString = s + m + e;
    }
    return inputString;
}