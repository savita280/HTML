function demoExternalAlert() {
    alert("External Alert")
}
function demoExternalConfirm() {
    if(confirm("Are you sure...")){
        alert("YESSS")
    }
    else{
        alert("NOOOO")
    }
}
function demoExternalPrompt() {
    var fname=prompt("Enter Firstname Here...");
    var lname=prompt("Enter Lastname Here...");
    alert(fname+" "+lname);
}