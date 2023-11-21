var ref = document.querySelectorAll(".ref ul li");
for (let i = 0; i < ref.length; i++) {
    ref[i].addEventListener("mouseover", function(){
        ref[i].querySelector(".hiden").style.transition = "0.3s ease-in-out";
        setTimeout(() => {
            ref[i].querySelector(".hiden").style.opacity = 1;
        }, 300);
        ref[i].querySelector(".hiden").style.display = "block";
    })
    ref[i].addEventListener("mouseout", function(){
        ref[i].querySelector(".hiden").style.transition = "0.3s ease-in-out";
        setTimeout(() => {
            ref[i].querySelector(".hiden").style.opacity = 0;
        }, 300);
        ref[i].querySelector(".hiden").style.display = "none";
    })
}