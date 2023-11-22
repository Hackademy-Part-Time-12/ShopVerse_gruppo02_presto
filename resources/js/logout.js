let btn=document.getElementById('btn');
let form=document.getElementById('form');

btn.addEventListener('click',(event)=>{
    event.preventDefault();
    form.submit();
})
