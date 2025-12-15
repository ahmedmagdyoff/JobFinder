// تبديل نوع الحساب (باحث / صاحب عمل)
function setAccountType(type) {
    // تحديث الحقل المخفي
    document.getElementById('accountType').value = type;

    // تحديث شكل الأزرار
    const btnSeeker = document.getElementById('btnSeeker');
    const btnEmployer = document.getElementById('btnEmployer');

    if (type === 'seeker') {
        btnSeeker.classList.add('active');
        btnEmployer.classList.remove('active');
    } else {
        btnEmployer.classList.add('active');
        btnSeeker.classList.remove('active');
    }
}

document.addEventListener('DOMContentLoaded', () => {

    // 1. إظهار/إخفاء كلمات المرور (لكل الحقول)
    const toggleIcons = document.querySelectorAll('.toggle-password');

    toggleIcons.forEach(icon => {
        icon.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');
            const input = document.getElementById(targetId);
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);

            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    });

    // 2. التحقق من تطابق كلمة المرور وقوتها
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('confirmPassword');
    const matchError = document.getElementById('matchError');
    const strengthBar = document.querySelector('.strength-bar');

    // منطق شريط القوة (بسيط للمظهر)
    passwordInput.addEventListener('input', function () {
        const val = this.value;
        let strength = 0;
        if (val.length > 5) strength += 30;
        if (val.length > 8) strength += 30;
        if (/[A-Z]/.test(val) && /[0-9]/.test(val)) strength += 40;

        strengthBar.style.width = strength + '%';

        if (strength < 40) strengthBar.style.backgroundColor = '#ef4444'; // أحمر
        else if (strength < 80) strengthBar.style.backgroundColor = '#f59e0b'; // برتقالي
        else strengthBar.style.backgroundColor = '#10b981'; // أخضر
    });

    // 3. عملية الإرسال
    const form = document.getElementById('signupForm');
    const submitBtn = document.getElementById('submitBtn');
    const btnText = document.querySelector('.btn-text');
    const loadingIcon = document.querySelector('.loading-icon');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        // التأكد من التطابق
        if (passwordInput.value !== confirmInput.value) {
            matchError.textContent = 'كلمتا المرور غير متطابقتين';
            return;
        } else {
            matchError.textContent = '';
        }

        // بدء التحميل
        submitBtn.disabled = true;
        submitBtn.style.opacity = '0.7';
        btnText.textContent = 'جاري الإنشاء...';
        loadingIcon.classList.remove('hidden');

        // محاكاة إرسال البيانات
        setTimeout(() => {
            const type = document.getElementById('accountType').value;
            const typeAr = type === 'seeker' ? 'باحث عن عمل' : 'صاحب عمل';

            alert(`تم إنشاء الحساب بنجاح كـ (${typeAr})!`);

            // إعادة تعيين النموذج
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';
            btnText.textContent = 'إنشاء الحساب';
            loadingIcon.classList.add('hidden');
            form.reset();
            setAccountType('seeker'); // رجعه للأصل
            strengthBar.style.width = '0%';
        }, 2000);
    });
});