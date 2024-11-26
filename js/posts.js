function onCopyToClipboard(element) {
    const codeElement = element.nextElementSibling;
    codeElement.select();
    document.execCommand("copy");
    const selection = window.getSelection();
    selection.removeAllRanges();
}


function onDeletePost(modal, id) {
    modal.showModal();
    const a = modal.querySelector("a");
    a.href = `deletePost.php?id=${id}`;
}