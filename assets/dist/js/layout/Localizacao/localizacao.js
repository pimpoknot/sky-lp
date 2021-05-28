document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.more-info-button')) {
        var button = document.querySelector('.more-info-button');
        var divInformation = document.querySelector('.box-container-iframe .information');
        var divFilter = document.querySelector('.box-container-iframe .filter');

        button.onclick = function () {
            divInformation.style = 'opacity: 0';
            divFilter.style = 'opacity: 0';
            setTimeout(function () {
                divInformation.classList.add('d-none');
                divFilter.classList.add('d-none');
            }, 300);
        }
    }
});