let mainContainer;

window.onload = async function(){
    mainContainer =  await document.getElementById("main");
    let contents = $("content");
    contents.each((i,element) => {
            console.log('XX', element);
            element.style.height = "92vh";
            // element.style.display = "block";
    });
}

function handleMenuClick(menuClicked){
    let content = document.getElementById(menuClicked);
    switch (menuClicked) {
        case "home":
            swapContent(menuClicked) ;   
            break;
        case "crm_details":
            swapContent(menuClicked);
            break;
        case "iot_details":
            swapContent(menuClicked);
            break;
        default:
            alert("default")
    }
}

function swapContent(menuClicked){
    mainContainer.innerHTML = "";
    content = document.getElementById(menuClicked).innerHTML;
    mainContainer.innerHTML = content;
}