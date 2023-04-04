



//  const handleClick = (e) => {
//     e.preventDefault();
//     let current = e.currentTarget
//     // console.log(current.className)
//     if(current.classList.contains('fa-regular fa-heart')){
//       current.classList.add('fa-solid fa-heart')
//       current.classList.remove('fa-regular fa-heart')
//     }else{
//       current.classList.add('fa-regular fa-heart')
//       current.classList.remove('fa-solid fa-heart')
// }
// };


// const decrementBtn = document.getElementById("decrement");
// const incrementBtn = document.getElementById("increment");
// const valueSpan = document.getElementById("value");

// let value = 1;

// decrementBtn.addEventListener("click", () => {
//   value--;
//   valueSpan.textContent = value;
// });

// incrementBtn.addEventListener("click", () => {
//   value++;
//   valueSpan.textContent = value;
// });



$('.plus').click(function(e){
    e.preventDefault();
    var inuptValue = $(this).parent().parent().find('input').val()
    inuptValue = parseInt(inuptValue) + 1;
    $(this).parent().parent().find('input').val(inuptValue)
    console.log(inuptValue)
})
$('.minus').click(function(e){
    e.preventDefault();
    var inuptValue = $(this).parent().parent().find('input').val()
    if(inuptValue != 1){
        inuptValue = parseInt(inuptValue) - 1;
        $(this).parent().parent().find('input').val(inuptValue)
}

})
