function copy(sender) {
    var copyText = sender.previousElementSibling;
    navigator.clipboard.writeText(copyText.innerHTML);
}
