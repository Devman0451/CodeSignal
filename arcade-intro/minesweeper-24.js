function minesweeper(matrix) {
    return matrix.map((row, i) => {
        return row.map((el, j) => {
               let count = 0;
               for(let k = j - 1; k <= j + 1; k++) {
                   for(let l = i - 1; l <= i + 1; l++) {
                       if(k < 0 || l < 0 || k >= matrix[0].length || l >= matrix.length || (k === j && l === i)) continue;
                       if(matrix[l][k] === true) count++;
                   }
               }  
            return count;
        });
    });
}