// Image filter start
const filterButtons=document.querySelector("#filter-btns").children;
const item=document.querySelector(".portfolio-gallery").children;

for (let i=0; i<filterButtons.length; i++){
    filterButtons[i].addEventListener("click", function(){
        for (let j=0; j<filterButtons.length; j++){
            filterButtons[j].classList.remove("active") //remove active class from all button
        }
        this.classList.add("active"); //add active class to clicked button
        const target=this.getAttribute("data-target")

        for(let k=0; k<item.length; k++){
            item[k].style.display="none";
            if(target==item[k].getAttribute("data-id")){
                item[k].style.display="block";
            }
            if(target=="all"){
                item[k].style.display="block";
            }
        }
    })
}
// Image filter end 

// lightbox stat
const closeLightbox=document.querySelector(".close-lightbox");
const lightbox=document.querySelector(".lightbox");
const lightboximage=lightbox.querySelector("img")

// close lightbox when click on outside of lightbox image
lightbox.addEventListener("click", function(){
    if(event.target!=lightboximage){
        lightbox.classList.remove("show");
        lightbox.classList.add("hide");
    }
})

// close lightbox when click on close
    closeLightbox.addEventListener("click", function(){
        // document.querySelector(".lightbox").style.display="none";
        lightbox.classList.remove("show");
        lightbox.classList.add("hide");
    })
// // when click on plus icon show lightbox
const gallery=document.querySelector(".portfolio-gallery");
const galleryItem=gallery.querySelectorAll(".item");

galleryItem.forEach(function(element){
    element.querySelector(".fa-plus").addEventListener("click", function(){
        lightbox.classList.remove("hide");
        lightbox.classList.add("show"); 
        lightboximage.src=element.querySelector("img").getAttribute("src")    
    })
})
// lightbox end

// fixed header start
window.onscroll=function(){
    const docScrollTop=document.documentElement.scrollTop;

    if (window.innerWidth>991){
        if (docScrollTop>100){
            document.querySelector("header").classList.add("fixed")
        }
        else{
            document.querySelector("header").classList.remove("fixed")
        }
    }
}
// fixed header end

// active nav link start
const navbar = document.querySelector(".navbar");
a=navbar.querySelectorAll("a");

a.forEach(function(element){
    element.addEventListener("click", function(){
        for(let i=0; i<a.length; i++){
            a[i].classList.remove("active");
        }
        this.classList.add("active")
        document.querySelector(".navbar").classList.toggle("show");
    })
})
// active nav link end

// burger
const hamBurger=document.querySelector(".burger");
hamBurger.addEventListener("click", function(){
    document.querySelector(".navbar").classList.toggle("show");
})

// $(document).ready($('#contact_form').on('submit', function(event){
//   event.preventDefault();
// 		$.ajax({
      
// 			url: 'contact.php',
// 			method: 'POST',
// 			data: $("#contact_form").serialize(),
// 			success: function(data)
// 			{
// 				alert('success');
// 			}
//     }
// 		);
// }));