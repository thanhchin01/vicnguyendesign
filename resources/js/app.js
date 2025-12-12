import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()

// Hiển thị ảnh ở portfolio
document.addEventListener("DOMContentLoaded", function() {
    const allElements = Array.from(document.querySelectorAll('.fade-in-up'));
    const batchSize = 25; // số ảnh load mỗi lần
    let currentIndex = 0;

    // Ẩn tất cả trước
    allElements.forEach(el => {
        el.style.display = "none";
    });

    // Hàm load 1 batch ảnh
    function loadBatch() {
        const nextIndex = currentIndex + batchSize;
        const batch = allElements.slice(currentIndex, nextIndex);

        batch.forEach(el => {
            el.style.display = "block"; // hiện ảnh
            observer.observe(el); // apply animation
        });

        currentIndex = nextIndex;
    }

    // IntersectionObserver để animate fade-in-up
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, {
        threshold: 0.2
    });

    // Observer để load batch tiếp theo khi chạm gần cuối trang
    const bottomObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                loadBatch();
                if (currentIndex >= allElements.length) {
                    bottomObserver.disconnect(); // hết ảnh → dừng
                }
            }
        });
    });

    // Tạo 1 marker cuối trang để trigger load batch tiếp theo
    const bottomMarker = document.createElement('div');
    bottomMarker.style.height = '50px';
    document.body.appendChild(bottomMarker);
    bottomObserver.observe(bottomMarker);

    // Load batch đầu tiên
    loadBatch();
});
