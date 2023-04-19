function modifHidden() {
    var modifHidden = document.getElementById("hidden").value;
    const timestamp = new Date().getTime();
    const randomChars = Math.random().toString(36).substring(2, 5);
    const hash = `${timestamp}${randomChars}`;
    modifHidden = hash;
}