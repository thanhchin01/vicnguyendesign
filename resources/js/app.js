import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()

// Hiển thị ảnh ở portfolio
document.addEventListener("DOMContentLoaded", function () {
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



//Load splash
document.addEventListener('DOMContentLoaded', () => {
    const splash = document.getElementById('splash');
    if (!splash) return;
    // Nếu splash đã hiển thị trong session này → ẩn luôn
    if (sessionStorage.getItem('splashShown')) {
        splash.classList.add('hidden');
        return;
    }
    // Đánh dấu đã hiển thị splash
    sessionStorage.setItem('splashShown', 'true');
    // Hiển thị splash rồi ẩn sau 3s
    setTimeout(() => {
        splash.classList.add('opacity-0');

        setTimeout(() => {
            splash.classList.add('hidden');
        }, 1000);
    }, 3000);
});



//JS gửi liên hệ
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    if (!form) return;
    const submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        submitBtn.disabled = true;
        submitBtn.innerText = 'Sending...';
        try {
            const response = await fetch('/contact', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('[name=_token]').value,
                    'Accept': 'application/json'
                },
                body: new FormData(form)
            });
            const data = await response.json();

            if (!response.ok) {
                throw data;
            }
            toastr.success(data.message);

            form.reset();
        } catch (error) {
            if (error.errors) {
                Object.values(error.errors).flat().forEach(msg => {
                    toastr.error(msg);
                });
            } else {
                toastr.error('Có lỗi xảy ra, vui lòng thử lại');
            }
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerText = 'Send';
        }
    });
});


//JS liên hệ của site figma
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForms');
    if (!form) return;
    const submitBtn = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        submitBtn.disabled = true;
        submitBtn.innerText = 'Sending...';

        try {
            const response = await fetch('/new/designrequest', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('[name=_token]').value,
                    'Accept': 'application/json'
                },
                body: new FormData(form)
            });

            const data = await response.json();

            if (!response.ok) {
                throw data;
            }
            toastr.success(data.message);

            form.reset();

        } catch (error) {
            if (error.errors) {
                Object.values(error.errors).flat().forEach(msg => {
                    toastr.error(msg);
                });
            } else {
                toastr.error('Có lỗi xảy ra, vui lòng thử lại');
            }

        } finally {
            submitBtn.disabled = false;
            submitBtn.innerText = 'Send';
        }
    });
});
