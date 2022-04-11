const change_theme = document.getElementById('changeTheme');
const body = document.body;
const title = document.getElementById('title')
const newTitle = document.createElement('h1');
newTitle.style = "color:whitesmoke;"
newTitle.textContent = "Classroom"


change_theme.addEventListener('click', () => {
    if(body.classList.contains('theme1')){
        body.classList.add('theme2');
        body.classList.remove('theme1');
        title.replaceWith(newTitle)
    }
    else{
        body.classList.add('theme1');
        body.classList.remove('theme2'); 
        newTitle.replaceWith(title)
    } 
})

