const cateTag = document.querySelector('.category-tag')
const category= document.querySelector('#category__list')
cateTag.addEventListener('click', ()=>{
    category.classList.toggle('active')
})

const userAccount = document.querySelector('.user__account')
const userAction= document.querySelector('.user__account ~ ul')
userAccount.addEventListener('click', ()=>{
    userAction.classList.toggle('active')
})

const header = document.querySelector('.header__container')
window.addEventListener('scroll', e =>{
    if (window.scrollY >=146 ) {
        header.className = `header__container active`
    }else{
        header.className = `header__container`

    }
})