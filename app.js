const change_theme = document.getElementById('changeTheme');
const body = document.body;
const title2 = document.getElementById('title2')
const title = document.getElementById('title')
const newTitle = document.createElement('h1');
newTitle.style = "color:white;"
// const newText = document.createTextNode("Hello Duniya")
newTitle.textContent = "Hello Rocky"
// newTitle.appendChild(newText)


change_theme.addEventListener('click', () => {
    if(body.classList.contains('theme1')){
        body.classList.add('newTheme');
        body.classList.remove('theme1');
        // title2.style= "display:block;";
        // title.style = "display:none;"
        // title.style.display = "none"
        title.replaceWith(newTitle)
    }
    else{
        body.classList.add('theme1');
        body.classList.remove('newTheme'); 
        // title2.style= "display:none;";
        // title.style = "display:block;"
        newTitle.replaceWith(title)
    } 
})

console.log(body.getAttribute('class'))
console.log(body.setAttribute('class', 'newTheme'))
console.log(body.getAttribute('class'))
