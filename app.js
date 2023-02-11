
const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        console.log(entry)
        if(entry.isIntersecting){
        entry.target.classList.add('.showthis');
        }else{
            entry.target.classList.remove('.showthis');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidemytext');
hiddenElements.forEach((el)=>observer.observe(el));
