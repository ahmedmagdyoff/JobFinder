document.addEventListener('DOMContentLoaded', () => {
    
    // تعريف العناصر
    const loginForm = document.getElementById('loginForm');
    const passwordInput = document.getElementById('password');
    const togglePasswordIcon = document.getElementById('togglePassword');
    const submitBtn = document.getElementById('submitBtn');
    const btnText = document.querySelector('.btn-text');
    const loadingIcon = document.querySelector('.loading-icon');

    // 1. وظيفة إظهار/إخفاء كلمة المرور
    togglePasswordIcon.addEventListener('click', () => {
        // لو النوع password خليه text والعكس
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // تغيير شكل الأيقونة (عين مفتوحة / مقفولة)
        togglePasswordIcon.classList.toggle('fa-eye');
        togglePasswordIcon.classList.toggle('fa-eye-slash');
    });

    // 2. وظيفة إرسال النموذج
    loginForm.addEventListener('submit', (e) => {
        e.preventDefault(); // منع إعادة تحميل الصفحة

        // مسح رسائل الخطأ القديمة (لو حبيت تضيف منطق تحقق معقد)
        // هنا هنعمل محاكاة لعملية تسجيل الدخول
        
        startLoading();

        // محاكاة انتظار السيرفر (ثانيتين)
        setTimeout(() => {
            stopLoading();
            alert('تم تسجيل الدخول بنجاح! (هنا يتم توجيه المستخدم)');
            // window.location.href = 'dashboard.html'; // مثال للتوجيه
        }, 2000);
    });

    // دوال مساعدة للزر
    function startLoading() {
        submitBtn.disabled = true; // تعطيل الزر
        submitBtn.style.opacity = '0.7';
        btnText.textContent = 'جاري التحقق...';
        loadingIcon.classList.remove('hidden');
    }

    function stopLoading() {
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
        btnText.textContent = 'تسجيل الدخول';
        loadingIcon.classList.add('hidden');
    }
});