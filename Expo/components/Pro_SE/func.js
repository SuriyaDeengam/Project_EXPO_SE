$(function() {
    $("#nav").load("./head.php");
    $("#page").load("./group.php");
    $("#foot").load("./footer.php");
})

function selectteceher() {
    $("#page").load("./teach.php");
}

function selectgroup() {
    $("#page").load("./group.php");
}
function creategroup() {
    $("#page").load("./creategroup.php");
}
function deletegroup() {
    $("#page").load("./deletegroup.php");
}
function evaluation() {
    $("#page").load("./eva.php");
}
// function evaluation() {
//     $("#page").load("./evaluation.php");
// }
function assignpage() {
    $("#page").load("./assignment.php");
}
function commit() {
    $("#page").load("./commite.php");
}
function check(){
    $("#page").load("./score.php");
}
function addteacher(){
    $("#page").load("./addteacher.php");
}
function ale(){
    alert("test");
}
