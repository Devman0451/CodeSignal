function sortByHeight(a) {
    const final = a.filter(el => el !== -1).sort((a, b) => a - b);
    return a.map(el => {
        if (el !== -1) return final.shift();
        else return -1;
    });
}