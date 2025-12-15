document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');

    // منع الإرسال الافتراضي وإضافة رسالة نجاح بسيطة
    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // يمكن هنا إضافة كود إرسال البيانات (AJAX/Fetch)
        
        // رسالة نجاح مؤقتة للمثال
        const submitButton = contactForm.querySelector('.submit-button');
        submitButton.textContent = 'تم الإرسال بنجاح! 🎉';
        submitButton.style.background = 'linear-gradient(to right, #28a745, #218838)'; // لون أخضر للنجاح
        
        setTimeout(() => {
            submitButton.textContent = 'إرسال';
            submitButton.style.background = 'var(--gradient-main)'; // إعادة التدرج الأصلي
            contactForm.reset();
        }, 3000);
    });

    // إضافة تأثير التمرير للأيقونات (اختياري - يمكن تنفيذه بالكامل بـ CSS)
    const contactCards = document.querySelectorAll('.contact-card');
    
    contactCards.forEach(card => {
        card.addEventListener('mousedown', () => {
            card.style.transform = 'scale(0.95)'; // تأثير الضغط
        });
        card.addEventListener('mouseup', () => {
            card.style.transform = 'scale(1)'; // العودة عند ترك الضغط
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'scale(1)'; // العودة في حال الخروج بالماوس
        });
    });

});