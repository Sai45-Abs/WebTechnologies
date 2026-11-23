const readline =  require('readline');
//Create command line interface
const rl = readline.createInterface({input: process.stdin,output: process.stdout});
console.log("Welcome to JavaScript CLI!");
console.log("1. Say Hello");
console.log("2. Add Two Numbers");
console.log("3. Exit");

rl.question("Enter your choice: ",function(choice){
switch (choice){
case '1':
console.log("Hello! Welcome to Node.js CLI.");
rl.close();
break;

case '2':
rl.question("Enter first number: ",function(a){
rl.question("Enter second number: ", function(b){
console.log("Sum = " + (Number(a)+ Number(b)));
rl.close();
});
});
break;

case '3':
console.log("Exiting CLI.Goodbye!");
rl.close();
break;

default:
console.log("Invalid Choice!");
rl.close();
}
});
