let mainContainer;

window.onload = async function(){
    mainContainer =  await document.getElementsByTagName("main")[0];
    let contents = $("content");
    contents.each((i,element) => {
            console.log('XX', element);
            element.style.height = "78vh";
            if(i%2 == 1){
                element.style.backgroundColor = "#f5f5f5";
            }
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