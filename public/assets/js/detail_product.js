function decQuantity() {
    var quantity =  parseInt(document.querySelector('input[name="quantity"]').value)
    if (quantity > 1)
        quantity -= 1;
        document.querySelector('input[name="quantity"]').value = quantity
}

function incQuantity() {
    var quantity =  parseInt(document.querySelector('input[name="quantity"]').value)
    if (quantity < 99)
        quantity += 1;
    
        document.querySelector('input[name="quantity"]').value = quantity
}

document.querySelector('input[name="quantity"]').onchange = (event) => {
    document.querySelector('input[name="quantity"]').value = isNaN(parseInt(document.querySelector('input[name="quantity"]').value)) ? 1 : parseInt(document.querySelector('input[name="quantity"]').value);
}

function showCommentReview(id_review) {
    document.querySelector(`.comment-review-${id_review}`).classList.toggle('d-none');
    document.querySelector(`.comment-review-${id_review}`).classList.toggle('animate__fadeInDown');

}

function changeContent(element) {
    for(let item of element.parentElement.children) {
            item.classList.remove('active');
        } 
        element.classList.add('active');
    var content = document.querySelector(element.getAttribute('content'));
    for(let item of content.parentElement.children) {
        item.classList.remove('active');
    } 
    content.classList.add('active');

}