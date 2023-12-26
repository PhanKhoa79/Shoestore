//ranger price slider
const rangeInput = document.querySelectorAll(".range-input input"),
priceInput = document.querySelectorAll(".price-input input"),
range = document.querySelector(".slider-product .progress");
let priceGap = 10000;

priceInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minPrice = parseInt(priceInput[0].value),
        maxPrice = parseInt(priceInput[1].value);
        document.querySelector(".from-price").textContent = minPrice.toLocaleString('vi-VN');
        document.querySelector(".to-price").textContent = maxPrice.toLocaleString('vi-VN');  
        if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
            if(e.target.className === "input-min"){
                rangeInput[0].value = minPrice;
                range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
            }else{
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
    });
});

rangeInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minVal = parseInt(rangeInput[0].value),
        maxVal = parseInt(rangeInput[1].value);
        document.querySelector(".from-price").textContent = minVal.toLocaleString('vi-VN');
        document.querySelector(".to-price").textContent = maxVal.toLocaleString('vi-VN');  
        if((maxVal - minVal) < priceGap){
            if(e.target.className === "range-min"){
                rangeInput[0].value = maxVal - priceGap
            }else{
                rangeInput[1].value = minVal + priceGap;
            }
        }else{
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
    });
});

//hiển thị hãng giày theo danh mục
function showBrand(selectedCategoryId) {
    // Gửi yêu cầu AJAX để lấy các hãng dựa trên danh mục được chọn
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Xử lý phản hồi từ máy chủ và cập nhật thẻ select "Hãng"
            var typesSelect = document.getElementById("typeSelect");
            typesSelect.innerHTML = ""; // Đặt một option mặc định
            var types = JSON.parse(xhr.responseText); //  máy chủ trả về một danh sách các hãng dưới dạng JSON
            for (var i = 0; i < types.length; i++) {
                var option = document.createElement("option");
                option.value = types[i].id_type;
                option.text = types[i].name_type;
                typesSelect.appendChild(option);
            }
        }
    };

    xhr.open("GET", "brand.php?category_id=" + selectedCategoryId, true);
    xhr.send();
}

function updateCategoryPath(categoryName) {

    localStorage.setItem('categoryPath', categoryName);

    let categoryPathSpan = document.getElementById('category-path');
    categoryPathSpan.textContent =  categoryName;

}

window.onload = function() {
    let storedCategory = localStorage.getItem('categoryPath');
    if (storedCategory) {
        let categoryPathSpan = document.getElementById('category-path');
        categoryPathSpan.textContent = storedCategory;
    }
};

function Readmore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("btnReadMore");
    
    var iconElementDown = document.createElement("i");
    iconElementDown.className = "bx bx-chevrons-down bx-sm";

    var iconElementUp = document.createElement("i");
    iconElementUp.className = "bx bx-chevrons-up bx-sm";

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = iconElementDown.outerHTML + "Xem thêm";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = iconElementUp.outerHTML + "Ẩn bớt";
      moreText.style.display = "inline";
    }
  }

//update size
var swatches = document.querySelectorAll(".ux-swatch");

// Lặp qua mỗi thẻ "ux-swatch" và thêm sự kiện click cho nó
swatches.forEach(function(swatch) {
    swatch.addEventListener("click", function() {
        // Lấy giá trị size từ thuộc tính "data-size"
        var selectedSize = swatch.getAttribute("data-size");

        // Lấy thẻ select
        var selectSize = document.querySelector("select[name='size']");

        // Chọn giá trị tương ứng trong thẻ select
        selectSize.value = selectedSize;

        swatches.forEach(function(swatch) {
            swatch.classList.remove("size-selected");
        });

        // Thêm lớp "size-selected" vào swatch đã chọn
        swatch.classList.add("size-selected");
    });
});

//tăng giảm số lượng sản phẩm giỏ hàng
// Lấy các phần tử HTML sử dụng các class
const plusButtons = document.querySelectorAll(".plus_quantity");
const minusButtons = document.querySelectorAll(".minus_quantity");
const inputQuantities = document.querySelectorAll(".input_quantity");

// Xử lý sự kiện khi click vào nút "plus"
plusButtons.forEach((plusButton) => {
    plusButton.addEventListener("click", function () {
        const productId = plusButton.getAttribute("data-product-id");
        const inputQuantity = document.querySelector(`#quantity_selected_${productId}`);
        inputQuantity.value = parseInt(inputQuantity.value) + 1;
        // Gửi yêu cầu AJAX để cập nhật giá trị số lượng
        //updateQuantity(productId, 1);
        updateQuantity(productId, inputQuantity.value);
        updateProductPrice(productId, inputQuantity.value);
    });
});

// Xử lý sự kiện khi click vào nút "minus"
minusButtons.forEach((minusButton) => {
    minusButton.addEventListener("click", function () {
        const productId = minusButton.getAttribute("data-product-id");
        const inputQuantity = document.querySelector(`#quantity_selected_${productId}`);
        const currentValue = parseInt(inputQuantity.value);
        if (currentValue > inputQuantity.min) {
            inputQuantity.value = currentValue - 1;
            // Gửi yêu cầu AJAX để cập nhật giá trị số lượng
            //updateQuantity(productId, -1);
            updateQuantity(productId, inputQuantity.value);
            updateProductPrice(productId, inputQuantity.value);
        }
    });
});

function updateQuantity(productId, newQuantity) {
    // Gửi yêu cầu AJAX để cập nhật số lượng sản phẩm
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../default/update_quantity.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Xử lý phản hồi từ máy chủ (nếu cần)
        }
    };
    
    // Chuẩn bị dữ liệu cần gửi
    const data = new URLSearchParams();
    data.append("productId", productId);
    data.append("quantity", newQuantity);

    // Gửi yêu cầu
    xhr.send(data);
}
function updateProductPrice(productId, quantity) {
    // Tìm thẻ span chứa giá sản phẩm dựa trên productId
    const priceElement = document.querySelector(`.product-price[data-product-id="${productId}"]`);
    
    // Lấy giá gốc từ thuộc tính data-product-price
    const originalPrice = parseFloat(priceElement.getAttribute("data-product-price"));
    
    // Tính giá mới bằng cách nhân giá gốc với số lượng
    const newPrice = originalPrice * quantity;
    // Hiển thị giá mới trên trang
    priceElement.textContent = newPrice.toLocaleString("vi-VN") + "₫";
}


       