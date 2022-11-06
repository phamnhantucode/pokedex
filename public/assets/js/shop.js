let priceMin =0
let priceMax =1000000

const calcLeftPosition = value =>{
    return (value / 1000000) * 100
}

const line = document.querySelector('#line')
const rangeMin = document.querySelector('#rangeMin')
const thumbMin = document.querySelector('#thumbMin')
const minPrice = document.querySelector('#min-price')
const maxPrice = document.querySelector('#max-price')
rangeMin.addEventListener('input',(e)=>{
    const MaxValue = rangeMax.value
    const newMinValue = parseInt(e.target.value)
    if (newMinValue > MaxValue) {
        newMinValue = MaxValue
    }else{
        rangeMin.value = newMinValue
        minPrice.innerText=newMinValue
        thumbMin.style.left= `${calcLeftPosition(newMinValue)}%`
        line.style.left =`${calcLeftPosition(newMinValue)}%`
        line.style.right =`${100 - calcLeftPosition(MaxValue)}%`
    }

})


const thumbMax = document.querySelector('#thumbMax')
const rangeMax = document.querySelector('#rangeMax')
rangeMax.addEventListener('input',(e)=>{
    const MinValue =rangeMin.value
    const newMaxValue = parseInt(e.target.value)
    if (newMaxValue < MinValue) {
        newMaxValue = MinValue
    }else{
        maxPrice.innerText=newMaxValue
        thumbMax.style.left= `${calcLeftPosition(newMaxValue)}%`
        line.style.left =`${calcLeftPosition(MinValue)}%`
        line.style.right =`${100 - calcLeftPosition(newMaxValue)}%`
    }
})