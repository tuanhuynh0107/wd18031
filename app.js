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


function hendelPlusQtyProdct(x) {
    var parentQty = x.parentElement;
    var chidrenValus = parentQty.children[1];
    var chidrenValusNew = +chidrenValus.value + 1;
    chidrenValus.value =  chidrenValusNew;
    var index = parentQty.children[2].value;
    console.log(index);
    var xhr = new XMLHttpRequest();

    // Xác định phương thức và URL
    xhr.open("POST", "update_cart.php", true);

    // Xác định tiêu đề yêu cầu
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Xử lý sự kiện khi yêu cầu được gửi đi và nhận được phản hồi
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };

    // Chuẩn bị dữ liệu để gửi đi
    var data = "index=" + index + "&qtyPro=" + chidrenValusNew;

    // Gửi yêu cầu
    xhr.send(data);

    // console.log(data);

    // Cập nhật giá trị trong trình duyệt mà không cần đợi phản hồi từ server
    chidrenValus.value = chidrenValusNew;
    // console.log(chidrenValus.value);
}
function hendelReduxQtyProdct(x) {
    var parentQty = x.parentElement;
    var chidrenValus = parentQty.children[1];
    var chidrenValusNew = +chidrenValus.value - 1;
    chidrenValus.value =  chidrenValusNew;
    var index = parentQty.children[2].value;
    var xhr = new XMLHttpRequest();

    // Xác định phương thức và URL
    xhr.open("POST", "update_cart.php", true);

    // Xác định tiêu đề yêu cầu
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Xử lý sự kiện khi yêu cầu được gửi đi và nhận được phản hồi
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };

    // Chuẩn bị dữ liệu để gửi đi
    var data = "index=" + index + "&qtyPro=" + chidrenValusNew;

    // Gửi yêu cầu
    xhr.send(data);

    console.log(data);

    // Cập nhật giá trị trong trình duyệt mà không cần đợi phản hồi từ server
    chidrenValus.value = chidrenValusNew;
    console.log(chidrenValus.value);
}



function changeTransport() {
    // Lấy phần tử select
    var selectElement = document.getElementById("transportSelect");
    
    // Lấy giá trị được chọn
    var selectedValue = selectElement.value;
    
    // Lấy phần tử span chứa tên đơn vị vận chuyển
    var transportNameElement = document.getElementById("transportName");

    // Cập nhật nội dung của phần tử span
    switch (selectedValue) {
        case "1":
            transportNameElement.textContent = "Grab";
            break;
        case "2":
            transportNameElement.textContent = "Bee";
            break;
        case "3":
            transportNameElement.textContent = "Ahamove";
            break;
        case "4":
            transportNameElement.textContent = "Sv xanh";
            break;
        default:
            transportNameElement.textContent = "JHN Exxpress";
    }
}





