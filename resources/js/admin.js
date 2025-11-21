import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()



document.addEventListener('DOMContentLoaded', function () {
    CKEDITOR.replace('editor', {
        height: 350,

        // Plugin cần thiết
        extraPlugins: 'uploadimage,font,colorbutton,justify',

        // Loại bỏ plugin không cần
        removePlugins: 'iframe,div,flash,smiley,pagebreak,about,forms',

        // Toolbar tối ưu cho bài viết
        toolbar: [{
            name: 'styles',
            items: ['Format', 'Font', 'FontSize']
        },
        {
            name: 'basicstyles',
            items: ['Bold', 'Italic', 'Underline', 'RemoveFormat']
        },
        {
            name: 'colors',
            items: ['TextColor', 'BGColor']
        },
        {
            name: 'paragraph',
            items: ['NumberedList', 'BulletedList', 'Blockquote']
        },
        {
            name: 'align',
            items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
        },
        {
            name: 'insert',
            items: ['Image']
        },
        {
            name: 'links',
            items: ['Link', 'Unlink']
        },
        {
            name: 'tools',
            items: ['Maximize']
        }
        ],

        // Cho phép upload ảnh (bạn sẽ thêm route xử lý riêng)
        filebrowserUploadUrl: "/upload-image?_token={{ csrf_token() }}",
        filebrowserUploadMethod: 'form',
    });
});
