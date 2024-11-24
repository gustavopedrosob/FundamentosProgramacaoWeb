function onCopyToClipboard(element) {
    const codeElement = element.nextElementSibling;
    codeElement.select();
    document.execCommand("copy");
    const selection = window.getSelection();
    selection.removeAllRanges();
}