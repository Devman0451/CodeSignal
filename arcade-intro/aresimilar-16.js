function areSimilar(a, b) {
    let mismatch = [];
    const sum1 = a.reduce((total, curr) => total + curr, 0);
    const sum2 = b.reduce((total, curr) => total + curr, 0);
    if(sum1 !== sum2) return false;
    for (let i = 0; i < a.length; i++) {
        if(!b.includes(a[i])) return false;
        if(a[i] !== b[i]) mismatch.push(true);
    }
    return mismatch.length <= 2;
}