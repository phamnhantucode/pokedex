let amount = 60
let randomMode = false;
const colors = {
    fire: '#FDDFDF',
    grass: '#DEFDE0',
	electric: '#FCF7DE',
	water: '#DEF3FD',
	ground: '#f4e7da',
	rock: '#d5d5d4',
	fairy: '#fceaff',
	poison: '#98d7a5',
	bug: '#f8d5a3',
	dragon: '#97b3e6',
	psychic: '#eaeda1',
	flying: '#F5F5F5',
	fighting: '#E6E0D4',
	normal: '#F5F5F5'
}

const API_URL ='https://pokeapi.co/api/v2/pokemon/${id}'
const APT_img =`https://assets.pokemon.com/assets/cms2/img/pokedex/detail/001.png`
const container = document.getElementById('container')
window.addEventListener('load',()=> {
    ramdomPoke()
    listingPokes(randomMode)
})
const listingPokes = async (mode)=>{
    let pokes=``
    if (!mode) {
        for (let i = 1; i <= amount; i++) {
            const url = `https://pokeapi.co/api/v2/pokemon/${i}`
            const res = await fetch(url)
            const data = await res.json()
            pokes+=createPoke(data)
        }
        
    }else {
        for (let i = 1; i <= amount; i++) {
            let id = Math.floor(Math.random() * 905)
            const url = `https://pokeapi.co/api/v2/pokemon/${id}`
            const res = await fetch(url)
            const data = await res.json()
            pokes+=createPoke(data)
        }
    }
    container.innerHTML = pokes
}
function createPoke(data){
    let id=""
    if (data.id < 100 ) {
        if (data.id < 10 ) {
                id = "00" + data.id
        }else {
                id = "0"+data.id
        }
    }else{
        id = data.id
    }
    const types = data.types.map(stt=>stt.type.name)
    const x = types.map(type =>{
                const typeName = type[0].toUpperCase() + type.slice(1,type.length)
                return `<span style ="background-color: ${colors[type] || colors['normal']}">${typeName}</span>`
    }) .join('')
    const poke = `
    
            <a class="poke-wrapper" href="./${id}">
                <div class="card">
                    <div class="img-wrapper" style="">
                        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/${id}.png" alt="">
                    </div>
                    <div class="short-info">
                        <div class="">
                            <h3>#${id}</h3>
                            <h2>${data.name[0].toUpperCase() + data.name.slice(1,data.name.length)}</h2>
                            
                        </div>
                        <div class="type">
                            ${x}
                        </div>
                    </div>
                </div>
            </a>`
            return poke
}

const loadMorePoke = async () => {
    let pokes=``
    if (!randomMode) {
        for (let i = amount + 1 ; i <= amount + 12; i++) {
            const url = `https://pokeapi.co/api/v2/pokemon/${i}`
            const res = await fetch(url)
            const data = await res.json()
            pokes+=createPoke(data)
        }
        
    }else{
        for (let i = amount + 1 ; i <= amount + 12; i++) {
            let id = Math.floor(Math.random() * 905)
            const url = `https://pokeapi.co/api/v2/pokemon/${id}`
            const res = await fetch(url)
            const data = await res.json()
            pokes+=createPoke(data)
        }
    }
    container.innerHTML += pokes
    amount+=12
}
const loadmoreBtn = document.getElementById('loadmore')
loadmoreBtn.addEventListener('click', ()=>{
    loadMorePoke()
})

const ramdomPoke = async ()=>{
    const listRandom = document.getElementById('poke-random-list')
    let pokes=``
    for (let i = 1; i <= 13; i++) {
        let id = Math.floor(Math.random() * 905)
        const url = `https://pokeapi.co/api/v2/pokemon/${id}`
        const res = await fetch(url)
        const data = await res.json()
        pokes += addRandomPoke(data, i)
    }
    listRandom.innerHTML += pokes
}

function addRandomPoke(data, i) {
    let id=""
    if (data.id < 100 ) {
        if (data.id < 10 ) {
                id = "00" + data.id
        }else {
                id = "0"+data.id
        }
    }else{
        id = data.id
    }
    const poke = `
            <div  id="poke-random--${(i != 13 )? i : 'center'}" class="poke-link-wrapper">
                        <a href="" class="poke-random-link">
                            <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/${id}.png" alt="">
                        </a>
                    </div>
    `
    return poke
}
function floorId(id){
    let rightId =''
    if (id < 100 ) {
        if (id < 10 ) {
            rightId = "00" + id
        }else {
            rightId = "0"+id
        }
    }else{
        rightId =id
    }
    return rightId
}
const searchBtn = document.querySelector('#btn-submit')
const searchText = document.querySelector('#form-search-input')
searchText.addEventListener('keypress', (e)=> {
    if (e.key == 'Enter') {
        searchFunc()
    }
})
searchBtn.addEventListener('click', ()=>{
    searchFunc()
})

