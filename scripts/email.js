function showEmail(userName, emServer) {

    userName = stringReverse(userName);
    emServer = stringReverse(emServer);

    let fullAddress = userName + "@" + emServer;
    let emailElement = document.getElementById("emailAddress")
    emailElement.innerHTML = "<a href= 'mailto: " + fullAddress + "'>" + fullAddress + "</a>";
}

function stringReverse(textString) {
    if (!textString) {
        return " ";
    }
    let revString = "";
    for (let i = textString.length - 1; i >= 0; i--) {
        revString += textString[i];
    }
    return revString;
}
