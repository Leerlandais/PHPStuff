var temp1 = 33;
var temp2 = 27;
var temp3 = 29;

var myTemps = [temp1, temp2, temp3];

console.log(myTemps);

var myTemps = [33, 27, 29];
var temp1 = myTemps[0];
var temp2 = myTemps[1];
var temp3 = myTemps[2];


console.log(myTemps);
console.log (temp1, temp2, temp3)


------------------

------------------
var myDataUsage = [246, 372, 1352, 199, 289];
console.log(myDataUsage[0], myDataUsage[3]);


------------------


var myDataUsage = [246, 372, 1352, 199, 289];

myDataUsage[4] = 972;
console.log(myDataUsage);



-----------
var positions = [[21, 13], [17, 33], [45, 12], [7, 37]];

console.log(positions[1], "array 2");
console.log(positions[2][1], "12");
positions[3][1] = 49;
console.log(positions);
positions[0] = [2, 38];
console.log(positions);

-------------
var positions = [[21, 13], [17, 33], [45, 12], [7, 37]];
var firstOfArray = [];
for(i = 0; i < positions.length; i++){
    firstOfArray.push(positions[i][0]);
}
console.log(firstOfArray);