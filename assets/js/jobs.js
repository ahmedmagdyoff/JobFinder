// الحصول على جميع أزرار التبديل (Toggle Buttons)
const toggleButtons = document.querySelectorAll('.toggle-details-btn');

// إضافة مستمع حدث (Event Listener) لكل زر
toggleButtons.forEach(button => {
    button.addEventListener('click', function() {
        // الحصول على معرف (ID) بطاقة الوظيفة المرتبطة بهذا الزر
        const jobId = this.getAttribute('data-job-id');
        
        // الحصول على عنصر تفاصيل الوظيفة داخل البطاقة
        // نستخدم querySelector داخل البطاقة لضمان استهداف التفاصيل الصحيحة
        const jobCard = document.getElementById(jobId);
        const detailsDiv = jobCard.querySelector('.job-details');

        // تبديل (Toggle) الكلاس 'hidden' لعرض أو إخفاء التفاصيل
        detailsDiv.classList.toggle('hidden');

        // تغيير نص الزر ليعكس حالته الجديدة
        if (detailsDiv.classList.contains('hidden')) {
            this.textContent = 'عرض التفاصيل';
        } else {
            this.textContent = 'إخفاء التفاصيل';
        }
    });
});