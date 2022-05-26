function CopyToClipboard() {
    const copyText = document.getElementById("urlInput");

    copyText.select();

    navigator.clipboard.writeText(copyText.value);
}