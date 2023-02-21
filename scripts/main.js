$(document).ready(function () {
    $('#front').click(function () {
        let city = $('#city').val()
        let number = getNum(city); //Можно было бы и без функции, и можно получать значение в самой функции.
        //Накостылировал, конечно...
        window.location.href = 'pages/front.php?num=' + number;
    })

})
function getNum(city) {
    let number = '';
    switch (city) {
        case 'moscow':
            number = '555-35-35' //Тут, вообще, можно и рандомными числами заполнять, но, думаю, для это задачи такое не надо делать)
            break;
        case 'kazan':
            number = '666-36-36'
            break;
        case 'sochi':
            number = '777-37-37'
            break;
        default:
            number = 'DIGITS'
    }
    return number;
}