const searchFunc = async ()=>{
    const valueToSearch = searchText.value
    if (!isNaN(valueToSearch)) {
        const id = +valueToSearch
        if (id<=905) {
            const url = `https://pokeapi.co/api/v2/pokemon/${id}`
            const res = await fetch(url)
            const data = await res.json()
            const poke = createPoke(data)
            container.innerHTML = poke
            
        }
    }else {
        let pokes=``
        for (let i = 1; i <= 905; i++) {
            const url = `https://pokeapi.co/api/v2/pokemon/${i}`
            const res = await fetch(url)
            const data = await res.json()
            if (data.name.includes(valueToSearch)) {
                pokes += createPoke(data)
            }
        }

        container.innerHTML=pokes
    }
    searchText.value =''
}

(async ()=>{
    const url = `https://pokeapi.co/api/v2/pokemon`
        const res = await fetch(url)
        const data = await res.json()
        console.log(data['results']);
})()

const randomBtn = document.querySelector('.random')
randomBtn.addEventListener('click', ()=>{
    changeMode()
    listingPokes(randomMode)
    randomBtn.classList.toggle('random-mode')
})

function changeMode(){
    randomMode=!randomMode;
}
(() => {
    const typesGr = document.querySelector('.type-group')
    let types =``
    for (const key in colors) {
        const type =`
                    <input type="checkbox" id="${key}-label" value="${key}">
                    <label style="color: ${colors[key]}; border-color:${colors[key]}" for="${key}-label" >${key[0].toUpperCase()+key.slice(1, key.length)}</label>
        `
        types+=type
    }
    typesGr.innerHTML=types
    
    const inputs = document.querySelectorAll('input[type=checkbox]')
    const limit=2;
    inputs.forEach(input =>{
        input.addEventListener('change', ()=>{
            const inputChecked = document.querySelectorAll('input[type=checkbox]:checked')
            if (inputChecked.length>2) {
                input.checked = false 
            }else{
                console.log(11);
                setLabelType()
            }
        })
    })
    const search = document.getElementById('search-type')
    search.addEventListener('click', ()=>{
        const inputChecked = document.querySelectorAll('input[type=checkbox]:checked')
        const inputCheckedArr = Array.from(inputChecked) 
        const types = inputCheckedArr.map(type => type.value)
        console.log(types);
        searchByTypes(types)
    })

    const openAdvBtn = document.querySelector('.open-advance')
    openAdvBtn.addEventListener('click', ()=>{
    const btn = document.querySelector('#search-type')

    typesGr.classList.toggle('show')
    btn.classList.toggle('show')

    openAdvBtn.innerText = openAdvBtn.innerText == 'Close Advance Searching'? 'Open Advance Searching': 'Close Advance Searching'
})
})()

const userImg = document.getElementById('header-personal')
userImg.addEventListener('click', ()=>{
    const userI = document.querySelector('#header-personal-feature')
    userI.addEventListener('click',e =>{
        e.stopPropagation()
    })
    userI.classList.toggle('show')
})

async function searchByTypes(arr){
    let pokes =``
    for (let i = 1; i < 100; i++) {
        let type1 = false
        let type2 = false
        const url = `https://pokeapi.co/api/v2/pokemon/${i}`
        const res = await fetch(url)
        const data = await res.json()
        const types = data.types.map(stt=>stt.type.name)
        type1 = types.find(type => type==arr[0])
        type2 = types.find(type => type==arr[1])
        if (arr.length==1) {
            if (type1) {
                pokes += createPoke(data)
            }  
        }else{
            if (type1&&type2) {
                pokes += createPoke(data)
            }  
        }
    }
    container.innerHTML=pokes
}

function setLabelType(){
    const labelsChecked = document.querySelectorAll('.type-group input:checked + label')
    labelsChecked.forEach(label => {
        label.classList.add('on')
    })

    const labelsNotChecked = document.querySelectorAll('.type-group input:not(:checked) + label')
    labelsNotChecked.forEach(label => {
        label.classList.remove('on')
    })
}

