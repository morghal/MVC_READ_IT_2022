document.getElementById('exo').addEventListener("click",(e)=>{
    e.preventDefault();
    const newCom = document.createElement('li');
    newCom.classList.add('comment');
    newCom.innerText = "This is a test !";
    document.querySelector('comment-list').append(newCom);
});