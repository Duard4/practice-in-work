function copy(sender) {
    var copyText = sender.previousElementSibling;
    navigator.clipboard.writeText(copyText.innerHTML);
}
function shift_left () {
    var tr = document.getElementById("triangle");
    tr.classList.add('.triangle')
}
function shift_right () {
    var tr = document.getElementById("triangle");
    tr.classList.remove('.triangle')

}
