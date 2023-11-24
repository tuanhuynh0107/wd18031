document.addEventListener('DOMContentLoaded', function () {
    var cardTitleElements = document.querySelectorAll('.yourCard__status');
    if (cardTitleElements.length > 0) {

        cardTitleElements.forEach(function (titleElement) {

            titleElement.classList.remove('custom-cl');

            var value = titleElement.innerText.trim().toLowerCase();
            console.log(value);

            if (value === 'chờ xác nhận') {
                titleElement.style.color = '#F66303';
                titleElement.classList.add('custom-cl');
            } else if (value === 'giao hàng thành công') {
                titleElement.style.color = '#08D411';
                titleElement.classList.add('custom-cl');
            }
            else if (value === 'thất bại') {
                titleElement.style.color = '#FF0000';
                titleElement.classList.add('custom-cl');
            }
            else if (value === 'đang vận chuyển') {
                titleElement.style.color = '#121BE5';
                titleElement.classList.add('custom-cl');
            }


        });
    } else {
        console.error('Không tìm thấy phần tử với lớp .yourCard__status');
    }
});