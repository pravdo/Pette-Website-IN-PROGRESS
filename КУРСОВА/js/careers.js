// Upload a file
const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click",function (){ // fire the real button by clicking the custom one
    realFileBtn.click();
});

realFileBtn.addEventListener("change",function (){
    if(realFileBtn.value){
        customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1]; // this RegX will extract the file name from the path
    }else {                                                                     // [1] - the file name can be found in the first element of the returned array
        customTxt.innerText = "Нямате избран файл";
    }
})