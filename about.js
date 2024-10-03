const counters = document.querySelectorAll(".counters span");
const container = document.querySelector(".counters");

let activated = false;


window.addEventListener("scroll", () =>{
    if(scrollY > container.offsetTop - container.offsetHeight - 200 && activated === false)
        counters.forEach(counter => {
            counter.innerText = 0;
            let count = 0;

            function updateCount(){
                const target = parseInt(counter.dataset.count);
                if(count < target){
                    count++;
                    counter.innerText = count;
                    setTimeout(updateCount, 15);
                }
                else{
                    counter.innerText = target;
                }
            }
            updateCount();
            activated = true;
        });
     else if(scrollY < container.offsetTop - container.OffsetHeight - 500 || scrollY === 0 && activated === true){
        counters.forEach(counter => {
            counter.innerText = 0;
        });
        activated = false;

    }

    });

