function addBorder(picture) {
    const final = [];
    for(let i = 0; i < picture.length; i++) {
        final.push(`*${picture[i]}*`);
    }
    
    final.push("*".repeat(final[0].length));
    final.unshift("*".repeat(final[0].length));
    
    return final;
}